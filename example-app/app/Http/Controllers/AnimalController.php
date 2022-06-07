<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
class AnimalController extends Controller
{
    public function index()
    {
        $animals = Animal::all();
        return view('list')->with('animals',$animals);
    }

    function regist(Request $request)
    {
        $request -> validate([
            'name' => 'required',
            'age' => 'required|integer|between:0,120'
        ]);

        $animal = new Animal;
        $animal -> name = $request->name;
        $animal -> age = $request->age;
        $animal -> save();
        return redirect('list');
    }
}
