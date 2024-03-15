<?php
    include_once("../connect/base_url.php");
    if ($localhost.$_SERVER['REQUEST_URI']==base_url1($title_url)) {
        include_once("../include/header.php");
        include_once("../include/header_main.php");
?>



 
team



<?php
   include_once("../include/footer.php");
    }else {
        header("location: ".base_url1("home"));
    }
?>
