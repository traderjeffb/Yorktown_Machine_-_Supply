<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sale;
use DB;


class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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

    public function sale()
    {
        $cart = session()->get('cart');
        $last_transaction = 0;

        // $this->getNewSale_id();
        $last_transaction =  sale::latest()
        ->select(['sale_id'])
        ->get();
        
        // dd($cart);
        // $new_sale_id = $last_transaction.value(['sale_id']) +1;//<--causing error

        foreach ($cart as $item){
            $sale = new sale();
            $sale->sale_id = 112233;
            $sale->product_name =   $item['product_name'];
            $sale->product_number = $item['product_number'];
            $sale->product_department = $item['product_department'];
            $sale->product_description = $item['description'];
            $sale->price = $item['price'];
            $sale->save();
        }
            session()->forget('cart');
        return redirect('product.indexInternal')->with('success', 'Order was Successfully Created');
    }
}

