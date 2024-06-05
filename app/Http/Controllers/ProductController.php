<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function result(Request $request)
    {
        // Получаем все товары
        $query = Product::query();
        if ($request->has('category') && $request->category != null) {
            $query->where('category', $request->category);
        }
    
        // Поиск по имени, если параметр name присутствует и не пуст
        if ($request->has('name') && $request->name != null) {
            $query->where('name', 'like', '%'.$request->input('name').'%');
        }

        $this->sort_catalog($request, $query);

        // Получаем отфильтрованные и отсортированные товары с пагинацией
        $products = $query->paginate(6)->appends($request->all());
        return view('goods/catalog', [
            'products' => $products,
            'category' => $request->category,
            'name' => $request->name,
            'onSale' => $request->input('on_sale'),
            'orderBy' => $request->input('order_by')
        ]);
    }

    public function sort_catalog($request, $query)
    {
        // Фильтрация по акции
        if ($request->has('on_sale') && $request->input('on_sale') == 'on') {
            $query->where('old_price', '!=', null);
        }

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
    }

    public function show($uniq_id)
    {
        $product = Product::where('uniq_id', $uniq_id)->first();
        return view('goods/product', ['product' => $product]);
    }
}
