<!-- Assistance Modal -->
<div class="modal fade" id="assistanceModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content border-0 shadow-lg rounded-4">

      <!-- Header -->
      <div class="modal-header border-0 pb-0">
        <h4 class="subheading text-center">Get Assistance</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Body -->
      <div class="modal-body px-4 pb-4">

        <form action="{{ route('form.store') }}" method="POST">
          @csrf

          <div class="mb-3">
            <label class="form-label fw-semibold">Full Name *</label>
            <input type="text" class="form-control rounded-3" name="name" required>
          </div>

          <div class="mb-3">
            <label class="form-label fw-semibold">Email Address *</label>
            <input type="email" class="form-control rounded-3" name="email" required>
          </div>

          <div class="mb-3">
            <label class="form-label fw-semibold">Phone *</label>
            <input type="text"
                    name="phone"
                    class="form-control rounded-3"
                    onkeypress="return isNumber(event);"
                    required>
          </div>

          <div class="mb-3">
            <label class="form-label fw-semibold">Message</label>
            <textarea class="form-control rounded-3"
                      rows="4"
                      name="message"></textarea>
          </div>

          <input type="hidden" name="page" value="{{ request()->path() }}">

          <div class="text-center mt-4">
            <button type="submit"
                    class="btn btn-primary px-5 py-2 rounded-pill fw-semibold">
              Submit
            </button>
          </div>

        </form>

      </div>
    </div>
  </div>
</div>