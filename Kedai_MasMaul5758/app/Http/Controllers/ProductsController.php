<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.   
     */
    public function index()
    {
        return view('Admin.index', [
            "product1" => Product::where('categori_id', '=', 1)->get(),
            "product2" => Product::where('categori_id', '=', 2)->get(),
            "product3" => Product::where('categori_id', '=', 3)->get(),
        ]);
    }
    public function menu()
    {
        return view('User.view_menu.menu', [
            "product1" => Product::where('categori_id', '=', 1)->get(),
            "product2" => Product::where('categori_id', '=', 2)->get(),
            "product3" => Product::where('categori_id', '=', 3)->get(),
        ]);
    }

    public function index2(Request $request)
    {
        $selected_categ = $request->categori_id;
        $categories = Categorie::all();
        $data['categories'] = $categories;
        $data['categori_id'] = $selected_categ;
        return view('Admin.product.create')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();

        $validatedData = $request->validate([
            'categori_id' => 'required',
            //'pictures' => 'required',
            'names' => 'required',
            'descs' => 'required',
            'prices' => 'required|numeric',
        ]);
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $newFilename = time() . "-" . preg_replace('/\s+/', '-', $request->names) . ".jpg.png.jpeg";
            $request['pictures'] = $newFilename;

            $file->move(public_path('./assets/media/uploads/products'), $newFilename);
        }

        $results = $product->storedData($request->all());
        return redirect('/product');
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
    public function edit(Request $request)
    {
        $product = Product::find($request->id);
        $selected_categ = $request->categori_id;
        $categories = Categorie::all();
        $data['product_id'] = $request->id;
        $data['product'] = $product;
        $data['categories'] = $categories;
        $data['categori_id'] = $selected_categ;
        return view('Admin.product.edit')->with('data', $data);
    }


    public function update(Request $request, Product $product)
    {
        $request->validate([
            'categori_id' => 'required',
            //'pictures' => 'required',
            'names' => 'required',
            'descs' => 'required',
            'prices' => 'required|numeric',
        ]);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $newFilename = time() . "-" . preg_replace('/\s+/', '-', $request->names) . ".jpg";
            $file->move(public_path('images'), $newFilename);
            $request->merge(['pictures' => $newFilename]);
        }
        unset($request['_token']);
        $results = Product::where('id', $request->id)->update($request->all());

        //$product->update($request->all());

        return redirect('/product')
            ->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $product = new Product();
        $results = $product->removeByid(array('id' => $request->id));
        //dd(array('id' => $request->id));
        return redirect('/product')
            ->with('Success', 'Product deleted successfully');
    }
}
