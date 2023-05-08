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
<body style="background-color: #212529">
    
    <nav>
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href="#">
                    <img class="rounded-circle" src="{{ asset('img/dev.png') }}" alt="" style="width:50px">
                </a> 
            </div>
    
            <div class="nav-bar">
                <ul class="mb-0 p-0">
    
                    @foreach($links as $link)
                        <li>
                            <a href="{{ route($link) }}">
                                {{$link}}
                            </a>
                        </li>
                    @endforeach
    
                </ul>
            </div>
        </div>
    </nav>


    <h1>Hello World</h1>

    <div class="fixed-bottom purple py-3 text-light shadow bg-body-success">
        <footer class="py-1 container shadow bg-body-success">
          <div class="row">
            <div class="col-6 col-md-2 mb-3">
              <h5>Section 1</h5>
              <ul class="nav flex-column justify-content-start align-items-start">
                @foreach ($sectionLinks as $singleLink)
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">  {{ $singleLink }} </a></li>
                @endforeach
              </ul>
            </div>
      
            <div class="col-6 col-md-2 mb-3">
              <h5>Section 2</h5>
              <ul class="nav flex-column justify-content-start align-items-start">
                @foreach ($sectionLinks as $singleLink)
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">  {{ $singleLink }} </a></li>
                @endforeach
              </ul>
            </div>
      
            <div class="col-6 col-md-2 mb-3">
              <h5>Section 3</h5>
              <ul class="nav flex-column justify-content-start align-items-start">
                @foreach ($sectionLinks as $singleLink)
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">  {{ $singleLink }} </a></li>
                @endforeach
              </ul>
            </div>
      
            <div class="col-md-5 offset-md-1 mb-3">
              <form>
                <h5>Subscribe to our newsletter</h5>
                <p>Monthly digest of what's new and exciting from us.</p>
                <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                  <label for="newsletter1" class="visually-hidden">Email address</label>
                  <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                  <button class="btn btn-primary" type="button">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
      
          <div class="d-flex flex-column flex-sm-row justify-content-between py-4  border-top">
            <p>&copy; 2022 Company, Inc. All rights reserved.</p>
            <ul class="list-unstyled d-flex justify-content-start align-items-start">
              <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
              <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
              <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
            </ul>
          </div>
        </footer>
      </div>



</body>
</html>