<?php
require_once("../config/conexion.php");
/**
 *
 */
class user
{

private $id;
private $usuario;
private $password;
private $nombre;
private $apellidos;
private $dni;
private $email;
private $fechCrea;
private $activo;
private $admin;

private $mc;
}
function __construct($id,$usuario,$password,$nombre,$apellidos,$dni,$email,$fechCre,$aactivo,$admin)
{
  $this->id=$id;
  $this->usuario=$usuario;
  $this->password=$password;
  $this->nombres=$nombres;
  $this->apellidos=$apellidos;
  $this->dni=$dni;
  $this->email=$email;
  $this->fechCrea=$fechCrea;
  $this->activo=$activo;
  $this->admin=$admin;

  	$this->mc=new conexion();
}


?>





 ?>
