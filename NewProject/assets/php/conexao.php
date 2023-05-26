<?php
//try {
//    $conn = new PDO("sqlsrv:server=DESKTOP-NELQOT9;database=DMEGA", "david", "123");
//      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//  } catch(PDOException $e) {
//      echo 'ERROR: ' . $e->getMessage();
//  }

// phpinfo();


$conexion = new PDO("sqlsrv:server=DESKTOP-NELQOT9;database=DMEGA", "david", "123");

//$consulta = $conexion->prepare("SELECT * FROM UsersA");
//$consulta->execute();
//$dados = $consulta->fetchAll(PDO::FETCH_ASSOC);
//var_dump($dados);