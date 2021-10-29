@extends('layout.app')
@section('content')
<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Our Team</h2>
                <ol class="breadcrumb header-bradcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active"> /Our Team</li>
                </ol>
            </div>
        </div>
    </div>
</section>


<!--
Start About Section
==================================== -->
<section class="about" id="about">
    <div class="container">
        <div class="row">

            <!-- section title -->

            <!-- /section title -->

            <div class="col-md-6">
                <img src="{{ asset('assets/images/about-us.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-6">
                <p>We believe a Team is a family where everyone has their own responsibility and the
                    commitment to our clients. Apptriangle team is always there for our valuable clients
                    and also we are maintaining a standard where we help each other to grow so that,
                    our clients can feel the same affection and work together for betterment of the
                    service.</p>

                <h4>Most Valuable Software & Solution We Prefer.</h4>
                <ul class="feature-list">
                    <li> <i class="tf-ion-android-checkmark-circle"></i> Microsoft Software & Licenses </li>
                    <li> <i class="tf-ion-android-checkmark-circle"></i> Microsoft Solution & Services</li>
                    <li> <i class="tf-ion-android-checkmark-circle"></i> SSL Certificates</li>
                    <li> <i class="tf-ion-android-checkmark-circle"></i> Trend Micro Software & Licenses </li>
                    <li> <i class="tf-ion-android-checkmark-circle"></i>Tools, Support & Service</li>

                </ul>
                <a href="service.html" class="btn btn-main mt-20">Learn More</a>
            </div>
        </div> 		<!-- End row -->
    </div>   	<!-- End container -->
</section>   <!-- End section -->



<!-- Start Our Team
    =========================================== -->
