@extends('admin.layout.app')
@section('content')
 <div class="login-container">
        <div class="login-card">
            <!-- Header -->
            <div class="login-header">
                <h2 class="login-title">Log In</h2>
                 </div>

          
                        {{-- Flash Messages --}}
              @if(session('successmessage'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('successmessage') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session('errormessage'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('errormessage') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

            <!-- Login Form -->
            <form  action="{{ route('login.post') }}" method="POST"  id="loginForm">
                @csrf
            <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <div class="password-container">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                        <button type="button" class="password-toggle" onclick="togglePassword()">
                            <i class="fas fa-eye" id="passwordIcon"></i>
                        </button>
                    </div>
                </div>

              

                <button type="submit" class="btn btn-primary w-100" id="loginBtn">
                    <span id="btnText">Log In</span>
                    <div class="spinner-border spinner-border-sm d-none ms-2" id="spinner"></div>
                </button>
            </form>



          
        </div>
    </div>

@endsection
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Toggle password visibility
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const passwordIcon = document.getElementById('passwordIcon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordIcon.className = 'fas fa-eye-slash';
            } else {
                passwordInput.type = 'password';
                passwordIcon.className = 'fas fa-eye';
            }
        }

    
    </script>



