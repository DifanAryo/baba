<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssetController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Asset'
        ];
        return view('asset', $data);
    }

}


