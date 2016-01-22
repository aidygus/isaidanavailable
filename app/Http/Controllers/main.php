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
      $now = time();
      $future_date = strtotime('2016-03-25 17:00:00');

      $interval = $future_date - $now;
    	return view('welcome',['image'=>(string)$files[$img],'seconds'=>$interval]);
    }
}
