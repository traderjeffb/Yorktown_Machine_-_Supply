@extends('layouts.app')

@section('content')


<div class="d-flex">
  <h3 class="mx-auto mt-4">Index of All Product Infomation</h3>
</div>
<div class="d-flex justify-content-center">  <a  href= {{ route('product.createInternal') }}><h5>Add a New Product</h5></a></div>
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
  <table id="productInternal" class="table table-bordered table-striped rounded">
    <thead class="thead-dark">
      <tr class="text-center">
        <th>Product Name</th>
        <th>Product Number</th>
        <th>Department</th>
        <th>Description</th>
        <th>Price</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach($products as $product)
        <td class="text-center" >{{ $product['product_name'] }}</td>
        <td class="text-center" >{{ $product['product_number'] }}</td>
        <td class="text-center" >{{ $product['product_department'] }}</td>
        <td class="text-center" >{{ $product['description'] }}</td>
        <td class="text-center" >{{ $product['price'] }}</td>
        <td class="text-center" >
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
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
        $("#productInternal").dataTable();
      });
</script>

