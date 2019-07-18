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

    <div class="container-fluid home d-flex justify-content-center align-items-center">

        @include('navbar')
       
        <div class="search text-center">
            <img src="/img/logo.png" class="img-fluid" alt="eurOpen">
            <p>An easy way to find your new home in Europe!</p>
            <div class="d-flex justify-content-center"><a href="/listing" class="button">Browse Listings</a></div>
        </div>
        
    </div>

    @include('search')
    @include('footer')

</body>
</html>