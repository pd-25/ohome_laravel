@extends('userMainlayout')
@section('title','Home page')
@if ($errors->any())
@foreach ($errors->all() as $error)
<div>{{$error}}</div>
@endforeach
@endif
@section('content')
<!-- ======= Intro Section ======= -->
<!--<div class="intro intro-carousel swiper-container position-relative">
   <div class="swiper-wrapper">
   
     <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slide-1.jpg)">
       <div class="overlay overlay-a"></div>
       <div class="intro-content display-table">
         <div class="table-cell">
           <div class="container">
             <div class="row">
               <div class="col-lg-8">
                 <div class="intro-body">
                   <p class="intro-title-top">Doral, Florida
                     <br> 78345
                   </p>
                   <h1 class="intro-title mb-4 ">
                     <span class="color-b">choose your</span> 
                     <br> Home outside Home
                   </h1>
                   <p class="intro-subtitle intro-price">
                     <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                   </p>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
     <!--<div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slide-2.jpg)">
       <div class="overlay overlay-a"></div>
       <div class="intro-content display-table">
         <div class="table-cell">
           <div class="container">
             <div class="row">
               <div class="col-lg-8">
                 <div class="intro-body">
                   <p class="intro-title-top">Doral, Florida
                     <br> 78345
                   </p>
                   <h1 class="intro-title mb-4">
                     <span class="color-b">choose your </span> 
                     <br>Home outside Home
                   </h1>
                   <p class="intro-subtitle intro-price">
                     <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                   </p>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
     <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slide-3.jpg)">
       <div class="overlay overlay-a"></div>
       <div class="intro-content display-table">
         <div class="table-cell">
           <div class="container">
             <div class="row">
               <div class="col-lg-8">
                 <div class="intro-body">
                   <p class="intro-title-top">Doral, Florida
                     <br> 78345
                   </p>
                   <h1 class="intro-title mb-4">
                     <span class="color-b">choose your </span> 
                     <br> Home outside Home
                   </h1>
                   <p class="intro-subtitle intro-price">
                     <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                   </p>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
                <div class="swiper-pagination"></div>
   </div>
   <!-- End Intro Section -->
<!-- banner start -->
<!--2nd try <div class=" carousel slide" data-ride="carousel">
   <div class="carousel-inner">
     <div class="carousel-item active">
     
       <p class="intro-subtitle intro-price">
         <a href="#"><span class="price-a">rent | $ 12.000</span></a>
       </p>
     </div>
     
   </div>
   </div>-->
