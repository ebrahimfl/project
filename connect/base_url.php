<?php
   function base_url($url){
    $page = $_SERVER['SCRIPT_NAME'];
    $page = str_replace("/project/", "", $_SERVER['SCRIPT_NAME']);
    $remove =rtrim($_SERVER['SCRIPT_NAME'], $page);
        
    if ($remove !== ""){
        $remove1 =$remove."";
        $servarname = "http://localhost/project/";
    }else{

        $servarname = 'https://www.createofbrand.com/';
    }
    
    echo $servarname.$url;
}
   function base_url1($url){
    $page = $_SERVER['SCRIPT_NAME'];
    $page = str_replace("/project/", "", $_SERVER['SCRIPT_NAME']);
    $remove =rtrim($_SERVER['SCRIPT_NAME'], $page);
        
    if ($remove !== ""){
        $remove1 =$remove."";
        $servarname = "http://localhost/project/";
    }else{

        $servarname = 'https://www.createofbrand.com/';
    }
    
    return $servarname.$url;
}

$localhost = "http://localhost";
$title_url = substr($_SERVER['REQUEST_URI'],strrpos($_SERVER['REQUEST_URI'],"/")+1);

?>