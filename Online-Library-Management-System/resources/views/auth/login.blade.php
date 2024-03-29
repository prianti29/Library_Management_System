<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="/_admin/index.css" />
        <title>Login</title>
    </head>
    <body>
        <!-- LOGO -->
        <div class="logo">
            <img src="/_admin/images/logo (1).png" alt="Online Library Management" />
        </div>
        <!-- NAVBAR -->
        <div class="nav">
            <div class="navLinks">
                <ul>
                
                    <li><a href="{{ url('login') }}">login</a></li>
                    <li><a href="{{ url('register') }}">signup</a></li>
                </ul>
            </div>
        </div>

        <!-- CAROUSAL -->
        <div class="slideshow-container">
            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="/_admin/images/1.jpg" style="width: 100%" />
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="/_admin/images/2.jpg" style="width: 100%" />
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="/_admin/images/3.jpg" style="width: 100%" />
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br />

        <!-- The dots/circles -->
        <div style="text-align: center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>

        <!-- HEAD -->
        <div class="header">
            <p>login form</p>
        </div>

        <!-- USER LOGIN FORM -->
        <div class="title">
            <p>Login form</p>
        </div>
        <div class="card">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label for="email" value="{{old('email')}}" >Enter Email ID</label> <br>
                <input type="text" id="fname" name="fname"> <br>
                <label for="Password">Password</label><br>
                <input type="text" id="fname" name="fname">
                <a href="">Forgot Password</a> 
                @error('password')
                <p style="color: red">{{ $message }}</p>
                @enderror
                <br>
                
                <button>Submit</button>
                <a
                href="{{ url('/register') }}">| Not Register Yet</a>
            </form>
        </div>

        <div class="footer">
          <p>  © 2022 Online Library Management System</p>
        </div>
    </body>
    <script src="/_admin/script.js"></script>
</html>
