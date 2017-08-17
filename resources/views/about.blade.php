@extends('layout')
@section('title', 'About')
@section('content')

    <!-- Blog page banner -->
    <section id="banner" class="banner text-center">
        <div class="container">
            <div class="row">
                <h1>About Medihere</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis enim sit repudiandae, itaque impedit laboriosam fugit dignissimos debitis quod corrupti!</p>
            </div>
        </div>
    </section>
    <!-- banner ends -->

    <!-- about section -->
    <section class="about" id="about">
        <div class="container abcontainer">
            <div class="page-nav">
                <span class="heading-nav"><a href="index.html">Home</a> | About Us</span>
            </div>
            <div class="row">
                <div class="col-md-6 text-left">
                    <h2>Who We Are</h2>


                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium blanditiis quam quaerat quis soluta provident eaque, commodi eum aliquam sit natus impedit quisquam officiis molestiae. Minus ipsam asperiores, nesciunt autem. Saepe voluptatibus nemo nesciunt atque commodi quod expedita vero, amet obcaecati quibusdam, nisi blanditiis officiis, ipsum assumenda dolore aspernatur deserunt? Illum, aut unde repellat quaerat corrupti magnam debitis alias necessitatibus non quibusdam.
                    <p> Odit hic magni est mollitia nulla, modi sit dignissimos! Repellat voluptate doloremque sunt dolores, veritatis provident, aliquam fugiat, id a facere quidem! Praesentium ipsa atque illo at commodi sunt illum laudantium culpa, molestiae repudiandae alias cupiditate asperiores architecto aperiam assumenda adipisci tempora facilis nisi aut sapiente, voluptates veniam expedita facere! Veniam veritatis necessitatibus inventore tempore praesentium ab eos et placeat tempora, amet qui rem voluptate numquam non blanditiis sapiente laudantium.
                    <p> Commodi repudiandae explicabo perspiciatis, odio odit est itaque, earum, vel cumque iusto velit atque ullam dignissimos optio. </p>
                </div>
                <div class="col-md-6">
                    <img src="images/about.jpg" alt="#" class="img-responsive" title="About us image">
                </div>
            </div>
        </div>
        <div class="home-about text-center">
            <div class="aboverlay"></div>
            <div class="container">
                <div class="row">
                    <h2>See what Patients saying about us</h2>
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
        </div>
    </section>
    <!-- about section ends -->

    <div class="hospital text-center">
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