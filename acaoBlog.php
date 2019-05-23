<?php
	function conectarBancoPDO() {
	  $pdo = new PDO("mysql:host=localhost;dbname=ludgeros_projeto;", "root", "",
	          array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));
	  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  return $pdo;
	}