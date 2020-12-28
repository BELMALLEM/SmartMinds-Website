<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Formation;
//use App\Http\Controllers\Auth;

class InscrireFormationController extends Controller
{
    public function __construct()
    {
       // $this->middleware('auth');
    }

    public function index()
    {
        return view('inscrireFormation');
    }


    public function store(){
 
        $formation = new Formation();
        
        
        $this->validate($request=request(), [
            'JAVA',
            'CCNA',
            'CompTTA',
            'PHPSY',
            'session'=>'required'
        ]);
            
        $formation->client = request(Auth::user()->name());
        $formation->$request->has('JAVA');
        $formation->$request->has('CCNA');
        $formation->$request->has('CompTTA');
        $formation->$request->has('PHPSY');
        $formation->$request('session');

 
        $device->save();
 
        return redirect()->back()->with('flash_message', 'Merci pour votre reservation');
 
    }
}