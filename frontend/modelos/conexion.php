<?php

class Conexion{

	public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=ecommerce",
						"root",
						"",
						// esto es para que formatee de forma global acentos, tildes del español latino
						array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		                      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
						);

		return $link;

	}


}



