<!doctype html>
<html>

<?php session_start(); ?>

<head>
    <meta charset="UTF-8">
    <link href="../../resources/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../resources/css/my-style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <script src="../../resources/js/bootstrap.min.js" type="text/javascript"></script> 
    <title>Formulário</title>
</head>
<?php include '../component/my_navbar.html' ?>
<body>
    <div class="container">
        <div class="card border">
            <div class="card-body">
                <form action="../../controller/editmangacontroller.php" method="post">
                    <?php 
                        require_once '../../service/my_service.php';
                        $s = new MyService();
                        $id = $_REQUEST['id'];
                        $result = $s->showMangaById($id);
                        $name = $result['name'];
                        $author = $result['author'];
                        $category = $result['category'];
                        $markedPage = $result['markedPage'];
                        $markedT = $result['markedT'];
                        $status = $result['status'];
                    ?>
                    <input type="hidden" name="manga_id" value="<?php echo $id ?>" >                    
                    <div class="form-group">
                        <label>Nome:</label>
                        <input class="form-control" type="text" name="name" value="<?php echo $name ?>">
                    </div>

                    <div class="form-group">
                        <label>Autor:</label>
                        <input class="form-control" type="text" name="author" value="<?php echo $author ?>">
                    </div>

                    <div class="form-group">
                        <label>Gênero:</label>
                        <input class="form-control" type="text" name="category" value="<?php echo $category ?>">
                    </div>

                    <div class="form-group">
                        <label>Página:</label>
                        <input class="form-control" type="number" name="markedPage" value="<?php echo $markedPage ?>">
                    </div>

                    <div class="form-group">
                        <label>Página:</label>
                        <input class="form-control" type="number" name="markedT" value="<?php echo $markedT ?>">
                    </div>

                    <div class="form-group">
                        <label>Status:</label>
                        <input class="form-control" type="text" name="status" value="<?php echo $status ?>">
                    </div>

                    <div class="btn-group">
                        <div class="border">
                            <button class="btn btn-primary raised" type="submit">enviar</button>
                        </div>   
                        <div class="border">
                            <a class="btn btn-danger raised" onClick="JavaScript: window.history.back();">Voltar</a>
                        </div>                     
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</body>

</html>