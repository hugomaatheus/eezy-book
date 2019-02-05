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
    <div class="container">
        <div class="jumbotron bg-light border border-secondary">
            <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Olá, <?php echo $_SESSION['user_name'] ?>, seus livros</h5>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>nome</th>
                                <th>autor</th>
                                <th>gênero</th>
                                <th>página</th>
                                <th>status</th>
                                <th>opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                require_once '../../service/my_service.php';
                                $s = new MyService();
                                $result = $s->showBookUser($_SESSION['user_id']);                                 
                            ?>
                            <?php foreach($result as $line) { ?>
                                <tr>
                                    <th> <?php echo $line['id']; ?> </th>
                                    <th> <?php echo $line['name']; ?> </th>
                                    <th> <?php echo $line['author']; ?> </th>
                                    <th> <?php echo $line['category']; ?> </th>
                                    <th> <?php echo $line['markedPage']; ?> </th>
                                    <th> <?php echo $line['status']; ?> </th>
                                    <th>                                        
                                        <a class="btn btn-primary raised" href="edit.php?id=<?php echo$line['id'] ?>" >Editar</a>
                                        <a class="btn btn-danger raised" href="../../controller/deletebookcontroller.php?id=<?php echo $line['id'] ?>" >Deletar</a>
                                    </th>
                                </tr>    
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="btn-group">                   
                        <div class="border">
                            <a href="../book/form.php" class="btn btn-primary raised">Adicionar livro</a>
                        </div>   
                        <div class="border">
                            <button class="btn btn-danger raised" onClick="JavaScript: window.history.back();">Voltar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>