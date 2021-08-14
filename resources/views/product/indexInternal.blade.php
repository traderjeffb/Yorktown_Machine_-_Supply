@extends('layouts.app')

@section('content')

<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<div class="d-flex">
  <h2 class="mx-auto mt-4">ORDER FORM</h2>
</div>
{{-- <div class="d-flex justify-content-center">  <a  href= {{ route('product.createInternal') }}><h5>Add a New Product</h5></a></div> --}}
<div class="d-flex justify-content-center">
</div>
<div>
  @if(Session::has('success'))
  <div class="alert alert-success text-center">
      {{Session::get('success')}}
  </div>
  @elseif(Session::has('danger'))
  <div class="alert alert-danger text-center">
    {{Session::get('danger')}}
  </div> 
@endif
</div>

<div class="container">  
  <button type="button" class="btn btn-primary position-relative p-2 m-3 mb-3">
    <a href="{{ url('cart.cart') }}" class="text-white">View Cart</a>
     <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary visually-hidden">Items: 
       {{-- {{ @if(is_countable(count(session()->get('cart') ))) }} --}}
    </span>
  </button>

  <table id="productInternal" class="table table-bordered table-striped table-hover rounded">
    <thead class="thead-dark">
      <tr class="text-center">
        <th>Add to Order</th>
        <th>Quantity</th>
        <th>Product Name</th>
        <th>Product Number</th>
        <th>Department</th>
        <th>Description</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach($products as $product)
        <form method="POST" action ="{{ url('cart.addToCart')}}">
          @csrf
          <td><button id="addToCart" type = "submit" class="rounded">Add to Order</button> </td>
            <td class="text-center" ><input class="text-center" id="quantity" name="quantity"></td>
            <input type="hidden" name="product_id" id="product_id" value="{{ $product['id']  }}">
        </form>
        
        <td class="text-center" >{{ $product['product_name'] }}</td>
        <td class="text-center" >{{ $product['product_number'] }}</td>
        <td class="text-center" >{{ $product['product_department'] }}</td>
        <td class="text-center" >{{ $product['description'] }}</td>
        <td class="text-center" >{{ $product['price'] }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div> 
</div>   
{{-- <script>
  $("#quantity").on("change paste keyup", function() {
   alert($(this).val()); 
});
</script> --}}
@endsection


