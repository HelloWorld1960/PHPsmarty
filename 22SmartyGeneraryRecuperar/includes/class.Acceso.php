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
		$this->user=$usuario;
		$this->pass=$password;
		$this->email=$email;
	}

	
	public function Login()	{
		$db=new Conexion();
		$sql=$db->query("SELECT nombre,password FROM usuarios WHERE nombre='$this->user' AND password='$this->pass';");
/*Recorremos la consulta y convertimos en un array asociativo, donde conseguimos el user y el pass*/
		$dato = $db->Recorrer($sql);
/*strtolower() convierte a minusculas*/
		if(strtolower($dato['nombre'])==strtolower($this->user) AND $dato['password']==$this->pass){
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

		$sql=$db->query("SELECT nombre,email FROM usuarios WHERE nombre='$this->user' OR email='$this->email';");

		$existe=$db->Recorrer($sql);

		if (strtolower($existe['nombre']) != strtolower($this->user) and strtolower($existe['email']) != strtolower($this->email)) {
/*Ingresar datos a la Base de Datos*/
		$db->query("INSERT INTO usuarios (nombre,email,password) VALUES ('$this->user','$this->email','$this->pass');");
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

		$sql=$db->query("SELECT email FROM usuarios WHERE email='$this->email';");
		$existe=$db->Recorrer($sql);

		if (strtolower($existe['email']) == strtolower($this->email)) {
# Generamos la contraseña y la enviamos al correo del usuario
			include 'includes/class.GenerarPass.php';
			$passw = new GenerarPass();
			$password=$passw->NuevaPass(11);
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