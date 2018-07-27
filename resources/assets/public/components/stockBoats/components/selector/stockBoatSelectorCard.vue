		
<template>

    <div @click="$emit('chosen',boat)" class="tile is-parent stockcard is-4">

        <article class="tile is-child notification pointer is-info box card">
            <header class="card-header">
                <p class="subtitle">{{ boat.title }}</p>
            </header>
                

            <div class="card-image">
                <figure class="image is-4by3 nosquash"  v-bind:style="stylingRule"></figure>
            </div>

            <div class="card-content">
                <div class="content has-text-centered">{{ boat.short_summary }}</div>
            </div>
            
            <footer class="card-footer">
                <a class="card-footer-item view-detail-button"><span>MORE INFO</span></a>
            </footer>           
            

        </article>

    </div>

   
</template>

<script>

  

    export default {

        /*methods:{
            setDetail(){
                //this.shared.chosen.detail = this.boat;
            }

        },*/

        computed:{
            
            primaryImage(){
                let a = _.filter(this.boat.images, ['id',this.boat.primary_image_id]);
                if(a.length > 0){
                    return a[0].src;
                }else{
                    return 0;
                }
                
            },
            stylingRule(){
                return "background-image:url('"+this.primaryImage+"');";
            }
        },

/*        data: function() {
		    return{
		        boat:this.boat,	       
		      }
	    },*/

	    props: [
		    'boat'
	    ], 

    };
</script>



<style lang="scss">
    @import '~sass/variables';
    .stockcard{ 
        max-width:35%;
        .tile.is-child{
            padding:0px;
            .subtitle{
                padding: 20px 0px 20px 0px;
                margin:auto;
            }
        }
        .card-footer{
            position:absolute;
            left:0;
            right:0;
            bottom:0;   

            .view-detail-button{
                background-color:$brand-secondary;
                text-decoration:none;
                span{
                    padding:6px;
                    border:1px solid $brand-primary;
                    font-size: 14px;
                    letter-spacing: .1rem;
                    text-transform: uppercase;
                }
            }
            .view-detail-button:hover{
                background-color:$text-light;
                color:$text-dark;
            }
            
        }
        .card-content{
            padding-bottom:85px;
        }

    }

@media only screen and (max-width: $small-screen){
    .stockcard{
        max-width:100%;
    }
}
</style>

		