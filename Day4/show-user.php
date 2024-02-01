<?php
include "config.php"; // Config file
// GET method (to get the results from <a href >)

if(isset($_GET['user_id']) and $_GET['user_id'] !=''){
    $user_id = $_GET['user_id'];
} else{
    $user_id=1;
}

$display = "SELECT  user_name,user_email,user_gender,user_mail_status FROM user WHERE user_id = $user_id";
mysqli_select_db($link , $dbname);
$result = mysqli_query($link , $display);
if(mysqli_num_rows($result) ==0){
    http_response_code(404);
} else{
    $user = mysqli_fetch_assoc($result);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body{
            margin: 15px;
            background-image: url(pexels-simon-rizzi-1809644.jpg);
            background-size: cover;
            background-repeat:none;
        }
        h2,h4{
            color: white;
        }
        p{
            color: #0B60B0;
            /* color: #FE7A36; */
        }
        section {
            background: rgba(0, 0, 0, 0.4) !important;
            border-radius: 45px;
        }
    </style>    
</head>
<body>
 <div class="container fluid pt-4">
    <div class="row">

            <div class="md-10 ">
                <div class="d-flex justify-content-between border-bottom mb-5">
                <?php
                if(isset($user)){?>
                <div>
                        <h2>
                            User Details
                        </h2>
                    </div>

                    <div>
                    <a href="table.php" class="btn btn-info"> Back  </a>
                    </div>
                </div>

            <section class="w-50 text-center mx-auto p-3">
            <div> 
            <h4>Your name </h4>
            <p class="text-info"> <?=$user['user_name'];  ?></p>
            </div>

            <div> 
            <h4>Your email </h4>
            <p class="text-info"> <?=$user['user_email']  ?></p>
            </div>

            <div> 
            <h4>Your gender </h4>
            <p class="text-info"> <?=$user['user_gender']  ?> </p>
            </div>

            <div> 
            <h4>Your email status </h4> 
            <p class="text-info"> <?php
            if($user['user_mail_status'] == "no"){
                echo "You will not receive an email from us";
            }
            else {
                echo "You will receive an email from us";
            } 
            ?>
            </p>
            </div> 
            
            </section>

            
        </div>
        </div> 
        <?php 
            } else {
                echo "<h2>There is no user found</h2>";
                echo "<div>";
                echo "<a href='user_form.php' class='btn btn-sm btn-success'> Add new user</a>";
                echo "</div>";
            };
            ?>       
        </div>
        </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
