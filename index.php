<?php
  require_once 'classes/chitarra.php';
  // CHITARRA 1
  $strato = new Chitarra('Fender', 'Strato', 3);
  $strato->anno = 1980;
  $strato->colore = 'sunburst';
  $strato->prezzobase = 500;
  $strato->livello = 3;
  $strato-> calcPrice($strato->prezzobase, $strato->livello);


  // CHITARRA 2
  $gibson = new Chitarra('Gibson', 'Les Paules', 3);
  $gibson->anno = 1964;
  $gibson->colore = 'yellow';
  $gibson->prezzobase = 800;
  $gibson->livello = 3;
  $gibson-> calcPrice($gibson->prezzobase, $strato->livello);

  var_dump($strato);
  var_dump($gibson);





 ?>
