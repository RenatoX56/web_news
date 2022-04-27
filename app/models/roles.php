<?php

require_once('../db.php');


function getRolNombre($name)
{
  $rol = $pdo->prepare("SELECT * FROM roles WHERE name = ?");
  $rol->bindParam(1, $name);
  $rol->execute();

  return $rol->fetch();
}