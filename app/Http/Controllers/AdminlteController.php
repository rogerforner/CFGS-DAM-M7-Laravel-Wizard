<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminlteController extends Controller
{
    //
    /**
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = [];
        return view('adminlte',$data);
    }

}
