<?php include('configs/mysql.php');?>

<?php

$datas_students = array(
    array(
        'idstudent' => 1,
        'firstname' => 'Morgan',
        'lastname' => 'Jacquet',
        'nationality' => 'Francaise',
        'formation' => 'Développeur'
    ),
    array(
        'idstudent' => 2,
        'firstname' => 'Pierre',
        'lastname' => 'Dupont',
        'nationality' => 'Francaise',
        'formation' => 'Graphiste'
    )
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <!-- Add default assets CSS -->
    <?php include('configs/assets_css.php');?>
    <title>Gestion d'élèves</title>
</head>
<body>
    <?php include('header.php')?>

    <div class="container">
        <div class="row">
            <h2 class="text-center">Liste des Élèves</h2><br>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Nationalité</th>
                        <th>Type de formation</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($datas_students as $value_student) {
                    ?>
                    <tr>
                        <td><?=$value_student['idstudent'];?></td>
                        <td><?=$value_student['lastname'];?></td>
                        <td><?=$value_student['firstname'];?></td>
                        <td><?=$value_student['nationality'];?></td>
                        <td><?=$value_student['formation'];?></td>
                        <td>
                            <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-pencil" style="padding: 2px;"></span></a>
                            <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Add default assets JS -->
    <?php include('configs/assets_js.php');?>
</body>
</html>