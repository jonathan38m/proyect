@extends('layouts.app')
@section('content')



<section id="inicio" ng-controller="HomeController">
<div class="container">
  <div class="hero-home">
    <img class="img-responsive" src="img/logo-hero.png" />
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="well well-lg well-inicio inicio-ciudad">
        

          <div class="row well-body">
            <div class="col-md-4">
                
                <a role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample" >
                    <img style="margin: auto;border: 3px solid #d5d5d5;display: block;border-radius: 3px;text-align: center;" src="img/banner-listas.jpg" class="img-responsive" alt="Responsive image">
                </a>
                
            
              	@if(session()->has('msj'))
  		            <div class="alert alert-success" role="alert">{{session('msj')}}</div>
            		@endif
            		@if(session()->has('errormsj'))
            		  <div class="alert alert-danger" role="alert">{{session('errormsj')}}</div>
            		@endif
                
                @if(Auth::check())
                
                <div class="collapse" id="collapseExample">
	                
                         <form role="form" method="POST" action="{{ url('listascargadas')}}" enctype="multipart/form-data">
	                        {{ csrf_field() }}
	                        <div class="form-group">
	                          <input name="email" type="email" class="form-control" id="email" placeholder="Email" value="{{ Auth::user()->email }}"  style="display: none;" >
                                    <input name="nombre" type="text" class="form-control" id="nombre" placeholder="nombre" value="{{ Auth::user()->name }}"  style="display: none;" >
                                    <input name="phone" type="text" class="form-control" id="phone" placeholder="phone" value="{{ Auth::user()->phone }}"  style="display: none;" >
	                          
	                          
	                          
	                          
	                        </div>
	                        <div class="form-group">
	                          <label for="archivo">Archivo</label>
	                          <input name="archivo" type="file" id="archivo">
	                          @if($errors->has('archivo'))
	                          	<span style="color:red;">El campo del archivo es obligatorio</span>
	                          @endif
	                          <p class="help-block">Agrege el archivo jpg, pdf, xlsx, etc.</p>
	                        </div>
	                        <button type="submit" class="btn btn-default">Cargar</button>
	                    </form>
                </div>
                @else
                
                <div class="collapse" id="collapseExample">
                        <p>Debes iniciar sesión para poder cargar tu lista.</p>
                        <a href="/login" class="btn btn-compra">INICIAR SESIÓN</a>
                   
                </div>
                
                @endif
        
        
        
                
            </div>
            
            <div class="col-md-8">

              <form action="{{ route('product.viewListIndex') }}" method="post">

                {{ csrf_field() }}

                <div class="col-md-6">
                  <div class="table" style="text-align:right;">
                      <select name="city" class="form-control" required="required">
                          <option value="">- Ciudad del colegio -</option>
                          @foreach($cities as $city)
                            <option value="{{ $city->id }}"> {{ $city->name }} </option>
                          @endforeach
                          
                      </select>
                  </div>
                  <div class="table">
                      <select name="institution" class="form-control" required="required" disabled="true">
                          <option value="">- Institución -</option>

                      </select>
                  </div>
                </div>
            
                <div class="col-md-6">
                    
                    <div class="table" style="text-align:right;">
                        <select name="course" class="form-control" required="required" disabled="true">
                          <option value="">- Curso -</option>

                        </select>
                    </div>
                    <div class="table">
                        <input type="radio" name="gender" value="1" required="required"> Útiles para hombre<br>
                        <input type="radio" name="gender" value="2"> Útiles para mujer<br>
                    </div>
                    <div class="table" style="text-align:left;">
                      <button type="button" class="btn btn-compra" data-toggle="modal" data-target="#popup">
                        COMPRAR LISTA DE ÚTILES
                      </button>
                      <div class="modal fade" id="popup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title" id="myModalLabel">Recuerda</h4>
                            </div>
                            <div class="modal-body">
                            <div class="modal-body" style="padding: 0;">
                              <img src="img/pop-up.jpg" style="max-width: 100%;">
                            </div>
                            </div>
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-compra" >COMPRAR LISTA DE ÚTILES</button>
                            </div>
                          </div>
                        </div>
                      </div>
                   </div>
                </div>
                
              </form>              
            </div>
        </div>

        <div class="row well-body">
          <div class="col-md-6">
            <div class="table" style="text-align:right;"></div>
          </div>

          <div class="col-md-6">
            
          </div>
        </div>
      </div>
      
      <div class="row">
            <div class="col-md-12">
                
                @if(Auth::check())
                
                <div class="collapse" id="collapseExample">
                    <div class="well">
                      ...
                    </div>
                </div>
                @else
                
                <div class="collapse" id="collapseExample">
                    <div class="well">
                      ...
                    </div>
                </div>
                
                @endif
            </div>
      </div>
    </div>
    </div>

    <section>
      <div class="row">
        <div class="col-md-3 align-c">
         <div class="red-panel">
            <img src="img/icon-lista.png" class="img-responsive" style="display: inline-block;">
            <h3>Tus útiles a un solo click</h3>
            <p>Todas las listas han sido configuradas de acuerdo a lo solicitado por el colegio.</p>
            <p>Compra la lista total o parcial</p>
         </div>
        </div>
        <div class="col-md-3 align-c">
          <div class="red-panel">
          <img src="img/icon-pago.png" class="img-responsive" style="display: inline-block;">
            <h3>Facilidad de pago</h3>
            <p>Aceptamos transferencias, depósitos bancarios y todas las tarjetas de crédito.</p>
          </div>
        </div>
        <div class="col-md-3 align-c">
          <div class="red-panel">
          <img src="img/icon-forrado.png" class="img-responsive" style="display: inline-block;">
            <h3> Servicios Adicionales</h3>
            <p>Agrega a tu lista el kit de forrado a un precio especial.</p>
          </div>
        </div>
        <div class="col-md-3 align-c">
          <div class="red-panel">
          <img src="img/icon-envio.png" class="img-responsive" style="display: inline-block;">
            <h3> Entrega a domicilio</h3>
            <p>En máximo 5 días laborables, recibe tu lista en la dirección de tu preferencia.</p>
          </div>
        </div>
      </div>
    </section>

    </div>
