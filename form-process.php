<?php
	
		if(ISSET($_POST['submit'])){
			$Name 				= $_POST['name'];
			$email			    = $_POST['email'];
			$phone_number 		= $_POST['phone_number'];
			$msg_subject 		= $_POST['msg_subject'];
			$message		    = $_POST['message'];

			echo "<h2>clicked</h2>";

			$to = 'sakowilliamz410@gmail.com';
			$subject = "$msg_subject";
			// Get HTML contents from file
			// $htmlContent = file_get_contents("template.html");

			// Set content-type for sending HTML email
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

			// Additional headers
			$headers .= 'From: '.$Name.''.$email . "\r\n";
			$headers .= 'Cc: '.$email .'' . "\r\n";

			// Send email
			if(mail($to,$msg_subject,$message,$headers))
			{
			echo 'Email has sent successfully.';
			}
			else{

				echo 'Some problem occurred, please try again.';
			}
		}


	?>