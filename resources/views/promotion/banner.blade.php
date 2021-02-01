<a type="button"  data-toggle="modal" data-target="#formpromotion">
  <img class="promotion" style="max-width:100%;" src="{{ URL::asset( 'images/promotion/LearnSpanish2019Promotion.jpg') }}">
  <img class="promotion-400" style="max-width:100%;" src="{{ URL::asset( 'images/promotion/LearnSpanish2019Promotion400.jpg') }}">
</a>

<!-- Modal -->
<div class="modal fade" id="formpromotion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="modal-title" id="exampleModalLabel">Inquire for more Information</h3>
      </div>
      <div class="modal-body">
        
        <form method="POST" action="{{ route('promotion') }}" > 
          {{ csrf_field() }}
          <div class="form-group">
            <label for="name">Name*</label>
            <input type="text" class="form-control" id="name" name="fname" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="lname">Last Name*</label>
            <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">E-mail*</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
          </div>
          <div class="form-group">
            <label for="message">Message*</label>
            <textarea class="form-control" id="message" name="message"></textarea>
          </div>
          <div class="form-group">
            <div class="g-recaptcha" data-sitekey="{{ config('app.recaptcha.public_key') }}"></div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Send</button>
          </div>
        </form>
        
      </div>
    </div>
  </div>
</div>