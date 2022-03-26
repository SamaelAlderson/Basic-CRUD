<script>

    function confirmDelete(studentId) {

        // Zoek met jquery het form met id “modal-confirm” en open het form//

        $("#modal-confirm").modal('show');
        $('#btn-delete-confirmed').on('click', function(){deleteStudent(studentId);});
    }

    function deleteStudent(studentId) {

        $('#modal-confirm').modal('hide');

        $.get('delete-student.php',

            {id: studentId}).then(

            function() {

                window.location.href = 'index.php';

                window.location.reload(true);});

    }

    function closeModal() {
        $('#modal-confirm').modal('hide');
    }


</script>

<?php
include "connectdb.php";
$sql = "SELECT * FROM student";
$sth = $db->prepare($sql);
$sth->execute();
?>


<table class="table">
    <thead>
    <tr>
        <th>id</th>
        <th>Voornaam</th>
        <th>Achternaam</th>
        <th>Email</th>
        <th>Adres</th>
        <th>Acties</th>
    </tr>
    </thead>
    <tbody>
    <?php while($row = $sth->fetch()) { ?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["voornaam"]; ?></td>
            <td><?php echo $row["achternaam"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["street"] . " " . $row["houseno"], $row["housenoadd"] . " " . $row["city"] . " " . $row["postcode"]; ?> </td>
            <td> <button class="btn btn-outline-success"><a href="update-student-form.php?id=<?php echo $row["id"]?>">Wijzig</a></button> </td>
            <td> <button onclick="confirmDelete(<?php echo $row["id"]?>)" class="btn btn-danger">Verwijder</button></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<div class="modal" tabindex="-1" role="dialog" id="modal-confirm">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pas op!</h5>
                <button onclick="closeModal()" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Weet U zeker dat U dit wilt verwijderen?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="btn-delete-confirmed">Verwijder</button>
                <button type="button" onclick="closeModal()" class="btn btn-secondary" data-dismiss="modal">Annuleer</button>
            </div>
        </div>
    </div>
</div>