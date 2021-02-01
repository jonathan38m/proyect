

<script>
    export default {
        props: ['locations'],
        data () {
          return {
            title: '',
            lname: '',
            fname:'',
            email:'',
            country:'',
            address:'',
            city:'',
            loading: false,
            errors: {},
            countries:[]
          }
        },
        mounted() {
            axios
            .get('/countries')
            .then(
                (response) => {
                    this.countries = response.data;
                }
            )
            .catch(
                error => {
                    this.loading = false;
                    if(error.response.data)
                    this.errors = error.response.data.errors;
                }
            ); 
        },
        methods: {
            previous(){

                if(this.locations.includes("1") || this.locations.includes("2") || this.locations.includes("3"))
                {

                    $('#collapseFive').collapse('show')
                }
                else{

                    $('#collapseFour').collapse('show')
                }
            },
            validate(){

                this.loading = true;
                var information = {
                    title:   this.title,
                    lname:   this.lname,
                    fname:   this.fname,
                    email:   this.email,
                    country: this.country,
                    address: this.address,
                    city:    this.city,
                };
                axios
                .post('/validate-billing-information', information)
                .then(
                    (response) => {
                        
                        this.loading = false;
                        this.$emit('information', information);
                        $('#collapseSeven').collapse('show');
                    }
                )
                .catch(
                    error => {

                        if(error.response.data.errors){
                          this.errors = error.response.data.errors;
                        }
                        else{
                          this.errors = error.response.data.message; 
                        }
                        this.loading = false;
                    }
                ); 

            }
        },
        watch:{
            title:function(){
                if(this.errors.title)delete this.errors.title;
            },
            lname:function(){
                if(this.errors.lname)delete this.errors.lname;
            },
            fname:function(){
                if(this.errors.fname)delete this.errors.fname;
            },
            email:function(){
                if(this.errors.email)delete this.errors.email;
            },
            country:function(){
                if(this.errors.country)delete this.errors.country;
            },
            address:function(){
                if(this.errors.address)delete this.errors.address;
            },
            city:function(){
                if(this.errors.city)delete this.errors.city;
            }
        }
    }
</script>
