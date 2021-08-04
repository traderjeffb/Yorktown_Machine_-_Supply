
@extends('layouts.app')

@section('content')
<div class="">
  <div class="d-flex">
    <h3 class="mx-auto mt-4">New Customer Infomation</h3>
  </div>
  <div class="form d-flex ms-2">
    <form class="form-group form-control-md col-md-4 border p-1  mx-auto  bg-light font-weight-bold "  action="{{ url('customer.store') }}" method="post" id="">
      @csrf
            <label for="firstName" class="ml-md-2" >First Name</label>
            <input class="input-group" name="firstName" required><br>

            <label for="lastName" class="ml-md-2" >Last Name</label>
            <input class="input-group" name="lastName" required><br>

            <label for="address" class="ml-md-2">Address</label>
            <input class="input-group" type="text"  name="address" required><br>

            <label for="city" class="ml-md-2">City</label>
            <input  class="input-group" name="city" required><br>

            <label for="state" class="ml-md-2">State</label>
            <input  class="input-group" name="state" required><br>

            <label for="zipcode" class="ml-md-2">Zipcode</label>
            <input  class="input-group" name="zipcode" required><br>

            <label for="email" class="ml-md-2" >Email</label>
            <input class="input-group" type="email" name="email" required><br>

            <label for="customerRating" class="ml-md-2" >Customer Rating</label>
            <input class="input-group" type="number"  name="customerRating" required><br>
            {{--  </div>  --}}
            <button class= "m-2 rounded" type="submit">Submit</button>
    </form>
  </div>   
</div>
@endsection
