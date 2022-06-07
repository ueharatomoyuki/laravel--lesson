<?php
6 Student::where('grade','=','1')->get();

7 Student::where('hometown','=','東京')->get(); //日本語(東京)が表示されない。レコードは取得される

8 DB::select("select major_name from majors");

9  $student = DB::table('students')->where('student_id',10)->update(['grade'=>3]);

10 $student = DB::table('students')->where('student_id','=',10)->delete();

//発展

6 sales::where('amount','<','5000')->get();

7 sales::where('amount','>=','5000')->get();

8 DB::select("select sales_id,order_date,customer_id,amount*1.1 from sales");

9 sales::where('amount','!=','null')->get();

10 Cstomer::where('customer_name','!=','田中')->get();

11 $sa = sales::where('sales_id',4)->update(['order_date'=>'2018/11/05']);
   $sa = sales::where('sales_id',4)->update(['customer_id'=>4]);

12  $deleted =sales::where('amount',null)->delete();
?>