@extends('interna2')
@push('scriptBefore')

<script type="text/javascript" src="{{ config('app.payme.modal_js') }}" ></script>
  
@endpush
@section('content-interna')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('booking') }}">Booking</a></li>
        <li class="breadcrumb-item active" aria-current="page">Check Out</li>
    </ol>
</nav>

<h1>Your Summary</h1>

<form name="f1" id="f1" action="#" method="post" class="alignet-form-vpos2">


<ul class="list-group">
  <li class="list-group-item">
    <div class="row">
      <div class="col-sm-6">Name</div>
      <div class="col-sm-6">
        {{ $booking->title }} {{ $booking->lname }} {{ $booking->fname }}
      </div>
    </div>
  </li>
  <li class="list-group-item">
    <div class="row">
      <div class="col-sm-6">Email</div>
      <div class="col-sm-6">{{ $booking->email }}</div>
    </div>
  <li class="list-group-item">
    <div class="row">
      <div class="col-sm-6">Country</div>
      <div class="col-sm-6">{{ $booking->country->name }}</div>
    </div>
  </li>
  <li class="list-group-item">
    <div class="row">
      <div class="col-sm-6">City</div>
      <div class="col-sm-6">{{ $booking->city }}</div>
    </div>
  </li>
  <li class="list-group-item">
    <div class="row">
      <div class="col-sm-6">Address</div>
      <div class="col-sm-6">{{ $booking->address }}</div>
    </div>
  </li>
</ul>
<br>

<h2> Courses </h2>



<ul class="list-group">

  @foreach ($booking->options as $option)

  <li class="list-group-item">
    <div class="row">
      <div class="col-sm-6">
        {{ $option->course->location->name }} | {{ $option->course->name }} | {{ $option->name }} 
        @if($option->pivot->weeks>1) | {{ $option->pivot->weeks }} week(s) @endif
        @if($booking->students>1) x {{ $booking->students }} Students @endif
      </div>
      <div class="col-sm-6">
        US$ {{ $option->pivot->price * $booking->students }}
      </div>
    </div>
  </li>

  @endforeach
</ul>
<br>



@if($booking->accommodations)

<h2>Accommodation</h2>


<ul class="list-group">
@foreach ($booking->accommodations as $accommodation)

  @switch($accommodation->id)
      @case(1)
      @case(2)
      @case(4)

          <li class="list-group-item">
            <div class="row">
              <div class="col-sm-6">{{ $accommodation->name }}</div>
              <div class="col-sm-6">US$ {{ $accommodation->pivot->price }}</div>
            </div>
          </li>



          @break

      @case(3)

          <li class="list-group-item">
            <div class="row">
              <div class="col-sm-6">{{ $accommodation->name }}  </div>
              <div class="col-sm-6">US$ 0</div>
            </div>
          </li>


          @break
  @endswitch

@endforeach

</ul>
<br>

@endif

<h2>Tax</h2>

<ul class="list-group">
  <li class="list-group-item">
    <div class="row">
      <div class="col-sm-6">Education in Ecuador does not charge taxes</div>
      <div class="col-sm-6">US$ 0</div>
    </div>
  </li>
  <li class="list-group-item">
    <div class="row">
      <div class="col-sm-6">
        Registration Fee @if($booking->students>1) x {{ $booking->students }} Students @endif </div>
      <div class="col-sm-6">US$ {{ $booking->students * 40 }}</div>
    </div>
  </li>
</ul>
<br>


<h2>Total: US$ {{ $booking->total }}</h2>
<br>




<input type="hidden" name="acquirerId" value="{{ config('app.payme.idacquirer') }}" />

<input type="hidden" name="idCommerce" value="{{ config('app.payme.idcommerce') }}" />

<input type="hidden" name="purchaseOperationNumber" value="{{ str_pad($booking->id, 9, "0", STR_PAD_LEFT) }}" />

<input type="hidden" name="purchaseAmount" value="{{ $purchaseAmount }}" />

<input type="hidden" name="purchaseCurrencyCode" value="{{ config('app.payme.purchasecurrencycode') }}" />

<input type="hidden" name="language" value="EN" />

<input type="hidden" name="shippingFirstName" value="{{ $booking->fname }}" />

<input type="hidden" name="shippingLastName" value="{{ $booking->lname }}" />

<input type="hidden" name="shippingEmail" value="{{ $booking->email }}" />

<input type="hidden" name="shippingAddress" value="{{ $booking->address }}" />

<input type="hidden" name="shippingZIP" value="ZIP 123" />

<input type="hidden" name="shippingCity" value="{{ $booking->city }}" />

<input type="hidden" name="shippingState" value="Pichincha" />

<input type="hidden" name="shippingCountry" value="{{ $booking->country->code }}" />

<input type="hidden" name="userCommerce" value="ISE" />

<input type="hidden" name="userCodePayme" value="ISE" />






<input type="hidden" name="taxMontoFijo" value="{{ $purchaseAmount }}" />

<input type="hidden" name="taxMontoIVA" value="000" />

<input type="hidden" name="taxMontoNoGravaIva" value="{{ $purchaseAmount }}" />

<input type="hidden" name="taxMontoGravaIva" value="000" />



<input type="hidden" name="descriptionProducts" value="Booking ISE Order {{ $booking->id }}" />

<input type="hidden" name="programmingLanguage" value="PHP" />

<input type="hidden" name="purchaseVerification" value="{{ $purchaseVerification }}" />





<input type="hidden" name="reserved1" value="EN" />

<input type="hidden" name="reserved2" value="{{ $purchaseAmount }}" />

<input type="hidden" name="reserved3" value="000" />

<input type="hidden" name="reserved4" value="000" />

<input type="hidden" name="reserved5" value="000" />

<input type="hidden" name="reserved9" value="{{ $purchaseAmount }}" />

<input type="hidden" name="reserved10" value="000" />




<input type="hidden" name="reserved11" value="{{ $booking->id }}" />

<input type="hidden" name="reserved12" value="{{ $booking->token }}" />

<input type="hidden" name="reserved13" value="{{ $ruta[0] }}" />

<input type="hidden" name="reserved14" value="{{ $ruta[1] }}" />

<input type="hidden" name="reserved15" value="{{ isset($ruta[2]) ? $ruta[2] : '' }}" />



<input type="button" class="btn btn-primary" onclick="javascript:AlignetVPOS2.openModal('{{ config("app.payme.modal_button") }}','1')" value="Continue">

</form>


@endsection