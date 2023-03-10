<?php
    include "../session.php";
?>
<?php
    Session::init();
    Session::checkSession();

    echo "xin chào".Session::get('accountName');
?>