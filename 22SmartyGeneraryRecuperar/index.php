<!-- Smary es un motor de plantillas para separa el codigo del diseño -->
<?php
include('includes/comunes.php');
require('includes/class.Conexion.php');

/*Asignale el valor de $_GET a $modo si esta definida(isset) y si no(:) asignale el valor default*/
$modo = isset($_GET['modo']) ? $_GET['modo'] : 'default';

switch($modo){
	case 'login':
		/*echo "capture login<br/>";*/
		if (isset($_POST['login'])) {
			/*echo "se ha enviado el formulario<br/>";*/
			if(!empty($_POST['user']) and !empty($_POST['pass'])){
				/*echo "NO estan vacios";*/
				include('includes/class.Acceso.php');
/*Le asignamos estos atributo a la clase Acceso(). Podria pasarselos a el metodo Login() pero si se los paso a la clase puedo globalizar los atributos*/
				$login=new Acceso($_POST['user'],$_POST['pass'],null);
				$login->Login();
			} else{
				/*echo "SI estan vacios";*/
				header('location: index.php?error=campos_vacios');
			}
		} else {
			/*echo "No se ha enviado<br/>";*/
			header('location: index.php');
		}

	break;

	case 'registro':
		if (isset($_POST['registro'])) {
			/*echo "Se ha mandado el formulario";*/
			if (!empty($_POST['user']) and !empty($_POST['email']) and !empty($_POST['pass'])) {
				/*echo "NO estan vacios";*/
				include('includes/class.Acceso.php');
				$registro=new Acceso($_POST['user'],$_POST['pass'],$_POST['email']);
				$registro->Registro();
			} else {
				header('location:index.php?modo=registro&error=campos_vacios');
			}
			
		} else if (isset($_GET['error']) and $_GET['error']=='campos_vacios') {
			$template=new Proyecto();
			$template->assign(array(
				'error' => 'ERROR: debes llenar todos los campos para registrarte'
			));
			$template->display('public/registro.tpl');
		} else if (isset($_GET['error']) and $_GET['error']=='usuario_usado') {
			$template=new Proyecto();
			$template->assign(array(
				'error' => 'ERROR: El usuario ingresado ya existe'
			));
			$template->display('public/registro.tpl');
		} else if (isset($_GET['error']) and $_GET['error']=='email_usado') {
			$template=new Proyecto();
			$template->assign(array(
				'error' => 'ERROR: El email ingresado ya existe'
			));
			$template->display('public/registro.tpl');
		}  else if (isset($_GET['error']) and $_GET['error']=='email_user_usado') {
			$template=new Proyecto();
			$template->assign(array(
				'error' => 'ERROR: El usuario y el email ingresado ya existen, ¿has olvidado tu cuenta? <a href="index.php?modo=claveperdida">Recuperala</a>'
			));
			$template->display('public/registro.tpl');
		} else {
			$template=new Proyecto();
			$template->display('public/registro.tpl');
		}
		
	break;

	case 'claveperdida':
		/*echo "clave perdida<br/>";*/
		if (isset($_POST['email'])) {
			if (!empty($_POST['email'])) {
				/*echo "Esta definida, o se envio el formulario";*/
				include('includes/class.Acceso.php');
				$recuperar=new Acceso('','',$_POST['email']);
				$recuperar->ClavePerdida();
			}else{
				/*echo "Esta vacio";*/
				header('location:index.php?modo=claveperdida&error=campo_vacio');
			}
		} else if (isset($_GET['error']) AND $_GET['error'] == 'campo_vacio') {
			# code...
			$template=new Proyecto();
			$template->assign(array(
				'error'=>'ERROR: Debes llenar el campo de email'
			));
			$template->display('public/claveperdida.tpl');
		} else if (isset($_GET['error']) AND $_GET['error'] == 'email_inexistente') {
			# code...
			$template=new Proyecto();
			$template->assign(array(
				'error'=>'ERROR: El email que has ingresado no existe'
			));
			$template->display('public/claveperdida.tpl');
		}  else if (isset($_GET['succes']) AND $_GET['succes'] == 'ok') {
			# code...
			$template=new Proyecto();
			$template->assign(array(
				'error'=>'Muy bien, hemos enviado una nueva contraseña'
			));
			$template->display('public/claveperdida.tpl');
		} else {
			$template=new Proyecto();
			$template->display('public/claveperdida.tpl');
		}
		
		
	break;

	default:
		if(isset($_GET['error']) and $_GET['error'] == 'campos_vacios'){
			$template=new Proyecto();
			$template->assign(array('error'=>'ERROR: Debes llenar los campos'));
/*Le estamos diciendo que template mostrar*/
			$template->display('public/index.tpl');
		}else if(isset($_GET['error']) and $_GET['error'] == 'datos_incorrectos'){
			$template=new Proyecto();
			$template->assign(array('error'=>'ERROR: Datos incorrectos'));
/*Le estamos diciendo que template mostrar*/
			$template->display('public/index.tpl');
		}else if(isset($_GET['error']) and $_GET['error'] == 'acceso'){
			$template=new Proyecto();
			$template->assign(array('error'=>'ERROR: La session ha caducado o no has iniciado sesion'));
/*Le estamos diciendo que template mostrar*/
			$template->display('public/index.tpl');
		}else{
		$template=new Proyecto();
/*Le estamos diciendo que template mostrar*/
		$template->display('public/index.tpl');
		}
	break;


}











?>
