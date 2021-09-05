<?php 

    if(isset($_POST['btn-send']))
    {
        
       $FirstName = $_POST['first_name'];
	   $LastName = $_POST['last_name'];
       $Email = $_POST['email'];
       $Contact = $_POST['phone'];
       $Msg = $_POST['message'];
       
       

       if(empty($FirstName) || empty($LastName) || empty($Email) || empty($Contact) || empty($Msg))
       {
           header('location:https://purablehealthcare.com/beta/index.php?error');
       }
       else
       {
           $to = "sandyy1216@gmail.com";
           $subject="New Email From Website";
           $message = '<html><body>';
            $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
            $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" .$FirstName. " ,".$LastName."</td></tr>";
            $message .= "<tr style='background: #eee;'><td><strong>Email:</strong> </td><td>" .$Email. "</td></tr>";
            $message .= "<tr style='background: #eee;'><td><strong>Contact:</strong> </td><td>" .$Contact. "</td></tr>";
            $message .= "<tr style='background: #eee;'><td><strong>Message:</strong> </td><td>" .$Msg. "</td></tr>";
            $message .= "</table>";
            $message .= "</body></html>";
           
           // Always set content-type when sending HTML email
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

           if(mail($to,$subject,$message,$headers))
           {
             
               header("location:https://purablehealthcare.com/beta/index.php?success");
           }
       }
    }
    else
    {
        header("location:https://purablehealthcare.com/beta/index.php");
    }
?>