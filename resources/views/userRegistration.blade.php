<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('assets/Signup/fonts/material-icon/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/Signup/vendor/nouislider/nouislider.min.css')}}">
    <!-- Latest compiled and minified CSS -->

<!--4.6-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('assets/Signup/css/style.css')}}">
</head>
<body>

    <div class="main">
       

        <div class="container-fluid">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="{{asset('assets/Signup/images/form-img.png')}}" alt="">
                    <div class="signup-img-content">
                       
                    </div>
                </div>
               
                <div class="signup-form">
                    @if(Session::has('message'))
                    <p class="alert alert-danger" role="alert">{{ Session::get('message') }}</p>
                    @endif
                    
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                        
               
                    <form method="POST" class="register-form" id="register-form" action="{{route('createsign_up')}}" enctype="multipart/form-data"
                    >
                        @csrf
                        <div class="form-row">
                           
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="first_name" class="required">First name</label>
                                    <input type="text" name="first_name" id="first_name" required/>
                                </div>
                                <div class="form-input">
                                    <label for="last_name" class="required">Last name</label>
                                    <input type="text" name="last_name" id="last_name" required/>
                                </div>
                               
                                <div class="form-input">
                                    <label for="email" class="required">Email</label>
                                    <input type="text" name="email" id="email" required />
                                </div>
                                <div class="form-input">
                                    <label for="password" class="required">password</label>
                                    <input type="text" name="password" id="password" required/>
                                </div>
                                <div class="form-input">
                                    <label for="phone_number" class="required">Phone number</label>
                                    <input type="text" name="phone_number" id="phone_number" required />
                                </div>
                                <div class="form-input">
                                    <label for="DOB" class="required">Date of Birth</label>
                                    <input type="date" name="dob" id="dob" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="meal_preference">Any GOVT Id photo</label>
                                       
                                    </div>
                                   
                                    <div >
                                         
                                      
                                        <input type="text" name="mid" required>
                                      
                                        
                                       
                                    </div>
                                    <input type="file" name="idpic" multiple="multiple" required>
                                   <p class="text-info"> this is for trust purpose with you & your home owner<br>you data will be in safe</p>
                                </div>
                                <div class="form-radio">
                                    <div class="label-flex">
                                        <label for="gander">Gander</label>
                                        
                                    </div>
                                    <div class="form-radio-group" >            
                                        <div class="form-radio-item">
                                            <input type="radio" value="male" name="gander" id="cash" checked>
                                            <label for="cash">MALE</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" value="female" name="gander" id="cheque">
                                            <label for="cheque">FIMALE</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" value="others" name="gander" id="demand">
                                            <label for="demand">OTHER</label>
                                            <span class="check"></span>
                                        </div>
                                    </div>
                                </div>
                           
                        <div class="form-submit ">
                            <button type="submit"  class="submit" id="submit" name="submit">submit</button>
                          
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="{{asset('assets/Signup/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/Signup/vendor/nouislider/nouislider.min.js')}}"></script>
    <script src="{{asset('assets/Signup/vendor/wnumb/wNumb.js')}}"></script>
   
    <script src="{{asset('assets/Signup/js/main.js')}}"></script>
</body>
</html>