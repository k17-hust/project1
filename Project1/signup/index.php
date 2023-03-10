<?php
    include "header.php";
    include "../class/signup_class.php";
?>

<?php
    $signup = new signup();
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $accountName = $_POST['accountName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordAgain = $_POST['passwordAgain'];
        $signup->insert_account($accountName,$email,$password,$passwordAgain);
    }
?>
    <div id="register">
        <h2>Đăng ký</h2>
        <form action=" " method= "POST">
            <input required name = "accountName" type="text" placeholder="tên tài khoản">
            <input required name = "email" type="email" placeholder="email">
            <input required name = "password" type="password" placeholder="mật khẩu">
            <input required name = "passwordAgain" type="password" placeholder="nhập lại mật khẩu">
            <button  type="submit">Submit</button>
        </form>
    </div>
</body>

</html>