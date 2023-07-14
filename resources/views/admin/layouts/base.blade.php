<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body class="" style="background-color:rgb(170, 16, 47); margin-bottom:0px">
    @include ('admin.includes.header')

    <div class="container_main">
        <main>
            @yield('contents')
        </main>
    </div>

    @include ('admin.includes.footer')
</body>
</html>