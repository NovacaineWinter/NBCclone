		
<template>

    <div id="cookiebar" v-if="needToShow">

        <div id="cookieHeader">
           Nottingham Boat Co
        </div>

        <div id="cookieExplainer">
            
            <h3>Welcome to Nottingham Boat Co</h3>
        
            <p>We have many useful features on this website that help you to get your ideal boat out on the water. Many of these features rely on the use of cookies etc to allow them to function, you can use the site without giving us permission to set cookies, but many of the features will not work.</p>
            
            <div id="">
                <h3>Do you consent to us setting cookies?</h3>
                               
                    <button class="cookiebuttons" id="rejectCookies" @click="rejectCookies">No, I do not</button>
                    <button class="cookiebuttons" id="acceptCookies" @click="acceptCookies">Yes, I Give Permission</button>
                
                 <p> 
                    You can find out how we use cookies <router-link tag="a" to="cookie-policy">on this link.</router-link> You can change your preferences at any time using the <router-link tag="a" to="settings">settings link</router-link> in the footer. You can see how we manage your data<router-link tag="a" to="data-protection">On this link.</router-link>
                </p>

            </div>            
        </div>
    </div>
   
</template>

<script>

    //import endpoints from '../endpoints.js';   //relative path - beware

    export default {

        mounted() {        	

            if (document.cookie.indexOf("cookiesOk=") >= 0 || document.cookie.indexOf("noTrack=") >= 0) {
                this.needToShow = false;
            }else{
                this.needToShow = true;
            }
          
        },

        methods:{

            acceptCookies(){
                var d = new Date();
                d.setTime(d.getTime() + (365*24*60*60*1000));
                var expires = "expires="+ d.toUTCString();
                document.cookie = "cookiesOk=1;" + expires + ";path=/";
                this.needToShow = false;            
            },

            rejectCookies(){
                var d = new Date();
                d.setTime(d.getTime() + (365*24*60*60*1000));
                var expires = "expires="+ d.toUTCString();
                document.cookie = "noTrack=1;" + expires + ";path=/";
                this.needToShow = false;

                url=document.head.querySelector("[property=siteurl]").content.substring(document.head.querySelector("[property=siteurl]").content.indexOf(":") + 3);
                document.cookie = '_gid' + '=; Path=/; Domain=.'+url+'; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
                document.cookie = '_ga' + '=; Path=/; Domain=.'+url+'; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
                document.cookie = 'cookiesOk' + '=; Path=/; Domain=.'+url+'; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';

                var cookies = document.cookie.split(";");

                for (var i = 0; i < cookies.length; i++) {
                    var cookie = cookies[i];
                    var eqPos = cookie.indexOf("=");
                    var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
                    document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
                    document.cookie = name + '=; Path=/; Domain=.'+url+'; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
                    document.cookie = name + '=; Path=/; Domain='+url+'; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
                }


            }
        },

        
        data: function() {
		    return{
		        needToShow:true,		        
		      }
	    },
/*
	    props: [
		    'propsPassed'
	    ], */

    };
</script>



<style lang="scss">
    @import '~sass/variables';

    .cookiebuttons{
        margin:0px 10px;
        padding:20px;
    }

    #cookiebar{
        text-align: center;
        z-index:100;
    }
    #cookieHeader{
        text-transform: uppercase;
        font-size: 2vw;
        color:$text-light;
        background-color:$brand-primary;
    }
    #cookieExplainer{
        box-sizing: border-box;
        padding:5vw;
    }
    #acceptCookies{
        background-color: #ff7404;
        color:#fdfdfd;
        cursor:pointer;
    }
    #acceptCookies:hover{
        background-color: green;
        color:#fdfdfd;
    }
    #cookieExplainer h3,#cookieExplainer p{
        padding:10px 0px;
    }
    #cookiebar{
        position: fixed;
        top: 20vh;
        width: 80vw;
        right: 10vw;
        height: 60vh;
        background-color: #fdfdfd;
        border-bottom: 1px solid #e8e8e8;
        /* display:none; */
    }
    #cookieinfo{
        width:80vw;
        float:right;
        padding-top:19px;
    
    }

    @media only screen and (max-width: $small-screen){
       
        #cookiebar{
            height: 100vh;
            top: 0;
            left: 0;
            width: 100vw;
            overflow-y: scroll;
        }

    }

</style>

		