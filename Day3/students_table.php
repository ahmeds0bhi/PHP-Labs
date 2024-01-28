<?php

$students = [
    ['name' => 'Alaa', 'email' => 'ahmed@test.com', 'status' => 'PHP'],
    ['name' => 'Shamy', 'email' => 'ali@test.com', 'status' => '.Net'],
    ['name' => 'Youssef', 'email' => 'basem@test.com', 'status' => 'PHP'],
    ['name' => 'Waleid', 'email' => 'farouk@test.com', 'status' => '.Net'],
    ['name' => 'Rahma', 'email' => 'hany@test.com', 'status' => 'PHP'],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table align = "left" cellspacing = 3" cellpadding = "15">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Status</th>
    </tr>
    <?php
    foreach($students as $student){
        if ($student['status'] == 'PHP'){
            echo "<tr>";
            echo "<td style='color: red;'>".$student['name']."</td>";
            echo "<td style='color: red;'>".$student['email']."</td>";
            echo "<td style='color: red;'>".$student['status']."</td>";
            echo "<tr>";
        }
        else {
            echo "<tr>";
            echo "<td>".$student['name']."</td>";
            echo "<td>".$student['email']."</td>";
            echo "<td>".$student['status']."</td>";
            echo "<tr>";
        };
    }
    ?>
</table>
</body>
</html>