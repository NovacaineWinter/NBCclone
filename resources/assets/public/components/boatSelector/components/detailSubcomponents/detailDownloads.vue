		
<template>


    <div class="section squarewhitesection"> 
        <p class="has-text-centered title">Downloads</p>
        <div class="columns">
            <div class="column is-4"></div>
            <div class="column is-4">
                <table class="table is-striped is-fullwidth">
                    <thead>
                        <tr>
                            <th>Document</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="doc in imported.chosen.detail.files">
                            <td>{{doc.description}}</td>
                            <td><a class="button is-primary is-outlined" :href="doc.src">Download</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="column is-4"></div>
        </div> 
        <div class="has-text-centered">
            <router-link to="/terms-of-business" tag="a" class="subtitle">Be sure to check out our Terms of Business Page</router-link>
            <br>
            <router-link to="/terms-of-business" tag="a" class="button is-info is-outlined">Terms Of Business</router-link>
        </div>
        
    </div>

</template>
<script>
    import boatSelector from '../../sharedState.js';
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

        methods:{
            myMethod(){
                console.log('my method triggered');
            },
        },

        computed:{
            someNumber(){
                return 2+3;
            },          
        },
*/
        data: function() {
            return{
                imported:boatSelector,              
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

</style>