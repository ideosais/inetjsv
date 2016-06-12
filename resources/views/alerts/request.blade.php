@if(count($errors)>0)
	<div class="alert alert-warning alert-dismissible fade in" role="alert" >
		<i class="glyphicon glyphicon-info-sign"></i>
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <ul>
	  	@foreach($errors->all() as $error)
	  		<li>{!!$error!!}</li>
	  	@endforeach
	  </ul>
	</div>
@endif