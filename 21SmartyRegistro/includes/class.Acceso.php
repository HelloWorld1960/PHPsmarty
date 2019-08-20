<?php
class Acceso{
		/*Atributos*/
		protected $user;
		protected $pass;
		protected $email;

		/*Constructor que inicializa los atributos $_POST['user'], $_POST['password'] y $_POST['email']*/
		public function __construct($usuario, $password, $email){
			$this->user=$usuario;
			$this->pass=$password;
			$this->email=$email;
		}

		/*Metodos*/
		public function Login()	{
			/*Creamos una conexion.*/
			$db = new Conexion();
			/*$sql extrae toda la informacion de la tabla usuarios.
			 *query() realiza una consulta a la BD. Para el éxito de consultas SELECT, SHOW, DESCRIBE, o EXPLAIN devolverá un objeto mysqli_result. Para otras consultas correctas devolverá TRUE. En caso de fallo FALSE*/
			$sql = $db->query("SELECT nombre, password FROM usuarios WHERE nombre='$this->user' AND password='$this->pass';");
			/*Extraer cada fila de la BD*/
			$dato = $db->Recorrer($sql);
			/*strtolower() convierte a minusculas*/
			if(strtolower($dato['nombre']) == strtolower($this->user) AND $dato['password']==$this->pass){
				/*session_start() Inicia una nueva sesión o reanudar la existente. Si no se escribe este metodo No podra utilizarse $_SESSION[].
				*$_SESSION[] establece una variable global de sesion. Esta variable se guarda en el servidor, ademas manda una cookie con el tiempo de vida de la sesion.
				*header(string,http_response_code) envia una cabecera http.*/
				session_start();
				$_SESSION['user'] = $this->user;
				header('location: acceso.php');
			}else{
				header('location: index.php?error=datos_incorrectos');
			}
		}


	public function Registro()	{
		/*Creamos una conexion.*/
		$db=new Conexion();
		/*$sql extrae toda la informacion de la tabla usuarios.
		 *query() realiza una consulta a la BD. Para el éxito de consultas SELECT, SHOW, DESCRIBE, o EXPLAIN devolverá un objeto mysqli_result. Para otras consultas correctas devolverá TRUE. En caso de fallo FALSE*/
		$sql = $db->query("SELECT nombre,email FROM usuarios WHERE nombre='$this->user' OR email='$this->email';");
		/*Extraer cada fila de la BD*/
		$existe = $db->Recorrer($sql);
		/*strtolower() convierte a minusculas*/
		if (strtolower($existe['nombre']) != strtolower($this->user) and strtolower($existe['email']) != strtolower($this->email)) {
			/*Ingresar datos a la Base de Datos*/
			/*session_start() Inicia una nueva sesión o reanudar la existente. Si no se escribe este metodo No podra utilizarse $_SESSION[].
			*$_SESSION[] establece una variable global de sesion. Esta variable se guarda en el servidor, ademas manda una cookie con el tiempo de vida de la sesion.
			*header(string,http_response_code) envia una cabecera http.*/
			$db->query("INSERT INTO usuarios (nombre,email,password) VALUES ('$this->user','$this->email','$this->pass');");
			session_start();
			$_SESSION['user'] = $this->user;
			header('location: acceso.php');
		/*strtolower() convierte a minusculas*/
		}else if(strtolower($existe['nombre']) == strtolower($this->user) AND strtolower($existe['email']) != strtolower($this->email)){
			/*header(string,http_response_code) envia una cabecera http.*/
			header('location:index.php?modo=registro&error=usuario_usado');
		/*strtolower() convierte a minusculas*/
		}else if(strtolower($existe['email']) == strtolower($this->email) AND strtolower($existe['nombre']) != strtolower($this->user)){
			/*header(string,http_response_code) envia una cabecera http.*/
			header('location:index.php?modo=registro&error=email_usado');
		/*strtolower() convierte a minusculas*/
		}else if(strtolower($existe['email']) == strtolower($this->email) AND strtolower($existe['nombre']) == strtolower($this->user)){
			/*header(string,http_response_code) envia una cabecera http.*/
			header('location:index.php?modo=registro&error=email_user_usado');
		}
	}


	public function ClavePerdida()	{
		# code...
	}

}

?>
