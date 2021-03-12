<?php
class Foobar {
  private $state = 'Inactive';
  protected $pro = 'notProtected';
  
  public function set_state($state) {
    $this->state  = $state;
  }   
  
  public function get_state() {  
    return $this->state;
  }
}
