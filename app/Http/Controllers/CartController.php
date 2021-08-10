<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cart()
    {
        return view('cart.cart');
    }

    public function addToCart(Request $request )
     {   
        $id= $request->input('product_id');
        $quantity= $request->input('quantity');


        $product = Product::find($id);

        $cart = session()->get('cart');

        $cart[$id]=[
            "quantity"=>$product->quantity,
            "product_name" => $product->product_name,
            "product_number"=>$product->product_number,
            "product_department"=>$product->product_department,
            "description"=>$product->description,
            "price"=>$product->price,
        ];
        session()->put('cart', $cart);
        //  dd($cart);
        return redirect()->back()->with('success','Item successfully added to cart');
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

            //  dd($request);
            // $request->validate([
            //     'product_name'=>'required',
            //     'product_number'=>'required',
            //     'product_department'=>'required',
            //     'price'=>'required'
            // ]);
            // // dd('past validate');
            // $product = new cart;
            // $product->product_name = $request->get('product_name');
            // $product->product_number = $request->get('product_number');
            // $product->product_department = $request->get('product_department');
            // $product->description = $request->get('description');
            // $product->price = $request->get('price');
            // $product->save();
            // return redirect('cart index')->with('success', 'Successfully Created');
        
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
}


