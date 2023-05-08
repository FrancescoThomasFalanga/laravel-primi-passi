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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    
    <nav>
        <div class="nav-bar">
            <ul class="mb-0 p-0">

                <li>
                    <a href=" {{route('homepage')}} ">
                        Home
                    </a>
                </li>

                <li>
                    <a href=" {{route('news')}} ">
                        News
                    </a>
                </li>

                <li>
                    <a href=" {{route('contact')}} ">
                        Contact
                    </a>
                </li>

                <li>
                    <a href=" {{route('about')}} ">
                        About
                    </a>
                </li>

            </ul>
        </div>
    </nav>

    <h1 class="position-relative text-center mt-5">Contatti</h1>


    <div class="text-center container-md mt-5">
        <table class="table pt-5">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">LastName</th>
                <th scope="col">Age</th>
                <th scope="col">Address</th>
              </tr>
            </thead>
    
            <tbody>
    
                @foreach($contacts as $contact)
    
                    <tr>
                        <td>{{$contact->name}}</th>
                        <td>{{$contact->lastName}}</td>
                        <td>{{$contact->age}}</th>
                        <td>{{$contact->address}}</td>
                    </tr>
    
                @endforeach
    
            </tbody>
          </table>
    </div>

</body>
</html>