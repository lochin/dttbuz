@extends('layout')
@section('title', 'Home')
@section('content')

    <!--  slider section-->
    <section class="slider" id="slider">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/slide.jpg" alt="#" />
                    <div class="carousel-caption">
                        <h1 class="animated rotateInUpRight">Welcome to Medihere center</h1>
                        <p class="animated bounceInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum ipsa quod maxime laudantium cum sapiente.</p>
                        <a class="animated tada" href="#">read more</a>
                    </div>
                </div>
                <div class="item">
                    <img src="images/slide1.jpg" alt="#" />
                    <div class="carousel-caption">
                        <h1 class="animated bounceInLeft">We Care About You</h1>
                        <p class="animated bounceInRight">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut soluta, odio dignissimos iste hic fuga.</p>
                        <a class="animated bounceInUp" href="#">read more</a>
                    </div>
                </div>
                <div class="item">
                    <img src="images/slide2.jpg" alt="#" />
                    <div class="carousel-caption">
                        <h1 class="animated lightSpeedIn">We Promise Best Services</h1>
                        <p class="animated slideInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis deserunt ullam soluta exercitationem, voluptas commodi quidem.</p>
                        <a class="animated rotateIn" href="#">read more</a>
                    </div>
                </div>
                <div class="item">
                    <img src="images/slide3.jpg" alt="#" />
                    <div class="carousel-caption">
                        <h1 class="animated zoomIn">Health Is Divine</h1>
                        <p class="animated rollIn">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos repellat voluptatum in harum, debitis doloremque!</p>
                        <a class="animated zoomInUp" href="#">read more</a>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <i class="fa fa-angle-left" area-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <i class="fa fa-angle-right" area-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- slider ends -->



    <!-- appointment section -->
    <section class="appointment text-center" id="appointment">
        <div class="container">
            <div class="row">
                <h2>make an appointment</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta nobis rerum iure nostrum dolor. Quo totam possimus ex sapiente rerum.</p>
                <div class="col-md-6">
                    <img src="images/appointment.jpg" alt="#" class="img-responsive" title="Appointment with our great Doctors">
                </div>
                <div class="col-md-6">
                    <form action="appointment.php" method="post" class="form-horizontal">
                        <!-- first name -->
                        <div class="col-md-6 col-sm-6">
                            <input name="first_name" type="text" placeholder="First Name" class="form-control" required>
                        </div>
                        <!-- last name -->
                        <div class="col-md-6 col-sm-6">
                            <input name="last_name" type="text" placeholder="Last Name" class="form-control" required>
                        </div>
                        <!-- email address -->
                        <div class="col-md-6 col-sm-6">
                            <input name="email" type="email" placeholder="Email" class="form-control" required>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input name="phone" type="text" placeholder="Mobile Number" class="form-control">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <input name="date" type="text" id="datepicker" placeholder="mm/dd/yy" class="form-control" required>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <select name="gender" class="form-control">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="child">Child</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="col-md-12 clearfix">
                            <textarea name="message" id="appointment-message" rows="8" placeholder="Message" class="form-control"></textarea>
                        </div>
                        <div class="col-md-12">
                            <input type="submit" value="submit" class="form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- appointment seciton ends -->

    <!-- our services -->
    <section class="services" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>Our services</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque suscipit aliquam, pariatur vitae iste quisquam, assumenda. </p>
                    <div class="row">
                        <div class="col-md-12 single-services">
                            <!-- service 1 -->
                            <div class="col-md-6 col-sm-6">
                                <div class="single-service service-1">
                                    <span></span>
                                    <h3>heart checkup</h3>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                            <!-- service 2 -->
                            <div class="col-md-6 col-sm-6">
                                <div class="single-service service-2">
                                    <span></span>
                                    <h3>dental care</h3>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                            <!-- service 3 -->
                            <div class="col-md-6 col-sm-6">
                                <div class="single-service service-3">
                                    <span></span>
                                    <h3>ear treatment</h3>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                            <!-- service 4 -->
                            <div class="col-md-6 col-sm-6">
                                <div class="single-service service-4">
                                    <span></span>
                                    <h3>emergency care</h3>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                            <!-- service 5 -->
                            <div class="col-md-6 col-sm-6">
                                <div class="single-service service-5">
                                    <span></span>
                                    <h3>gen treatment</h3>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                            <!-- service 6 -->
                            <div class="col-md-6 col-sm-6">
                                <div class="single-service service-6">
                                    <span></span>
                                    <h3>DNA testing</h3>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 service-tb">
                    <img src="images/service.jpg" alt="medihere Services" class="img-responsive" title="Our Services Images">
                    <h3>why choose us</h3>
                    <div class="panel-group" id="general-questions">
                        <div class="panel faq-panel">
                            <div class="faq-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#general-questions" href="#gf1" aria-expanded="false">
                                        Well Experienced Doctors <i class="indicator glyphicon  pull-right glyphicon-plus"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="gf1" class="panel-collapse collapse" aria-expanded="false" role="tablist" style="height: 0px;">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim
                                </div>
                            </div>
                        </div>

                        <div class="panel faq-panel">
                            <div class="faq-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#general-questions" href="#gf2" aria-expanded="false">
                                        Feel Like you are at Home Services <i class="indicator glyphicon pull-right glyphicon-plus"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="gf2" role="tablist" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim
                                </div>
                            </div>
                        </div>

                        <div class="panel faq-panel">
                            <div class="faq-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#general-questions" href="#gf3" aria-expanded="false">
                                        Online Bill Payment <i class="indicator glyphicon glyphicon-plus pull-right"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="gf3" role="tablist" class="panel-collapse collapse" aria-expanded="false">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service section ends -->

