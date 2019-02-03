<?php

    require_once 'connection.php';

    class MyService {

        //Cria um novo usuário
        public function createUser($name, $email, $password) {
            $c = Connection::getConnection();             

            $c->exec("INSERT INTO users (name, email, password) values ('$name', '$email', '$password')");
            
        }

        //Cria um novo livro
        public function createBook($name, $author, $markedPage, $status) {
            $c = Connection::getConnection();              

            $c->exec("INSERT INTO books (name, author, markedPage, status) values ('$name', '$author', '$markedPage', '$status')");
        }

        public function deleteBook($id) {
            $c = Connection::getConnection();

            $c->exec("DELETE FROM books WHERE id = ".$id);

        }

        //Busca e exibe todos os livros de determinado usuário
        public function showAllBooks() {
            $c = Connection::getConnection();

            $result = $c->query("SELECT * FROM books"); 
            return $result;     
        }

    }

?>