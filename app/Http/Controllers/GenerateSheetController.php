<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenerateSheetController extends Controller
{
    public function index(Request $request)
    {
        $defNum=$request->input('number');
         return $defNum;

    }

}
