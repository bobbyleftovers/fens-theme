<template>
    <div>

        <div class="step-content" id="step-c3">
            <div id="confirmed-icon">
                <img v-bind:src="assetURL + 'images/confirmation.svg'" alt="Contribution received.">
            </div>
            <h1 id="thankyou">Thank you, <span class="blue" id="name">{{fname}}</span>.</h1>
            <p>Your contribution of <span class="bold"><span class="amount">{{donationAmount | currency}}</span></span> has been received by the Bipartisan Policy Center. Please check your email for a receipt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ut leo quis enim porta eleifend. Donec at ante in nunc cursus gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ut leo quis enim porta eleifend. Donec at ante in nunc cursus gravida. Donec at ante in nunc cursus gravida. Etiam rhoncus orci vulputate, laoreet ligula auctor, venenatis massa.</p>
            
            <div id="social-share">
                <h1>Share your contribution</h1>

                <div id="social-icons">
                    <img v-bind:src="assetURL + 'images/facebook.svg'" alt="Facebook">
                    <img v-bind:src="assetURL + 'images/twitter.svg'" alt="Twitter">
                    <img v-bind:src="assetURL + 'images/email.svg'" alt="Email">
                </div>
            </div>

        </div>

        <div class="step-action" id="step-a3">
            <a class="button btn-red" href="http://bipartisanpolicy.org" id="step-a3-back">Back to BPC</a>
        </div>
    </div><!-- /.main -->
</template>

<script>
    export default {
        name: 'DonationThanks',
        data () {
            return {
                assetURL: window.location.origin + '/wp-content/themes/fens-theme/assets/',
                fname: 'Bobby',
                donationAmount: 100
            }
        }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>