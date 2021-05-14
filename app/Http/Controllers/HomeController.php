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
        $this->middleware('conditionfalse',['only' => 'Condition']);;
        $this->middleware('onlyuser',['only' => 'User']);
        $this->middleware('onlyadmin',['only' => 'index']);
        $this->middleware('saldomid' ,['only' => 'Saldo']);
        $this->middleware('configuracionmid',['only' => 'Configuracion']);
        
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function User(){
        return view('user');
    }
    public function Condition(){
        return view('condition');
    }
    public function Configuracion(){
        return view('config');
    }
    public function Saldo(){
        return view('saldo.index');
    }
}
