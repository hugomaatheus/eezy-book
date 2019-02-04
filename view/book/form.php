<html>

<?php session_start(); ?>

<head>
    <meta charset="UTF-8">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    <title>Formulário</title>
</head>

<body>
    <div class="container">
        <div class="card border">
            <div class="card-body">
                <form action="../../controller/createbookcontroller.php" method="post">
                    <input type="hidden"name="user_id" value="<?php echo $_SESSION['user_id'] ?>">
                    <div class="form-group">
                        <label>Nome:</label>
                        <input class="form-control" type="text" placeholder="Nome do livro" name="name">
                    </div>
                    <div class="form-group">
                        <label>Autor:</label>
                        <input class="form-control" type="text" placeholder="Autor do livro" name="author">
                    </div>
                    <div class="form-group">
                        <label>Página:</label>
                        <input class="form-control" type="number" placeholder="Informe onde você parou nesse livro" name="markedPage">
                    </div>

                    <div class="form-group">
                        <label>Status:</label>
                        <input class="form-control" type="text" placeholder="Ainda está lendo o livro? Ou parou? Ou será que já leu? Fala pra nós :D" name="status">
                    </div>

                    <button class="btn btn-primary btn-sn" type="submit">enviar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>