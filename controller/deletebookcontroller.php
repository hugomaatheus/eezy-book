<?php

    require_once '../service/my_service.php';

    class DeleteBookController {        

        public function delBook(){
            $id = $_REQUEST['id'];          

            $m = new MyService();
            $m->deleteBook($id);
            header('Location: ../view/book/books.php');
        }        

    }

    $book = new DeleteBookController();
    $book->delBook();

?>