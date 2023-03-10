<?php
    include "../session.php";
    include "../database.php";
?>
<?php
    Session::init();
    Session::checkSession();
?>
<?php
class account{
    private $db;
    public function __construct(){
        $this -> db = new Database();
    }
    public function write_profile($accountName):void{
        $query = "select * from profile where account_name='$accountName'";
        $result =  $this ->db-> select($query);
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $hoTen = $row['HoTen'];
            $sdt = $row['SDT'];
            $cccd = $row['CCCD'];
            $diaChi = $row['DiaChi'];
        } 
    }
    public function update_profile($accountName,$hoTen, $sdt, $cccd, $diaChi): void{
        $query = "update profole set HoTen='$hoTen', SDT='$sdt',CCCD='$cccd',DiaChi='$diaChi' where account_name = '$accountName'";
        $result = $this -> db -> update($query);
    }
    
}
?>