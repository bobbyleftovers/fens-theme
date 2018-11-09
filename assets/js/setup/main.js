import Vue from 'vue';
// import ProductButton from '../components/ProductButton';

Vue.component('donationsMain', {
    components: {
        // ProductButton
    },
    data() {
        return {

            // submissions and params
            donationAmount: null,
            customAmount: null,
            recurring: false,
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
            productsLoading: false
        }
    },

    methods: {

        setCustomPrice:function(){

        },
        setDonation:function(){}
    },   
    computed: {}

});
