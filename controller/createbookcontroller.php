<?php

    require_once '../service/my_service.php';

    class CreateBookController {        

        public function newBook(){
            $name = $_POST["name"];
            $author = $_POST["author"];
            $markedPage = $_POST["markedPage"];
            $status = $_POST["status"];

            $m = new MyService();
            $m->createBook($name, $author, $markedPage, $status);
            header('Location: ../view/book/books.php');
        }        

    }

    $book = new CreateBookController();
    $book->newBook();

?>