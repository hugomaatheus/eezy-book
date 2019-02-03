<?php

    class User {

        protected $name;
        protected $email;
        protected $password;

        public function __construct($name, $email, $password) {
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
        }

        public function getName() {
            return $this->name;
        }
        
        public function setName($name) {
            $this->name = $name;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function getPassword() {
            return $this->sepasswordnha;
        }

        public function setPassword($password) {
            $this->password = $password;
        }
    }

?>