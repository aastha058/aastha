<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') {{env('APP_NAME')}}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>


<div class="bg-light text-dark py-2 shadow">
  <div class="container d-flex justify-content-between align-items-center flex-wrap">
    
    <div class="d-flex align-items-center gap-3">
      <span class="h6 mb-0"><i class="bi bi-envelope-fill me-1 fs-6"></i> pallavicourt@gmail.com</span>
      <span class="h6 mb-0"><i class="bi bi-telephone-fill me-1 fs-6"></i> +91 6200850680</span>
    </div>
 </div>
</div>

   @section('content')
    @show
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>