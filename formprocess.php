<?php

/* Security Stuff*/
     check_input($data, $problem='')
{
return $data;
}
    
    $FullName = check_input($_GET['companyname']);
    $Comments = check_input($_GET['Comments']);
    $Phone = check_input($_GET['phonenumber']);
    $Email = check_input($_GET['email']);
    $Contact_name = check_input($_GET['yourname']);
         
    /* Set e-mail recipient */
    $myemail  = "zoey@opssales.net";
    
    /* Prepare the message for the e-mail */
    $subject = "New contact form message!";
    $message = "Hello!
        You've got a new contact form message!
        
       Company Name: $FullName
                
        Contact Name: $Contact_name   
        
                
        E-mail Address: $Email

        Phone Number: $Phone
        
  
        
                                   
        Additional Requests/Comments: $Comments

    End of Submission";

    /* Send the message using mail() function */
    mail($myemail, $subject, $message);
    
    

    /* Redirect visitor to the thank you page */
    header('Location: thanks.html');
    exit();
?>
