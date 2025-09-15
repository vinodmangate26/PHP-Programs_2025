<?php
	//Resource Data Type
	$result=database_connect();
	database_query($result)
	if(is_resource($result))
	{
		echo "This is Resource Data Type";
	}
	else
	{
		echo "This is not Resource Data Type";
	}
?>