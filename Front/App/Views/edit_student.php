<?php include('header.php')?>
    
<div class="container">
    <h2 class="text-center">Edition de <?=$student['lastname']?> <?=$student['firstname']?></h2>
    <form action="add_student.php" method="POST">
        <div class="form-group">
            <label for="add_student_lastname">Nom :</label>
            <input type="text" class="form-control" id="add_student_lastname" placeholder="Nom de l'élève" value="<?=$student['lastname']?>">
        </div>
        <div class="form-group">
            <label for="add_student_fistname">Prénom :</label>
            <input type="text" class="form-control" id="add_student_fistname" placeholder="Prénom de l'élève" value="<?=$student['firstname']?>">
        </div><br>
        <button type="submit" class="btn btn-default">Modifier</button>
    </form>
</div>

<?php include('footer.php')?>