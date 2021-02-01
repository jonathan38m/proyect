<table class="table text-center">
  <thead>
    <tr>
      <th style="width: 10%;">#</th>
      <th style="width: 25%;">Location</th>
      <th style="width: 50%;">From</th>
      <th style="width: 15%;">Weeks</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
          <input type="checkbox" id="quito" placeholder="Quito" name="locationsQuito" value="Quito" />
      </td>
      <td>
          <label for="quito">Quito</label>
      </td>
      <td>
          @include('form.date', ['name' => 'dateQuitoFrom', 'required' => false, 'disabled' => true])
      </td>
      <td>
          @include('form.select', ['name' => 'weekslocationsQuito', 'max' => 25, 'disabled' => true])
      </td>  
    </tr>
    <tr>
      <td>
        <input type="checkbox" id="otavalo" placeholder="Otavalo" name="locationsOtavalo" value="Otavalo" >
      </td>
      <td>
        <label for="otavalo">Otavalo</label>
      </td>
      <td>
        @include('form.date', ['name' => 'dateOtavaloFrom', 'required' => false, 'disabled' => true])
      </td>
      <td>
        @include('form.select', ['name' => 'weekslocationsOtavalo', 'max' => 25, 'disabled' => true])
      </td>
    </tr>
    <tr>
      <td>
        <input type="checkbox" id="amazonJungle" placeholder="Amazon Jungle" name="locationsAmazon" value="Amazon Jungle" />
      </td>
      <td>
        <label for="amazonJungle">Amazon Jungle</label>
      </td>
      <td>
        @include('form.date', ['name' => 'dateAmazonJungleFrom', 'required' => false, 'disabled' => true])
      </td>
      <td>
        <select id="weeksAmazonJungle" name="weeksAmazonJungle" disabled="true" date-message=" You forgot to select weeks">
            <option value="" >---</option>
            <option value="1" {{ old('weeksAmazonJungle') == '1' ? ' selected' : ''  }}> 1</option>
            <option value="2" {{ old('weeksAmazonJungle') == '2' ? ' selected' : ''  }}> 2</option>
            <option value="3" {{ old('weeksAmazonJungle') == '3' ? ' selected' : ''  }}> 3</option>
            <option value="4" {{ old('weeksAmazonJungle') == '4' ? ' selected' : ''  }}> 4</option>
            <option value="5" {{ old('weeksAmazonJungle') == '5' ? ' selected' : ''  }}> 5</option>
            <option value="6" {{ old('weeksAmazonJungle') == '6' ? ' selected' : ''  }}> 6</option>
            <option value="7" {{ old('weeksAmazonJungle') == '7' ? ' selected' : ''  }}> 7</option>
            <option value="8" {{ old('weeksAmazonJungle') == '8' ? ' selected' : ''  }}> 8</option>
            <option value="9" {{ old('weeksAmazonJungle') == '9' ? ' selected' : ''  }}> 9</option>
            <option value="10" {{ old('weeksAmazonJungle') == '10' ? ' selected' : ''  }}> 10</option>
        </select>
      </td>
    </tr>
  </tbody>
