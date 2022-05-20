<?php
include_once "admin/model/Mindex.php";

//logout
if($action == "logout"){
    $_SESSION["login"] = "false";
    session_destroy();
}














require_once "view/index/Vindex.php";