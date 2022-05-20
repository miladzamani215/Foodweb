<?php
include_once "./model/Mindex.php";


//login form controler
if(isset($_POST["btn"])){
    $data = $_POST["frm"];
    if($data["user"] !== "" && $data["password"] !== ""){
        $database = new login();
        $userdata = $database->selectuser($data["user"]);
        if($userdata["password"] == $data["password"]){
            $_SESSION["login"] = "true";
        }else{
            header("location:../index.php?c=index&a=loginfaild");
        }
    }else{
        header("location:../index.php?c=index&a=loginfaild");
    }
}
//sesttion
if(isset($_SESSION["login"]) != "true"){
    header("location:../index.php?c=index&a=loginfaild");
}













if(file_exists("view/index/V$action.php")){
    require_once "view/index/V$action.php";
}else{
    require_once "view/index/Vindex.php";
}
