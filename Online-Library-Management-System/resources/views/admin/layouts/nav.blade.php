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
            <li><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
            <li><a href="">Reg Students</a></li>
            <li><a href="">Change Password</a></li>
            <li>
                <div class="dropdown">
                    <button class="dropbtn">Categories</button>
                    <div class="dropdown-content">
                        <a href="{{ url('admin/categories/create') }}">Add Categories</a>
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
                        <a href="{{ url('admin/books/create') }}">Add Books</a>
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

<!-- header -->
<div class="header">
    <p>Admin Dashboard</p>
</div>
