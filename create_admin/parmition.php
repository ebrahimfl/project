<?php
    include_once("../connect/base_url.php");
    if ($localhost.$_SERVER['REQUEST_URI']==base_url1($title_url)) {
        if (isset($_SESSION["admin"][md5("admin_create")])) {
            # code...
        
        include_once("../include/header.php");
        include_once("../include/header_main.php");
        

?>



 
<link rel="stylesheet" href="<?php base_url('assets/css/login.css')?>">

<section id="login">
    
    <div class="container">
        <div class="row">
            <div class="img">
                <img src="<?php base_url('assets/images/login-img.png')?>" alt="">
            </div>
           <div class="form">
            <form action="<?php base_url('assets/php/core.php')?>" method="post" >
                    <h2>User Login</h2>
                        <label for="user-name" class="login-card">
                            <img src="<?php base_url('assets/icons/user-name.png') ?>" alt="">
                        <input type="text" placeholder="Username" id="user-name" name="userName" autocomplete="off">
                        </label>
                    
                        <label for="password" class="login-card">
                            <img src="<?php base_url('assets/icons/password-icons.png')?>" alt="">
                        <input type="password" placeholder="Password" id="password" name="password" autocomplete='off'>
                        </label>
                        <label for="checkbox" class="">
                            Are you roobot
                        <input type="checkbox" id="vehicle3" name="thikthak" value="thikthak">
                        </label>
                        
                    <input name="login_amarsonar" type="submit" value="Submit" class="submit">
                    <p style="text-align: center;">Just Create of Brand</p>
                </form>
           </div>
        </div>
    </div>
</section>



<?php
   include_once("../include/footer.php");
    }else {
        header("location: ".base_url1('admin_ok'));
    }
    }else {
        header("location: ".base_url1($home));
    }
?>

