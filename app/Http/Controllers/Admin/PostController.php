<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductFormRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderBy("created_at", "DESC")->get();
        // ->paginate();
        // dd($products);
        return view('admin.products', [
            "products" => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductFormRequest $request)
    {
        $data = $request->validated();
        if($request->has("url_picture")){
            $originalName = $request->file('url_picture')->getClientOriginalName();
            $path = $request->file('url_picture')->storeAs('public/images/goods', $originalName);
            $data['url_picture'] = str_replace('public/images/goods/', '', $path);
        }
        $product = Product::create($data);
        return redirect(route("admin.products.index"));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        return view('admin.create', [
            "product" => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductFormRequest $request, string $id)
    {
        $product = Product::findOrFail($id);
        $data = $request->validated();

        if($request->has("url_picture")){
            $originalName = $request->file('url_picture')->getClientOriginalName();
            $path = $request->file('url_picture')->storeAs('public/images/goods', $originalName);
            $data['url_picture'] = str_replace('public/images/goods/', '', $path);
        }
        $product->update($data);

        return redirect(route("admin.products.index"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::destroy($id);
        return redirect(route("admin.products.index"));
    }
}
