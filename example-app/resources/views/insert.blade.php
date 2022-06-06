<!DOCTYPE html>
<html>
    <body>
        <form action="animal-insert" method="post">
            @csrf
            名前:<input type="text" name="name">
            年齢:<input type="number" name="age">
            <button type="submit">送信</button>
        </form>
    </body>
</html>