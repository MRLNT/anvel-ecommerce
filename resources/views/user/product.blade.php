<br><br><br><br>
<div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Latest Products</h2>
          </div>
        </div>


        @foreach ($data as $product)
    
        <div class="col-md-4">
          <div class="product-item">
            <a href="{{ url('showdetailproduct', $product->id) }}"><img width="286" height="286" src="/productimage/{{ $product->image }}" alt=""></a>
            <div class="down-content">
              <a href="{{ url('showdetailproduct', $product->id) }}"><h4>{{ $product->title }}</h4></a>
              <h6>{{ $product->price }}</h6>
              <p>{{ $product->description }}</p>

              <form action="{{ url('addcart', $product->id) }}" method="POST">
                @csrf
                <input type="number" value="1" min="1" class="form-control" style="width: 100px;" name="quantity">
                <br>
                <input type="submit" value="Add Cart" class="btn btn-primary" >
              </form>
              
            </div>
          </div>
        </div>
        @endforeach

        @if (method_exists($data, 'links'))
          <div class="d-flex justify-content-center">
            {!! $data->links() !!}

          </div>
        @endif

      </div>
    </div>
  </div>