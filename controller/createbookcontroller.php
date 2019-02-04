<?php

    require_once '../service/my_service.php';

    class CreateBookController {        

        public function newBook(){
            $user_id = $_POST['user_id'];
            $name = $_POST["name"];
            $author = $_POST["author"];
            $markedPage = $_POST["markedPage"];
            $status = $_POST["status"];

            $m = new MyService();
            $m->createBook($name, $author, $markedPage, $status, $user_id);            
            header('Location: ../view/book/books.php');
        }        

    }

    $book = new CreateBookController();
    $book->newBook();    

?>