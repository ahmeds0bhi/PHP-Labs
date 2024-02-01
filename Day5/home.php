<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body{
            margin: 15px;
            background-image: url(pexels-simon-rizzi-1809644.jpg);
            background-size: cover;
            background-repeat:none;
        }
        h2{
            color:white;
        }
    </style>
</head>
<body>

    <div class="container m-auto text-center">
   <h2 class=" mt-5">Hi, <?php echo "<span class='text-success'> ".$_SESSION['user_name']." </span>" ?> Welcome to our website.</h2>
    <form action="<?php $_PHP_SELF ?>" method="POST">
     <button class="btn btn-danger mt-3 ms-5 form-control w-25" type="submit" name="submit"> LOGOUT</button>

    </form>
    </div>


  
        <!---------------------------PHP code -------------------------->
    <?php   
         
    if(isset($_POST['submit'])){

setcookie("PHPSESSID","",time()-3600,"/");
session_destroy();
setcookie("PHPSESSID","",time()-3600,"/");

 header("location:login.php");
            
    }

    ?>


<!-------------------------end of form ---------------->
<script>document.cookie("key=")</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>