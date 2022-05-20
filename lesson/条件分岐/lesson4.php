<form action="lesson4.php" method="GET">
<select id="tokyo" name="tokyo" method="GET">
        <option value="1">新橋</option>
        <option value="2">浜松町</option>
        <option value="3">田町</option>
        <option value="4">品川</option>
</select>
    <p><button type="submit" name="button">送信</button></p>
</form>

<?php
$t = $_GET["tokyo"];

switch($t){
    case 1 :
        $msg = "東京まで 田町 浜松町 新橋 有楽町 を通過します" ;
        break ;
    case 2 :
        $msg = "東京まで 新橋 有楽町 を通過します" ;
        break ;
    case 3 :
        $msg = "東京まで 浜松町 新橋 有楽町 を通過します" ;
        break ;
    case 4 :
        $msg = "東京まで 有楽町 を通過します" ;
        break ;
}
?>

<?= $msg?>