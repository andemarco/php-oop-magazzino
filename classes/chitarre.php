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
$strato = new Chitarra('Fender', 'Strato', 500);
$strato->tipologiaStrumento = 'Chitarra';
$strato->tipologiaChitarra = 'Chitarra elettrica';
$strato->pickup = 'Humbucker';
$strato->amplificatore= 'Non incluso';
$strato->anno = 1980;
$strato->colore = 'sunburst';
$strato->prezzo = 500;
$strato->calcPrezzoStudenti($strato->prezzo, $_sconto);

// CHITARRA 2
$gibson = new Chitarra('Gibson', 'Les Paules', 800);
$gibson->tipologiaStrumento = 'Chitarra';
$gibson->tipologiaChitarra = 'Chitarra Semiacustica';
$gibson->pickup = 'Doppio Humbucker';
$gibson->amplificatore= 'Incluso';
$gibson->anno = 1964;
$gibson->colore = 'yellow';
$gibson->prezzo = 800;
$gibson->calcPrezzoStudenti($gibson->prezzo);



var_dump($strato);
var_dump($gibson);
?>
