<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <script src="https://kit.fontawesome.com/fb91899bbd.js" crossorigin="anonymous"></script>
</head>
<body>
    <x-header />
    <div class="bg-gray-100 p-3 h-screen">
        @yield('content')
    </div>
</body>
</html>
