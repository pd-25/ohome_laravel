@extends('userMainlayout')
@section('title','Home page')
    
@section('content')

<main id="main">
    @if(Session::has('message'))
    <p class="alert alert-danger" role="alert">{{ Session::get('message') }}</p>
    @endif
      <!-- ======= Intro Single ======= -->
      <section class="intro-single">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-8">
              <div class="title-single-box">
                <h1 class="title-single">Our Amazing Properties</h1>
                <span class="color-text-a">Grid Properties</span>
              </div>
            </div>
            <div class="col-md-12 col-lg-4">
              <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="#">Home</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Properties Grid
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section><!-- End Intro Single-->
      
      <!-- ======= Property Grid ======= -->
      <section class="property-grid grid">
        <div class="container">
          <div class="row">
            
            @foreach ($myRooms as $room)
                
            
            <div class="col-md-4 col-sm-6">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="userIdImage/{{$room->room_image}}" alt="" height="800px" width="600px" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="#">{{$room->address}}
                         
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">rent | {{$room->rent_price}}</span>
                      </div>
                      <button class="btn mt-10 btn-outline-success "><a href="{{route('checkout.credit-card')}}" class="link-a">book room
                        <span class="bi bi-chevron-right"></span>
                      </a></button> 
                      <button class="btn mt-10 btn-outline-success "><a href="{{route('edit_Myroom', $room->id)}}" class="link-a">Edit Room
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </button> 
                  </div>
                      
                        
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        
                        <li>
                          <h4 class="card-info-title">Beds</h4>
                          <span>{{$room->bed}}</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Baths</h4>
                          <span>{{$room->bathroom}}</span>
                        </li>
                       
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            
          </div>

         
          
        </div>
      </section><!-- End Property Grid Single-->
  
    </main><!-- End #main -->


@endsection