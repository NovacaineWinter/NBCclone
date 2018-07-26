		
<template>

    <div class="container whitecontainer section tandc-page">

        <h2 class="title">Terms of business</h2>
        <div class="tile is-ancestor has-text-centered">

            <div class="tile is-parent">
                <div class="card is-child">
                    <header class="card-header">
                        <p class="card-header-title">
                            General Terms and Conditions
                        </p>
                    </header>

                    <div class="card-content">
                        <div class="content">
                           The general terms and conditions we apply when we conduct business.
                        </div>
                    </div>

                    <footer class="card-footer">
                        <a href="/docs/termsAndConditions.pdf" class="card-footer-item">Download</a>  
                    </footer>
                </div>                
            </div>

            <div class="tile is-parent">
                <div class="card is-child">
                    <header class="card-header">
                        <p class="card-header-title">
                            Deposit Agreement
                        </p>
                    </header>

                    <div class="card-content">
                        <div class="content">
                            Our terms for placing a non-refundable deposit
                        </div>
                    </div>

                    <footer class="card-footer">
                        <a href="/docs/depositAgreement.pdf" class="card-footer-item">Download</a>  
                    </footer>
                </div>
            </div>

            <div class="tile is-parent">
                <div class="card is-child">
                    <header class="card-header">
                        <p class="card-header-title">
                            Example Deposit Invoice
                        </p>
                    </header>

                    <div class="card-content">
                        <div class="content">
                            Example of the invoice you will receive when placing a deposit with us
                        </div>
                    </div>

                    <footer class="card-footer">
                        <a href="/docs/depositInvoice.pdf" class="card-footer-item">Download</a>  
                    </footer>
                </div>
            </div>     

        </div>

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
    };
</script>

<style lang="scss">
    .tandc-page{
        .card{
            .card-footer{
                bottom: 0;
                position: absolute;
                width: 100%;
            }
            .card-content{
                padding-bottom:70px;
            }
        }
    }
</style>