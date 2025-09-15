<html>
<body>
    <h3>Send Email</h3>

    <form method="POST">
        Recipient Email: <input type="email" name="toEmail"><br><br>
        Subject: <input type="text" name="subject"><br><br>
        Message: <textarea name="message"></textarea><br><br>
        <input type="submit" name="sendEmail" value="Send Email">
    </form>

    <?php
        if (isset($_POST['sendEmail'])) 
		{
            $to = $_POST['toEmail'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
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
        }
    ?>

</body>
</html>