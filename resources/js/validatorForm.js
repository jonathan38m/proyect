var forms = document.getElementsByTagName('form');


    $("input").change(function(){
        if($(this).val()!= "" || $(this).val() != null)
        {
            $(this ).removeClass( "fatal-error" );
        }
    });
    $("textarea").change(function(){
        if($(this).val()!= "" || $(this).val() != null)
        {
            $(this ).removeClass( "fatal-error" );
        }
    });


    for (var i = 0; i < forms.length; i++) {
      forms[i].noValidate = true;

      forms[i].addEventListener('submit', function(event) {
          //Prevent submission if checkValidity on the form returns false.

        $("#" + $(this).attr('id') + " input").each(function(){
            
            if($(this).val() == "" || $(this).val() == null)
            {
                if ($(this).attr('required') == 'required')
                {

                    event.preventDefault();
                    
                    $('#statusAlert').removeClass('alert-danger');
                    $('#statusAlert').addClass('alert-danger');
                    $('#statusAlertMessage').html('<strong>Oh snap!</strong>' + $(this).attr('date-message'));
                    $('#validateFomoMessage').modal({
                      show: true
                    })
                    $(this ).removeClass( "fatal-error" );
                    $(this ).addClass( "fatal-error" );
                    $( this ).focus();

                    $("[name='" + $(this).attr('name') + "']")[0].scrollIntoView(true);
                }
            }
            else if($(this).attr('type') == 'email')
            {
                patron=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
                if ($(this).val().search(patron)!=0){
                    event.preventDefault();
                    
                    $('#statusAlert').removeClass('alert-danger');
                    $('#statusAlert').addClass('alert-danger');
                    $('#statusAlertMessage').html('<strong>Oh snap!</strong>' + $(this).attr('date-message'));
                    $('#validateFomoMessage').modal({
                      show: true
                    })
                    $(this ).removeClass( "fatal-error" );
                    $(this ).addClass( "fatal-error" );
                    $( this ).focus();

                    $("[name='" + $(this).attr('name') + "']")[0].scrollIntoView(true);
                }
            }
        });

        $("#" + $(this).attr('id') + " textarea").each(function(){
            if($(this).val() == "" || $(this).val() == null)
            {

                if ($(this).attr('required') == 'required')
                {
                    event.preventDefault();
                    $('#statusAlert').removeClass('alert-danger');
                    $('#statusAlert').addClass('alert-danger');
                    $('#statusAlertMessage').html('<strong>Oh snap!</strong>' + $(this).attr('date-message'));
                    $('#validateFomoMessage').modal({
                      show: true
                    })
                    $(this ).removeClass( "fatal-error" );
                    $(this ).addClass( "fatal-error" );
                    $( this ).focus();

                    $("[name='" + $(this).attr('name') + "']")[0].scrollIntoView(true);
                }
                

                
            }
        });

      }, false);
    }
    
    $( "a[data-form-auto='on']" ).click(function() {
        var subject = $(this).attr('data-form-subject');
        var message = $(this).attr('data-form-message');
        $( "#validate-form input" ).each(function() {
            if($(this).attr('name')=='subject')
            {
                $(this).val(subject);
            }
        });
        $( "#validate-form textarea" ).each(function() {
            if($(this).attr('name')=='messageForm')
            {
                $(this).val(message);
            }
        }); 
        
    });
    
