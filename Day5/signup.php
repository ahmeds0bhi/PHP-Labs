<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Holtwood+One+SC&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body{
            margin: 15px;
            background-image: url(pexels-simon-rizzi-1809644.jpg);
            background-size: cover;
            background-repeat:none;
        }
        label,form{
            color: white;
        }
        .row{
            margin-top:8%;
        }
    </style>
</head>
<body>
<div class="d-flex justify-content-center mt-5 container">
<!---------------------------start of form ------------------>
<div class ="p-3 border border-light b-3 rounded-5 border-3 .bg-secondary text-dark row">
<form action="<?php $_PHP_SELF ?>" method="post">
        <h1 class="text-center" style="color:block; font-family: 'Holtwood One SC', serif;">SIGNUP PAGE</h1>

        <p style="color:white;">Please fill your data here to this form and submit to Signup</p>

        <!------------------------Name input ------------------>
            <label>Username:</label><span style="color: red;"> *</span>
            <input class="form-control w-100" type="text" name="user_name" value ="<?php echo isset($_POST['user_name']) ? $_POST['user_name'] : '' ?>" /> 
            <span>
            <?php 
            if(isset($_POST['submit'])){
                if(empty($_POST['user_name'])){
            
                    echo "<span style='color: red;' > * Username is required</span>";
                } 
            }
            ?>
            </span><br>
        
            <!------------------------Password input ------------------>

            <label>Password:</label><span style="color: red;" class="m-1">*</span>
            <input type="password" class="form-control w-100" name="user_password" />
            <span>
            <?php 
            if(isset($_POST['submit'])){
                if(empty($_POST['user_password'])){
                    echo "<span style='color: red;' > * Password is required</span>";
                } 
            }
            ?>
            </span><br>
         
        <!---------------------------Need to be converted to form so we can use session -------------------------->
        
            <button class="btn btn-primary mt-3 mb-3 form-control w-100" type="submit" name="submit"> SIGNUP</button>
            <p style="color:white;">Do you have an account? <a href ="login.php">Login now</a> </p>
            </form>
</div>

</div>
            
        <!---------------------------PHP code -------------------------->
    <?php   
    
    include "config.php"; // file config
    
    //--------------------Saving data to DataBase --------------//

    if(isset($_POST['submit'])){

        $user_name = $_POST['user_name'];
        $user_password = $_POST['user_password'];
        
        if(isset($user_name) && !empty($user_name)&&
        isset($user_password) && !empty($user_password))        
        {
            
            mysqli_select_db($link, $dbname);
                
                $mysql = " SELECT * FROM user_data WHERE user_name ='$user_name' ";  
                
                $retrive = mysqli_query($link , $mysql);

                if(mysqli_num_rows($retrive) == 1){
                    $row = mysqli_fetch_assoc($retrive);
                    print_r($row);
                        if( $user_name == $row['user_name'] ){
                            
                            header("location: login.php");
                        }
                      
                    }
                    else {
                           mysqli_select_db($link, $dbname);
                            $sql = " INSERT INTO user_data (user_name , user_password)
                            VALUES ('$user_name' , '$user_password');";

                            $result = mysqli_query($link , $sql);
                            header("location: login.php");
                    }
                        
                    }
                }


    ?>


<!---------------------------end of form ------------------>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>