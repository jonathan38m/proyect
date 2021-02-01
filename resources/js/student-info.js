import Datepicker from 'vuejs-datepicker';
Vue.component('datepicker', Datepicker);
const app = new Vue({
    el: '#app',
    data: {
        lname: document.getElementById('lname').value,
        fname: document.getElementById('fname').value,
        email: document.getElementById('email').value,
        sex: '',
        country: '',
        bday: '',
        tel2: '',
        passport: ''
    },
    methods: {
        continue1() {
            axios.post('/student-infos/basic-information', {
                'lname': this.lname,
                'fname': this.fname,
                'email': this.email,
                'sex': this.sex,
                'country': this.country,
                'bday': this.bday,
                'tel2': this.tel2,
                'passport': this.passport,
            }).then(
                (response) => {
                    //console.log(response.data);
                    $('#collapseTwo').collapse('show');
                }).catch(error => {
                Object.keys(error.response.data.errors).forEach(function(item) {
                    document.getElementById(item).className += ' is-invalid';
                    //console.log(error.response.data.errors[item][0]); // value
                });
            });
        },
        continue2() {
            $('#collapseThree').collapse('show');
        },
        continue3() {
            $('#collapseFour').collapse('show');
        },
        previous2() {
            $('#collapseOne').collapse('show');
        },
        previous3() {
            $('#collapseTwo').collapse('show');
        },
        previous4() {
            $('#collapseThree').collapse('show');
        },
    }
});
$('#student-pop').modal('show');