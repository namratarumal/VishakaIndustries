@extends('frontendHeader')
@section('frontend')

<!-- Inner bg -->
<div class="banner-breadcum section">
    <div class="row">
        <div class="breadcrumb-image" style="background-image: url(images/innerbg.jpg);">
            <div class="container text-center">
                <h1>Enquiry</h1>
                <div class="breadcrumbs_path">
                    <a href="/">Home</a> / Enquiry
                </div>
            </div>
        </div>
    </div>
</div>

<section class="contact" id="contact">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-8 col-sm-6">
                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    <span><strong> Form Submitted! </strong></span>
                </div>
                @endif
                <form action="/enquiry" method="post" class="contact-form">
                    @csrf
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <input type="text" class="inputTextBox" placeholder="Enter name" name="name">
                            <p style="color: red;" class="checkname">Numbers Not Allowed!</p>
                            @error('name')
                            <p style="color:red;">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <input type="text" placeholder="Enter email" name="email">
                            @error('email')
                            <p style="color:red;">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <input type="text" placeholder="Enter Mobile no." name="number">
                            @error('number')
                            <p style="color:red;">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <input type="text" placeholder="Enter address" name="address">
                        </div>
                        <div class="col-xl-3 col-lg-12">
                            <textarea placeholder="Description" cols="20" rows="4" name="description"></textarea>
                            <!-- <input type="submit" value="send message"> -->
                        </div>
                        <div class="col-md-3">
                            <input type="submit" class="sendbtn text-left" value="send message" name="btn" />
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4 col-sm-6 feedbackimg">
                <img src="{{asset('images/feedback/feedbackimg.png')}}" alt="feedbackimg">
            </div>
        </div>
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
<title>Vishaka Textiles | Enquiry</title>
@endsection