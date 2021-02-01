<div class="row">
    <div class="col-md-6" style="vertical-align: top;">
        <div>
            <h4>Payment Methods</h4>
            <table class="table text-center tablePayment">
              <tbody>
                <tr>
                  <td>
                    <input id="pay1" type="radio" name="payment_method" value="1" checked="checked" />
                  </td>
                  <td>
                    <label for="pay1">Credit Card</label>
                  </td>
                </tr>
                <tr>
                  <td>
                    <input id="pay4" type="radio" name="payment_method" value="4" />
                  </td>
                  <td>
                    <label for="pay4">Western Union</label>
                  </td>
                </tr>
                <tr>
                  <td>
                    <input id="pay2" type="radio" name="payment_method" value="2" />
                  </td>
                  <td>
                    <label for="pay2">Bank Transfer</label>
                  </td>
                </tr>
                <tr>
                  <td>
                    <input id="pay3" type="radio" name="payment_method" value="3" />
                  </td>
                  <td>
                    <label for="pay3">Cash on Arrival</label>
                  </td>
                </tr>
              </tbody>
            </table>

            <br/>

            <table class="table">
              <tbody>
                <tr>
                  <td>
                    <input type="checkbox" name="termsConditions" id="termsConditions" required="required" date-message="You must accept our terms and conditions." /> 
                  </td>
                  <td>
                    <label for="termsConditions" >
                      I have read and agree to the <a data-toggle="modal" data-target="#terms-conditions">Terms &amp; Conditions</a> *
                    </label>

                    <div class="modal fade" id="terms-conditions" tabindex="-1" role="dialog" aria-labelledby="terms-conditions-label">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="terms-conditions-label">Terms &amp; Conditions</h4>
                          </div>
                          <div class="modal-body">
                            @include('booking-pay.terms-conditions')
                          </div>
                        </div>
                      </div>
                    </div>



                  </td>
                </tr>
              </tbody>
            </table>
            
            
            
        </div>

        <hr/>
        <div class="payment2" style="display:none;">
          <p>
              <strong>Please note:</strong>
              <ol>
                  <li>
                    Bank transfers need around 5 working days to come from your country to Ecuador.
                  </li>
                  <li>
                    Your bank needs only the above information to send us the money. They will find our bank in the international system of banks with the SWIFT code, it is not necessary an IBAN, ABA or any other different code.
                  </li>
              </ol> 

          </p>
        </div>
        <div class="payment4" style="display:none;">
          <p>
              <strong>Please note:</strong>
              <ol>
                  <li>
                    After you send your Booking request you will receive a confirmation email.  Please make sure to look for it in your email account.  In case you do not receive it please contact us by email, phone or through Skype.
                  </li>
                  <li>
                    You must confirm your payment to info@superiorspanishschool.com with the following details:
                    <ul>
                      <li>Sender's Name</li>
                      <li>Ammount sent</li>
                      <li>Wester Union MTCN Transaction Code</li>
                    </ul>
                  </li>
              </ol> 

          </p>
        </div>

    </div><div class="col-md-6">
      <div class="payment1" id="payment1">
            <div id="kushkiPaymentBox" class="clearfix">
              
                <input type="hidden" id="kushki-token" name="kushki-token">
                
                <div class="">
                  <div class="col-xs-12">
                    <div class="input-group">
                      <div class="input-group-addon"><span class="fa fa-user"></span></div>
                      <input class="form-control" type="text" id="kushki-card-name" name="kushki-card-name" value="" placeholder="Name">
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="input-group">
                      <div class="input-group-addon"><span class="fa fa-credit-card"></span></div>
                      <input class="form-control" type="number" id="kushki-card-number" name="kushki-card-number" value="" placeholder="Card Number">
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div class="input-group">
                      <div class="input-group-addon"><span class="fa fa-key"></span></div>
                      <input class="form-control" type="password" id="kushki-card-cvc" name="kushki-card-cvc" value="" placeholder="CVV">
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div class="input-group">
                      <div class="input-group-addon"><span class="fa fa-calendar"></span></div>
                      <input class="form-control" type="number" id="kushki-expiry-month" name="kushki-expiry-month" value="" placeholder="MM">
                    </div>
                  </div>
                  <div class="col-xs-4">
                    <div class="input-group">
                      <div class="input-group-addon"><span class="fa fa-calendar-o"></span></div>
                      <input class="form-control" type="number" id="kushki-expiry-year" name="kushki-expiry-year" value="" placeholder="YY">
                    </div>
                  </div>
                </div>
            </div>
            <div id="kushkiPaymentBoxAreaControllerWrapper" class="clearfix">
              <div id="kushkiPaymentBoxAreaController" class="clearfix"></div>
              <div class="paymentMask text-center">
                <a href="#" class="goForKushkiPayment btn btn-primary" style="font-size: 135%;padding: 10px 15px;">Go to Secure Credit Card Payment <span class="fa fa-check"></span></a>
              </div>
            </div>
        </div>
  
        <div class="payment2" style="display:none;">
            <table border="0" class="payment2">
                <tr>
                    <td><h4>Zahlung per Bank&uuml;berweisung </h4></td>
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

            <h4>Address of the beneficiary in Quito:</h4>
            <p>Guayaquil N9-77 y Oriente</p>
            <p>Quito - Ecuador</p>
            




        </div>
  
        <div class="payment4" style="display:none;">
            <table border="0" class="payment4">
                <tr>
                    <td><h4>Payment by Western Union </h4></td>
                </tr>  
            </table>  
            <p>
                Please send the complete payment of your invoice, together with Western Union transaction fees to a Western Union agency to the following recipient:
            </p>
            <p>
              Instituto Superior de Español
            </p>
            <p>
              Quito - Ecuador
            </p>

        </div>

        <div class="payment3" style="display:none;">  
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
</div>  
<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <div class="g-recaptcha" data-sitekey="{{ env('PUBLIC_KEY_CAPTCHA') }}" data-expired-callback="gReCaptchaExpireCallback"></div>
    </div>
  </div>
</div> 
