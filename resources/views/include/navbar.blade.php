<nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm">
  <div class="container">
      <a class="navbar-brand text-light" href="{{ url('/') }}">
          {{ config('app.name', 'Laravel') }}
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="dropdown">
        <button class="btn btn-dark btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Database List
        </button>
        <ul role="menu" class="dropdown-menu">
          <li><a class="dropdown-item" href="/database-1">Database-1</a></li>
          <li><a class="dropdown-item" href="/database-2">Database-2</a></li>
          <li><a class="dropdown-item" href="/database-3">Database-3</a></li>
          <li><a class="dropdown-item" href="/database-4">Database-4</a></li>
          <li><a class="dropdown-item" href="/database-5">Database-5</a></li>
          <li><a class="dropdown-item" href="/database-6">Database-6</a></li>
          <li><a class="dropdown-item" href="/database-7">Database-7</a></li>
          <li><a class="dropdown-item" href="/database-8">Database-8</a></li>
        </.>
      </div>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav me-auto">
            
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ms-auto">
              <!-- Authentication Links -->
              @guest
                  @if (Route::has('login'))
                      <li class="nav-item">
                          <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                  @endif

                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }}
                      </a>

                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
          </ul>
      </div>
  </div>
</nav>