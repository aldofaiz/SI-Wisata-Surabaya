<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Tempat Wisata - Pasar Wonokromo</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('img/core-img/favicon.icos')}}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="original-load"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    @include('inc.header')
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url({{asset('img/bg-img/b1.jpg')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content text-center">
                        <h2>{{ $location->name }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Wrapper Start ##### -->
    <div class="blog-wrapper section-padding-100-0 clearfix">
        <div class="container">
            <div class="row align-items-end">
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-blog-area clearfix mb-100">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <div class="line"></div>
                            <a href="#" class="post-tag">{{ $location->address }}</a>
                            <h4><a href="#" class="post-headline">{{ $location->name }}</a></h4>
                            <p class="mb-3">Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt. Morbi sodales, dolor id ultricies dictum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus velit ullamcorper id. Quisque at erat eu libero consequat tempus.slacus sit amet augue sodales, vel cursus enim tristique.</p>
                        </div>
                    </div>
                </div>
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-blog-area clearfix mb-100">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus velit ullamcorper id. Quisque at erat eu libero consequat tempus. Quisque molestie convallis tempus. Ut semper purus metus, a euismod sapien sodales ac. Duis viverra eleifend fermentum. Donec sagittis lacus sit amet augue sodales, vel cursus enim tristique. Maecenas vitae massa ut est consectetur sagittis quis vitae tortor.</p>
                        </div>
                    </div>
                </div>
                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-catagory-area clearfix mb-100">
                        <img src="{{asset('img/blog-img/1.jpg')}}" alt="">
                        <!-- Catagory Title -->
                        <div class="catagory-title">
                            <a href="#">Lifestyle posts</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Wrapper End ##### -->

    <!-- ##### Blog Wrapper Start ##### -->
    <div class="blog-wrapper section-padding-50-0 clearfix">
        <div class="container">
            <div class="row">
                <!-- Single Blog Area  -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area blog-style-2 mb-100">
                        <div class="single-blog-thumbnail">
                            <a href="{{asset('img/blog-img/4.jpg')}}" class="image-popup img-portfolio-detail">
                                <img src="{{asset('img/blog-img/4.jpg')}}" alt="Free HTML5 Template by FreeHTML5.co" class="img-responsive">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Single Blog Area  -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area blog-style-2 mb-100">
                        <div class="single-blog-thumbnail">
                            <a href="{{asset('img/blog-img/5.jpg')}}" class="image-popup img-portfolio-detail">
                                <img src="{{asset('img/blog-img/5.jpg')}}" alt="Free HTML5 Template by FreeHTML5.co" class="img-responsive">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Single Blog Area  -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area blog-style-2 mb-100">
                        <div class="single-blog-thumbnail">
                            <a href="{{asset('img/blog-img/6.jpg')}}" class="image-popup img-portfolio-detail">
                                <img src="{{asset('img/blog-img/6.jpg')}}" alt="Free HTML5 Template by FreeHTML5.co" class="img-responsive">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Single Blog Area  -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area blog-style-2 mb-100">
                        <div class="single-blog-thumbnail">
                            <a href="{{asset('img/blog-img/6.jpg')}}" class="image-popup img-portfolio-detail">
                                <img src="{{asset('img/blog-img/6.jpg')}}" alt="Free HTML5 Template by FreeHTML5.co" class="img-responsive">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Wrapper End ##### -->

    <div class="blog-wrapper section-padding-10-0 clearfix">
        <div class="container">
            <div class="row">
                <!-- Comment Area Start -->
                <div class="comment_area clearfix mt-70">
                    <h5 class="title">Review</h5>

                    <ol>
                        <!-- Single Comment Area -->
                        <li class="single_comment_area">
                            <!-- Comment Content -->
                            <div class="comment-content d-flex">
                                <!-- Comment Author -->
                                <div class="comment-author">
                                    <img src="{{asset('img/bg-img/b7.jpg')}}" alt="author">
                                </div>
                                <!-- Comment Meta -->
                                <div class="comment-meta">
                                    <a href="#" class="post-date">March 12</a>
                                    <p><a href="#" class="post-author">William James</a></p>
                                    <p>Efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt.</p>
                                </div>
                            </div>
                        </li>

                        <!-- Single Comment Area -->
                        <li class="single_comment_area">
                            <!-- Comment Content -->
                            <div class="comment-content d-flex">
                                <!-- Comment Author -->
                                <div class="comment-author">
                                    <img src="{{asset('img/bg-img/b7.jpg')}}" alt="author">
                                </div>
                                <!-- Comment Meta -->
                                <div class="comment-meta">
                                    <a href="#" class="post-date">March 12</a>
                                    <p><a href="#" class="post-author">William James</a></p>
                                    <p>Efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt.</p>
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>

                                 
                <div class="post-a-comment-area mt-70">
                    <!-- Reply Form -->
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-12">
                                <div class="group">
                                    <input type="text" name="subject" id="subject" required>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="group">
                                    <textarea name="message" id="message" required></textarea>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Comment</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn original-btn">Reply</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ##### Footer Area Start ##### -->
    @include('inc.footer')
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{asset('js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{asset('js/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('js/active.js')}}"></script>
    <!-- Magnific Popup -->
	<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('js/magnific-popup-options.js')}}"></script>

</body>

</html>