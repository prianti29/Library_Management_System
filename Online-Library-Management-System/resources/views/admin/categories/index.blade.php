<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="/_admin/manage.css" />
        <title>Manage</title>
    </head>
    <body>
        <div class="top-nav">
            <div class="logo">
                <img src="/images/logo (1).png" alt="" />
            </div>
            <div class="btn">
                <button>Log Out</button>
            </div>
        </div>

        <!-- NAVBAR -->
        <div class="nav">
            <div class="navLinks">
                <ul>
                    <li> <a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
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
                                <a href="{{ url('admin/author/create') }}">Add Author</a>
                                <a href="{{ url('admin/author') }}">Manage Author</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown">
                            <button class="dropbtn">Books</button>
                            <div class="dropdown-content">
                                <a href="{{ url('admi/books/create') }}">Add Books</a>
                                <a href="{{ url('admin/books') }}">Manage Books</a>
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
        <div class="header">
            <p>Manage Categories</p>
        </div>

        <div class="table">
            <div class="card-title">
                <p>Categories</p>
            </div>
            <div class="pagination">
                <div class="p1" style="float: left">
                    <button class="pagebtn">Pages &laquo;</button>
                    <div class="page-content" style="left: 0">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </div>
                <div class="p1" style="float: right">
                    <form action="">
                        <label for="fname">Submit:</label>
                        <input
                            type="text"
                            id="fname"
                            name="fname"
                        /><br /><br />
                    </form>
                </div>
            </div>
            <table>
                <tr>
                    <th>#</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Creation Date</th>
                    <th>Updation Date</th>
                    <th>Action</th>
                </tr>
                @foreach ($category_list as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->CategoryName }}</td>
                    <td><button class="button button1">{{ $item->Status }}</button></td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                    <td> <a href="{{ url("/admin/categories/$item->id/edit") }}"class="edit">Edit</a>
                        {{-- <a href="" class="delete">Delete</a> --}}
                        <form action="{{ url("/admin/categories/$item->id") }}" method="POST">
                            @csrf
                            @method("delete")
                            <input type="submit" name="" id="" value="Delete" class="delete">
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="footer">
            <p>  © 2022 Online Library Management System</p>
          </div>
    </body>
</html>
