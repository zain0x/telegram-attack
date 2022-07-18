<?php
$ip =  $_SERVER['REMOTE_ADDR'];  
$geopluginURL='http://www.geoplugin.net/php.gp?ip='.$ip;
$addrDetailsArr = unserialize(file_get_contents($geopluginURL));
$url = htmlspecialchars($_GET['url']);
$UserPc = htmlspecialchars($_GET['UserPc']);
$city = $addrDetailsArr['geoplugin_city'];

$country = $addrDetailsArr['geoplugin_countryName'];
$data =  date("Y/m/d");

        $host='localhost';
        $user='db_user';
        $db='db_name';
        $pass='db_pass';
        $con= mysqli_connect($host,$user,$pass,$db);
        $res=mysqli_query($con,"select * from pc");
        $sqli = "insert into pc value ('$url','$UserPc','$city','$ip','$country','$data')";
        mysqli_query($con,$sqli);
?>