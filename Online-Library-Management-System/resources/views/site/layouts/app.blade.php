<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="{{ asset('_admin/userDashboard.css') }}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
        <title>Admin Dashboard</title>
    </head>
    <body>
       @include('site.layouts.menu')
           @yield('contents')
          {{-- <div class="footer">
            <p>online Library Management</p>
        </div> --}}

    </body>
</html>
