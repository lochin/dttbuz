@extends('layout')
@section('title', 'Blog')
@section('content')

    <!-- Blog page banner -->
    <section id="banner" class="banner text-center">
        <div class="container">
            <div class="row">
                <h1>Medihere Blog</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis enim sit repudiandae, itaque impedit laboriosam fugit dignissimos debitis quod corrupti!</p>
            </div>
        </div>
    </section>
    <!-- banner ends -->

    <!-- blog Page content -->
    <section class="blog">
        <div class="container">
            <div class="page-nav">
                <span class="heading-nav"><a href="{{ route('home') }}">Home</a> | Blog</span>
            </div>
            <div class="row">
                <!-- blog content -->
                <div class="col-md-9 blog-content">

                    <article class="single-post">
                        <div class="post-thumb">
                            <a href="{{ route('blog-single') }}"> <img src="images/news1.jpg" alt="#" title="Lorem ipsum dolor sit amet."></a>
                        </div>
                        <div class="post-content">
                            <h2><a href="{{ route('blog-single') }}">Lorem ipsum dolor sit amet, consectetur.</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore unde quis delectus laudantium quas ullam alias perferendis commodi tempore corporis, nisi iusto illum nesciunt aut, voluptas optio impedit neque labore animi consequatur ipsam. Modi tenetur, id dolor. Natus, sed, necessitatibus. <a href="blog-single.html">Read More <i class="fa fa-angle-double-right"></i></a></p>

                            <div class="post-meta">
                                <ul class="list-inline">
                                    <li class="post-date"><i class="fa fa-calendar"></i> 21 February 2016</li>
                                    <li><a href="#"><i class="fa fa-user-md"></i> Autor</a></li>
                                    <li class="post-comment"><a href="#"><i class="fa fa-comments-o"></i> 8 comments</a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    <!-- single post -->
                    <article class="single-post">
                        <div class="post-thumb">
                            <a href="{{ route('blog-single') }}"> <img src="images/news2.jpg" alt="#" title="Lorem ipsum dolor sit amet."></a>
                        </div>
                        <div class="post-content">
                            <h2><a href="{{ route('blog-single') }}">Lorem ipsum dolor sit amet, consectetur.</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore unde quis delectus laudantium quas ullam alias perferendis commodi tempore corporis, nisi iusto illum nesciunt aut, voluptas optio impedit neque labore animi consequatur ipsam. Modi tenetur, id dolor. Natus, sed, necessitatibus. <a href="blog-single.html">Read More <i class="fa fa-angle-double-right"></i></a></p>

                            <div class="post-meta">
                                <ul class="list-inline">
                                    <li class="post-date"><i class="fa fa-calendar"></i> 21 February 2016</li>
                                    <li><a href="#"><i class="fa fa-user-md"></i> Autor</a></li>
                                    <li class="post-comment"><a href="#"><i class="fa fa-comments-o"></i> 8 comments</a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    <!-- single post -->
                    <article class="single-post">
                        <div class="post-thumb">
                            <a href="{{ route('blog-single') }}"> <img src="images/news3.jpg" alt="#" title="Lorem ipsum dolor sit amet."></a>
                        </div>
                        <div class="post-content">
                            <h2><a href="{{ route('blog-single') }}">Lorem ipsum dolor sit amet, consectetur.</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore unde quis delectus laudantium quas ullam alias perferendis commodi tempore corporis, nisi iusto illum nesciunt aut, voluptas optio impedit neque labore animi consequatur ipsam. Modi tenetur, id dolor. Natus, sed, necessitatibus. <a href="blog-single.html">Read More <i class="fa fa-angle-double-right"></i></a></p>

                            <div class="post-meta">
                                <ul class="list-inline">
                                    <li class="post-date"><i class="fa fa-calendar"></i> 21 February 2016</li>
                                    <li><a href="#"><i class="fa fa-user-md"></i> Autor</a></li>
                                    <li class="post-comment"><a href="#"><i class="fa fa-comments-o"></i> 8 comments</a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    <!-- single post -->
                    <article class="single-post">
                        <div class="post-thumb">
                            <a href="{{ route('blog-single') }}"> <img src="images/news4.jpg" alt="#" title="Lorem ipsum dolor sit amet."></a>
                        </div>
                        <div class="post-content">
                            <h2><a href="{{ route('blog-single') }}">Lorem ipsum dolor sit amet, consectetur.</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore unde quis delectus laudantium quas ullam alias perferendis commodi tempore corporis, nisi iusto illum nesciunt aut, voluptas optio impedit neque labore animi consequatur ipsam. Modi tenetur, id dolor. Natus, sed, necessitatibus. <a href="blog-single.html">Read More <i class="fa fa-angle-double-right"></i></a></p>

                            <div class="post-meta">
                                <ul class="list-inline">
                                    <li class="post-date"><i class="fa fa-calendar"></i> 21 February 2016</li>
                                    <li><a href="#"><i class="fa fa-user-md"></i> Autor</a></li>
                                    <li class="post-comment"><a href="#"><i class="fa fa-comments-o"></i> 8 comments</a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    <!-- single post -->
                    <article class="single-post">
                        <div class="post-thumb">
                            <a href="{{ route('blog-single') }}"> <img src="images/news5.jpg" alt="#" title="Lorem ipsum dolor sit amet."></a>
                        </div>
                        <div class="post-content">
                            <h2><a href="{{ route('blog-single') }}">Lorem ipsum dolor sit amet, consectetur.</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore unde quis delectus laudantium quas ullam alias perferendis commodi tempore corporis, nisi iusto illum nesciunt aut, voluptas optio impedit neque labore animi consequatur ipsam. Modi tenetur, id dolor. Natus, sed, necessitatibus. <a href="blog-single.html">Read More <i class="fa fa-angle-double-right"></i></a></p>

                            <div class="post-meta">
                                <ul class="list-inline">
                                    <li class="post-date"><i class="fa fa-calendar"></i> 21 February 2016</li>
                                    <li><a href="#"><i class="fa fa-user-md"></i> Autor</a></li>
                                    <li class="post-comment"><a href="#"><i class="fa fa-comments-o"></i> 8 comments</a></li>
                                </ul>
                            </div>
                        </div>
                    </article>

                    <!-- ========post pagination======== -->
                    <div class="post-pagination">
                        <nav>
                            <ul class="pagination">
                                <li class="disabled">
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- // Blog content ends here -->

                <!-- // blog sidebar -->
                <aside class="col-md-3 right-sidebar">
                    <!-- widget -->
                    <form action="?">
                        <input type="search" placeholder="Search...">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>

                    <!-- widget -->
                    <h3>Categories</h3>
                    <ul class="categories">
                        <li>
                            <a href="#"> <i class="fa fa-angle-right"></i> Dental</a>
                        </li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> Physical</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> Psycological</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> Theorilogical</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> Head and Hair</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> Heart Problem</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> General</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> Additionals</a></li>
                    </ul>

                    <!-- widget -->
                    <h3>Recent Posts</h3>
                    <ul class="recent-post-widget">
                        <li>
                            <a href="{{ route('blog-single') }}">
                                <img src="images/news1.jpg" alt="#">
                                <h4>Lorem ipsum dolor sit amet.</h4>
                                <span><i class="fa fa-calendar"></i> 21 Fabruary 2016</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('blog-single') }}">
                                <img src="images/news2.jpg" alt="#">
                                <h4>Lorem ipsum dolor sit amet.</h4>
                                <span><i class="fa fa-calendar"></i> 21 Fabruary 2016</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('blog-single') }}">
                                <img src="images/news3.jpg" alt="#">
                                <h4>Lorem ipsum dolor sit amet.</h4>
                                <span><i class="fa fa-calendar"></i> 21 Fabruary 2016</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('blog-single') }}">
                                <img src="images/news4.jpg" alt="#">
                                <h4>Lorem ipsum dolor sit amet.</h4>
                                <span><i class="fa fa-calendar"></i> 21 Fabruary 2016</span>
                            </a>
                        </li>
                    </ul>

                    <!-- widget -->
                    <h3>Tags</h3>
                    <ul class="list-inline tags">
                        <li><a href="#">teeth</a></li>
                        <li><a href="#">medicine</a></li>
                        <li><a href="#">medihere</a></li>
                        <li><a href="#">special</a></li>
                        <li><a href="#">care</a></li>
                        <li><a href="#">Bone</a></li>
                        <li><a href="#">heart</a></li>
                        <li><a href="#">cancer</a></li>
                        <li><a href="#">HBS</a></li>
                        <li><a href="#">Eye</a></li>
                        <li><a href="#">Brain</a></li>
                        <li><a href="#">stomach</a></li>
                        <li><a href="#">tests</a></li>
                        <li><a href="#">spine</a></li>
                        <li><a href="#">skall</a></li>
                        <li><a href="#">Face</a></li>
                        <li><a href="#">Kidney</a></li>
                    </ul>
                </aside>
            </div>
        </div>
    </section>
    <!-- // Blog page content ends -->

@endsection