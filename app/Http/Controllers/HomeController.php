<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App;
use DB;
use Session;
use Validator;
use Auth;
use File;

class HomeController extends Controller
{
	    
    public function start_crawl(){

        $file ='C:\xampp\htdocs\work-master\public\file_crawl\crontab';

        $contents="* 12 * * * sh ";
        //echo $file;
    	$bytes_written = File::put($file, $contents);
		if ($bytes_written === false)
		{
		    die("Error writing to file");
		}
		return view('v_stop');
    }

     public function stop_crawl(){

        $file ='C:\xampp\htdocs\work-master\public\file_crawl\crontab';

        $contents="# * 12 * * * sh ";
        //echo $file;
    	$bytes_written = File::put($file, $contents);
		if ($bytes_written === false)
		{
		    die("Error writing to file");
		}
		return view('v_start');
    }
}
