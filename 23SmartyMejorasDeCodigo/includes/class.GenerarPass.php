<?php
class generarPass{
	/*Atributos*/
	private $cadena;
	private $logintud;
	private $passw;

	/*Constructor*/
	public function __construct(){
		$this->cadena='ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
		$this->passw='';
	}

	/*Metodos*/
	public function NuevaPass($long){
		/*strlen() retorna la longitud de un string.*/
		$lng_cadena = strlen($this->cadena);
		$this->logintud = $long;

		/*mt_rand(min, max) Genera numeros enteros aleatorios.*/
		/*substr(string,start,length) retorna una parte de una cadena*/
		for ($x=1; $x < $this->logintud; $x++) {
			$aleatorio = mt_rand(0, $lng_cadena);
			$this->passw .= substr($this->cadena,$aleatorio,1);
		}
		return $this->passw;
	}
}
?>
