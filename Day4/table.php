<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User details page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <style>
            body{
            margin: 15px;
            background-image: url(pexels-simon-rizzi-1809644.jpg);
            background-size: cover;
            background-repeat:none;
        }
    </style>
</head>
<body>
     
<?php
include "config.php"; // Config file
$display = 'SELECT * FROM user';
mysqli_select_db($link , $dbname);
$result = mysqli_query($link , $display);
?>
<div class="container fluid pt-4">
        <div class="row">
            <div class="md-10 ">
                <div class="d-flex justify-content-between border-bottom mb-5">

                    <div>
                        <h3 class="text-white">
                            All users data
                        </h3>
                    </div>

                    <div>
                        <a href="user_form.php" class="btn btn-sm btn-success"> Add new user</a>
                    </div>
                    
                </div>

                <table class="table">
                    <thead>
                        <tr >
                            <th scope="col" class="bg-transparent text-white">ID</th>
                            <th scope="col" class="bg-transparent text-white">Name</th>
                            <th scope="col" class="bg-transparent text-white">Email</th>
                            <th scope="col" class="bg-transparent text-white">Gender</th>
                            <th scope="col" class="bg-transparent text-white">Mail Status</th>
                            <th scope="col" class="bg-transparent text-white">Actions</th>
                        </tr>
                    </thead>
                   
                    <tbody> 
                    <?php
                    if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td class="bg-transparent text-white"> <?php echo $row['user_id']?> </td>
                            <td class="bg-transparent text-white"> <?php echo $row['user_name']?> </td>
                            <td class="bg-transparent text-white"> <?php echo $row['user_email']?> </td>
                            <td class="bg-transparent text-white"> <?php echo $row['user_gender']?> </td>
                            <td class="bg-transparent text-white"> <?php echo $row['user_mail_status']?> </td>
                            <td class="bg-transparent text-white">
                                <a href="show-user.php?user_id=<?=$row['user_id']?>" class="btn btn-sm btn-primary">Show</a>
                                <a href="edit-user.php?user_id=<?=$row['user_id']?>" class="btn btn-sm btn-secondary">Edit</a>
                                <a href="delete-user.php?user_id=<?=$row['user_id']?>" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php
                    }
                }
                mysqli_close($link);
                 ?>
                    </tbody>
                </table>
            </div>

        </div>

    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>