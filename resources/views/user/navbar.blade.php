<!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded" >
      <a class="navbar-brand" href="/"><img src="core/img/anvel.png" class="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample09">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/market">Market</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>
          </ul>
          <ul class="navbar-nav mr-auto">
              @if (Route::has('login'))
                  @auth
                    <a class="nav-link" href="{{ url('showcart') }}" style="padding-top: 18px;">
                      <i class="fas fa-shopping-cart"></i>
                      Cart[{{ $count }}]</a>


                  <x-app-layout>

                  </x-app-layout>

                  @else
                  <a class="nav-link" href="{{ route('login') }}"><button type="button" class="btn btn-primary">Login</button></a>
                  
                      @if (Route::has('register'))
                  <a class="nav-link" href="{{ route('register') }}"><button type="button" class="btn btn-outline-primary me-2">Sign-up</button></a>
                      @endif
                  @endauth
              @endif
            </ul>

              <form class="form-inline my-2 my-md-0" action="{{ url('search') }}" method="">
                @csrf
                <input class="form-control" type="text" placeholder="Search" aria-label="Search"> &nbsp;&nbsp;<i class="bi bi-search"></i>
              </form>
        
      </div>
    </nav>
  
    @if (session()->has('message'))
      <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert">x</button>
          {{ session()->get('message') }}
      </div>
    @endif
