@extends('layouts.app')

@section('content')

	<div class="container">

	    <div class="row justify-content-center">
	        <div class="col-md-8">
	            <div class="card">
	                <div class="card-header">
	                	User INFO
	                	<hr>
	                	{{$user->first_name}} {{$user->last_name}} <br>
	                	{{$user->email}} <br>
	                	{{($user->birthday)->bday ?? null}}
	                	@foreach($user->phone as $phone)
							<li>{{$phone->phone}}</li>
	                	@endforeach
						<hr>
					    <form method="POST" action="/addBirthday">
					        @csrf
					        <input type="hidden" name="user_id" value="{{$user->id}}">
					        @include('partuals.birthday_form')
					    </form>
					    <form method="POST" action="/addPhone">
					        @csrf
					        <input type="hidden" name="user_id" value="{{$user->id}}">
					        @include('partuals.phone_form')
					    </form>

	                </div>

	                <div class="card-body">
	                    @if (session('status'))
	                        <div class="alert alert-success" role="alert">
	                            {{ session('status') }}
	                        </div>
	                    @endif

	                    Добро пожаловать в систему, {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}

	                </div>
	            </div>
	        </div>
	    </div>
	</div>

@endsection