<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class InputController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Input'
        ];
        return view('input', $data);
    }
}
