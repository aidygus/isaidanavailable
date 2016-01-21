<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class main extends Controller
{
    public function index()
    {
    	$files = \File::allFiles('img');
    	$img = rand(0,count($files)-1);
    	return view('welcome',['image'=>(string)$files[$img]]);
    }
}
