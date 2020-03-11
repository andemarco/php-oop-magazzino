<?php

trait ScontoStudenti
{  public $prezzoStudenti;
    function calcPrezzoStudenti($_prezzo)
    {
      return $this->prezzoStudenti = $_prezzo -(($_prezzo * 15)/100);

    }
  }

?>
