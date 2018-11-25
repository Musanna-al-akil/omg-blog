<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    public function upload(Request $request){
    	$files=$request->file('file');


    	if(!empty($file)):
    		foreach ($files as $file): 
    			Storage::put($file->getClientOriginalName(),file_get_contents($file));
    	endif;
    }
}
