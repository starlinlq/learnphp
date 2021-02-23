<!DOCTYPE html>
<html lang="en">

<?php
//arays

$people1 = ['josh', 'crystal', 'ryu'];
$people2 = array('ken', 'chun-li');
$ages = [20, 30, 40, 50];
//print_r print readable, prints a readable version of an arrray;
$ages[0] = 25;
print_r($ages);
//add value to array
$ages[] = 60;
array_push($ages, '70');

// count() -prints the lenght of an array
echo count($ages);

//merge two array togueter;
$peopleThree = array_merge($people1, $people2);
print_r($peopleThree);

//associative arrays (key & value pairs);
$ninjasOne = ['shaun' => 'black', 'mario' => 'orange', 'luigi' => 'brown'];
$ninjasTwo = array('bowser' => 'green', 'peach' => 'yellow');
echo $ninjasOne['mario'];
$ninjasTwo['mario'] = 'pink';
echo print_r($ninjasTwo);

//multi-dimensional arrays
$blogs = [['title' => 'mario party', 'author' => 'mario', 'content' => 'lorem', 'likes' => 30], ['title' => 'mario kart cheats', 'author' => 'toad', 'content' => 'lorem', 'likes' => 25]];
echo $blogs[0]['content'];


//remove something from array
//array pop
$popped = array_pop($blogs);
print_r($popped);

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div><?php ?></div>

</body>

</html>