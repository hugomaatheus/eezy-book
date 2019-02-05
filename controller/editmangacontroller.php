<?php

    require_once '../service/my_service.php';

    class EditMangaController {        

        public function editManga(){
            $id = $_POST['manga_id'];
            $name = $_POST['name'];          
            $author = $_POST['author'];
            $markedPage = $_POST['markedPage'];
            $markedT = $_POST['markedT'];
            $status = $_POST['status'];

            $m = new MyService();            
            $m->edit_manga($name, $author, $markedPage, $markedT, $status, $id);
            header('Location: ../view/manga/mangas.php');
        }        

    }

    $book = new EditMangaController();
    $book->editManga();

?>