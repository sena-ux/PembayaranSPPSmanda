<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admin extends Controller
{
    public function admin() 
    {
        return view('admin.index', [
            'title' => 'DASHBOARD-ADMIN',
        ]);
    }
}