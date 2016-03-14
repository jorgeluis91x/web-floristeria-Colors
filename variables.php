<?php

$link = mysql_connect('localhost', 'root', '1')
    or die('No se pudo conectar: ' . mysql_error());
 // echo 'Connected successfully';
  mysql_select_db('janetharcosdm') or die('No se pudo seleccionar la base de datos');

  ?>