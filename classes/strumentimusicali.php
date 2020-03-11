<?php

  class StrumentiMusicali {
    public $tipologiaStrumento;
    public $marca;
    public $modello;
    public $anno;
    public $colore;
    public $prezzo;



    //dati necessari per l'inserimento del prodotto
    public function __construct($_marca, $_modello) {
    $this->marca = $_marca;
    $this->modello = $_modello;
    $this->prezzo = $_prezzo;
    }


    public function setPrezzo($_prezzo) {
      if(!is_int($_prezzo)) {
        die('non e un numero');
      }

      $this->prezzo = $_prezzo;
    }
  }


 ?>