</table>
<table class="table text-center" >
  <thead>
    <tr>
      <th style="width: 10%;">#</th>
      <th style="width: 25%;">Location</th>
      <th style="width: 25%;">Options</th>
      <th style="width: 25%;">From</th>
      <th style="width: 15%;">Weeks</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <input type="checkbox" id="indigenousCommunity" name="locationsIndigenous" value="Indigenous Community" />
      </td>
      <td>
        <label for="indigenousCommunity" >Indigenous Community</label>
      </td>
      <td>
        <select id="optionsIndigenousCommunity" name="optionsIndigenousCommunity" disabled="true" date-message=" You forgot to select options">
          <option value="">---</option>
          <option value="1">Andean Indigenous Community</option>
          <option value="2">Shuar Indigenous Community</option>
        </select>
      </td>
      <td>
        @include('form.date', ['name' => 'dateIndigenousCommunityFrom', 'required' => false, 'disabled' => true])
      </td>
      <td>
        <select id="weeksIndigenousCommunity" name="weeksIndigenousCommunity" disabled="true" date-message=" You forgot to select weeks">
            <option value="" >---</option>
            <option value="1" {{ old('weeksIndigenousCommunity') == '1' ? ' selected' : ''  }}> 1</option>
            <option value="2" {{ old('weeksIndigenousCommunity') == '2' ? ' selected' : ''  }}> 2</option>
            <option value="3" {{ old('weeksIndigenousCommunity') == '3' ? ' selected' : ''  }}> 3</option>
            <option value="4" {{ old('weeksIndigenousCommunity') == '4' ? ' selected' : ''  }}> 4</option>
            <option value="5" {{ old('weeksIndigenousCommunity') == '5' ? ' selected' : ''  }}> 5</option>
            <option value="6" {{ old('weeksIndigenousCommunity') == '6' ? ' selected' : ''  }}> 6</option>
            <option value="7" {{ old('weeksIndigenousCommunity') == '7' ? ' selected' : ''  }}> 7</option>
            <option value="8" {{ old('weeksIndigenousCommunity') == '8' ? ' selected' : ''  }}> 8</option>
            <option value="9" {{ old('weeksIndigenousCommunity') == '9' ? ' selected' : ''  }}> 9</option>
            <option value="10" {{ old('weeksIndigenousCommunity') == '10' ? ' selected' : ''  }}> 10</option>
          </select>
      </td>
    </tr>
    <tr>
      <td>
        <input type="checkbox" id="galapagosIslands" placeholder="Amazon Jungle" name="locationsGalapagos" value="Galapagos Islands" />
      </td>
      <td>
        <label for="galapagosIslands" >Galapagos Islands</label>
      </td>
      <td>
        <select id="optionsGalapagosIslands" name="optionsGalapagosIslands" style="max-width: 200px;" disabled="true" date-message=" You forgot to select options">
          <option value="">---</option>
          <option value="1">7-Day Spanish Immersion in the Galapagos Islands </option>
          <option value="2">14-Day Discovering Galapagos Spanish Program</option>
          <option value="3">14-Day Exploring the Galapagos Islands Spanish Program</option>
          <option value="4">11-Day Enchanting Galapagos Spanish Program</option>
        </select>
      </td>
      <td>
        @include('form.date', ['name' => 'dateGalapagosIslandsFrom', 'required' => false, 'disabled' => true])
      </td>
      <td></td>
    </tr>
    <tr>
      <td>
        <input type="checkbox" id="travellingClassroom" name="locationsTravelling" value="Travelling Classroom" />
      </td>
      <td>
        <label for="travellingClassroom" >Travelling Classroom</label>
      </td>
      <td>
        <select id="optionsTravellingClassroom" name="optionsTravellingClassroom" style="max-width: 200px;" disabled="true" date-message=" You forgot to select options">
          <option value="">---</option>
          <option value="1">Andes Amazon 7 Days </option>
          <option value="2">Andes Amazon 12 Days</option>
          <option value="3">Walking Through the Andes 12 Days</option>
          <option value="4">Experience Ecuador 16 Days</option>
          <option value="5">Exploring Ecuador 19 Days</option>
          <option value="6">Charles Darwin &amp; The Secrets of Evolution 15 Days</option>
        </select>
      </td>
      <td>
        @include('form.date', ['name' => 'dateTravellingClassroomFrom', 'required' => false, 'disabled' => true])
      </td>
      <td></td>
    </tr>
    <tr>
      <td>
        <input type="checkbox" id="interactivePackage" name="locationsPackege" value="Interactive Package" />
      </td>
      <td>
        <label for="interactivePackage">Interactive Package</label>
      </td>
      <td>
        <select id="optionsInteractivePackage" name="optionsInteractivePackage" style="width: 200px;" disabled="true" date-message=" You forgot to select options">
            <option value="" >---</option>
            <option value="1" {{ old('optionsInteractivePackage') == '1' ? ' selected' : ''  }}> 1</option>
            <option value="2" {{ old('optionsInteractivePackage') == '2' ? ' selected' : ''  }}> 2</option>
            <option value="3" {{ old('optionsInteractivePackage') == '3' ? ' selected' : ''  }}> 3</option>
            <option value="4" {{ old('optionsInteractivePackage') == '4' ? ' selected' : ''  }}> 4</option>
            <option value="5" {{ old('optionsInteractivePackage') == '5' ? ' selected' : ''  }}> 5</option>
            <option value="6" {{ old('optionsInteractivePackage') == '6' ? ' selected' : ''  }}> 6</option>
            <option value="7" {{ old('optionsInteractivePackage') == '7' ? ' selected' : ''  }}> 7</option>
            <option value="8" {{ old('optionsInteractivePackage') == '8' ? ' selected' : ''  }}> 8</option>
            <option value="9" {{ old('optionsInteractivePackage') == '9' ? ' selected' : ''  }}> 9</option>
            <option value="10" {{ old('optionsInteractivePackage') == '10' ? ' selected' : ''  }}> 10</option>
        </select>
      </td>
      <td>
        @include('form.date', ['name' => 'dateInteractivePackageFrom', 'required' => false, 'disabled' => true])
      </td>
      <td></td>
    </tr>
  </tbody>
</table>