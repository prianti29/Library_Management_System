<!-- LOGO -->
<div class="top-nav">
    <div class="logo">
        <img src="/images/logo (1).png" alt="" />
    </div>
    @auth

    <form action="{{ url('/logout') }}" method="POST">
        @csrf
        <div class="btn">
            <div style="font-size: 20px; text-align:center; font-weight:500; font-family:cursive" >
                {{Auth::user()->name}}
            </div>
            
            <button>Log Out</button>
        </div>
    </form>
    @endauth
</div>

{{-- @auth
         {{Auth::user()->name}}
<form action="{{ url('/logout') }}" method="POST">
    @csrf
    <div class="log-btn">
        <p><button class="btn" type="submit">LOG me Out</button></p>
    </div>
</form>
@endauth --}}

{{-- </div>
 </div> --}}
<!-- //header -->
<!-- NAVBAR -->
<div class="nav">
    <div class="navLinks">
        <ul>
            <li><a href="">Dashboard</a></li>
            <li><a href="">Issued Book</a></li>
            <li>
                <div class="dropdown">
                    <button class="dropbtn">Categories</button>
                    <div class="dropdown-content">
                        <a href="#">Add Categories </a>
                        <a href="#">Manage Categories</a>
                    </div>
                </div>
            </li>

            <li> <a href="{{ url('/login') }}">login</a></li>
        </ul>
    </div>
</div>
<!-- header -->
<div class="header">
    <p>Admin Dashboard</p>
</div>
