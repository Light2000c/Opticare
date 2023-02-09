@extends('layouts.app')


@section('content')

 <!-- banner-section -->
 <section class="banner-style-two centred p_relative">
    <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
        <div class="slide-item p_relative">
            <div class="image-layer p_absolute" style="background-image:url(web/aside/medical1.jpeg)"></div>
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url(web/assets/images/shape/shape-3.png);"></div>
                <div class="pattern-2" style="background-image: url(web/assets/images/shape/shape-12.png);"></div>
                <div class="pattern-3" style="background-image: url(web/assets/images/shape/shape-13.png);"></div>
                <div class="eye-icon rotate-me" style="background-image: url(web/assets/images/icons/icon-1.png);"></div>
            </div>
            <div class="auto-container">
                <div class="content-box">
                    <span class="big-title animation_text_word"></span>
                    <h3>Abuja Eye Hospital</h3>
                    <h2>Abuja Eye Hospital</h2>
                    {{-- <p>Provide quality and affordable services and to generally improve the lives of Nigerians!</p> --}}
                    <p>....Treating Blindness!</p>
                    <div class="btn-box">
                        <a href="{{ route('contact') }}" class="theme-btn btn-one">Contact Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-item p_relative">
            <div class="image-layer p_absolute" style="background-image:url(web/aside/medical2.jpeg)"></div>
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url(web/assets/images/shape/shape-3.png);"></div>
                <div class="pattern-2" style="background-image: url(web/assets/images/shape/shape-12.png);"></div>
                <div class="pattern-3" style="background-image: url(web/assets/images/shape/shape-13.png);"></div>
                <div class="eye-icon rotate-me" style="background-image: url(web/assets/images/icons/icon-1.png);"></div>
            </div>
            <div class="auto-container">
                <div class="content-box">
                    <span class="big-title animation_text_word"></span>
                    <h3>Abuja Eye Hospital</h3>
                    <h2>Abuja Eye Hospital</h2>
                    <p>Providing Affordable, Easily Accessible Eye Care Services!</p>
                    <div class="btn-box">
                        <a href="{{ route('contact') }}" class="theme-btn btn-one">Contact Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner-section end -->


