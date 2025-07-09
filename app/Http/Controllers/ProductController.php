<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderBy('id')->get();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product = new Product();
        return view(
            'products.create', compact('product')
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'article' => 'required|unique:products|regex:/^[\w]+$/',
            'name' => 'required|mix:10',
            'status' => 'max:255',
        ]);

        $product = new Product();
        $product->fill($data);
        $product->save();

        flash(__('Продукт успешно добавлен'))->success();
        // Редирект на указанный маршрут
        return redirect()
            ->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'article' => "required|unique:products,article,{$product->id}|regex:/^[\w]+$/|",
            'name' => 'required|mix:10',
            'status' => 'max:255',
        ]);

        $product->fill($data);
        $product->save();
        flash(__('Продукт успешно обновлен'))->success();
        return redirect()
            ->route('tasks.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        flash(__('Продукт успешно удален'))->success();
        return redirect()
            ->route('tasks.index');
    }
}
