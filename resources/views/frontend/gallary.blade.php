@extends('frontendHeader')
@section('frontend')

<!-- Inner bg -->
<div class="banner-breadcum section">
    <div class="row">
        <div class="breadcrumb-image" style="background-image: url(images/innerbg.jpg);">
            <div class="container text-center">
                <h1>Gallery</h1>
                <div class="breadcrumbs_path">
                    <a href="/">Home</a> / Gallery
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Middle Content Start -->
<section class="galleryinner">
    <div class="container">
        <div class="row">
            <div align="center">
                <button class="btn btn-default filter-button" id="all" data-filter="all">All</button>
                @foreach($category as $c)
                <button class="btn btn-default filter-button filterbtn" value="{{$c->id}}" data-filter="hdpe">{{$c->category_name}}</button>
                @endforeach
            </div>
            
            @foreach($product as $p)
            <div class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-6 hdpe all">
                <img src="images/products/{{$p->product_image}}" style="max-width: 100%;height: 265px;" class="img-responsive">
                {{-- <p style="color: #4417B2;">{{$p->category_name}}</p> --}}
            </div>
            @endforeach

            <div class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-6 filter hdpe">
                <img src="" class="img-responsive" style="max-width: 100%;height: 265px;" id="filter">
                {{-- <p type="text" style="color:#4417B2;" id="text">sasdasda</p> --}}
            </div>
          
            <!--<div class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-6 filter hdpe">
                <img src="images/product/img3.jpg" class="img-responsive" class="img3">
            </div>

            <div class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-6 filter hdpe">
                <img src="images/product/img1.jpg" class="img-responsive" class="img1">
            </div>

            <div class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-6 filter spray">
                <img src="images/product/img2.jpg" class="img-responsive" class="img2">
            </div>

            <div class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-6 filter spray">
                <img src="images/product/img3.jpg" class="img-responsive" class="img3">
            </div>

            <div class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-6 filter spray">
                <img src="images/product/img1.jpg" class="img-responsive" class="img1">
            </div>

            <div class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-6 filter spray">
                <img src="images/product/img2.jpg" class="img-responsive" class="img2">
            </div>

            <div class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-6 filter irrigation">
                <img src="images/product/img3.jpg" class="img-responsive" class="img3">
            </div>

            <div class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-6 filter irrigation">
                <img src="images/product/img1.jpg" class="img-responsive" class="img1">

            </div>

            <div class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-6 filter irrigation">
                <img src="images/product/img2.jpg" class="img-responsive" class="img2">
            </div>

            <div class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-6 filter irrigation">
                <img src="images/product/img3.jpg" class="img-responsive" class="img3">
            </div> -->
        </div>
    </div>
</section>
<!-- Middle Content End -->

<script>
    $(document).ready(function() {
        $('.all').show();
        $('.filter').hide();

        $(document).on('click', '.filterbtn', function() {
            $('.all').hide();
            $('.filter').show();
            var id = $(this).val();
            // alert(id);
            $.ajax({
                type: 'GET',
                url: "/categories/" + id,
                success: function(res) {
                    console.log(res.title);
                    // alert(Object.keys(res).length);
                    let img = "images/products/" + res[0].product_image;
                    // console.log(img);
                    $('#filter').attr("src", img);
                    $("#text").html(res[0].category_name);
                }
            })
        });

        $(document).on('click', '#all', function(){
            $('.all').show();
            $('.filter').hide();
        })

    });
</script>
<title>Vishaka Textiles | Gallery</title>
@endsection