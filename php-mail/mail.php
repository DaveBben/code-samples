<?php
    
       //reference: https://www.tutorialspoint.com/php/php_sending_emails.htm

      $bName=$_POST['bName']; $bVer=$_POST['bVer']; $osName=$_POST['osName']; $osVer=$_POST['osVer']; $width=$_POST['width']; $comment=$_POST['comment']; $date = date('m/d/Y h:i:s a');
        
         $to = "";
         $subject = "Website Feedback";
         
         $message = "A user has submitted feedback: <br><br> $comment <br><br><br><br><br> <b>Browser Name:</b> $bName <br> <b>Browser Version:</b> $bVer <br> <b>OS Name:</b> $osName <br> <b>OS Version:</b> $osVer <br><b>Screen Width:</b> $width <br>";
         $message .= "Date Submitted: $date";
    
         $header = "From: \r\n";
         $header .= "Cc: \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header,"-f dave@stuff -F Some-title");
         
         return '<h1>Thank you! Your input is appreciated!';
    

 ?>
