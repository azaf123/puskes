<html lang="en">
<head>
    @include('templatedinda.header')
    
    <title>@yield('title')</title>
   
</head>
<body>

    <div class="container-scroller">
        @include('templatedinda.navbar')
    </div>
    <div class="container-fluid page-body-wrapper">
        @include('templatedinda.setting')
        @include('templatedinda.sidebar')
        @yield('content')
    </div>
        
        
        
    </div>
    @include('templatedinda.footer')
</body>
</html>
