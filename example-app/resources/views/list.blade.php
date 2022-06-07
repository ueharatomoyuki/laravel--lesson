<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Animal⼀覧</title>
</head>

<body>
<form action="regist" method="post">
    @csrf
    名前：<input type="text" name="name">
    @error('name')
    <span class="error">{{ $message }}</span>
    @enderror
    <br>
    年齢：<input type="number" name="age">
    @error('age')
    <span class="error">{{ $message }}</span>
    @enderror
    <br>
    <button>登録</button>
</form>

    <table>
        <tr>
            <th>ID</th>
            <th>名前</th>
            <th>年齢</th>
        </tr>
        @foreach($animals as $animal)
        <tr>
            <td>{{ $animal->id }}</td>
            <td>{{ $animal->name }}</td>
            <td>{{ $animal->age }}</td>
        </tr>
        @endforeach

    </table>
</body>

</html>