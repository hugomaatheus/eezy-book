<?php

    class Manga extends Work {
       
        protected $markedT;

        public function __construct($name, $author, $markedPage, $status, $markedT) {
            parent::__construct($name, $author, $markedPage, $status);
            $this->markedT = $markedT;
        }

        public function getMarkedT() {
            return $this->markedT;
        }

        public function setMarkedT() {
            $this->markedT = $markedT;
        }

    }

?>