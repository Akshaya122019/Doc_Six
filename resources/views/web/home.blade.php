@extends('web.app')
@push('meta-tags')
  <title>360° PhD Assistance Services in India</title>
  <meta name="description" content="Docsix 360° PhD assistance services for both local and international scholars with research guidance, writing support, and publication assistance.">
  <meta name="keywords" content="360° PhD Assistance Services | PhD Assistants">
  <meta name="robots" content="index,follow" />
  <link rel="canonical" href="https://phdassistants.com/" />

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="360° PhD Assistance Services | PhD Assistants">
  <meta name="twitter:description" content="Docsix 360° PhD assistance services for both local and international scholars with research guidance, writing support, and publication assistance.">
  <meta name="robots" content="index,follow,noarchive" />

  <meta property="og:title" content="360° PhD Assistance Services | PhD Assistants" />
  <meta property="og:description" content="Docsix 360° PhD assistance services for both local and international scholars with research guidance, writing support, and publication assistance." />
  <meta property="og:url" content="https://phdassistants.com/" />
@endpush
@section('content')
  <section class="hero-wrap" style="background-image: url('{{ asset('images/doc_six_header1.png') }}');">

    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center">
        <div class="col-lg-6">
          <div class="text mt-5 pt-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
            <span class="subheading">Welcome to PhD Assistants</span>
            <h1 class="mb-4">PhD Guidance Built Around Your Research </h1>
            <h3 class="mb-2">Professional Direction for Every Doctoral Stage</h3>
            <p class="text-dark">
              Docsix focused PhD guidance and assistance across research planning, methodology, academic writing and thesis development, tailored to your research topic, objectives and academic requirements.
            </p>
            <p><a href="tel:9500020252" class="btn btn-primary p-3 py-3">Discuss Your Research <span class="ion-ios-arrow-round-forward"></span></a> </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section home-content-section py-5">
    <div class="container-xl">

      <!-- ================= WHY CHOOSE US ================= -->
      <div class="row justify-content-center mb-5">
        <div class="col-lg-8 text-center heading-section aos-init aos-animate" data-aos="fade-up">
          <span class="subheading subheading-pill d-inline-block px-3 py-1 rounded-pill mb-2">
            Why Choose Us
          </span>
          <h2 class="fw-bold text-dark home-section-title mb-3">Why Researchers Choose Docsix</h2>
          <div class="stats-underline mb-0"></div>
        </div>
      </div>

      <div class="row g-4 mb-5 pb-3">
        <!-- Client Satisfaction -->
        <div class="col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
          <div class="p-4 bg-white rounded-4 shadow-sm h-100 border border-light-subtle d-flex flex-column why-us-card">
            <div class="d-inline-flex align-items-center justify-content-center rounded-3 why-us-icon-box mb-3">
              <i class="fa-solid fa-face-smile"></i>
            </div>
            <h4 class="fw-bold text-dark why-us-title mb-2">Client Satisfaction</h4>
            <p class="text-secondary why-us-desc mb-0">
              We prioritise client satisfaction by delivering reliable academic support that meets each researcher’s requirements and expectations.
            </p>
          </div>
        </div>

        <!-- 24/7 Support -->
        <div class="col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
          <div class="p-4 bg-white rounded-4 shadow-sm h-100 border border-light-subtle d-flex flex-column why-us-card">
            <div class="d-inline-flex align-items-center justify-content-center rounded-3 why-us-icon-box mb-3">
              <i class="fa-solid fa-headset"></i>
            </div>
            <h4 class="fw-bold text-dark why-us-title mb-2">24/7 Support</h4>
            <p class="text-secondary why-us-desc mb-0">
              Researchers can access assistance when they need it, with support available around the clock for ongoing academic requirements.
            </p>
          </div>
        </div>

        <!-- Quality Assistance -->
        <div class="col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
          <div class="p-4 bg-white rounded-4 shadow-sm h-100 border border-light-subtle d-flex flex-column why-us-card">
            <div class="d-inline-flex align-items-center justify-content-center rounded-3 why-us-icon-box mb-3">
              <i class="fa-solid fa-award"></i>
            </div>
            <h4 class="fw-bold text-dark why-us-title mb-2">Quality Assistance</h4>
            <p class="text-secondary why-us-desc mb-0">
              Our support focuses on accuracy, academic standards and consistent quality across research and writing requirements.
            </p>
          </div>
        </div>
      </div>

      <!-- ================= BUILD A CLEAR RESEARCH DIRECTION ================= -->
      <div class="row align-items-center my-5 py-4 g-4 g-lg-5">
        <div class="col-lg-6 aos-init aos-animate" data-aos="fade-right">
          <div class="pe-lg-3">
            <h3 class="fw-bold text-dark direction-title mb-3">Build a Clear Research Direction</h3>
            <p class="text-secondary direction-desc mb-4">
              Our Docsix provide focused support when researchers need to assess their research direction, strengthen connections between different parts of the study, address academic challenges and make informed decisions about the next stage of their work. PhD help is tailored to the researcher’s subject, existing research and academic requirements, helping maintain a clear,
              consistent and
              purposeful direction throughout the doctoral journey.
            </p>
            <a href="{{ route('about') }}" class="btn btn-primary px-4 py-3 rounded-pill fw-semibold shadow-sm btn-teal-pill">
              More About Us <i class="fa-solid fa-arrow-right ms-2"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-6 aos-init aos-animate" data-aos="fade-left">
          <div class="position-relative">
            <div class="rounded-4 overflow-hidden shadow-sm border border-light-subtle">
              <img src="{{ asset('images/phd-assistance-services.webp') }}" alt="Build a Clear Research Direction" class="img-fluid w-100 direction-img">
            </div>
          </div>
        </div>
      </div>

      <!-- ================= PHD SUPPORT SERVICES ================= -->
      <div class="row justify-content-center my-5 pt-3">
        <div class="col-lg-8 text-center heading-section aos-init aos-animate" data-aos="fade-up">
          <h2 class="fw-bold text-dark home-section-title mb-3">PhD Support Services</h2>
          <div class="stats-underline mb-3"></div>
          <p class="text-muted home-section-desc">
            Our <strong>PhD support services</strong> cover essential research and academic requirements, allowing researchers to choose focused assistance based on the stage and needs of their doctoral work.
          </p>
        </div>
      </div>

      <div class="row g-4 mb-5">
        <!-- Thesis Writing -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
          <a href="{{ route('thesis-writing') }}" class="text-decoration-none d-block h-100">
            <div class="p-4 bg-white rounded-4 shadow-sm border border-light-subtle h-100 d-flex flex-column justify-content-between position-relative service-card">
              <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="d-flex align-items-center justify-content-center rounded-3 shadow-sm service-card-icon">
                  <i class="fa-solid fa-book-open-reader"></i>
                </div>
                <span class="rounded-circle d-flex align-items-center justify-content-center bg-light text-muted service-card-arrow">
                  <i class="fa-solid fa-arrow-right"></i>
                </span>
              </div>
              <h5 class="fw-bold text-dark service-card-title mb-0">Thesis Writing</h5>
            </div>
          </a>
        </div>

        <!-- Proofreading and Editing -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
          <a href="{{ route('proofreading-and-editing') }}" class="text-decoration-none d-block h-100">
            <div class="p-4 bg-white rounded-4 shadow-sm border border-light-subtle h-100 d-flex flex-column justify-content-between position-relative service-card">
              <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="d-flex align-items-center justify-content-center rounded-3 shadow-sm service-card-icon">
                  <i class="fa-solid fa-pen-to-square"></i>
                </div>
                <span class="rounded-circle d-flex align-items-center justify-content-center bg-light text-muted service-card-arrow">
                  <i class="fa-solid fa-arrow-right"></i>
                </span>
              </div>
              <h5 class="fw-bold text-dark service-card-title mb-0">Proofreading and Editing</h5>
            </div>
          </a>
        </div>

        <!-- Research Proposal Writing -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
          <a href="{{ route('research-proposal-writing') }}" class="text-decoration-none d-block h-100">
            <div class="p-4 bg-white rounded-4 shadow-sm border border-light-subtle h-100 d-flex flex-column justify-content-between position-relative service-card">
              <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="d-flex align-items-center justify-content-center rounded-3 shadow-sm service-card-icon">
                  <i class="fa-solid fa-file-lines"></i>
                </div>
                <span class="rounded-circle d-flex align-items-center justify-content-center bg-light text-muted service-card-arrow">
                  <i class="fa-solid fa-arrow-right"></i>
                </span>
              </div>
              <h5 class="fw-bold text-dark service-card-title mb-0">Research Proposal Writing</h5>
            </div>
          </a>
        </div>

        <!-- Topic Selection -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
          <a href="{{ route('topic-selection') }}" class="text-decoration-none d-block h-100">
            <div class="p-4 bg-white rounded-4 shadow-sm border border-light-subtle h-100 d-flex flex-column justify-content-between position-relative service-card">
              <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="d-flex align-items-center justify-content-center rounded-3 shadow-sm service-card-icon">
                  <i class="fa-solid fa-lightbulb"></i>
                </div>
                <span class="rounded-circle d-flex align-items-center justify-content-center bg-light text-muted service-card-arrow">
                  <i class="fa-solid fa-arrow-right"></i>
                </span>
              </div>
              <h5 class="fw-bold text-dark service-card-title mb-0">Topic Selection</h5>
            </div>
          </a>
        </div>

        <!-- Dissertation Writing -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
          <a href="{{ route('dissertation-writing') }}" class="text-decoration-none d-block h-100">
            <div class="p-4 bg-white rounded-4 shadow-sm border border-light-subtle h-100 d-flex flex-column justify-content-between position-relative service-card">
              <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="d-flex align-items-center justify-content-center rounded-3 shadow-sm service-card-icon">
                  <i class="fa-solid fa-graduation-cap"></i>
                </div>
                <span class="rounded-circle d-flex align-items-center justify-content-center bg-light text-muted service-card-arrow">
                  <i class="fa-solid fa-arrow-right"></i>
                </span>
              </div>
              <h5 class="fw-bold text-dark service-card-title mb-0">Dissertation Writing</h5>
            </div>
          </a>
        </div>

        <!-- Research Methodology -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
          <a href="{{ route('research-methodology') }}" class="text-decoration-none d-block h-100">
            <div class="p-4 bg-white rounded-4 shadow-sm border border-light-subtle h-100 d-flex flex-column justify-content-between position-relative service-card">
              <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="d-flex align-items-center justify-content-center rounded-3 shadow-sm service-card-icon">
                  <i class="fa-solid fa-diagram-project"></i>
                </div>
                <span class="rounded-circle d-flex align-items-center justify-content-center bg-light text-muted service-card-arrow">
                  <i class="fa-solid fa-arrow-right"></i>
                </span>
              </div>
              <h5 class="fw-bold text-dark service-card-title mb-0">Research Methodology</h5>
            </div>
          </a>
        </div>

        <!-- Literature Review Writing -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
          <a href="{{ route('literature-review-writing') }}" class="text-decoration-none d-block h-100">
            <div class="p-4 bg-white rounded-4 shadow-sm border border-light-subtle h-100 d-flex flex-column justify-content-between position-relative service-card">
              <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="d-flex align-items-center justify-content-center rounded-3 shadow-sm service-card-icon">
                  <i class="fa-solid fa-book-bookmark"></i>
                </div>
                <span class="rounded-circle d-flex align-items-center justify-content-center bg-light text-muted service-card-arrow">
                  <i class="fa-solid fa-arrow-right"></i>
                </span>
              </div>
              <h5 class="fw-bold text-dark service-card-title mb-0">Literature Review Writing</h5>
            </div>
          </a>
        </div>

        <!-- Review Paper Writing -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
          <a href="{{ route('review-paper-writing') }}" class="text-decoration-none d-block h-100">
            <div class="p-4 bg-white rounded-4 shadow-sm border border-light-subtle h-100 d-flex flex-column justify-content-between position-relative service-card">
              <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="d-flex align-items-center justify-content-center rounded-3 shadow-sm service-card-icon">
                  <i class="fa-solid fa-newspaper"></i>
                </div>
                <span class="rounded-circle d-flex align-items-center justify-content-center bg-light text-muted service-card-arrow">
                  <i class="fa-solid fa-arrow-right"></i>
                </span>
              </div>
              <h5 class="fw-bold text-dark service-card-title mb-0">Review Paper Writing</h5>
            </div>
          </a>
        </div>

        <!-- Plagiarism Checking and Improvement -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
          <a href="{{ route('plagiarism-removal-service') }}" class="text-decoration-none d-block h-100">
            <div class="p-4 bg-white rounded-4 shadow-sm border border-light-subtle h-100 d-flex flex-column justify-content-between position-relative service-card">
              <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="d-flex align-items-center justify-content-center rounded-3 shadow-sm service-card-icon">
                  <i class="fa-solid fa-shield-halved"></i>
                </div>
                <span class="rounded-circle d-flex align-items-center justify-content-center bg-light text-muted service-card-arrow">
                  <i class="fa-solid fa-arrow-right"></i>
                </span>
              </div>
              <h5 class="fw-bold text-dark service-card-title mb-0">Plagiarism Checking and Improvement</h5>
            </div>
          </a>
        </div>

        <!-- Research Paper Writing -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
          <a href="{{ route('research-paper-writing') }}" class="text-decoration-none d-block h-100">
            <div class="p-4 bg-white rounded-4 shadow-sm border border-light-subtle h-100 d-flex flex-column justify-content-between position-relative service-card">
              <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="d-flex align-items-center justify-content-center rounded-3 shadow-sm service-card-icon">
                  <i class="fa-solid fa-scroll"></i>
                </div>
                <span class="rounded-circle d-flex align-items-center justify-content-center bg-light text-muted service-card-arrow">
                  <i class="fa-solid fa-arrow-right"></i>
                </span>
              </div>
              <h5 class="fw-bold text-dark service-card-title mb-0">Research Paper Writing</h5>
            </div>
          </a>
        </div>

        <!-- Conference Paper Writing -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
          <a href="{{ route('conference-paper-writing') }}" class="text-decoration-none d-block h-100">
            <div class="p-4 bg-white rounded-4 shadow-sm border border-light-subtle h-100 d-flex flex-column justify-content-between position-relative service-card">
              <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="d-flex align-items-center justify-content-center rounded-3 shadow-sm service-card-icon">
                  <i class="fa-solid fa-users-rectangle"></i>
                </div>
                <span class="rounded-circle d-flex align-items-center justify-content-center bg-light text-muted service-card-arrow">
                  <i class="fa-solid fa-arrow-right"></i>
                </span>
              </div>
              <h5 class="fw-bold text-dark service-card-title mb-0">Conference Paper Writing</h5>
            </div>
          </a>
        </div>

        <!-- Research Implementation -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
          <a href="{{ route('research-implementation') }}" class="text-decoration-none d-block h-100">
            <div class="p-4 bg-white rounded-4 shadow-sm border border-light-subtle h-100 d-flex flex-column justify-content-between position-relative service-card">
              <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="d-flex align-items-center justify-content-center rounded-3 shadow-sm service-card-icon">
                  <i class="fa-solid fa-laptop-code"></i>
                </div>
                <span class="rounded-circle d-flex align-items-center justify-content-center bg-light text-muted service-card-arrow">
                  <i class="fa-solid fa-arrow-right"></i>
                </span>
              </div>
              <h5 class="fw-bold text-dark service-card-title mb-0">Research Implementation</h5>
            </div>
          </a>
        </div>

        <!-- Data Analysis Support -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
          <a href="{{ route('data-analysis-assignment') }}" class="text-decoration-none d-block h-100">
            <div class="p-4 bg-white rounded-4 shadow-sm border border-light-subtle h-100 d-flex flex-column justify-content-between position-relative service-card">
              <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="d-flex align-items-center justify-content-center rounded-3 shadow-sm service-card-icon">
                  <i class="fa-solid fa-chart-pie"></i>
                </div>
                <span class="rounded-circle d-flex align-items-center justify-content-center bg-light text-muted service-card-arrow">
                  <i class="fa-solid fa-arrow-right"></i>
                </span>
              </div>
              <h5 class="fw-bold text-dark service-card-title mb-0">Data Analysis Support</h5>
            </div>
          </a>
        </div>

        <!-- Grammar and Language Review -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
          <a href="{{ route('grammar-check') }}" class="text-decoration-none d-block h-100">
            <div class="p-4 bg-white rounded-4 shadow-sm border border-light-subtle h-100 d-flex flex-column justify-content-between position-relative service-card">
              <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="d-flex align-items-center justify-content-center rounded-3 shadow-sm service-card-icon">
                  <i class="fa-solid fa-spell-check"></i>
                </div>
                <span class="rounded-circle d-flex align-items-center justify-content-center bg-light text-muted service-card-arrow">
                  <i class="fa-solid fa-arrow-right"></i>
                </span>
              </div>
              <h5 class="fw-bold text-dark service-card-title mb-0">Grammar and Language Review</h5>
            </div>
          </a>
        </div>
      </div>

      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-auto text-center aos-init aos-animate" data-aos="fade-up">
          <a href="#assistanceModal" data-bs-toggle="modal" class="btn btn-primary px-5 py-3 rounded-pill fw-semibold shadow-sm btn-consultant-cta">
            Let’s Discuss Your PhD Needs <i class="fa-solid fa-comments ms-2"></i>
          </a>
        </div>
      </div>

      <!-- ================= TARGET LEADING JOURNALS ================= -->
      <div class="row justify-content-center my-5 pt-3">
        <div class="col-lg-8 text-center heading-section aos-init aos-animate" data-aos="fade-up">
          <h2 class="fw-bold text-dark home-section-title mb-3">Target Leading Journals for Your Research</h2>
          <div class="stats-underline mb-4"></div>
        </div>
      </div>

      <div class="row g-3 g-md-4 justify-content-center mb-5 pb-4">
        <!-- Scopus Journal Support -->
        <div class="col-lg-4 col-md-6 mb-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
          <a href="{{ route('scopus-journal') }}" class="text-decoration-none d-block h-100">
            <div class="py-3 px-4 rounded-pill shadow-sm text-center d-flex align-items-center justify-content-center h-100 journal-pill-badge">
              <span class="fw-bold journal-pill-title">Scopus Journal Support</span>
            </div>
          </a>
        </div>

        <!-- SCI-Indexed Journal Support -->
        <div class="col-lg-4 col-md-6 mb-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
          <a href="{{ route('sci-indexed-journal') }}" class="text-decoration-none d-block h-100">
            <div class="py-3 px-4 rounded-pill shadow-sm text-center d-flex align-items-center justify-content-center h-100 journal-pill-badge">
              <span class="fw-bold journal-pill-title">SCI-Indexed Journal Support</span>
            </div>
          </a>
        </div>

        <!-- UGC Journal Support -->
        <div class="col-lg-4 col-md-6 mb-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
          <a href="{{ route('ugc-journal') }}" class="text-decoration-none d-block h-100">
            <div class="py-3 px-4 rounded-pill shadow-sm text-center d-flex align-items-center justify-content-center h-100 journal-pill-badge">
              <span class="fw-bold journal-pill-title">UGC Journal Support</span>
            </div>
          </a>
        </div>

        <!-- Web of Science Journal Support -->
        <div class="col-lg-4 col-md-6 mb-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
          <a href="{{ route('web-of-science-indexed-journals') }}" class="text-decoration-none d-block h-100">
            <div class="py-3 px-4 rounded-pill shadow-sm text-center d-flex align-items-center justify-content-center h-100 journal-pill-badge">
              <span class="fw-bold journal-pill-title">Web of Science Journal Support</span>
            </div>
          </a>
        </div>

        <!-- Q1 Journal Support -->
        <div class="col-lg-4 col-md-6 mb-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
          <a href="{{ route('q1-journal') }}" class="text-decoration-none d-block h-100">
            <div class="py-3 px-4 rounded-pill shadow-sm text-center d-flex align-items-center justify-content-center h-100 journal-pill-badge">
              <span class="fw-bold journal-pill-title">Q1 Journal Support</span>
            </div>
          </a>
        </div>
      </div>

      <!-- ================= EXPERT PHD CONSULTANCY ================= -->
      <div class="row justify-content-center my-5 pt-3">
        <div class="col-lg-8 text-center heading-section aos-init aos-animate" data-aos="fade-up">
          <h2 class="fw-bold text-dark home-section-title mb-3">Expert PhD Consultancy for Your Research</h2>
          <div class="stats-underline mb-3"></div>
          <p class="text-muted home-section-desc">
            Our PhD consultancy services provide personalised guidance for researchers seeking support with specific academic and research requirements. From early research planning to thesis completion, we identify the right support based on your subject, research stage and academic requirements, helping you move forward with greater clarity and structure.
          </p>
        </div>
      </div>

      <div class="row justify-content-center g-4 mb-5 pb-3">
        <!-- Step 01 -->
        <div class="col-lg-4 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
          <div class="p-4 bg-white rounded-4 shadow-sm border border-light-subtle h-100 position-relative d-flex flex-column consultancy-step-card">
            <div class="mb-3">
              <span class="badge rounded-pill px-3 py-2 consultancy-step-badge">
                Step 01
              </span>
            </div>
            <h4 class="fw-bold text-dark consultancy-step-title mb-2">Share Your Requirements</h4>
            <p class="text-secondary consultancy-step-desc mb-0">Tell us about your research area, current stage and the type of academic support you need.</p>
          </div>
        </div>

        <!-- Step 02 -->
        <div class="col-lg-4 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
          <div class="p-4 bg-white rounded-4 shadow-sm border border-light-subtle h-100 position-relative d-flex flex-column consultancy-step-card">
            <div class="mb-3">
              <span class="badge rounded-pill px-3 py-2 consultancy-step-badge">
                Step 02
              </span>
            </div>
            <h4 class="fw-bold text-dark consultancy-step-title mb-2">Discuss Your Research Needs</h4>
            <p class="text-secondary consultancy-step-desc mb-0">Share the specific research challenges or academic requirements you are currently working through.</p>
          </div>
        </div>

        <!-- Step 03 -->
        <div class="col-lg-4 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
          <div class="p-4 bg-white rounded-4 shadow-sm border border-light-subtle h-100 position-relative d-flex flex-column consultancy-step-card">
            <div class="mb-3">
              <span class="badge rounded-pill px-3 py-2 consultancy-step-badge">
                Step 03
              </span>
            </div>
            <h4 class="fw-bold text-dark consultancy-step-title mb-2">Identify the Right Support</h4>
            <p class="text-secondary consultancy-step-desc mb-0">We review your requirements and recommend the appropriate PhD help or service for your needs.</p>
          </div>
        </div>

        <!-- Step 04 -->
        <div class="col-lg-4 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
          <div class="p-4 bg-white rounded-4 shadow-sm border border-light-subtle h-100 position-relative d-flex flex-column consultancy-step-card">
            <div class="mb-3">
              <span class="badge rounded-pill px-3 py-2 consultancy-step-badge">
                Step 04
              </span>
            </div>
            <h4 class="fw-bold text-dark consultancy-step-title mb-2">Receive Personalised Assistance</h4>
            <p class="text-secondary consultancy-step-desc mb-0">Get focused support aligned with your research area, academic requirements and selected service.</p>
          </div>
        </div>

        <!-- Step 05 -->
        <div class="col-lg-4 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
          <div class="p-4 bg-white rounded-4 shadow-sm border border-light-subtle h-100 position-relative d-flex flex-column consultancy-step-card">
            <div class="mb-3">
              <span class="badge rounded-pill px-3 py-2 consultancy-step-badge">
                Step 05
              </span>
            </div>
            <h4 class="fw-bold text-dark consultancy-step-title mb-2">Continue With Ongoing Support</h4>
            <p class="text-secondary consultancy-step-desc mb-0">Receive continued assistance as your research progresses and additional academic requirements arise.</p>
          </div>
        </div>
      </div>

      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-auto text-center aos-init aos-animate" data-aos="fade-up">
          <a href="#assistanceModal" data-bs-toggle="modal" class="btn btn-primary px-5 py-3 rounded-pill fw-semibold shadow-sm btn-consultant-cta">
            Talk to Our PhD Consultant <i class="fa-solid fa-user-tie ms-2"></i>
          </a>
        </div>
      </div>

      <!-- ================= SCHOLARS EXPERIENCE (TESTIMONIALS) ================= -->
      <div class="row justify-content-center my-5 pt-3">
        <div class="col-lg-8 text-center heading-section aos-init aos-animate" data-aos="fade-up">
          <h2 class="fw-bold text-dark home-section-title mb-3">Scholars’ Experience With Our Support</h2>
          <div class="stats-underline mb-4"></div>
        </div>
      </div>

      <div class="row g-4 mb-5 pb-3">
        <!-- Testimonial 1 -->
        <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
          <div class="p-4 bg-white rounded-4 shadow-sm border border-light-subtle h-100 d-flex flex-column justify-content-between position-relative">
            <div class="mb-3">
              <div class="d-flex text-warning mb-3">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <p class="text-secondary fst-italic testimonial-quote mb-0">
                “The docsix services were really well organized and professional. I was able to finish my thesis on time, and the guidance at each stage made a big difference.”
              </p>
            </div>
            <div class="d-flex align-items-center pt-3 border-top">
              <div class="rounded-circle d-flex align-items-center justify-content-center testimonial-avatar me-3">
                ME
              </div>
              <div>
                <h6 class="fw-bold text-dark mb-0">Research Scholar</h6>
                <small class="text-muted">— Mechanical Engineering</small>
              </div>
            </div>
          </div>
        </div>

        <!-- Testimonial 2 -->
        <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
          <div class="p-4 bg-white rounded-4 shadow-sm border border-light-subtle h-100 d-flex flex-column justify-content-between position-relative">
            <div class="mb-3">
              <div class="d-flex text-warning mb-3">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <p class="text-secondary fst-italic testimonial-quote mb-0">
                “I had a tough time with methodology at first, but their support made it much easier to understand and work through. They were consistent and genuinely helpful throughout. Thanks to the Docsix team.”
              </p>
            </div>
            <div class="d-flex align-items-center pt-3 border-top">
              <div class="rounded-circle d-flex align-items-center justify-content-center testimonial-avatar me-3">
                CS
              </div>
              <div>
                <h6 class="fw-bold text-dark mb-0">PhD Candidate</h6>
                <small class="text-muted">— Computer Science</small>
              </div>
            </div>
          </div>
        </div>

        <!-- Testimonial 3 -->
        <div class="col-lg-4 col-md-6 aos-init aos-animate mx-auto" data-aos="fade-up" data-aos-delay="300">
          <div class="p-4 bg-white rounded-4 shadow-sm border border-light-subtle h-100 d-flex flex-column justify-content-between position-relative">
            <div class="mb-3">
              <div class="d-flex text-warning mb-3">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <p class="text-secondary fst-italic testimonial-quote mb-0">
                “I wasn’t sure whether to continue my PhD, especially with my full-time commitments. But their PhD consultancy services really worked for me. The guidance they provided to me resulted in my decision to study for my PhD program through part-time studies. Their guidance made my entire process feel manageable”
              </p>
            </div>
            <div class="d-flex align-items-center pt-3 border-top">
              <div class="rounded-circle d-flex align-items-center justify-content-center testimonial-avatar me-3">
                MS
              </div>
              <div>
                <h6 class="fw-bold text-dark mb-0">Doctoral Researcher</h6>
                <small class="text-muted">— Management Studies</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- ================= READY TO MOVE FORWARD (BANNER CTA) ================= -->
      <div class="row my-5 py-3">
        <div class="col-12 aos-init aos-animate" data-aos="fade-up">
          <div class="p-4 p-md-5 rounded-4 shadow home-cta-banner">
            <div class="row align-items-center">
              <div class="col-lg-8 mb-4 mb-lg-0">
                <h3 class="fw-bold text-white home-cta-title mb-3">Ready to Move Forward With Your PhD?</h3>
                <p class="mb-0 text-white-50 home-cta-desc">
                  Get the focused guidance and academic support you need for your doctoral work. Tell us your requirements and connect with our team to discuss the right support for your research.
                </p>
              </div>
              <div class="col-lg-4 text-lg-end text-center">
                <a href="tel:9500020252" class="btn px-4 py-3 rounded-pill fw-bold shadow btn-cta-white">
                  <i class="fa-solid fa-phone-volume me-2"></i> Call Now
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- ================= SHARE YOUR REQUIREMENTS FORM ================= -->
      <div class="row justify-content-center my-5 pt-3">
        <div class="col-lg-8 text-center heading-section aos-init aos-animate" data-aos="fade-up">
          <h2 class="fw-bold text-dark home-section-title mb-3">Share Your Research Requirements</h2>
          <div class="stats-underline mb-4"></div>
        </div>
      </div>

      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-lg-10 col-xl-9 aos-init aos-animate" data-aos="fade-up">
          <div class="bg-white rounded-4 shadow-sm border border-light-subtle overflow-hidden research-form-card">
            <div class="p-4 p-md-5">

              @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show rounded-3 mb-4" role="alert">
                  <i class="fa-solid fa-circle-check me-2"></i> {{ $message }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif

              @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-dismissible fade show rounded-3 mb-4" role="alert">
                  <i class="fa-solid fa-circle-exclamation me-2"></i> {{ $message }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif

              <form action="{{ route('form.store') }}" method="POST" class="custom-research-form">
                @csrf
                <input type="hidden" name="page" value="{{ request()->path() }}">

                <div class="row g-3 g-md-4">
                  <!-- Full Name -->
                  <div class="col-md-6">
                    <label class="form-label fw-semibold text-dark mb-2">
                      Full Name <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                      <span class="input-group-text border-end-0 rounded-start-3">
                        <i class="fa-solid fa-user"></i>
                      </span>
                      <input type="text" name="name" class="form-control mb-0 border-start-0 rounded-end-3 py-2 px-3" placeholder="Full Name" required>
                    </div>
                  </div>

                  <!-- Email Address -->
                  <div class="col-md-6">
                    <label class="form-label fw-semibold text-dark mb-2">
                      Email Address <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                      <span class="input-group-text border-end-0 rounded-start-3">
                        <i class="fa-solid fa-envelope"></i>
                      </span>
                      <input type="email" name="email" class="form-control mb-0 border-start-0 rounded-end-3 py-2 px-3" placeholder="Email Address" required>
                    </div>
                  </div>

                  <!-- Country -->
                  <div class="col-md-6">
                    <label class="form-label fw-semibold text-dark mb-2">
                      Country <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                      <span class="input-group-text border-end-0 rounded-start-3">
                        <i class="fa-solid fa-globe"></i>
                      </span>
                      <input type="text" name="country" class="form-control mb-0 border-start-0 rounded-end-3 py-2 px-3" placeholder="Country" required>
                    </div>
                  </div>

                  <!-- Phone Number -->
                  <div class="col-md-6">
                    <label class="form-label fw-semibold text-dark mb-2">
                      Phone Number <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                      <span class="input-group-text border-end-0 rounded-start-3">
                        <i class="fa-solid fa-phone"></i>
                      </span>
                      <input type="tel" name="phone" onkeypress="return isNumber(event);" class="form-control mb-0 border-start-0 rounded-end-3 py-2 px-3" placeholder="Phone Number" required>
                    </div>
                  </div>

                  <!-- Research Area / Subject -->
                  <div class="col-12">
                    <label class="form-label fw-semibold text-dark mb-2">
                      Research Area / Subject <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                      <span class="input-group-text border-end-0 rounded-start-3">
                        <i class="fa-solid fa-graduation-cap"></i>
                      </span>
                      <input type="text" name="topic" class="form-control mb-0 border-start-0 rounded-end-3 py-2 px-3" placeholder="Research Area / Subject" required>
                    </div>
                  </div>

                  <!-- Tell Us About Your Requirements -->
                  <div class="col-12">
                    <label class="form-label fw-semibold text-dark mb-2">
                      Tell Us About Your Requirements
                    </label>
                    <textarea name="message" rows="4" class="form-control mb-0 rounded-3 p-3" placeholder="Tell Us About Your Requirements"></textarea>
                  </div>

                  <!-- Submit Button & Trust Badges -->
                  <div class="col-12 text-center mt-4">
                    <button type="submit" class="btn px-5 py-3 rounded-pill fw-bold text-white shadow-sm btn-form-submit">
                      Submit Request <i class="fa-solid fa-paper-plane ms-2"></i>
                    </button>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
@endsection
@push('script')
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      if (typeof AOS !== 'undefined') {
        AOS.init({
          once: true,
          duration: 700,
          easing: 'ease-out'
        });
      }
    });
  </script>
@endpush
