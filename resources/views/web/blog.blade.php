@extends('web.app')

@push('meta-tags')
    <title>Expert Academic Support Blog – Research Insights & Scholar Guidance</title>
    <meta name="description" content="Discover insightful academic blogs crafted by subject-matter experts. Explore research tips, thesis guidance, and scholarly insights designed to support PhD and academic success.">
    <meta name="keywords" content="academic blog, PhD support, research guidance, thesis tips, scholar insights">
    <meta name="robots" content="index, follow"/>
    <link rel="canonical" href="https://phdassistants.com/"/> 

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Expert Academic Support Blog – Research Insights & Scholar Guidance">
    <meta name="twitter:description" content="Discover insightful academic blogs crafted by subject-matter experts. Explore research tips, thesis guidance, and scholarly insights designed to support PhD and academic success.">

    <!-- Open Graph -->
    <meta property="og:title" content="Expert Academic Support Blog – Research Insights & Scholar Guidance"/>
    <meta property="og:description" content="Discover insightful academic blogs crafted by subject-matter experts. Explore research tips, thesis guidance, and scholarly insights designed to support PhD and academic success."/> 
    <meta property="og:url" content="https://phdassistants.com/"/>
@endpush

@section('content')
<section class="hero-wrap2" style="background-image: url('{{ asset('images/service_bg.webp') }}');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center">
            <div class="col-12 text-center justify-center">
                <div class="text aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000" style="margin-top: 30vh;">
                    <h1 class="mb-4">Explore Our Expert Academic Support Blogs</h1>
                    <h2 class="mb-4">Insightful Academic Blogs Crafted for Scholars, By Subject-Matter Experts</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="all-blog">
    <div class="container">
        <h2 class="my-4 text-center">Recent Blogs</h2>

        <!-- Search bar -->
        <div class="d-flex justify-content-end px-3 px-md-5 mb-4">
            <div class="input-group" style="max-width: 300px; width: 100%;">
                <input type="text" id="search" class="form-control" placeholder="Search for a blog">&nbsp;
                <button class="btn" type="button" style="background-color:#22c8ba" onclick="filterBlogs()">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>

        <!-- Blog list -->
        <div class="row" id="blogContainer">
            @foreach ($blogs as $blog)
                <div class="col-md-4 mb-4 blog-card">
                    <div class="card h-100">
                        <img src="{{ asset($blog->thumbnail)}}" class="card-img-top imgage_card" alt="{{ $blog->title }}">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>                        
                                <h5 class="card-title">{{ $blog->title }}</h5>
                                <p class="card-text text-justify">
                                    {{ Str::limit($blog->description, 120) }}
                                </p>
                            </div>
                            <div>
                                <a href="{{ route('website-show-blog',['url' => $blog->url]) }}" class="btn btn-primary">
                                    Read More &rarr;
                                </a>
                            </div>
                             <div class="card-footer d-flex align-items-center mt-4">
            <img src="{{ $blog->author_image ? asset($blog->author_image) : asset('/assets/images/fav-icon/icon1.png') }}" 
                 alt="{{$blog->author_name}}" 
                 class="rounded-circle me-2"
                 style="width: 35px; height: 35px; object-fit: cover;">
            <small class="text-muted ml-2">{{$blog->author_name}}</small>
        </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
