<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Example - @yield('pagetitle')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')
</head>
<body>
    
    <div class="crudexample">
        <div class="header">
            <div class="page-heading">
                @if (isset($returnTo))
                <a href="{{ route($returnTo) }}"><x-icons.arrow-right/></a>
                @endif
                <h1 class="page-title">@yield('pagetitle')</h1>
            </div>
            <div class="header-option">@yield('header-option')</div>
        </div>
    
        <div class="content">
            @yield('content')
        </div>
    </div>

</body>
</html>