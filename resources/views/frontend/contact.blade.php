@extends('frontendHeader')
@section('frontend')

<!-- Inner bg -->
<div class="banner-breadcum section">
    <div class="row">
        <div class="breadcrumb-image" style="background-image: url(images/innerbg.jpg);">
            <div class="container text-center">
                <h1>Contact Us</h1>
                <div class="breadcrumbs_path">
                    <a href="/">Home</a> / Contact Us
                </div>
            </div>
        </div>
    </div>
</div>

<section class="contact" id="contact">
    <div class="container">
        <!-- <div class="row">
         <div class="col-xl-6 mx-auto text-center">
            <div class="section-title mb-100">
               <p>get in touch</p>
               <h4>contact me</h4>
            </div>
         </div>
      </div> -->
        <div class="row text-center">
            <div class="col-md-8 col-sm-6">
                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    <span><strong> One of our colleagues will get back in touch with you soon!Have a great day! </strong></span>
                </div>
                @endif
                <form action="/contact" method="post" class="contact-form">
                    @csrf
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <input type="text" name="name" class="inputTextBox" placeholder="Your name">
                            <p style="color: red;" class="checkname">Numbers Not Allowed!</p>
                            @error('name')
                            <p style="color:red;">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <input type="text" name="email" placeholder="email">
                            @error('email')
                            <p style="color:red;">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <input type="text" name="subject" placeholder="subject">
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <input type="text" name="number" placeholder="Mobile no.">
                            @error('number')
                            <p style="color:red;">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-xl-3 col-lg-12">
                            <textarea placeholder="message" name="msg" cols="20" rows="4"></textarea>
                            <!-- <input type="submit" value="send message"> -->
                        </div>
                        <div type="submit" class="sendbtn aboutright col-lg-12 text-left"><button type="submit">Send message</button></div>
                    </div>
                </form>
            </div>
            <div class="col-md-4 contactright col-sm-6">
                <div class="single-contact">
                    <i class="fa fa-map-marker"></i>
                    <h5>Address</h5>
                    <p>D-7/2, MIDC, Akkalkot Road, Solapur - 413 006, Maharashtra, India</p>
                </div>
                <div class="single-contact">
                    <i class="fa fa-phone"></i>
                    <h5>Phone</h5>
                    <p>+91 217 2656377 / +91 217 2656378</p>
                </div>
                <div class="single-contact">
                    <i class="fa fa-envelope"></i>
                    <h5>Email</h5>
                    <p>info@vishakatex.com</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="locationmap">
    <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7603.431867347217!2d75.93323437272801!3d17.663608151654344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x259cc6567df36159!2sVishaka%20industries!5e0!3m2!1sen!2sin!4v1571132529494!5m2!1sen!2sin" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
</section>

<script>
    $(document).ready(function() {

        // alert 
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 2000);

        // only allow alphabets validation 
        $('.checkname').hide();
        $(".inputTextBox").keypress(function(event) {
            var inputValue = event.charCode;
            if (!(inputValue >= 65 && inputValue <= 122) && (inputValue != 32 && inputValue != 0)) {
                event.preventDefault();
                $('.checkname').show();
            } else {
                $('.checkname').hide();
            }
        });


    });
</script>
<title>Vishaka Textiles | Contact</title>
@endsection