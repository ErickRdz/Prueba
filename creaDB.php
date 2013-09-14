<?php

	$con = mysql_connect('localhost', 'root', '');
	
	if (!$con) {
	
		die('No conectado : ' . mysql_error());
	  
	}
	else{
	
		$db = mysql_select_db('potchDB', $con);
		
		if (!$db) {
		
			$sql="CREATE DATABASE potchDB";
			
			if	(mysql_query($sql, $con) ){
			
				print 'La base de datos ha sido creada';
				
				mysql_select_db("potchDB", $con) or die("Problemas en la selección de la base de datos");
				
				$sql1="	CREATE TABLE alumnos (num_ctrl VARCHAR (10), nombre VARCHAR (50), apep VARCHAR (50), apem VARCHAR (50));";					
				mysql_query($sql1, $con) or die("Problemas");
				$sql2="	CREATE TABLE maestros (id_emp VARCHAR (10), nombre VARCHAR (50), apep VARCHAR (50), apem VARCHAR (50));";					
				mysql_query($sql2, $con) or die("Problemas");
				$sql3="	CREATE TABLE cursos (id_curso VARCHAR (5), nombre VARCHAR (50));";					
				mysql_query($sql3, $con) or die("Problemas");
				$sql4="	CREATE TABLE idioma (idioma VARCHAR (10));";					
				mysql_query($sql4, $con) or die("Problemas");
				$sql5="	CREATE TABLE institucion (clave VARCHAR (15), nombre VARCHAR (50), estado VARCHAR (50), ciudad VARCHAR (50), mun VARCHAR (50));";					
				mysql_query($sql5, $con) or die("Problemas");
				$sql6="	CREATE TABLE carreras (id_carrera VARCHAR (10), nombre VARCHAR (50));";					
				mysql_query($sql6, $con) or die("Problemas");
				$sql7="	CREATE TABLE jefes (id_emp VARCHAR (10), nombre VARCHAR (50), apep VARCHAR (50), apem VARCHAR (50));";					
				mysql_query($sql7, $con) or die("Problemas");
				$sql8="	CREATE TABLE administracion(id_usuario VARCHAR (10), contrasena VARCHAR (50)) ;";					
				mysql_query($sql8, $con) or die("Problemas");
				$sql9="CREATE TABLE publicaciones (id_publicacion VARCHAR (10), id_usuario VARCHAR (50), fecha DATE, hora TIME, texto VARCHAR(500));";					
				mysql_query($sql9, $con) or die("Problemas");
				
			
			}
			else{
			
				print 'La base de datos no pudo ser creada';
			
			}
		  
		}
	
	}

?>