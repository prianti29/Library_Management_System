<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('admin/index.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Login</title>
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
            {{-- <li><a href="{{ url('dasboard') }}">Home</a></li> --}}
            <li><a href="{{ url('login') }}">User Login</a></li>
            <li><a href="{{ url('register') }}">User signup</a></li>
            <li><a href="{{ url('login') }}">admin login</a></li>
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
        <h4>User login form</h4>
        <div class="form-items">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <p>Login Form</p>
                <label for="email" value="{{old('email')}}">Enter Your Email</label> <br />
                <input type="email" id="" name="email" /><br />
                <label for="Password" style="padding-right: 105px;">Password</label> <br />
                <input type="password" id="" name="password" style="margin-bottom: 2px;" />
                @error('password')
                <p style="color: red">{{ $message }}</p>
                @enderror
                <p class="help-block"><a href="" style="color: red">Forgot Password</a></p>
                <button type="submit" name="login" class="btn btn-info"
                    style="padding: 10px 10px 10px 10px; margin-bottom: 50px; margin-top: 10px;">LOGIN </button> | <a
                    href="{{ url('/register') }}">Not Register Yet</a>
            </form>
        </div>
    </div>
    <div class="footer">
        <p>online Library Management</p>
    </div>
</body>

</html>