</section>

@endsection


@section('script')

<script type="text/javascript">
  
  


  var getdetails = function(id) {
    return $.getJSON("/ciudades", {
        "id": id
    });
  };

  var getCourse = function(id) {
    return $.getJSON("/institutions", {
        "id": id
    });
  };


  $( "select[name='city']" ).change(function(){

    getdetails( $(this).val()).done(function(response){

      if (response.success) {
       
        var output = "";
                
        $.each(response.data, function(key, value) {


            
            $.each(value, function(userkey, uservalue) {
                if(userkey == 'id' && uservalue == 0)
                 output += '<option value="">';
              else if(userkey == 'id')
                  output += '<option value="' + uservalue + '">';

              if(userkey == 'name' && uservalue == 'Extras')
                output += '---' ; 
              else if(userkey == 'name')
                output += uservalue ;
                        
                    });
            output += '</option>' ;


        });

        $("select[name='institution']").html(output);
        $("select[name='institution']").attr('disabled', false);
          

      }

    }).fail(function(jqXHR, textStatus, errorThrown) {
            
            //alert('error');
            
        });

  });
  

  $( "select[name='institution']" ).change(function(){

    getCourse( $(this).val()).done(function(response){

      if (response.success) {
       
        var output = "";
                
        $.each(response.data, function(key, value) {


            
            $.each(value, function(userkey, uservalue) {
                if(userkey == 'id')
                  output += '<option value="' + uservalue + '">';
                if(userkey == 'name')
                  output += uservalue ;
                        
                    });
            output += '</option>' ;


        });

        $("select[name='course']").html(output);
        $("select[name='course']").attr('disabled', false);
          

      }

    }).fail(function(jqXHR, textStatus, errorThrown) {
            
            //alert('error');
            
        });

  });

</script>

@endsection