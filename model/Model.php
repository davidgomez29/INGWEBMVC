<?php
    include_once("model/Book.php");
    class Model {
    public function getBookList()
    {
    
        return array(
        "Libro 1" => new Book("Libro 1", "Autor Libro1", "Descripcion libro uno"),
        "Libro 2" => new Book("Libro 2", "Autor Libro2", "Descripcion libro dos"),
        "Libro 3" => new Book("Libro 3", "Autor Libro3", "Descripcion libro tres")
        );
    }
        public function getBook($title)
        {
            $allBooks = $this->getBookList();
            return $allBooks[$title];
        }
    }

?>