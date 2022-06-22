<html lang="en">
<head>
    @include('front.material.header')
    
    <title>@yield('title')</title>
   
</head>
<body>

    <div id="main">
        @include('front.material.navbar')
        @yield('content')
    </div>
    @include('front.material.footer')
</body>
</html>
