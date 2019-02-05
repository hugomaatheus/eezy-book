<?php

    require_once '../service/my_service.php';

    class CreateBookController {        

        public function newBook(){
            $user_id = $_POST['user_id'];
            $name = $_POST["name"];
            $author = $_POST["author"];
            $category = $_POST["category"];
            $markedPage = $_POST["markedPage"];
            $status = $_POST["status"];

            $m = new MyService();
            if($m->isLoggedIn) {                
                $m->createBook($name, $author, $category, $markedPage, $status, $user_id);            
                header('Location: ../view/book/books.php');
            } else header('Location: ../view/user/login.html');
        }        

    }

    $book = new CreateBookController();
    $book->newBook();    

?>