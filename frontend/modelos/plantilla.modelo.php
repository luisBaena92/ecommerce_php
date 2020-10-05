<?php

require_once "conexion.php";

//esta clase es para asignar estilos dinamicos a la plantilla mediante la bd


class ModeloPlantilla{

	//se asigna la propiedad static aun metodo o funcion dentro de una clase cuando se recibe un parametro
	static public function mdlEstiloPlantilla($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();

	}

}