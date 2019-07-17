<?php
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];
    $phone = $_POST['Tel'];
    $from = 'Wiadomość ze strony vipcelaning.pl';
    $to = 'piokrako@gmail.com';
    $subject = 'Wiadomość ze strony vipcleaning.pl';
    $human = $_POST['human'];

    $body = "Od: $name\n Adres e-mail: $email\n Treść wiadomości:\n $message";

    if ($_POST['submit'] && $human == '4') {
        if (mail ($to, $subject, $body, $from)) {
	    echo '<p>Twoja wiadomość została przesłana!</p>';
	} else {
	    echo '<p>Coś poszło nie tak, sprawdź wprowadzone dane!</p>';
	}
}
?>
