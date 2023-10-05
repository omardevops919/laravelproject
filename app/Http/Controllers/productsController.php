<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::all();
        return view('products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|unique:products|min:3|max:80|regex:/(^[0-9a-zA-Z]+$)/u",
            "price"=> "required|digits_between:1,9999",
            "description"=> "required|min:30",
            "photo"=> "required|image|mimes:png,jpeg,webp,jpeg|max:2048",
            'category_id' => 'required|numeric|min:1|max:5'
,
            ]);
            //traitement de la photo produit
            //vérifier si l'utilsateur parcouri l'image 
            if($photo=$request->file("photo")){
                $newfile=strtotime(date("Y-m-d")).".".$photo->getClientOriginalExtension();
                $photo->move('photo/',$newfile);
                $inputs['photo']=$newfile;
            Product::create($request->all());
            return redirect()->route('products.index')
            ->with('success','Produit créé avec succès.');
            
    }
    }
    /**
     * Display the specified resource.
     */
     public function show(Product $product)
    
        {
            return view('products.show',compact('product'))
            ;
            
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        
            return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'price'=> 'required',
            'description'=> 'required',
            'photo'=> 'required',
            'category_id'=> 'required',
            ]);
            $product->update($request->all());
            return redirect()->route('products.index')
            ->with('success','Produit mise à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
return redirect()->route('products.index')
->with('success','produit supprimé avec succès');
    }
}
