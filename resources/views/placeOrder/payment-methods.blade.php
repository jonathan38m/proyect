<div class="col-md-3" style="vertical-align: top;">
                <h4>Payment Methods</h4>
                <br/>
                <ul>
                    <li>
                        <input type="radio" name="payment_method" value="1" checked="checked" /> Credit Card
                    </li>
                    <li>
                        <input type="radio" name="payment_method" value="2" /> Bank Transfer
                    </li>
                    <li>
                        <input type="radio" name="payment_method" value="3" /> Cash on Delivery
                    </li>
                </ul>          
            </div>
            <div class="col-md-8">
                <div class="payment1">
                    <table border="0">
                      <tr>
                          <td><h4>Credit Card </h4></td>
                          <td>&nbsp;&nbsp;&nbsp;</td>
                          <td> <img src="{{ URL::asset('images/icons/card_type_icons.png') }}" style="width: 100px; height: 25px;" /></td>
                      </tr>  
                    </table>  
                    <p>Pay securely using your credit card.</p>        
                    <table class="table" border="0">
                      <tbody>
                        <tr>
                          <td colspan="2">
                              <label>Credit Card Number</label>
                              <input type="number" id="ccnum" name="ccnum" class="form-control" required>
                          </td>
                        </tr>  
                        <tr>  
                          <td colspan="2">  
                              <label>Card Validation Code (3 or 4 digit number)</label>
                              <input type="number" id="cvc" name="cvc" class="form-control" required>
                          </td>
                        </tr>
                        <tr>
                          <td>
                              <label>Expiry Month</label>
                              <select id="expiry_month" name="expiry_month" class="form-control" required>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="6">6</option>
                                  <option value="7">7</option>
                                  <option value="8">8</option>
                                  <option value="9">9</option>
                                  <option value="10">10</option>
                                  <option value="11">11</option>
                                  <option value="12">12</option>
                              </select>  
                          </td>
                          <td> 
                              <label>Expiry Year</label>
                              <select id="expiry_year" name="expiry_year" class="form-control" required>
                                  <option value="2018">2018</option>
                                  <option value="2019">2019</option>
                                  <option value="2020">2020</option>
                                  <option value="2021">2021</option>
                                  <option value="2022">2022</option>
                                  <option value="2023">2023</option>
                              </select>
                          </td>  
                        </tr>
                        
                       </tbody> 
                    </table> 

                </div> 
          
                <div class="payment2">
                    <table border="0" class="payment2">
                        <tr>
                            <td><h4>Payment by Bank Transfer </h4></td>
                        </tr>  
                    </table>  
                    <p>
                        Please send the complete payment of your invoice to our bank account in Ecuador and 
                        <strong><em>please pay all fees for the bank transfer</em></strong>:
                    </p>
                    <h4>BANCO PICHINCHA</h4>    
                    <h4>SWIFT:  PICHECEQ</h4>
                    <h4>Address: Av. Amazonas 4545 y Pereira</h4>
                    <h4>Account name: INSTITUTO SUPERIOR DE ESPAÑOL</h4>
                    <h4>Account number: 21 00 16 38 51</h4>
                    <h4>Quito – Ecuador</h4>
                    <hr/>
                    <p>
                        <strong>Please note:</strong>
                        <ol>
                            <li>Bank transfers need around 5 working days to come from your country to Ecuador.</li>
                            <li>Your bank needs only the above information to send us the money. They will find our bank in the international system of banks with the SWIFT code, it is not necessary an IBAN, ABA or any other different code.</li>
                        </ol> 

                    </p>
                </div>

                <div class="payment3">  
                    <table border="0" class="payment3">
                        <tr>
                            <td><h4>Payment by US$ Cash upon arrival </h4></td>
                        </tr>  
                    </table>  
                    <p>
                        Please bring the complete amount of your payment by US $ cash and pay at our office in Quito in the first morning at our Spanish Institute before starting with your Spanish course. Please also note that once in Ecuador we only accept payments by US $ cash.
                    </p>
                      
                </div>    
            </div>