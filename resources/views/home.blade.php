@extends('layout.app')
@section('content')
    <div class="hero-slider">
        <div class="slider-item th-fullpage hero-area" style="background-image: url({{ asset('assets/images/slider/slider-bg-2.jpg') }});">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">
                            Apptriangle
                            <br>
                        </h1>
                        <p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">Global Technology
                            Service Provider </p>
                        <a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn btn-main"
                           href="{{ route('about') }}">Explore Us</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item th-fullpage hero-area" style="background-image: url({{ asset('assets/images/slider/slider-bg-3.jpg') }});">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1"><img
                                src="{{ asset('assets/images/slider/microsoft.png') }}" width="50px"/> Microsoft</h1>
                        <p data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".5">Microsoft products
                            and solutions help your business scale your technology on-premises, cloud, or Hybrid</p>
                        <a data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".8" class="btn btn-main"
                           href="{{ route('microsoft') }}">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item th-fullpage hero-area" style="background-image: url({{ asset('assets/images/slider/slider-bg-3.jpg') }});">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1"> Trend Micro <img
                                src="{{ asset('assets/images/slider/trend-micro.png') }}" width="60px"/></h1>
                        <p data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".5">Trend Micro is the
                            global leader in enterprise data security and cybersecurity
                            solutions for <br/> businesses, data centers, cloud environments, networks and more</p>
                        <a data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".8" class="btn btn-main"
                           href="{{ route('trend-micro') }}">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item th-fullpage hero-area" style="background-image: url({{ asset('assets/images/slider/slider-bg-3.jpg') }});">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1"> ManageEngine <img
                                src="{{ asset('assets/images/slider/manage.png') }}" width="50px"/></h1>
                        <p data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".5">ManageEngine is the
                            leading provider of cost-effective enterprise IT management softwares which are easy to
                            <br> install, setup and use, and offer extensive support, consultation and trainingRead More
                        </p>
                        <a data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".8" class="btn btn-main"
                           href="{{ route('manage-engines') }}">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item th-fullpage hero-area" style="background-image: url({{ asset('assets/images/slider/slider-bg-3.jpg') }});">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1"> Kaspersky <img
                                src="{{ asset('assets/images/slider/kaspersky-1.png') }}" width="80px"/></h1>
                        <p data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".5">Kaspersky is a global
                            cybersecurity company which has leading endpoint protection and a number of specialized
                            security
                            <br> solutions and services to fight sophisticated and evolving digital threats.</p>
                        <a data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".8" class="btn btn-main"
                           href="{{ route('kaspersky') }}">Read More </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--
    Start EXPERTISE Section
    ==================================== -->
    <section class="service-1 section">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <!-- section title -->
                    <div class="title1 text-center">
                        <h2>OUR EXPERTISE</h2>
                        <p>We understand it is not always the technical challenges a company encounters when getting
                            support from an overseas or a local provider, but a cultural one too. Our engineers are
                            trained by professional trainers to adopt international work ethics.
                            With this knowledge, our certified and experienced engineers are here to help your business
                            transform into a highly secured, sustainable, scalable yet easily manageable
                            environment. </p>
                        <div class="border"></div>
                    </div>
                    <!-- /section title -->
                </div>


            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->

    <!--
    Start EXPERTISE Section
    ==================================== -->

    <!--
    Start About Section
    ==================================== -->
    <section class="service-2 ">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <!-- section title -->
                    <div class="title text-center">
                        <h2>What Do We Offer</h2>
                        <p>End to end solutions and services with support. Consultancy on
                            on-prem, cloud and hybrid environment from the team of
                            subject matter experts </p>
                        <div class="border"></div>
                    </div>
                    <!-- /section title -->
                </div>

                <div class="col-md-4 text-center">
                    <img src="{{ asset('assets/images/about/member.jpg') }}" class="inline-block" alt=""
                         style="width: 90%;height: 90%; padding: 20px;">
                </div>
                <div class="col-md-8">
                    <div class="row text-center">
                        <div class="col-md-6 col-sm-6 col-xs-12 ">
                            <div class="service-item card1 p-3">
                                <i class="tf-ion-ios-alarm-outline"></i>
                                <h4>Software & Licenses</h4>
                                <ul class="text-left ml-2">
                                    <li><strong class="mr-3">-</strong> Infrastructure</li>
                                    <li><strong class="mr-3">-</strong> Cloud</li>
                                    <li><strong class="mr-3">-</strong> Hybrid</li>
                                    <li><strong class="mr-3">-</strong> Endpoint Protection</li>
                                    <li><strong class="mr-3">-</strong> Server Protection</li>
                                </ul>
                            </div>
                        </div><!-- END COL -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="service-item card2 p-3">
                                <i class="tf-ion-ios-briefcase-outline"></i>
                                <h4>Solution & Services</h4>
                                <ul class="text-left ml-2">
                                    <li><strong class="mr-3">-</strong> On-Premise Solutions</li>
                                    <li><strong class="mr-3">-</strong> Cloud Migration</li>
                                    <li><strong class="mr-3">-</strong> Hybrid</li>
                                    <li><strong class="mr-3">-</strong> Manage Infrastructure</li>
                                    <li><strong class="mr-3">-</strong> Endpoint and Server Protection</li>

                                </ul>
                            </div>
                        </div><!-- END COL -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="service-item card2">
                                <i class="tf-ion-ios-email-outline"></i>
                                <h4>Support & Services</h4>
                                <ul class="text-left ml-2">
                                    <li><strong class="mr-3">-</strong>24/7 Support</li>
                                    <li><strong class="mr-3">-</strong> On-demand Support</li>
                                    <li><strong class="mr-3">-</strong> Managed Service</li>
                                    <li><strong class="mr-3">-</strong> Service Level Agreement</li>
                                    <li><strong class="mr-3"> </strong></li>


                                </ul>
                            </div>
                        </div><!-- END COL -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="service-item card1">
                                <i class="tf-ion-ios-locked-outline"></i>
                                <h4>Secure System</h4>
                                <ul class="text-left ml-2">
                                    <li><strong class="mr-3">-</strong>SSL Certificates</li>
                                    <li><strong class="mr-3">-</strong> ERP Software</li>
                                    <li><strong class="mr-3">-</strong> Hospital Management Software</li>
                                    <li><strong class="mr-3">-</strong>Lead Life Cycle Management</li>
                                    <li><strong class="mr-3">-</strong>Mobile Apps Development</li>


                                </ul>
                            </div>
                        </div><!-- END COL -->
                    </div>
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->


    <section class="services" id="services">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-12">
                    <div class="title text-center">
                        <h2>Our Services</h2>
                        <p>Vestibulum nisl tortor, consectetur quis imperdiet bibendum, laoreet sed arcu. Sed
                            condimentum iaculis ex,
                            in faucibus lorem accumsan non. Donec mattis tincidunt metus. Morbi sed tortor a risus
                            luctus dignissim.</p>
                        <div class="border"></div>
                    </div>
                </div>
                <!-- /section title -->

                <!-- Single Service Item -->
                <div class="col-lg-4 col-sm-6 mb-4 ">
                    <div class="service-block p-4   text-center card shadow-sm">
                        <div class="card-body">
                            <div class="service-icon text-center ">
                                <img src="{{ asset('assets/images/slider/microsoft.png') }}" width="40px"/>
                                <h5 class="pt-2">Software & Licenses</h5>
                            </div>

                            <ul class="text-left">
                                <li><strong class="mr-3">-</strong> Microsoft Azure</li>
                                <li><strong class="mr-3">-</strong> Microsoft 365
                                </li>
                                <li><strong class="mr-3">-</strong> Windows 10</li>


                                <li><strong class="mr-3">-</strong> Microsoft Office</li>
                                <li><strong class="mr-3"> </strong></li>
                                <li><strong class="mr-3"> </strong></li>


                            </ul>

                            <a class="btn btn-sm btn btn-outline-dark readmore" href="{{ route('microsoft') }}">Read More</a>
                        </div>


                    </div>

                </div>
                <!-- End Single Service Item -->

                <!-- Single Service Item -->
                <div class="col-lg-4 col-sm-6 mb-4 ">
                    <div class="service-block p-4   text-center card shadow-sm">
                        <div class="card-body">
                            <div class="service-icon text-center ">
                                <img src="{{ asset('assets/images/slider/microsoft.png') }}" width="40px"/>
                                <h5 class="pt-2">Solution & Services</h5>
                            </div>

                            <ul class="text-left">
                                <li><strong class="mr-3">-</strong> Application on Azure</li>
                                <li><strong class="mr-3">-</strong> Active Directory</li>
                                <li><strong class="mr-3">-</strong> Microsoft Exchange Server</li>


                                <li><strong class="mr-3">-</strong> M365 Hybrid</li>
                                <li><strong class="mr-3">-</strong> Mobile Device Management</li>
                                <li><strong class="mr-3">-</strong> System Center Suite</li>

                            </ul>

                            <a class="btn btn-sm btn btn-outline-dark readmore" href="{{ route('microsoft') }}">Read More</a>
                        </div>


                    </div>

                </div>
                <!-- End Single Service Item -->

                <!-- Single Service Item -->
                <div class="col-lg-4 col-sm-6 mb-4 ">
                    <div class="service-block p-4    text-center card shadow-sm">
                        <div class="card-body">
                            <div class="service-icon text-center ">
                                <img src="{{ asset('assets/images/slider/certificates.png') }}" width="50px"/>
                                <h5 class="pt-2">SSL Certificates</h5>
                            </div>

                            <ul class="text-left ml-2">
                                <li><strong class="mr-3">-</strong> DigiCert</li>
                                <li><strong class="mr-3">-</strong>Sectigo</li>
                                <li><strong class="mr-3">-</strong> Comodo</li>
                                <li><strong class="mr-3">-</strong> GeoTrust</li>
                                <li><strong class="mr-3">-</strong> RapidSSL</li>
                                <li><strong class="mr-3"> </strong></li>


                            </ul>

                            <a class="btn btn-sm btn btn-outline-dark readmore" href="{{ route('ssl') }}">Read More</a>
                        </div>


                    </div>

                </div>
                <!-- End Single Service Item -->

                <!-- Single Service Item -->
                <div class="col-lg-4 col-sm-6 mb-4 ">
                    <div class="service-block p-4    text-center card shadow-sm">
                        <div class="card-body">
                            <div class="service-icon text-center ">
                                <img src="{{ asset('assets/images/slider/trend-micro.jpg') }}" width="100px"/>
                                <h5 class="pt-2">Software & Solutions</h5>
                            </div>

                            <ul class="text-left ml-2">
                                <li><strong class="mr-3">-</strong> Endpoint Security</li>
                                <li><strong class="mr-3">-</strong> Server Security
                                </li>
                                <li><strong class="mr-3">-</strong> Apex One</li>


                                <li><strong class="mr-3">-</strong> Worry Free</li>
                                <li><strong class="mr-3">-</strong> EDR</li>


                            </ul>

                            <a class="btn btn-sm btn btn-outline-dark readmore" href="{{ route('trend-micro') }}">Read More</a>
                        </div>


                    </div>

                </div>
                <!-- End Single Service Item -->


                <!-- Single Service Item -->
                <div class="col-lg-4 col-sm-6 mb-4 ">
                    <div class="service-block   text-center card shadow-sm">
                        <div class="card-body">
                            <div class="service-icon text-center ">
                                <img src="{{ asset('assets/images/client-logo/logo-4.png') }}" width="150px"/>
                                <h5> Software & Solutions</h5>
                            </div>

                            <ul class="text-left ml-2">
                                <li><strong class="mr-3">-</strong> Endpoint Security</li>
                                <li class="ml-5"><strong class="mr-3">-</strong> Select</li>
                                <li class="ml-5"><strong class="mr-3">-</strong> Total</li>
                                <li class="ml-5"><strong class="mr-3">-</strong> Advanced</li>
                                <li><strong class="mr-3">-</strong> Cloud Security Service</li>

                            </ul>

                            <a class="btn btn-sm btn btn-outline-dark readmore" href="{{ route('kaspersky') }}">Read More</a>
                        </div>


                    </div>

                </div>
                <!-- End Single Service Item -->


                <!-- Single Service Item -->
                <div class="col-lg-4 col-sm-6 mb-4 ">
                    <div class="service-block p-4    text-center card shadow-sm">
                        <div class="card-body">
                            <div class="service-icon text-center ">
                                <img src="{{ asset('assets/images/slider/support&s.png') }}" width="70px"/>
                                <h5 class="pt-2">Tools, Support & Service</h5>
                            </div>

                            <ul class="text-left ml-2">
                                <li><strong class="mr-3">-</strong> AD Manager Plus</li>
                                <li><strong class="mr-3">-</strong> AD Audit Plus</li>
                                <li><strong class="mr-3">-</strong> AD Self Service Plus</li>
                                <li><strong class="mr-3">-</strong> Exchange reporting tools</li>
                                <li><strong class="mr-3">-</strong> Management Tools</li>


                            </ul>

                            <a class="btn btn-sm btn btn-outline-dark readmore" href="{{ route('support-service') }}">Read
                                More</a>
                        </div>


                    </div>

                </div>
                <!-- End Single Service Item -->


            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->



    <!--
    Start About Section
    ==================================== -->
    <section class="service-2  ">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <!-- section title -->
                    <div class="title text-center">
                        <h2>Our Partners</h2>
                        <p>We are in partnership with world’s leading technology
                            companies to provide the standard services</p>
                        <div class="border"></div>
                    </div>
                    <!-- /section title -->
                </div>


                <div class="col-md-12">
                    <div class="row text-center">
                        <div class="col-md-4 col-sm-4 col-xs-6 ">
                            <img class="hoverImg" src="{{ asset('assets/images/client-logo/logo1.png') }}" alt="" width="150px">
                        </div><!-- END COL -->
                        <div class="col-md-4 col-sm-4 col-xs-6 ">
                            <img class="hoverImg" src="{{ asset('assets/images/client-logo/logo-7.png') }}" alt="" width="150px">

                        </div><!-- END COL -->
                        <div class="col-md-4 col-sm-4 col-xs-6 ">
                            <img class="hoverImg" src="{{ asset('assets/images/client-logo/logo-6.png') }}" alt="" width="150px">
                        </div><!-- END COL -->
                        <div class="col-md-4 col-sm-4 col-xs-6 ">
                            <img class="hoverImg" src="{{ asset('assets/images/client-logo/logo-4.png') }}" alt="" width="150px">
                        </div><!-- END COL -->
                        <div class="col-md-4 col-sm-4 col-xs-6 ">
                            <img class="hoverImg" src="{{ asset('assets/images/slider/trend-micro.jpg') }}" alt="" width="150px">
                        </div><!-- END COL -->
                        <div class="col-md-4 col-sm-4 col-xs-6 ">
                            <img class="hoverImg" src="{{ asset('assets/images/client-logo/logo-3.png') }}" alt="" width="150px">
                        </div><!-- END COL -->


                        <div class="col-md-4 col-sm-4 col-xs-6 ">
                            <img class="hoverImg" src="{{ asset('assets/images/client-logo/logo-9.jpg') }}" alt="" width="150px">

                        </div><!-- END COL -->

                        <div class="col-md-4 col-sm-4 col-xs-6 ">
                            <img class="hoverImg mt-3" src="{{ asset('assets/images/client-logo/logo-8.png') }}" alt="" width="150px">

                        </div><!-- END COL -->

                    </div>
                </div>
            </div> <!-- End row -->

        </div> <!-- End container -->

    </section> <!-- End section -->








    <!-- Start Testimonial
    =========================================== -->

    <section class="testimonial section" id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- testimonial wrapper -->
                    <div class="testimonial-slider">
                        <!-- testimonial single -->
                        <div class="item text-center">
                            <i class="tf-ion-chatbubbles"></i>
                            <!-- client info -->
                            <div class="client-details">
                                <p>Apptriangle team has been our consultant for various technology. We have migrated our
                                    ERP and website to Microsoft Azure cloud with their help. The journey of
                                    migration to cloud was a great experience because of the support from Apptriangle
                                    team. Now we are also planning to move more application to cloud platform as we feel
                                    confident about cloud migration because of the support, training and consultancy of
                                    Apptriangle team.
                                    They have also provided us with Microsoft 365 licenses and services. Our ERP
                                    performance issue was taken care by Apptriangle team.

                                </p>
                            </div>
                            <!-- /client info -->
                            <!-- client photo -->
                            <div class="client-thumb">
                                <img src="{{ asset('assets/images/client-logo/clients-1.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="client-meta">
                                <h3>Rashed Bin Aman</h3>
                                <span>CEO, Sonali Life Insurance Company Limited</span>
                            </div>
                            <!-- /client photo -->
                        </div>
                        <!-- /testimonial single -->

                        <!-- testimonial single -->
                        <div class="item text-center">
                            <i class="tf-ion-chatbubbles"></i>
                            <!-- client info -->
                            <div class="client-details">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum.
                                    Eos earum, magni asperiores, unde corporis labore, enim, voluptatum officiis
                                    voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod,
                                    quia?</p>
                            </div>
                            <!-- /client info -->
                            <!-- client photo -->
                            <div class="client-thumb">
                                <img src="{{ asset('assets/images/client-logo/clients-1.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="client-meta">
                                <h3>Emma Harrison</h3>
                                <span>CEO , Company Name</span>
                            </div>
                            <!-- /client photo -->
                        </div>
                        <!-- /testimonial single -->

                        <!-- testimonial single -->
                        <div class="item text-center">
                            <i class="tf-ion-chatbubbles"></i>
                            <!-- client info -->
                            <div class="client-details">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum.
                                    Eos earum, magni asperiores, unde corporis labore, enim, voluptatum officiis
                                    voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod,
                                    quia?</p>
                            </div>
                            <!-- /client info -->
                            <!-- client photo -->
                            <div class="client-thumb">
                                <img src="{{ asset('assets/images/client-logo/clients-1.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="client-meta">
                                <h3>Alexander Lucas</h3>
                                <span>CEO , Company Name</span>
                            </div>
                            <!-- /client photo -->
                        </div>
                        <!-- /testimonial single -->
                    </div>
                </div>        <!-- end col lg 12 -->
            </div>        <!-- End row -->
        </div>       <!-- End container -->
    </section>    <!-- End Section -->

    <!--
            Start Blog Section
            =========================================== -->

    <!--start Gallery-->
    <section class="section grallery">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="title text-center">
                        <h2>Apptriangle Gallery</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore numquam esse vitae
                            recusandae qui aspernatur, blanditiis, laboriosam dignissimos dolore facere provident ex?
                            Porro, praesentium consectetur tempore. Nulla, error eius dolorem.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="company-gallery">
                        <img src="{{ asset('assets/images/company/gallery-1.jpg') }}" alt="">
                        <img src="{{ asset('assets/images/company/gallery-2.jpg') }}" alt="">
                        <img src="{{ asset('assets/images/company/gallery-3.jpg') }}" alt="">
                        <img src="{{ asset('assets/images/company/gallery-4.jpg') }}" alt="">
                        <img src="{{ asset('assets/images/company/gallery-5.jpg') }}" alt="">
                        <img src="{{ asset('assets/images/company/gallery-5.jpg') }}" alt="">
                        <img src="{{ asset('assets/images/company/gallery-1.jpg') }}" alt="">
                        <img src="{{ asset('assets/images/company/gallery-2.jpg') }}" alt="">
                        <img src="{{ asset('assets/images/company/gallery-3.jpg') }}" alt="">
                        <img src="{{ asset('assets/images/company/gallery-4.jpg') }}" alt="">
                        <img src="{{ asset('assets/images/company/gallery-5.jpg') }}" alt="">
                        <img src="{{ asset('assets/images/company/gallery-5.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
