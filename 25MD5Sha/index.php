<?php
/*sha1 — Calcula el 'hash' sha1 de un string utilizando el Algoritmo 1 US Secure Hash Algorithm 1.*/
$sha = sha1('12345');
/*md5 — Calcula el 'hash' md5 de un string utilizando el Algoritmo MD5 Message-Digest de RSA Data Security, Inc.*/
$md5 = md5('12345');

/*strlen — Obtiene la longitud de un string*/
echo "sha1= ",$sha," y tiene ",strlen($sha), " caracteres<br/><br/>";
echo "MD5= ",$md5," y tiene ",strlen($md5), " caracteres<br/><br/>";

?>
