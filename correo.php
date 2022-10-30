<?php

if(isset($_POST['enviar']))
{
    if(!empty($_POST['name']) && !empty($_POST['asunto']) && !empty($_POST['msg']) && !empty($_POST['email']))
    {
        $destinatario = '006190026@alumnos.uteg.edu.mx'; /*Quien recive el correo*/
        $nombre = $_POST['name'];
        $email = $_POST['email'];
        $asunto = $_POST['asunto'];
        $mensaje = $_POST['msg'];
        
        $header = "Enviado desde la pag de Boline's-Cap";
        $mensajeCompleto = "De: $email" . "\r\n$mensaje" . "\nAtentamente: $nombre";
        
        $verificar = mail($destinatario, $asunto, $mensajeCompleto, $header);
        
        if($verificar)
        {
            echo "<script>alert('Correo enviado EXITOSAMENTE')</script>";
            echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";
        }
        else
        {
            echo "<script>alert('El correo no, se pudo enviar')</script>";
        }
    }
}

/*
if(isset($_POST['enviar']))
{
    if(!empty($_POST['name']) && !empty($_POST['asunto']) && !empty($_POST['msg']) && !empty($_POST['email']))
    {
        $name = $_POST['name'];
        $asunto = $_POST['name'];
        $msg = $_POST['msg'];
        $email = $_POST['email'];
        $header = "From: kike@bolines-cap.live" . "\r\n";
        $header.= "Reply-To: kike@bolines-cap.live" . "\r\n";
        $header.= "X-Mailer: PHP/". phpversion(); 
        $mail = @mail($email,$asunto,$msg,$header);
        if($mail) Si es verdad
        {
            echo "<h4> ! Mail enviado exitosamente ¡ </h4>";
        }
        else
        {
            echo "<h4> ! El mail no se pudo enviar ¡ </h4>";
        }
    }
}
*/