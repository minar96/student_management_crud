<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    public function index(){#main(){
    	// return view('main');

    	$userName = 'Minar Ahmedddd';

    	// return view('pages.index')->with('userName', $userName);
    	return view('pages.index')->withUserName($userName);

    }
}
