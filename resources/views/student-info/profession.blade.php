<div class="card">
  <div class="card-header" id="headingThree">
    <h2 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Profession
      </button>
    </h2>
  </div>
  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#student-info">
    <div class="card-body">
      



      <div class="form-group">
        <label for="profession">Profession</label>
        <textarea class="form-control" id="profession" rows="3" name="profession"
        placeholder="If you are a student, please specify your major, level and School/University">{{ old('profession') }}</textarea>
      </div>

      <div class="form-group">
        <label for="hobbies">Interest / Hobbie</label>
        <textarea class="form-control" id="hobbies" rows="3" name="hobbies"
        placeholder="Interest / Hobbies">{{ old('hobbies') }}</textarea>
      </div>

      <div class="form-row">
        <div class="col-6 my-1">
          <button type="button" class="btn btn-primary" v-on:click="previous3">Previous</button>
        </div>
        <div class="col-6 my-1 text-right">
          <button type="button" class="btn btn-primary" v-on:click="continue3">Continue</button>
        </div>
      </div>




    </div>
  </div>
</div>