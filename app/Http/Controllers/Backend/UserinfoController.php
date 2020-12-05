<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserinfoController extends Controller
{
    public function userinfo()
    {
        return view ('Backend.Layout.userinfo');
    }
}
