<?php
if($_POST){
	//form validation vars
	$formok = true;
	$errors = array();

	//form data
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	//validate form data

	//validate name is not empty
	if(empty($name)){
		$formok = false;
		$errors[] = "You have not entered a name";
	}

	//validate email address is not empty
	if(empty($email)){
		$formok = false;
		$errors[] = "You have not entered an email address";
	//validate email address is valid
	}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$formok = false;
		$errors[] = "You have not entered a valid email address";
	}

	//validate message is not empty
	if(empty($message)){
		$formok = false;
		$errors[] = "You have not entered a message";
	}

	//send email if all is ok
	if($formok){
        $to = 'bryancantz@comcast.net';     // Add a recipient
        $subject = 'New Message from RevolutionLLC.net';
        $message    = "<p>Y  ou have recieved a new message on your website.</p>
                          <p><strong>Name: </strong> {$name} </p>
                          <p><strong>Email Address: </strong> {$email} </p>
                          <p><strong>Message: </strong> {$message} </p>";
       $retval = mail ($to,$subject,$message,$header);
       if( $retval == true )
       {
          echo "Message sent successfully...";
       }
       else
       {
          echo "Message could not be sent...";
       }

	}

	//what we need to return back to our form
	$returndata = array(
		'posted_form_data' => array(
			'name' => $name,
			'email' => $email,
			'message' => $message
		),
		'form_ok' => $formok,
		'errors' => $errors
	);


	//if this is not an ajax request
	if(empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest'){
		//set session variables
		session_start();
		$_SESSION['cf_returndata'] = $returndata;

		//redirect back to form
		header('location: ' . $_SERVER['HTTP_REFERER']);
	}
}
?>
