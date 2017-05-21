<?php
	require_once("../models/categoria.php");
	//$accion=$_POST['accion'];
	$accion=$_REQUEST['accion'];
	switch($accion)
	{
		case 'guardar':
			//Recibimos los datos
			$id=$_REQUEST['id'];
			$dni=$_REQUEST['dni'];
			$apellidos=$_REQUEST['apellidos'];
			$nombres=$_REQUEST['nombres'];
			$fechanac=$_REQUEST['fechanac'];
			$email=$_REQUEST['email'];
			$sexo=$_REQUEST['sexo'];
			//Procedemos a guardar
			$cli=new cliente($id,$dni,$apellidos,$nombres,$fechanac,$email,$sexo);
			$id=$cli->guardar();
			echo $id;
			break;
		case 'buscarDNI':
			$dni=$_REQUEST['dni'];
			$cli=new cliente(0,$dni,"","","","","");
			$a=$cli->buscarDNI();
			if($a=="")
				$a[0][0]=0;
			$j=json_encode($a);
			echo $j;
			break;
	}
?>
