<?php
  class Chitarra {
    public $marca;
    public $modello;
    public $anno;
    public $colore;
    public $prezzo;
    public $livello;

    //dati necessari per l'inserimento del prodotto
    public function __construct($_marca, $_modello, $_livello) {
    $this->marca = $_marca;
    $this->modello = $_modello;
    $this->livello = $_livello;
    }
    //calcolo il prezzo in base al livello dello strumento
    public function calcPrice($_prezzo) {
      if(empty($this->prezzo)) {
        die('Non hai messo il prezzo');
      }
      return $this->prezzo * $_livello;
    }
    //il livello deve essere un numero da 1 a 3

    public function setLivello($_livello) {
      if(!is_int($_livello)) {
        die('non e un numero');
      }

      $this->livello = $_livello;
    }
  }


 ?>
