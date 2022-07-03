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
         
         @auth
         {{Auth::user()->name}}
         <form action="{{ url('/logout') }}" method="POST">
             @csrf
             <div class="log-btn">
                 <p><button class="btn" type="submit">LOG me Out</button></p>
             </div>
         </form>
         @endauth

     </div>
 </div>
 <!-- //header -->

 <!-- Navbar -->`
 <div class="navbar">
     <a href="#">Dashboard</a>
     {{-- <a href="#">REG STUDENTS</a> --}}
     <a href="#">Issued Book</a>
     <a href="{{ url('/login') }}">login</a>
     <div class="dropdown">
         <button class="dropbtn">Account
             <i class="fa fa-caret-down"></i>
         </button>
         <div class="dropdown-content">
             <a href="#">My Profile</a>
             <a href="#">Change Password</a>
         </div>
     </div>

 </div>

 <h4>User Dashboard</h4>
 <!-- //navbar -->
