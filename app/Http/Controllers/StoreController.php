<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
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
        $data = Store::all();
        return view('admin.home.store.showAllStore')->with('store',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home.store.addStore');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $data = $request->except('_token');
        $allowedfileExtension=['jpg','png'];
        if($request->hasFile('store_image')){
            $file = $request->file('store_image');
            $extension = $file->getClientOriginalExtension();
            $check=in_array($extension,$allowedfileExtension);
            if($check) {
                $file->move('img/store', $file->getClientOriginalName());
                $data['store_image'] = 'img/store/' . $file->getClientOriginalName();
                if (!$request->has('store_status')){
                    $data['store_status'] = 'off';
                }
                if(!$request->has('store_featured')){
                    $data['store_featured'] = 'off';
                }
                Store::create($data);
                return redirect('/admin/store/create')->with('success', 'Store Successfully Created');
            }
            else{
                return redirect('/admin/store/create')->with('success','Please Select jpg/png Image');
            }

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $store)
    {
        // get the nerd
        $s = Store::find($store)->first();
        // show the edit form and pass the nerd
        return view('admin.home.store.addStore')
            ->with('store', $s);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRequest $request, Store $store)
    {
        $exceptFields = [
            "_token","_method"
        ];
        $data = $request->except($exceptFields);
        $store->update($data);
        return redirect('/admin/store')->with('success','Store Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store)
    {
        $store->delete();
        return redirect('/admin/store')->with('success','Store Deleted Successfully');
    }
}
