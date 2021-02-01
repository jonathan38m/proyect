    <div class="row">
  <div class="col-md-7">
      
      <table class="table">
        <tr>
            <th colspan="5" style="background-color: #FFF;">Courses Cart</th>
        </tr>  
        <tr>
            <th style="text-align: left; width: 30%;">Courses</th>
            <th style="text-align: left; width: 40%;">Options</th>
            <th style="text-align: left; width: 10%;">Prices (US$)</th>
            <th style="text-align: left; width: 10%;">Weeks / Qty</th>
            <th style="text-align: left; width: 10%;">Sub Total (US$)</th>
        <!--    <th style="text-align: left; width: 15%;">Total</th> -->
        </tr>
        <tr>
            <td><span class="course">No course selected</span></td>
            <td><span class="options">No option selected</span></td>
            <td><span class="price">0</span></td>
            <td><span class="weeks">0</span></td>
            <td><span class="subTotal">0</span></td>
        </tr>
      </table>  
     
      <table class="table">
        <tr>
            <th colspan="6" style="background-color: #FFF;">Accommodation Cart</th>
        </tr>
        <tr>
            <th style="text-align: left; width: 35%;">Accommodation</th>
            <th style="text-align: left; width: 25%;">Price</th>
            <th style="text-align: left; width: 12%;">Peoples</th>
            <th style="text-align: left; width: 13%;">Nights</th>
            <th style="text-align: left; width: 15%;">Total (US$)</th>
        </tr>
        <tr>
            <td class="accommo">No accommodation selected</td>
            <td>US$ <span class="accomPrice">0</span> / night</td>
            <td class="peoples"></td>    
            <td class="nights"></td>
            <td><span class="accomCost"></span></td>
        </tr>
      </table>
 
  </div>
  <div class="col-md-4" style="vertical-align: top;">

      <table class="table">
        <tr>
            <th colspan="2" style="background-color: #FFF;">Checkout</th>
        </tr>  
        <tr>
            <td><label>Courses Cost</label></td>
            <td>US$ <span class="coursesCost">0</span></td>
            <input type="hidden" class="courses_cost" name="courses_cost" value="0">    
        </tr>
        <tr>
            <td><label>Accommodation Cost</label></td>
            <td>US$ <span class="accomCheckoutCost">0</span></td>
            <input type="hidden" class="accommodation_cost" name="accommodation_cost" value="0">
        </tr>
        <tr>
            <td><label>Registration Fee</label></td>
            <td>US$ 40</td>
            <input type="hidden" class="registration_fee" name="registration_cost" value="40">
        </tr>
        <tr>
            <td>
                <label>Tax</label>
            </td>
            <td>
                US$ 0
            </td>
        </tr>
        <tr>
            <td colspan="2"><small>* Education in Ecuador does not charge taxes</small></td>
        </tr>  
        <tr>
            <td><label>Grand Total</label></td>
            <td><label>US$ <span class="grandTotal">40</span></label></td>
            <input type="hidden" class="grand_total" name="grand_total" value="40">
        </tr>  
      </table>

  </div>  
</div>
