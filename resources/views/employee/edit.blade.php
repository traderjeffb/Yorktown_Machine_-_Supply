
@extends('layouts.app');
@section('content')

<div class="d-flex">  
  <h3 class="mx-auto mt-4" >Editing : {{ $employee['name'] }} </h3>
</div>
  <div class=" container d-flex">
    <form class="form-group form-control-md col-md-4 border p-1  mx-auto  bg-light font-weight-bold "  action="{{ url('employee.update/'.$employee['id'])}}"  method="post" id="add-employee-form">
      @csrf
            <label for="name" class="ml-md-2" >Name</label>
            <input class="input-group" name="name" value={{ $employee['name'] }} required><br>
            <label for="address" class="ml-md-2">Address</label>
            <input class="input-group"  name="address" value={{ $employee['address'] }} required><br>
            <label for="city" class="ml-md-2">City</label>
            <input  class="input-group" name="city" value={{ $employee['city'] }} required><br>
            <label for="state" class="ml-md-2">State</label>
            <input  class="input-group" name="state" value={{ $employee['state'] }} required><br>
            <label for="zipcode" class="ml-md-2">Zipcode</label>
            <input  class="input-group" name="zipcode" value={{ $employee['zipcode'] }} required>
            
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
            <button class= "m-2 rounded" type="submit">Submit</button>
    </form>
  </div>   
</div>
@endsection