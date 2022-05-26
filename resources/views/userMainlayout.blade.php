

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>O-HOME</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons tab logo -->
 

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: EstateAgency - v4.3.0
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
</head>

<body class="wholeBody">

  <!-- ======= Property Search Section ======= -->
  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Search Property</h3>
    </div>
    <span class="close-box-collapse right-boxed bi bi-x"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label class="pb-2" for="Type">Keyword</label>
              <input type="search" name="search" class="form-control form-control-lg form-control-a" placeholder="search by location">
            </div>
          </div>
          
          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Search Property</button>
          </div>
        </div>
      </form>
    </div>
  </div><!-- End Property Search Section -->

  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="{{route('index')}}">O<span class="color-b">-HOME</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link " href="{{route('index')}}">Home</a>
          </li>

          {{-- <li class="nav-item">
           
          </li> --}}
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Room Section</a>
            <div class="dropdown-menu">
              <a class="nav-link " href="{{route('all_rooms')}}">All Room</a>
              <a class="nav-link " href="{{route('my_room')}}">My Rooms</a>
              {{-- <a class="nav-link " href="#">My Booked Rooms</a> --}}

              
                    
                 

              
            </div>
          </li>
          <!--ff-->

          <li class="nav-item">
            <a class="nav-link " href="{{route('about')}}">About</a>
          </li>

          

          

         <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="property-single.html">Property Single</a>
              <a class="dropdown-item " href="blog-single.html">Blog Single</a>
              <a class="dropdown-item " href="agents-grid.html">Agents Grid</a>
              <a class="dropdown-item " href="agent-single.html">Agent Single</a>
            </div>
          </li>-->
          <li class="nav-item">
            <a class="nav-link " href="{{route('contact')}}">Contact</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{$username}}</a>
            <div class="dropdown-menu">
             
             
             
              
              <a class="dropdown-item " href="{{route('logout')}}"><span>logout</span> </a>

              @php
                if(session()->get('userLogin') != 1)
                {
                 @endphp
                  <a class="dropdown-item " href="{{route('sign_in')}}"><span>LOG IN</span> </a>
                   <a class="dropdown-item " href="{{route('sign_up')}}"><span>SIGN UP</span> </a>    
                  @php

                }
                  @endphp
              
              {{-- @auth
              <a class="dropdown-item " href="#" >{{$user->fname }} <span class="caret"></span></a>
              <a href="">Logout</a>
              @endauth  --}}
             
              
             
              
              
            </div>
          </li>
        </ul>
      </div>

      <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
        <i class="bi bi-search"></i>
      </button>

    </div>
  </nav><!-- End Header/Navbar -->

  

  @yield('content')

  <!-- ======= Footer ======= -->
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-lg-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">O <span class="color-b">HOME</span> </h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
                We are committed to reach you to the best rental room near you.
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Phone .</span> 7797036947
                </li>
                <li class="color-a">
                  <span class="color-text-a">Email .</span> ohome@gmail.com
                </li>
              </ul>
            </div>
          </div>
        </div>
       
        <!--ff-->
        <div class="col-sm-12 col-lg-4">
          <img src="assets/img/slide-3.jpg" alt="" class="img-fluid">
        </div>
        <!--ff-->
        <div class="col-sm-12 col-lg-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Availability</h3>
            </div>
            <div class="w-body-a">
              <ul class="list-unstyled">
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">INDIA</a>

                </li>
                <p class="w-text-a color-text-a">
                  Currently O-HOME is servicing in india 
                </p>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="{{route('home')}}">Home</a>
              </li>
              
              <li class="list-inline-item">
                <a href="{{route('all_rooms')}}">Rooms</a>
              </li>

              <li class="list-inline-item">
                <a href="{{route('about')}}">About</a>
              </li>
              
              <li class="list-inline-item">
                <a href="#">Contact</a>
              </li>
            </ul>
          </nav>
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/fitbouncer/" target="blank">
                  <i class="bi bi-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-linkedin" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a">O-HOME</span> All Rights Reserved.
            </p>
          </div>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
          -->
            Designed by <a href="#">LP-tEcH</a>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

{{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css"> --}}
<script>
    var botmanWidget = {
        aboutText: 'ssdsd',
        introMessage: "<img draggable="false" role="img" class="emoji" alt="✋" src='https://s.w.org/images/core/emoji/13.1.0/svg/270b.svg'> Hi! I'm form Tutsmake.org"
    };
</script>

<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>

</html>