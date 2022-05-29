<?php
if(isset($_POST['enviar'])){
    if(!empty($_POST['nombre'])&& !empty($_POST['asunto'])&& !empty($_POST['comentario']) && !empty($_POST['email'])){
        $name=$_POST['name'];
        $asunto=$_POST['asunto'];
        $comentario=$_POST['comentario'];
        $email=$_POST['email'];
        $header="From: foodexe_ra@gmail.com" . "\r\n";
        $header.="Reply-To: foodexe_ra@gmail.com" . "\r\n";
        $header.="X-Mailer: PHP/". phpversion();
        $mail=@mail($email,$asunto,$comentario,$header);
    }
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>QUEJAS O SUGERENCIAS</title>
        <link rel="stylesheet" href="librerias/prueb.css">
         
    </head>
    <body>
         <form id="formulario" class="formulario" action="" method="post">
        <h1> QUEJAS O SUGERENCIAS </h1>
        <div class="box-input">
            <input type="text" name="nombre" id="nombre" class="nombre" placeholder="Escriba su Nombre" required>                     
        </div>
        <div class="box-input">
            <input type="text" name="asunto" id="asunto" class="asunto" placeholder="Asunto" required>                     
        </div>
        <div class="box-input">        
            <input type="email" name="email" id="email" class="email" placeholder="Email" value="" required>
        </div>
        <div class="box-input">
            <textarea name="comentario" id="contenido" class="contenido" placeholder="Mensaje" value=""></textarea>
        </div>

        <p><input type="submit" class="boton" value="Enviar mensaje"></p>
    </form>

</body>

</html>
