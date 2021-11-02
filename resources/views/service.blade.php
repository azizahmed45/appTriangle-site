@extends('layout.app')
@section('content')

    <section class="single-page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Our Services</h2>
                    <ol class="breadcrumb header-bradcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">/Our Services</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>


    <!-- Start Services Section
        ==================================== -->



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





@endsection
