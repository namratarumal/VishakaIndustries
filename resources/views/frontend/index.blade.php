@extends('frontendHeader')
@section('frontend')

<!-- Start slider -->
<section id="aa-slider">
    <div class="aa-slider-area">
        <div id="sequence" class="seq">
            <div class="seq-screen">
                <ul class="seq-canvas">
                    <!-- single slide item -->
                    @foreach($category as $c)
                    <li>
                        <div class='seq-model'>
                            <img data-seq src='images/category/{{$c->category_image}}' alt='Slider 1' />
                        </div>
                        <div class='seq-title'>
                            <!--span data-seq>Save Up to 75% Off</span-->
                            <h2 data-seq>{{$c->category_name}}</h2>
                            <!--p data-seq>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p-->
                            <a data-seq href="{{ route('products', $c->category_name) }}" class='aa-shop-now-btn aa-secondary-btn pull-left'>View More</a>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <!-- slider navigation btn -->
            <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
                <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
                <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
            </fieldset>
        </div>
    </div>
</section>
<!-- / slider -->


<!-- About Section -->
<section class="abouthome">
    <div class="container">
        <div class="col-md-4 col-lg-4 col-sm-6 aboutleft">
            <img src="{{asset('frontend/images/about/aboutimg.png')}}" alt="aboutimg">
        </div>
        <div class="col-md-8 col-lg-8 aboutright">
            <h5>About Us</h5>
            <h3>We're provide modern and high quality towels</h3>
            <p>Vishaka Industries Part of reputed business “kodam Group”, has grown manifold since its
                inception in the year 1968, having production capacity of 800 tons of Terry Towel & Toweling cloth
                annually.
            </p>
            <p>
                Our journey began 50 years ago in the years 1968 as Solapur sizing works a grey cloth manufacturing
                unit. Then after shifted our product range towards world famous Solapur Jacquard chaddars (Bedsheets)
                in the year 1973...
            </p>
            <div class="readbtn"><a href="/aboutus"><i>Read more...</i></a></div>
        </div>
    </div>
</section>

<!-- Start Promo section -->
<section id="aa-promo">
    <div class="container">
        <div class="">
            <div class="sec-title pull-left">
                <h5>Awesome Work</h5>
                <h3>Our product gallery</h3>
            </div>
            <div class="col-md-12 col-lg-12">
                <div class="">
                    <div class="grid">

                        <div class="row">
                            @foreach($category as $c)
                            <div class='col-md-4 col-sm-4'>
                                <figure class='effect-ravi'>
                                    <img src='images/category/{{$c->category_image}}' style='width:1024px;height:250px' alt='Gallery 1' />
                                    <figcaption>
                                        <h2>{{$c->category_name}}</h2>
                                        <p>
                                            <a href="{{ route('products', str_replace(' ','-',$c->category_name)) }}"><i class='fa fa-angle-right fa-lg'></i></a>
                                        </p>
                                    </figcaption>
                                </figure>
                            </div>
                            @endforeach
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Promo section -->




<!-- Testimonials >
<section class="testimonial-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sec-title pull-left">
                        <h5>Arrived Soon</h5>
                        <h3>Upcoming Products</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="single-testimonial-item text-center">
                        <div class="img-holder">
                            <img src="images/upcoming/product1.jpg" alt="product1">
                        </div>
                        <span class="border"></span>
                        <div class="name">
                            <h3>Product Title</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-testimonial-item text-center">
                        <div class="img-holder">
                            <img src="images/upcoming/product2.jpg" alt="product2">
                        </div>
                        <span class="border"></span>
                        <div class="name">
                            <h3>Product Title</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-testimonial-item text-center">
                        <div class="img-holder">
                            <img src="images/upcoming/product3.jpg" alt="product3">
                        </div>
                        <span class="border"></span>
                        <div class="name">
                            <h3>Product Title</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials -->
<title>Vishaka Textiles | Home</title>
@endsection