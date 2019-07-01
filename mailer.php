<body bgcolor="black"> 
<?php
$name = "Apple Alert"; $to = "darknet1255@gmail.com"; $web="$_SERVER[HTTP_HOST]"; 
$subject = "Your Order Has Been Placed"; 
$body = ' 
<a href="https://google.com">Tested Mail 1</a>  
email = "Apple@$web"; 
$headers = 'From: ' .
$email . "\r\n". 
$headers = "Content-type: text/html\r\n"; 'Reply-To: ' . 
$email. "\r\n" . 'X-Mailer: PHP/' . phpversion(); . phpversion(); 
if (mail($to,
$subject,
$body,
$headers,$name)) 
{ echo("<font color=green>Email Sended To => $to </font>"); 
} else 
{ 
echo("<font color=red>This Server Not Support For Mailer</font>"); } ?>
