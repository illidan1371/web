<?php
class person
{
    var $name;
    public $height;
    protected $social_insurance;
    private $pin_number;


    __construct("persons_name"){
      $this -> name = persons_name;
    }

    function set_name($new_name){
     $this -> name=$new_name;
    }

    function get_name(){
      return $this -> name;
    }

    private function get_pin_number(){
      return $this -> $pin_number;
    }
}

   class employee extends person
   {
     __construct($employee_name);
     $this -> set_name($employee_name);
   }


 ?>
