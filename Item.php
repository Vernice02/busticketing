<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Item
 *
 * @author Vernice Tan
 */
class Item {
   
    private $code;
    private $description;
    private $price;
    
    public function __construct($code, $description, $price) {
        $this->code = $code;
        $this->description = $description;
        $this->price = $price;
    }

    public function getCode() {
        return $this->code;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setCode($code): void {
        $this->code = $code;
    }

    public function setDescription($description): void {
        $this->description = $description;
    }

    public function setPrice($price): void {
        $this->price = $price;
    }

    public function __set($name, $value) {
        $this->$name= $name;
    }

    public function __get($name) {
        return $this->$name;
    }

    
    
    
    
    public function __toString() {
        return "Item code: $this->code <br/>". 
                "Description: $this->description <br/>".
                "Price: ". number_format($this->price,2). "<br/>";
    }

    
    
    
    
    
    
    
    
}