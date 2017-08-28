<?php

$conexionDB = new mysqli('localhost','root','','mmv');

if ($conexionDB -> connect_error) {
  die('error en la conexionDB');
}
 ?>
