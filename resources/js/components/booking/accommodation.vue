<script>
    import Datepicker from 'vuejs-datepicker';
    export default {
        props: ['locations'],
        data () {
          return {
            startDate: '',
            endDate: '',
            accommodation:'',
            meals: '',
            bathroom: '',
            people: '',
            type: '',
            weekendsAmazon: '',
            nameHotel: '',
            addressHotel: '',
            phoneHotel: '',
            loading: false,
            errors: [],
          }
        },
        components: {
            Datepicker
        },
        watch:{
          accommodation:function() { this.errors=''; },
          meals:function() { this.errors=''; },
          bathroom:function(){ this.errors=''; },
          people:function(){ this.errors=''; },
          type:function(){ this.errors=''; },
          startDate: function(){ this.errors=''; },
          endDate: function(){ this.errors=''; },
          nameHotel: function(){ this.errors=''; },
          addressHotel: function(){ this.errors=''; },
          phoneHotel: function(){ this.errors=''; },
          locations: function(){
            this.startDate = '';
            this.endDate = '';
            this.accommodation = '';
            this.meals = '';
            this.bathroom = '';
            this.people = '';
            this.type = '';
            this.weekendsAmazon = '';
            this.nameHotel = '';
            this.addressHotel = '';
            this.phoneHotel = ''
          }
        },
        computed: {
          days() {
            if(this.endDate && this.startDate)
            {
              const diffTime = Math.abs(this.endDate.getTime() - this.startDate.getTime());
              return Math.ceil(diffTime / (1000 * 60 * 60 * 24));
            }
            return 1;
          },
          price() {

            if(this.accommodation=='1')
            {
              switch (this.meals)
              {
                case '1':
                  switch(this.bathroom)
                  {
                    case '1':
                      switch(this.type)
                      {
                        case '1':
                          return 30;
                        break;
                        case '2':
                          return 25;
                        break;
                        default:
                          return 0;
                        break;
                      }
                    break;
                    case '2':
                      switch(this.type)
                      {
                        case '1':
                          return 25;
                        break;
                        case '2':
                          return 20;
                        break;
                        default:
                          return 0;
                        break;
                      }
                    break;
                    default:
                      return 0;
                    break;
                  }
                break;
                case '2':
                  switch(this.type)
                  {
                    case '1':
                      return 35;
                    break;
                    case '2':
                      return 30;
                    break;
                    default:
                      return 0;
                    break;
                  }
                break;
                default:
                  return 0;
                break;
              }
            }
            else if(this.accommodation=='2')
            {
              switch(this.type)
              {
                case '1':
                  return 23;
                break;
                case '2':
                  return 19;
                break;
                case '3':
                  return 16;
                break;
                default:
                  return 0;
                break;
              }
            }
            return 0;

          }
        },
        methods: {
            previous(){
                $('#collapseFour').collapse('show');
            },
            validate(){
              this.loading = true;
              var n={};
              if(this.accommodation==1)
              {
                n={
                  startDate: this.startDate,
                  endDate: this.endDate,
                  accommodation: this.accommodation,
                  meals: this.meals,
                  bathroom: this.bathroom,
                  people: this.people,
                  type: this.type
                }
              }
              else if(this.accommodation==2)
              {
                n={
                  startDate: this.startDate,
                  endDate: this.endDate,
                  accommodation: this.accommodation,
                  people: this.people,
                  type: this.type
                }
              }
              else if(this.accommodation==3)
              {
                n={
                  accommodation: this.accommodation,
                  nameHotel: this.nameHotel,
                  addressHotel: this.addressHotel,
                  phoneHotel: this.phoneHotel,

                }
              }
              /** es necesario enviar el campo accommodation 
                * por q es un campo requerido en las 
                * reglas y cuando solo se selecciona amazon este no tiene este campo
                * por eso se quema el campo además que se valida con la base de datos
              **/
              else if(this.locations.includes("3"))
              {
                n={
                  accommodation: 4,
                }
              }

              axios
              .post('/validateAccommodation',n)
              .then(
                  (response) => {
                        this.loading = false;
                        var nameAc='';
                        if(this.accommodation==1){
                          nameAc="Host Family";
                        }
                        else if(this.accommodation==2){
                          nameAc="Student Residence with breakfast in Quito";
                        }
                        else if(this.accommodation==3){
                          nameAc="I wish to organize my own accommodation";
                        }
                        var ac = [];
                        if(this.accommodation!=''){
                          ac.push({
                            name: nameAc,
                            id: this.accommodation,
                            time: this.days,
                            price: (this.price * this.people * this.days)
                          });
                        }

                        if(this.weekendsAmazon>0){
                          ac.push(
                          {
                            name: this.weekendsAmazon + ' Amazon Weekends',
                            id: 4,
                            time: this.weekendsAmazon,
                            price: (this.weekendsAmazon * 220)
                          });
                        }

                        this.$emit('accommodation-ready', ac);
                        this.$emit('accommodation-option-ready', n);
                        $('#collapseSix').collapse('show');
                        this.errors='';
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



            },
        }
    }
</script>
