<?php include('header.php')?>
    
<div class="container">
    <h2 class="text-center">Edition un élève</h2>
    <form action="add_student.php" method="POST">
        <div class="form-group">
            <label for="add_student_lastname">Nom :</label>
            <input type="text" class="form-control" id="add_student_lastname" placeholder="Nom de l'élève" value="<?=$student['lastname']?>">
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

<?php include('footer.php')?>