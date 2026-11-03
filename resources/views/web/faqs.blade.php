@extends('web.app')
@push('meta-tags')
<title>PhD Assistance FAQ – Privacy, Payments, Revisions & Ordering Support</title>
    <meta name="description" content="description" content="Find answers to common questions about PhD Assistance, including privacy protection, secure payment methods, instalment options, plagiarism checks, refund policies, unlimited revisions, and the step-by-step ordering process.">
    <meta name="keywords" content="PhD Assistance FAQ – Privacy, Payments, Revisions & Ordering Support">
    <meta name="robots" content="index,follow"/>
    <link rel="canonical" href="https://phdassistants.com/"/> 

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="PhD Assistance FAQ – Privacy, Payments, Revisions & Ordering Support">
    <meta name="twitter:description" content="description" content="Find answers to common questions about PhD Assistance, including privacy protection, secure payment methods, instalment options, plagiarism checks, refund policies, unlimited revisions, and the step-by-step ordering process.">
    <meta name="robots" content="index,follow,noarchive"/>
  
    <meta property="og:title" content="PhD Assistance FAQ – Privacy, Payments, Revisions & Ordering Support"/>
    <meta property="og:description" content="description" content="Find answers to common questions about PhD Assistance, including privacy protection, secure payment methods, instalment options, plagiarism checks, refund policies, unlimited revisions, and the step-by-step ordering process. "> 
    <meta property="og:url" content="https://phdassistants.com/"/>
    <meta property="og:url" content="https://phdassistants.com/"/>
@endpush
@section('content')
<section class="hero-wrap2" style="background-image: url('{{ asset('images/service_bg.webp') }}');">
    <div class="overlay"></div>
    <div class="container">
    <div class="row no-gutters slider-text align-items-center">
        <div class="col-12 text-center justify-center">
        <div class="text aos-init aos-animate" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000" style="margin-top: 35vh;">
            <h1 class="mb-4">FAQ (Frequently Asked Questions)</h1>

            <p><a href="contact" class="btn btn-primary p-3 py-3">Get Started Now</a></p>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- FAQ Section -->
<section class="faq-section container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="accordion" id="faqAccordion">
                <!-- FAQ Item 1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <i class="fas fa-shield-alt faq-icon"></i> What are the steps taken to protect my privacy?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            PhD assistance maintains a strict code of moral and ethical responsibility; the company ensures that no personal information, purchase details, or financial information of the client is ever disclosed to their professor, friends, relatives, spammers, or any third party under any circumstances.
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Item 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <i class="fas fa-credit-card faq-icon"></i> What are your payment methods?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            The company accepts MasterCard, Visa, Diners, AMEX, Switch or Solo and American Express debit and credit cards. It offers further convenience by allowing customers to complete their transactions through PayPal, eChecks, and Western Union Money Transfer.
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Item 3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <i class="fas fa-money-bill-wave faq-icon"></i> Do you take payment in instalments?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Even though the company's prices are fairly low, to be able to ensure its clients that the company is trustworthy, it offers its clients to pay in instalments.
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Item 4 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <i class="fas fa-file-alt faq-icon"></i> How do you ensure that the dissertation is not plagiarised or doesn't contain low-quality content?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            The company's quality assurance officer uses a strict anti-plagiarism scanner to check each dissertation and provides the client with an anti-plagiarism proof report. This ensures that the client is assured that the dissertation is completely free from plagiarism and can be submitted with confidence.
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Item 5 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <i class="fas fa-sync-alt faq-icon"></i> What is your refund policy?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            If PhD Assistance does not initiate any contact with the client (such as by confirmation email) despite the order being placed, the client is entitled to a full refund of the money paid.
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Item 6 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            <i class="fas fa-edit faq-icon"></i> I need some revisions. Will the writer adhere to my request?
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Client satisfaction is of utmost importance to the company. The company guarantees unlimited revisions to ensure that the client's needs are fully met and that all provided instructions are diligently followed throughout the dissertation process.
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Item 7 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            <i class="fas fa-shopping-cart faq-icon"></i> What is the ordering procedure?
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Complete the order form available on the website with detailed information, as it will be used to process the client's order based on the specified requirements. Ensure all contact details are provided accurately, as the company's customer support representative will send an order confirmation email or make a follow-up call within 12 to 24 hours to provide additional details and next steps.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Contact Section -->
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="contact-section text-center">
                <h3 class="mb-4">Still have questions?</h3>
                <p class="mb-4">If you couldn't find the answer you're looking for, feel free to contact our support team.</p>
                <a href="tel:9500020252" class="btn btn-primary btn-lg">Get in Touch</a>
            </div>
        </div>
    </div>
</section>
@endsection