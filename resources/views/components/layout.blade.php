<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- Font Awesome Icone-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    </head>
    <body>
         {{--  bg di prova --}}
    <div class="vh-100 text-center py-5" style="background-color:#20282c">
        <div>
            {{$slot}}
        </div>
    </body>
</html>