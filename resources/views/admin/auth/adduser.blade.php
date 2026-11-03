@extends('admin.layout.side-nav')

@section('content')

<div class="d-flex justify-content-center align-items-center" style="">
    <div class="card shadow-lg p-4" style="max-width: 500px; width: 100%;">
        <div class="card-header text-center" style="background-color: #020e29; color: white;">
            <h5 class="mb-0">PhD Assistands</h5>
        </div>
        <div class="card-body">
            <h6 class="text-center mb-3">New Registration</h6>

            <form action="{{ route('user.add') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="User Name">
                </div>

                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>

                <div class="mb-3">
                    <label for="password">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="passinput" name="password" placeholder="Password">
                        <span class="input-group-text" onclick="togglePassword()" style="cursor:pointer;">
                            <i class="fa fa-eye"></i>
                        </span>
                    </div>
                </div>
                <div class="row g-3 align-items-center">
                  <div class="col-auto m-0"><p class="fw-bold">Is Active:</p></div>
                  <div class="col-auto">
                    <div class="input-group mb-3">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="is_active" id="inlineRadio3"
                          value="1">
                        <label class="form-check-label" for="inlineRadio3">Active</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="is_active" id="inlineRadio4"
                          value="0">
                        <label class="form-check-label" for="inlineRadio4">Deactive</label>
                      </div>
                    </div>
                  </div>
                
                <button type="submit" class="btn btn-primary w-100">Add User</button>
            </form>
        </div>
    </div>
</div>


@endsection
@push('scripts')
<script>
function togglePassword() {
    const pass = document.getElementById("passinput");
    const icon = event.currentTarget.querySelector("i");
    if (pass.type === "password") {
        pass.type = "text";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
    } else {
        pass.type = "password";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
    }
}
</script>
@endpush