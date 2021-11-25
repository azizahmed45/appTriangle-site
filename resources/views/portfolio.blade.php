@extends('layout.app')
@section('content')
<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Portfolio</h2>
                <ol class="breadcrumb header-bradcrumb">
                    <li><a href="{{ route('home') }}"> Home </a></li>
                    <li class="active"> / Portfolio</li>
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
                        <img src="{{ asset('assets/images/blog/post-1.jpg') }}" alt="amazing caves coverimage" class="img-fluid">
                    </div>

                    <div class="content">
                        <h3><a href="{{ route('single-post') }}">Reasons to Smile</a></h3>
                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                            moon officia aute, non skateboard dolor brunch.</p>
                        <a class="btn btn-main" href="{{ route('single-post') }}">Read more</a>
                    </div>
                </div>
            </article>
            <!-- /single blog post -->

            <!-- single blog post -->
            <article class="col-md-4 col-sm-6 col-xs-12 ">
                <div class="post-item">
                    <div class="media-wrapper">
                        <img src="{{ asset('assets/images/blog/post-1.jpg') }}" alt="amazing caves coverimage" class="img-fluid">
                    </div>

                    <div class="content">
                        <h3><a href="{{ route('single-post') }}">A Few Moments</a></h3>
                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                            moon officia aute, non skateboard dolor brunch.</p>
                        <a class="btn btn-main" href="{{ route('single-post') }}">Read more</a>
                    </div>
                </div>
            </article>
            <!-- end single blog post -->

            <!-- single blog post -->
            <article class="col-md-4 col-sm-6 col-xs-12 ">
                <div class="post-item">
                    <div class="media-wrapper">
                        <img src="{{ asset('assets/images/blog/post-1.jpg') }}" alt="amazing caves coverimage" class="img-fluid">
                    </div>

                    <div class="content">
                        <h3><a href="{{ route('single-post') }}">Hints for Life</a></h3>
                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                            moon officia aute, non skateboard dolor brunch.</p>
                        <a class="btn btn-main" href="{{ route('single-post') }}">Read more</a>
                    </div>
                </div>
            </article>
            <!-- /section title -->
            <!-- single blog post -->
            <article class="col-md-4 col-sm-6 col-xs-12 clearfix ">
                <div class="post-item">
                    <div class="media-wrapper">
                        <img src="{{ asset('assets/images/blog/post-4.jpg') }}" alt="amazing caves coverimage" class="img-fluid">
                    </div>

                    <div class="content">
                        <h3><a href="{{ route('single-post') }}">Looking Back</a></h3>
                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                            moon officia aute, non skateboard dolor brunch.</p>
                        <a class="btn btn-main" href="{{ route('single-post') }}">Read more</a>
                    </div>
                </div>
            </article>
            <!-- /single blog post -->

            <!-- single blog post -->
            <article class="col-md-4 col-sm-6 col-xs-12 ">
                <div class="post-item">
                    <div class="media-wrapper">
                        <img src="{{ asset('assets/images/blog/post-5.jpg') }}" alt="amazing caves coverimage" class="img-fluid">
                    </div>

                    <div class="content">
                        <h3><a href="{{ route('single-post') }}">Laugh and Cry</a></h3>
                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                            moon officia aute, non skateboard dolor brunch.</p>
                        <a class="btn btn-main" href="{{ route('single-post') }}">Read more</a>
                    </div>
                </div>
            </article>
            <!-- end single blog post -->

            <!-- single blog post -->
            <article class="col-md-4 col-sm-6 col-xs-12 ">
                <div class="post-item">
                    <div class="media-wrapper">
                        <img src="{{ asset('assets/images/blog/post-6.jpg') }}" alt="amazing caves coverimage" class="img-fluid">
                    </div>

                    <div class="content">
                        <h3><a href="{{ route('single-post') }}">Regret No More</a></h3>
                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                            moon officia aute, non skateboard dolor brunch.</p>
                        <a class="btn btn-main" href="{{ route('single-post') }}">Read more</a>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>

@endsection
