<?php
	class conexion
	{
		private $server;
		private $user;
		private $password;
		private $bd;

		private $conex;

		function __construct()
		{	$this->server="127.0.0.1";
			//$this->user="root";
			$this->user="root";
			$this->password="";
			$this->bd="bd_tiendaflores";
		}
		function conectar()
		{
			$this->conex=new mysqli($this->server,$this->user,$this->password,$this->bd);
			//echo $this->conex;
			return $this->conex;
		}
		function desconectar()
		{
			$this->conex=null;
		}
	}
?>
