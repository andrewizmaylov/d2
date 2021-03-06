@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">

    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
        @csrf
        @include('partuals.registration_form')
    </form>
    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
