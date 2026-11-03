<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHD Assistants</title>
    <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="56x56" href="{{ asset('images/icon/4.png')}} ">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
 <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" type="text/css" media="all">
</head>
<body>
     <main>
        @yield('content')
    </main>
</body>
   <!-- Bootstrap Bundle JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
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
</body>
</html>