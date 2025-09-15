
    <?php
       $to = "Gauravpatil@gmail.com";
       $subject = "Php program";
         $message = "Hello !!!";
         $headers = "From: gauravpatil12@gmail.com";
	
			$retvalue = mail($to, $subject, $message, $headers);
            if ($retvalue = true) 
			{
                echo "Email sent successfully to $to";
            } 
			else 
			{
                echo "Failed to send the email.";
            }
        
    ?>

