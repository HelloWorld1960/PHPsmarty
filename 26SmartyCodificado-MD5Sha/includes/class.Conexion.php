<?php
/*Conexion a base de datos con POO*/
/*mysqli Es una clase nativa de php*/
class Conexion extends mysqli{

	public function __construct(){
/*Acceder al constructor de la clase mysqli*/
		parent::__construct('localhost','root','','proyecto_php-smarty');
/*Garantizar que el envio de datos se realice con el cotejamoento UTF8*/
		$this->query("SET NAMES 'utf8';");
/*Nos devuelve verdadero si hay un error en la conexion*/
		$this->connect_errno ? die('Error en la conexion') : $x = 'Conectado';
		echo $x,'<br/>';
		unset ($x); /*liberar memoria de la variable*/
	}



	public function Recorrer($y){
/*Retorna un array asosiativo de strings que corresponde a la fila obtenida*/
		return mysqli_fetch_array($y);
	}

	public function Rows($y){
		return mysqli_num_rows($y);
	}

}

	//$db=new Conexion();


 ?>
