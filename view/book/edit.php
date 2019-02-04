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
                <form action="../../controller/editbookcontroller.php" method="post">
                    <?php 
                        require_once '../../service/my_service.php';
                        $s = new MyService();
                        $id = $_REQUEST['id'];
                        $result = $s->showBookById($id);
                        $name = $result['name'];
                        $author = $result['author'];
                        $markedPage = $result['markedPage'];
                        $status = $result['status'];
                    ?>
                    <input type="hidden" name="book_id" value="<?php echo $id ?>" >                    
                    <div class="form-group">
                        <label>Nome:</label>
                        <input class="form-control" type="text" name="name" value="<?php echo $name ?>">
                    </div>
                    <div class="form-group">
                        <label>Autor:</label>
                        <input class="form-control" type="text" name="author" value="<?php echo $author ?>">
                    </div>
                    <div class="form-group">
                        <label>Página:</label>
                        <input class="form-control" type="number" name="markedPage" value="<?php echo $markedPage ?>">
                    </div>

                    <div class="form-group">
                        <label>Status:</label>
                        <input class="form-control" type="text" name="status" value="<?php echo $status ?>">
                    </div>

                    <button class="btn btn-primary btn-sn" type="submit">enviar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>