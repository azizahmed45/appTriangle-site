@extends('layout.app')
@section('content')


    <section class="single-page-about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>About Us</h2>
                    <ol class="breadcrumb header-bradcrumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active"> /About Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>


    <section class="about-shot-info section-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-20">
                    <h2>Your Tech Challenge<br> Our Responsibility</h2>
                    <p>Apptriangle is a technology service provider in Australia and Bangladesh helping businesses around the world with technical solutions and digital transformation. </p>
                    <p>Our services include Cloud, On-prem, Security, Software Development and Training, and  for last few years we’ve been providing these services to many countries including <strong style="color: black;">Australia, Canada, France, Poland, Spain, Romania, Germany and other European countries.</strong></p>
                    <p>We are here to gain your trust and build a reputation by delivering what we believe. Our strength is our excellent customer support as we believe trust comes from support, not from sales or marketing campaign. We consider ourselves as your partner as we are here to build a long-term relationship with our clients. </p>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="{{ asset('assets/images/company/company-image.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </section>



    <section class="company-mission section-sm bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Our Mission</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere in suscipit voluptatum totam dolores assumenda vel, quia earum voluptatem blanditiis vero accusantium saepe aliquid nulla nemo accusamus, culpa inventore! Culpa nemo aspernatur tenetur, at quam aliquid reprehenderit obcaecati dicta illum mollitia, perferendis hic, beatae voluptates? Ex labore, obcaecati harum nam.</p>
                    <img src="{{ asset('assets/images/company/company-image-2.jpg')}}" alt="" class="img-fluid mt-30">
                </div>
                <div class="col-md-6">
                    <h3>Our Vision</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere in suscipit voluptatum totam dolores assumenda vel, quia earum voluptatem blanditiis vero accusantium saepe aliquid nulla nemo accusamus, culpa inventore! Culpa nemo aspernatur tenetur, at quam aliquid reprehenderit obcaecati dicta illum mollitia, perferendis hic, beatae voluptates? Ex labore, obcaecati harum nam.</p>
                    <img src="{{ asset('assets/images/company/company-image-3.jpg')}}" alt="" class="img-fluid mt-30">
                </div>
            </div>
        </div>
    </section>






    <!--
    Start Call To Action
    ==================================== -->
    <section class="call-to-action section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Let's Create Something Together</h2>
                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin bibendum auctor, <br> nisi elit consequat ipsum, nesagittis sem nid elit. Duis sed odio sitain elit.</p>
                    <a href="{{ route('contact') }}" class="btn btn-main">Contact Us</a>
                </div>
            </div> 		<!-- End row -->
        </div>   	<!-- End container -->
    </section>   <!-- End section -->



    <section class="section grallery">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="title text-center">
                        <h2>Apptriangle  Gallery</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore numquam esse vitae recusandae qui aspernatur, blanditiis, laboriosam dignissimos dolore facere provident ex? Porro, praesentium consectetur tempore. Nulla, error eius dolorem.</p>
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
