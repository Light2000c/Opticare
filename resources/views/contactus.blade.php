@extends('layouts.app')


@section('content')
    <!-- Page Title -->
    <section class="page-title">
        <div class="bg-layer" style="background-image: url(web/aside/medical2.jpeg);"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>Contact Us</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- contact-info-section -->
    <section class="contact-info-section centred">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                    <div class="single-item">
                        <div class="icon-box"><i class="icon-57"></i></div>
                        <h3>Office Location</h3>
                        <p>Plot 48 David Ejoor Crescent, Off Gaduwa Junction, Durumi 2, by Durumi Market, FCT Abuja</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                    <div class="single-item" style="height: 100%">
                        <div class="icon-box"><i class="icon-58"></i></div>
                        <h3>Company Email</h3>
                        <p><a href="mailto:info@abujaeyehospital.com">info@abujaeyehospital.com</a> <br> <a href="mailto:abujaeyehospital@gmail.com">abujaeyehospital@gmail.com</a> <br> <a href="mailto:johnpaulokolo@gmail.com">johnpaulokolo@gmail.com</a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                    <div class="single-item" style="height: 100%">
                        <div class="icon-box"><i class="icon-59"></i></div>
                        <h3>Contact Us</h3>
                        <p><a href="tel:+2348038207100">+2348038207100</a></p>
                            <p><a href="tel:+2348106381726">+2348106381726</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-info-section end -->


    <!-- contact-style-two -->
    <section class="contact-style-two p_relative">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url(assets/images/shape/shape-55.png);"></div>
            <div class="pattern-2" style="background-image: url(assets/images/shape/shape-56.png);"></div>
        </div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 big-column offset-lg-2">
                    <div class="form-inner">
                        <h2>Leave a Comment</h2>
                        <form action="{{ route('contact') }}" method="post">
                            @csrf

                            @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Success!</strong> {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Error!</strong> {{ session('error') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="name" placeholder="Your Name" required="">
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Your email" required="">
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="phone" required="" placeholder="Phone">
                                    @error('phone')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="subject" required="" placeholder="Subject">
                                    @error('subject')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Message"></textarea>
                                    @error('message')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn mr-0 centred">
                                    <button class="theme-btn btn-one" type="submit" name="submit-form">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-style-two end -->


    <!-- google-map-section -->
    {{-- <section class="google-map-section p_relative">
    <div class="map-inner p_relative d_block">
        <div 
            class="google-map" 
            id="contact-google-map" 
            data-map-lat="40.712776" 
            data-map-lng="-74.005974" 
            data-icon-path="assets/images/icons/map-marker-2.png"  
            data-map-title="Brooklyn, New York, United Kingdom" 
            data-map-zoom="12" 
            data-markers='{
                "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","assets/images/icons/map-marker-2.png"]
            }'>

        </div>
    </div>
</section> --}}

    <!-- google-map-section end -->
@endsection
