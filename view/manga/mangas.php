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
                    <h5 class="card-title">Olá, <?php echo $_SESSION['user_name'] ?>, seus mangás</h5>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>nome</th>
                                <th>autor</th>
                                <th>gênero</th>
                                <th>página</th>
                                <th>volume</th>
                                <th>status</th>
                                <th>opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                require_once '../../service/my_service.php';
                                $s = new MyService();
                                $result = $s->showMangaUser($_SESSION['user_id']);                                   
                            ?>
                            <?php foreach($result as $line) { ?>
                                <tr>
                                    <th> <?php echo $line['id']; ?> </th>
                                    <th> <?php echo $line['name']; ?> </th>
                                    <th> <?php echo $line['author']; ?> </th>
                                    <th> <?php echo $line['category']; ?> </th>
                                    <th> <?php echo $line['markedPage']; ?> </th>
                                    <th> <?php echo $line['markedT']; ?> </th>
                                    <th> <?php echo $line['status']; ?> </th>
                                    <th>
                                        <a href="../../controller/deletemangacontroller.php?id=<?php echo $line['id'] ?>" >Deletar</a>
                                        <a href="edit.php?id=<?php echo$line['id'] ?>" >Editar</a>
                                    </th>
                                </tr>    
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="btn-group">
                        <a href="../../controller/logoutusercontroller.php" class="btn btn-danger">Sair</a>                    
                        <a href="../manga/form.php" class="btn btn-primary">Adicionar mangá</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>