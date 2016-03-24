<?php
require_once './Connect2.1/API/qqConnectAPI.php';

$oauth = new Oauth();
$access_token = $oauth->qq_callback();
$openid = $oauth->get_openid();

setcookie('qq_accesstoken',$access_token,time() + 86300);
setcookie('qq_openid',$openid,time() + 86300);

header('location:index.php');
