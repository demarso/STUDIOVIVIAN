<?php

$conn = new mysqli("localhost","studiovivian","Std@2020","studiovi_sistema");

if (!$conn) {
   die('Não conseguiu conectar: ' . mysql_error());
}