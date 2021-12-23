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
                foreach ($students as $value_student) {
                ?>
                <tr>
                    <td><?=$value_student['idstudent'];?></td>
                    <td><?=$value_student['lastname'];?></td>
                    <td><?=$value_student['firstname'];?></td>
                    <td><?=$value_student['nationality'];?></td>
                    <td><?=$value_student['formation'];?></td>
                    <td>
                        <a href="<?=PROJECT_PATH?>Students/edit?id=<?=$value_student['idstudent'];?>" class="btn btn-default"><span class="glyphicon glyphicon-pencil" style="padding: 2px;"></span></a>
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

<?php include('footer.php')?>