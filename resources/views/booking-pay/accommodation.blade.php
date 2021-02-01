<div class="row">
  <div class="col-md-6 text-center">
    <div class="form-group">

      <label for="dateAccommodationFrom">Check In :</label>
      @include('form.date', ['name' => 'dateAccommodationFrom', 'required' => false, 'disabled' => false, 'message' => 'You forgot to put starting date'])
    </div>
  </div><div class="col-md-6 text-center">
    <div class="form-group">

      <label for="dateAccommodationTo">Check Out :</label>
      @include('form.date', ['name' => 'dateAccommodationTo', 'required' => false, 'disabled' => false, 'message' => 'You forgot to put your ending date'])
    </div>
  </div>
</div>



<div class="row">

  <div class="col-md-6" style="vertical-align: top;">
    <h5>
      Please select the accommodation of your choice:
    </h5>
    <table class="table text-center">
      <thead>
        <tr>
          <th>
            #
          </th>
          <th>
            Accommodation
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <input type="radio" id="hostFamily" class="accommSelect" value="1" name="accommodation" checked />
          </td>
          <td>
            <label for="hostFamily"> Host Family</label>
          </td>
        </tr>
        <tr>
          <td>
            <input type="radio" id="studentResidence" class="accommSelect" value="2" name="accommodation" >
          </td>
          <td>
            <label for="studentResidence"> Student Residence with breakfast in Quito</label>
          </td>
        </tr>
        <tr>
          <td>
            <input type="radio" id="wishAccommodation" class="accommSelect" value="3" name="accommodation" >
          </td>
          <td>
            <label for="wishAccommodation">  I wish to organize my own accommodation</label>
          </td>
        </tr>
      </tbody>
    </table>
  </div><div class="col-md-6">

    <h5>
      Please fill the datails:
    </h5>
    <div id="accommodation1" >

      <table class="table" style="margin-bottom: 10px;">
        <tbody>
          <tr>
            <td>
              <label for="mealDayFamily"> Meals per day:</label>
            </td>
            <td>
              <select id="mealDayFamily" name="mealDayFamily" style="max-width: 200px;">
                <option value="">---</option>
                <option value="2"> 2</option>
                <option value="3"> 3 (only available in Otavalo)</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>
              <label for="bathroomFamily">Bathroom:</label>
            </td>
            <td>
              <select id="bathroomFamily" name="bathroomFamily" style="max-width: 200px;">
                <option value="">---</option>
                <option value="1"> Private</option>
                <option value="2"> Shared</option>
              </select>
            </td>
          </tr> 
        </tbody>
      </table>

    </div>

    <div id="accommodation2">
      <table class="table">
        <tbody>  
          <tr>
            <td>
              <label for="howManyPeople">How many people:</label>
            </td>
            <td>
              <select id="howManyPeople" name="howManyPeople">
                <option value="">--</option>
                <option value="1">(1) Just Myself</option>
                <option value="2">(2) Myself And Partner / Husband / Wife</option>
                <option value="2">(2) Myself And Friend / Traveling Companion</option>
                <option class="threefour" value="3" style="display: none;">(3) Myself And Friend / Traveling Companions</option>
                <option class="threefour" value="4" style="display: none;">(4) Myself And Friend / Traveling Companions</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>
              <label for="typeRoom">Type of Room:</label>
            </td>
            <td>
              <select id="typeRoom" name="typeRoom">
                <option value="">--</option>
            <!--    <option value="1">Matrimonial</option>  -->
                <option value="2">Single</option>
                <option value="3">Double</option>
                <option class="threefour" value="4" style="display: none;">Dormitory</option>    
              </select>
            </td>
          </tr>
        </tbody>
      </table>
    </div>


    <div id="accommodation3" style="display: none;">

      <table class="table">
        <tbody>
          <tr>
            <td>
              <label for="wishAccommodationHotel">Name of Hotel/Hostel</label>
            </td>
            <td>
              <input type="text" class="form-control" id="nameHotel" placeholder="Hotel/Hostel" name="nameHotel" >
            </td>
          </tr>
          <tr>
            <td>
              <label for="wishAccommodationAddress">Address of my accommodation</label>
            </td>
            <td>
              <input type="text" class="form-control" id="addressAccommodation" placeholder="Address of my accommodation" name="addressAccommodation" >
            </td>
          </tr>
          <tr>
            <td>
              <label for="wishAccommodationPhone">Phone of my accommodation</label>
            </td>
            <td>
              <input type="phone" class="form-control" id="phoneAccommodation" placeholder="Phone of my accommodation" name="phoneAccommodation" >
            </td>
          </tr>
        </tbody>
      </table>
      
    </div>

    

  </div>
</div>