@include('partials.team')

    <!-- about section -->
    <section class="home-about text-center">
        <div class="aboverlay"></div>
        <div class="container">
            <div class="row">
                <div class="about-heading">
                    <h2>See what Patients saying about us</h2>
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea voluptas a, illum rerum asperiores. Illum.</span>
                </div>
                <div id="about-content" class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="images/patient1.jpg" alt="The Last of us">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum voluptatem quae, dicta molestias optio tempore quasi iste, repellat quam. Accusamus, perferendis qui aliquid voluptatibus laborum fugiat rerum, ab labore animi inventore nam quas eaque ducimus vel deleniti. Eveniet perferendis minima quos temporibus fuga doloremque magnam, sequi eligendi est. Nobis voluptas repellat quis nostrum, rerum est tempore excepturi quibusdam eveniet ullam nam.</p>
                        <h3>Luis PK <span>( CEO, Ghurar dim )</span></h3>
                        <h4>VIP Patient</h4>
                    </div>
                    <div class="item">
                        <img src="images/patient2.jpg" alt="The Last of us">
                        <p>Laudantium quis, aliquid commodi excepturi doloribus voluptatum debitis, pariatur incidunt harum quibusdam obcaecati quo saepe similique, temporibus eum minima magnam quaerat optio in suscipit nemo enim sint. Rerum vero ipsum autem recusandae tempore quis asperiores, velit? Quis, atque, quaerat.</p>
                        <h3>Apod A, M <span>(President, T E O center )</span></h3>
                        <h4>Regular patient</h4>
                    </div>
                    <div class="item">
                        <img src="images/patient3.jpg" alt="The Last of us">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae molestias, dolorem neque sunt consequatur, ea cumque. Soluta possimus, animi doloribus natus sequi rem aliquam at fuga minus! Unde facilis obcaecati vel officia at nulla pariatur, similique provident vitae voluptates odit cupiditate adipisci est, inventore tempore fugiat atque accusantium minima eaque!</p>
                        <h3>Kate Bouche <span>( Accountant, J Y Association )</span></h3>
                        <h4>Dental Patient</h4>
                    </div>
                    <div class="item">
                        <img src="images/patient4.jpg" alt="The Last of us">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae molestias, dolorem neque sunt consequatur, ea cumque. Soluta possimus, animi doloribus natus sequi rem aliquam at fuga minus! Unde facilis obcaecati vel officia at nulla pariatur, similique provident vitae voluptates odit cupiditate adipisci est, inventore tempore fugiat atque accusantium minima eaque!</p>
                        <h3>Tomas D L <span>( MD, F P Magnatic )</span></h3>
                        <h4>VIP Patient</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section ends -->

    <!-- news section -->
    <section class="latest-post" id="blog">
        <div class="container">
            <div class="row">
                <div class="latest-news-heading col-md-12">
                    <h2>Latest Posts from our Blog</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, excepturi, molestiae? Nihil facilis laudantium esse iste aspernatur! Asperiores impedit, voluptatem.</p>
                    <a href="{{ route('blog') }}" class="btn btn-info text-right">See All Posts <i class="fa fa-angle-right"></i></a>
                </div>
                <div class="latest-posts-contents">
                    <div class="col-md-4 col-sm-6 single-latest-post">
                        <img src="images/news1.jpg" alt="#" title="medihere Blog Post">
                        <h3><a href="{{ route('blog-single') }}">Blog Post Title Goes Here</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, commodi minus autem quae doloremque dolore. <a href="#">Read More</a></p>
                        <div class="post-meta">
                            <span class="meta-time"><i class="fa fa-calendar"></i> 19 February 2016</span>
                            <span class="meta-comment"><a href="#"><i class="fa fa-comment-o"></i> 3 Comments</a></span>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 single-latest-post">
                        <img src="images/news2.jpg" alt="#" title="medihere Blog Post">
                        <h3><a href="{{ route('blog-single') }}">Blog Post Title Goes Here</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, commodi minus autem quae doloremque dolore. <a href="#">Read More</a></p>
                        <div class="post-meta">
                            <span class="meta-time"><i class="fa fa-calendar"></i> 17 February 2016</span>
                            <span class="meta-comment"><a href="#"><i class="fa fa-comment-o"></i> 4 Comments</a></span>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 single-latest-post">
                        <img src="images/news3.jpg" alt="#" title="medihere Blog Post">
                        <h3><a href="{{ route('blog-single') }}">Blog Post Title Goes Here</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, commodi minus autem quae doloremque dolore. <a href="#">Read More</a></p>
                        <div class="post-meta">
                            <span class="meta-time"><i class="fa fa-calendar"></i> 14 February 2016</span>
                            <span class="meta-comment"><a href="#"><i class="fa fa-comment-o"></i> 6 Comments</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- latest news section ends -->

@endsection
