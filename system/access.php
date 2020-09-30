<?
$password = "pogi"; // Password 

session_start();
ini_set( 'display_errors', 0 );
error_reporting( 0 );
set_time_limit(0);
ini_set("memory_limit",-1);


$sessioncode = md5(__FILE__);
if(!empty($password) and $_SESSION[$sessioncode] != $password){
    # _REQUEST mean _POST or _GET 
    if (isset($_REQUEST['pass']) and $_REQUEST['pass'] == $password) {
        $_SESSION[$sessioncode] = $password;
    }
    else {
              
  echo  "<html>
<head>
<title>FBI Terminal</title>
<style type=>
body{
background: url(https://cutewallpaper.org/21/cia-login-screen-wallpaper/Cia-Terminal-Login-Screen-Download-staffgiza.jpg) no-repeat center center fixed; 
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;


}
h2{
    color:#e5e5e5;
 font-family: Courier New;
 font-size: 18px;
}
input,button
{   
    font-size: 11pt;
    color:#e5e5e5;
    font-family: verdana, sans-serif;
    background-color: #000000;
    border-left: 2px dotted #b2b2b2;
    border-top: 2px dotted #b2b2b2;
    border-right: 2px dotted #b2b2b2;
    border-bottom: 2px dotted #b2b2b2;
}
 </style>
</head>";

  die('<br><br><br><br><br><br><br><br><br>br><br><br><br><center><img src="https://image.flaticon.com/icons/svg/1184/1184393.svg" style="width:200px; height:100;"></center>
<br>
<div align=center >
<form method="POST">
<h2>Enter Agent ID</h2><input name="text" type="text" size="30">
<h2>Enter Password</h2><input name="pass" type="password" size="30">
<br><br><input type="submit" value="Login">
</form>
<div>
<body>
 </html>') ;
 
}
}
echo '<!DOCTYPE html>
<html>
<head>
 <title> </title>
 <meta http-equiv="refresh" content="1">
</head>
<body style="background-color: black; color: green;">';



  echo nl2br( file_get_contents('log.txt'))



?>