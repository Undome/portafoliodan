<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $visitor_phone = $_POST['phone'];
    $message = $_POST['message'];
//Esto creo que es el nombre o correo de quien lo envia
    $email_from = 'Daniel Payró';
//Este debe ser el titulo del correo
    $email_subject = "Contacto de portafolio";
//Aquí se indica como estara compuesto el cuerpo del correo?
    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Phone: $visitor_phone.\n".
                            "User Message: $message.\n";
//Aquí colocas el correo al que quieres que se envie
    $to = "dpayror@gmail.com";
//
    $headers = "From: $email_from \r\n";

    $headers.= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    headers("Location: index.html")
?>