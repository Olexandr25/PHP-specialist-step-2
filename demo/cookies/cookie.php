<?php
//	setcookie("userName", 'John');
//echo $_COOKIE["userName"];
$user = [
    'name' => 'John',
    'login' => 'root',
    'password' => '1234'
];

$str = serialize($user);
echo $str;
echo "<br>";
echo "<br>";
echo base64_encode($str);
echo "<br>";
echo "<br>";
echo base64_decode(base64_encode($str));