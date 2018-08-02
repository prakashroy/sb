<?php
$to = "solutionbuggy@gmail.com";
$subject = "Enquiry Contact Us";

$message = "
<html>
<head>
<title>Contact us enquiry</title>
</head>
<body>
<p>Customer Mail</p>
<table>
<tr>
<th>Firstname:".$_POST['first_name']."</th>
<th>Lastname:".$_POST['last_name']."</th>
<th>Email:".$_POST['email']."</th>
<th>Contact:".$_POST['telephone']."</th>
</tr>
<tr>

</tr>
</table>
		<p>COMMENT:".$_POST['comments']."</p>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: '.$_POST['email'] . "\r\n";
$headers .= 'Cc: mukunda@provactech.com' . "\r\n";
$headers .= 'Cc: arjun@provactech.com' . "\r\n";

mail($to,$subject,$message,$headers);
header('Location: http://solutionbuggy.com');
?>
