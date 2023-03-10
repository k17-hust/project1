<?php
include "../database.php";
?>
<?php
class signup{
    private $db;
    public function __construct(){
        $this -> db = new Database();
    }
    public function insert_account($accountName, $email, $password, $passwordAgain): void{
        $query1 = "SELECT COUNT(*) FROM account WHERE account_name = '$accountName'";
        $result1 = $this -> db -> select($query1);
        $count = $result1->fetch_array()[0];
        if ($count > 0){
            echo "<script>alert('Tên tài khoản đã tồn tại. Vui lòng chọn tên khác!')</script>";
            return;
        }
        if ($password != $passwordAgain){
            echo "<script>alert('Mật khẩu nhập lại không khớp. Vui lòng nhập lại!')</script>";
            return;
        }
        $query2 = "INSERT INTO account(account_name,password,email) VALUES ('$accountName', '$password', '$email')";
        $result = $this -> db -> insert($query2);
        if ($result) {
            echo "<script>alert('Đăng ký thành công.')</script>";
            header("Location: ../login/index.php");
            exit;
        }
    }
}
?>
