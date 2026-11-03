@extends('web.app')
@push('meta-tags')
<title>Reach Out for Academic Excellence | Professional PhD & Research Support</title>
    <meta name="description" content="description" content="Connect with expert academic mentors and research professionals to achieve excellence in your PhD, thesis, and research journey. Get trusted guidance, writing support, and publication assistance tailored to your academic goals.">
    <meta name="keywords" content="Reach Out for Academic Excellence | Professional PhD & Research Support">
    <meta name="robots" content="index,follow"/>
    <link rel="canonical" href="https://phdassistants.com/"/> 

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Reach Out for Academic Excellence | Professional PhD & Research Support">
    <meta name="twitter:description" content="description" content="Connect with expert academic mentors and research professionals to achieve excellence in your PhD, thesis, and research journey. Get trusted guidance, writing support, and publication assistance tailored to your academic goals.">
    <meta name="robots" content="index,follow,noarchive"/>
  
    <meta property="og:title" content="Reach Out for Academic Excellence | Professional PhD & Research Support"/>
    <meta property="og:description" content="description" content="Connect with expert academic mentors and research professionals to achieve excellence in your PhD, thesis, and research journey. Get trusted guidance, writing support, and publication assistance tailored to your academic goals. "> 
    <meta property="og:url" content="https://phdassistants.com/"/>
    <meta property="og:url" content="https://phdassistants.com/"/>
@endpush
@section('content')
<section class="hero-wrap2" style="background-image: url('{{ asset('images/service_bg.webp') }}');">    <div class="overlay"></div>
    <div class="container">
    <div class="row no-gutters slider-text align-items-center">
        <div class="col-12 text-center justify-center">
        <div class="text aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000" style="margin-top: 40vh;">
            <h1 class="mb-4">Contact Us</h1>
        </div>
        </div>
    </div>
    </div>
</section>

<section>
<div class="container pt-5">
    <div class="row">
        <div class="col-12 mt-4">
            <div class="text-center heading-section aos-init aos-animate" data-aos="fade-up">
                <h2>Reach Out for Academic Excellence</h2>
            </div>
            <p class="text-justify">Whether you're starting your PhD research or seeking expert academic guidance, we’re here to help at every step. Connect with our team to access personalised support tailored to your scholarly needs.</p>
        </div>  
    </div>
</div>
</section>

<section class="about-us py-5">
  <div class="container">
    <div class="row align-items-center">
    
      <div class="col-12">
        <div class="about-content">
          <h2 class="section-title mb-4">Connect with a Research Advisor</h2>
          <p class="text-justify text-muted mb-4">
            Our expert consultants are here to help you identify the right support for your PhD, MPhil, or master's-level journey, from proposal to publication.
          </p>
          <div class="text-center mt-4 mb-3">
            <a href="tel:9500020252" class="btn btn-primary btn-outline-primary px-5 fw-bold">Talk to a Research Expert</a>
          </div>            
        </div>
      </div>

    </div>
  </div>
</section>

<section id="page-form" class="py-5">
<div class="container">
    <div class="row">            
        <div class="col-lg-2"></div>
        <div class="col-lg-8 card p-0 overflow-hidden">   
        <div class="header-section">
            <i class="fas fa-graduation-cap academic-icon"></i>
            <h2>PhD Assistants</h2>
            <p>Whether you are refining your thesis or beginning a comprehensive dissertation, PhD Assistants is committed to providing expert, one-on-one academic support.</p>
            <p>Fill out the form to receive personalised guidance tailored to your research needs.</p>
        </div>                       
        <div class="p-5">
        <h4 class="subheading text-center mb-4">Complete This Quick Form</h4>
        <form action="{{ route('form.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                   @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>    
                    <strong>{{ $message }}</strong>
                </div>
                @endif

                @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>    
                    <strong>{{ $message }}</strong>
                </div>
                @endif
            <div class="mb-2">
                <label for="name" class="form-label">Full Name *</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" autocomplete="off" required>
            </div>

            <div class="mb-2">
                <label for="email" class="form-label">Email Address *</label>
                <input type="email" class="form-control" id="email" name="email" autocomplete="off" placeholder="Your Email" required>
            </div>

            <div class="row">
                <div class="col-md-5 mb-2">
                <label for="country" class="form-label">Country *</label>
            @include('web.country-code')
                <span id="country-err" class="error"></span>
                </div>

                <div class="col-md-7 mb-2">
                <label for="contact-phone" class="form-label">Contact Number *</label>
                <div class="d-flex gap-2 flex-md-nowrap">
                    <input type="text" name="country_code" id="country-code" class="form-control flex-shrink-0" style="max-width: 70px; margin-right: 10px;" value="+91" readonly>

                    <input type="text" name="contact-phone" id="phone" class="form-control" 
                        onkeypress="return isNumber(event);" autocomplete="off" 
                        placeholder="9876543210" required>
                </div>
                <span id="phoneErr" class="error"></span>
                </div>
            </div>

            <div class="row">
             <div class="mb-2">
              <label for="file" class="form-label">Upload Thesis Guidelines or Draft (Optional)</label>
                        <input type="file" class="form-control" id="file" name="file" autocomplete="off">     
                    </div>  
            <div class="mb-2">
                <label for="message" class="form-label">Message / Query</label>
                <textarea class="form-control" id="message" rows="4" name="message" autocomplete="off" placeholder="Describe your needs"></textarea>
            </div>               

 <input type="hidden" name="page" value="{{ request()->path() }}">
 <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary btn-outline-primary px-5 fw-bold">Submit</button>
            </div>
        </form>           
        </div>               
        </div>
        <div class="col-lg-2"></div>            
    </div>       
</div>
</section>
@endsection