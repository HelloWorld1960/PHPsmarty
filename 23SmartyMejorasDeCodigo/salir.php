<?php
  /*session_start() Inicia una nueva sesión o reanudar la existente.
  *session_destroy() Destruye toda la información registrada de una sesión.
  *header(string,http_response_code) envia una cabecera http.*/
  session_start();
  session_destroy();
  header('location:index.php?error=acceso');
?>
