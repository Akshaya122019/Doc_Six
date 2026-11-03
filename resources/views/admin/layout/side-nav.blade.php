<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="56x56" href="{{ asset('/images/fav-icon/logo-light.wepb')}} ">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.css" rel="stylesheet">
  <!-- customcss -->
 <link rel="stylesheet" href="{{ asset('css/side-nav.css') }}" type="text/css" media="all">
</head>
<body>
     <div class="sidebar-overlay" id="sidebarOverlay"></div>
    
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <nav class="nav flex-column">
            <a class="nav-link active" href="{{ route('admin.dashboard') }}">
                <i class="fas fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
            <a class="nav-link" href="{{ route('adduser') }}">
                <i class="fa-solid fa-user-plus"></i>
                <span>Add User</span>
            </a>
            <a class="nav-link" href="{{ route('all_user') }}">
                <i class="fas fa-users"></i>
                <span>All User</span>
            </a>
             <a class="nav-link" href="{{ route('blogs.create') }}">
                <i class="fa-solid fa-blog"></i>
                <span>Add Blog</span>
            </a>
            <a class="nav-link" href="{{ route('blogs.index') }}">
               <i class="fa-solid fa-square-rss"></i>
                <span>All Blogs</span>
            </a>
           
            <a class="nav-link" href="{{route('form.index')}}">
                <i class="fas fa-table"></i>
                <span>Form Details</span>
            </a>
            <a class="nav-link" href="{{ route('logout') }}">
                <i class="fas fa-plus"></i>
                <span>Logout</span>
            </a>
           
        </nav>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-lg top-navbar">
            <div class="container-fluid">
                <button class="navbar-toggler d-lg-none border-0" type="button" id="sidebarToggle">
                    <i class="fas fa-bars text-white"></i>
                </button>
                
                <a class="navbar-brand" href="{{ route('admin.dashboard') }}">
                    PHD Assistants
                </a>
                
              <div class="navbar-nav ms-auto d-flex flex-row align-items-center">
    <div class="nav-item d-flex align-items-center">
        <div class="user-avatar">
            {{ strtoupper(substr(Auth::user()->name, 0, 2)) }}
        </div>
        <span class="ms-2 d-none d-md-inline">
            {{ Auth::user()->name }}
        </span>
    </div>
</div>

        </nav>

       
     <!-- Main content area -->
  <main class="main-content">
    @yield('content')
  </main>

</body>
<!-- Bootstrap Bundle (with Popper) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<!-- Chart.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>

<!-- jQuery (required for Toastr) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Toastr -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
   
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebar = document.getElementById('sidebar');
    const sidebarOverlay = document.getElementById('sidebarOverlay');
    
    function toggleSidebar() {
        sidebar.classList.toggle('show');
        sidebarOverlay.classList.toggle('show');
    }
    
    function closeSidebar() {
        sidebar.classList.remove('show');
        sidebarOverlay.classList.remove('show');
    }
    
   
    sidebarToggle?.addEventListener('click', toggleSidebar);
    sidebarOverlay?.addEventListener('click', closeSidebar);
    
 
    document.querySelectorAll('.sidebar .nav-link').forEach(link => {
        link.addEventListener('click', () => {
            if (window.innerWidth <= 768) {
                closeSidebar();
            }
        });
    });
    
   
    window.addEventListener('resize', () => {
        if (window.innerWidth > 768) {
            closeSidebar();
        }
    });

 
    document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(function (el) {
        new bootstrap.Tooltip(el);
    });

    
    @if (Session::has('successmessage'))
        toastr.success("{{ Session::get('successmessage') }}", "Success", { closeButton: true, progressBar: true });
    @endif

    @if (Session::has('errormessage'))
        toastr.error("{{ Session::get('errormessage') }}", "Error", { closeButton: true, progressBar: true });
    @endif

    @if (Session::has('infomessage'))
        toastr.info("{{ Session::get('infomessage') }}", "Info", { closeButton: true, progressBar: true });
    @endif
</script>

@stack('scripts')

</html>