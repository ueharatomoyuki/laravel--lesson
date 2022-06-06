<!DOCTYPE html>
<html>
    <body>
        <a href="a">画面遷移</a>

        <form action="sum" method="POST">
            @csrf
            num1:<input type="text" name="num1">
            num2:<input type="text" name="num2">
            <button type="submit">送信</button>
        </form>
    </body>
</html>