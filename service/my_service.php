<?php

    require_once 'connection.php';

    class MyService {

        //Cria um novo usuário
        public function createUser($name, $email, $password) {
            $c = Connection::getConnection();             

            $c->exec("INSERT INTO users (name, email, password) values ('$name', '$email', '$password')");
            
        }

        //Cria um novo livro
        public function createBook($name, $author, $markedPage, $status, $user_id) {
            $c = Connection::getConnection();              

            $c->exec("INSERT INTO books (name, author, markedPage, status, user_id) values ('$name', '$author', '$markedPage', '$status', '$user_id')");
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

        public function showById($id) {
            $c = Connection::getConnection();

            $result = $c->query("SELECT * FROM books WHERE user_id = $id");

            $books = $result->fetchAll( PDO::FETCH_ASSOC );
            return $books;
            
        }

        //Realiza o login do usuário
        public function login($email, $password) {
            $c = Connection::getConnection();

            $query = "SELECT * FROM users WHERE email = :email AND password = :password";
            $result = $c->prepare($query);
            $result->execute(
                array (
                    'email' => $_POST['email'],
                    'password' => $_POST['password']
                )
            );                                       

            $users = $result->fetchAll( PDO::FETCH_ASSOC);            
            return $users;
        }

        public function isLoggedIn() {
            if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
                return false;
            }
            return true;
        }

    }

?>