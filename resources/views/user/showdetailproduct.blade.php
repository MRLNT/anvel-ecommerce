<!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
        <title>Anvel Marketplace</title>
        <style>
          .pading{
            padding-left: 70px;
            font-size: 19px;
          }
        </style>
        <!-- Anvel Bootstrap core CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../core/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet" type="text/css" href="../core/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../core/css/style.css">
        <link rel="shortcut icon" type="image/jpg" href="../core/img/anvel2.png"/>
    
        <!-- Bootstrap core CSS
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
         -->
    
        <!-- Additional CSS Files
        <link rel="stylesheet" href="assets/css/fontawesome.css">
        <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
        <link rel="stylesheet" href="assets/css/owl.css">
         -->
    
      </head>
      <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    {{-- NAVBAR --}}
    <!-- Header -->
<header class="">
  <div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
    <a class="navbar-brand" href="/"><img src="../core/img/anvel2.png" class="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample09">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active pading">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item pading">
          <a class="nav-link" href="">Market</a>
        </li>
        <li class="nav-item pading">
          <a class="nav-link" href="">About</a>
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
    {{-- END NAVBAR --}}

    {{-- CONTENT --}}
  <div class="container">
    <br><br><br>
    <div class="row">
      <div class="col-md-5">
        <div class="card">
          <img src="/productimage/{{ $data->image }}" class="card-img-top" alt="{{ $data->title }}">
          <div class="card-body">
            <h5 class="card-title">Name</h5>
            <p class="card-text">{{ $data->title }}</p>
          </div>
        </div>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-6">
        <h1>Author</h1><br>
        <h5 class="display-6 lh-1 mb-3">{{ $data->title }}</h5>
        <br>
        <h1>Description</h1><br>
        <h5 class="display-6 lh-1 mb-3">{{ $data->description }}</h5>
        <br>
        <h1>Price</h1><br>
        <h5 class="display-6 lh-1 mb-3">{{ $data->price }}</h5>
        <br>
        <h1>Quantity</h1><br>
        <h5 class="display-6 lh-1 mb-3">{{ $data->quantity }}</h5>
        <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <p>SHARE ON </p>&nbsp;&nbsp;
          <a class="fb-ic"><i class="bi bi-whatsapp"></i></a>&nbsp;&nbsp;
          <a class="tw-ic"><i class="bi bi-telegram"></i></a>&nbsp;&nbsp;
          <a class="gplus-ic"><i class="bi bi-discord"></i></a>&nbsp;&nbsp;
          <a class="li-ic"><i class="bi bi-instagram"></i></a>&nbsp;&nbsp;
          <a class="ins-ic"><i class="bi bi-youtube"></i></a>&nbsp;&nbsp;
        </div>
        <br><br>
        <h1 class="card-title pricing-card-title">Minimum Product</h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li><input type="number" value="1" min="1" class="form-control" style="width: 100px;" name="quantity"></li>
        </ul>
        <button type="submit" value="Add Cart" class="btn btn-primary btn btn-lg btn-primary">Add to Cart</button>
          


      </div>
    </div>

    <br><br><br>
    

    
  </div>


    {{-- END CONTENT --}}

@include('user.footer')

<!-- Anvel JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="../core/jquery/jquery-3.4.1.min.js"></script>
<script src="../core/js/bootstrap.js"></script>
<script src="../core/js/about/bootstrap.min.js"></script>
<script src="../core/jquery/about/jquery.viewportchecker.js"></script>
<script src="../core/js/about/bundle.min.js"></script>

<!-- Bootstrap core JavaScript 
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
-->


<!-- Additional Scripts 
<script src="assets/js/custom.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/accordions.js"></script>
-->


<script language = "text/Javascript"> 
  cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
  function clearField(t){                   //declaring the array outside of the
  if(! cleared[t.id]){                      // function makes it static and global
      cleared[t.id] = 1;  // you could use true and false, but that's more typing
      t.value='';         // with more chance of typos
      t.style.color='#fff';
      }
  }
</script>


