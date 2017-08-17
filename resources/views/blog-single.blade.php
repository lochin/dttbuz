@extends('layout')
@section('title', 'Blog single')
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
                <span class="heading-nav"><a href="{{ route('home') }}">Home</a> | Blog Post Title</span>
            </div>
            <div class="row">
                <!-- blog content -->
                <div class="col-md-9 single-content">
                    <article class="post">
                        <div class="single-thumb">
                            <img src="images/news1.jpg" alt="#" title="Lorem ipsum dolor sit amet." class="img-responsive">
                        </div>
                        <div class="post-content">
                            <h2>Lorem ipsum dolor sit amet, consectetur.</h2>
                            <div class="post-meta">
                                <ul class="list-inline">
                                    <li class="post-date"><i class="fa fa-calendar"></i> 21 February 2016</li>
                                    <li><a href="#"><i class="fa fa-user-md"></i> Autor</a></li>
                                    <li class="post-comment"><a href="#"><i class="fa fa-comments-o"></i> 8 comments</a></li>
                                </ul>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque exercitationem accusamus numquam quod, asperiores esse sapiente id ipsa quisquam libero quibusdam facilis perspiciatis nisi repellendus harum neque animi explicabo, et adipisci incidunt! Officiis iure illo repellat ab incidunt cumque accusamus saepe. A iste, velit asperiores quas ratione, officiis sit cupiditate! Hic explicabo eius ullam, iusto veniam voluptatibus doloremque corporis fugiat dignissimos nisi repudiandae aliquam error rem amet consectetur perferendis quia fuga, tempora nobis voluptates minus placeat iste voluptatem praesentium magnam. Laudantium, dolor aperiam repudiandae nam quidem cum illum molestias, ab provident fugiat ex omnis! Aperiam deserunt eum nam, reiciendis. Itaque, recusandae. Blanditiis sint placeat sed. Provident quibusdam, vitae officia at molestiae nesciunt optio atque eaque repellendus, quisquam ducimus possimus eius saepe ipsam, necessitatibus. Velit enim temporibus quis doloremque nisi, molestias magni, adipisci. Saepe nulla beatae necessitatibus repudiandae excepturi, sint eveniet
                                <br>commodi eaque illum. Ab fugiat laborum et earum labore alias possimus obcaecati, sunt, explicabo ducimus ipsum itaque dolorum facilis officia, suscipit dolore perferendis eos. Aliquam reiciendis est aliquid consequuntur cupiditate quia non, facilis quas. Similique quaerat soluta unde excepturi voluptatum quod facere optio nemo minima fugiat eligendi aut minus porro, commodi tempore magni laboriosam velit dolores labore rem voluptas. Reprehenderit quis magnam amet mollitia incidunt
                                <br>quibusdam, placeat ad ullam doloremque consectetur voluptate! Nihil quis excepturi error, qui a, harum voluptatibus officiis. Commodi beatae cum, officia a fugit dolorum perferendis, praesentium molestiae cumque unde similique dolore quod explicabo temporibus corporis sed accusamus sunt, amet deserunt eum natus doloribus est error! Quam rerum numquam maxime porro, soluta quae id enim esse cum eos, illum ipsum. Similique itaque omnis eos reprehenderit voluptate in, vitae, ea corporis error sint placeat minima alias, dolor aliquid consequatur sapiente, dolore doloribus eaque quis. Hic deleniti quia porro nihil. Temporibus eligendi, perspiciatis voluptatum fugiat eum minima excepturi sint sit nisi repellendus architecto quidem
                                <br>laudantium cupiditate molestiae nesciunt deserunt culpa consequuntur quas dicta? Maxime suscipit provident nisi officia velit necessitatibus ipsum amet assumenda, sapiente temporibus animi excepturi inventore sit illum dicta veniam aliquid. Excepturi tenetur, minima consequatur optio ad, cupiditate inventore ipsam obcaecati modi alias, distinctio corrupti aspernatur expedita voluptas veniam quia molestiae ex explicabo est vero asperiores quo sit atque porro rem. Sed aspernatur tenetur consequuntur, minus veritatis debitis necessitatibus veniam totam. Commodi ullam eius fugit assumenda, quam cumque, impedit enim accusantium necessitatibus et dolores omnis excepturi ipsum nesciunt, deleniti velit odio suscipit voluptatibus nisi ab voluptatem at voluptas molestias, similique id. Cum optio voluptate recusandae aperiam labore illum similique sint dignissimos ratione ex atque corrupti molestias, eos assumenda perspiciatis ad delectus nulla officiis eius. Nisi minus illum quidem doloremque, ducimus adipisci a dicta soluta minima excepturi accusamus nostrum, ullam dolorem voluptate nihil. Aliquam, ea, maiores? Quisquam neque reiciendis officiis hic aspernatur incidunt, quod fugit, maiores, cum asperiores, consequatur? Aspernatur vel necessitatibus cumque quis incidunt laudantium recusandae blanditiis fuga sint, porro dolore? Aut a excepturi, quam vero animi corrupti quos aliquam nesciunt magnam modi facere qui pariatur molestias nulla nemo, dolores doloribus, aliquid. Repellendus id aliquid dolores eos!</p>

                        </div>
                    </article>

                    <!-- Comment Box -->
                    <form action="?">
                        <div class="col-md-7">
                            <input type="text" placeholder="Name" required>
                        </div>
                        <div class="col-md-7">
                            <input type="email" placeholder="Email">
                        </div>
                        <div class="col-md-7">
                            <textarea rows="8" placeholder="Comment" required></textarea>
                        </div>
                        <div class="col-md-7">
                            <input type="submit" value="Post Comment">
                        </div>
                    </form>
                </div>

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
                            <a href="#">
                                <img src="images/news1.jpg" alt="#">
                                <h4>Lorem ipsum dolor sit amet.</h4>
                                <span><i class="fa fa-calendar"></i> 21 Fabruary 2016</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/news2.jpg" alt="#">
                                <h4>Lorem ipsum dolor sit amet.</h4>
                                <span><i class="fa fa-calendar"></i> 21 Fabruary 2016</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/news3.jpg" alt="#">
                                <h4>Lorem ipsum dolor sit amet.</h4>
                                <span><i class="fa fa-calendar"></i> 21 Fabruary 2016</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
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