<?php
require_once "classes/strumentimusicali.php";


class Batteria extends StrumentiMusicali {
  use ScontoStudenti;
  public $tipologiaBatteria;
  public $numeroPezzi;
  public $bacchette;
}

// BATTERIA 1
$pearl = new Batteria('Pearl', 'Roadshow', 310);
$pearl->tipologiaStrumento = 'Batteria';
$pearl->tipologiaBatteria = 'Batteria Acustica Junior';
$pearl->numeroPezzi = '5';
$pearl->bacchette= 'Non incluso';
$pearl->anno = 2020;
$pearl->colore = 'Nero';
$pearl->prezzo = 310;
$pearl->calcPrezzoStudenti($pearl->prezzo);




// BATTERIA 2
$roland = new Batteria('ROLAND', 'SPD-SX Sampling Pad', 630);
$roland->tipologiaStrumento = 'Batteria';
$roland->tipologiaBatteria = 'Batteria Elettronica';
$roland->numeroPezzi = '1';
$roland->bacchette= 'Incluso';
$roland->anno = 2020;
$roland->colore = 'Nero';
$roland->prezzo = 630;
$roland->calcPrezzoStudenti($roland->prezzo);


  var_dump($pearl);
  var_dump($roland);

 ?>
