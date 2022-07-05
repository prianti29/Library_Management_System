<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width= , initial-scale=1.0" />
        <link rel="stylesheet" href="/admin/adminDashboard.css" />
        <link rel="stylesheet" href="/admin/index.css" />
        <link rel="stylesheet" href="/admin/Adding.css" />
        <link rel="stylesheet" href="/admin/manageAuthor.css" />
        <link rel="stylesheet" href="/admin/manageCategories.css">

        <title>Manage Categories</title>
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
                <div class="log-btn">
                    <p><button class="btn">LOG me Out</button></p>
                </div>
            </div>
        </div>
        <!-- //header -->
        <!-- Navbar -->
        <div class="navbar">
            <a href="#">Dashboard</a>
            <a href="#">REG STUDENTS</a>
            <a href="#">CHANGE PASSWORD</a>
            <div class="dropdown">
                <button class="dropbtn">
                    CATEGORIES
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="#">Add Categories</a>
                    <a href="#">Manage Categories</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">
                    AUTHORS
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="#">Add Authors</a>
                    <a href="#">Manage Authors</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">
                    BOOKS
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="#">Add books</a>
                    <a href="#">Manage Book</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">
                    ISSUED BOOKS
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="#">Issued New Book</a>
                    <a href="#">Manage Issued New Book</a>
                </div>
            </div>
        </div>
        <h4>Manage Author</h4>

        <!-- Table -->
        <h1>Categories Categories</h1>

        <!-- Pagination -->
        <form action="" class="select_box">
            <label for="">records per page
                :</label>
            <select name="" id="">
              <option value="">10</option>
              <option value="">20</option>
              <option value="">30</option>
              <option value="">40</option>
            </select>
            <br><br>
          </form>

          <form action="" class="search_menu">
            <input type="" placeholder="Search.." name="search">
            <button type="submit">Submit</button>
          </form>

        <table id="customers">
            <tr>
                <th>#</th>
                <th>Categories</th>
                <th>Status</th>
                <th>Creation Date</th>
                <th>Updation Date</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Maria Anders</td>
                <td><button class="button button1">Active</button></td>
                <td>#</td>
                <td>#</td>
                <td>
                    <button class="button button2">Edit</button>
                    <button class="button button3">Detete</button>
                </td>
            </tr>
        </table>

        <!-- Pagination -->
        <div class="pagination">
            <a href="#">&laquo;</a>
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">&raquo;</a>
          </div>
               <!-- Pagination -->
        


        <!-- //footer -->
        <div class="footer">
            <p>online Library Management</p>
        </div>
    </body>
</html>
