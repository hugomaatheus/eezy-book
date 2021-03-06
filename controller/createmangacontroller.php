<?php

    require_once '../service/my_service.php';

    class CreateMangaController {        

        public function newManga(){
            $user_id = $_POST['user_id'];
            $name = $_POST["name"];
            $author = $_POST["author"];
            $category = $_POST["category"];
            $markedPage = $_POST["markedPage"];
            $markedT = $_POST["markedT"];
            $status = $_POST["status"];
            $logged = $_POST["logged"];

            $m = new MyService();
            if($logged) {
                $m->createManga($name, $author, $category, $markedPage, $markedT, $status, $user_id);            
                header('Location: ../view/manga/mangas.php');
            } else header('Location: ../view/user/login.html');
        }        

    }

    $book = new CreateMangaController();
    $book->newManga();    

?>