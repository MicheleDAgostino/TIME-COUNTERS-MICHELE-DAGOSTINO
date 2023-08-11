<nav id="navbar" class="navbar navbar-expand-lg fixed-top">
    <div id="navContainer" class="container-fluid my-3">
      <a id="navbarTitle" class="navbar-title" href="#">Time Counters</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse me-5" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active text-white text-uppercase" aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white text-uppercase" href="{{route('product.store')}}">Products</a>
          </li>

          @if(Route::currentRouteName() == 'homepage')
            <li class="nav-item">
              <a class="nav-link active text-white text-uppercase" href="#form">Enter products/review</a>
            </li>
          @endif

          @guest
            <li class="nav-item">
              <a class="nav-link active text-white text-uppercase" href="{{route('register')}}">Registrati</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active text-white text-uppercase" href="{{route('login')}}">login</a>
            </li> 
          @endguest

          @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Benvenuto {{Auth::user()->name}}
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();document.querySelector('#logout-form').submit();">Logout</a></li>
                <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">@csrf</form>
              </ul>
            </li> 
          @endauth
        </ul>
      </div>
    </div>
  </nav>