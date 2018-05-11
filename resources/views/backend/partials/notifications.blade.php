@if($message = session('message'))
	<div class="box-body">
		<div class="alert alert-success alert-dismissible">
		    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		    {{ $message }}
		</div>
	</div>
@endif