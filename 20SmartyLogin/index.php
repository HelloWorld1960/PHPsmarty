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
			if(!empty($_POST['user']) and !empty($_POST['pass'])){
				/*Enviamos los atributos $_POST['user'] y $_POST['pass'] a la clase Acceso().*/
				include('includes/class.Acceso.php');
				$login = new Acceso($_POST['user'],$_POST['pass']);
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
		echo "registro<br/>";
	break;

	case 'claveperdida':
		echo "clave perdida<br/>";
	break;

	default:
		/*isset() retorna true si la variable esta definida.*/
		if(isset($_GET['error']) and $_GET['error'] == 'campos_vacios'){
			/*instancia de la vista*/
			/*assign() Pasa valores para el template, en este caso es un arreglo asosiativo.*/
			/*display() Despliega el Template.*/
			$template = new Proyecto();
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
