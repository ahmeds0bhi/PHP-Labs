<?php
# showing of my php info
phpinfo();

# define my website name to be constant
define('mywebsite' , 'ahmed sobhi');
$mywebsite = mywebsite;
echo $mywebsite;
echo("<br>");

#server name, address and port
print_r ($_SERVER['SERVER_NAME']);
echo("<br>");
echo($_SERVER['SERVER_PORT']);
echo("<br>");
print($_SERVER['SERVER_ADDR']);
echo("<br>");

# filename and path
echo __FILE__;
echo("<br>");

# switch case
$age = 10;
switch ($age){
 case ($age < 5) ;
    echo "Stay at home";
    break;

 case ($age == 5) ;
    echo "Go to Kindergarden";
    break;

 case ($age >= 6 and $age <= 12) ;
    echo "Go to grade :xxx";
    break;
}
?>