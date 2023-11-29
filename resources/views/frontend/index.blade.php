@extends('frontend.layouts.app')

@section('content')
<section class="search-section py-5 gradient">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <h1 class="text-uppercase"><span class="text-light">Welcome to Unused Medicine Donation Website </span>
                </h1>
                <p class="pb-4 ser-p text-light lead">এই ওয়েবসাইটের মাধ্যমে আপনার অব্যবহৃত ঔষধ অপরকে দান এবং যাদের ঔষধ কেনার সামথ্য নেই তারা গ্রহণ করতে পারবেন।</p>
                <!-- <form action="" class="form-content form-block">
                    <div class="form-castom form-group bg-dark p-4">
                        <select class="form-control input-castom">
                            <option>জেলা নির্বাচন</option>.corona-bg
                        </select>
                        <select class="form-control input-castom my-2 my-lg-0">
                            <option>বিশেষঞ্জ ডাক্তার</option>
                        </select>
                        <button type="submit" class="btn src-btn"> <a href="#" class="text-light">খুঁজুন</a> </button>
                    </div>
                </form> -->
            </div>
            <div class="col-12 col-lg-4">
            <img src="{{ asset('frontend_assets/photos/doctor.png') }}" alt="" class="img-fluid">
            </div>
            <!-- <div class="col-6 bg-dark">
                <div class="doctor-photo">
                    <img src="{{ asset('frontend_assets/photos/doctor.png') }}" alt="doctor-photo" class="img-fluid">
                </div>
            </div> -->
        </div>
    </div>
    <!-- <div class="doctor d-none d-lg-block">
        <img src="{{ asset('frontend_assets/photos/doctor.png') }}" alt="" class="img-fluid">
    </div> -->
</section>
<!-- START SEARCH SECTION -->
<!--    start corona test section-->
<section class="corona-section py-5">
    <div class="container">
        <div class="row">
            <div class="d-none col-5 d-lg-block ">
                <div class="corona-bg">
                </div>
            </div>
            <div class="col-12 col-lg-7">
                <div class="corona-text">
                    <h2>আমাদের সম্পর্কে</h2>
                    <p>
                    এই ওয়েবসাইটটি বানানোর মূল লক্ষ্য ও উদ্দেশ্য হল আত্ম মানবতার সেবা করা। 
