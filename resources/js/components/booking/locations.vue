<script>
    export default {
        data () {
          return {
              value: [],
              errors: {},
              students: 1,
              loading: false
          }
        },
        methods: {
            validate(){
                this.loading = true;
                var params = {
                    locations: this.value,
                    students: this.students
                };
                axios
                .post('/locationsValidate',params)
                .then(
                    (response) => {
                        this.$emit('location-ready', this.value);
                        this.$emit('students', this.students);
                        this.errors={};
                        this.loading = false;
                        $('#collapseTwo').collapse('show');
                    }
                )
                .catch(
                    error => {
                      if(error.response.data.errors){
                        this.errors=error.response.data.errors;
                      }
                      this.loading = false; 
                    }
                );
            }
        },
        watch: {
          value: function(newVal, oldVal) {
            if(this.value.length>0)
              this.errors='';
          },
          students: function() {
              this.errors='';
          }
        }
    }
</script>
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
