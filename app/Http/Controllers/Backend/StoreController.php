<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function store(Request $request)
    {
             $InfoStore = Registration::create([
                'name' => $request->input('name'),
                'contact' => $request->input('contact'),
                'role' => $request->input('role')
               
          ]); 

          return Redirect()->back();

    }
}
