<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part2</title>

    <body>
    <?php
    require_once 'students.php';
    ?>
    <h2>Application name: <?= Application_name ?> </h2>
    <?php include 'students_table.php'; ?>

    </body>
</html>
