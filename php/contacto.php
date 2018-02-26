<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
$para = 'lordjarman@gmail.com';
$titulo = 'mensaje electroclimarca contacto';
$header = 'From: ' . $email;
$mensaje = 'Mensaje: ' . $mensaje . ' telefono: ' . $telefono;

if ($_POST['submit']) {
  if (mail($para, $titulo, $mensaje, $header)) {
    echo "<script language='javascript'>
    alert('Mensaje enviado, muchas gracias.');
    window.location.href = 'http://electroclimarca.es';
    </script>";
  } else {
    echo 'Error enviando email';
  }
}
?>
