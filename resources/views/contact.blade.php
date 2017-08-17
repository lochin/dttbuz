@extends('layout')
@section('title', 'Contact')
@section('content')

    <!-- Blog page banner -->
    <section id="banner" class="banner text-center">
        <div class="container">
            <div class="row">
                <h1>Contact Us</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis enim sit repudiandae, itaque impedit laboriosam fugit dignissimos debitis quod corrupti!</p>
            </div>
        </div>
    </section>
    <!-- banner ends -->

    <div class="contact">
        <div class="container">
            <div class="page-nav">
                <span class="heading-nav"><a href="index.html">Home</a> | Contact</span>
            </div>
            <div class="row">
                <div class="col-md-6 text-center">
                    <h3>Contact Information</h3>
                    <span>153 panam Street, New York gulistan 420 </span>
                    <br>
                    <span>United States</span>
                    <br>
                    <span>mail@medihere.com</span>
                    <br>
                    <span>+52890588934</span>

                    <div class="socials">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <form action="/contact" method="post">
                        {{ csrf_field() }}
                        <input name="name" type="text" placeholder="Name" value="{{ old('name') }}">
                        @if($errors->has('name'))
                            <div class="alert alert-danger small">{{ $errors->first('name') }}</div>
                        @endif
                        <input name="phone" type="text" placeholder="Phone" value="{{ old('phone') }}">
                        @if($errors->has('phone'))
                            <div class="alert alert-danger small">{{ $errors->first('phone') }}</div>
                        @endif
                        <input name="email" type="text" placeholder="Email" value="{{ old('email') }}">
                        @if($errors->has('email'))
                            <div class="alert alert-danger small">{{ $errors->first('email') }}</div>
                        @endif
                        <input name="subject" type="text" placeholder="Subject" value="{{ old('subject') }}">
                        @if($errors->has('subject'))
                            <div class="alert alert-danger small">{{ $errors->first('subject') }}</div>
                        @endif
                        <textarea name="message" rows="7" placeholder="Message" >{{ old('message') }}</textarea>
                        @if($errors->has('message'))
                            <div class="alert alert-danger small">{{ $errors->first('message') }}</div>
                        @endif
                        <input type="submit" value="Send Now">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection