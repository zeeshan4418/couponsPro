<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Http;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Category::all();
        return view('admin.home.category.showAllCategory')->with('category',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home.category.addCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(CategoryRequest $request)
    {
        $data = $request->except('_token');
        $allowedfileExtension=['jpg','png'];

        if($request->hasFile('category_image')){
            $file = $request->file('category_image');
            $extension = $file->getClientOriginalExtension();
            $check=in_array($extension,$allowedfileExtension);
            if($check){
                $file->move('img/category',$file->getClientOriginalName());
                $data['category_image'] = 'img/category/'.$file->getClientOriginalName();
                Category::create($data);
                return redirect('/admin/category/create')->with('success','Category Successfully Created');
            }
            else{
                return redirect('/admin/category/create')->with('success','Please Select jpg/png Image');
            }

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        // get the nerd
        //$cat = Category::find($category);

        // show the view and pass the nerd to it
        /*return View::make('admin.home.category.showCategory')
            ->with('category', $cat);*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        // get the nerd
        $cat = Category::find($category);

        // show the edit form and pass the nerd
        return View::make('admin.home.category.editCategory')
            ->with('category', $cat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        Category::destroy($category);
        return redirect('/admin/category')->with('success','Category Deleted Successfully');
    }
}
