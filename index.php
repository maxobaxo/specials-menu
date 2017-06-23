<?php
    $date = "June 26th, 2017";
    $soup = "Tomato Bisque";
    $drink = "Perfect Manhattan";
    $entree = "Roberto's Ribeye";
    $dessert = "Chocolate Gelato";
?>

<!DOCTYPE html>
<html>
    <head>
        <link href="css/styles.css" rel="stylesheet" type="text/css">
        <title>Specials for <?php echo $date;?></title>
    </head>
    <body>
        <h3>Roberto's Cocina</h3>
        <h1>Specials Menu</h1>
        <h2><?php echo $date;?></h2>

        <h4>Soup of the day: </h4>
        <p><?php echo $soup;?></p>

        <h4>Drink: </h4>
        <p><?php echo $drink;?></p>

        <h4>Entree: </h4>
        <p><?php echo $entree;?></p>

        <h4>Dessert: </h4>
        <p><?php echo $dessert;?></p>
    </body>
</html>
