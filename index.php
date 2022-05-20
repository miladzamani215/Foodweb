<?php
    session_start();
    require_once "data/config.php";
    include "view/layout/header.php";

?>



<?php
$action = @$_GET["a"]?$_GET["a"]:"index";
$controler = @$_GET["c"]?$_GET["c"]:"index";
if(file_exists("controler/C$controler.php")){
    require_once "controler/C$controler.php";
}else{
    require_once "controler/Cindex.php";
}
?>


<?php
    
    include "view/layout/footer.php"


?>