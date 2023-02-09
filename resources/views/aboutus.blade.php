@extends('layouts.app')


@section('content')
    <!-- Page Title -->
    <section class="page-title">
        {{-- <div class="bg-layer" style="background-image: url(web/assets/images/background/page-title.jpg);"></div> --}}
        <div class="bg-layer" style="background-image: url(web/aside/medical1.jpeg);"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>About Us</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- about-section -->
    <section class="about-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image_block_one">
                        <div class="image-box mr_30 pr_130 pb_100">
                            <div class="shape" style="background-image: url(web/assets/images/shape/shape-1.png);"></div>
                            <figure class="image"><img src="web/aside/opticare1.jpeg" alt="">
                            </figure>
                            <div class="text p_absolute r_0 b_0">
                                <h2>15</h2>
                                <h4>Years of Experience in This Field</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_one">
                        <div class="content-box ml_30">
                            <div class="sec-title left p_relative d_block mb_25">
                                <span class="sub-title">Who We Are?</span>
                                <h2>Who We Are?</h2>
                            </div>
                            <div class="text p_relative d_block">
                                <p>Abuja eye Hospital is a highly specialised centre that delivers first class quality eye
                                    care using state of the art technologically advanced equipment and procedures. We
                                    registered with the Federal Republic of Nigeria and situated in the Federal Capital
                                    Territory.</p>
                                <p>Our services include cataract surgeries, glaucoma surgeries, cornea surgeries, refraction and eye tests for eye glasses/ spectacles, and eye laser procedures for both adults and children (paediatric).</p>
                            </div>
                            <div class="inner-box">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <h3>Our Mission</h3>
                                            <p>Our mission is to provide standardized quality eye care that is available and affordable.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <h3>Our Vision</h3>
                                            <p>
                                                {{-- Our vision is to set up a state of the art eye hospital in the Federal
                                                Capital Territory that will cater to the medical needs of the inhabitants of
                                                Abuja and neighboring states across ages 1 - 90. --}}
                                                Think eye care, think Abuja eye Hospital.
                                            </p>
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-section end -->


    <section>
        <div class="container mb-5">

            <div class="mb-5">
                <div class="">

                    <div class="mb-3">
                        <div class="text p_relative d_block">
                            <p>The Federal Capital Territory along with the neighbouring states in the North-centeral zone
                                of Nigeria is bedevilled with inadequate medical facilities especially in the area of eye
                                care.
                                The NC zone with a population of over 20 million inhabitants is in dire need of quality,
                                affordable and accessible eye care. Abuja Eye hospital is set to bridge this gap.</p>
                            <p>Our mission is to provide quality and affordable services and to generally improve the lives
                                of Nigerians in this area.</p>
                            <p>Our plan is to set up a state of the eye hospital in the Federal Capital Territory that will
                                cater to the medical needs of inhabitants of abuja and neighboring states across ages 1-90.
                                below is a SWOT analysis.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <div class="single-item">
                                <h4>STRENGTHs</h4>
                                <ul class="list-style-one clearfix">
                                    <li>Abuja's centralized geographical location make it readily acessible to states in the North
                                        Central Zone and indeed to all Nigerians.</li>
                                    <li>Over 15 years of work experience including 13,000 surgeries done.</li>
                                    <li>Professional, dedicated and commited medical personel who place great emphasis on
                                        excellent customer care, empathy and team work.</li>
                                    <li>affordable, accessible and available medical care using state of the art technologically advanced equipment and procedures.</li>
                                    <li>Shorter waiting period and personalized one on one consultation with MD</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <div class="single-item">
                                <h4>OPPORTUNITIES</h4>
                                <ul class="list-style-one clearfix">
                                    <li>Positioning as the prefered eye hospital in the FCT</li>
                                    <li>Large potential market equity from FCT and neighbouring States</li>
                                    <li>Opportunity to carve a niche with pediatric and other eye services</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <div class="single-item">
                                <h4>FINANCIALS</h4>
                                <ul class="list-style-one clearfix">
                                    <li>Start up cost (attached)</li>
                                    <li>5 year income projection plan (attached)</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <div class="single-item">
                                <h4>THREATS</h4>
                                <ul class="list-style-one clearfix">
                                    <li>Unstable government policies (monetary & others)</li>
                                    <li>Medical tourism</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
