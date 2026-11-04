<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="icon" href="assets/images/docsix_logo.png" type="image/gif" sizes="20x20">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Page Under Construction</title>

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

    .construction-container {
      text-align: center;
      max-width: 720px;
      background: #ffffff;
      padding: 3rem 2rem;
      margin: 1rem;
      border-radius: 20px;
      box-shadow: 0 10px 35px rgba(0,0,0,0.1);
      position: relative;
      overflow: hidden;
    }

    .construction-icon {
      font-size: 5rem;
      color: #00a0b3;
      margin-bottom: 20px;
      animation: bounce 2s infinite;
    }

    @keyframes bounce {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }

    .construction-title {
      font-size: 2.2rem;
      font-weight: 800;
      color: #00a0b3;
      margin-bottom: 10px;
    }

    .construction-text {
      font-size: 1.3rem;
      color: #444;
      margin-bottom: 10px;
    }

    .construction-subtext {
      color: #777;
      margin-bottom: 25px;
      line-height: 1.6;
    }

    .btn-custom {
      background: linear-gradient(135deg, #00a0b3, #159488);
      color: #fff;
      font-weight: 600;
      border-radius: 30px;
      padding: 12px 28px;
      transition: 0.3s;
      border: none;
    }

    .btn-custom:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(30,178,166,0.3);
      color: #fff;
    }

    .progress {
      height: 8px;
      border-radius: 10px;
      margin: 20px 0 10px;
      background: #e9ecef;
    }

    .progress-bar {
      background: linear-gradient(90deg, #00a0b3, #159488);
      animation: load 3s infinite;
    }

    @keyframes load {
      0% { width: 20%; }
      50% { width: 70%; }
      100% { width: 70%; }
    }

    @media (max-width: 576px) {
      .construction-container {
        padding: 2rem 1.5rem;
      }

      .construction-title {
        font-size: 1.6rem;
      }

      .construction-icon {
        font-size: 4rem;
      }
    }
  </style>
</head>

<body>

  <div class="construction-container">

    <div class="construction-icon">
      <i class="fas fa-tools"></i>
    </div>

    <div class="construction-title">Page Under Construction</div>

    <div class="construction-text">We’re working on something amazing!</div>

    <div class="construction-subtext">
      This page is currently under development.  
      We’re improving it to provide you with the best experience.  
      Please check back soon.
    </div>

    <div class="progress">
      <div class="progress-bar"></div>
    </div>

    <a href="https://phdassistants.com" class="btn btn-custom mt-3">
      <i class="fas fa-home me-2"></i>Go Back Home
    </a>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>