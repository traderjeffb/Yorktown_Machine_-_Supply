<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
       // dd($employees);
        return view('employee.index', compact('employees'));
    }

    public function test()
    {
        return view('employee.test');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //dd($request->gender);
        $request->validate([
            'name'=>'required ',
            'address'=> 'required',
            'city'=> 'required',
            'state'=> 'required',
            'zipcode'=> 'required',
            'employment_status' => 'required',
            'gender' => 'required',
        ]);

        $employee= new employee();
        $employee->name = ucfirst($request->get('name'));
        $employee->address = $request->get('address');
        $employee->city = $request->get('city');
        $employee->state = $request->get('state');
        $employee->zipcode = $request->get('zipcode');
        $employee->employment_status = $request->get('employment_status');
        $employee->gender = $request->get('gender');
        $employee->department = $request->get('department');

        $employee->save();
        return redirect('employee.index')->with('success', 'Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function details($id)
    {
            $employee = employee::where('id',"=","$id")->first();
        //dd($employee);
            return view('employee.details',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::where('id','=',$id)->first();
        return view('employee.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //  dd($request->employment_status);
        $employee= employee::where('id',"=", $id)->first();

        $request->validate([
            'name'=>'required ',
            'address'=> 'required',
            'city'=> 'required',
            'state'=> 'required',
            'zipcode'=> 'required',
            'employment_status' => 'required',
            'gender' => 'required',
        ]);

        $employee->name = ucfirst($request['name']);
        $employee->address = $request['address'];
        $employee->city = $request['city'];
        $employee->state = $request['state'];
        $employee->zipcode = $request['zipcode'];
        $employee->employment_status = $request['employment_status'];
        $employee->gender = $request['gender'];

        $employee->save();
        return redirect('employee.index')->with('success', 'Successfully Updated');
    }

    public function delete($id)
    {
        $employee = Employee::where('id','=',$id)->first();
        return view('employee.delete', compact('employee'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        employee::where('id',"=", $id)->delete();

        return redirect('employee.index')->with('danger','Successfully Deleted');

    }
}


