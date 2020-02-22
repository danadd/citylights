<!DOCTYPE html>
<html>
    <head>
        <title>BAEKHYUN | Request SENT</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">
        <link href="thankyou.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div class="thankyou">
            <h1>Thank you!</h1>
            <img src="web/thankyou.png" alt="Baekhyun Close Up on Blue Background">
        </div>
        <p>Your request has been processed. We will get back to you within 48 hours! 
            <br>
            If you have sent a request after 4PM EST on Friday, please allow us until Monday to begin processing your request. Thank you!</p>
            <br>
        <p><a href="/shop.html"><img src="./icons/back32px.png">Back to Site</a></p>    
        <br>
        <div class="logo">
        <img src="web/cltrans.png" alt="City Lights Logo">
        </div>
    </body>
    
    <?php
	
	$firstName 		= $_POST['firstname'];
    $lastName	 	= $_POST['lastname'];
    $email	 	    = $_POST['email'];
    $lastName	 	= $_POST['ordernum'];
	$userMessage 		= $_POST['inquire'];

	$to 			= "your-email-goes@here.com";
	$subject 		= "Costumer Support Form";
	$body 			= "Information Submitted:";

	$body .= "\r\n Name: " . $firstname;
	$body .= "\r\n Email: " . $email;
	$body .= "\r\n Message: " . $inquire;

	mail($to, $subject, $body);
?>
</html>