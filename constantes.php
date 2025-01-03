<?php
  /* 
    Crear un programa para convertir
    de cm a pulgadas y de kg a libras
  */
  define('PULGADA', 0.393701);
  define('LIBRA', 2.20462);

  $cm = 50;
  $kilo = 5;

  echo $cm * PULGADA . '<br>';
  echo $kilo * LIBRA . '<br>';
?>