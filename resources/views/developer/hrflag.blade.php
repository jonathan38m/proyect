
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<div class="container">
	
	<form action="{{ route('hrflag-save') }}" method="POST" id="bookingForm">

	  {{ csrf_field() }}

		<div class="row">
		  	<div class="col-md-12">
			    <div class="form-group">
			      <label for="alias">Alias *</label>
			      <input type="text" class="form-control" name="alias" id="alias" required="true" />
			    </div>
			</div>
			<div class="col-md-12 ">
				<div class="form-group">
				  <label for="flag">Flag *</label>
				  <input type="text" class="form-control" name="flag" id="flag" value="ru" required="true" />
				</div>
			</div>
			<div class="col-md-12 ">
				<div class="form-group">
				  <label for="article">Article *</label>
			      <input type="number" class="form-control" name="article" id="article" required="true" />
				</div>
			</div>
			<div class="col-md-12 ">
				<div class="form-group">
				  <button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
			
		</div>

	</form>


</div>

