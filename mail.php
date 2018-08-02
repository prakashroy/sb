<?php
         $to = "info@solutionbuggy.com";
         $subject = "Enquiry from Website";
         
         $message = "<b>New Enquiry</b>";
         $message .= "<p>Name:".$_POST['name']."</p>";
		 $message .= "<p>Email:".$_POST['email']."</p>";
		 $message .="<p>Comments</p>";
		 $message .=$_POST['comment'];         
         $header .= 'From: '.$_POST['email'] . "\r\n";
         $header .= "Cc:mukunda@provactech.com \r\n";
		 $header .= "Cc:arjun@provactech.com \r\n";
		 $header .= "Cc:solutionbuggy@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
        header('Location: http://solutionbuggy.com');
      ?>