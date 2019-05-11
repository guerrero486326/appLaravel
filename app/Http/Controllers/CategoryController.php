<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\StoreCategory;
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
        //
        $categories = Category::orderBy('name', 'asc')->get();
        //$categories = Category::orderBy('name', 'asc')->pagination(10);

        return view('categorias.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|unique:categories',
            'image' => 'required|image'
        ]);

        $image = $request->file('image');

        $file = $image->store('images');

        $category = new Category;
        $category->name = $request->get('name');
        $category->image = $file;
        $category->user_id = '1';
        $category->save();

        return redirect()->route('categories.show',['category' => $category->id]);
    }*/

    public function store(StoreCategory $request)
    {

        $image = $request->file('image');

        $file = $image->store('images');

        $category = new Category;
        $category->name = $request->get('name');
        $category->image = $file;
        $category->user_id = '1';
        $category->save();

        return redirect()->route('categories.show',['category' => $category->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $category = Category::find($id);
        return view('categorias.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
