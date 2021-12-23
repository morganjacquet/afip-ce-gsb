<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <link rel="stylesheet" href="<?=PROJECT_PATH?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=PROJECT_PATH?>/assets/css/main.css">
    <title>Gestion d'élèves</title>
</head>
<body>
    <nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?=PROJECT_PATH?>">Gestions d'élèves</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Élèves <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="<?=PROJECT_PATH?>">Liste des élèves</a></li>
                <li><a href="<?=PROJECT_PATH?>Students/add">Ajouter un élève</a></li>
            </ul>
            </li>
        </ul>
        </div>
    </div>
    </nav>