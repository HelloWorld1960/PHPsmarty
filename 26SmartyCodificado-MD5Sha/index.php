<!-- Smary es un motor de plantillas para separa el codigo del diseño -->
<?php
include('includes/comunes.php');
require('includes/class.Conexion.php');

/*isset() retorna True si la variable esta definida. */
$modo = isset($_GET['modo']) ? $_GET['modo'] : 'default';

switch($modo){
	case 'login':
		/*isset() retorna true si la variable esta definida.*/
		if (isset($_POST['login'])) {
			/*echo "se ha enviado el formulario<br/>";*/
			if(!empty($_POST['user']) and !empty($_POST['pass'])){
				/*Enviamos los atributos $_POST['user'] y $_POST['pass'] a la clase Acceso().*/
				include('includes/class.Acceso.php');
				$login = new Acceso($_POST['user'],$_POST['pass'],null);
				$login->Login();
			} else{
				/*header(string,http_response_code) envia una cabecera http.*/
				header('location: index.php?error=campos_vacios');
			}
		} else {
			/*header(string,http_response_code) envia una cabecera http.*/
			header('location: index.php');
		}
	break;

	case 'registro':
		if (isset($_POST['registro'])) {
			/*isset() retorna true si la variable esta definida.*/
			if (!empty($_POST['user']) and !empty($_POST['email']) and !empty($_POST['pass'])) {
				/*Enviamos los atributos $_POST['user'], $_POST['pass'] y $_POST['email'] a la clase Acceso().*/
				include('includes/class.Acceso.php');
				$registro=new Acceso($_POST['user'],$_POST['pass'],$_POST['email']);
				$registro->Registro();
			} else {
				/*header(string,http_response_code) envia una cabecera http.*/
				header('location:index.php?modo=registro&error=campos_vacios');
			}
		/*isset() retorna true si la variable esta definida.*/
		} else if (isset($_GET['error']) and $_GET['error']=='campos_vacios') {
			/*instancia de la vista*/
			/*assign() Pasa valores para el template, en este caso es un arreglo asosiativo.*/
			/*display() Despliega el Template.*/
			$template=new Proyecto();
			$template->assign(array(
				'error' => 'ERROR: debes llenar todos los campos para registrarte'
			));
			$template->display('public/registro.tpl');
		/*isset() retorna true si la variable esta definida.*/
		} else if (isset($_GET['error']) and $_GET['error']=='usuario_usado') {
			/*instancia de la vista*/
			/*assign() Pasa valores para el template, en este caso es un arreglo asosiativo.*/
			/*display() Despliega el Template.*/
			$template=new Proyecto();
			$template->assign(array(
				'error' => 'ERROR: El usuario ingresado ya existe'
			));
			$template->display('public/registro.tpl');
		/*isset() retorna true si la variable esta definida.*/
		} else if (isset($_GET['error']) and $_GET['error']=='email_usado') {
			/*instancia de la vista*/
			/*assign() Pasa valores para el template, en este caso es un arreglo asosiativo.*/
			/*display() Despliega el Template.*/
			$template=new Proyecto();
			$template->assign(array(
				'error' => 'ERROR: El email ingresado ya existe'
			));
			$template->display('public/registro.tpl');
		/*isset() retorna true si la variable esta definida.*/
		}  else if (isset($_GET['error']) and $_GET['error']=='email_user_usado') {
			/*instancia de la vista*/
			/*assign() Pasa valores para el template, en este caso es un arreglo asosiativo.*/
			/*display() Despliega el Template.*/
			$template=new Proyecto();
			$template->assign(array(
				'error' => 'ERROR: El usuario y el email ingresado ya existen, ¿has olvidado tu cuenta? <a href="index.php?modo=claveperdida">Recuperala</a>'
			));
			$template->display('public/registro.tpl');
		} else {
			/*instancia de la vista*/
			/*display() Despliega el Template.*/
			$template=new Proyecto();
			$template->display('public/registro.tpl');
		}
	break;

	case 'claveperdida':
		/*isset() retorna true si la variable esta definida.*/
		if (isset($_POST['email'])) {
			if (!empty($_POST['email'])) {
				/*Enviamos el atributo $_POST['email'] a la clase Acceso().*/
				include('includes/class.Acceso.php');
				$recuperar=new Acceso('','',$_POST['email']);
				$recuperar->ClavePerdida();
			}else{
				/*header(string,http_response_code) envia una cabecera http.*/
				header('location:index.php?modo=claveperdida&error=campo_vacio');
			}
		/*isset() retorna true si la variable esta definida.*/
		} else if (isset($_GET['error']) AND $_GET['error'] == 'campo_vacio') {
			/*instancia de la vista*/
			/*assign() Pasa valores para el template, en este caso es un arreglo asosiativo.*/
			/*display() Despliega el Template.*/
			$template=new Proyecto();
			$template->assign(array(
				'error'=>'ERROR: Debes llenar el campo de email'
			));
			$template->display('public/claveperdida.tpl');
		/*isset() retorna true si la variable esta definida.*/
		} else if (isset($_GET['error']) AND $_GET['error'] == 'email_inexistente') {
			/*instancia de la vista*/
			/*assign() Pasa valores para el template, en este caso es un arreglo asosiativo.*/
			/*display() Despliega el Template.*/
			$template=new Proyecto();
			$template->assign(array(
				'error'=>'ERROR: El email que has ingresado no existe'
			));
			$template->display('public/claveperdida.tpl');
		/*isset() retorna true si la variable esta definida.*/
		}  else if (isset($_GET['succes']) AND $_GET['succes'] == 'ok') {
			/*instancia de la vista*/
			/*assign() Pasa valores para el template, en este caso es un arreglo asosiativo.*/
			/*display() Despliega el Template.*/
			$template=new Proyecto();
			$template->assign(array(
				'error'=>'Muy bien, hemos enviado una nueva contraseña'
			));
			$template->display('public/claveperdida.tpl');
		} else {
			/*instancia de la vista*/
			/*display() Despliega el template.*/
			$template=new Proyecto();
			$template->display('public/claveperdida.tpl');
		}
	break;

	default:
	/*isset() retorna true si la variable esta definida.*/
		if(isset($_GET['error']) and $_GET['error'] == 'campos_vacios'){
			/*instancia de la vista*/
			/*assign() Pasa valores para el template, en este caso es un arreglo asosiativo.*/
			/*display() Despliega el Template.*/
			$template=new Proyecto();
			$template->assign(array('error'=>'ERROR: Debes llenar los campos'));
			$template->display('public/index.tpl');
		/*isset() retorna true si la variable esta definida.*/
		}else if(isset($_GET['error']) and $_GET['error'] == 'datos_incorrectos'){
			/*instancia de la vista*/
			/*assign() Pasa valores para el template, en este caso es un arreglo asosiativo.*/
			/*display() Despliega el Template.*/
			$template=new Proyecto();
			$template->assign(array('error'=>'ERROR: Datos incorrectos'));
			$template->display('public/index.tpl');
		/*isset() retorna true si la variable esta definida.*/
		}else if(isset($_GET['error']) and $_GET['error'] == 'acceso'){
			/*instancia de la vista*/
			/*assign() Pasa valores para el template, en este caso es un arreglo asosiativo.*/
			/*display() Despliega el Template.*/
			$template=new Proyecto();
			$template->assign(array('error'=>'ERROR: La session ha caducado o no has iniciado sesion'));
			$template->display('public/index.tpl');
		}else{
		/*instancia de la vista*/
		/*display() Despliega el Template.*/
		$template=new Proyecto();
		$template->display('public/index.tpl');
		}
	break;
}
?>
