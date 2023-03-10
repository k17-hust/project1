<?php
    include "session.php";
    Session::destroy();
    header('Location: home/index.html');
    exit;
?>