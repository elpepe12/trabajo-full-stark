<html>
<body bgcolor="#000000">
<font color="#00FF00">
<h4>


<html>
<body bgcolor="#000000">
<font color="#00FF00">
<h2> 
<?php

// nombre del servidor, usuario, contraseña or die
$conn = new mysqli("localhost", "root","") or die (Mysqli_error());
echo "se ha conectado correctamente";
//se escribe la sentencia sql
$sql="create database bictia";
mysqli_query($conn, $sql) or die ("<br>error al crear la base de datos");
echo "<br>se ha creado la base de datos exitosamente";
//selecione la base de datos creada
mysqli_select_db($conn, "bictia") or die (mysqli_error()."no se ha selecionado");
echo "<br> se ha selecionado la base de datos";


$sql ="create table usuarios (
     id_usuarios   int AUTO_INCREMENT not null,
	   cedula  int (10) not null,
     nombre        varchar(50),
     apellido      varchar(100),
    
     correo        varchar(50),
     sexo          varchar(10),
     telefono      int(10),
     fecha_nacimiento  date DEFAULT NULL,
     edad          int DEFAULT NULL,
     perfil_usuario varchar (50) DEFAULT NULL,
     contrasena  varchar(50) DEFAULT NULL,
     rcontrasena varchar(50) DEFAULT NULL,
     perfil_jugador varchar(1000) DEFAULT NULL,
     categoria varchar(50)  DEFAULT NULL,
     id_deporte int not null,
     
     CONSTRAINT usuarios_pk PRIMARY KEY ( id_usuarios,cedula ))";
 mysqli_query($conn,$sql) or die ("<br> error al crear la tabla usuarios");
 echo"<br> se ha creado la tabla usuarios";

 $sql =" insert into usuarios values(1,1020830590,'jose','prueba','pruebauno@xdd','m',31085555,'1-1-12',19,'prueba1','p1','p1','jugador de categoria quinta nivel basico','quinta',1)";
 mysqli_query($conn,$sql) or die ("<br> error al insertar el dato usuario");
 echo"<br> se inserto el dato";

 ?>
 </h4>
 </font>
 </html>
