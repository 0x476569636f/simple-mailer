<body 
<html> <head> </head>
<body> 
<form action="#" method="get">
 <input type="text" name="email" placeholder="masukan email"></input><br/>
 <input type="submit" name="submit" value="Submit"></input>
</form>
</body>
</html>


<body bgcolor="black"> 
<?php 
$name = "Apple"; $to = $_GET ['email']; $web="$_SERVER[HTTP_HOST]"; 
$subject = "Your Apple ID was used to sign in to iCloud via a web browser"; 
$body = '  
<a href="https://google.com/">Hello world</a> how are you? '; 
$email = "Apple@$web"; 
$headers = 'From: ' .
$email . "\r\n". 
$headers = "Content-type: text/html\r\n"; 'Reply-To: ' . 
$email. "\r\n" . 'X-Mailer: PHP/' . phpversion(); 
if (mail($to,
$subject,
$body,
$headers,$name))
 {  echo("<font color=lime>Email Sended To => $to </font>"); 
} else 
{ 
echo("<font color=red>Not Support For Mailer</font>"); } ?>
