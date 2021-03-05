<?php
if(isset($_POST['enviar'])){
    if(!empty($_POST['nombres']) && !empty($_POST['apellidos']) && !empty($_POST['email']) && !empty($_POST['telf']) && !empty($_POST['mensaje'])){
    // capturando datos
        $nombre = $_POST['nombres'];
        $apellido = $_POST['apellidos'];
        $email = $_POST['email'];
        $telf = $_POST['telf'];
        $mensaje = $_POST['mensaje'];

    //datos para el correo
        //$destinatario = "academiageuni74@gmail.com";
        $destinatario = "josyuk.3000@gmail.com";
        $asunto = "Infromes solicitados desde la web";
        $carta = "De: ".$nombre." ".$apellido."\nCelular: ".$telf."\n".$mensaje;

    //enviar mensaje
        $mail = mail($destinatario, $asunto, $carta);
        if($mail){
            echo "<script>alert('Mensaje enviado exitosamente')</script>";
            echo "<script>setTimeout(\"location.href='index.php'\",1000)</script>";
        }
    }
}

?>
