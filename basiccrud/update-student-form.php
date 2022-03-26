<?php include "templates/header.php"; ?>

<body>
<?php include "read-student.php"; ?>

<div class="container">
    <form action="update-student.php" method="POST">
        <?php include "inputs-student.php"; ?>
    </form>
</div>
</body>

<?php include "templates/footer.php"; ?>
