<?php include('header.php')?>
    
<div class="container">
    <h2 class="text-center">Ajouter un élève</h2>
    <form id="form_add_student">
        <div class="form-group">
            <label for="add_student_lastname">Nom :</label>
            <input type="text" name="lastname" class="form-control" id="add_student_lastname" placeholder="Nom de l'élève">
        </div>
        <div class="form-group">
            <label for="add_student_fistname">Prénom :</label>
            <input type="text" name="firstname" class="form-control" id="add_student_fistname" placeholder="Prénom de l'élève">
        </div>
        <div class="form-group">
            <label for="add_student_nationality">Nationalité :</label>
            <select class="form-control" name="idnationality" id="add_student_nationality"></select>
        </div>
        <div class="form-group">
            <label for="add_student_formation">Type de la formation :</label>
            <select class="form-control" name="idformation" id="add_student_formation"></select>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox"> Formateur 1
            </label>
        </div><br>
    </form>
    <button id="btn_add_student" class="btn btn-default">Ajouter</button>
</div>

<!-- Ajax for get select2 nationalities list -->
<script>
    $('#add_student_nationality').select2({
        ajax: {
            url: '<?=PROJECT_PATH?>Nationalities/ajaxGetList',
            dataType: 'json',
            processResults: function (data) {
                var result = $.map(data.datas, function (obj) {
                    obj.id = obj.idnationality;
                    obj.text = obj.title;
                    return obj;
                });

                return {
                    results: result
                };
            }
        }
    });
</script>

<!-- Ajax for get select2 formations list -->
<script>
    $('#add_student_formation').select2({
        ajax: {
            url: '<?=PROJECT_PATH?>Formations/ajaxGetList',
            dataType: 'json',
            processResults: function (data) {
                var result = $.map(data.datas, function (obj) {
                    obj.id = obj.idformation;
                    obj.text = obj.title;
                    return obj;
                });

                return {
                    results: result
                };
            }
        }
    });
</script>

<!-- Ajax for add student -->
<script>
$(document).ready(function() {
    $("#btn_add_student").click(function() {
        var input = $("#form_add_student").serializeArray();
        
        // WIP
    });
});
</script>

<?php include('footer.php')?>