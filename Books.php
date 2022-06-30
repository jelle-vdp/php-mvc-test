<?php 
    class Books {

        private array $books;

        public function __construct() {
            include("initial-books.php");
            $this->books = $books;
        }

        public function getBooks() {
            return $this->books;
        }

    }