<!-- Muhammad Firdaus bin Shahrum 2013803 -->
<!-- Muhammad Amir Hamzah bin Abd Aziz 2011685 -->

<?php

class seat{
  public $seatno;
  public $taken;
  public $row;
  public $col;
  public $fare;

  function set_seatno($seatno){
    $this->seatno = $seatno;
  }

  function get_seatno(){
    return $this->seatno;
  }

  function set_taken($status){
    $this->taken = $status;
  }

  function get_taken(){
    return $this->taken;
  }

  function set_row($row){
    $this->row = $row;
  }

  function get_row(){
    return $this->row;
  }

  function set_col($col){
    $this->col = $col;
  }

  function get_col(){
    return $this->col;
  }

  function set_fare($fare){
    $this->fare = $fare;
  }

  function get_fare(){
    return $this->fare;
  }
}

 ?>
