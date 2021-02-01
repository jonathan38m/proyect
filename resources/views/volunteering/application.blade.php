@extends('interna2')
@section('title') {{ $article->title }} @endsection
@section('description') {{ $article->description }} @endsection
@section('keywords') {{ $article->keywords }} @endsection
@section('index-5') class="active" @endsection

@section('content-interna')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('volunteering') }}">{{ __('breadcrumb.item-5') }}</a></li>
        <li  class="breadcrumb-item active" aria-current="page"> {{ __('breadcrumb.item-5-1') }} </li>
    </ol>
</nav>

<h1>
    {{ __('volunteering.application.title') }}
</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/volunteer" method="POST" id="volunteerForm">

  {{ csrf_field() }}

  <div class="form-group">
    <label for="startDate">* Start Date</label>
    @include('form.date', ['name' => 'startDate'])
  </div>

  <div class="form-group">
    <label for="endDate">* End Date</label>
    @include('form.date', ['name' => 'endDate'])
  </div>

  <div class="form-group">
    <label for="preferredLocations">Preferred Locations</label>
    <select class="form-control" id="preferredLocations" name="preferredLocations">
        <option value="1">Quito</option>
        <option value="2">Otavalo</option>
        <option value="3">Amazon Jungle</option>
        <option value="4">Galapagos</option>
        <option value="5">Other locations</option>
    </select>
  </div>

  <div class="form-group">
    <label for="preferredProjects">* Preferred Projects</label>
    <select class="form-control" id="preferredProjects" name="preferredProjects" required="required">
        <option value="1">Ecological Projects</option>
        <option value="2">Education Projects</option>
        <option value="3">Rural Projects</option>
        <option value="4">Social Projects</option>
        <option value="5">Wildlife Projects</option>
        <option value="6">Healthcare</option>
        <option value="7">Professional</option>
        <option value="8">Other areas</option>
    </select>
  </div>

  <div class="form-group">
    <label for="chooseProgram">* Choose Program</label>
    <select class="form-control" id="chooseProgram" name="chooseProgram" required="required">
        <option value="1">Volunteering or Internship Program + Language Course (minimum 2 weeks) – Free placement!</option>
        <option value="2">Volunteering or Internship-Only Program – One-time placement fee: $150</option>
    </select>
  </div>


  <div class="form-group">
    <label for="firtsName">* First Name</label>
    <input type="text" class="form-control" id="firtsName" placeholder="First Name" name="firtsName" required="required" value="{{ old('firtsName') }}">
  </div>

  <div class="form-group">
    <label for="lastName">* Last Name</label>
    <input type="text" class="form-control" id="lastName" placeholder="Last Name" name="lastName" required="required" value="{{ old('lastName') }}" >
  </div>

  <div class="form-group">
    <label for="email">* Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" required="required" value="{{ old('email') }}">
  </div>

  <div class="form-group">
    <label for="yourCountry">* Your Country</label>
    
    <select class="form-control" id="yourCountry" name="yourCountry" required="required" >
      <option value="" selected="selected"> -- </option>
      <option value="Afghanistan"> Afghanistan </option>
      <option value="African-Union(OAS)"> African-Union(OAS)  </option>
      <option value="Albania">  Albania </option>
      <option value="Algeria">  Algeria </option>
      <option value="American-Samoa"> American-Samoa  </option>
      <option value="Andorra">  Andorra </option>
      <option value="Angola"> Angola  </option>
      <option value="Anguilla"> Anguilla  </option>
      <option value="Antarctica"> Antarctica  </option>
      <option value="Antigua-Barbuda">  Antigua-Barbuda </option>
      <option value="Arab-League">  Arab-League </option>
      <option value="Argentina">  Argentina </option>
      <option value="Armenia">  Armenia </option>
      <option value="Aruba">  Aruba </option>
      <option value="ASEAN">  ASEAN </option>
      <option value="Australia">  Australia </option>
      <option value="Austria">  Austria </option>
      <option value="Azerbaijan"> Azerbaijan  </option>
      <option value="Bahamas">  Bahamas </option>
      <option value="Bahrain">  Bahrain </option>
      <option value="Bangladesh"> Bangladesh  </option>
      <option value="Barbados"> Barbados  </option>
      <option value="Belarus">  Belarus </option>
      <option value="Belgium">  Belgium </option>
      <option value="Belize"> Belize  </option>
      <option value="Benin">  Benin </option>
      <option value="Bermuda">  Bermuda </option>
      <option value="Bhutan"> Bhutan  </option>
      <option value="Bolivia">  Bolivia </option>
      <option value="Bosnia-Herzegovina"> Bosnia-Herzegovina  </option>
      <option value="Botswana"> Botswana  </option>
      <option value="Brazil"> Brazil  </option>
      <option value="Brunei"> Brunei  </option>
      <option value="Bulgaria"> Bulgaria  </option>
      <option value="Burkina-Faso"> Burkina-Faso  </option>
      <option value="Burundi">  Burundi </option>
      <option value="Cambodja"> Cambodja  </option>
      <option value="Cameroon"> Cameroon  </option>
      <option value="Canada"> Canada  </option>
      <option value="Cape-Verde"> Cape-Verde  </option>
      <option value="CARICOM">  CARICOM </option>
      <option value="Cayman-Islands"> Cayman-Islands  </option>
      <option value="Central-African-Republic"> Central-African-Republic  </option>
      <option value="Chad"> Chad  </option>
      <option value="Chile">  Chile </option>
      <option value="China">  China </option>
      <option value="CIS">  CIS </option>
      <option value="Colombia"> Colombia  </option>
      <option value="Commonwealth"> Commonwealth  </option>
      <option value="Comoros">  Comoros </option>
      <option value="Congo-Brazzaville">  Congo-Brazzaville </option>
      <option value="Congo-Kinshasa(Zaire)">  Congo-Kinshasa(Zaire) </option>
      <option value="Cook-Islands"> Cook-Islands  </option>
      <option value="Costa-Rica"> Costa-Rica  </option>
      <option value="Cote-d-Ivoire">  Cote-d-Ivoire </option>
      <option value="Croatia">  Croatia </option>
      <option value="Cuba"> Cuba  </option>
      <option value="Cyprus"> Cyprus  </option>
      <option value="Czech-Republic"> Czech-Republic  </option>
      <option value="Denmark">  Denmark </option>
      <option value="Djibouti"> Djibouti  </option>
      <option value="Dominica"> Dominica  </option>
      <option value="Dominican-Republic"> Dominican-Republic  </option>
      <option value="Ecuador">  Ecuador </option>
      <option value="Egypt">  Egypt </option>
      <option value="El-Salvador">  El-Salvador </option>
      <option value="England">  England </option>
      <option value="Equatorial-Guinea">  Equatorial-Guinea </option>
      <option value="Eritrea">  Eritrea </option>
      <option value="Estonia">  Estonia </option>
      <option value="Ethiopia"> Ethiopia  </option>
      <option value="European-Union"> European-Union  </option>
      <option value="Faroes"> Faroes  </option>
      <option value="Fiji"> Fiji  </option>
      <option value="Finland">  Finland </option>
      <option value="France"> France  </option>
      <option value="Gabon">  Gabon </option>
      <option value="Gambia"> Gambia  </option>
      <option value="Georgia">  Georgia </option>
      <option value="Germany">  Germany </option>
      <option value="Ghana">  Ghana </option>
      <option value="Gibraltar">  Gibraltar </option>
      <option value="Greece"> Greece  </option>
      <option value="Greenland">  Greenland </option>
      <option value="Grenada">  Grenada </option>
      <option value="Guadeloupe"> Guadeloupe  </option>
      <option value="Guam"> Guam  </option>
      <option value="Guatemala">  Guatemala </option>
      <option value="Guernsey"> Guernsey  </option>
      <option value="Guinea-Bissau">  Guinea-Bissau </option>
      <option value="Guinea"> Guinea  </option>
      <option value="Guyana"> Guyana  </option>
      <option value="Haiti">  Haiti </option>
      <option value="Honduras"> Honduras  </option>
      <option value="Hong-Kong">  Hong-Kong </option>
      <option value="Hungary">  Hungary </option>
      <option value="Iceland">  Iceland </option>
      <option value="India">  India </option>
      <option value="Indonesia">  Indonesia </option>
      <option value="Iran"> Iran  </option>
      <option value="Iraq"> Iraq  </option>
      <option value="Ireland">  Ireland </option>
      <option value="Islamic-Conference"> Islamic-Conference  </option>
      <option value="Isle-of-Man">  Isle-of-Man </option>
      <option value="Israel"> Israel  </option>
      <option value="Italy">  Italy </option>
      <option value="Jamaica">  Jamaica </option>
      <option value="Japan">  Japan </option>
      <option value="Jersey"> Jersey  </option>
      <option value="Jordan"> Jordan  </option>
      <option value="Kazakhstan"> Kazakhstan  </option>
      <option value="Kenya">  Kenya </option>
      <option value="Kiribati"> Kiribati  </option>
      <option value="Kosovo"> Kosovo  </option>
      <option value="Kuwait"> Kuwait  </option>
      <option value="Kyrgyzstan"> Kyrgyzstan  </option>
      <option value="Laos"> Laos  </option>
      <option value="Latvia"> Latvia  </option>
      <option value="Lebanon">  Lebanon </option>
      <option value="Lesotho">  Lesotho </option>
      <option value="Liberia">  Liberia </option>
      <option value="Libya">  Libya </option>
      <option value="Liechtenstein">  Liechtenstein </option>
      <option value="LIthuania">  LIthuania </option>
      <option value="Luxembourg"> Luxembourg  </option>
      <option value="Macao">  Macao </option>
      <option value="Macedonia">  Macedonia </option>
      <option value="Madagascar"> Madagascar  </option>
      <option value="Malawi"> Malawi  </option>
      <option value="Malaysia"> Malaysia  </option>
      <option value="Maldives"> Maldives  </option>
      <option value="Mali"> Mali  </option>
      <option value="Malta">  Malta </option>
      <option value="Marshall-Islands"> Marshall-Islands  </option>
      <option value="Martinique"> Martinique  </option>
      <option value="Mauritania"> Mauritania  </option>
      <option value="Mauritius">  Mauritius </option>
      <option value="Mexico"> Mexico  </option>
      <option value="Micronesia"> Micronesia  </option>
      <option value="Moldova">  Moldova </option>
      <option value="Monaco"> Monaco  </option>
      <option value="Mongolia"> Mongolia  </option>
      <option value="Montenegro"> Montenegro  </option>
      <option value="Montserrat"> Montserrat  </option>
      <option value="Morocco">  Morocco </option>
      <option value="Mozambique"> Mozambique  </option>
      <option value="Myanmar(Burma)"> Myanmar(Burma)  </option>
      <option value="Namibia">  Namibia </option>
      <option value="NATO"> NATO  </option>
      <option value="Nauru">  Nauru </option>
      <option value="Nepal">  Nepal </option>
      <option value="Netherlands-Antilles"> Netherlands-Antilles  </option>
      <option value="Netherlands">  Netherlands </option>
      <option value="New-Caledonia">  New-Caledonia </option>
      <option value="New-Zealand">  New-Zealand </option>
      <option value="Nicaragua">  Nicaragua </option>
      <option value="Niger">  Niger </option>
      <option value="Nigeria">  Nigeria </option>
      <option value="North-Korea">  North-Korea </option>
      <option value="Northern-Cyprus">  Northern-Cyprus </option>
      <option value="Northern-Ireland"> Northern-Ireland  </option>
      <option value="Norway"> Norway  </option>
      <option value="Olimpic-Movement"> Olimpic-Movement  </option>
      <option value="Oman"> Oman  </option>
      <option value="OPEC"> OPEC  </option>
      <option value="Pakistan"> Pakistan  </option>
      <option value="Palau">  Palau </option>
      <option value="Palestine">  Palestine </option>
      <option value="Panama"> Panama  </option>
      <option value="Papua-New-Guinea"> Papua-New-Guinea  </option>
      <option value="Paraguay"> Paraguay  </option>
      <option value="Peru"> Peru  </option>
      <option value="Philippines">  Philippines </option>
      <option value="Poland"> Poland  </option>
      <option value="Portugal"> Portugal  </option>
      <option value="Puerto-Rico">  Puerto-Rico </option>
      <option value="Qatar">  Qatar </option>
      <option value="Red-Cross">  Red-Cross </option>
      <option value="Reunion">  Reunion </option>
      <option value="Romania">  Romania </option>
      <option value="Russian-Federation"> Russian-Federation  </option>
      <option value="Rwanda"> Rwanda  </option>
      <option value="Saint-Lucia">  Saint-Lucia </option>
      <option value="Samoa">  Samoa </option>
      <option value="San-Marino"> San-Marino  </option>
      <option value="Sao-Tome-Principe">  Sao-Tome-Principe </option>
      <option value="Saudi-Arabia"> Saudi-Arabia  </option>
      <option value="Scotland"> Scotland  </option>
      <option value="Senegal">  Senegal </option>
      <option value="Serbia(Yugoslavia)"> Serbia(Yugoslavia)  </option>
      <option value="Seychelles"> Seychelles  </option>
      <option value="Sierra-Leone"> Sierra-Leone  </option>
      <option value="Singapore">  Singapore </option>
      <option value="Slovakia"> Slovakia  </option>
      <option value="Slovenia"> Slovenia  </option>
      <option value="Solomon-Islands">  Solomon-Islands </option>
      <option value="Somalia">  Somalia </option>
      <option value="Somaliland"> Somaliland  </option>
      <option value="South-Africa"> South-Africa  </option>
      <option value="South-Korea">  South-Korea </option>
      <option value="Spain">  Spain </option>
      <option value="Sri-Lanka">  Sri-Lanka </option>
      <option value="St-Kitts-Nevis"> St-Kitts-Nevis  </option>
      <option value="St-Vincent-the-Grenadines">  St-Vincent-the-Grenadines </option>
      <option value="Sudan">  Sudan </option>
      <option value="Suriname"> Suriname  </option>
      <option value="Swaziland">  Swaziland </option>
      <option value="Sweden"> Sweden  </option>
      <option value="Switzerland">  Switzerland </option>
      <option value="Syria">  Syria </option>
      <option value="Tahiti(French-Polinesia)"> Tahiti(French-Polinesia)  </option>
      <option value="Taiwan"> Taiwan  </option>
      <option value="Tajikistan"> Tajikistan  </option>
      <option value="Tanzania"> Tanzania  </option>
      <option value="Thailand"> Thailand  </option>
      <option value="Timor-Leste">  Timor-Leste </option>
      <option value="Togo"> Togo  </option>
      <option value="Tonga">  Tonga </option>
      <option value="Trinidad-Tobago">  Trinidad-Tobago </option>
      <option value="Tunisia">  Tunisia </option>
      <option value="Turkey"> Turkey  </option>
      <option value="Turkmenistan"> Turkmenistan  </option>
      <option value="Turks-and-Caicos-Islands"> Turks-and-Caicos-Islands  </option>
      <option value="Tuvalu"> Tuvalu  </option>
      <option value="Uganda"> Uganda  </option>
      <option value="Ukraine">  Ukraine </option>
      <option value="United-Arab-Emirates"> United-Arab-Emirates  </option>
      <option value="United-Kingdom(Great-Britain)">  United-Kingdom(Great-Britain) </option>
      <option value="United-Nations"> United-Nations  </option>
      <option value="United-States-of-America-(USA)"> United-States-of-America-(USA)  </option>
      <option value="Uruguay">  Uruguay </option>
    </select>
  </div>

  <div class="form-group">
    <label for="zipCode">Zip Code</label>
    <input type="text" class="form-control" id="zipCode" placeholder="Zip Code" name="zipCode" >
  </div>

  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="number" class="form-control" id="phone" placeholder="Phone" name="phone" >
  </div>

  <div class="form-group">
    <label for="comments">Comments</label>
    <textarea class="form-control" id="comments" placeholder="Comments" name="comments" ></textarea>
  </div>


    @if (config('app.recaptcha.public_key'))
    <input id="recaptchaResponse" name="g-recaptcha-response" type="hidden"/>
    @endif

  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection


@push('script')


<!-- Scripts -->
<script src="{{ asset('js/volunteer.js') }}" defer></script>

@if (config('app.recaptcha.public_key'))
    <script src="https://www.google.com/recaptcha/api.js?render={{ config('app.recaptcha.public_key') }}&onload=onloadCallback&render=explicit">
    </script>
    <script>
        function onloadCallback() {
              grecaptcha.ready(function() {
                grecaptcha.execute('{{ config('app.recaptcha.public_key') }}', {
                  action: 'homepage'
                }).then(function (token) {
                    var recaptchaResponse = document.getElementById('recaptchaResponse');
                    recaptchaResponse.value = token;
                });
              });
            }
    </script>
@endif


@endpush