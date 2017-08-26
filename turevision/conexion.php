<?php

$conexionDB = new mysqli('192.168.239.129','root','hola','mmv');

if ($conexionDB -> connect_error) {
  die('error en la conexionDB');
}
 ?>