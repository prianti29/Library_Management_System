<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
       <link rel="stylesheet" href="{{ asset('admin/index.css') }}">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />

        <title>Index</title>
    </head>
    <body>
        <!-- header -->
        <div class="header" id="home">
            <div class="container">
                <ul class="logo">
                    <div>
                        <i class="fa-solid fa-book-open-reader fa-3x"></i>
                    </div>
                    <div>
                        <h3>
                            online Library <br />
                            Management System
                        </h3>
                    </div>
                </ul>
            </div>
        </div>
        <!-- //header -->

        <!-- Navbar -->
        <nav>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">User Login</a></li>
                <li><a href="#">User signup</a></li>
                <li><a href="#">admin login</a></li>
            </ul>
        </nav>
        <!-- //Navbar -->

        <!-- Body -->
        <div class="body">
            <div class="img">
                <img src="/images/dashboard_image_2.jpg" alt="" />
            </div>
        </div>
            <div class="form">
                <h4>Signup form</h4>
                <div class="form-items">
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                       <p>Signup Form</p>
                        <label for="name">Enter full name</label> <br />
                        <input type="text" id="" name="name" value="{{old('name')}}"/><br />
                        @error('name')
                        <p style="color: red">{{ $message }}</p>
                        @enderror
                        {{-- <label for="number">Mobile number</label> <br />
                        <input type="number" id="" name="" /><br /> --}}
                        <label for="email">Enter Your Email</label> <br />
                        <input type="email" id="" name="email" value="{{old('email')}}"/><br />
                        @error('email')
                        <p style="color: red">{{ $message }}</p>
                        @enderror
                        <label for="Password" style="padding-right: 105px;">Password</label> <br />
                        <input type="password" id="" name="password" style="margin-bottom: 8px;" /> <br>
                        @error('password')
                        <p style="color: red">{{ $message }}</p>
                        @enderror
                        <label for="password_confirmation" style="padding-right: 105px;">Confirm Password</label> <br />
                        <input type="password" id="" name="password_confirmation" style="margin-bottom: 2px;" /> <br>
                        @error('password_confirmation')
                        <p style="color: red">{{ $message }}</p>
                        @enderror
                        <button type="submit" name="login" class="btn btn-info" style="padding: 10px 10px 10px 10px; margin-bottom: 50px; margin-top: 10px;" >Register </button> 
                    </form>
                    
                </div>
            </div>
           
                <div class="footer">
                    <p >online Library Management</p>
                </div>
  
    </body>
</html>
