


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="{{ route('homepage') }}">
        <img src="/img/logopadma.png" alt="padma logo" width="150" height="40">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">

    <ul class="navbar-nav">

    <li class="nav-item cHover">
        <a class="nav-link  {{ Request::RouteIs('homepage') ? 'active' : ''  }}" aria-current="page" href="{{ route('homepage') }}"><i class="bi bi-house-door"> </i>Home</a>
        </li>
    </ul>


    {{-- AUNTENTIKASI MENU ANTARA SUDAH LOGIN ATAU TIDAK --}}
    
    <ul class="navbar-nav ms-auto">
    @auth
     <li class="nav-item dropdown cHover">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome back, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ route('dashboard') }}"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            {{-- tombol logout --}}
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button class="dropdown-item" type="submit"><i class="bi bi-box-arrow-left"></i> Logout</button>
            </form>
          </ul>
        </li>
    @else
      <li class="nav-item cHover">
        <a class="nav-link {{ Request::RouteIs('login') ? 'active' : ''  }}" href="{{ route('login') }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
      </li>
      
      @endauth
    </ul>

      </div>
    </div>
  </nav>

  

