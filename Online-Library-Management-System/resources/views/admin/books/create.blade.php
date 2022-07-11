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
    <link rel="stylesheet" href="/admin/addBook.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Add Author</title>
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
                <a href="{{ url('admin.author.create') }}">Add Authors</a>
                <a href="{{ url('admin/author') }}">Manage Author</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">BOOKS
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="{{ url('/admin/books/create') }}">Add books</a>
                <a href="{{ url('/admin/books') }}">Manage Book</a>
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
    <h4>Add Book</h4>
    <div class="add_author_card">
        <form method="POST" action="{{ route('books.store') }}">
            @csrf
            <div class="add_author_container">
                <h4><b>Book Info</b></h4>
                <label for="">Book name </label><br><br>
                <input type="text" name="name" value="{{old('name')}}">
                <div class="book-dropdown">
                    <p class="book-dropbtn">Categories
                    </p>
                    <div class="book-dropdown-content">
                        <select name="Category_Id">
                            @foreach ($category_list as $item)
                            <option value="{{ $item->id }}"> {{$item->CategoryName}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="book-dropdown">
                    <p class="book-dropbtn">Author
                    </p>
                    <div class="book-dropdown-content">
                        <select name="Author_Id">
                            @foreach ($author_list as $item)
                            <option value="{{ $item->id }}">
                                {{$item->AuthorName}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <label for="">Price </label><br><br>
                <input type="number" name="price" value="{{old('price')}}">
                <label for="">ISBN Number </label><br><br>
                <input type="number" name="number" value="{{old('number')}}">
                <p style="color: rgb(82, 96, 82); font-size: 16px; margin-left: 35px; margin-bottom: 10px;">An ISBN is
                    an International Standard Book Number.ISBN Must be unique</p>
                <label for="">Book Picture </label><br><br>
                <input type="file" name="picture" value="{{old('picture')}}">

                <div class="add_author_card_btn">
                    <p><button class="book-add_btn">Add</button></p>
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
