@extends('layout.app')
@section('content')
    <section class="single-page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Contact Us</h2>
                    <ol class="breadcrumb header-bradcrumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active">/Contact Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!--Start Contact Us
       =========================================== -->
    <section class="contact-us" id="contact">
        <div class="container">
            <div class="row">



                <!-- Contact Details -->
                <div class="contact-details col-md-6 " >
                    <h3>Contact Details</h3>

                    <ul class="contact-short-info mt-5" >
                        <li  style="font-weight: 900;">
                            Bangladesh Office
                        </li>
                        <li>
                            <i class="tf-ion-ios-home"></i>
                            <span>House # 6, Road # 8, Nikunja-2, Dhaka 1229</span>
                        </li>
                        <li>
                            <i class="tf-ion-android-phone-portrait"></i>
                            <span>+88 01717 888388, +88 01712 152715</span>
                        </li>


                        <li>
                            <i class="tf-ion-android-mail"></i>
                            <span>Email: info@apptriangle.com</span>
                        </li>
                    </ul>

                    <ul class="contact-short-info my-3" >
                        <li>

                        <li style="font-weight:900;">
                            Australia Office
                        </li>
                        <i class="tf-ion-ios-navigate"></i>
                        <span>2-10 Mount Street, North Sydney, NSW, 2060, Australia</span>
                        </li>

                    </ul>
                    <!-- Footer Social Links -->
                    <div class="social-icon">
                        <ul>
                            <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="tf-ion-social-dribbble-outline"></i></a></li>
                            <li><a href="#"><i class="tf-ion-social-linkedin-outline"></i></a></li>
                        </ul>
                    </div>
                    <!--/. End Footer Social Links -->
                </div>
                <!-- / End Contact Details -->

                <!-- Contact Form -->
                <div class="contact-form col-md-6 " >
                    <form id="contact-form" method="post" role="form">
                        <div class="form-group">
                            <input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
                        </div>

                        <div class="form-group">
                            <input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Your Phone Number" class="form-control" name="phone" id="phone">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
                        </div>

                        <div class="form-group">
                            <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>
                        </div>

                        <div id="success" class="success">
                            Thank you. The Mailman is on His Way :)
                        </div>

                        <div id="error" class="error">
                            Sorry, don't know what happened. Try later :(
                        </div>
                        <div id="cf-submit">
                            <input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
                        </div>

                    </form>
                </div>
                <!-- ./End Contact Form -->

            </div> <!-- end row -->
        </div> <!-- end container -->
    </section> <!-- end section -->

@endsection
