<?php

namespace App\Http\Controllers;

use App\Coupons;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    //

    public function coupons()
    {
        $coupons = Coupons::paginate(15);
        return view('toy-template.coupons',compact('coupons'));
    }
}