<section class="team" id="team">
    <div class="container">
        <div class="row">

            <!-- section title -->
            <div class="col-12">
                <div class="title text-center ">
                    <h2>Our Team</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quasi tempora obcaecati, quis
                        similique quos.</p>
                    <div class="border"></div>
                </div>
            </div>
            <!-- /section title -->

            <!-- team member -->
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="team-member text-center">
                    <div class="member-photo">
                        <!-- member photo -->
                        <img class="img-fluid" src="{{ asset('assets/images/team/male.png') }}" alt="Meghna">
                        <!-- /member photo -->

                        <!-- member social profile -->
                        <div class="mask">
                            <ul class="clearfix">
                                <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <!-- /member social profile -->
                    </div>

                    <!-- member name & designation -->
                    <div class="member-content">
                        <h3>ALI MORTUZA BILASH</h3>
                        <span>DIRECTOR</span>

                    </div>
                    <!-- /member name & designation -->

                </div>
            </div>
            <!-- end team member -->

            <!-- team member -->
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="team-member text-center">
                    <div class="member-photo">
                        <!-- member photo -->
                        <img class="img-fluid" src="{{ asset('assets/images/team/male.png')}}" alt="Meghna">
                        <!-- /member photo -->

                        <!-- member social profile -->
                        <div class="mask">
                            <ul class="clearfix">
                                <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <!-- /member social profile -->
                    </div>

                    <!-- member name & designation -->
                    <div class="member-content">
                        <h3>MD. MOSHIUR RAHMAN</h3>
                        <span>DIRECTOR</span>

                    </div>
                    <!-- /member name & designation -->
                </div>
            </div>
            <!-- end team member -->

            <!-- team member -->
            <div class="col-md-4 col-sm-6 mb-3 ">
                <div class="team-member text-center">
                    <div class="member-photo">
                        <!-- member photo -->
                        <img class="img-fluid" src="{{ asset('assets/images/team/male.png')}}" alt="rana" height="90%" >
                        <!-- /member photo -->

                        <!-- member social profile -->
                        <div class="mask">
                            <ul class="clearfix">
                                <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <!-- /member social profile -->
                    </div>

                    <!-- member name & designation -->
                    <div class="member-content">
                        <h3>RANA MUSTAFIZ
                        </h3>
                        <span>DIRECTOR</span>

                    </div>
                    <!-- /member name & designation -->

                </div>
            </div>
            <!-- end team member -->






            <!-- team member -->
            <div class="col-md-4 col-sm-6  mb-3">
                <div class="team-member text-center">
                    <div class="member-photo">
                        <!-- member photo -->
                        <img class="img-fluid" src="{{ asset('assets/images/team/woman.png')}}" alt="Meghna">
                        <!-- /member photo -->

                        <!-- member social profile -->
                        <div class="mask">
                            <ul class="clearfix">
                                <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <!-- /member social profile -->
                    </div>

                    <!-- member name & designation -->
                    <div class="member-content">
                        <h3>Himely Hafiz Pushpo</h3>
                        <span>Marketing Specialist</span>

                    </div>
                    <!-- /member name & designation -->

                </div>
            </div>
            <!-- end team member -->

            <!-- team member -->
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="team-member text-center">
                    <div class="member-photo">
                        <!-- member photo -->
                        <img class="img-fluid" src="{{ asset('assets/images/team/male-2.png')}}" alt="Meghna">
                        <!-- /member photo -->

                        <!-- member social profile -->
                        <div class="mask">
                            <ul class="clearfix">
                                <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <!-- /member social profile -->
                    </div>

                    <!-- member name & designation -->
                    <div class="member-content">
                        <h3>Muhit Al Faisal</h3>
                        <span>Sales Specialist</span>

                    </div>
                    <!-- /member name & designation -->
                </div>
            </div>
            <!-- end team member -->

            <!-- team member -->
            <div class="col-md-4 col-sm-6 mb-3 ">
                <div class="team-member text-center">
                    <div class="member-photo">
                        <!-- member photo -->
                        <img class="img-fluid" src="{{ asset('assets/images/team/male-2.png')}}" alt="rana" height="90%" >
                        <!-- /member photo -->

                        <!-- member social profile -->
                        <div class="mask">
                            <ul class="clearfix">
                                <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <!-- /member social profile -->
                    </div>

                    <!-- member name & designation -->
                    <div class="member-content">
                        <h3>Sadman Hossain Shakib
                        </h3>
                        <span>Sales Specialist
						</span>

                    </div>
                    <!-- /member name & designation -->

                </div>
            </div>
            <!-- end team member -->

            <!-- team member -->
            <div class="col-md-4 col-sm-6  my-3">
                <div class="team-member text-center">
                    <div class="member-photo">
                        <!-- member photo -->
                        <img class="img-fluid" src="{{ asset('assets/images/team/male-2.png')}}" alt="Meghna">
                        <!-- /member photo -->

                        <!-- member social profile -->
                        <div class="mask">
                            <ul class="clearfix">
                                <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <!-- /member social profile -->
                    </div>

                    <!-- member name & designation -->
                    <div class="member-content">
                        <h3>Minhaz Alam Bicon</h3>
                        <span>Technology Specialist</span>

                    </div>
                    <!-- /member name & designation -->

                </div>
            </div>
            <!-- end team member -->

            <!-- team member -->
            <div class="col-md-4 col-sm-6 my-3">
                <div class="team-member text-center">
                    <div class="member-photo">
                        <!-- member photo -->
                        <img class="img-fluid" src="{{ asset('assets/images/team/male-2.png') }}" alt="Meghna">
                        <!-- /member photo -->

                        <!-- member social profile -->
                        <div class="mask">
                            <ul class="clearfix">
                                <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <!-- /member social profile -->
                    </div>

                    <!-- member name & designation -->
                    <div class="member-content">
                        <h3>Towhid Ul Islam</h3>
                        <span>Technology Specialist</span>

                    </div>
                    <!-- /member name & designation -->
                </div>
            </div>
            <!-- end team member -->

            <!-- team member -->
            <div class="col-md-4 col-sm-6 my-3 ">
                <div class="team-member text-center">
                    <div class="member-photo">
                        <!-- member photo -->
                        <img class="img-fluid" src="{{ asset('assets/images/team/male-2.png')}}" alt="rana" height="90%" >
                        <!-- /member photo -->

                        <!-- member social profile -->
                        <div class="mask">
                            <ul class="clearfix">
                                <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-dribbble"></i></a></li>
                            </ul>
                        </div>
                        <!-- /member social profile -->
                    </div>

                    <!-- member name & designation -->
                    <div class="member-content">
                        <h3>Md. Rahul Hriday Akash
                        </h3>
                        <span>Sales Specialist
						</span>

                    </div>
                    <!-- /member name & designation -->

                </div>
            </div>
            <!-- end team member -->



        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- End section -->

@endsection
