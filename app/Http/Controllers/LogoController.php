<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    public function create(Request $request){
        $images=new Logo();
        $request->validate([
            'image'=>'required|max:1024'
        ]);

        $filename="";
        if($request->hasFile('image')){
            $filename=$request->file('image')->store('post','public');
        }else{
            $filename=Null;
        }
        $images->image=$filename;
        $result=$images->save();
        if($result){
            return response()->json(['success'=>true]);
        }else{
            return response()->json(['success'=>false]);
        }
    }
    public function get()
    {
        $images=Logo::orderBy('id','DESC')->get();
        return response()->json($images);
    }
}
