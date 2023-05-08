<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Primi Passi</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300&display=swap" rel="stylesheet">
</head>
<body>
    
    <nav>
        <div class="nav-bar">
            <ul>
                @foreach ($links as $link)
                    <li>
                        <a href="">
                            {{ $link }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </nav>


    <h1>Hello World</h1>



</body>
</html>