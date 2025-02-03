<?php
class person{
  public $name;
  public $prix;
  public function hello(){
    echo "Hello";
    
  }
  function set_name($name){
    $this->name = $name;
  
}
}
$perso = new person();
$perso->hello();
$perso->set_name("Hello");

echo $perso->name;