<?php

namespace App\Http\Controllers;
use App\Models\File;

use Illuminate\Http\Request;

class FileController extends Controller
{
    function upload(Request $request){
        $file=new File;
        $file->files=$request->file('file')->store('apiFile');
        $result=$file->save();
        if($result){
            return ["result"=>"Upload Success"];
        }else{
            return ["result"=>"Upload failed"];
        }
    }
}
