<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/_admin/adding.css">
    <title>Update Categories</title>
</head>

<body>
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

    <!-- NAVBAR -->
    <div class="nav">
        <div class="navLinks">
            <ul>
                <li> <a href="{{ url('admin/dashboard') }}" Dashboard</a> </li> <li><a href="">Reg Students</a></li>
                <li><a href="">Change Password</a></li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn">Categories</button>
                        <div class="dropdown-content">
                            <a href="{{ url('admin/categories/create') }}">Add Categories </a>
                            <a href="{{ url('admin/categories') }}"> Manage Categories</a>

                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn">Author</button>
                        <div class="dropdown-content">
                            <a href="#">Add Author</a>
                            <a href="#">Manage Author</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn">Books</button>
                        <div class="dropdown-content">
                            <a href="#">Add Books</a>
                            <a href="#">Manage Books</a>
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
        <p>Update Category</p>
    </div>


    <!-- Adding Photo -->
    <!-- USER LOGIN FORM -->
    <div class="title">
        <p>Category Info</p>
    </div>
    <div class="card">
        <form  method="POST" action="{{ url("/admin/categories/$category->id") }}">
            @method("put")
            @csrf
            <label for="fname">Category Name</label> <br>
            <input type="text" name="name" value="{{ $category->CategoryName }}"> <br>
            {{-- <label for="fname">Status</label><br>
            <input type="text" id="fname" name="fname"> --}}
            <button>Update</button>
        </form>
    </div>
    <div class="footer">
        <p> © 2022 Online Library Management System</p>
    </div>
</body>

</html>
