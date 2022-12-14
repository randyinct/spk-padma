<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- bootstrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="/css/frontend.css">

    <style>
      *{
        font-family: Arial, Helvetica, sans-serif;
      }

      li.cHover:hover{
        background: #DAE5D0;
        color: red;
      }
    </style>

    

   <title>SPK Padma Hotel</title>

   <link rel = "icon" href = "{{ asset('img/logopadma.png') }}" type = "image/x-icon">
  </head>
  <body>

    @include('frontend.partials.navbar')

      <div class="container mt-3">
    
            @yield('container')          

      </div>

        <div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
      </a>
      <span class="text-muted">&copy; 2022 Randy Aldy Ismail</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-muted" href="https://www.facebook.com/randyinct2" target="_blank"><i class="bi bi-facebook"></i></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-instagram"></i></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-twitter"></i></a></li>
    </ul>
  </footer>
</div>
</html>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>


