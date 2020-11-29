<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registration;
class FormviewController extends Controller
{
    public function fview()
    {
            
        $peoples = Registration::all();

        return view ('Backend.Layout.fview',[
            'peoples'=>$peoples
        ]);
    }
}