<!-- feature-style-two -->
{{-- <section class="feature-style-two p_relative pt_100 pb_100">
    <div class="pattern-layer">
        <div class="pattern-1" style="background-image: url(web/assets/images/shape/shape-14.png);"></div>
        <div class="pattern-2" style="background-image: url(web/assets/images/shape/shape-15.png);"></div>
    </div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500m">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-12"></i></div>
                        <h3><a href="index-2.html">Qualified Doctors</a></h3>
                        <p>Lorem ipsum dolor sit elit con sectur sed eiusmod tempor labore aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-two wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500m">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-13"></i></div>
                        <h3><a href="index-2.html">Modern Equipment</a></h3>
                        <p>Lorem ipsum dolor sit elit con sectur sed eiusmod tempor labore aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-two wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500m">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-14"></i></div>
                        <h3><a href="index-2.html">Emergency Help</a></h3>
                        <p>Lorem ipsum dolor sit elit con sectur sed eiusmod tempor labore aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-two wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500m">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-15"></i></div>
                        <h3><a href="index-2.html">Individual Approach</a></h3>
                        <p>Lorem ipsum dolor sit elit con sectur sed eiusmod tempor labore aliqua.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- feature-style-two end -->


<!-- about-style-two -->
<section class="about-style-two p_relative">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_four">
                    <div class="content-box mt_15">
                        <div class="sec-title mb_25">
                            <span class="sub-title">Who We Are?</span>
                            <h2>Who We Are?</h2>
                        </div>
                        <div class="text">
                            <p>Abuja eye Hospital is a highly specialised centre that delivers first class quality eye care using state of the art technologically advanced equipment and procedures. We registered with the Federal Republic of Nigeria and situated in the Federal Capital Territory.</p>
                        </div>
                        {{-- <div class="inner-box p_relative mb_40">
                            <div class="single-item">
                                <div class="icon-box"><i class="icon-8"></i></div>
                                <h3>Our Patients <br />Vision</h3>
                            </div>
                            <div class="single-item">
                                <div class="icon-box"><i class="icon-10"></i></div>
                                <h3>Trusted Eye <br />Doctor</h3>
                            </div>
                        </div> --}}
                        <div class="btn-box">
                            <a href="{{ route('about') }}" class="theme-btn btn-one">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image_block_three">
                    <div class="image-box ml_13 pr_20 pl_60">
                        {{-- <div class="shape">
                            <div class="shape-1" style="background-image: url(web/assets/images/shape/shape-16.png);"></div>
                            <div class="shape-2" style="background-image: url(web/assets/images/shape/shape-16.png);"></div>
                        </div> --}}
                        {{-- <figure class="image"><img src="web/assets/images/resource/about-1.png" alt=""></figure> --}}
                        <figure class="image"><img src="web/aside/opticare1.jpeg" alt=""></figure>
                        <div class="text p_absolute l_0 b_40">
                            <h2>15</h2>
                            <h4>Years of Experience in This Field</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-style-two end -->


<!-- service-style-two -->
<section class="service-style-two p_relative">
    <div class="pattern-layer">
        <div class="pattern-1 p_absolute l_20 b_20" style="background-image: url(web/assets/images/shape/shape-18.png);"></div>
        <div class="pattern-2 p_absolute t_20 r_20" style="background-image: url(web/assets/images/shape/shape-19.png);"></div>
    </div>
    <div class="auto-container">
        <div class="sec-title centred mb_50">
            <span class="sub-title">Our Services</span>
            <h2>A Global Leader, Treatment <br />of eye Disease</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                <div class="service-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-17"></i></div>
                        <h3><a href="surgical-procedures.html">Surgical <br />Procedures</a></h3>
                        {{-- <p>To perform and carry out all eye surgeries and ophthalmic procedures in the operating theatre; involving all eye disease conditions including cataract, glaucoma, retinal detachment, cornea e.t.c.</p>
                        <div class="link-text"><a href="surgical-procedures.html">Read More</a></div> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                <div class="service-block-two wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-18"></i></div>
                        <h3><a href="surgical-procedures.html">Paediatric Ophthalmology</a></h3>
                        {{-- <p>To provide consultancy services for all ophthalmic disease conditions and blindness both paediatric (children)  and Adults.</p>
                        <div class="link-text"><a href="surgical-procedures.html">Read More</a></div> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 service-block" >
                <div class="service-block-two wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box" >
                        <div class="icon-box"><i class="icon-20"></i></div>
                        <h3><a href="surgical-procedures.html">Laser <br />Eye Surgery</a></h3>
                        {{-- <p>To carry out all ophthalmic laser procedures in the eye</p>
                        <div class="link-text"><a href="surgical-procedures.html">Read More</a></div> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 service-block">
                <div class="service-block-two wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-21"></i></div>
                        <h3><a href="surgical-procedures.html">Vision <br />Correction</a></h3>
                        {{-- <p>Lorem ipsum dolor amet cons ectur tempor adicing elit sed do usmod tempor.</p>
                        <div class="link-text"><a href="surgical-procedures.html">Read More</a></div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="more-btn centred mt_60">
            <a href="{{ route('services') }}" class="theme-btn btn-one">View All Service</a>
        </div>
    </div>
</section>
<!-- service-style-two end -->


        <!-- chooseus-style-three -->
        <section class="chooseus-style-three p_relative">
            <div class="bg-layer"></div>
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-38.png);"></div>
            <figure class="image-layer">
                {{-- <img src="web/assets/images/resource/chooseus-1.png" alt=""> --}}
                <img src="web/aside/opticare3.png" alt="">
                {{-- <img src="web/aside/new2.jpeg" alt=""> --}}
            </figure>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 offset-lg-6">
                        <div class="content_block_eight">
                            <div class="content-box p_relative d_block">
                                <div class="shape" style="background-image: url(assets/images/shape/shape-37.png);"></div>
                                <div class="text p_relative d_block">
                                    <h2>Great Reasons People Choose Us</h2>
                                    <p>Abuja's Eye Hospital makes eye care services readily accessible to neighboring states in the North Central zone and indeed to all Nigerians.</p>
                                </div>
                                <div class="inner-box">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <h4><a href="index-3.html">Quality Staff</a></h4>
                                                <p>Over 15 years of work experience including 13,000 surgeries done.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <h4><a href="index-3.html">Quality Assistance</a></h4>
                                                <p>professional, dedicated and committed medical personel who place great emphasis on excellent customer care, empathy and team work.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <h4><a href="index-3.html">Affordable Price</a></h4>
                                                <p>Affordable, accessible and available medical care using state of art technologically advanced quipment and procedures.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                            <div class="single-item">
                                                <h4><a href="index-3.html">Optimized Solutions</a></h4>
                                                <p>Shorter waiting period and personalized one on one consultation with MD.</p>
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
        <!-- chooseus-style-three end -->



<!-- team-style-two -->
<section class="team-style-two">
    <div class="auto-container">
        <div class="sec-title centred mb_60">
            <span class="sub-title">Ophthalmologist</span>
            <h2>The Most Qualified Skillful & <br />Professional staff</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                <div class="team-block-two wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box"><img src="web/aside/profile-image.jpeg" alt=""></figure>
                        <div class="lower-content p_relative d_block">
                            {{-- <div class="share-box p_absolute">
                                <a href="index.html" class="share-icon fs_14 d_iblock"><i class="icon-37"></i></a>
                                <ul class="share-links p_absolute clearfix">
                                    <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div> --}}
                            <h3><a href="{{ route('doctor') }}">Dr Godfrey Okolo Jp</a></h3>
                            <span class="designation">Eye Care Consultant Ophthalmologist</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- team-style-two end -->



<!-- skills-section -->
<section class="skills-section p_relative">
    <div class="pattern-layer">
        <div class="pattern-1" style="background-image: url(web/assets/images/shape/shape-27.png);"></div>
        <div class="pattern-2" style="background-image: url(web/assets/images/shape/shape-28.png);"></div>
    </div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image_block_four">
                    <div class="image-box mr_70 pb_100">
                        <div class="shape" style="background-image: url(web/assets/images/shape/shape-26.png);"></div>
                        <div class="icon-box rotate-me"><img src="web/assets/images/icons/icon-1.png" alt=""></div>
                        <figure class="image image-1"><img src="web/aside/image1.jpeg" alt=""></figure>
                        <figure class="image image-2"><img src="web/aside/image2.jpeg" alt=""></figure>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_seven">
                    <div class="content-box ml_30">
                        <div class="sec-title mb_30">
                            <span class="sub-title">Ophthalmologist</span>
                            <h2 class="mb_15">Eye Care Service Skills For Children and Adults</h2>
                            <p class="pt_12">Provide Eye Care Services For Both Children And Adults.</p>
                        </div>
                        <div class="progress-box">
                            <div class="progress-box p_relative d_block mb_25">
                                <h5>High Tech Equipments</h5>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="90%"></div>
                                    <div class="count-text">90%</div>
                                </div>
                            </div>
                            <div class="progress-box p_relative d_block">
                                <h5>Expert Doctor</h5>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="75%"></div>
                                    <div class="count-text">75%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- skills-section end -->

        {{-- <video section> --}}
<section class="team-style-two">
    <div class="auto-container">
        {{-- <div class="sec-title centred mb_60">
            <span class="sub-title">Ophthalmologist</span>
            <h2>The Most Qualified Skillful & <br />Professional staff</h2>
        </div> --}}
        <div class="row clearfix">

            <div class="col-lg-4 col-md-6 col-sm-12 team-block mb-2">
                <div class="team-block-two wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="lower-content p_relative d_block">
                            <video src="web/aside/video1.mp4" autoplay controls muted style="max-width: 100%;" width="500" height="240"></video>     
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 team-block mb-2">
                <div class="team-block-two wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="lower-content p_relative d_block">
                            <video src="web/aside/video2.mp4" autoplay controls muted style="max-width: 100%;" width="500" height="240"></video>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 team-block mb-2">
                <div class="team-block-two wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="lower-content p_relative d_block">
                            <video src="web/aside/video3.mp4" autoplay controls muted style="max-width: 100%;" width="500" height="240"></video>     
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 team-block mb-2">
                <div class="team-block-two wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="lower-content p_relative d_block">
                        <img src="web/aside/new3.jpeg" alt="" srcset="" style="max-width: 100%; width: 500px; height: 240px;">    
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 team-block mb-2">
                <div class="team-block-two wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="lower-content p_relative d_block">
                        <img src="web/aside/treat2.jpeg" alt="" srcset="" style="max-width: 100%; width: 500px; height: 240px;">    
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 col-sm-12 team-block mb-2">
                <div class="team-block-two wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="lower-content p_relative d_block">
                        <img src="web/aside/treat1.jpeg" alt="" srcset="" style="max-width: 100%; width: 500px; height: 240px;">    
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
{{-- <video section end> --}}

<!-- cta-section -->
<section class="cta-section alternat-2 p_relative bg-color-1">
    <div class="pattern-layer">
        <div class="pattern-1" style="background-image: url(web/assets/images/shape/shape-29.png);"></div>
        <div class="pattern-2" style="background-image: url(web/assets/images/shape/shape-30.png);"></div>
    </div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image-box mr_25 mt_60">
                    <div class="shape" style="background-image: url(web/assets/images/shape/shape-30.png);"></div>
                    <figure class="image p_relative z_1"><img src="web/aside/eyeinstrument.jpeg" alt=""></figure>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content-box ml_35">
                    <div class="sec-title left mb_25">
                        <span class="sub-title">Emergency Need</span>
                        <h2>Need a Doctor <br />for Check-up? Call for an <span>Emergency Service!</span></h2>
                    </div>
                    <div class="text">
                        <p>All of our services are backed by our 100% satisfaction guarantee, our expert doctor always delivers.</p>
                    </div>
                    <div class="support-box">
                        <div class="icon-box"><i class="icon-32"></i></div>
                        <h4>For Emergency</h4>
                        <h3><a href="tel:+2348038207100">+2348038207100</a></h3>
                        <h3><a href="tel:+2348106381726">+2348106381726</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- cta-section end -->

@endsection