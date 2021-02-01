<div class="row">

  <div class="col-md-12">
    <div class="form-group">
      <label>
        Do You Wish To Be Met At The Airport In Quito? (free of charge at any day of the week and at any time)
      </label>
    </div>
    <div class="form-group">
      <input type="radio" id="airportQuitoY" value="1" name="airportQuito" checked="checked">
      <label for="airportQuitoY">Yes</label>
    </div>
    <div class="form-group">
      <input type="radio" id="airportQuitoN" value="2" name="airportQuito" >
      <label for="airportQuitoN">No</label>
    </div>
  </div>
</div>


<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      <label for="dateArrival">Date of Arrival</label>
      @include('form.date', ['name' => 'dateArrival', 'required' => false, 'disabled' => false])
    </div>
  </div><div class="col-md-6">
    <div class="form-group">
      <label for="timeArrival">Time of Arrival</label>
      <input type="time" class="form-control" id="timeArrival" placeholder="Time of Arrival" name="timeArrival">
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      <label for="airlineCompany">Airline Company</label>
      <input type="text" class="form-control" id="airlineCompany" placeholder="Airline Company" name="airlineCompany">
    </div>
  </div><div class="col-md-6">
    <div class="form-group">
      <label for="flightNumber">Flight Number</label>
      <input type="text" class="form-control" id="flightNumber" placeholder="Flight Number" name="flightNumber">
    </div>
  </div>
</div>