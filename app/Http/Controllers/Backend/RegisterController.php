<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
        return view('Backend.Layout.form');

    }

    public function deletePeople($id)
    {
        $deletePeople = Registration::find($id);
        $deletePeople->delete();

        return Redirect()->back();
    }


}
