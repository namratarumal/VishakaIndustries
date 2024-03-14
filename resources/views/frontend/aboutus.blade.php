@extends('frontendHeader')
@section('frontend')

<!-- Inner bg -->
<div class="banner-breadcum section">
    <div class="row">
        <div class="breadcrumb-image" style="background-image: url(images/innerbg.jpg);">
            <div class="container text-center">
                <h1>About Us</h1>
                <div class="breadcrumbs_path">
                    <a href="/">Home</a> / About Us
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Middle Content Start -->
<section class="aboutinenr">
    <div class="container">
        <div class="col-md-4 col-lg-4 col-sm-6 abtinnnerleft">
            <img src="{{asset('images/about/abouttowel.jpg')}}" alt="abouttowel">
        </div>
        <div class="col-md-8 col-lg-8 abtinnnerright">
            <h2>Welcome to Vishaka Tex</h2>
            <p>Vishaka Industries Part of reputed business “kodam Group”, has grown manifold since its
                inception in the year 1968, having production capacity of 800 tons of Terry Towel &amp; Toweling cloth
                annually.<br>
                Our journey began 50 years ago in the years 1968 as Solapur sizing works a grey cloth manufacturing
                unit. Then after shifted our product range towards world famous Solapur Jacquard chaddars (Bedsheets)
                in the year 1973.<br>
                Entered into the cotton yarn business in the year 2001. Now our State of the art technology weaving
                facility includes Smit Textiles (Italy) weaving machines with Staubli (France) Jacquard machines.
                We at Vishaka Industries use (BCI) Best Cotton Initiative Certified cotton yarn as per our customers
                requirement. Our innovating designs meet the customers need. We are committed to improve every
                single loop so that the best quality reaches our customer.<br>
                Product Range:- We are specialized in manufacturing Jacquard Beach Towel (velour wash finished),
                Jacquard Fouta towels (One side terry), Piece dyed Jacquard border terry bath towels, Institutional
                Towels (with logo’s of hospitality institutions)</p>
        </div>
    </div>
</section>
<!-- Middle Content End -->


<!-- Vision mission Start -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-4">
                <!-- Single Service -->
                <div class="single-service">
                    <i class="fa fa-binoculars fa-lg"></i>
                    <h4>Our Vision </h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-4">
                <!-- Single Service -->
                <div class="single-service">
                    <i class="fa fa-bullseye fa-lg"></i>
                    <h4>Our Mission</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-4">
                <!-- Single Service -->
                <div class="single-service">
                    <i class="fa fa-check-square-o fa-lg"></i>
                    <h4>Our Values</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry. </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Vision mission End -->
<title>Vishaka Textiles | About</title>

@endsection