@extends('layouts.app')


@section('content')
    <!-- Page Title -->
    <section class="page-title">
        <div class="bg-layer" style="background-image: url(web/aside/medical1.jpeg);"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>Services</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- service-section -->
    <section class="service-section p_relative bg-color-1">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url(assets/images/shape/shape-4.png);"></div>
            <div class="pattern-2" style="background-image: url(assets/images/shape/shape-5.png);"></div>
        </div>
        <div class="auto-container">
            <div class="sec-title centred mb_50">
                <span class="sub-title">Our Services</span>
                <h2>A Global Leader, Treatment <br />of eye Disease</h2>
            </div>
            <div class="tabs-box">
                <div class="tab-btn-box p_relative d_block mb_70 centred">
                    <ul class="tab-btns tab-buttons clearfix">
                        <li class="tab-btn active-btn" data-tab="#tab-1">
                            <div class="icon-box"><i class="icon-17"></i></div>
                            <h4>Surgical Procedures</h4>
                        </li>
                        <li class="tab-btn" data-tab="#tab-2">
                            <div class="icon-box"><i class="icon-18"></i></div>
                            <h4>Paeditaric Ophthalmology</h4>
                        </li>
                        <li class="tab-btn" data-tab="#tab-4">
                            <div class="icon-box"><i class="icon-20"></i></div>
                            <h4>Laser Eye Surgery</h4>
                        </li>
                        <li class="tab-btn" data-tab="#tab-5">
                            <div class="icon-box"><i class="icon-21"></i></div>
                            <h4>Vision Correction</h4>
                        </li>
                    </ul>
                </div>
                <div class="tabs-content">
                    <div class="tab active-tab" id="tab-1">
                        <div class="inner-box">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                    <div class="content_block_two">
                                        <div class="content-box">
                                            <div class="text">
                                                <h3>Surgical Procedures</h3>
                                                <p>To perform and carry out all eye surgeries and ophthalmic procedures in
                                                    the operating theatre; involving all eye disease conditions including
                                                    cataract, glaucoma, retinal detachment, cornea e.t.c.</p>
                                            </div>
                                            {{-- <ul class="list-style-one clearfix">
                                                    <li>Treats Minor Illnesses</li>
                                                    <li>Performs Routine Health Tests</li>
                                                    <li>Best Lasik Treatment</li>
                                                </ul> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                    <div class="image_block_two">
                                        <div class="image-box p_relative d_block">
                                            <figure class="image p_relative d_block"><img
                                                    src="assets/images/service/service-1.jpg" alt=""></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab" id="tab-2">
                        <div class="inner-box">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                    <div class="content_block_two">
                                        <div class="content-box">
                                            <div class="text">
                                                <h3>Paediatric Ophthalmology</h3>
                                                <p>To provide consultancy services for all ophthalmic disease conditions and
                                                    blindness, both paediatric (children) and Adults.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                    <div class="image_block_two">
                                        <div class="image-box p_relative d_block">
                                            <figure class="image p_relative d_block"><img
                                                    src="assets/images/service/service-1.jpg" alt=""></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab" id="tab-4">
                        <div class="inner-box">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                    <div class="content_block_two">
                                        <div class="content-box">
                                            <div class="text">
                                                <h3>Laser Eye Surgery</h3>
                                                <p>To carry out all ophthalmic laser procedures in the eye.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                    <div class="image_block_two">
                                        <div class="image-box p_relative d_block">
                                            <figure class="image p_relative d_block"><img
                                                    src="assets/images/service/service-1.jpg" alt=""></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab" id="tab-5">
                        <div class="inner-box">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                    <div class="content_block_two">
                                        <div class="content-box">
                                            <div class="text">
                                                <h3>Vision Correction</h3>
                                                <p>To treat and manage all ocular and ophthalmic emergencies including eye
                                                    injuries, blunt or sharp, open or closed globe injuries, viz puncture or
                                                    penetrating injuries to the eye, gunshot injuries, chemical injuries,
                                                    laceration cuts and tears to the eye and removal of all foreign bodies
                                                    in the eye.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                    <div class="image_block_two">
                                        <div class="image-box p_relative d_block">
                                            <figure class="image p_relative d_block"><img
                                                    src="assets/images/service/service-1.jpg" alt=""></figure>
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
    <!-- service-section end -->
@endsection
