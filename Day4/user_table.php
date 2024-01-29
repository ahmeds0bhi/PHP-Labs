<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User details page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body{
            background-image: url(pexels-mohamed-almari-1485894.jpg);
            background-size: cover;
            background-repeat:none;
        }
     </style>   
</head>
<body>
    <h1 class="text-center mb-3 mt-3" style="color:white;">Users Details</h1>
    <a href = "user_form.php" target="_blank" style="text-decoration:none;">
    <button class="btn btn-success m-auto text-center d-grid gap-2 col-6 mx-auto"> Add new user
        
    </button> </a>
    <br><br>
    <!---------------------------Start of the table ------------------>
    <table class="table table-light table-striped w-50 table-hover table-bordered border-dark text-center" align = "center" cellspacing = "0" cellpadding = "15" border = "2">
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Mail Status</th>
    </tr>
<!---------------------------PHP code ------------------>
<?php
include "config.php"; // Config file

$display = 'SELECT * FROM user';
mysqli_select_db($link , $dbname);
$result = mysqli_query($link , $display);

if(mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row['user_id']."</td>";
            echo "<td>".$row['user_name']."</td>";
            echo "<td>".$row['user_email']."</td>";
            echo "<td>".$row['user_gender']."</td>";
            echo "<td>".$row['user_mail_status']."</td>";
            echo "<tr>";
    }
} else {
    echo "Empty set: 0 results";
}

mysqli_close($link);
?>
<!---------------------------PHP code ------------------>

</table>
    <!---------------------------Start of the table ------------------>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>