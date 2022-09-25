<?php

class  Animal{
    private $family;
    private $food;
    public function __construct( $family ,  $food)
    {
        $this->family = $family;
        $this->food = $food;
    }
    public function  get_family(){
        
    }
    public function set_family($family)
    {
        $this->family = $family;
    }
    public function get_food(){
        
    }
    public function set_food($food)
    {
        $this->food = $food;
    }


}
