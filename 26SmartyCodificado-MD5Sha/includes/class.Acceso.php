<?php 

/**
* 
*/
class Acceso{

protected $user;
protected $pass;
protected $email;

/*creamos el constructor para recibir los datos $_POST['password'] y $_POST['user']*/
	public function __construct($usuario, $password, $email){
		$this->user=htmlspecialchars($usuario);
		$this->pass=htmlspecialchars($password);
		$this->email=htmlspecialchars($email);
	}

	
	public function Login()	{
		$db=new Conexion();
		$user=$db->real_escape_string($this->user);
		$pass=sha1($db->real_escape_string($this->pass));

		$sql=$db->query("SELECT nombre,password FROM usuarios WHERE nombre='$user' AND password='$pass';");
/*Recorremos la consulta y convertimos en un array asociativo, donde conseguimos el user y el pass*/
		
/*strtolower() convierte a minusculas*/
		if($db->Rows($sql) > 0){
			/*echo "Si inicio sesion ", $dato['nombre'],'<br/>';*/
			session_start();
			$_SESSION['user']=$this->user;
			header('location: acceso.php');
		}else{
			/*echo "No son los datos correctos";*/
			header('location: index.php?error=datos_incorrectos');
		}
	}


	public function Registro()	{
		$db=new Conexion();
		$user=$db->real_escape_string($this->user);
		$pass=sha1($db->real_escape_string($this->pass));
		$email=$db->real_escape_string($this->email);

		$sql=$db->query("SELECT nombre,email FROM usuarios WHERE nombre='$user' OR email='$email';");

		$existe=$db->Recorrer($sql);

		#if (strtolower($existe['nombre']) != strtolower($this->user) and strtolower($existe['email']) != strtolower($this->email)) {
		if($db->Rows($sql)==0){
/*Ingresar datos a la Base de Datos*/
		$db->query("INSERT INTO usuarios (nombre,email,password) VALUES ('$user','$email','$pass');");
		session_start();
		$_SESSION['user'] =$this->user;
		header('location: acceso.php');
		}else if(strtolower($existe['nombre']) == strtolower($this->user) AND strtolower($existe['email']) != strtolower($this->email)){
			header('location:index.php?modo=registro&error=usuario_usado');
		}else if(strtolower($existe['email']) == strtolower($this->email) AND strtolower($existe['nombre']) != strtolower($this->user)){
			header('location:index.php?modo=registro&error=email_usado');
		}else if(strtolower($existe['email']) == strtolower($this->email) AND strtolower($existe['nombre']) == strtolower($this->user)){
			header('location:index.php?modo=registro&error=email_user_usado');
		}
	}


	public function ClavePerdida()	{
		$db=new Conexion();
		$email=$db->real_escape_string($this->email);

		$sql=$db->query("SELECT email FROM usuarios WHERE email='$email';");
		$existe=$db->Recorrer($sql);

		#if (strtolower($existe['email']) == strtolower($this->email)) {
		if($db->Rows($sql>0)){
# Generamos la contraseña y la enviamos al correo del usuario
			include 'includes/class.GenerarPass.php';
			$passw = new GenerarPass();
			$password=$passw->NuevaPass(11);
			$pass=$password;/*esta pass sin cifrar se envia al usuario*/
			$password=sha1($password);/*Esta password cifrada se almacena en la BD*/
			$db->query("UPDATE usuarios SET password='$password' WHERE email='$this->email';");
/*mail no funciona en localhost*/
			/*mail($this->email,'Cambio de contraseña',"Estimado usuario hemos realizado el cambio de tu contraseña a $pass");*/
			header('location:index.php?modo=claveperdida&succes=ok');
		} else{
			header('location:index.php?modo=claveperdida&error=email_inexistente');
		}
	}



}


 ?>