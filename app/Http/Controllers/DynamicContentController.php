<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DynamicContentController extends Controller
{
    public function show()
    {
        $name = 'Sriame';
        $javaScriptCode = "<script>alert('xss');</script>";
        return view('dynamic', [
            'nama' => $name,
            'javaScriptCode' => $javaScriptCode 
        ]);
    }
}
