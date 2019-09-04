<?php
class Acceso{
	/*Atributos*/
	protected $user;
	protected $pass;
	protected $email;

	/*Constructor que inicializa los atributos $_POST['user'], $_POST['password'] y $_POST['email']*/
	public function __construct($usuario, $password, $email){
		$this->user=htmlspecialchars($usuario);
		$this->pass=htmlspecialchars($password);
		$this->email=htmlspecialchars($email);
	}

	/*Metodos*/
	public function Login()	{
		/*Creamos una conexion.*/
		$db=new Conexion();
		/*mysqli_real_escape_string() escapa los caracteres especiales de una cadena para usarla en una sentencia SQL.*/
		$user=$db->real_escape_string($this->user);
		$pass=sha1($db->real_escape_string($this->pass));
		/*$sql extrae toda la informacion de la tabla usuarios.
		*query() realiza una consulta a la BD.*/
		$sql=$db->query("SELECT nombre,password FROM usuarios WHERE nombre='$user' AND password='$pass';");
		if($db->Rows($sql) > 0){//Si el numero de filas es mayor a cero ...
			/*session_start() Inicia una nueva sesión o reanudar la existente. Si no se escribe este metodo No podra utilizarse $_SESSION[].
			*$_SESSION[] establece una variable global de sesion. Esta variable se guarda en el servidor, ademas manda una cookie con el tiempo de vida de la sesion.
			*header(string,http_response_code) envia una cabecera http.*/
			session_start();
			$_SESSION['user']=$this->user;
			header('location: acceso.php');
		}else{
			/*header(string,http_response_code) envia una cabecera http.*/
			header('location: index.php?error=datos_incorrectos');
		}
	}

	public function Registro()	{
		/*Creamos una conexion.*/
		$db=new Conexion();
		/*mysqli_real_escape_string() escapa los caracteres especiales de una cadena para usarla en una sentencia SQL.
		*sha1 — Calcula el 'hash' sha1 de un string utilizando el Algoritmo 1 US Secure Hash Algorithm 1.*/
		$user = $db->real_escape_string($this->user);
		$pass = sha1($db->real_escape_string($this->pass));
		$email = $db->real_escape_string($this->email);
		/*$sql extrae toda la informacion de la tabla usuarios.
		*query() realiza una consulta a la BD. Para el éxito de consultas SELECT, SHOW, DESCRIBE, o EXPLAIN devolverá un objeto mysqli_result. Para otras consultas correctas devolverá TRUE. En caso de fallo FALSE*/
		$sql = $db->query("SELECT nombre,email FROM usuarios WHERE nombre='$user' OR email='$email';");
		/*$existe almacena un array asociativo de strings que representa a la fila obtenida del conjunto de resultados, donde cada clave del array representa el nombre de una de las columnas de de este. */
		$existe = $db->Recorrer($sql);
		if($db->Rows($sql) == 0){
			/*Ingresar datos a la Base de Datos*/
			/*session_start() Inicia una nueva sesión o reanudar la existente. Si no se escribe este metodo No podra utilizarse $_SESSION[].
			*$_SESSION[] establece una variable global de sesion. Esta variable se guarda en el servidor, ademas manda una cookie con el tiempo de vida de la sesion.
			*header(string,http_response_code) envia una cabecera http.*/
			$db->query("INSERT INTO usuarios (nombre,email,password) VALUES ('$user','$email','$pass');");
			session_start();
			$_SESSION['user'] =$this->user;
			header('location: acceso.php');
		/*strtolower() convierte una cadena a minusculas*/
		}else if(strtolower($existe['nombre']) == strtolower($this->user) AND strtolower($existe['email']) != strtolower($this->email)){
			/*header(string,http_response_code) envia una cabecera http.*/
			header('location:index.php?modo=registro&error=usuario_usado');
		}else if(strtolower($existe['email']) == strtolower($this->email) AND strtolower($existe['nombre']) != strtolower($this->user)){
			/*header(string,http_response_code) envia una cabecera http.*/
			header('location:index.php?modo=registro&error=email_usado');
		}else if(strtolower($existe['email']) == strtolower($this->email) AND strtolower($existe['nombre']) == strtolower($this->user)){
			/*header(string,http_response_code) envia una cabecera http.*/
			header('location:index.php?modo=registro&error=email_user_usado');
		}
	}


	public function ClavePerdida()	{
		/*Creamos una conexion.*/
		$db = new Conexion();
		/*mysqli_real_escape_string() escapa los caracteres especiales de una cadena para usarla en una sentencia SQL.*/
		$email = $db->real_escape_string($this->email);
		/*$sql extrae toda la informacion de la tabla usuarios.
		 *query() realiza una consulta a la BD.*/
		$sql = $db->query("SELECT email FROM usuarios WHERE email='$email';");
		/*$existe almacena un array asociativo de strings que representa a la fila obtenida del conjunto de resultados, donde cada clave del array representa el nombre de una de las columnas de de este. */
		$existe = $db->Recorrer($sql);
		if($db->Rows($sql) > 0){//Si el numero de filas es mayor a cero ...
			#Generamos la contraseña y la enviamos al correo del usuario
			include 'includes/class.GenerarPass.php';
			$passw = new GenerarPass();
			$password = $passw->NuevaPass(11);
			$pass = $password;/*esta pass sin cifrar se envia al usuario*/
			$password = sha1($password);/*Esta password cifrada se almacena en la BD*/
			$db->query("UPDATE usuarios SET password='$password' WHERE email='$this->email';");
			/*mail no funciona en localhost*/
			/*mail($this->email,'Cambio de contraseña',"Estimado usuario hemos realizado el cambio de tu contraseña a $password");*/
			header('location:index.php?modo=claveperdida&succes=ok');
		} else{
			header('location:index.php?modo=claveperdida&error=email_inexistente');
		}
	}

}
?>
