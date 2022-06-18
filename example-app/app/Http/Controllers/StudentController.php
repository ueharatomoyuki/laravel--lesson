<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\major;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{
    public function in(Request $request){
        $name = $request->name;
        $num = $request->num;
        $team = $request->team;
        $from = $request->from;
        if($num !==null){
        DB::table('students')->insert([
            ['student_name' => "$name",'grade' => $num,'major_id' => $team,'hometown' => "$from"]
        ]);
        }

        $request -> validate([
            'name' => 'required|between:0,50',
            'num' => 'required|integer',
            'team'=> 'required|integer',
            'from'=> 'between:0,50'
        ]);

        $major = major::all();
        $students = DB::select("select * from students inner join majors on students.major_id = majors.major_id");
        return view('insert2')->with([
            "students" => $students,
            "majors" => $major,
        ]);
    }
    public function index()
    {
        $major = major::all();
        $students = DB::select("select * from students inner join majors on students.major_id = majors.major_id");
        return view('insert2')->with([
            "students" => $students,
            "majors" => $major,
        ]);
    }
}

//student_id,student_name,grade,majors.major_name,hometown
