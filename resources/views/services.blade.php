@extends('layout')
@section('title', 'Services')
@section('content')

    <!-- Blog page banner -->
    <section id="banner" class="banner text-center">
        <div class="container">
            <div class="row">
                <h1>Medihere Services</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis enim sit repudiandae, itaque impedit laboriosam fugit dignissimos debitis quod corrupti!</p>
            </div>
        </div>
    </section>
    <!-- banner ends -->

    <!-- services -->
    <section class="service">
        <div class="container">
            <div class="page-nav">
                <span class="heading-nav"><a href="{{ route('home') }}">Home</a> | Services</span>
            </div>
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="service-heading">
                        <h2>Our services</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque suscipit aliquam, pariatur vitae iste quisquam, assumenda. </p>
                    </div>
                    <div class="row">
                        <div class="col-md-12 single-services">
                            <!-- service 1 -->
                            <div class="col-md-4 col-sm-6">
                                <div class="single-service service-1">
                                    <span></span>
                                    <h3>heart checkup</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque inventore, nesciunt assumenda incidunt commodi officia.</p>
                                </div>
                            </div>
                            <!-- service 2 -->
                            <div class="col-md-4 col-sm-6">
                                <div class="single-service service-2">
                                    <span></span>
                                    <h3>dental care</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque inventore, nesciunt assumenda incidunt commodi officia.</p>
                                </div>
                            </div>
                            <!-- service 3 -->
                            <div class="col-md-4 col-sm-6">
                                <div class="single-service service-3">
                                    <span></span>
                                    <h3>ear treatment</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque inventore, nesciunt assumenda incidunt commodi officia.</p>
                                </div>
                            </div>
                            <!-- service 4 -->
                            <div class="col-md-4 col-sm-6">
                                <div class="single-service service-4">
                                    <span></span>
                                    <h3>emergency care</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque inventore, nesciunt assumenda incidunt commodi officia.</p>
                                </div>
                            </div>
                            <!-- service 5 -->
                            <div class="col-md-4 col-sm-6">
                                <div class="single-service service-5">
                                    <span></span>
                                    <h3>gen treatment</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque inventore, nesciunt assumenda incidunt commodi officia.</p>
                                </div>
                            </div>
                            <!-- service 6 -->
                            <div class="col-md-4 col-sm-6">
                                <div class="single-service service-6">
                                    <span></span>
                                    <h3>DNA testing</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque inventore, nesciunt assumenda incidunt commodi officia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="hospital text-center sp-hospital">
        <div class="container">
            <div class="row">
                <h2>our hostpital</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum doloribus, vel ipsum assumenda, placeat quia.</p>
                <img src="images/hospital.jpg" alt="#" class="img-responsive" title="Medihere Hospital">
            </div>
        </div>
    </div>

@include('partials.team')

@endsection