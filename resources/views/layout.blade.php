<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>eurOpen</title>
    <link rel="stylesheet" href="/css/app.css">

</head>
<body>
    @include('navbar')
    <div class="mb-3 layout container-fluid">
        @yield('content')
    </div>
    @include('footer')

    <script src="/js/app.js"></script>
</body>
</html>