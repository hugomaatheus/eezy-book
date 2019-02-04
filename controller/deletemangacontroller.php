<?php

    require_once '../service/my_service.php';

    class DeleteMangaController {        

        public function delManga(){
            $id = $_REQUEST['id'];          

            $m = new MyService();
            $m->deleteManga($id);
            header('Location: ../view/manga/mangas.php');
        }        

    }

    $book = new DeleteMangaController();
    $book->delManga();

?>