আমরা বিভিন্ন রোগ-বালাইয়ের জন্য ঔষধ সেবন করে থাকি। একটা পর্যায়ে গিয়ে কিছু ঔষধ উচ্ছিষ্ট হিসেবে থেকে যায়। যা পরবর্তীতে মেয়াদ উত্তীর্ণ হয়ে নষ্ট হয়ে যেতে পারে। কিন্তু এসব ঔষধ যদি কেনার সামর্থ্য নেই এমন কাউকে দিয়ে দেই। সেক্ষেত্রে আপনার অব্যবহৃত ওষুধ দানের মাধ্যমেই আরেকজনের কল্যাণ বয়ে আনবে।
                    </p>
                    <p>
                    আপনি চাইলে আমাদের মাধ্যমে কোন অব্যবহৃত ঔষধ দান করতে পারবেন। কিংবা কারো দানকৃত ঔষধ গ্রহণ করতে পারবেন।
                    </p>
                    {{-- <div class="corona-test-button pt-3">
                    <a href="step-form.html" class="btn btn-primary corona-button">করোনা টেস্ট</a>
                </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!--   end corona test section-->
<section class="how-to-word py-5">
    <div class="container">
        <div class="section-title text-center">
            <h1>কিভাবে কাজ করে ?</h1>
        </div>
        <div class="row mt-5 justify-content-center">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="how-work-box">
                    <span>১</span>
                    <h4>রেজিস্ট্রেশন</h4>
                    <p>
                    Sign up on our platform to connect with donors and access medicine 
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="how-work-box">
                    <span>২</span>
                    <h4>ঔষধের জন্য অনুরোধ/দান</h4>
                    <p>
                    Submit your medicine needs, and we'll match you with available 
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="how-work-box">
                    <span>৩</span>
                    <h4>ঔষধ গ্রহণ/প্রদান</h4>
                    <p>
                    Once matched, receive donated medicines conveniently at your chosen location.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- START SERVICE SECTION -->
{{-- <section class="service-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="service-head">
                    <h2 class="text-uppercase card-head">we give you <span>the best</span> </h2>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore accusamus, quaerat
                        laboriosam ipsam illo eveniet eum nam debitis excepturi voluptatibus
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="card service-card">
                            <div class="card-body">
                                <h4 class="text-uppercase">
                                    <span><i class="fa fa-medkit" aria-hidden="true"></i></span> faster fast aid
                                </h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe nam voluptatem nemo
                                    quibusdam ea laudantium maiores doloribus consequatur aspernatur voluptatibus
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card service-card">
                            <div class="card-body">
                                <h4 class="text-uppercase">
                                    <span><i class="fa fa-medkit" aria-hidden="true"></i></span> genaral medicin
                                </h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe nam voluptatem nemo
                                    quibusdam ea laudantium maiores doloribus consequatur aspernatur voluptatibus
                                    
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card service-card">
                            <div class="card-body">
                                <h4 class="text-uppercase">
                                    <span><i class="fa fa-medkit" aria-hidden="true"></i></span> medical recharch
                                </h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe nam voluptatem nemo
                                    quibusdam ea laudantium maiores doloribus consequatur aspernatur voluptatibus
                                    
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card service-card">
                            <div class="card-body">
                                <h4 class="text-uppercase">
                                    <span><i class="fa fa-medkit" aria-hidden="true"></i></span> intensive care
                                </h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe nam voluptatem nemo
                                    quibusdam ea laudantium maiores doloribus consequatur aspernatur voluptatibus
                                    
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pt-5 d-none d-lg-block">
                <div class="working-time py-4">
                    <div class="bg-color">
                        <h4 class="pb-2 pl-3 text-capitalize">Our working time</h4>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <p>munday-friday</p>
                        </div>
                        <div class="col-6">
                            <p>08am:10pm</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p>satarday</p>
                        </div>
                        <div class="col-6">
                            <p>07am:09pm</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p>ambulance</p>
                        </div>
                        <div class="col-6">
                            <p>24/7</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p>visitors</p>
                        </div>
                        <div class="col-6">
                            <p>11am-4pm</p>
                        </div>
                    </div>
                    <div class="bg-color">
                        <h4 class="pb-2 pl-3 text-capitalize">Discuse time</h4>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p>monday-friday</p>
                        </div>
                        <div class="col-6">
                            <p>11am-08pm</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p>satarday</p>
                        </div>
                        <div class="col-6">
                            <p>11am-4pm</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- END SERVICE SECTION -->
<!--    33333333333333333333333333-->
<!--start doctors area-->
<section class="doctors-area clearfix py-5 bg-light">
    <div class="container-fluid wow fadeInUp" data-wow-duration=".8s">
        <div class="row">
            <div class="col">
                <div class="section-header text-center mb-5 wow bounceIn">
                    <h2 class="section-title text-uppercase">doctor team</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="doctors-box">

                    <i class="fa fa-angle-left prv ps-control"></i>
                    <i class="fa fa-angle-right nxt ps-control"></i>

                    <div class="doctors-slider-width">
                        <div class="doctors-slider doctors-slider-custom">
                            <!--doctor-item-->
                            <div class="doctors-item">
                                <div class="slider-item card mx-2">
                                    <div class="card-body  ">
                                        <div class="images">
                                            <img src="{{ asset('frontend_assets/photos/444444.jpg') }}" alt="">
                                        </div>
                                        <h5 class="text-uppercase doctor-name">Dr. Md. Anwarul Karim</h5>
                                        <H6>Expertise : Pediatric - Medicine, Hematology, Oncology</H6>
                                        <h6>Chamber: Health & Hope Hospital Ltd.</h6>
                                        <p class="text-uppercase"><a href="#">see more</a></p>
                                        {{-- <div class="appoint py-2 text-center">
                                            <a href="#" class="myButton">MAKE APPOINT</a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <!--doctor-item-->
                            <div class="doctors-item">
                                <div class="slider-item card mx-2">
                                    <div class="card-body  ">
                                        <div class="images">
                                            <img src="{{ asset('frontend_assets/photos/444444.jpg') }}" alt="">
                                        </div>
                                        <h5 class="text-uppercase doctor-name">Dr. Md. Anwarul Karim</h5>
                                        <H6>Expertise : Pediatric - Medicine, Hematology, Oncology</H6>
                                        <h6>Chamber: Health & Hope Hospital Ltd.</h6>
                                        <p class="text-uppercase"><a href="#">see more</a></p>
                                        {{-- <div class="appoint py-2 text-center">
                                            <a href="#" class="myButton">MAKE APPOINT</a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <!--doctor-item-->
                            <div class="doctors-item">
                                <div class="slider-item card mx-2">
                                    <div class="card-body  ">
                                        <div class="images">
                                            <img src="{{ asset('frontend_assets/photos/444444.jpg') }}" alt="">
                                        </div>
                                        <h5 class="text-uppercase doctor-name">Dr. Md. Anwarul Karim</h5>
                                        <H6>Expertise : Pediatric - Medicine, Hematology, Oncology</H6>
                                        <h6>Chamber: Health & Hope Hospital Ltd.</h6>
                                        <p class="text-uppercase"><a href="#">see more</a></p>
                                        {{-- <div class="appoint py-2 text-center">
                                            <a href="#" class="myButton">MAKE APPOINT</a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <!--doctor-item-->
                            <div class="doctors-item">
                                <div class="slider-item card mx-2">
                                    <div class="card-body  ">
                                        <div class="images">
                                            <img src="{{ asset('frontend_assets/photos/444444.jpg') }}" alt="">
                                        </div>
                                        <h5 class="text-uppercase doctor-name">Dr. Md. Anwarul Karim</h5>
                                        <H6>Expertise : Pediatric - Medicine, Hematology, Oncology</H6>
                                        <h6>Chamber: Health & Hope Hospital Ltd.</h6>
                                        <p class="text-uppercase"><a href="#">see more</a></p>
                                        {{-- <div class="appoint py-2 text-center">
                                            <a href="#" class="myButton">MAKE APPOINT</a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <!--doctor-item-->
                            <div class="doctors-item">
                                <div class="slider-item card mx-2">
                                    <div class="card-body  ">
                                        <div class="images">
                                            <img src="{{ asset('frontend_assets/photos/444444.jpg') }}" alt="">
                                        </div>
                                        <h5 class="text-uppercase doctor-name">Dr. Md. Anwarul Karim</h5>
                                        <H6>Expertise : Pediatric - Medicine, Hematology, Oncology</H6>
                                        <h6>Chamber: Health & Hope Hospital Ltd.</h6>
                                        <p class="text-uppercase"><a href="#">see more</a></p>
                                        {{-- <div class="appoint py-2 text-center">
                                            <a href="#" class="myButton">MAKE APPOINT</a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <!--doctor-item-->
                            <div class="doctors-item">
                                <div class="slider-item card mx-2">
                                    <div class="card-body  ">
                                        <div class="images">
                                            <img src="{{ asset('frontend_assets/photos/444444.jpg') }}" alt="">
                                        </div>
                                        <h5 class="text-uppercase doctor-name">Dr. Md. Anwarul Karim</h5>
                                        <H6>Expertise : Pediatric - Medicine, Hematology, Oncology</H6>
                                        <h6>Chamber: Health & Hope Hospital Ltd.</h6>
                                        <p class="text-uppercase"><a href="#">see more</a></p>
                                        {{-- <div class="appoint py-2 text-center">
                                            <a href="#" class="myButton">MAKE APPOINT</a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <!--doctor-item-->
                            <div class="doctors-item">
                                <div class="slider-item card mx-2">
                                    <div class="card-body  ">
                                        <div class="images">
                                            <img src="{{ asset('frontend_assets/photos/444444.jpg') }}" alt="">
                                        </div>
                                        <h5 class="text-uppercase doctor-name">Dr. Md. Anwarul Karim</h5>
                                        <H6>Expertise : Pediatric - Medicine, Hematology, Oncology</H6>
                                        <h6>Chamber: Health & Hope Hospital Ltd.</h6>
                                        <p class="text-uppercase"><a href="#">see more</a></p>
                                        {{-- <div class="appoint py-2 text-center">
                                            <a href="#" class="myButton">MAKE APPOINT</a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>

                        </div>
                        {{-- <div class="text-right pt-5 ">
                            <a href="glary-details.html">
                                <button type="button" class="myButton text-uppercase">
                                    see more
                                </button>
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!--end doctors area-->




<!--START TEAM GLARY SECTION -->
<!-- <section class="team-glary-section py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="team-head py-3">
                    <h2 class="text-uppercase text-center">team glary</h2>
                    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias nesciunt
                        error ullam eaque quam et repudiandae quaerat cumque delectus dolorum!</p>
                </div>
            </div>
            <div class="col-12">
                <div class="gallery">
                    <div class="row border">

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 border">
                            <a href="{{ asset('frontend_assets/photos/doctor.png') }}">
                                <img class="img-fluid" src="{{ asset('frontend_assets/photos/doctor.png') }}" alt="">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 border">
                            <a href="{{ asset('frontend_assets/photos/doctor.png') }}">
                                <img class="img-fluid" src="{{ asset('frontend_assets/photos/doctor.png') }}" alt=""></a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 border">
                            <a href="{{ asset('frontend_assets/photos/doctor2.png') }}">
                                <img class="img-fluid" src="{{ asset('frontend_assets/photos/doctor2.png') }}" alt="">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 border">
                            <a href="{{ asset('frontend_assets/photos/444444.jpg') }}"><img class="img-fluid" src="{{ asset('frontend_assets/photos/444444.jpg') }}" alt=""></a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 border">
                            <a href="{{ asset('frontend_assets/photos/doctor.png') }}"><img class="img-fluid"
                                    src="{{ asset('frontend_assets/photos/doctor.png') }}" alt=""></a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 border">
                            <a href="{{ asset('frontend_assets/photos/doctor2.png') }}"><img class="img-fluid" src="{{ asset('frontend_assets/photos/doctor2.png') }}" alt=""></a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 border">
                            <a href="{{ asset('frontend_assets/photos/444444.jpg') }}"><img class="img-fluid" src="{{ asset('frontend_assets/photos/444444.jpg') }}" alt=""></a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 border">
                            <a href="{{ asset('frontend_assets/photos/doctor.png') }}"><img class="img-fluid"
                                    src="{{ asset('frontend_assets/photos/doctor.png') }}" alt=""></a>
                        </div>

                    </div>

                </div>
                {{-- <div class="text-center pt-5">
                    <a href="glary-details.html">
                        <button type="button" class="myButton text-uppercase text-center">
                            see more
                        </button>
                    </a>
                </div> --}}
            </div>
        </div>
    </div>
</section> -->
<!-- END TEAM GLARY SECTION -->
<!-- START BOX SECTION -->
<section class="box-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="box-content h-100">
                    <h3 class="text-uppercase text-light">Number Of Donation</h3>
                    <h3 class="box-year">{{$totalDonation}}+</h3>
                    <div class="box-icon">
                        <i class="fa fa-trophy"></i>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="box-content h-100">
                    <h3 class="text-uppercase text-light">Number Of Request</h3>
                    <h3 class="box-year">{{$requestCount}}+</h3>
                    <div class="box-icon box-icon-2">
                        <i class="fa fa-user-md"></i>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="box-content h-100">
                    <h3 class="text-uppercase text-light"> Number Of Delivered </h3>
                    <h3 class="box-year">{{$deliverdCount}}+</h3>
                    <div class="box-icon box-icon-3">
                        <i class="fa fa-shield"></i>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="box-content h-100">
                    <h3 class="text-uppercase text-light">Total Doctor</h3>
                    <h3 class="box-year">5+</h3>
                    <div class="box-icon box-icon-4">
                        <i class="fa fa-users"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END BOX SECTION -->

<!--    corona test section-->
@endsection
