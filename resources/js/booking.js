import Multiselect from 'vue-multiselect';
import locations from './components/booking/locations.vue';
import courses from './components/booking/courses.vue';
import options from './components/booking/options.vue';
import accommodation from './components/booking/accommodation.vue';
import coursefrom from './components/booking/course-from.vue';
import billingDetails from './components/booking/billing-details.vue';
import airportInformaton from './components/booking/airport-information.vue';
import cart from './components/booking/cart.vue';


import contact from './contact.js';


import Datepicker from 'vuejs-datepicker';
Vue.component('datepicker', Datepicker);

// register globally
Vue.component('multiselect', Multiselect);
Vue.component('locations', locations);
Vue.component('courses', courses);
Vue.component('options', options);
Vue.component('accommodation', accommodation);
Vue.component('course-from', coursefrom);
Vue.component('billing-details', billingDetails);
Vue.component('airport-information', airportInformaton);
Vue.component('cart', cart);



Vue.component('contact', contact);


const app = new Vue({
    el: '#app',
    data:
    {
        locations: '',
        courses: '',
        options: '',
        dates: '',
        comments: '',
        students: '',
        priceaccommodation:'',
        accommodation: '',
        information: '',
        airport: '',
        total: '',
        terms: '',
        paymethods: '',
        peticion: false,
        errors: null
    },
    methods:{
        onLocationsField: function(value) {
            console.log('sasa');
        },

        onDateField: function(value) {
            this.dates = value;
        },

        onCommentField: function(value) {
            this.comments = value;
            if(this.locations.includes('1') || this.locations.includes('2') || this.locations.includes('3')){
                $('#collapseFive').collapse('show');
            }
            else{
                $('#collapseSix').collapse('show');
            }
        },

        previous(){
          $('#collapseEight').collapse('show');
        },

        booking: function(e){
          this.errors = '';
          this.peticion = false;
          $('#loadinBooking').modal('show');
          var bk = this;
          var x = true;

          $('#loadinBooking').on('shown.bs.modal', function (e) {
            //console.log(e);
            
            if(x)
            {
              var bookingValue = {
                options: bk.options,
                locations: bk.locations,
                students: bk.students,
                'g-recaptcha-response': document.getElementsByName("g-recaptcha-response")[0].value,
                'total': bk.total,
                'terms': bk.terms,
                'payment': bk.paymethods,
                'comments': bk.comments,
                'dates': bk.dates,
                'accommodations': bk.priceaccommodation
              };
              Object.assign(bookingValue, bk.information);
              Object.assign(bookingValue, bk.accommodation);
              Object.assign(bookingValue, bk.airport);
              axios
              .post('/booking',bookingValue)
              .then(
                  (response) => {

                    x = false;
                    bk.peticion = true;

                    bk.paymethods = response.data;
                  }
              )
              .catch(
                  error => {

                    bk.peticion = false;

                    if(error.response.data.errors){
                      bk.errors=error.response.data.errors;
                    }
                    else{
                      bk.errors={error: ['Something went wrong while we processed your reservation: ' + error.response.data.message ]}; 
                    }
                    $('#loadinBooking').modal('hide');

                    onloadCallback();


                    x = false;
                    grecaptcha.reset();
                  }
              );

            }
            







            // do something...
          });

        }
    }
});