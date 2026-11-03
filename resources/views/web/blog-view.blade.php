@extends('web.app')
@push('meta-tags')
<title>Expert Academic Support Blog – Research Insights & Scholar Guidance</title>
<meta name="description" content="{{ $blog->meta_description }}">
<meta name="keywords" content="phd topics, phd research topics, phd research scholar, phd work, writing research, phd guidance">
<meta name="robots" content="index,follow"/>
<link rel="canonical" href="https://phdassistants.com/about"/>

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $blog->meta_title }}">
<meta name="twitter:description" content="{{ $blog->meta_description }}">
<meta name="twitter:image" content="https://phdassistants.com/img/about.webp">

<meta property="og:title" content="{{ $blog->meta_title }}"/>
<meta property="og:description" content="{{ $blog->meta_description }}">
<meta property="og:url" content="https://phdassistants.com/about"/>
<meta property="og:image" content="https://phdassistants.com/img/about.webp"/>
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



<div class="container py-5">
  <div class="row">
<!-- Sidebar -->
    <div class="col-lg-4 mb-4">
  <div class="card shadow-sm border-0">
    <div class="card-header bg-primary text-white">
      <h6 class="mb-0">Table of Contents</h6>
    </div>
    <div class="card-body p-0">
      <ul class="list-group list-group-flush toc-list" id="cardContainer">
     
      </ul>
    </div>
  </div>
</div>

    <!-- Blog Content -->
    <div class="col-lg-8 mb-4">
  <div class="card shadow-sm border-0">
    
    <!-- Blog Thumbnail -->
    <img src="{{ asset($blog->thumbnail) }}" 
         alt="{{ $blog->title }}" 
         class="card-img-top"
         style="height: 380px; object-fit: cover; width:100%;" 
         loading="lazy">

    <div class="card-body">
      <!-- Author + Date -->
      <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="d-flex align-items-center" style="gap: 0.75rem;">
          <img src="{{ $blog->author_image ? asset($blog->author_image) : asset('assets/images/fav-icon/icon1.png') }}" 
               alt="Author" class="rounded-circle border" width="40" height="40">
          <span class="fw-semibold text-dark">
            <i class="fa fa-user text-info"></i> {{ $blog->author_name }}
          </span>
        </div>
        <div class="text-muted small d-flex align-items-center" style="gap: 0.5rem;">
          <i class="fa fa-clock"></i>
          <span>{{ \Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}</span>
        </div>
      </div>

      <!-- Blog Content -->
      <div class="blog-content ck-content" id="source">
        {!! $blog->content !!}
      </div>
    </div>
  </div>
</div>



@endsection

@stack('script')

<script>
document.addEventListener("DOMContentLoaded", function () {
  const source = document.getElementById('source');
  const tocList = document.getElementById('cardContainer');

  if (!source || !tocList) return;

  let headingIndex = 0;

  // Generate TOC from headings
  source.querySelectorAll("h1, h2").forEach(function (el) {
    const id = "heading-" + headingIndex++;
    el.setAttribute("id", id);

    const li = document.createElement("li");
    li.className = "list-group-item";

    const a = document.createElement("a");
    a.href = "#" + id;
    a.textContent = el.textContent.trim();

    // Differentiate levels (indentation)
    if (el.tagName === "H1") a.classList.add("fw-bold");
    if (el.tagName === "H2") a.classList.add("ms-2");
    if (el.tagName === "H3") a.classList.add("ms-4");
    if (el.tagName === "H4") a.classList.add("ms-5");
    if (el.tagName === "H5") a.classList.add("ms-5");
    if (el.tagName === "H6") a.classList.add("ms-5");

    a.classList.add("d-block", "text-decoration-none", "text-dark");

    li.appendChild(a);
    tocList.appendChild(li);
  });

  // If no headings found
  if (!tocList.children.length) {
    tocList.innerHTML = '<li class="list-group-item text-muted">No sections available</li>';
  }

  // Smooth scroll with scrollIntoView (respects scroll-margin-top)
  document.querySelectorAll('.toc-list a').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        target.scrollIntoView({ behavior: "smooth" });
      }
    });
  });

  // Highlight active heading while scrolling
  const tocLinks = document.querySelectorAll('.toc-list a');
  const headings = document.querySelectorAll('#source h1, #source h2, #source h3, #source h4, #source h5, #source h6');

  window.addEventListener('scroll', () => {
    let current = "";
    headings.forEach(h => {
      const rect = h.getBoundingClientRect();
      if (rect.top <= 120 && rect.bottom >120) {
        current = h.id;
      }
    });

    tocLinks.forEach(link => {
      link.classList.remove("active", "text-primary");
      if (link.getAttribute("href") === "#" + current) {
        link.classList.add("active", "text-primary");
      }
    });
  });
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const blogContent = document.querySelector('.blog-content'); // adjust selector as needed
    const images = blogContent.querySelectorAll('img');
    images.forEach(img => {
        img.classList.add('img-fluid');
    });
});
</script>

