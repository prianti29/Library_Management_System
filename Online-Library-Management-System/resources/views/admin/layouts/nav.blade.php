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

 <!-- Navbar -->`
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

 <h4>Admin Dashboard</h4>
 <!-- //navbar -->
