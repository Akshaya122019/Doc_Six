<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="icon" href="assets/images/docsix_logo.png" type="image/gif" sizes="20x20">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>404 Page Not Found</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    body {
      background: linear-gradient(135deg, #d7f0f4, #b6e4ea);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Segoe UI', sans-serif;
    }
    .error-container {
      text-align: center;
      max-width: 700px;
      background: #ffffff;
      padding: 3rem 2rem 2rem;
      margin: 1rem;
      border-radius: 20px;
      box-shadow: 0 8px 30px rgba(0,0,0,0.1);
      position: relative;
    }
    .error-code {
      font-size: 8rem;
      font-weight: 800;
      color: #00a0b3;
      letter-spacing: -5px;
      margin-top: 20px;
    }
    .error-text {
      font-size: 1.5rem;
      color: #444;
      margin-bottom: 1rem;
    }
    .error-subtext {
      color: #777;
      margin-bottom: 2rem;
    }
    .btn-custom {
      background-color: #00a0b3;
      color: #fff;
      font-weight: 600;
      border-radius: 30px;
      padding: 12px 28px;
      transition: 0.3s;
    }
    .btn-custom:hover {
      background-color: #159488;
      color: #fff;
    }

    @media (max-width: 576px) {
      .error-container {
        padding-top: 4.5rem; 
      }
      .error-logo {
        position: relative;
        top: 0;
        left: 0;
        margin: 0 auto 1rem auto;
        display: inline-block;
      }
      .error-code {
        font-size: 5rem;
        margin-top: 0;
      }
    }
  </style>
</head>
<body>
    <div class="error-container">
        <div class="error-code">404</div>
        <div class="error-text">Oops! Page Not Found</div>
        <div class="error-subtext">
            The page you’re looking for might have been moved, deleted, or never existed.  
            Don’t worry, let’s get you back on track.
        </div>

        <a href="https://phdassistants.com" class="btn btn-custom">
          <i class="fas fa-home me-2"></i>Go Back Home
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
