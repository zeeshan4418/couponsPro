<?php

namespace App\Http\Controllers;

use App\Category;
use App\Coupons;
use App\ForumCategory;
use App\Http\Requests\CouponsRequest;
use App\Store;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CouponsController extends Controller
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
        $data = [
            'ForumCategory' => ForumCategory::all(),
            'Stores' => Store::all(),
            'category' => Category::all()
            ];
        return view('admin.home.coupons.addCoupons')->with('data',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CouponsRequest $request)
    {
        $data = $request->except(['_method','_token']);
        if($request->hasFile('coupon_image')){
            $file = $request->file('coupon_image');

            $file->move('img/coupon', $file->getClientOriginalName());
            $data['coupon_image'] = 'img/coupon/' . $file->getClientOriginalName();

            if (!$request->has('coupon_featured')){
                $data['coupon_featured'] = 'Off';
            }
            if (!$request->has('coupon_exclusive')){
                $data['coupon_exclusive'] = 'Off';
            }
            if (!$request->has('coupon_verify')){
                $data['coupon_verify'] = 'Off';
            }
            if (!$request->has('coupon_status')){
                $data['coupon_status'] = 'Off';
            }

            Coupons::create($data);
            return redirect('/admin/coupon/create')->with('success', 'Coupon Successfully Created');

        }
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Coupons  $coupons
     * @return \Illuminate\Http\Response
     */
    public function show(Coupons $coupons)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Coupons  $coupons
     * @return \Illuminate\Http\Response
     */
    public function edit(Coupons $coupons)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Coupons  $coupons
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coupons $coupons)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Coupons  $coupons
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coupons $coupons)
    {
        //
    }
}
