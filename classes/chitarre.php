<?php
require 'classes/strumentimusicali.php';

class Chitarra extends StrumentiMusicali {
  public $tipologiaChitarra;
  public $pickup;
  public $amplificatore;
}


// CHITARRA 1
$strato = new Chitarra('Fender', 'Strato', 3);
$strato->tipologiaStrumento = 'Chitarra';
$strato->tipologiaChitarra = 'Chitarra elettrica';
$strato->pickup = 'Humbucker';
$strato->amplificatore= 'Non incluso';
$strato->anno = 1980;
$strato->colore = 'sunburst';
$strato->prezzobase = 500;
$strato->livello = 3;
$strato-> calcPrice($strato->prezzobase, $strato->livello);


// CHITARRA 2
$gibson = new Chitarra('Gibson', 'Les Paules', 3);
$gibson->tipologiaStrumento = 'Chitarra';
$gibson->tipologiaChitarra = 'Chitarra Semiacustica';
$gibson->pickup = 'Doppio Humbucker';
$gibson->amplificatore= 'Incluso';
$gibson->anno = 1964;
$gibson->colore = 'yellow';
$gibson->prezzobase = 800;
$gibson->livello = 3;
$gibson-> calcPrice($gibson->prezzobase, $strato->livello);

var_dump($strato);
var_dump($gibson);
?>
