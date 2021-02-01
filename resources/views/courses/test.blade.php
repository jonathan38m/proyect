@extends('interna2')
@section('title') {{ $article->title }} @endsection
@section('description') {{ $article->description }} @endsection
@section('keywords') {{ $article->keywords }} @endsection
@section('index-2') class="active" @endsection

@section('content-interna')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('breadcrumb.item-1') }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('item-2') }}">{{ __('breadcrumb.item-2') }}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ __('breadcrumb.item-2-3') }}</li>
  </ol>
</nav>

<form action="{{ route('test-online-form') }}" method="POST" id="testForm">

  {{ csrf_field() }}

  <div id="informationTest">
    <h1>
        {{ __('courses.test.title') }}
    </h1>

    <p>
      In order to have a better idea about your level of Spanish we invite you to participate in the following Free Test On-Line.  
    </p>

    <p>
      For participating in this test on-line, you are not obligated to book a Spanish course with us. Of course, we expect to have you as our Spanish student and you are very welcome to decide to study with us in any of our branches in Ecuador – South America and sign in our booking form.
    </p>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="row justify-content-center">
      <div class="col-md-4">

        <div class="form-group">
          <label for="name">* Name</label>
          <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{ old('name') }}">
        </div>
        <div class="form-group">
          <label for="lastName">* Last Name</label>
          <input type="text" class="form-control" id="lastName" placeholder="Last Name" name="lastName" value="{{ old('lastName') }}">
        </div>
        <div class="form-group">
          <label for="country">* Country</label>
            <select class="form-control" id="country" name="country">
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
          <label for="email">* Email address</label>
          <p>Please add the email to where you want to receive your results:</p>
          <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{ old('email') }}">
        </div>
        <a id="accessTest" class="form-control btn btn-info btn-ise">Access</a>
        
      </div>
      
    </div>

  </div>

  <div id="questionTest" style="display: none;">
    <h2>Spanish Test On-Line - Instituto Superior de Español</h2>

    <p>
      Welcome to the Instituto Superior de Español and our On-Line test!
    </p>

    <p>
      Please answer the following questions to the best of your ability. Once we receive your test, we will correct your responses, determine your current level of Spanish, and send you feedback within 48 hours.
    </p>

    <p>
      Please provide us with real information. Do not use dictionaries and do not ask others for help. If you do not know one or more of the questions, it’s okay, please leave the answer blank.
    </p>

    <p>
      <strong>Please note:</strong> 
      if you choose to learn Spanish with us in Ecuador, you will take an additional Spanish proficiency test upon arrival. This ensures that your language program will be perfect for you!
    </p>




    <div class="row row-cols-1 row-cols-md-3">

    @foreach ($questions as $question)



        <div class="col mb-4">
          <ul class="list-group">
            <li class="list-group-item active">
                <h6>
              {{ $loop->index+1 }}.- {{ $question->question }}
            </h6>
            </li>
            <li class="list-group-item list-group-item-action" for="q{{ $loop->index+1 }}1">
              <div class="custom-control custom-radio">
                <input
                type="radio"
                class="custom-control-input"
                id="q{{ $loop->index+1 }}1"
                name="q{{ $loop->index+1 }}"
                value="1"
                required
                @if(old('q'.($loop->index+1))==1) checked @endif>
                <label class="custom-control-label" for="q{{ $loop->index+1 }}1">{{ $question->reply1 }}</label>
              </div>
            </li>
            <li class="list-group-item" for="q{{ $loop->index+1 }}2">
              <div class="custom-control custom-radio">
                <input
                type="radio"
                class="custom-control-input"
                id="q{{ $loop->index+1 }}2"
                name="q{{ $loop->index+1 }}"
                value="2"
                required
                @if(old('q'.($loop->index+1))==2) checked @endif>
                <label class="custom-control-label" for="q{{ $loop->index+1 }}2">{{ $question->reply2 }}</label>
              </div>
            </li>
            <li class="list-group-item list-group-item-action" for="q{{ $loop->index+1 }}3">
              <div class="custom-control custom-radio">
                <input
                type="radio"
                class="custom-control-input"
                id="q{{ $loop->index+1 }}3"
                name="q{{ $loop->index+1 }}"
                value="3"
                required
                @if(old('q'.($loop->index+1))==3) checked @endif>
                <label class="custom-control-label" for="q{{ $loop->index+1 }}3">{{ $question->reply3 }}</label>
              </div>
            </li>
          </ul>
        </div>

      <br>



    @endforeach

      </div>

    <div class="form-group">
      <label for="exampleFormControlTextarea1">

        <p>In at least 50 words, please describe yourself (in Spanish), and let us know the following:</p>
        <ol class="literals">
            <li>Who are you?</li>
            <li>Where do you live?</li>
            <li>What are your expectations for learning Spanish?</li>
            <li>Have you studied Spanish before?</li>
        </ol>

      </label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{ old('description') }}</textarea>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <button type="submit" class="form-control btn btn-info btn-ise" >Submit</button>
        </div>
    </div>
    @if (config('app.recaptcha.public_key'))
    <input id="recaptchaResponse" name="g-recaptcha-response" type="hidden"/>
    @endif

    

  </div>
    





</form>



@endsection

@push('script')

<script src="{{ asset('js/test.js') }}" defer></script>
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