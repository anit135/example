<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My blog')</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-4 text-center">@yield('title', 'My blog')</h1>
        @yield('content')
    </div>
    <script src="/js/bootstrap.min.js"></script>
</body>
</html>