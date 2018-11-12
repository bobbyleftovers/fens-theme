<template>
    <div>

        <form @submit.prevent="placeOrder">
            <div class="step-content" id="step-c2">

                <input type="hidden" v-model="donor.donation"/>

                <div class="form-group">
                    <h2 class="blue">Contact Information</h2>
                    <div class="form-item">
                        <label for="fname">First Name</label>
                        <input type="text" id="fname" v-model="donor.fname" placeholder="John">
                    </div>
                    <div class="form-item">
                        <label for="lname">Last Name</label>
                        <input type="text" id="lname" v-model="donor.lname" placeholder="Smith">
                    </div>
                    <div class="form-item">
                        <label for="company">Company</label>
                        <input type="text" id="company" v-model="donor.company" placeholder="Company">
                    </div>
                    <div class="form-item">
                        <label for="email">Email</label>
                        <input type="text" id="email" v-model="donor.email" placeholder="john.smith@email.com">
                    </div>
                </div>

                <div class="form-group">
                    <h2 class="blue">Billing Address</h2>
                    <div class="form-item">
                        <label for="address1">Address 1</label>
                        <input type="text" id="address1" v-model="donor.address1" placeholder="1600 Pennsylvania Ave NW">
                    </div>
                    <div class="form-item">
                        <label for="address2">Address 2</label>
                        <input type="text" id="address2" v-model="donor.address2" placeholder="Apt. 1">
                    </div>
                    <div class="form-item">
                        <label for="city">City</label>
                        <input type="text" id="city" v-model="donor.city" placeholder="Washington">
                    </div>
                    <div class="form-item">
                        <label for="state">State</label>
                        <select id="state" v-model="donor.state">
                            <option value="AL">AL</option>
                            <option value="AK">AK</option>
                            <option value="AR">AR</option>	
                            <option value="AZ">AZ</option>
                            <option value="CA">CA</option>
                            <option value="CO">CO</option>
                            <option value="CT">CT</option>
                            <option value="DC">DC</option>
                            <option value="DE">DE</option>
                            <option value="FL">FL</option>
                            <option value="GA">GA</option>
                            <option value="HI">HI</option>
                            <option value="IA">IA</option>	
                            <option value="ID">ID</option>
                            <option value="IL">IL</option>
                            <option value="IN">IN</option>
                            <option value="KS">KS</option>
                            <option value="KY">KY</option>
                            <option value="LA">LA</option>
                            <option value="MA">MA</option>
                            <option value="MD">MD</option>
                            <option value="ME">ME</option>
                            <option value="MI">MI</option>
                            <option value="MN">MN</option>
                            <option value="MO">MO</option>	
                            <option value="MS">MS</option>
                            <option value="MT">MT</option>
                            <option value="NC">NC</option>	
                            <option value="NE">NE</option>
                            <option value="NH">NH</option>
                            <option value="NJ">NJ</option>
                            <option value="NM">NM</option>			
                            <option value="NV">NV</option>
                            <option value="NY">NY</option>
                            <option value="ND">ND</option>
                            <option value="OH">OH</option>
                            <option value="OK">OK</option>
                            <option value="OR">OR</option>
                            <option value="PA">PA</option>
                            <option value="RI">RI</option>
                            <option value="SC">SC</option>
                            <option value="SD">SD</option>
                            <option value="TN">TN</option>
                            <option value="TX">TX</option>
                            <option value="UT">UT</option>
                            <option value="VT">VT</option>
                            <option value="VA">VA</option>
                            <option value="WA">WA</option>
                            <option value="WI">WI</option>	
                            <option value="WV">WV</option>
                            <option value="WY">WY</option>
                        </select>		              
                    </div>
                    <div class="form-item">
                        <label for="zip">Zip Code</label>
                        <input type="number" id="zip" v-model="donor.zip" placeholder="20500">
                    </div>
                </div>
                
                <div class="form-group">
                    <h2 class="blue">Payment Information</h2>
                    <div class="form-item">
                        <label for="ccnumber">Credit Card #</label>
                        <input type="text" id="ccnumber" v-model="donor.card.ccnumber" placeholder="4444 3333 2222 1111">
                    </div>
                    <div class="form-item">
                        <label for="expiration">Expiration</label>
                        <input type="number" id="expiration" v-model="donor.card.expiration" placeholder="12/24">
                    </div>
                    <div class="form-item">
                        <label for="cvv">CVV</label>
                        <input type="number" id="cvv" v-model="donor.card.cvv" placeholder="123">
                    </div>
                </div>

                <div id="confirmation">
                    <h2 class="blue">Confirmation</h2>
                    <p>Your card will be charged <span id="frequency" class="bold">once</span> in the amount of <span class="bold"><span class="amount">{{donor.donation.amount | currency}}</span></span></p>
                    <p class="legal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras venenatis congue erat.</p>
                </div>

            </div>

            <div class="step-action" id="step-a2">
                <router-link to="/" class="button btn-grey" id="step-a2-back">Back</router-link>
                <button v-bind:click="placeOrder" class="button btn-red" @disabled="!formValid" id="step-a2-next">Donate {{donor.donation.amount | currency}}</button>
            </div>
        </form> 

    </div><!-- /.main -->

</template>

<script>
    export default {
        name: 'DonationDetails',
        data () {
            return {
                assetURL: window.location.origin + '/wp-content/themes/fens-theme/assets/',
                donor:{
                    donation: {
                        amount: null,
                        recurring: false
                    },
                    fname: null,
                    lname: null,
                    company: null,
                    email: null,
                    address1: null,
                    address2: null,
                    city: null,
                    state: null,
                    zip: null,
                    card: {
                        ccnumber: null,
                        expiration: null,
                        cvv: null
                    }
                }
            }
        },
        methods: {
            placeOrder: function() {
                const url = 'http://bpc-support.localhost/wp-json/wc/v2/products';
                console.log('PLACE ORDER');
                axios.get(url)
                    .then(res => {
                        console.log('ROUTES: ',res.data);
                    })   
                    .catch(err => {
                        console.log('ERROR: ',err);
                    });
            }
        },
        computed: {
            formValid: function() {
                return false;
            }
        }
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>