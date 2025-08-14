<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TaxFilingHub</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://kit.fontawesome.com/your-code.js" crossorigin="anonymous"></script>
   <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet"/>
  <style>
    .navbar-brand span {
      font-weight: bold;
      color: #333;
    }

    .navbar-brand span:last-child {
      color: #000;
    }

    .nav-link.active {
      color: #007bff !important;
      border-bottom: 2px solid #007bff;
    }

    .navbar-nav .nav-item {
      padding: 0 10px;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-white shadow-sm px-4">
    <a class="navbar-brand d-flex align-items-center me-4" href="#">
      
      <span>Tax</span><span>FilingHub<span style="color: blue;">.</span></span>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto align-items-center">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home</a>
        </li>
        <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Partner With Us</a></li>

        <!-- Dropdowns -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="taxationDropdown" role="button" data-bs-toggle="dropdown">
            Taxation
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">GST</a></li>
            <li><a class="dropdown-item" href="#">Income Tax</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="companyDropdown" role="button" data-bs-toggle="dropdown">
            Company
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Private Ltd</a></li>
            <li><a class="dropdown-item" href="#">LLP</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="registrationDropdown" role="button" data-bs-toggle="dropdown">
            Registration
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">FSSAI</a></li>
            <li><a class="dropdown-item" href="#">MSME</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="businessDropdown" role="button" data-bs-toggle="dropdown">
            Business
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Startup</a></li>
            <li><a class="dropdown-item" href="#">Consulting</a></li>
          </ul>
        </li>

        <li class="nav-item"><a class="nav-link" href="#">TDS Return</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
      </ul>
    </div>
  </nav>
  @section('content')
    @show

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
