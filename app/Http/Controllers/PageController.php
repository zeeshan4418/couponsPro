<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    //

    public function coupons()
    {
        return view('toy-template.coupons');
    }
}
