<?php
 session_start() ;

$id = '';
$pass = '' ;
$err_msg["id"] = "";
$err_msg["pass"] = "";
$err_msg["msg"] = "" ;
if(!empty($_SESSION["miss"])){
  $err_msg["msg"] = "IDまたはパスワードが不正です";
} 
    if(!empty($_SESSION["empId"])){
        $err_msg["id"] = "IDは必須です" ;
    }

    if(!empty($_SESSION["empPass"])){
        $err_msg["pass"] = "PASSは必須です";
    }
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ログイン</title>
<link href="css/commons.css" rel="stylesheet">
</head>
<body class="login_body">
  <div class="header">
    <h1 class="site_logo">商品管理システム</h1>
  </div>

  <div class="login_form">
    <img src="./images/logo.png" class="login_logo">
    <p class="error"><?=$err_msg["msg"] ?></p>

    <form action="./db/db_id.php" method="GET">
      <fieldset>
        <div class="cp_iptxt">
          <input class="base_input" type="text" name="loginId" placeholder="ID">
          <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
          <div class="error"><?=$err_msg["id"] ?></div>
        </div>

        <div>
          <input class="base_input" type="password" name="pass" placeholder="PASS">
          <div class="error"><?=$err_msg["pass"] ?></div>
        </div>
      </fieldset>
      <button class="logout_btn" type="submit">ログイン</button>
    </form>
  </div>
</body>
</html>
<?php
unset($_SESSION["miss"]);
unset($_SESSION["empPass"]);
unset($_SESSION["empId"]);
?>

