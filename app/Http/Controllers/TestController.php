<?php

namespace App\Http\Controllers;

use App\Country;
use App\District;
use App\Division;
use App\Upazila;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TestController extends Controller
{
    public function country()
    {
        $countries = Country::all();
        return view('index', compact('countries'));
    }

    public function divisions($id){
        $divisions = Division::where('country_id', $id)->get();
        return response()->json($divisions);
    }

    public function districts($id){
        $districts = District::where('division_id', $id)->get();
        return response()->json($districts);
    }

    public function upazilas($id){
        $upazilas = Upazila::where('district_id', $id)->get();
        return response()->json($upazilas);
    }
}
