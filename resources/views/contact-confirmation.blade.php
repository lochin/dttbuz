@extends('layout')
@section('title', 'Contact confirmation')
@section('content')
<hr>
    <div class="confirmation">
        <div class="container">
            <div class="row">
                <div class="col-md-12 jumbotron">
                    <strong>Success!</strong>
                    <p>Thank you for contacting us, We will get you back shortly.</p>
                    <span> Go back <strong><a href="{{ route('home') }}">Home</a></strong></span>
                </div>
            </div>
        </div>
    </div>

@endsection