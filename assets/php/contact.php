<?php

	if(isset($_POST['email']) && $_POST['email'] != '') {

		if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
			// Submit Form
			$field_name = $_POST['name'];
			$field_email = $_POST['email'];
			$field_subject = $_POST['subject'];
			$field_message = $_POST['message'];

			$mail_to = 'gwensanabria@gmail.com';
			// $subject = 'Your Subject'.$field_name;
			$body_message = "";


			$body_message .= 'From: '.$field_name."\n";
			$body_message .= 'E-mail: '.$field_email."\n";
			$body_message .= 'Message: '.$field_subject;
			$body_message .= 'Number: '.$field_message;

			$headers = 'From: '.$field_email."\r\n";
			$headers .= 'Reply-To: '.$field_email."\r\n";

			$mail_status = mail($mail_to, $field_subject, $body_message, $headers);

			if ($mail_status) { ?>
				<script language="javascript" type="text/javascript">
					alert('Message Sent');
					window.location = 'index.html';
				</script>
			<?php
			}
			else { ?>
				<script language="javascript" type="text/javascript">
					alert('Error Message');
					window.location = 'index.html';
				</script>
			<?php
			}
		}


	}

?>