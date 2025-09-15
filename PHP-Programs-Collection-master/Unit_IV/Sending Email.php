<?php
	function validate_email($msg)
	{
		$xyz=filter_var($msg,FILTER_SANITIZE_EMAIL);
		if(filter_var($msg,FILTER_VALIDATE_EMAIL))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	$to_email="gp949958ss@gmail.com";
	$subject="Testing PHP mail";
	$message="This mail is sent using PHP mail";
	//$header="From:noreply@company.com";
	$secure_check=validate_email($to_email);
	if($secure_check==false)
	{
		echo "Invalid Email";
	}
	else
	{
		mail($to_email,$subject,$message);
		echo "This email is sent using PHP mail";
	}
?>