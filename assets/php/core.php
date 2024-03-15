<?php

if (isset($_POST)) {
    include_once("function.php");
    $main = new main();
    include_once("../../connect/base_url.php");
    session_start(); 
    $location = base_url1("cofb_admin");
    if (isset($_POST['login_amarsonar'])) {
        if ($_POST['thikthak']) {
            if (!$_POST['userName']=='') {            
                if (!$_POST['password']=='') {

                    $user_name = $_POST['userName'];
                    $user_pass = $_POST['password'];
                    if ($main->admin_log($user_name, $user_pass)) {
                        $_SESSION["admin"][md5("identit")] = md5($user_name); 
                        $_SESSION["admin"][md5("admin_create")] = md5("login");
                        $_SESSION["admin"][md5("time")] = time();
                        setcookie(md5("ip"), $_SERVER['REMOTE_ADDR'], time() + (86400 * 30), "/"); // 86400 = 1 day                                     
                        header("location:".base_url1("admin_ok"));
                    } else {
                        alart("danger","Password impte");
                        header("location:".$location); 
                    }
                  
                    
                }else {
                    alart("danger","Password impte");
                    header("location:".$location);                   
                
                }
            }else {
                alart("danger","Not user Name");
                header("location:".$location);
              
            }
        }else {
            alart("danger","robot");

            header("location:".$location);
        }    
        
    }
    
   
}


