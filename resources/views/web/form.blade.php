<section class="rq-section">
    <div class="container">
        <div class="row rq-wrapper align-items-stretch">

            <!-- LEFT SIDE (IMAGE / ICON) -->
            <div class="col-lg-6 rq-left d-none d-lg-flex px-0">
                <div class="rq-visual">
                    <img src="/images/phd-assistance-services.webp" alt="PhD Assistance">
                </div>
            </div>

            <!-- RIGHT SIDE (FORM) -->
            <div class="col-lg-6 rq-right px-0">
                <div class="rq-form-card">

                    <h4 class="rq-title">Need Help? Request Now</h4>

                    <form action="{{ route('form.store') }}" method="POST">
                        @csrf

                        <!-- Alerts -->
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">{{ $message }}</div>
                        @endif

                        @if ($message = Session::get('error'))
                        <div class="alert alert-danger">{{ $message }}</div>
                        @endif

                        <!-- Name -->
                        <div class="rq-input">
                            <input type="text" name="name" required>
                            <label>Full Name *</label>
                        </div>

                        <!-- Email -->
                        <div class="rq-input">
                            <input type="email" name="email" required>
                            <label>Email Address *</label>
                        </div>

                        <!-- Country + Phone -->
                        <div class="row">
                            <div class="col-md-5">
                                <label class="rq-label" for="country">Country *</label>
                                <div class="rq-input">
                                    @include('web.country-code')
                                </div>
                            </div>

                            <div class="col-md-7">
                                <label class="rq-label" for="contact-phone">Phone Number *</label>
                                <div class="rq-phone-group">
                                    <input type="text" name="country_code" id="country-code" value="+91" readonly class="rq-code">
                                    <input type="tel" name="phone" placeholder="9876543210" required>
                                </div>
                            </div>
                        </div>

                        <!-- Message -->
                        <div class="rq-input">
                            <textarea name="message" rows="3"></textarea>
                            <label>Message / Requirements</label>
                        </div>

                        <input type="hidden" name="page" value="{{ request()->path() }}">

                        <!-- Submit -->
                        <button type="submit" class="rq-btn">
                            Submit Request
                        </button>

                    </form>

                </div>
            </div>

        </div>
    </div>
</section>