<div class="card">

  <div class="card-header" id="headingOne">
    <h2 class="mb-0">
      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Basic Information
      </button>
    </h2>
  </div>

  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#student-info">
    <div class="card-body">


      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="lname">* Last Name</label>
          <input 
          type="text" 
          class="form-control @error('lname') is-invalid @enderror"
          id="lname"
          name="lname"
          v-model="lname"
          value="{{ old('lname') ?  old('lname') : $booking->lname }}" >
          @error('lname')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="form-group col-md-6">
          <label for="fname">* First Name</label>
          <input
          type="text"
          class="form-control @error('fname') is-invalid @enderror"
          id="fname"
          name="fname"
          v-model="fname"
          value="{{ old('fname') ?  old('fname') : $booking->fname }}" >
          @error('fname')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="email">* Email</label>
          <input
          type="email"
          class="form-control @error('email') is-invalid @enderror"
          id="email"
          name="email"
          v-model="email"
          value="{{ old('email') ?  old('email') : $booking->email }}" >
          @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="form-group col-md-6">
          <label for="bday">* Birth Date</label>
          @include('form.date', ['name' => 'bday', 'vue' => 'bday'])
          @error('bday')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="sex">* Gender</label>
          <br>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio"
            id="sex"
            name="sex"
            v-model="sex"
            class="custom-control-input @error('sex') is-invalid @enderror" 
            value="1" {{ old('sex') == 1 ?  'checked' : '' }} >
            <label class="custom-control-label" for="sex">Male</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input
            type="radio"
            id="female"
            name="sex"
            v-model="sex"
            class="custom-control-input @error('sex') is-invalid @enderror" 
            value="2" {{ old('sex') == 2 ?  'checked' : '' }} >
            <label class="custom-control-label" for="female">Female</label>
            @error('sex')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
        <div class="form-group col-md-6">
          <label for="country">* Nationality</label>
          @include('form.country', ['name' => 'country', 'vue' => 'country'])
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="tel">Telephone</label>
          <input type="tel" class="form-control" id="tel" name="tel" value="{{ old('tel') }}" placeholder="Telephone" >
        </div>
        <div class="form-group col-md-6">
          <label for="passport">* Passport #</label>
          <input
          type="text"
          class="form-control @error('passport') is-invalid @enderror"
          id="passport"
          name="passport"
          v-model="passport"
          value="{{ old('passport') }}"
          placeholder="Passport" >
          @error('passport')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="emergencyName">Emergency Contact Person</label>
          <input type="text" class="form-control" id="emergencyName" name="emergencyName" value="{{ old('emergencyName') }}" placeholder="Emergency Contact Person" >
        </div>
        <div class="form-group col-md-6">
          <label for="tel2">* Telephone</label>
          <input
          type="text"
          class="form-control @error('tel2') is-invalid @enderror"
          id="tel2"
          name="tel2"
          value="{{ old('tel2') }}"
          v-model="tel2"
          placeholder="+1 617 253 5702" >
          @error('tel2')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
      </div>


      <div class="form-row">
        <div class="col-6 my-1"></div>
        <div class="col-6 my-1 text-right">
          <button type="button" class="btn btn-primary" v-on:click="continue1">Continue</button>
        </div>
      </div>

    </div>
  </div>

</div>

        
