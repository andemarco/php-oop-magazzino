<?php

  class StrumentiMusicali {
    public $tipologiaStrumento;
    public $marca;
    public $modello;
    public $anno;
    public $colore;
    public $prezzobase;
    public $livello;


    //dati necessari per l'inserimento del prodotto
    public function __construct($_marca, $_modello, $_livello) {
    $this->marca = $_marca;
    $this->modello = $_modello;
    $this->livello = $_livello;
    }


    public function setLivello($_livello) {
      if(!is_int($_livello)) {
        die('non e un numero');
      }

      $this->livello = $_livello;
    }
  }


 ?>
