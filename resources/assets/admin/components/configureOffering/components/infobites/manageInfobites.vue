        
<template>
    <section class="section">
        <p class="title has-text-centered">Infobites</p>
        <div class="button is-info is-outlined is-pulled-right" @click="newInfobiteActive=true">Add New Infobite +</div>
  
    
         <info-bite v-for="(infobite,index) in theTarget.infobites" @deleteInfobite="deleteInfobite" :index="index" :infobite="infobite" :key="infobite.id"></info-bite>


        <new-infobite-modal 
            v-if="newInfobiteActive" 
            :modelname="theModel" 
            :targetinfo="theTarget" 
            @closeModal="newInfobiteActive=false">
        </new-infobite-modal>      
    </section>
   
</template>

<script>
    
    //import endpoints from '../endpoints.js';   //relative path - beware

    export default {
        /*
        mounted() {         
            
            axios.get(endpoints.someEndpoint)            
                .then(handleResponse.bind('data',this))

                .catch(function (error) {
                    console.log(error);            
                });

                function handleResponse(context,response){
                    //context is an alias for 'this'
                    context.someDataOnThis = response.data;
                }
        },
*/
        methods:{
            deleteInfobite(target){
                this.theTarget.infobites = _.reject(this.theTarget.infobites,{id:target});
            },
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
                theModel:this.modelname,
                theTarget:this.targetinfo,
                newInfobiteActive:false,
              }
        },

        props: [
            'modelname',
            'targetinfo'
        ], 

    };
</script>



<style lang="scss">
    @import '~sass/variables';

</style>

        