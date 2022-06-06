<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    function sum(Request $request){
            $num1 = $request->num1;
            $num2 = $request->num2;
            $sum = $num1 + $num2 ;
            return view('a')->with('sum',$sum);
    }

    function animal(Request $request){
        $name = $request->name ;
        $age = $request->age ;
        DB::table('animals')->insert([
            ['name' => "$name",'age' => $age]
        ]);
        
        return redirect('insert');
    }
}
