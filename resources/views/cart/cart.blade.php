@extends('layouts.app')

@section('content')


<div class="d-flex">
  <h3 class="mx-auto mt-4">Cart Items</h3>
</div>
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
  <button type="button" class="btn btn-primary position-relative  ts-2 px-4 mx-3 mb-3">
    <a class="text-decoration-none text-white" href="{{ url('product.indexInternal') }}" class="text-white">Back</a>
  </button>
  <table id="sales" class="table table-bordered table-striped rounded ">
    <thead class="thead-dark">
      <tr class="text-center">
        <th>Quanity</th> 
        <th>Product Name</th>
        <th>Product Number</th>
        <th>Department</th>
        <th>Description</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @if(session('cart'))
        @foreach((session('cart')) as $product)

        <?php 
        $total = 0;
        $quanity =2;
        $total += $product['price'] * $quanity 
        
        ?>
        {{-- @empty($cart)? '$total="your Cart is empty" ' : '' ?> --}}
            
        {{-- @endempty --}}
          <td><input class="text-center" name="quanity" type="number" value="1" style="width: 5em;"></td>
          <td class="text-center">{{ $product['product_name'] }}</td>
          <td class="text-center" >{{ $product['product_number'] }}</td>
          <td class="text-center" >{{ $product['product_department'] }}</td>
          <td class="text-center" >{{ $product['description'] }}</td>
          <td class="text-center" >{{ $product['price'] }}</td>
      </tr>
      @endforeach
      @endif
    </tbody>
  </table>
  <?php $total = 0; ?>
  <h3>Total of your order is ${{ $total }}</h3><br>
  <h4>Your order number is: </h4>
  <button class="btn-lg rounded"><a href="{{ url('sale.sale') }}">Complete Order</button>
</div> 
</div>   
@endsection

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- DATATABLE -->
<script type="text/JavaScript" src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script type="text/JavaScript" src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

<script>
$(document).ready(function() {
        $("#sales").dataTable();
      });
</script>

