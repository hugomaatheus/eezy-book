<?php

    class Work {

        protected $name;
        protected $author;
        protected $markedPage;
        protected $status;

        public function __construct($name, $author, $markedPage, $status) {
            $this->name = $name;
            $this->author = $author;
            $this->markedPage = $markedPage;
            $this->status = $status;
        }

        public function getName() {
            return $this->name;
        }
        
        public function setName($name) {
            $this->name = $name;
        }

        public function getAuthor() {
            return $this->author;
        }

        public function setAuthor($author) {
            $this->author = $author;
        }

        public function getMarkedPage() {
            return $this->markedPage;
        }

        public function setMarkedPage($markedPage) {
            $this->markedPage = $markedPage;
        }

        public function getStatus() {
            return $this->status;
        }

        public function setStatus($status) {
            $this->status = $status;
        }
    }

?>