<div class="card">

    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          Information about your Travel Insurance Company
        </button>
      </h2>
    </div>

    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#student-info">
      <div class="card-body">

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="insuranceCompany">Insurance Company</label>
            <input type="text" class="form-control" id="insuranceCompany" name="insuranceCompany" placeholder="Insurance Company" value="{{ old('insuranceCompany') }}">
          </div>
          <div class="form-group col-md-6">
            <label for="policy">Policy &num;</label>
            <input type="text" class="form-control" id="policy" name="policy" placeholder="Policy &num;" value="{{ old('policy') }}">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="phone24">Phone # (24 hours)</label>
            <input type="phone" class="form-control" id="phone24" name="phone24" placeholder="Phone # (24 hours)" value="{{ old('phone24') }}">
          </div>
          <div class="form-group col-md-6">
            <label for="email2">Email</label>
            <input type="email" class="form-control" id="email2" name="email2" placeholder="Email" value="{{ old('email2') }}">
          </div>
        </div>

        <div class="form-row">
          <div class="col-6 my-1">
            <button type="button" class="btn btn-primary" v-on:click="previous2">Previous</button>
          </div>
          <div class="col-6 my-1 text-right">
            <button type="button" class="btn btn-primary" v-on:click="continue2">Continue</button>
          </div>
        </div>


      </div>
    </div>

</div>