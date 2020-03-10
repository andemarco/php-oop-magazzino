<?php
  class StrumentiMusicali {
    public $tipologiaStrumento;
    public $marca;
    public $modello;
    public $anno;
    public $colore;
    public $prezzobase;
    public $livello;
    public $prezzo;


    //dati necessari per l'inserimento del prodotto
    public function __construct($_marca, $_modello, $_livello) {
    $this->marca = $_marca;
    $this->modello = $_modello;
    $this->livello = $_livello;
    }
    //calcolo il prezzo in base al livello dello strumento
    function calcPrice($a, $b): int {
      $_prezzo = $a * $b;
      return $this->prezzo = $_prezzo;
    }
    // il livello deve essere un numero da 1 a 3

    public function setLivello($_livello) {
      if(!is_int($_livello)) {
        die('non e un numero');
      }

      $this->livello = $_livello;
    }
  }


 ?>
