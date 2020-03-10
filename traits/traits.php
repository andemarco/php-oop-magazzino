<?php

trait ScontoStudenti
{   public $sconto;
    public $prezzoScontato;
    function calcPrezzoScontato($_sconto, $prezzo)
    {
      return $this->$prezzoScontato = ($prezzo * $_sconto)/100;

    }
  }

?>
