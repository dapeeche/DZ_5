<?php

class Product {
    private $name;
    private $value;
    public function setName($name) {}
    public function setValue($value) {}
    public function getName() {}
    public function getValue() {}

}

class ProductProcessing{
    public function saveProduct($product) {}
    public function updateProduct($product) {}
    public function deleteProduct($product) {}
}

class ProductGet {
    public function showProduct($product) {}
    public function printProduct($product) {}
}



