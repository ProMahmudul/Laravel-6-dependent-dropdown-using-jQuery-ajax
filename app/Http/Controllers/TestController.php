<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TestController extends Controller
{
    public function abc(){
        return 'abc method';
    }

    public function display(){
        return 'Display method';
    }

    public function userMethod(){
        return Redirect::route('user.test');
    }

    public function testname(){
        echo "Test Name";
    }

    public function test($value){
//        return view('test')->with('value', $value);
//        return view('test', array('value' => $value));
//        return view('test', ['value' => $value]);
//        return view('test', compact('value'));
//        return view('test')->withValue($value);
        $arr = [2, 4, 45, "kamal", "jamal"];
        $name = "Mahmudul Hassan";
        return view('test')->with(['value'=> $value, 'arr' => $arr, 'name' => $name]);
    }
}
