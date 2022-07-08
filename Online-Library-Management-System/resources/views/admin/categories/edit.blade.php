<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="/Tamplate/CSS/index.css" /> -->
    <link rel="stylesheet" href="/admin/listedbook.css" />
    <link rel="stylesheet" href="/admin/adminDashboard.css">
    <link rel="stylesheet" href="/admin/index.css">
    <link rel="stylesheet" href="/admin/addAuthor.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Update Categories</title>
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
            <form action="{{ url('/logout') }}" method="POST">
                @csrf
                <div class="log-btn">
                    <p><button class="btn" type="submit">LOG me Out</button></p>
                </div>
            </form>
        </div>
    </div>
    <!-- //header -->

    <!-- Navbar -->
    <div class="navbar">
        <a href="{{ url('admin/dashboard') }}">Dashboard</a>
        <a href="#">REG STUDENTS</a>
        <a href="#">CHANGE PASSWORD</a>
        <div class="dropdown">
            <button class="dropbtn">CATEGORIES
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="{{ url('admin/categories/create') }}">Add Categories</a>
                <a href="{{ url('admin/categories') }}">Manage Categories</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">AUTHORS
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="#">Add Authors</a>
                <a href="#">Manage Authors</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">BOOKS
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="#">Add books</a>
                <a href="#">Manage Book</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">ISSUED BOOKS
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="#">Issued New Book</a>
                <a href="#">Manage Issued New Book</a>
            </div>
        </div>
    </div>
    <h4>Update Category</h4>
    <div class="add_author_card">
        <form method="POST" action="{{ url("/admin/categories/$category->id") }}">
            @method("put");
            @csrf
            <div class="add_author_container">
                <h4><b>Category Info</b></h4>
                <label for="">Category name</label><br><br>
                <input type="text" name="name" value="{{ $category->CategoryName }}"> <br>
                {{-- <label for="">Status</label><br><br> --}}

                {{-- <input type="radio" name="status" value="0" {{ ($site->status=="0")? "checked" : "" }}
                style="margin-left: -200px"> <label style="margin-left: -250px">Active</label><br>
                <input type="radio" name="status" value="1" {{ ($site->status=="1")? "checked" : "" }}
                    style="margin-left: -200px"> <label style="margin-left: -250px">Inactive</label><br> --}}

                <div class="add_author_card_btn">
                    <p><button class="add_btn" style="margin-bottom: 80px">Update</button></p>
                </div>
            </div>
        </form>



    </div>
    <!-- //navbar -->
    <div class="footer">
        <p>online Library Management</p>
    </div>
</body>

</html>
