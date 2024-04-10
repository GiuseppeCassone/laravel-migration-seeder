<!DOCTYPE html>
<html lang="it" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite('resources/js/app.js')
</head>
<body>

    <div class="container p-5">
        <h1 class="text-center">TRENI IN PARTENZA OGGI</h1>

        @yield('content')
    </div>
    
</body>
</html>