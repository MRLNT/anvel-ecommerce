@extends('user.base')

  <body>

    
    @include('user.navbar')
    <div style="padding-top: 68px;">
      <p></p>
    </div>
    <!-- Page Content -->
    @include('user.banner')
    
    @include('user.product')
    
    @include('user.category')



    
    
    <br><br><br><br>
    @include('user.footer')
  </body>

</html>