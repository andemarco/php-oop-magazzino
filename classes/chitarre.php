<?php
require_once "classes/strumentimusicali.php";
require_once "traits/traits.php";

class Chitarra extends StrumentiMusicali {
  use ScontoStudenti;
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
$strato->calcPrezzoScontato(20, 500);

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


var_dump($strato);
var_dump($gibson);
?>
