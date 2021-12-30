<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {   
        //setting session variables
        //$request->session()->put(['sara'=>'admin']);
        $request->session()->put(['apple'=>'fruit']);

        //deleting sessin data
        $request->session()->forget('apple');
        //return  $request->session()->get('apple');
        $request->session()->flush();
        return $request->session()->all();

        //reading specific session data
        //return $request->session()->get('sara');
    }
}
