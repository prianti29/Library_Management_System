<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="{{ asset('_admin/adminDashboard.css') }}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
        <title>Admin Dashboard</title>
    </head>
    <body>
       @include('admin.layouts.nav')
           @yield('contents')
           <div class="footer">
            <p>  © 2022 Online Library Management System</p>
          </div>
    </body>
</html>
