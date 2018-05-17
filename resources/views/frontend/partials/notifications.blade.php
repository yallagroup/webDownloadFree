@if($message = session('message'))
	<div class="box-body">
		<div class="alert alert-success alert-dismissible">
		    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		    {{ $message }}
		</div>
	</div>
@endif

@if(count($errors))
	<div class="box-body">
		<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	</div>
@endif