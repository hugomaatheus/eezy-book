<!doctype html>
<html>

<?php session_start(); ?>

<head>
    <meta charset="UTF-8">
    <link href="../../resources/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../resources/css/my-style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <script src="../../resources/js/bootstrap.min.js" type="text/javascript"></script>       

    <title>eezy-book</title>
</head>
<?php include '../component/my_navbar.html' ?>
<body>
    <div class="container text-center">
        <div class="jumbotron bg-light border border-secondary">
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">EEZY BOOK</h5>
                    <p class="card-text">Olá, <?php echo $_SESSION['user_name'] ?> </p>
                    <a class="btn btn-primary raised" href="../book/books.php">Seus livros</a>
                    <a class="btn btn-primary raised" href="../book/form.php">Adicione um novo livro</a>
                    <a class="btn btn-primary raised" href="../manga/mangas.php">Seus mangás</a>
                    <a class="btn btn-primary raised" href="../manga/form.php">Adicione um novo mangá</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>