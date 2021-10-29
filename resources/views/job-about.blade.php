@extends('layout.app')
@section('content')
<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Job Description</h2>
                <ol class="breadcrumb header-bradcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">/ Job Description</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- blog details part start -->
<section class="blog-details section">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <article class="post">
                    <div class="post-image">
                        <img class="img-fluid w-100" src="{{ asset('assets/images/job.png') }}" alt="post-image">
                    </div>
                    <!-- Post Content -->
                    <div class="post-content mt-3">
                        <h3>Job Title</h3>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#"> Admin</a>&nbsp;
                            </li>

                        </ul>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            Sed ut perspiciatis unde omnis natus error sit voluptatem accusantium dolore mque laudantium totam rem aperiam
                            eaque ipsa quae ab illo inventore veritatis et quasi archite beatae vitae dicta sunt explicabo. nemo enim ipsam
                            voluptatem quia voluptassit.aspernatur aut odit aut fugit.</p>
                        <p>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt neque poro quisquam est, qui dolorem
                            ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
                            labore et dolore magnam aliquam quaerat voluptatem</p>
                        <!-- blockquote -->
                        <blockquote data-aos="fade-left" data-aos-duration="1000">Excepteur sint occaecat cupidatat non proi dent, sunt in culpa qui officia deserunt mollit anim iest.laborum.
                            sed perspiciatis unde omnis iste natus error voluptatem accusantium dolore mque laudantium.</blockquote>
                        <p>Occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Seper spiciatis
                            unde omnis natus error sit voluptatem accusantium doloremque laudantium totam rem. aperiam eaque ipsa quae
                            ab illo inventore veritatis.</p>
                        <!-- post share -->


                        <h3>Apply Here</h3>
                        <!-- Comment Form -->
                        <form action="#" class="comment-form">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <input type="text" name="first-name" class="form-control" id="first-name" placeholder="First Name" required>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <input type="text" name="last-name" class="form-control" id="first-name" placeholder="Last Name" required>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <input type="email" name="mail" class="form-control" id="mail" placeholder="Email" required>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone" required>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <textarea class="form-control" name="msg" id="msg" rows="6" placeholder="Cover Letter (Be Concise)" required></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <span >Upload Your CV/Resume  </span>

                                    <input type="file" name="file" class="form-control mt-2" id="file"   required>
                                </div>
                            </div>
                            <button type="submit" value="send" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </article>
            </div>

        </div>
    </div>
</section>
<!-- blog details part end -->
@endsection
