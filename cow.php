<?php
require  'animal.php';

class Cow extends Animal {
    private $owner;

    public function __construct($family , $food)
    {
        
    }
    public function set_owner (string $owner)
    {
        $this->owner = $owner;
    }
    
    public function get_owner(){
        
    }
}