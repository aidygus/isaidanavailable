<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class main extends Controller
{
    public function index()
    {
    	$files = \File::allFiles('img/bg');
      $now = time();
      $future_date = strtotime('2016-03-25 17:00:00');
      $images = array();
      foreach($files as $file)
      {
      		$images[] = (string)$file;
      }

      $interval = $future_date - $now;
    	return view('welcome',['images'=>$images,'seconds'=>$interval]);
    }
}
