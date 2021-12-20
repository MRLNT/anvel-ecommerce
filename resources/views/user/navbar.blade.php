<!-- Header -->
<header class="">
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
      <a class="navbar-brand" href="/"><img src="core/img/anvel2.png" class="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample09">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active pading">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item pading">
            <a class="nav-link" href="/market">Market</a>
          </li>
          <li class="nav-item pading">
            <a class="nav-link" href="/about">About</a>
          </li>

          <li class="nav-item pading">
              @if (Route::has('login'))
                  @auth

                  <li class="nav-item pading">
                    <a class="nav-link" href="{{ url('showcart') }}">
                      <i class="fas fa-shopping-cart"></i>
                      Cart[{{ $count }}]</a>
                  </li>

                  <x-app-layout>

                  </x-app-layout>

                  @else
                  <li> <a class="nav-link pading" href="{{ route('login') }}">Log in</a> </li>

                      @if (Route::has('register'))
                      <li> <a class="nav-link pading" href="{{ route('register') }}">Register</a> </li>
                      @endif
                  @endauth
              @endif
            </li>
            <li class="nav-item pading">
              <form class="form-inline" style="float: right; padding:10px;" action="{{ url('search') }}" method="">
                @csrf
                <input class="form-control" type="search" name="search" placeholder="search">
                <input type="submit" value="Search" class="btn btn-success">
              </form>
            </li>
        </ul>
        
        
      </div>
    </nav>
  </div>
  

    @if (session()->has('message'))
      <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert">x</button>
          {{ session()->get('message') }}
      </div>
    @endif


  </header>