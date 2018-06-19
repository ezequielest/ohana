<?php 
    if ($_POST){

        if (isset($_POST['nombre']) && $_POST['nombre'] != "" &&
            isset($_POST['email']) && $_POST['email'] != "" &&
            isset($_POST['asunto']) && $_POST['asunto'] != "" &&
            isset($_POST['mensaje']) && $_POST['mensaje'] != "")
        {
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $asunto = $_POST['asunto'];
            $mensaje = $_POST['mensaje'];

            $to = 'ohanaindumentary@gmail.com; deborafrojan@hotmail.com; belen.estigarribia@hotmail.com.ar';
            $headers = 'From: ' . $email . "\r\n" .
                'Reply-To: webmaster@example.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
        
            $respuesta = mail($to, $asunto, $mensaje, $headers);

            if($respuesta){
                $respuesta['resultado'] = 'ok';
            }else{
                $respuesta['resultado'] = 'errorServer';
            }

           
        }else{
            $respuesta['resultado'] = 'errorCampos';
        }
        
    
        echo json_encode($respuesta);

    }


    
?>