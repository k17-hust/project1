<?php
include "../database.php";
?>
<?php
class login{
    private $db;
    public function __construct(){
        $this -> db = new Database();
    }
    public function check_account($accountName, $password){
        if($accountName == "admin" && $password == "123456"){
            header("Location: ../admin/index.php");
            exit();
        }
        $query = "SELECT COUNT(*) FROM account WHERE account_name = '$accountName'and password = '$password'";
        $result = $this -> db -> select($query);
        $count = $result->fetch_array()[0];
        if ($count == 0){
            echo "<script>alert('Sai tên tài khoàn hoặc mật khẩu!')</script>";
            return;
        }
        session_start();
        $_SESSION['login'] = true;
        $_SESSION['accountName'] = $accountName;
        header("Location: ../main/index.php");
        exit;
    }
}
?>
