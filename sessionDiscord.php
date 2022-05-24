<?php
session_start();
unset($_SESSION['num']);
echo 'セッションを破棄しました。  ';
?>
<form action="session.php">
    <button type="submit">戻る</button>
</form>
