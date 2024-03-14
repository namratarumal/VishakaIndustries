@extends('frontendHeader')
@section('frontend')
    @foreach($product as $p)
<!-- Inner bg -->
<div class="banner-breadcum section">
    <div class="row">
        <div class="breadcrumb-image" style="background-image: url(/images/innerbg.jpg);">
            <div class="container text-center">
                <h1>{{$p->category_name}}</h1>
                <div class="breadcrumbs_path">
                    <a href="/">Home</a> / {{$p->category_name}}
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Middle Content Start -->
<section class="productinner">
    <div class="container">
        <div class="col-md-4 col-lg-4">
            <div class="swiper-container" dir="rtl">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="swiper-zoom-container">
                            <img src="/images/products/{{$p->product_image}}" alt="img1">
                            <!-- <img src="http://127.0.0.1:8000/images/products/{{$p->product_image}}" alt="img1"> -->
                        </div>
                    </div>

                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Navigation -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
        <div class="col-md-8 col-lg-8 prodetails">
            <h4>{{$p->category_name}}</h4>
            <table class="table table-bordered success proinfo">
                <thead>
                    <tr>
                        <th class="info">Title</th>
                        <td>{{$p->title}} </td>
                    </tr>
                    <tr>
                        <th class="info">Materials</th>
                        <td>{{$p->materials}}</td>
                    </tr>
                    <tr>
                        <th class="info">Quality</th>
                        <td>{{$p->quality}}</td>
                    </tr>
                    <tr>
                        <th class="info">Use</th>
                        <td>{{$p->use}}</td>
                    </tr>
                    <tr>
                        <th class="info">Sizes</th>
                        <td>{{$p->sizes}}</td>
                    </tr>

                    <tr>
                        <th class="info">Gms</th>
                        <td>{{$p->gms}}</td>
                    </tr>
                    <tr>
                        <th class="info">Colors</th>
                        <td>{{$p->colors}}</td>
                    </tr>

                </thead>

            </table>
        </div>
    </div>
</section>
<!-- Middle Content End -->
<title>Vishaka Textiles | {{$p->category_name}}</title>
@endforeach
@endsection

  