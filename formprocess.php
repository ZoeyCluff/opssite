<?php

/* Security Stuff*/
    function check_input($data, $problem='')
    {
        $data = strip_tags($data);
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = nl2br($data);
    if ($problem && strlen($data) == 0)
    {
        die($problem);
    }
        return $data;
    }
    
    $FullName = check_input($_POST['companyname']);
    $Comments = check_input($_POST['Comments']);
    $Phone = check_input($_POST['phonenumber']);
    $Email = check_input($_POST['email']);
    $Contact_name = check_input($_POST['yourname']);
         
    /* Set e-mail recipient */
    $myemail  = "zoey@opssales.net";
    
    /* Prepare the message for the e-mail */
    $subject = "New contact form message!";
    $message = "Hello!
        You've got a new contact form message!
        
       Company Name: $Full_name
                
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