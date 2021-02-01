<div class="card">

  <div class="card-header" id="headingFour">
    <h2 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        Important Information for your Host
      </button>
    </h2>
  </div>
  <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#student-info">
    <div class="card-body">
      




      <div class="form-row">
        <div class="form-group col-md-4">
          <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="youSmoke" name="youSmoke" value="1"  {{ old('youSmoke') ? 'checked' : '' }} >
            <label class="custom-control-label" for="youSmoke">Do you smoke ?</label>
          </div>
        </div>
        <div class="form-group col-md-4">
          <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="youVegetarian" name="youVegetarian" value="1"  {{ old('youVegetarian') ? 'checked' : '' }} >
            <label class="custom-control-label" for="youVegetarian">Are you vegetarian ?</label>
          </div>
        </div>
        <div class="form-group col-md-4">
          <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="haveAllergies" name="haveAllergies" value="1"  {{ old('haveAllergies') ? 'checked' : '' }} >
            <label class="custom-control-label" for="haveAllergies">Do you have allergies ?</label>
          </div>
        </div>
      </div>


      <div class="form-group">
        <label for="pleaseSpecify">Please specify any dietary restrictions or allergies as well as any additional details your accommodation needs to be aware of</label>
        <textarea class="form-control" id="pleaseSpecify" rows="3" name="pleaseSpecify"  placeholder="Please be specific">{{ old('pleaseSpecify') }}</textarea>
      </div>

        <div class="form-group">
          @if (config('app.recaptcha.public_key'))
            <input id="recaptchaResponse" name="g-recaptcha-response" type="hidden"/>
            @endif
        </div>

      <div class="form-row">
        <div class="col-6 my-1">
          <button type="button" class="btn btn-primary" v-on:click="previous4">Previous</button>
        </div>
        <div class="col-6 my-1 text-right">
          <button type="submit" class="btn btn-primary">Send</button>
        </div>
      </div>


    </div>
  </div>

  </div>

