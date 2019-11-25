<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Main;


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Linio - Challenge</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<div class="container" style="padding-bottom: 100px">
    <div class="row">
        <div class="col-xs-12">
            <h2>LINIO CHALLENGE</h2>
            <h4>Write a program that prints all the numbers from 1 to 100. However, for multiples of 3, instead of the
                number, print "Linio". For multiples of 5 print "IT". For numbers which are multiples of both 3 and 5,
                print "Linianos".</h4>
            <br>
            <h5>Result : </h5>
            <?php

            $challenge = new Main(1, 100);
            $items = $challenge->getArrayNumbers();
            $count = 1;
            ?>
            <div class="row">
                <?php
                foreach ($items as $key => $value) {
                    if ($count == 1) echo ' <div class="col-xs-5" style="margin: 0 50px 0 50px">';

                    switch ($value) {
                        case 'Linio':
                            $value = "<strong style='color: #FF5500'>Linio</strong>";
                            break;
                        case 'IT':
                            $value = "<strong style='color: #3D3D3D'>IT</strong>";
                            break;
                        case 'Linianos':
                            $value = "<strong>Linianos</strong>";
                            break;
                    }
                    echo ($key + 1) . " => " . $value;
                    echo "<br>";
                    $count++;
                    if ($count == 21) {
                        echo ' </div>';
                        $count = 1;
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
</div>
</body>

</html>

