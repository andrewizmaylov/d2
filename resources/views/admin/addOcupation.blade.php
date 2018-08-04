@extends('layouts.app')

@section('content')

	<div class="container" id="ocupation">
	    <div class="row justify-content-center">
		<div class="col-md-8">
	        <div class="card">
	            <div class="card-header">
	            	<h1>Manage content</h1>
	            	<hr>
					@foreach($ocupations as $ocupation)
						<a href="/ocupation/{{$ocupation->id}}">
							<button type="submit" class="btn btn-primary" style="margin:.2rem;">{{$ocupation->ocupation}}
							</button>
						</a>
					@endforeach
                </div>

                <div class="card-body">
                		<form action="/ocupation" method="POST" role="form"> 
                			@CSRF   
                			<div class="form-group">
                				<label for="ocupation">Добавьте специальность</label>
                				<input type="text" class="form-control" id="" placeholder="Input field" name="ocupation">
                			</div>

                			<button type="submit" class="btn btn-primary">Добавить</button>
                		</form>
				</div>
			</div>
		</div>	
		</div>
	</div>

@endsection