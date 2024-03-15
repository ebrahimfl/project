<?php
include_once("../connect/base_url.php");
$location = base_url1("home");
if ($_SERVER['REQUEST_METHOD']=='GET') {
    header("location:".$location);
}
