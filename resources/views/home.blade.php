@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Добро пожаловать в систему, {{ Auth::user()->first_name }}

                    <form action="/phone" method="POST">
                        @CSRF
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">{{Auth::user()->phone()->first()->phone ?? null}}</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Ваш номер телефона" name="phone">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Добавить</button>
                            </div>
                        </div>
                    </form>
    
                    <form action="/addOcupation" method="POST">
                        @CSRF
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">{{Auth::user()->ocupation()->first()->ocupation ?? null}}</span>
                            </div>
                            <select class="custom-select" id="inputGroupSelect04" name="ocupation_id">
                                <option selected>Choose...</option>
                                @foreach($ocupations as $ocupation)
                                    <option value="{{$ocupation->id}}">{{$ocupation->ocupation}}</option>
                                @endforeach
                            </select>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit">Button</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