<div class="bg-image" style="background-image: url('assets/img/banner.jpg');">
<section id="banner">
   <div class="banner-container  ">
      <div class="banner-contain ">
      </div>
   </div>
   <section>
   <!--search bar -->
   <div class="container">
      <div class="row height d-flex justify-content-center align-items-center">
         <div class="col-md-8">
            <div class="search">
               <i class="fa fa-search"></i> <input type="text" class="form-control" placeholder="Search by room address"> 
               <div class="justify-content-center">
                  <a href=""><button class="btn btn-success ">Search</button> </a>
               </div>
            </div>
            
         </div>
         <div class="container text-center mb-5">
          <h1>I'M<span > O-HOME</span> <br> Welcome to your  OUTSIDE HOME </h1>

          <div class="container text-center  ">
           <a href="{{route('all_rooms')}}"><button  class="btn mt-10 btn-outline-success ">  GET ROOM</button></a>
            <!-- Button trigger modal -->
            <button type="button" class="btn mt-10 btn-outline-success " data-toggle="modal" data-target="#exampleModal">
            SHARE ROOM
            </button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog" role="document">
                  <div class="modal-content">
                     <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                     </div>
                     <div class="modal-body">
                        <form action="{{route('create_room')}}" method="POST" enctype="multipart/form-data" >
                           @csrf
                           <div class="form-row">
                              <div class="form-group col-md-6">
                                 <label for="inputEmail4">Room Description</label>
                                 <input type="text" name="property_description" value="pp" class="form-control"  placeholder="Description">
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="inputPassword4">Rent Price in rupee</label>
                                 <input type="number" name="rent_price" value="0" class="form-control" id="inputPassword4" placeholder="Rent">
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="inputAddress">Address</label>
                              <input type="text" name="address" value="pp" class="form-control" id="inputAddress" placeholder="1234 Main St">
                           </div>
                           <div class="form-row">
                              <div class="form-group col-md-6">
                                 <label for="inputAddress2">Bed</label>
                                 <input type="text" name="bed" value="0" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                              </div>
                              <div class="form-group col-md-6">
                                 <label for="inputAddress2">Room Image</label>
                                 <input type="file" name="room_image" class="form-control" id="inputAddress2" placeholder="image">
                              </div>
                           </div>
                           <div class="form-row">
                              <div class="form-group col-md-2">
                                 <label for="inputCity">Bathrooms</label>
                                 <input type="text" name="bathroom" value="0" class="form-control" id="inputCity">
                              </div>
                              <div class="form-group col-md-5">
                                 <label for="inputState">State</label>
                                 <select id="inputState"  class="form-control">
                                    <option selected>Choose...</option>
                                    @foreach(config('component.states') as  $code => $state)
                                    <option value="{{ $code }}" @if(@$region['value']==$code) selected @endif>
                                    {{ $state}} ({{$code}})
                                    </option>
                                    @endforeach
                                 </select>
                              </div>
                              <div class="form-group col-md-5">
                                 <label for="inputZip">Pin</label>
                                 <input type="number" value="0" name="pin" class="form-control" id="inputZip">
                              </div>
                              <div class="form-row">
                                 <div class="form-group col-md-6">
                                    <label for="inputEmail4">Owner Name</label>
                                    <input type="text" name="owner_name" value="pp" class="form-control"  placeholder="name">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="inputPassword4">Owner Contact</label>
                                    <input type="number" name="owner_contact" value="0" class="form-control" id="inputPassword4" placeholder="number">
                                 </div>
                              </div>
                              {{-- 
                              <div class="form-group">
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                    Check me out
                                    </label>
                                 </div>
                              </div>
                              <button type="submit" class="btn btn-primary">Sign in</button> --}}
                              <div class="form-submit ">
                                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                 <button type="submit"  class="btn btn-secondary" id="submit" name="submit">submit</button>
                              </div>
                        </form>
                        </div>
                     </div>
                  </div>
               </div>  
    
         
     
     </div>
         
    </div>

          

      

   </div>
   <!--search bar end -->
  </section>
  
   </div>
