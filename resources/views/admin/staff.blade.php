@extends('layouts.app')

@section('content')


	<div class="container" id="ocupation">
	    <div class="row justify-content-center">
		<div class="col-md-8">
	        <div class="card">
	            <div class="card-header">
	            	<h1>Сотрудники подразделения {{$ocupation->ocupation}}</h1>
	            	<hr>
					@foreach($staff as $person)
						<a href="/user/{{$person->id}}">
							<button type="submit" class="btn btn-primary" style="margin:.2rem;">
								{{$person->last_name}}
							</button>
						</a>
					@endforeach
                </div>

                <div class="card-body">

    <form method="POST" action="/addPerson">
        @csrf
        <input type="hidden" name="ocupation_id" value="{{$ocupation->id}}">
        @include('partuals.registration_form')
    </form>

				</div>

			</div>
		</div>	
		</div>
	</div>


@endsection