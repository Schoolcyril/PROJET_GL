<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $data=Category::all();
        return view('admin.category.index',compact('data'));
=======
        $data=Category::latest()->get();
        return view('admin.Category.index',compact('data'));
>>>>>>> 74b784e2d197cd266637049bf2152459b9cfd858
=======
        $data=Category::latest()->get();
        return view('admin.Category.index',compact('data'));
>>>>>>> 74b784e2d197cd266637049bf2152459b9cfd858
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return view('admin.category.create');
=======
        return view('admin.Category.create');
>>>>>>> 74b784e2d197cd266637049bf2152459b9cfd858
=======
        return view('admin.Category.create');
>>>>>>> 74b784e2d197cd266637049bf2152459b9cfd858
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        Category::create($data);
<<<<<<< HEAD
<<<<<<< HEAD
        return "categorie enregistreé avec succès";
=======
     return redirect('admin/category');

>>>>>>> 74b784e2d197cd266637049bf2152459b9cfd858
=======
     return redirect('admin/category');

>>>>>>> 74b784e2d197cd266637049bf2152459b9cfd858
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function show(Category $category)
    {
        //
=======
=======
>>>>>>> 74b784e2d197cd266637049bf2152459b9cfd858
    public function show($id)
    {
       $category=Category::findOrFail($id);
       return view('admin/category/show',compact('category'));
<<<<<<< HEAD
>>>>>>> 74b784e2d197cd266637049bf2152459b9cfd858
=======
>>>>>>> 74b784e2d197cd266637049bf2152459b9cfd858
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function edit(Category $category)
    {
        //
=======
=======
>>>>>>> 74b784e2d197cd266637049bf2152459b9cfd858
    public function edit($id)
    {
          $category=Category::findOrFail($id);
          return view('admin/category/create',compact('category'));
<<<<<<< HEAD
>>>>>>> 74b784e2d197cd266637049bf2152459b9cfd858
=======
>>>>>>> 74b784e2d197cd266637049bf2152459b9cfd858
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function update(Request $request, Category $category)
    {
        //
=======
=======
>>>>>>> 74b784e2d197cd266637049bf2152459b9cfd858
    public function update(Request $request, $id)
    {
        $category= Category::findOrFail($id);
        $data=$request->all();
        $category->update($data);
        return redirect('admin/category');
<<<<<<< HEAD
>>>>>>> 74b784e2d197cd266637049bf2152459b9cfd858
=======
>>>>>>> 74b784e2d197cd266637049bf2152459b9cfd858
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function destroy(Category $category)
    {
        //
=======
=======
>>>>>>> 74b784e2d197cd266637049bf2152459b9cfd858
    public function destroy($id)
    {
        $category= Category::findOrFail($id);
        $category->destroy($id);
        return redirect('admin/category');
<<<<<<< HEAD
>>>>>>> 74b784e2d197cd266637049bf2152459b9cfd858
=======
>>>>>>> 74b784e2d197cd266637049bf2152459b9cfd858
    }
}
