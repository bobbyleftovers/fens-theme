import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex)
const store = new Vuex.Store({
    state: {
        donor: {
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
    },
    getters: {
        donor: state => state.donor,
        donation: state => state.donor.donation
    },
    mutations: {
        setDonor: (state,payload) => state.donor = payload,
        setAmount: (state,payload) => state.donor.donation = payload
    }
});

export default store;