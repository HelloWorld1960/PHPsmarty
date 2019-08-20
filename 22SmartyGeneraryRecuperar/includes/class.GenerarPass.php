<?php 

/**
* 
*/
class generarPass{
	private $cadena;
	private $logintud;
	private $passw;
	
	public function __construct(){
		$this->cadena='ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
		$this->passw='';
	}

	public function NuevaPass($long){
		$lng_cadena=strlen($this->cadena);
		$this->logintud=$long;

		for ($x=1; $x < $this->logintud; $x++) { 
			$aleatorio = mt_rand(0, $lng_cadena);
			$this->passw .= substr($this->cadena,$aleatorio,1);
		}
		return $this->passw;
	}
}




 ?>