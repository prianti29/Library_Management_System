<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- <link rel="stylesheet" href="/Tamplate/CSS/index.css" /> -->
        <link rel="stylesheet" href="{{ asset('admin/userDashboard.css') }} " />
        <link rel="stylesheet" href="{{ asset(' admin/index.css') }}">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <title>User Dashboard</title>
    </head>
    <body>
       @include('site.layouts.menu')
           @yield('contents')
          {{-- <div class="footer">
            <p>online Library Management</p>
        </div> --}}

    </body>
</html>
