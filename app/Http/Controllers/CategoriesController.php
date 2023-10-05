<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //recupérer tous les categories
        //à partir la base de données à travers le model et ELOQUENT
        $categories=Category::all(); //replace la requete sql : select * from categories
        return view("categories.index",compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("categories.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name"=>"required|unique:categories|min:3|max:50|regex:/(^[0-9a-zA-Z ]+$)/u"
        ]);
        Category::create($request->all());
        return redirect()->route("categories.index")->with("success","une categorie est ajoutée avec succés!");
    }

    /*
     * Display the specified resource.
     */
    public function show(Category $category)
    {
     return view("categories.show",compact("category"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view("categories.edit",compact("category"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            "name"=>"required|min:3|max:50|regex:/(^[0-9a-zA-Z ]+$)/u"
        ]);

        $category->update($request->all());
        return redirect()->route("categories.index")->with("success","une categorie est modifiée avec succés!");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route("categories.index")->with("success","une categorie est supprimée avec succés!");

    }
}
