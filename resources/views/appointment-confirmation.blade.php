@extends('layout')
@section('title', 'Appointment confirmation')
@section('content')

    <div class="confirmation">
        <div class="container">
            <div class="row">
                <div class="col-md-12 jumbotron">
                    <strong>Success!</strong>
                    <p>Thank you for taking an appointment, We will note your informations and contact you shortly.</p>
                    <span> Go back <strong><a href="{{ route('home') }}">Home</a></strong></span>
                </div>
            </div>
        </div>
    </div>

@endsection