</section>
</div>
<!-- banner start -->
@if(Session::has('message'))
<p class="alert alert-danger" role="alert">{{ Session::get('message') }}</p>
@endif
<div >
   <main  id="main">
      <!-- ======= Latest Properties Section ======= -->
      <div >
         <section class="section-property section-t8">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                           <h2 class="title-a">Latest Rooms</h2>
                        </div>
                        <div class="title-link">
                           <a href="{{route('all_rooms')}}">All Rooms
                           <span class="bi bi-chevron-right"></span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="property-carousel" class="swiper-container">
                  <div class="swiper-wrapper">
                     @foreach ($latestrooms as $room)
                     <div class="carousel-item-b swiper-slide">
                        <div class="card-box-a card-shadow">
                           <div class="img-box-a">
                              <img src="userIdImage/{{$room['room_image']}}" alt="" class="img-a img-fluid">
                           </div>
                           <div class="card-overlay">
                              <div class="card-overlay-a-content">
                                 <div class="card-header-a">
                                    <h2 class="card-title-a">
                                       <a href="property-single.html">{{$room['address']}}</a>
                                    </h2>
                                 </div>
                                 <div class="card-body-a">
                                    <div class="price-box d-flex">
                                       <span class="price-a">rent |  {{$room['rent_price']}}</span>
                                    </div>
                                    <a href="property-single.html" class="link-a">Click here to view
                                    <span class="bi bi-chevron-right"></span>
                                    </a>
                                 </div>
                                 <div class="card-footer-a">
                                    <ul class="card-info d-flex justify-content-around">
                                       <li>
                                          <h4 class="card-info-title">Beds</h4>
                                          <span>{{$room['bed']}}</span>
                                       </li>
                                       <li>
                                          <h4 class="card-info-title">Baths</h4>
                                          <span>{{$room['bathroom']}}</span>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End carousel item -->  
                     @endforeach
                  </div>
               </div>
               <div class="propery-carousel-pagination carousel-pagination"></div>
            </div>
         </section>
      </div>
      <!-- End Latest Properties Section -->
      <!-- ======= Latest News Section ======= -->
      {{-- 
      <section class="section-news section-t8">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title-wrap d-flex justify-content-between">
                     <div class="title-box">
                        <h2 class="title-a">Latest News</h2>
                     </div>
                     <div class="title-link">
                        <a href="blog-grid.html">All News
                        <span class="bi bi-chevron-right"></span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div id="news-carousel" class="swiper-container">
               <div class="swiper-wrapper">
                  <div class="carousel-item-c swiper-slide">
                     <div class="card-box-b card-shadow news-box">
                        <div class="img-box-b">
                           <img src="assets/img/post-2.jpg" alt="" class="img-b img-fluid">
                        </div>
                        <div class="card-overlay">
                           <div class="card-header-b">
                              <div class="card-category-b">
                                 <a href="#" class="category-b">House</a>
                              </div>
                              <div class="card-title-b">
                                 <h2 class="title-2">
                                    <a href="blog-single.html">House is comming
                                    <br> new</a>
                                 </h2>
                              </div>
                              <div class="card-date">
                                 <span class="date-b">18 Sep. 2017</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End carousel item -->
                  <div class="carousel-item-c swiper-slide">
                     <div class="card-box-b card-shadow news-box">
                        <div class="img-box-b">
                           <img src="assets/img/post-5.jpg" alt="" class="img-b img-fluid">
                        </div>
                        <div class="card-overlay">
                           <div class="card-header-b">
                              <div class="card-category-b">
                                 <a href="#" class="category-b">Travel</a>
                              </div>
                              <div class="card-title-b">
                                 <h2 class="title-2">
                                    <a href="blog-single.html">Travel is comming
                                    <br> new</a>
                                 </h2>
                              </div>
                              <div class="card-date">
                                 <span class="date-b">18 Sep. 2017</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End carousel item -->
                  <div class="carousel-item-c swiper-slide">
                     <div class="card-box-b card-shadow news-box">
                        <div class="img-box-b">
                           <img src="assets/img/post-7.jpg" alt="" class="img-b img-fluid">
                        </div>
                        <div class="card-overlay">
                           <div class="card-header-b">
                              <div class="card-category-b">
                                 <a href="#" class="category-b">Park</a>
                              </div>
                              <div class="card-title-b">
                                 <h2 class="title-2">
                                    <a href="blog-single.html">Park is comming
                                    <br> new</a>
                                 </h2>
                              </div>
                              <div class="card-date">
                                 <span class="date-b">18 Sep. 2017</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End carousel item -->
                  <div class="carousel-item-c swiper-slide">
                     <div class="card-box-b card-shadow news-box">
                        <div class="img-box-b">
                           <img src="assets/img/post-3.jpg" alt="" class="img-b img-fluid">
                        </div>
                        <div class="card-overlay">
                           <div class="card-header-b">
                              <div class="card-category-b">
                                 <a href="#" class="category-b">Travel</a>
                              </div>
                              <div class="card-title-b">
                                 <h2 class="title-2">
                                    <a href="#">Travel is comming
                                    <br> new</a>
                                 </h2>
                              </div>
                              <div class="card-date">
                                 <span class="date-b">18 Sep. 2017</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End carousel item -->
               </div>
            </div>
            <div class="news-carousel-pagination carousel-pagination"></div>
         </div>
      </section>
      <!-- End Latest News Section --> --}}
      <!-- ======= Testimonials Section ======= -->
      <section class="section-testimonials section-t8 nav-arrow-a">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title-wrap d-flex justify-content-between">
                     <div class="title-box">
                        <h2 class="title-a">Testimonials</h2>
                     </div>
                  </div>
               </div>
            </div>
            <div id="testimonial-carousel" class="swiper-container">
               <div class="swiper-wrapper">
                  <div class="carousel-item-a swiper-slide">
                     <div class="testimonials-box">
                        <div class="row">
                           <div class="col-sm-12 col-md-6">
                              <div class="testimonial-img">
                                 <img src="assets/img/testimonial-1.jpg" alt="" class="img-fluid">
                              </div>
                           </div>
                           <div class="col-sm-12 col-md-6">
                              <div class="testimonial-ico">
                                 <i class="bi bi-chat-quote-fill"></i>
                              </div>
                              <div class="testimonials-content">
                                 <p class="testimonial-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium
                                    debitis hic ber quibusdam
                                    voluptatibus officia expedita corpori.
                                 </p>
                              </div>
                              <div class="testimonial-author-box">
                                 <img src="assets/img/mini-testimonial-1.jpg" alt="" class="testimonial-avatar">
                                 <h5 class="testimonial-author">Albert & Erika</h5>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End carousel item -->
                  <div class="carousel-item-a swiper-slide">
                     <div class="testimonials-box">
                        <div class="row">
                           <div class="col-sm-12 col-md-6">
                              <div class="testimonial-img">
                                 <img src="assets/img/testimonial-2.jpg" alt="" class="img-fluid">
                              </div>
                           </div>
                           <div class="col-sm-12 col-md-6">
                              <div class="testimonial-ico">
                                 <i class="bi bi-chat-quote-fill"></i>
                              </div>
                              <div class="testimonials-content">
                                 <p class="testimonial-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium
                                    debitis hic ber quibusdam
                                    voluptatibus officia expedita corpori.
                                 </p>
                              </div>
                              <div class="testimonial-author-box">
                                 <img src="assets/img/mini-testimonial-2.jpg" alt="" class="testimonial-avatar">
                                 <h5 class="testimonial-author">Pablo & Emma</h5>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End carousel item -->
               </div>
            </div>
            <div class="testimonial-carousel-pagination carousel-pagination"></div>
         </div>
      </section>
      <!-- End Testimonials Section -->
      <!-- ======= Services Section ======= -->
      <section class="section-services section-t8">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title-wrap d-flex justify-content-center">
                     <div class="title-box ">
                        <h2 class="title-a">Our Services</h2>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card-box-c foo">
               <div class="card-header-c d-flex ">
                  <div class="card-box-ico">
                     <span class="bi bi-calendar4-week"></span>
                  </div>
                  <div class="card-title-c ">
                     <h2 class="title-c p-2">Home-Rent</h2>
                  </div>
               </div>
               <div class="card-body-c">
                  <p class="content-c">
                     Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa,
                     convallis a pellentesque
                     nec, egestas non nisi.
                  </p>
               </div>
               <div class="card-footer-c">
                  <a href="#" class="link-c link-icon">Read more
                  <span class="bi bi-chevron-right"></span>
                  </a>
               </div>
            </div>
            {{-- 
            <div class="col-md-4">
               <div class="card-box-c foo">
                  <div class="card-header-c d-flex">
                     <div class="card-box-ico">
                        <span class="bi bi-calendar4-week"></span>
                     </div>
                     <div class="card-title-c align-self-center">
                        <h2 class="title-c">Rent</h2>
                     </div>
                  </div>
                  <div class="card-body-c">
                     <p class="content-c">
                        Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit. Mauris blandit
                        aliquet elit, eget tincidunt
                        nibh pulvinar a.
                     </p>
                  </div>
                  <div class="card-footer-c">
                     <a href="#" class="link-c link-icon">Read more
                     <span class="bi bi-calendar4-week"></span>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="card-box-c foo">
                  <div class="card-header-c d-flex">
                     <div class="card-box-ico">
                        <span class="bi bi-card-checklist"></span>
                     </div>
                     <div class="card-title-c align-self-center">
                        <h2 class="title-c">Sell</h2>
                     </div>
                  </div>
                  <div class="card-body-c">
                     <p class="content-c">
                        Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa,
                        convallis a pellentesque
                        nec, egestas non nisi.
                     </p>
                  </div>
                  <div class="card-footer-c">
                     <a href="#" class="link-c link-icon">Read more
                     <span class="bi bi-chevron-right"></span>
                     </a>
                  </div>
               </div>
            </div>
            --}}
         </div>
      </section>
      <!-- End Services Section -->
   </main>
   <!-- End #main -->
</div>
@endsection