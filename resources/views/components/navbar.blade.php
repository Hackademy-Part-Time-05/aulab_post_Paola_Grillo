<nav class="navbar navbar-expand-lg p-0 fixed-top bg-warning">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
       <img class="logo rounded-circle" src=https://th.bing.com/th/id/OIP.CHluVEdMXQd1FfDf7X8VxQHaHa?w=185&h=185&c=7&r=0&o=5&dpr=1.5&pid=1.7 alt="the aulab post">
        
       </a>
      <button class="navbar-toggler button" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 menu">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="http://127.0.0.1:8000/">Home</a>
          </li>
          <li class="nav-item has-children">
            <a class="nav-link" href="{{ route('article.create') }}">Inserisci un articolo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('careers')}}">Lavora con noi</a>
          </li>
          @auth
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Benvenuto/a {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu sub-menu" aria-labelledby="navbarDropdown">
              
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>
              @if(Auth::user()->is_admin)
              <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">Dashboard Admin</a></li>
              @endif
              @if(Auth::user()->is_revisor)
              <li><a class="dropdown-item" href="{{ route('revisor.dashboard') }}">Dashboard del revisore</a></li>
              @endif
              @if(Auth::user()->is_writer)
              <li><a class="dropdown-item" href="{{ route('writer.dashboard') }}">Dashboard del writer</a></li>
              @endif
              <form method="POST" action="{{ route('logout') }}" id="form-logout" class="d-none">
                @csrf
              </form>
            </ul>
          </li>
          @endauth
          @guest
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Benvenuto Ospite
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
              <li><a class="dropdown-item" href="{{ route('login') }}">Accedi</a></li>
            </ul>
          </li>
          @endguest
        </ul>
        <form class="d-flex" method="GET" action="{{ route('article.search') }}">
          @csrf
          {{-- <input class="form-control me-2 opacity-50 border-dark m-2 mb-1" type="search" name="query" placeholder="Cosa stai cercando?" aria-label="Search">
          <button type="submit" class="btn btn-outline-info text-dark border-dark rounded-5 p-1 m-2 mb-1">Cerca</button> --}}
          <div class="search rounded-pill">
            <input type="search" name="query" placeholder="Search">
            <button>
              <i class="fa fa-search"></i>
            </button>
          </div>
        </form>
      </div>
    </div>
  </nav>