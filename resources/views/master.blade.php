<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href= "{{URL('home')}}" >Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{URL('addproducts')}}">Add Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{URL('products_table')}}">Products Table</a>
        </li>
       
       
      </ul>
    </div>
  </div>
</nav>

  {{--  Slider  --}}

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <!-- Slide 1 -->
    <div class="carousel-item active">
      <img src="{{ asset('upload/slider2.jpeg') }}" class="d-block w-100" alt="Mobile 1">
      <div class="carousel-caption d-none d-md-block">
        <h5>Mobile 1</h5>
        <p>Description for Mobile 1.</p>
      </div>
    </div>
    <!-- Slide 2 -->
    <div class="carousel-item">
      <img src="{{ asset('upload/slider.jpg') }}" class="d-block w-100" alt="Mobile 2">
      <div class="carousel-caption d-none d-md-block">
        <h5>Mobile 2</h5>
        <p>Description for Mobile 2.</p>
      </div>
    </div>
    <!-- Slide 3 -->
    <div class="carousel-item">
      <img src="{{ asset('upload/slider1.jpeg') }}" class="d-block w-100" alt="Mobile 3">
      <div class="carousel-caption d-none d-md-block">
        <h5>Mobile 3</h5>
        <p>Description for Mobile 3.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>




  {{--  Slider End  --}}
@yield('content')
<footer class="bg-dark text-white pt-4">
  <div class="container">
      <div class="row">
          <!-- Navigation Links -->
          <div class="col-lg-4 col-md-6 mb-4">
              <h5>Navigation</h5>
              <ul class="list-unstyled">
                  <li><a href="#" class="text-white text-decoration-none">Home</a></li>
                  <li><a href="#" class="text-white text-decoration-none">About Us</a></li>
                  <li><a href="#" class="text-white text-decoration-none">Services</a></li>
                  <li><a href="#" class="text-white text-decoration-none">Contact</a></li>
              </ul>
          </div>

          <!-- Contact Information -->
          <div class="col-lg-4 col-md-6 mb-4">
              <h5>Contact Us</h5>
              <address>
                  <strong>Company Name</strong><br>
                  1234 Street Name<br>
                  City, State, Zip<br>
                  <abbr title="Phone">P:</abbr> (123) 456-7890<br>
                  <abbr title="Email">E:</abbr> <a href="mailto:info@example.com" class="text-white text-decoration-none">info@example.com</a>
              </address>
          </div>

          <!-- Social Media Icons -->
          <div class="col-lg-4 col-md-12 mb-4">
              <h5>Follow Us</h5>
              <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
              <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
              <a href="#" class="text-white me-3"><i class="fab fa-linkedin-in"></i></a>
          </div>
      </div>
  </div>
  <div class="bg-secondary text-center py-3">
      <p class="mb-0">&copy; 2024 Your Company. All rights reserved.</p>
  </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>