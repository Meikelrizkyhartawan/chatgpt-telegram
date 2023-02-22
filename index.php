<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Binerogic</title>

  <link rel="stylesheet" href="dist/css/index.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  <!-- bootstrap icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>

<div class="superNav border-bottom py-2 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 centerOnMobile">
            <select  class="me-3 border-0 bg-light">
              <option value="en-us">ID-ID</option>
            </select>
            <span class="d-none d-lg-inline-block d-md-inline-block d-sm-inline-block d-xs-none me-3"><strong>marketing@binerogic.my.id</strong></span>
            <!-- <span class="me-3"><i class="fa-solid fa-phone me-1 text-primary"></i> <strong>1-800-123-1234</strong></span> -->
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-none d-lg-block d-md-block-d-sm-block d-xs-none text-end">
            <span class="me-3"><i class="fa-solid fa-truck text-muted me-1"></i><a class="text-muted" href="#">Contact</a></span>
            <span class="me-3"><i class="fa-solid fa-file  text-muted me-2"></i><a class="text-muted" href="#">Policy</a></span>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-white sticky-top navbar-light p-3 shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><i class="fa-solid fa-shop me-2"></i> <strong>BINEROGIC</strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="mx-auto my-3 d-lg-none d-sm-block d-xs-block">
          <div class="input-group">
            <span class="border-primary input-group-text bg-primary text-white"><i class="fa-solid fa-magnifying-glass"></i></span>
            <input type="text" class="form-control border-primary" style="color:#7a7a7a">
            <button class="btn btn-primary text-white">Search</button>
          </div>
        </div>
        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
          <div class="ms-auto d-none d-lg-block">
            <div class="input-group">
              <span class="border-primary input-group-text bg-primary text-white"><i class="fa-solid fa-magnifying-glass"></i></span>
              <input type="text" class="form-control border-primary" style="color:#7a7a7a">
              <button class="btn btn-primary text-white">Search</button>
            </div>
          </div>
          <ul class="navbar-nav ms-auto ">
            <li class="nav-item">
              <a class="nav-link mx-2 text-uppercase active" aria-current="page" href="#">Offers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2 text-uppercase" href="#">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2 text-uppercase" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2 text-uppercase" href="#">About</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto ">
            <li class="nav-item">
              <a class="nav-link mx-2 text-uppercase" href="#"><i class="fa-solid fa-circle-user me-1"></i> Account</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Body -->
    <div>
      <!-- main container -->
      <div class="container-fluid">
        <p class="text-center pt-5 fs-1">Products</p>
        <!-- product list -->
        <div class="container pt-5">
          <div class="row">
            <div class="col-3">
              <div class="card" style="width: 18rem;">
                <img src="dist/images/politic-main.jpg" class="card-img-top" alt="..." style="height: ;">
                <div class="card-body">
                  <h5 class="card-title">Politic Analyzer</h5>
                  <p class="card-text">A website that can analyze some politic content or personal info by social media crawling.</p>
                  <a href="https://www.politic.pw" class="btn btn-primary">Go to Website</a>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="card" style="width: 18rem;">
                <img src="dist/images/mental-health-main.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Mental Health Parameter</h5>
                  <p class="card-text">A website that can detect your mental psycologic level or stress level that you have.</p>
                  <a href="#" class="btn btn-primary">Go to Website</a>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="card" style="width: 18rem;">
                <img src="dist/images/task-management-main.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Task Management</h5>
                  <p class="card-text">Management website for recording all your daily task or daily activity with powerfull management</p>
                  <a href="#" class="btn btn-primary">Go to Website</a>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="card" style="width: 18rem;">
                <img src="dist/images/jojime-main.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Jojime</h5>
                  <p class="card-text">Jojime is a media social where we can upload a photo or a text for sharing to another people.</p>
                  <a href="#" class="btn btn-primary">Go to Website</a>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>

        <!-- Reliability Apps -->
        <div class="container pt-5">
          <p class="text-center pt-5 fs-1 pb-5">Statistic Perfomance</p>
          <div class="row border">
            <div class="col-3 p-5">
              <p class="fs-3 text-center">100 Users</p>
            </div>
            <div class="col-3 p-5">
              <p class="fs-3 text-center">Daily Crawling</p>
            </div>
            <div class="col-3 p-5">
              <p class="fs-3 text-center">Best Security</p>
            </div>
            <div class="col-3 p-5">
              <p class="fs-3 text-center">Data Accuracy</p>
            </div>
          </div>
        </div>

        <!-- footer -->
        <footer class="container p-4 rounded">
          <div class="d-lg-flex justify-content-between">
            <div>
              <span>BINEROGIC</span>
            </div>
            <div class="copyright">
              <p>developed and maintained by <a href="#" target="_blank">Binerogic</a></p>
            </div>
            <div>
              <ul class="d-flex gap-3 list-unstyled">
                <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                <li><a href="#"><i class="bi bi-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </footer>
      </div>
    </div>

</body>
</html>