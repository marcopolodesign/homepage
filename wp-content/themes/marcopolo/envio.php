<?php
// Checks if form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    function post_captcha($user_response) {
        $fields_string = '';
        $fields = array(
            'secret' => '6LeVr3MUAAAAALI6yUIAap_bb9-oUSFpC-Bx0pDa',
            'response' => $user_response
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }

    // Call the function post_captcha
    $res = post_captcha($_POST['g-recaptcha-response']);

    if (!$res['success']) {
        // What happens when the CAPTCHA wasn't checked
				header('Location: not-captcha.php'); 
    	} else {
					$to = "hi@marcopoloca.com"; // Mail al que le va a llegar
					$from = $_POST['email']; // Mail del usuario
					$nombre = $_POST['name']; //Nombre
					$subject = "Contacto por web Marco Polo Creative Agency";
					$message = $nombre . " " . " dejo el siguiente mensaje:" . "\n\n" . $_POST['message'] . "\n\n" . $from;
					$headers = "From:" . $from;

					mail($to, $subject, $message, $headers);
					
			
					// echo "Mensaje enviado. Gracias!" . $nombre . ", Nos pondremos en contacto.";
					header('Location: thankyou.php'); 
    		}
	} 
?>
