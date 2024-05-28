<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function result(Request $request)
    {
        $query = Product::query();
        // Фильтрация по акции
        if ($request->has('on_sale') && $request->input('on_sale') == 'on') {
            $query->where('old_price', '!=', 'NULL');
        }
        // dd( $products = $query->paginate(6)->appends($request->all()));
        //сортировка
        if ($request->has('order_by')) {
            switch ($request->input('order_by')) {
                case 'price':
                    $query->orderBy('price', 'asc');
                    break;
                case '-price':
                    $query->orderBy('price', 'desc');
                    break;
                default:
                    // Никакой сортировки, сортировка по умолчанию
                    break;
            }
        }
        

        $products = $query->paginate(6)->appends($request->all());
        // dd($products);
        return view('goods/catalog', [
            'products' => $products,
            'onSale' => $request->input('on_sale'),
            'orderBy' => $request->input('order_by')
    ]);
    }

    public function show($uniq_id)
    {
        $product = Product::where('uniq_id', $uniq_id)->first();
        return view('goods/product', ['product' => $product]);
    }
}
