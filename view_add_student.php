<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <!-- Add default assets -->
    <?php include('configs/assets_css.php');?>
    <title>Gestion d'élèves</title>
</head>
<body>
    <?php include('header.php')?>
    <div class="container">
        <h2 class="text-center">Ajouter un élève</h2>
        <form action="add_student.php" method="POST">
            <div class="form-group">
                <label for="add_student_lastname">Nom :</label>
                <input type="text" class="form-control" id="add_student_lastname" placeholder="Nom de l'élève">
            </div>
            <div class="form-group">
                <label for="add_student_fistname">Prénom :</label>
                <input type="text" class="form-control" id="add_student_fistname" placeholder="Prénom de l'élève">
            </div>
            <div class="form-group">
                <label for="add_student_nationality">Nationalité :</label>
                <select class="form-control" id="add_student_nationality">
                    <option>Nationalité de l'élève</option>
                    <option value="fr">Francaise</option>
                </select>
            </div>
            <div class="form-group">
                <label for="add_student_formation">Type de la formation :</label>
                <select class="form-control" id="add_student_formation">
                    <option>Type de la formation</option>
                </select>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Formateur 1
                </label>
            </div><br>
            <button type="submit" class="btn btn-default">Ajouter</button>
        </form>
    </div>
    
    <?php include('configs/assets_js.php');?>
</body>
</html>