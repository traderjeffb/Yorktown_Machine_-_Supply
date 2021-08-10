{{-- 
@extends('layouts.app')
@section('content')
<div class="">
  <div class="d-flex">
    <h3 class="mx-auto mt-4">Employee Infomation</h3>
  </div>
  <div class="form d-flex ms-2">
    <form class="form-group form-control-md col-md-4 border p-1  mx-auto  bg-light font-weight-bold "  action="{{ url('employee.store') }}" method="post" id="add-employee-form">
      @csrf
            <label for="name" class="ml-md-2" >Name</label>
            <input class="input-group" name="name" required><br>
            <label for="address" class="ml-md-2">Address</label>
            <input class="input-group"  name="address" required><br>
            <label for="city" class="ml-md-2">City</label>
            <input  class="input-group" name="city" required><br>
            <label for="state" class="ml-md-2">State</label>
            <input  class="input-group" name="state" required><br>
            <label for="zipcode" class="ml-md-2">Zipcode</label>
            <input  class="input-group" name="zipcode" required>

            <input type="radio" id="fullTime" name="employment_status" value="fullTime">
            <label for="fullTime">Full Time</label><br>
            <input type="radio" id="partTime" name="employment_status" value="partTime">
            <label for="partTime">Part Time</label><br>
            <input type="radio" id="tempHelp" name="employment_status" value="tempHelp">
            <label for="tempHelp">Temporary Help</label><br>
            <div>
              <label for="gender">Gender:</label>
              <select id="gender" name="gender">
                <option value="">--Please Make a Selection--</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
                <option value="other">Prefer not to say</option>
              </select>
            </div>
            <label for="department">Department:</label>
            <select id="department" name="department">
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
@endsection --}}







@extends('layouts.app')

@section('content')
<div class="d-flex">  
  <h3 class="mx-auto mt-4" >Details : {{ $employee['name'] }} </h3>
</div>
  <div class=" container d-flex">
    <form class="form-group form-control-md col-md-4 border p-1  mx-auto  
      bg-light font-weight-bold" id="add-employee-form">
      @csrf
            <label for="name" class="ml-md-2" >Name</label>
            <input class="input-group" name="name" value="{{ $employee['name'] }}" readonly><br>
            <label for="address" class="ml-md-2">Address</label>
            <input class="input-group"  name="address" value="{{ $employee['address'] }}" readonly><br>
            <label for="city" class="ml-md-2">City</label>
            <input  class="input-group" name="city" value="{{ $employee['city'] }}" readonly><br>
            <label for="state" class="ml-md-2">State</label>
            <input  class="input-group" name="state" value="{{ $employee['state'] }}" readonly><br>
            <label for="zipcode" class="ml-md-2">Zipcode</label>
            <input  class="input-group" name="zipcode" value="{{ $employee['zipcode'] }}"readonly>

            <label for="employment_status">Employment Status:</label><br>
              <input type="radio" id="fullTime" name="employment_status" value="fullTime" {{ ($employee['employment_status']=="fullTime")? "checked" : "" }}>
              <label for="fullTime">Full Time</label><br>
              
              <input type="radio" id="partTime" name="employment_status" value="partTime" {{ ($employee['employment_status']=="partTime")? "checked" : "" }}
              >
              <label for="partTime">Part Time</label><br>
  
              <input type="radio" id="tempHelp" name="employment_status" value="tempHelp" {{ ($employee['employment_status']=="tempHelp")? "checked" : "" }}>
              <label for="tempHelp">Temporary Help</label><br>

              <div>
                <label for="gender">Gender:</label>
                <select id="gender" name="gender">
                  <option value="">--Please Make a Selection--</option>
                  <option value="male" {{ ($employee['gender']=="male")? "selected" : "" }}>Male</option>
                  <option value="female" {{ ($employee['gender']=="female")? "selected" : "" }}>Female</option>
                  <option value="other" {{ ($employee['gender']=="other")? "selected" : "" }}>Other</option>
                </select>
              </div>
            <button class= "m-2 rounded"><a class="nav-item nav-link active font-weight-bold" href= {{ route('employee.index') }}>Back</a></button>
    </form>
  </div>   
</div>
@endsection

