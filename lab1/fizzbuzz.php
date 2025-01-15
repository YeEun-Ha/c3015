<?php
// Lab 1, part 2
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1, Part 2</title>
</head>

<body>

    <?php
    // write your FizzBuzz program here
    for ($i = 1; $i <= 100; $i++):
        if ($i % 3 === 0 && $i % 5 === 0):
            echo "<b>FizzBuzz</b><br>";
        elseif ($i % 3 === 0):
            echo "<b>Fizz</b><br>";
        elseif ($i % 5 === 0):
            echo "<b>Buzz</b><br>";
        else:
            echo "{$i}<br>";
        endif;
    endfor;
    ?>

</body>

</html>