<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part1- form validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body{
            margin: 15px;
            background-image: url(pexels-mohamed-almari-1485894.jpg);
            background-size: cover;
            background-repeat:none;
        }
        label,form{
            color: black;
        }

    </style>
</head>
<body>
<div class="d-flex justify-content-center mt-5 bg-transparent text-dark">

<!---------------------------start of form ------------------>

<form action="<?php $_PHP_SELF ?>" method="post">
        <h2 style="color:white;">User register form</h2>

        <p style="color:white;">Please fill this form and submit to add user record to the database</p>

        <!------------------------Name input ------------------>
            <label>Name:</label><span style="color: red;"> *</span>
            <input class="form-control w-100" type="text" name="name" value ="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>" /> 
            <span>
            <?php 
            if(isset($_POST['submit'])){
                if(empty($_POST['name'])){
            
                    echo "<span style='color: red;' > * Name is required</span>";
                } 
            }
            ?>
            </span><br>
        
            <!------------------------Email input ------------------>

            <label>Email:</label><span style="color: red;">*</span>
            <input type="email" class="form-control w-100" name="email" value ="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>"/>
            <span>
            <?php 
            if(isset($_POST['submit'])){
                if(empty($_POST['email'])){
                    echo "<span style='color: red;' > * email is required</span>";
                } 
            }
            ?>
            </span><br>
         

            <!------------------------Gender input ------------------>

            Gender:<span style="color: red;">*</span>
            <input class="ms-2 form-check-input" type="radio" name="gender" value ="female"<?php if(isset($_POST['gender'])) echo "checked='checked'"; ?> >Female
             <input class="ms-4 form-check-input" type="radio" name="gender" value ="male"<?php if(isset($_POST['gender'])) echo "checked='checked'"; ?> >Male <br>
             <span>
            <?php 
            if(isset($_POST['submit'])){
                if(empty($_POST['gender'])){
                    echo "<span style='color: red;' > * gender is required</span>";
                } 
            }
            ?>
            </span> <br> 

            <!------------------------Recieve email input ------------------>

            Recieve email from us<span style="color: red;">*</span>
            <input type="hidden" name="agree" value = "no" /> 
            <input class="form-check-input" type="checkbox" name="agree" value = "yes " /> <br>

        
            <button class="btn btn-primary mt-3 mb-3 form-control w-100" type="submit" name="submit"> Submit</button>
            
        <!---------------------------PHP code -------------------------->
    <?php   
    
    include "config.php"; // file config
    
    //--------------------Saving data to DataBase --------------//

    if(isset($_POST['submit'])){
        if(isset($_POST['name']) && !empty($_POST['name'] &&
        isset($_POST['email']) && !empty($_POST['email']) &&     
        isset($_POST['gender']) && !empty($_POST['gender']) &&
        isset($_POST['agree'])))        
        {
            
            mysqli_select_db($link, $dbname);
                
                $mysql = "INSERT INTO user (user_name , user_email , user_gender, user_mail_status)
                VALUES ('".$_POST['name']." ', '".$_POST['email']. " ' , '".$_POST['gender']."', '".$_POST['agree']."');";
            
                $retrive = mysqli_query($link , $mysql);
            
                if(!$retrive){
                    echo "failed to update";
                }
                echo "<h4> Table updated </h4>";
                mysqli_close($link);
            
        } 
    }
    ?>

</form>
</div>
<!---------------------------end of form ------------------>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>