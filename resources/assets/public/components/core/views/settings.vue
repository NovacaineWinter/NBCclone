		
<template>
    <div class="container whitecontainer">
        <section class="section" v-if="unclicked">
            <p class="title">Manage your privacy settings</p>
            <p class="subtitle">Excercise your rights under the GDPR</p>
            <p>You can choose to revoke your permission for cookies at any time, all you need to do is click the button below and the cookies stored in your browser for this website will be deleted</p>
            <div class="button is-info is-outlined" @click="rejectCookies">I revoke permission for cookies</div>
        </section>
        <section class="section cookiereject" v-if="!unclicked">
            <p class="title has-text-centered">Cookies Deleted</p>
            <i class="fas fa-check"></i>
        </section>
    </div>
</template>

<script>

    //import endpoints from '../endpoints.js';   //relative path - beware

    export default {

        mounted() {        	
            
           setTimeout(() => {
                window.scrollTo(0, 0);
            }, 100);
        },

        methods:{
            rejectCookies(){
              

                let url=document.head.querySelector("[property=siteurl]").content.substring(document.head.querySelector("[property=siteurl]").content.indexOf(":") + 3);
                document.cookie = '_gid' + '=; Path=/; Domain=.'+url+'; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
                document.cookie = '_ga' + '=; Path=/; Domain=.'+url+'; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
                document.cookie = 'cookiesOk' + '=; Path=/; Domain=.nbc.wip; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';

                var cookies = document.cookie.split(";");

                for (var i = 0; i < cookies.length; i++) {                    
                    var cookie = cookies[i];
                    var eqPos = cookie.indexOf("=");
                    var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
                    document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
                    document.cookie = name + '=; Path=/; Domain=.'+url+'; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
                    document.cookie = name + '=; Path=/; Domain='+url+'; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
                }
                var d = new Date();
                d.setTime(d.getTime() + (365*24*60*60*1000));
                var expires = "expires="+ d.toUTCString();
                document.cookie = "noTrack=1;" + expires + ";path=/";
                this.unclicked = false;
            }
        },
/*
        computed:{
        	someNumber(){
        		return 2+3;
        	},        	
        },
*/
        data: function() {
		    return{
		        unclicked:true,		        
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
    .cookiereject{
        .fa-check{
            color:$brand-success;
            font-size:70px;
            margin-left:47%;
        }
    }
</style>

		