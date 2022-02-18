<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product\Product;
use App\Models\Product\ImageProduct;
use App\Models\Product\RateProduct;
use App\Models\Product\CategoryProduct;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->id) {
            $products = Product::where('deleted_at', '=', '0')->where('category', '=', $request->id)->latest(
                'id'
            )->paginate(10);
        }
        else{
            $products = Product::where('deleted_at', '=', '0')->latest(
                'id'
            )->paginate(10);
        }
        $categories = CategoryProduct::get();
        $count = 0;
        return view('product.product.index', compact('products', 'count','categories'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = CategoryProduct::all();
        // dd($categories);
        return view('product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('id', '=', $id)->first();
        $images = ImageProduct::where('id_product', '=', $id)->whereNotNull('image')->get();
        $rate = RateProduct::where('id_product', '=', $id)->get();
        // dd($images);
        return view('product.product.show', compact('product', 'images', 'rate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::where('id', '=', $id)->first();
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::where('id', '=', $id)->first();
        $product->name = $request->input('product_name');
        $product->description = $request->input('product_description');
        $product->price = $request->input('price_product');
        $product->size = $request->input('size_product');
        $product->unit = $request->input('unit_product');
        $product->category = $request->input('category');


        if ($request->hasFile('image')) {


            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('image/course/', $filename);
            $product->image = $filename;
        }

        $product->update();
        return redirect()->route('product.index')->with('success', 'This product has been Update.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::where('id', '=', $id)->first();
        $product->delete();
        return redirect()->back()->with('success', 'This product has been deleted.');
    }

    public function softDelete($id)
    {
        $product = Product::find($id);
        $product->deleted_at = 1;
        $product->update();
        return redirect()->back()->with('success', 'This product has been soft deleted.');
    }

    //
    public function backFromSoftDelete($id)
    {

        $product = Product::where('id', '=', $id)->first();
        $product->deleted_at = 0;
        $product->save();

        //  dd($product);

        return redirect()->back()->with('success', 'This product has been returned.');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function softDeleteShow()
    {
        $products = Product::where('deleted_at', '=', '1')->latest(
            'name',
            'presenter',
            'description',
            'image'
        )->paginate(10);
        $count = 0;
        return view('product.product.softDelete', compact('products', 'count'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    //
    public function getProductByCategoryId($id)
    {
        $products = Product::where('category','=',$id)->where('deleted_at', '=', '0')->latest(
            'name',
            'description',
            'image',
            'price',
            'size',
            'unit',
            'count_visits',
        )->paginate(10);
        $count = 0;
        return view('product.categoryProduct.showProduct', compact('products', 'count'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
