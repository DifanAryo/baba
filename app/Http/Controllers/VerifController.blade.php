<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerifController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Verif'
        ];
        return view('perif', $data);
    }
}
