<body 
<html> <head>
<style>
.mainContent {
    width: 39%;
    margin: 2.9em auto;
    background: #fff;
    padding: 2.9em;
}
</style>
 </head>
<body> 
<div class="mainContent">
    <h2>PHP MAILER/ <small><a href="https://facebook.com/like.a.code">Find Me</a></small></h2>
<form action="#" method="get">
 <input type="text" name="email" placeholder="masukan email"></input><br/>
<p><textarea name="pesan" placeholder="Pesan anda" rows="7" cols="50" required>Letter Dimasukan dengan format html</textarea>
 <input type="submit" name="submit" value="Submit"></input>
</form>
</body>
</html>

<body bgcolor="black"> 
<?php 
//--------------------------
//©Coder IrvanPramana @2019
//--------------------------
$name = "Apple"; $to = $_GET ['email']; $web="$_SERVER[HTTP_HOST]"; //bisa di custom domain
$subject = "Apple Alert"; 
$body = $_GET ['pesan'];
$email = "Apple@$web"; 
$headers = 'From: ' .
$email . "\r\n". 
$headers = "Content-type: text/html\r\n"; 'Reply-To: ' . 
$email. "\r\n" . 'X-Mailer: PHP/' . phpversion(); 
if (mail($to,
$subject,
$body,
$headers,$name))
 {  echo("<font color=green>This Email Sended To => $to </font>"); 
}
