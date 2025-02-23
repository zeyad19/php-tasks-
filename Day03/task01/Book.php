<?php

class Book {
    private $name;
    private $authors;
    private $price;
    private $qty;

    public function __construct($name, $authors, $price, $qty = 0) {
        $this->name = $name;
        $this->authors = $authors;
        $this->price = $price;
        $this->qty = $qty;
    }

    public function getName() {
        return $this->name;
    }

    public function getAuthors() {
        return $this->authors;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getQty() {
        return $this->qty;
    }

    public function setQty($qty) {
        $this->qty = $qty;
    }

    public function getAuthorNames() {
        $authorNames = [];
        foreach ($this->authors as $author) {
            $authorNames[] = $author->getName();
        }
        return implode(", ", $authorNames);
    }

    public function toString() {
        $authorsString = [];
        foreach ($this->authors as $author) {
            $authorsString[] = $author->toString(); // This calls Author::toString()
        }
        $authorsString = implode(", ", $authorsString);
        return "Book[name={$this->name}, authors={{$authorsString}}, price={$this->price}, qty={$this->qty}]";
    }
}