<?php
  include "header.php";
  include "../class/login_class.php";
?>
<?php
  $login = new login();
  if($_SERVER['REQUEST_METHOD'] === 'POST'){
      $accountName = $_POST['accountName'];
      $password = $_POST['password'];
      $login->check_account($accountName,$password);
  }
?>
<div  id="login">
  <h2>Log in</h2>
  <form action="" method= "POST">
    <input name="accountName" type="text" placeholder="tên tài khoản">
    <input name="password" type="password" placeholder="mật khẩu">
    <button type="submit">Log in</button>
  </form>
</div>
</body>
</html>