<?php 
//print_r($_REQUEST);
    if(isset($_POST['submit']))
    {
    //die('if');    
    //Array ( [first_name] => sharwan [last_name] => kumar [email] => sharwangkp53@gmail.com [phone] => +919968934406 [message] => demo code [submit] => ) if
       $FirstName = $_POST['first_name'];
       $LastName = $_POST['last_name'];
       $Email = $_POST['email'];
       $Contact = $_POST['phone'];
       $Msg = $_POST['message'];
       $Purpose =$_POST['purpose'];

       if(empty($FirstName) || empty($LastName) || empty($Email) || empty($Contact) || empty($Msg) || empty($Purpose))
       {
          header('location:https://purablehealthcare.com/beta/index.php?error');
           //header('location:http://localhost/purablehealthcare/index.php?error');
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
            $message .= "<tr style='background: #eee;'><td><strong>Purpose:</strong> </td><td>" .$Purpose. "</td></tr>";
            $message .= "<tr style='background: #eee;'><td><strong>Message:</strong> </td><td>" .$Msg. "</td></tr>";
            $message .= "</table>";
            $message .= "</body></html>";
           
           // Always set content-type when sending HTML email
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

           if(mail($to,$subject,$message,$headers))
           {
             
             header("location:https://purablehealthcare.com/beta/index.php?success");
               //header("location:http://localhost/purablehealthcare/index.php?success");
           }else{
               header('location:https://purablehealthcare.com/beta/index.php?error');
                //header('location:http://localhost/purablehealthcare/index.php?error_mail');
           }
       }
    }
    else
    {
        //die('else');
        header("location:https://purablehealthcare.com/beta/index.php");
        //header("location:http://localhost/purablehealthcare/index.php");
    }
?>