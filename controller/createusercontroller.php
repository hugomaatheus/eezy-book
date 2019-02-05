<?php

    require_once '../service/my_service.php';

    class CreateUserController {        

        public function newUser(){
            $name = $_POST["name"];
            $email = $_POST["email"];
            $password = $_POST["password"];

            $m = new MyService();
            $m->createUser($name, $email, $password);
            header('Location: ../view/book/books.php');
        }        

    }

    $user = new CreateUserController();
    $user->newUser();

?>