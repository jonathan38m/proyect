

<script>
    export default {
        data () {
            return {
                meetAirport: false,
                dateArrival: '',
                timeArrival:'',
                airlineCompany:'',
                flightNumber:'',
                loading: false,
                errors: {},
            }
        },
        methods: {
            previous(){
                $('#collapseSix').collapse('show');
            },
            validate(){
                var p = {};
                if(this.meetAirport){
                    p = {
                        meetAirport:   this.meetAirport,
                        dateArrival:   this.dateArrival,
                        timeArrival:   this.timeArrival,
                        airlineCompany:   this.airlineCompany,
                        flightNumber:   this.flightNumber,
                    }
                }
                else
                {
                    p = {meetAirport:   this.meetAirport,}
                }
                this.loading = true;
                axios
                .post('/validate-airport-information',p)
                .then(
                    (response) => {
                        
                        this.loading = false;
                        $('#collapseEight').collapse('show');
                        this.$emit('airport', p);
                        this.errors={};
                    }
                )
                .catch(
                    error => {
                        this.loading = false;
                        if(error.response.data.errors){
                          this.errors = error.response.data.errors;
                        }
                        else{
                          this.errors = error.response.data.message; 
                        }
                    }
                ); 

            }
        },
        watch:{

            meetAirport:function(){
                if(this.errors.meetAirport)
                    delete this.errors.meetAirport;
                if(this.errors.dateArrival)delete this.errors.dateArrival;
                if(this.errors.timeArrival)delete this.errors.timeArrival;
            },
            dateArrival:function(){
                if(this.errors.dateArrival)delete this.errors.dateArrival;
            },
            timeArrival:function(){
                if(this.errors.timeArrival)delete this.errors.timeArrival;
            }
        }
    }
</script>
