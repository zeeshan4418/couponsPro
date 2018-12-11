<?php

namespace App\Http\Controllers;

use App\ForumCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ForumCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forum = ForumCategory::paginate(15);
        return view('admin.home.forumcategory.showAllForumCategory')->with('forum',$forum);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home.forumcategory.addForumCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ForumCategory  $formCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ForumCategory $formCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ForumCategory  $formCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ForumCategory $formCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ForumCategory  $formCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ForumCategory $formCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ForumCategory  $formCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ForumCategory $formCategory)
    {
        //
    }
}
