<?php

    class Book{
        public $title;
        public $autor;
        public $description;

        public function __construct($title, $autor, $description)
        {
            $this->$title = $title;
            $this->$autor = $autor;
            $this->$description = $description;
        }
    }

?>