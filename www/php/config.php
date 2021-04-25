<?php
  $hostname = "mysql";
  $username = "root";
  $password = "my_password";
  $dbname = "systemsg_chat";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Error al conectarse a la base de datos.".mysqli_connect_error();
  }
?>
