<?php
require_once "classes/strumentimusicali.php";

class Batteria extends StrumentiMusicali {
  public $tipologiaBatteria;
  public $numeroPezzi;
  public $bacchette;
}

// BATTERIA 1
$pearl = new Batteria('Pearl', 'Roadshow', 1);
$pearl->tipologiaStrumento = 'Batteria';
$pearl->tipologiaBatteria = 'Batteria Acustica Junior';
$pearl->numeroPezzi = '5';
$pearl->bacchette= 'Non incluso';
$pearl->anno = 2020;
$pearl->colore = 'Nero';
$pearl->prezzobase = 310;
$pearl->livello = 1;
$pearl-> calcPrice($pearl->prezzobase, $pearl->livello);


// BATTERIA 2
$roland = new Batteria('ROLAND', 'SPD-SX Sampling Pad', 3);
$roland->tipologiaStrumento = 'Batteria';
$roland->tipologiaBatteria = 'Batteria Elettronica';
$roland->numeroPezzi = '1';
$roland->bacchette= 'Incluso';
$roland->anno = 2020;
$roland->colore = 'Nero';
$roland->prezzobase = 630;
$roland->livello = 3;
$roland-> calcPrice($roland->prezzobase, $roland->livello);

  var_dump($pearl);
  var_dump($roland);

 ?>
