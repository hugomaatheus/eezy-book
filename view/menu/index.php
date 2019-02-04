<html>

<?php session_start(); ?>

<head>
    <meta charset="UTF-8">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    <title>eezy-book</title>
</head>

<body>
    <div class="container">
        <div class="jumbotron bg-light border border-secondary">
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">EEZY BOOK</h5>
                    <p class="card-text">Olá, <?php echo $_SESSION['user_name'] ?> </p>
                    <a class="btn btn-primary" href="../book/books.php">Seus livros</a>
                    <a class="btn btn-primary" href="../book/form.php">Adicione um novo livro</a>
                    <a class="btn btn-primary" href="../manga/mangas.php">Seus mangás</a>
                    <a class="btn btn-primary" href="../manga/form.php">Adicione um novo mangá</a>
                    <a href="../../controller/logoutusercontroller.php" class="btn btn-danger">Sair</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>