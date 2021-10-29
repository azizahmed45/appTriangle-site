@extends('layout.app')
@section('content')
<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Career</h2>
                <ol class="breadcrumb header-bradcrumb">
                    <li><a href="{{ route('home') }}"> Home </a></li>
                    <li class="active"> / Career</li>
                </ol>
            </div>
        </div>
    </div>
</section>



<section class="posts section">
    <div class="container">
        <div class="row">
            <!-- /section title -->
            <!-- single blog post -->
            <article class="col-md-4 col-sm-6 col-xs-12 clearfix ">
                <div class="post-item">
                    <div class="media-wrapper">
                        <img src="{{ asset('assets/images/job.png') }}" alt="amazing caves coverimage" class="img-fluid">
                    </div>

                    <div class="content">
                        <h3><a href="{{ route('job-about') }}">Job Title</a></h3>
                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                            moon officia aute, non skateboard dolor brunch.</p>
                        <a class="btn btn-main" href="{{ route('job-about') }}">APPLY NOW</a>
                    </div>
                </div>
            </article>
            <!-- /single blog post -->

            <!-- single blog post -->
            <article class="col-md-4 col-sm-6 col-xs-12 clearfix ">
                <div class="post-item">
                    <div class="media-wrapper">
                        <img src="{{ asset('assets/images/job.png') }}" alt="amazing caves coverimage" class="img-fluid">
                    </div>

                    <div class="content">
                        <h3><a href="{{ route('job-about') }}">Job Title</a></h3>
                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                            moon officia aute, non skateboard dolor brunch.</p>
                        <a class="btn btn-main" href="{{ route('job-about') }}">APPLY NOW</a>
                    </div>
                </div>
            </article>
            <!-- /single blog post -->
            <!-- single blog post -->
            <article class="col-md-4 col-sm-6 col-xs-12 clearfix ">
                <div class="post-item">
                    <div class="media-wrapper">
                        <img src="{{ asset('assets/images/job.png') }}" alt="amazing caves coverimage" class="img-fluid">
                    </div>

                    <div class="content">
                        <h3><a href="{{ route('job-about') }}">Job Title</a></h3>
                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                            moon officia aute, non skateboard dolor brunch.</p>
                        <a class="btn btn-main" href="{{ route('job-about') }}">APPLY NOW</a>
                    </div>
                </div>
            </article>
            <!-- /single blog post -->
            <!-- single blog post -->
            <article class="col-md-4 col-sm-6 col-xs-12 clearfix ">
                <div class="post-item">
                    <div class="media-wrapper">
                        <img src="{{ asset('assets/images/job.png') }}" alt="amazing caves coverimage" class="img-fluid">
                    </div>

                    <div class="content">
                        <h3><a href="{{ route('job-about') }}">Job Title</a></h3>
                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                            moon officia aute, non skateboard dolor brunch.</p>
                        <a class="btn btn-main" href="{{ route('job-about') }}">APPLY NOW</a>
                    </div>
                </div>
            </article>
            <!-- /single blog post -->
            <!-- single blog post -->
            <article class="col-md-4 col-sm-6 col-xs-12 clearfix ">
                <div class="post-item">
                    <div class="media-wrapper">
                        <img src="{{ asset('assets/images/job.png') }}" alt="amazing caves coverimage" class="img-fluid">
                    </div>

                    <div class="content">
                        <h3><a href="{{ route('job-about') }}">Job Title</a></h3>
                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                            moon officia aute, non skateboard dolor brunch.</p>
                        <a class="btn btn-main" href="{{ route('job-about') }}">APPLY NOW</a>
                    </div>
                </div>
            </article>
            <!-- /single blog post -->
            <!-- single blog post -->
            <article class="col-md-4 col-sm-6 col-xs-12 clearfix ">
                <div class="post-item">
                    <div class="media-wrapper">
                        <img src="{{ asset('assets/images/job.png') }}" alt="amazing caves coverimage" class="img-fluid">
                    </div>

                    <div class="content">
                        <h3><a href="{{ route('job-about') }}">Job Title</a></h3>
                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                            moon officia aute, non skateboard dolor brunch.</p>
                        <a class="btn btn-main" href="{{ route('job-about') }}">APPLY NOW</a>
                    </div>
                </div>
            </article>
            <!-- /single blog post -->
        </div>
    </div>
</section>


@endsection
