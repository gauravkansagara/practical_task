<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Project</title>
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}" />
    @stack('style')    
</head>

<body>
    <div class="container">
        @include('includes.header')
        @yield('content')
    </div>
    <script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>
    @stack('script')
</body>

</html>