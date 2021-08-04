<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Product::all();
        
    }
    public function indexInternal()
    {
        $products = Product::all();
        return view('product.indexInternal', compact ('products'));
        
    }

    public function createInternal()
    {
        return view('product.createInternal');
    }
        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // public function addToCart($id)
    // {
    //     dd("hello world");
    //     $product = Product::find($id);

    //     $cart = session()->get('cart');

    //     $cart[$id]=[

    //         "quanity" => 1 ,
    //         "product_name" => $product->product_name,
    //         "product_number"=>$product->product_number,
    //         "product_department"=>$product->product_department,
    //         "description"=>$product->description,
    //         "price"=>$product->price,
    //     ];
    //     session()->put('cart', $cart);
    //     dd('session');
    //     return redirect()->back()->with('success','Item successfully added to cart');
    // }


    public function store(Request $request)
    {
        $request->validate([
            'product_name'=>'required',
            'product_number'=>'required',
            'product_department'=>'required',
            'price'=>'required'
        ]);

        return Product::create($request->all());
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeInternal(Request $request)
    {
        // dd($request);
        $request->validate([
            'product_name'=>'required',
            'product_number'=>'required',
            'product_department'=>'required',
            'price'=>'required'
        ]);
        // dd('past validate');
        $product = new product();
        $product->product_name = $request->get('product_name');
        $product->product_number = $request->get('product_number');
        $product->product_department = $request->get('product_department');
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        $product->save();
        return redirect('product.indexInternal')->with('success', 'Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Product::find($id);
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
        $product = Product::find($id);
        $product->update($request->all());
        return $product;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        return Product::destroy($id);
    }
   /** //search 
    * @param  str
    * @return \Illuminate\Http\Response
    */
   public function search($name)
   {
       return Product::where('name', 'like', '%'.$name.'%')->get();
       
   }
}

}
