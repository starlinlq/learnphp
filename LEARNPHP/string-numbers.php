<!DOCTYPE html>
<html lang="en">

<?php
// define constant
define("NAME", 'Starlin');
define("LASTNAME", "leon quinonez");

//variables, int, floats;
$myName = "starlin";
$lastName = "leon quinonez";
$age = 15;


//strings
$stringOne = "my email is";
$stringTwo = "starlinlq@gmail.com";


//doubles quotes to use variable inside 
echo "hey my name is $myName[2]";
echo 'the ninja screamed "whatt" ';

// strlen() tells you the lenght of the string
// strtoupper() make the string uppercase
// strtolower() make the string lowercase
// str_replace(letter to replace, new letter, variable) replace a string
$lenght = strlen($lastName);
$upper = strtoupper($myName);
$lower = strtolower($myName);
echo $lenght . $upper . $lower;
echo str_replace('s', 'hey', $myName);

//numbers
//operators = / + / - / **
// floor(number) round number;
// ceil()
// pi()

$radius = 25;
$pi = 3.14;
echo $pi * $radius ** 2;
echo 2 * (4 + 9) / 3;
echo $radius++;
$age = 25;
echo $age -= 10;
echo floor($pi);



?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div><?php echo NAME, LASTNAME; ?></div>
    <div><?php echo $age ?></div>

</body>

</html>