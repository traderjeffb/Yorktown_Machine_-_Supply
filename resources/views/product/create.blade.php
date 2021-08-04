
@extends('layouts.app')

@section('content')
<div class="">
  <div class="d-flex">
    <h3 class="mx-auto mt-4">New Product Infomation</h3>
  </div>
  <div class="form d-flex ms-2">
    <form class="form-group form-control-md col-md-4 border p-1  mx-auto  bg-light font-weight-bold "  action="{{ url('product.storeInternal') }}" method="post" id="add-product-form">
      @csrf
            <label for="product_name" class="ml-md-2" >Product Name</label>
            <input class="input-group" name="product_name" required><br>

            <label for="product_number" class="ml-md-2" >Product Number</label>
            <input class="input-group" name="product_number" required><br>

            <label for="description"  class="ml-md-2">Description</label>
            <input  class="input-group" type="text" name="description"><br>

            <label for="price"  class="ml-md-2">Price</label>
            <input  class="input-group" type="number" min="1" step="any" name="price" required><br>
            <label for="product_department">Department:</label>
            <select id="product_department" name="product_department">
              <option value="">--Please Make a Selection--</option>
              <option value="machines">Machines</option>
              <option value="supplies">Suppies</option>
              <option value="maintenance">Maintenance</option>
              <option value="support">Customer Support</option>
            </select>
            <button class= "m-2 rounded float-right" type="submit">Submit</button>
    </form>
  </div>   
</div>
@endsection
