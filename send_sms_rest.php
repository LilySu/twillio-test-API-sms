<?php
	// Step 1: Download the Twilio-PHP library from twilio.com/docs/libraries, 
	// and move it into the folder containing this file.
	require "twilio-php-master/Services/Twilio.php";

	// Step 2: set our AccountSid and AuthToken from www.twilio.com/user/account
	$AccountSid = "xxx";
	$AuthToken = "xxx";

	// Step 3: instantiate a new Twilio Rest Client
	$client = new Services_Twilio($AccountSid, $AuthToken);

	// Step 4: make an array of people we know, to send them a message. 
	// Feel free to change/add your own phone number and name here.
	$people = array(
		"+33620838825" => "aurelien fache",
	);

$body_sms = <<<EOF
Hola aurélien Fache, @ é à t'écoute dispone de ejercicios http://mathemagie.net/ que le permitiran entrenar su articulacion y sus musculos. 
EOF;

	foreach ($people as $number => $name) {
		$sms = $client->account->sms_messages->create(

		// Step 6: Change the 'From' number below to be a valid Twilio number 
		// that you've purchased, or the (deprecated) Sandbox number
			"16464801096",$number,$body_sms
		);
		echo "Sent message to $name\n";
	}
