<body>
<?php
session_start();
if(!isset($_SESSION['num'])) {
    $_SESSION['num'] = 1;
} else {
    $_SESSION['num'] += 1;
}if($_GET["action"]??0 =="destroy"){
    $_SESSION['num'] = 1;
// unset($_SESSION['num']);
}
?>
<p><?= $_SESSION['num'] ?></p>
<form action="lesson1.php">
    <button type="submit">カウントアップ</button>
</form>
<form action="lesson1.php">
<input type="hidden" name="action" id="action" value="destroy"/>
    <button type="submit">クリア</button>
</form>
</body>