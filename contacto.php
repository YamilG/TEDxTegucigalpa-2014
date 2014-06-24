<?php

  $nombre = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $to = "yamilg@gmail.com";
  $subject = "TEDxTegucigalpa Contacto";
  $body = "Nombre: $nombre \nEmail: $email \nMensaje: $message";
  $headers = "From: no-reply@tedxtegucigalpa.org";


  mail($to, $subject, $body, $headers);
?>

<!DOCTYPE html>
<html lang="es-419">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="TEDxTegucigalpa es un evento que junta a los hondureños con grandes ideas que están cambiando a su país y al mundo." />
    <meta name="keywords" content="ted, tedx, tegucigalpa, honduras, talento, ideas, desarrollo" />
    <meta name="author" content="Yamil Gonzales" />
    <title>TEDxTegucigalpa 2014 — Marcando la diferencia</title>

    <link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/jquery.fullPage.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </head>
  <body>


    <div class="section" id="intro">
      <div class="wrapper">

         <div class="layer">
          <p class="highlight">
          Hemos recibido tu mensaje. Pronto un miembro de nuestro equipo te responderá. ¡Muchas gracias por contactarnos!</p>

          
        </div>
        <a href="index.html">Regresar a la página principal</a>
      </div>
    </div>
    

  </body>
</html>