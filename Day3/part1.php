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
        }
    </style>
</head>
<body>
    
<form action="<?php $_PHP_SELF ?>" method="post">
        <h2>Application name: AAST_BIS class Regeistraion</h2>

        <p style="color: red;" > * required fields</p>

            <!--------------------Name ------------->
            <label>Name:</label><span style="color: red;"> *</span>
            <input type="text" name="name" value ="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>" /> <br>
            <span>
            <?php 
            if(isset($_POST['submit'])){
                if(empty($_POST['name'])){
                    echo "<span style='color: red;' > * Name is required</span>";
                } 
            }
            ?>
            </span> <br>
        
                <!--------------------Email ------------->
            <label>Email:</label><span style="color: red;">*</span>
            <input type="email" class="form" name="email" value ="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>"/><br>
            <span>
            <?php 
            if(isset($_POST['submit'])){
                if(empty($_POST['email'])){
                    echo "<span style='color: red;' > * email is required</span>";
                } 
            }
            ?>
            </span> <br>
        
                <!--------------------Group ------------->
            <label>Group#:</label>
            <input type="number" class="form" name="group" /><br><br>
        
                <!--------------------Class details ------------->
            <label>Class details:</label>
            <textarea name="classDetails" rows="5" cols="50"></textarea><br><br>
        
                <!--------------------Gender ------------->
            Gender:<span style="color: red;">*</span>
            <input type="radio" name="gender" value ="female"<?php if(isset($_POST['gender'])) echo "checked='checked'"; ?> >Female
             <input type="radio" name="gender" value ="male"<?php if(isset($_POST['gender'])) echo "checked='checked'"; ?> >Male <br>
             <span>
            <?php 
            if(isset($_POST['submit'])){
                if(empty($_POST['gender'])){
                    echo "<span style='color: red;' > * gender is required</span>";
                } 
            }
            ?>
            </span> <br>

            <!--------------------select courses ------------->
            select courses:
            <select name ="courses[]" multiple>
                <option value = "php"> php</option>
                <option value = "javaScript" > javaScript</option>
                <option value = "mysql" > mysql</option>
                <option value = "html" > html</option>
            </select> <br><br>
        
                <!--------------------Terms ------------->

            Terms agree<span style="color: red;">*</span>
            <input type="checkbox" name="agree" value ="check" <?php if(isset($_POST['agree'])) echo "checked='checked'"; ?> /> <br>
            <span>
            <?php 
            if(isset($_POST['submit'])){
                if(empty($_POST['agree'])){
                    echo "<span style='color: red;' > * agree is required</span>";
                } 
            }
            ?>
            </span> <br>
        
            <button class="btn btn-primary" type="submit" name="submit"> Submit</button>
            <hr>

    <!--------------------Display the results ------------->

    <h2>Your given data are: </h2>
    
    <p>
    Name:      
    <?php      
    if(isset($_POST['submit'])){
        if(isset($_POST['name']) && !empty($_POST['name'])){
        echo $_POST['name'];
        } 
    }
    ?>
    </p>

    <p>
    email:      
    <?php      
    if(isset($_POST['submit'])){
        if(isset($_POST['email']) && !empty($_POST['email'])){
        echo $_POST['email'];
        } 
    }
    ?>
    </p>

    <p>
    group#:      
    <?php      
    if(isset($_POST['submit'])){
        if(isset($_POST['group']) && !empty($_POST['group'])){
        echo $_POST['group'];
        } 
    }
    ?>
    </p>

    <p>
    Class Details:      
    <?php      
    if(isset($_POST['submit'])){
        if(isset($_POST['classDetails']) && !empty($_POST['classDetails'])){
        echo $_POST['classDetails'];
        } 
    }
    ?>
    </p>

    <p>
    gender:      
    <?php      
    if(isset($_POST['submit'])){
        if(isset($_POST['gender']) && !empty($_POST['gender'])){
        echo $_POST['gender'];
        } 
    }
    ?>
    </p>

    <p>
    courses:      
    <?php      
    $res = (isset(($_POST['courses'])) ? implode(" -" ,  $_POST['courses']) : "");
    echo $res;
    ?>
    </p>

    <p>
    Terms:      
    <?php      
    if(isset($_POST['submit'])){
        if(isset($_POST['agree']) && !empty($_POST['agree'])){
        echo "agreed";
        } 
    }
    ?>
    </p>

</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>