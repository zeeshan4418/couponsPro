<?php

namespace App\Http\Controllers;

use App\HomeBanner;
use App\Http\Requests\HomeBannerRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home.homeBanner.addHomeBanner');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HomeBannerRequest $request)
    {
        $data = $request->except(['_method','_token']);
        if($request->hasFile('banner_image')){
            $file = $request->file('banner_image');

            $file->move('img/banner', $file->getClientOriginalName());
            $data['banner_image'] = 'img/banner/' . $file->getClientOriginalName();

            if (!$request->has('banner_overlay')){
                $data['banner_overlay'] = 'Off';
            }
            if (!$request->has('banner_parallex_effect')){
                $data['banner_parallex_effect'] = 'Off';
            }

            HomeBanner::create($data);
            return redirect('/admin/banner/create')->with('success', 'Banner Successfully Created');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HomeBanner  $homeBanner
     * @return \Illuminate\Http\Response
     */
    public function show(HomeBanner $homeBanner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HomeBanner  $homeBanner
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeBanner $homeBanner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HomeBanner  $homeBanner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeBanner $homeBanner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HomeBanner  $homeBanner
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeBanner $homeBanner)
    {
        //
    }
}
