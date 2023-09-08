@extends('layouts.app')
@section('content')
    <main>

        <div class="slider-area gray-bg position-relative">
            <div class="single-slider d-flex align-items-center slider-height2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-caption hero-caption2">
                                <h2>{{ $blog->title }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="blog_area single-post-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 posts-list">
                        <div class="single-post">
                            <div class="feature-img">
                                <img class="img-fluid"
                                    src="{{ asset('assets') }}/img/blog/single_blog_{{ $blog->id }}.jpg" alt="">
                            </div>
                            <div class="blog_details">
                                <h2 style="color: #2d2d2d;">{{ $blog->title }}
                                </h2>
                                <ul class="blog-info-link mt-3 mb-4">
                                    <li><a href="#"><i class="fa fa-user"></i> {{ $blog->type }}</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i>{{ $blog->comments->count() }}
                                            Comments</a>
                                    </li>
                                </ul>

                                <p class="excert">
                                    {{ $blog->article_content }}
                                </p>

                                <p>
                                    {{-- {{ $blog->article_content }} --}}
                                </p>
                                <div class="quote-wrapper">
                                    <div class="quotes">

                                        {{-- {{ $blog->article_content }} --}}
                                    </div>
                                </div>

                                <p>
                                    {{-- {{ $blog->article_content }} --}}
                                </p>

                                <p>
                                    {{-- {{ $blog->article_content }} --}}
                                </p>
                            </div>
                        </div>
                        <div class="navigation-top">
                            <div class="d-sm-flex justify-content-between text-center">
                                <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span>
                                    {{ $blog->author_name }} and
                                    {{ $blog->l_count }}
                                    people like this</p>
                                <div class="col-sm-4 text-center my-2 my-sm-0">
                                </div>
                                <ul class="social-icons">
                                    <li><a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                </ul>
                            </div>
                            <div class="navigation-area">
                                <div class="row">
                                    <div
                                        class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                        <div class="thumb">
                                            <a href="#">
                                                <img class="img-fluid" src="{{ asset('assets') }}/img/post/preview.jpg"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="arrow">
                                            <a href="#">
                                                <span class="lnr text-white ti-arrow-left"></span>
                                            </a>
                                        </div>
                                        <div class="detials">
                                            <p>Prev Post</p>
                                            <a href="#">
                                                <h4 style="color: #2d2d2d;">Space The Final Frontier</h4>
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                        <div class="detials">
                                            <p>Next Post</p>
                                            <a href="#">
                                                <h4 style="color: #2d2d2d;">Telescopes 101</h4>
                                            </a>
                                        </div>
                                        <div class="arrow">
                                            <a href="#">
                                                <span class="lnr text-white ti-arrow-right"></span>
                                            </a>
                                        </div>
                                        <div class="thumb">
                                            <a href="#">
                                                <img class="img-fluid" src="{{ asset('assets') }}/img/post/next.jpg"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-author">
                            <div class="media align-items-center">
                                <img src="{{ asset('assets') }}/img/blog/author.png" alt="">
                                <div class="media-body">
                                    <a href="#">
                                        <h4>{{ $blog->author_name }}</h4>
                                    </a>

                                    <p>{{ $blog->d_author }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="comments-area">
                            <h4>{{ $blog->comments->count() }} Comments</h4>
                            @foreach ($blog->comments as $comment)
                                <div class="comment-list">
                                    <div class="single-comment justify-content-between d-flex">
                                        <div class="user justify-content-between d-flex">
                                            <div class="thumb">
                                                <img src="{{ asset('assets') }}/img/blog/comment_1.png" alt="">
                                            </div>
                                            <div class="desc">
                                                <p class="comment">
                                                    {{ $comment->comment ?? null }}

                                                </p>
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <h5>
                                                            <a href="#">Ganesh pant</a>
                                                        </h5>
                                                        <p class="date">{{ $comment->created_at }} </p>
                                                    </div>
                                                    <div class="reply-btn">
                                                        <a href="#" class="btn-reply text-uppercase">reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            {{-- <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="{{ asset('assets') }}/img/blog/comment_2.png" alt="">
                                        </div>
                                        <div class="desc">
                                            <p class="comment">
                                                hello

                                            </p>
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <h5>
                                                        <a href="#">Ganesh pant</a>
                                                    </h5>
                                                    <p class="date">{{ $blog->created_at }} </p>
                                                </div>
                                                <div class="reply-btn">
                                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="{{ asset('assets') }}/img/blog/comment_3.png" alt="">
                                        </div>
                                        <div class="desc">
                                            <p class="comment">
                                                hhh

                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <h5>
                                                        <a href="#">Ganesh pant</a>
                                                    </h5>
                                                    <p class="date">{{ $blog->created_at }} </p>
                                                </div>
                                                <div class="reply-btn">
                                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <div class="comment-form">
                            <h4>Leave a Reply</h4>
                            <form class="form-contact comment_form" action="{{ url('/comment') }}" id="commentForm"
                                method="POST">
                                <input name="_token" value="{{ csrf_token() }}" type="hidden" />
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                                            <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                                placeholder="Write Comment"></textarea>
                                            @error('comment')
                                                <p style="color:red">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" name="name" id="name" type="text"
                                                placeholder="Name">
                                        </div>
                                    </div>
                                    {{-- <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" name="email" id="email" type="email"
                                                placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" name="website" id="website" type="text"
                                                placeholder="Website">
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="button button-contactForm btn_1 boxed-btn">Post
                                        Comment</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <form action="#">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder='Search Keyword'
                                                onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = 'Search Keyword'">
                                            <div class="input-group-append">
                                                <button class="btns" type="button"><i class="ti-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                        type="submit">Search</button>
                                </form>
                            </aside>
                            <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title" style="color: #2d2d2d;">Category</h4>
                                <ul class="list cat-list">
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Resaurant food</p>
                                            <p>(37)</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Travel news</p>
                                            <p>(10)</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Modern technology</p>
                                            <p>(03)</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Product</p>
                                            <p>(11)</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Inspiration</p>
                                            <p>(21)</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p>Health Care</p>
                                            <p>(21)</p>
                                        </a>
                                    </li>
                                </ul>
                            </aside>
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title" style="color: #2d2d2d;">Recent Post</h3>
                                <div class="media post_item">
                                    <img src="{{ asset('assets') }}/img/post/post_1.jpg" alt="post">
                                    <div class="media-body">
                                        <a href="{{ url('/blog/detail', $blog->id) }}">
                                            <h3 style="color: #2d2d2d;">From life was you fish...</h3>
                                        </a>
                                        <p>January 12, 2019</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="{{ asset('assets') }}/img/post/post_2.jpg" alt="post">
                                    <div class="media-body">
                                        <a href="{{ url('/blog/detail', $blog->id) }}">
                                            <h3 style="color: #2d2d2d;">The Amazing Hubble</h3>
                                        </a>
                                        <p>02 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="{{ asset('assets') }}/img/post/post_3.jpg" alt="post">
                                    <div class="media-body">
                                        <a href="{{ url('/blog/detail', $blog->id) }}">
                                            <h3 style="color: #2d2d2d;">Astronomy Or Astrology</h3>
                                        </a>
                                        <p>03 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="{{ asset('assets') }}/img/post/post_4.jpg" alt="post">
                                    <div class="media-body">
                                        <a href="{{ url('/blog/detail', $blog->id) }}">
                                            <h3 style="color: #2d2d2d;">Asteroids telescope</h3>
                                        </a>
                                        <p>01 Hours ago</p>
                                    </div>
                                </div>
                            </aside>
                            <aside class="single_sidebar_widget tag_cloud_widget">
                                <h4 class="widget_title" style="color: #2d2d2d;">Tag Clouds</h4>
                                <ul class="list">
                                    <li>
                                        <a href="#">project</a>
                                    </li>
                                    <li>
                                        <a href="#">love</a>
                                    </li>
                                    <li>
                                        <a href="#">technology</a>
                                    </li>
                                    <li>
                                        <a href="#">travel</a>
                                    </li>
                                    <li>
                                        <a href="#">restaurant</a>
                                    </li>
                                    <li>
                                        <a href="#">life style</a>
                                    </li>
                                    <li>
                                        <a href="#">design</a>
                                    </li>
                                    <li>
                                        <a href="#">illustration</a>
                                    </li>
                                </ul>
                            </aside>
                            <aside class="single_sidebar_widget instagram_feeds">
                                <h4 class="widget_title" style="color: #2d2d2d;">Instagram Feeds</h4>
                                <ul class="instagram_row flex-wrap">
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset('assets') }}/img/post/post_5.jpg"
                                                alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset('assets') }}/img/post/post_6.jpg"
                                                alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset('assets') }}/img/post/post_7.jpg"
                                                alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset('assets') }}/img/post/post_8.jpg"
                                                alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset('assets') }}/img/post/post_9.jpg"
                                                alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset('assets') }}/img/post/post_10.jpg"
                                                alt="">
                                        </a>
                                    </li>
                                </ul>
                            </aside>
                            <aside class="single_sidebar_widget newsletter_widget">
                                <h4 class="widget_title" style="color: #2d2d2d;">Newsletter</h4>
                                <form action="#">
                                    <div class="form-group">
                                        <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                                    </div>
                                    <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                        type="submit">Subscribe</button>
                                </form>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
