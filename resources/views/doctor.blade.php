@extends('layouts.app')

@section('content')
    <!-- team-details -->
    <section class="team-details p_relative">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                    <figure class="image-box"><img src="web/aside/profile-image.jpeg" alt=""></figure>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                    <div class="team-details-content">
                        <div class="team-info">
                            <h2>DR GODFREY OKOLO JP</h2>
                            <span class="designation">Eye Care Specialist</span>
                            <p>Dr Godfrey Okolo Johnpaul is a medical doctor (MBBS, MD) and consultant Ophthalmologist and
                                eye care surgeon who has being in active medical practice with over 20 years experience in
                                eye care.</p>
                            <ul class="list clearfix">
                                <li><span>Occupation:</span>Consultant eye care specialist and Ophthalmologist</li>
                                <li><span>Experience:</span>Over 15 years of work experience including over 13,000 surgeries done.</li>
                                <li><span>Skills:</span>Carries out a wide variety of eye surgeries which include cataract
                                    surgeries, glaucoma surgeries, cornea tear repair surgeries, puncture wounds, gunshot
                                    injuries to the eye referred to as open globe injuries, he also manages blunt injuries
                                    (closed globe) to the eye.
                                    Other procedures he carries out include excision of growths and swellings in the eye
                                    (both cancerous and non cancerous (Benign).
                                    He manages all types of ocular emergencies including chemical injuries (acidic and
                                    basic) , burns (thermal) injuries to the eye.</li>
                                <li><span>Certificates:</span>Enrolled at the very renowned and prestigious Aravind Eye
                                    Hospital and institute of ophthalmology Coimbatore, Tamilnadu south India were he
                                    trained and became a certified surgeon in Phaco emulsification (laser) cataract surgery,
                                    Manual small incision cataract surgery (MSICS). </li>
                                <li><span>Education::</span>MBBS, MD, MWACS, FMC (Oph), Phaco/SICS surgeon (Aravind India) Paed. Oph. (Aravind India.) USAID</li>
                                <li><span>Location:</span>Federal Capital Territory Abuja</li>
                                <li><span>Phone:</span><a href="tel:+2348038207100">+2348038207100</a></li>
                                <li><span>Email:</span><a href="mailto:johnpaulokolo@gmail.com">johnpaulokolo@gmail.com</a>
                                </li>
                            </ul>
                            <ul class="social-link clearfix">
                                <li><a href="team-details.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="team-details.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="team-details.html"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                        <div class="contact-box">
                            <div class="text">
                                <h3>Contact Me</h3>
                            </div>
                            <div class="form-inner">
                                <form action="{{ route('doctor') }}" method="post">
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
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="form-group">
                                                <input type="text" name="name" placeholder="Your name" required="">
                                                @error('name')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="form-group">
                                                <input type="email" name="email" placeholder="Your Email"
                                                    required="">
                                                @error('email')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 column">
                                            <div class="form-group">
                                                <input type="text" name="phone" placeholder="Phone" required="">
                                                @error('phone')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 column">
                                            <div class="form-group">
                                                <textarea name="message" placeholder="Message"></textarea>
                                                @error('message')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 column">
                                            <div class="form-group message-btn">
                                                <button type="submit" class="theme-btn btn-one">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-details end -->
@endsection
