<?php

//en servidor debo poner el numero de IP
$server = 'localhost';
$username='root';
$password='';
$database='portfolio_gisela';
$db = mysqli_connect($server, $username, $password, $database);
mysqli_query($db, "SET NAMES 'utf8'");


//INICIAR LA SESION

session_start();

