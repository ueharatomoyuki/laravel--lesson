<body>
<?php
session_start();
if(!isset($_SESSION['num'])) {
    $_SESSION['num'] = 0;
} else {
    $_SESSION['num'] += 1;
}
?>
<p><?= $_SESSION['num'] ?></p>
<form action="session.php">
    <button type="submit">クリック</button>
</form>
<form action="sessionDiscord.php">
    <button type="submit">破棄</button>
</form>
</body>
