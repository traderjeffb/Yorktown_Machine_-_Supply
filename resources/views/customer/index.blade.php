
@extends('layouts.app')
@section('content')
        <div class="d-flex">
            <h3 class="mx-auto mt-4">Index of All Customer Infomation</h3>
        </div>
        <div class="d-flex justify-content-center">
            <a href= {{ route('customer.create') }}>    <h5>Add a New Customer</h5></a>
        </div>
        <div>
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
    {{-- </div> --}}
    <div class="container">
    <table id="customer" class="table table-bordered yajra-datatable cutomerTable  table-striped rounded table-responsive">
        <thead class="thead-dark">
            <tr class="text-center">
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>City</th>
                <th>State</th>
                <th>Zipcode</th>
                <th>Email</th>
                <th>Customer Rating</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            @foreach($customers as $customer)
            <td class="text-center" >{{ $customer['firstName'] }}</td>
            <td class="text-center" >{{ $customer['lastName'] }}</td>
            <td class="text-center" >{{ $customer['address'] }}</td>
            <td class="text-center" >{{ $customer['city'] }}</td>
            <td class="text-center" >{{ $customer['state'] }}</td>
            <td class="text-center" >{{ $customer['zipcode'] }}</td>
            <td class="text-center" >{{ $customer['email'] }}</td>
            <td class="text-center" >{{ $customer['customerRating'] }}</td>
            <td class="text-center" >
              <a class="" href= "{{ route('customer.details', ['id'=>$customer['id']]) }}"> Details</a>
              <a class="" href= "{{ route('customer.edit', ['id'=>$customer['id']]) }}"> Edit</a>
              <a class="" id="deleteBtn" href= "{{ route('customer.destroy', ['id'=>$customer['id']]) }}" onclick="return confirm('Are you sure you want to delete this item?');"> Delete</a>
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
        $("#customer").dataTable();
      });
</script>