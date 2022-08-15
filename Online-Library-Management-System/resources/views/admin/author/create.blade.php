<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/_admin/adding.css">
    <title>Add Author</title>
</head>

<body>
    <!-- header -->
    {{-- <div class="header" id="home">
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
            <form action="{{ url('/logout') }}" method="POST">
    @csrf
    <div class="log-btn">
        <p><button class="btn" type="submit">LOG me Out</button></p>
    </div>
    </form>
    </div>
    </div> --}}
    <!-- LOGO -->
    <div class="top-nav">
        <div class="logo">
            <img src="/images/logo (1).png" alt="" />
        </div>
        <form action="{{ url('/logout') }}" method="POST">
            @csrf
            <div class="btn">
                <button>Log Out</button>
            </div>
        </form>
    </div>
    <!-- //header -->
  
      <div class="nav">
        <div class="navLinks">
            <ul>
                <li><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                <li><a href="">Reg Students</a></li>
                <li><a href="">Change Password</a></li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn">Categories</button>
                        <div class="dropdown-content">
                            <a href="{{ url('admin/categories/create') }}">Add Categories </a>
                            <a href="{{ url('admin/categories') }}">Manage Categories</a>
                           
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn">Author</button>
                        <div class="dropdown-content">
                            <a href="{{ url('admin.author.create') }}">Add Author</a>
                            <a href="{{ url('admin/author') }}">Manage Author</a>   
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn">Books</button>
                        <div class="dropdown-content">
                            <a href="{{ url('/admin/books/create') }}">Add Books</a>
                            <a href="{{ url('/admin/books') }}">Manage Books</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn">Issued Books</button>
                        <div class="dropdown-content">
                            <a href="#">Issued New Book</a>
                            <a href="#">Manage Issued Book</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

      <!-- header -->
      <div class="header">
        <p>Author</p>
    </div>

    <!-- Adding Photo -->
  
    <div class="title">
        <p>Author Info</p>
    </div>
    <div class="card">
        <form method="POST" action="{{ route('author.store') }}">
            @csrf
            <label for="fname">Author Name</label> <br />
            <input type="text" id="fname" name="name" value="{{old('name')}}" /> <br />
            {{-- <label for="fname">ISBN Number or Book Title</label><br />
            <input type="text" id="fname" name="fname" /> --}}
          
            <button>Add</button>
        </form>
    </div>
    <!-- //navbar -->
    <div class="footer">
        <p>online Library Management</p>
    </div>
</body>

</html>
