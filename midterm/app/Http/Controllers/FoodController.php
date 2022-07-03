<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FoodRequest;
use App\Models\food;

class FoodController extends Controller
{
     
    // crud 
    public function getIndexHome(){
        $Food=food::all();
        return view('homepage',compact('Food'));
    }
    public function getAdminAdd(){
        return view ('addForm');
        }
        public function getIndexAdmin(){
        $foods = food ::all();
        return view('admin', compact('foods')); 
        }
        public function postAdminAdd(Request $request){
            $food= new food();
            $food->name=$request->inputName;
            $food->image=$request->inputImage;
            $food->price=$request->inputPrice;
            $food->oldprice=$request->inputOldPrice;
            $food->description=$request->inputDescription;
            $food->save();
            return redirect('/showadmin')->with('success', 'Đã thêm thành công');
    
        }
        public function Detail(Request $request){
            $food = food::where ('id',$request->id)->first();
            return view ('detail',compact('food'));
        }
    }


