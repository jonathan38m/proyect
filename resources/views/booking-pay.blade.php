@extends('interna2')
@section('title') {{ $article->title }} @endsection
@section('description') {{ $article->description }} @endsection
@section('keywords') {{ $article->keywords }} @endsection
@section('index-9') class="active" @endsection

@section('scriptBefore')
  <script src='https://www.google.com/recaptcha/api.js'></script>
@endsection

@section('content-interna')

<ol class="breadcrumb">
    <li><a href="{{ route('home') }}">Home</a></li>
    <li class="active"> Booking </li>
</ol>

<h1>Book your Spanish Course with us!</h1>
<p>Fulfill all your language-learning dreams and book now for the best learning and exploring experience available in Ecuador!</p>
<p>Please fill out the form below &amp; choose the programs of your choice.</p>

<form action="{{ route('booking-pay-send') }}" method="POST" id="bookingForm" name="bookingForm">

  {{ csrf_field() }}

  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

    <div class="panel panel-default" id="panel-1">
      <div class="panel-heading" role="tab" id="basic-information-h">
        <h4 class="panel-title">
          Choose your Locations to Study Spanish with us:
        </h4>
      </div>
      <div id="locations-B" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="locations-h">
        <div class="panel-body">
          @include('booking-pay.locations')
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <button type="button" class="form-control btn btn-primary btn-icon" id="locationsButton" role="button" tabindex="0" >
                    Continue
                    <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   
    <div class="panel panel-default" id="panel-2">
      <div class="panel-heading" role="tab" id="course-h">
        <h4 class="panel-title">
          Courses
        </h4>
      </div>
      <div id="course-B" class="panel-collapse collapse" role="tabpanel" aria-labelledby="course-h">
        <div class="panel-body">
          @include('booking-pay.course')
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <button type="button" class="form-control btn btn-primary btn-icon" id="courseButton" role="button">
                  Continue
                  <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
                </button>
              </div>
            </div><div class="col-md-2 col-md-offset-4">
              <div class="form-group">
                <button type="button" class="form-control btn btn-primary btn-icon" id="courseButtonP" role="button">
                  <span class="glyphicon glyphicon-triangle-left" aria-hidden="true"></span>
                  Previous
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="panel panel-default" id="panel-3">
      <div class="panel-heading" role="tab" id="previousKnowledgeSpanish-h">
        <h4 class="panel-title">
            Previous Knowledge Of Spanish
        </h4>
      </div>
      <div id="previousKnowledgeSpanish-B" class="panel-collapse collapse" role="tabpanel" aria-labelledby="previousKnowledgeSpanish-h">
        <div class="panel-body">
          @include('booking-pay.previousKnowledgeSpanish')
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <button type="button" class="form-control btn btn-primary btn-icon" id="previousKnowledgeSpanishButton" role="button">
                  Continue
                  <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
                </button>
              </div>
            </div><div class="col-md-2 col-md-offset-4">
              <div class="form-group">
                <button type="button" class="form-control btn btn-primary btn-icon" id="previousKnowledgeSpanishButtonP" role="button">
                  <span class="glyphicon glyphicon-triangle-left" aria-hidden="true"></span>
                  Previous
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="panel panel-default" id="panel-4">
      <div class="panel-heading" role="tab" id="accommodation-h">
        <h4 class="panel-title">
          Accommodation
        </h4>
      </div>
      <div id="accommodation-B" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accommodation-h">
        <div class="panel-body">
          @include('booking-pay.accommodation')
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <button type="button" class="form-control btn btn-primary btn-icon" id="accommodationButton" role="button">
                  Continue
                  <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
                </button>
              </div>
            </div><div class="col-md-2 col-md-offset-4">
              <div class="form-group">
                <button  type="button" class="form-control btn btn-primary btn-icon" id="accommodationButtonP" role="button">
                  <span class="glyphicon glyphicon-triangle-left" aria-hidden="true"></span>
                  Previous
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="panel panel-default" id="panel-5">
      <div class="panel-heading" role="tab" id="metAirport-h">
        <h4 class="panel-title">
          Billing Details
        </h4>
      </div>
      <div id="billingInfo-B" class="panel-collapse collapse" role="tabpanel" aria-labelledby="billingInfo-h">
        <div class="panel-body">
          @include('booking-pay.billingInfo')
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <button type="button" class="form-control btn btn-primary btn-icon" id="billingInfoButton" role="button">
                  Continue
                  <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
                </button>
              </div>
            </div><div class="col-md-2 col-md-offset-4">
              <div class="form-group">
                <button type="button" class="form-control btn btn-primary btn-icon" id="billingInfoButtonP" role="button">
                  <span class="glyphicon glyphicon-triangle-left" aria-hidden="true"></span>
                  Previous
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="panel panel-default" id="panel-6">
      <div class="panel-heading" role="tab" id="airport-information-h">
        <h4 class="panel-title">
          Airport Information
        </h4>
      </div>
      <div id="airport-information-B" class="panel-collapse collapse" role="tabpanel" aria-labelledby="airport-information-h">
        <div class="panel-body">
          @include('booking-pay.airport-information')
          
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <button type="button" class="form-control btn btn-primary btn-icon" id="airport-informationButton" role="button">
                  Continue
                  <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
                </button>
              </div>
            </div><div class="col-md-2 col-md-offset-4">
              <div class="form-group">
                <button type="button" class="form-control btn btn-primary btn-icon" id="airport-informationButtonP" role="button">
                  <span class="glyphicon glyphicon-triangle-left" aria-hidden="true"></span>
                  Previous
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
    
    <div class="panel panel-default" id="panel-7">
        <div class="panel-heading" role="tab" id="locations-h">
          <h4 class="panel-title">
            Cart
          </h4>
        </div>
        <div id="cart-B" class="panel-collapse collapse" role="tabpanel" aria-labelledby="cart-h">
          <div class="panel-body">
            @include('booking-pay.cart')
              <div class="row">
              
                <div class="col-md-6">
                  <div class="form-group">
                    <button type="button" class="form-control btn btn-primary btn-icon" id="cartButton" role="button">
                      Continue
                      <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
                    </button>
                  </div>
                </div>

                <div class="col-md-2 col-md-offset-3">
                  <div class="form-group">
                    <button type="button" class="form-control btn btn-primary btn-icon" id="cartButtonP" role="button">
                      <span class="glyphicon glyphicon-triangle-left" aria-hidden="true"></span>
                      Previous
                    </button>
                  </div>
              </div>
            </div>

          </div>
        </div>
    </div>

    <div class="panel panel-default" id="panel-8">
        <div class="panel-heading" role="tab" id="metAirport-h">
          <h4 class="panel-title">
            Checkout
          </h4>
        </div>
        <div id="payment-B" class="panel-collapse collapse" role="tabpanel" aria-labelledby="payment-h">
          <div class="panel-body">
            @include('booking-pay.payment')
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <button type="submit" id="placeOrderSubmitBtn" class="form-control btn btn-ise" style="display:none;">
                      Part 1 of 2 Place Order
                      <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                    </button>
                  </div>
              </div>

              <div class="col-md-2 col-md-offset-3">
                <div class="form-group">
                  <button type="button" class="form-control btn btn-primary btn-icon" id="paymentButtonP" role="button">
                    <span class="glyphicon glyphicon-triangle-left" aria-hidden="true"></span>
                    Previous
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

  </div>

</form>

<div class="modal fade" tabindex="-1" role="dialog"  id="validateFomoMessage">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="alert" id="statusAlert" role="alert" style="margin-bottom: 0;">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <p id="statusAlertMessage">...</p>
      </div>
    </div>
  </div>
</div>


@endsection

@section('script')

<script type="text/javascript" src="{{ URL::asset('js/booking-new.js') }}" defer ></script>
<script type="text/javascript" src="{{ URL::asset('js/kushki-prod.js') }}"></script>

@endsection