<?php
$data = '16-02-1989';
$dia =  date('l', strtotime($data));

switch ($dia) {
  case 'Sunday':
    echo "Domingo";
    break;
  case 'Monday':
    echo "Segunda-Feira";
    break;
  case 'Tuesday':
    echo 'Terça-Feira';
    break;
  case 'Wednesday':
    echo 'Quarta-Feira';
    break;
  case 'Thursday';
    echo 'Quita-Feira';
    break;
  case 'Friday':  
    echo 'Sexta-Feira';
    break;

  default:
    // code...
    break;
}
