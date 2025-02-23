<?php

require_once 'Author.php';
require_once 'Book.php';

// Create authors
$author1 = new Author("J.K. Rowling", "jkrowling@example.com", 'f');
$author2 = new Author("Stephen King", "sking@example.com", 'm');

// Create a book with multiple authors
$book = new Book("Harry Potter and the Sorcerer's Stone", [$author1, $author2], 29.99, 10);

// Test the Book class
echo $book->toString() . "\n";
echo "Author Names: " . $book->getAuthorNames() . "\n";

// Update price and quantity
$book->setPrice(19.99);
$book->setQty(5);

echo $book->toString() . "\n";