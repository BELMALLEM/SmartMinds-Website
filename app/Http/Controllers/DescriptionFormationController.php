<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DescriptionFormationController extends Controller
{
    public function __construct()
    {
      
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('descriptionFormation');
    }
}
