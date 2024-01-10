<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        //$product = Product::all();
        //return view('products.index');
        return view('products.index', [
            'products' => Product::latest()->paginate(20)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        //return view('products.create');
        $categories = Category::all();
        return view('products.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request) : RedirectResponse
    {
        //Product::create($request->all());
        Product::create([
            'nama' => $request->nama,
            'id_kategori' => $request->id_kategori,
            'qty' => $request->qty,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
        ]);
        return redirect()->route('product.index')
            ->withSuccess('Produk baru berhasil ditambah.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product) : View
    {
        $categories = Category::all();
        return view('products.show', [
            'product' => $product,
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product) : View
    {
        $categories = Category::all();
        return view('products.edit', [
            'product' => $product,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product) : RedirectResponse
    {
        $product->update($request->all());
        //Product::where('id', $product->id)->update([
        //    'nama' => $request->nama,
        //    'id_kategori' => $request->id_kategori,
        //    'qty' => $request->qty,
        //    'harga_beli' => $request->harga_beli,
        //    'harga_jual' => $request->harga_jual,
        //]);
        return redirect()->route('product.index')
            ->withSuccess('Produk berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product) : RedirectResponse
    {
        $product->delete();
        return redirect()->route('product.index')
            ->withSuccess('Produk berhasil dihapus');
    }
}
