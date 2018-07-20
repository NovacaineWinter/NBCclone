		
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
                        <tr v-for="doc in target.files">
                            <td>{{doc.description}}</td>
                            <td><a class="button is-primary is-outlined" :href="doc.src">Download</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="column is-4"></div>
        </div> 
        
    </div>

</template>
<script>
    import stockTarget from '../../../sharedState.js';

    export default {
       
        data: function() {
            return{
                target:stockTarget.info,              
              }
        },

    };
</script>


<style lang="scss">
    @import '~sass/variables';

</style>