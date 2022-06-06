<?php
6 Student::where('grade','=','1')->get();

7 Student::where('hometown','=','東京')->get(); //日本語(東京)が表示されない。レコードは取得される

8 DB::select("select major_name from majors");

9  $student = DB::table('students')->where('student_id',10)->update(['grade'=>3]);

10 $student = DB::table('students')->where('student_id','=',10)->delete();
?>