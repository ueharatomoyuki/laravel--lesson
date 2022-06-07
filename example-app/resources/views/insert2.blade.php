<!DOCTYPE html>
<html lang="ja">
    <body>
        <h1>生徒登録</h1>
        <form action="inStudent" method="get">
        @csrf
        <p>氏名：<input type="text" name="name">
        @error('name')
        <span class="error">{{$message}}</span></p>
        @enderror
        <p>学年: <input type="number" name=num>
        @error('num')
        <span class="error">{{$message}}</span></p>
        @enderror
        <p>所属：<select name="team">
            @foreach($majors as $major)
            <option value="{{$major->major_id}}">{{$major->major_name}}</option>
            @endforeach
        </select>学部
        @error('team')
        <span class="error">{{$message}}</span></p>
        @enderror 
        <p>出身地：<input type="text" name="from">
        @error('from')
        <span class ="error">{{$message}}</span></p>
        @enderror
        <P><button type="submit">登録</button> </P>
        </form>
        <table border="1">
            <tr>
                <td>学生ID</td>
                <td>氏名</td>
                <td>学年</td>
                <td>所属</td>
                <td>出身地</td>
            </tr>
            @foreach($students as $student)
        <tr>
            <td>{{ $student->student_id }}</td>
            <td>{{ $student->student_name }}</td>
            <td>{{ $student->grade }}</td>
            <td>{{ $student->major_name }}</td>
            <td>{{ $student->hometown}}</td>
        </tr>
            @endforeach
        </table>
    </body>
</html>