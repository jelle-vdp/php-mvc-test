<?php 
    class Controller {
        private Books $books;

        public function __construct(Books $books) {
            $this->books = $books;
        }

        public function getBooks() {
            return $this->books;
        }

        public function init(){
            include("views/partials/header.php");
            include("views/home.php");
            include("views/partials/footer.php");
        }
    }