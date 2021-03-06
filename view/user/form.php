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

<body>
    <div class="container">
        <div class="card border">
            <div class="card-body">
                <form action="../../controller/createusercontroller.php" method="post">                
                    <div class="form-group">
                        <label>Nome:</label>
                        <input class="form-control" type="text" placeholder="Seu nome" name="name">
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input class="form-control" type="text" placeholder="Seu e-mail" name="email">
                    </div>
                    <div class="form-group">
                        <label>Senha:</label>
                        <input class="form-control" type="password" placeholder="Escolha uma senha" name="password">
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