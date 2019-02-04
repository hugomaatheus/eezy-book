<?php

    require_once '../service/my_service.php';

    class EditBookController {        

        public function editBook(){
            $id = $_POST['book_id'];
            $name = $_POST['name'];          
            $author = $_POST['author'];
            $markedPage = $_POST['markedPage'];
            $status = $_POST['status'];

            $m = new MyService();
            $m->edit_book($name, $author, $markedPage, $status, $id);
            header('Location: ../view/book/books.php');
        }        

    }

    $book = new EditBookController();
    $book->editBook();

?>