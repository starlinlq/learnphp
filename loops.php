<!DOCTYPE html>
<html lang="en">
<?php
$active = true;
$inactive = false;
define('SHOW', 'megan');
for ($i = 0; $i <= 5; $i++) {
    /*  if ($active && $i < 3) {
        echo "hello starlin";
    } else if ($inactive || SHOW === 'megan') {
        echo "hello leon";
    }; */
};

$x = 0;
/* do {
     echo "hello $x";
    $x++; 
} while ($x < 5); */

$z = 1;
while ($z <= 5) {
    echo "hey there $z";
    $z++;
}

function maximumScore($tileHand)
{
    $total = 0;
    for ($i = 0; $i < count($tileHand); $i++) {
        $total += $tileHand[$i]['score'];
    };
    echo $total;
};
maximumScore([array('tile' => 'N', 'score' => 1), array('tile' => 'K', 'score' => 5),  array('tile' => 'Z', 'score' => 10), array('tile' => 'X', 'score' => 8), array('tile' => 'D', 'score' => 2), array('tile' => 'A', 'score' => 1), array('tile' => 'E', 'score' => 1)]);

$blogs = ['blog1', 'blog2', 'blog3', 'blog4'];
$products = [['name' => 'shiny star', 'price' => '20'], ['name' => 'green shell', 'price' => '10']];

foreach ($blogs as $blog) {
    print_r($blog);
}

foreach ($products as $product) {
    echo $product['name'] . ' - ' . $product['price'] . '<br />';
}



?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div>
        <ul>
            <?php foreach ($products as $product) { ?>
                <h3><?php echo $product['name']; ?></h3>
            <?php }  ?>
        </ul>
    </div>

</body>

</html>