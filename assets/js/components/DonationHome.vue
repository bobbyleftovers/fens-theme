<template>
    <div>

        <div class="step-content" id="step-c1">
            <h1 class="red">Join us in finding actionable solutions to America’s toughest challenges.</h1>
            <p>The Bipartisan Policy Center is a recognized leader in bringing together all sides, regardless of party affiliation or political viewpoint—to tackle the critical challenges facing our nation. Support BPC by making a donation that ensures our work can continue. Share your impact using #Give2BPC on social media to spread the word that bipartisanship is necessary, and worth it.</p>
        
            <div id="price-buttons">
                <div class="price-button" v-bind:key="price" v-bind:class="{'price-selected':donationAmount == price && !customAmount}" v-on:click="setDonation(price)" v-for="price in donations.levels">{{price | currency}}</div>
                <input type="number" v-model="customAmount" class="price-button price-custom" placeholder="Custom">
            </div>

            <form>
                <input type="checkbox" v-model="recurring" id="recurring"> <p>Make this a <span class="bold">monthly</span> contribution. This can  be cancelled at any time.</p>
            </form>

            <p class="legal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras venenatis congue erat. Proin ut metus eu nunc convallis consectetur nec sit amet libero. Nullam nulla leo, rutrum vitae orci eu, faucibus euismod justo. Pellentesque fermentum luctus felis tincidunt sollicitudin. Nam a velit elementum, egestas nisl vitae, tincidunt enim. Quisque laoreet ligula mauris, ut tincidunt eros tincidunt nec. Donec porta sodales enim, eget mattis lectus faucibus sed. Curabitur suscipit lorem metus, id consectetur nulla volutpat tincidunt. Nam consequat metus enim, nec gravida lacus facilisis sed. Proin interdum porttitor malesuada.</p>
        </div>

        <div class="step-action" id="step-a1">
            <a href="https://bipartisanpolic.org" id="step-a1-back">{{'Back to Bipartisan Policy Center'}}</a>
            <router-link to="/details" class="button btn-red" id="step-a1-next">Continue</router-link>
        </div>
    </div><!-- /.main -->
</template>

<script>
    export default {
        name: 'DonationHome',
        data () {
            return {
                assetURL: window.location.origin + '/wp-content/themes/fens-theme/assets/',
                donationAmount: null,
                recurring: false,
                customAmount: null,
                donations: {
                    levels:[    
                        10,
                        25,
                        50,
                        100,
                        250,
                        500,
                        750,
                        1000
                    ],
                    custom: {
                        label: '',
                        cost: null
                    }
                },
            }
        },
        methods: {
            setDonation: function () {
                this.$store.commit('increment');
            },
            setCustomPrice: function() {
                //
            },
            setDonation: function(amount) {
                this.customAmount = null;
                this.donationAmount = amount;
            },
            updateState: function() {
                const donation = {
                    amount: this.donationAmount,
                    recurring: this.recurring
                }
                this.$store.commit('setAmount', donation);
            },
            noDonation: function() {
                this.$toast.open({
                    duration: 5000,
                    message: `Please specify a donation amount to proceed`,
                    position: 'is-bottom',
                    type: 'is-danger'
                })
            }
        },   
        computed: {
            isCustom: function() {
                if(this.customAmount){
                    this.donationAmount = this.customAmount;
                    return true;
                }
                return false;
            }
        },
        beforeRouteLeave (to, from, next) {
            console.log('BEFORE:',from);
            if(this.donationAmount == null){
                this.noDonation();
                return;
            }
            this.updateState();
            console.log(this.$store.getters.donation);
            next();
        }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>