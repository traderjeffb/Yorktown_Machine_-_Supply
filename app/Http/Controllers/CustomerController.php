<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    <?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use DataTables;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
         //dd($customers);
        return view('customer.index', compact('customers'));
    }
    
    // public function getCustomers(Request $request)
    // {
    //     if ($request->ajax()) {
    //         $data = customer::latest()->get();
    //         return Datatables::of($data)
    //             ->addIndexColumn()
    //             ->addColumn('action', function($row){
    //                 $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
    //                 return $actionBtn;
    //             })
    //             ->rawColumns(['action'])
    //             ->make(true);
    //     }
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
            $request->validate([
                'firstName'=>'required ',
                'lastName'=>'required ',
                'address'=> 'required',
                'city'=> 'required',
                'state'=> 'required',
                'zipcode'=> 'required',
                'email' => 'required',
                'customerRating' => 'required',
            ]);
            
            $customer= new customer();
            $customer->firstName = ucfirst($request->get('firstName'));
            $customer->lastName = ucfirst($request->get('lastName'));
            $customer->address = $request->get('address');
            $customer->city = $request->get('city');
            $customer->state = $request->get('state');
            $customer->zipcode = $request->get('zipcode');
            $customer->email = $request->get('email');
            $customer->customerRating = $request->get('customerRating');
            $customer->save();
            return redirect('customer.index')->with('success', 'Successfully Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function details($id)
    {
        //

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

}
