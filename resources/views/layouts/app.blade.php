<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Todo</title>
</head>
<body>
    <div class="container">
        @include('inc.navbar')
        @yield('content')
    </div>
    <footer id="footer" class="text-center">
        <p>Copyright  &copy; 2020 Todo</p>
    </footer>
    
    <script src="/js/app.js"></script>
</body>
</html>