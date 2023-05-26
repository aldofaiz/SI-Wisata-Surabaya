<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Beranda</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">

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

    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area">
        <!-- Hero Slides Area -->
        <div class="hero-slides owl-carousel">
            @foreach ($reviews as $review)
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url({{ $review->banner }});">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="slide-content text-center">
                                <div class="post-tag">
                                    <a href="/wisata/{{ $review->location_id }}" data-animation="fadeInUp">{{ $review->location_name }}</a>
                                </div>
                                <h2 data-animation="fadeInUp" data-delay="250ms"><a href="/wisata/{{ $review->location_id }}">"{{ \Illuminate\Support\Str::limit($review->review, 20, $end='...') }}"</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Blog Wrapper Start ##### -->
    <div class="blog-wrapper section-padding-100 clearfix">
        <div class="container">
            @foreach ($location_categories as $location_category)
            @if( $loop->iteration%2 == 1 )
            <div class="row align-items-end">
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-blog-area clearfix mb-100">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <div class="line"></div>
                            <a href="#" class="post-tag">Tempat Wisata</a>
                            <h4><a href="#" class="post-headline">Surabaya {{ $location_category->name_category }}</a></h4>
                            <p>Beberapa tempat Wisata yang dapat kamu kunjungi di Surabaya. Berikut ini adalah tempat - tempat Wisata yang ada di Surabaya {{ $location_category->name_category }}</p>
                            <a href="/kategori/{{ $location_category->id }}" class="btn original-btn">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                @foreach ($location_category->locations as $location)
                @if ($loop->iteration > 2)
                    @break
                @endif
                    <!-- Single Blog Area -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="single-catagory-area clearfix mb-100">
                            <img style="height: 250px;" src="{{ $location->banner }}" alt="">
                            <!-- Catagory Title -->
                            <div class="catagory-title">
                                <a href="/wisata/{{ $location->id }}">{{ $location->location_name }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @else
            <div class="row align-items-end">   
                @foreach ($location_category->locations as $location)
                @if ($loop->iteration > 2)
                    @break
                @endif
                    <!-- Single Blog Area -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="single-catagory-area clearfix mb-100">
                            <img style="height: 250px;" src="{{ $location->banner }}" alt="">
                            <!-- Catagory Title -->
                            <div class="catagory-title">
                                <a href="/wisata/{{ $location->id }}">{{ $location->location_name }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-blog-area clearfix mb-100">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <div class="line"></div>
                            <a href="#" class="post-tag">Tempat Wisata</a>
                            <h4><a href="#" class="post-headline">Surabaya {{ $location_category->name_category }}</a></h4>
                            <p>Beberapa tempat Wisata yang dapat kamu kunjungi di Surabaya. Berikut ini adalah tempat - tempat Wisata yang ada di Surabaya {{ $location_category->name_category }}</p>
                            <a href="/kategori/{{ $location_category->id }}" class="btn original-btn">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    <!-- ##### Blog Wrapper End ##### -->

    <!-- ##### Footer Area Start ##### -->
    @include('inc.footer')
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>