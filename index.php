<?php

    session_start();


    if(!isset($_SESSION['btns'])) {
        $_SESSION['btns'] = [
            "btn1" => "_",
            "btn2" => "_",
            "btn3" => "_",
            "btn4" => "_",
            "btn5" => "_",
            "btn6" => "_",
            "btn7" => "_",
            "btn8" => "_",
            "btn9" => "_",
        ];
    } 

    // die(var_dump(array_slice($_SESSION['btns'], 3, 3)));

    require('function.php');

    // die(var_dump($_SESSION));

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Крестики-нолики</title>
    </head>
    <body>

        <form action="" method="POST" name="game">
            <?php
                foreach([0, 3, 6] as $start) {
            ?>
            <div class="row">
                <?php
                    foreach(array_slice($_SESSION['btns'], $start, 3) as $name=>$label) {
                ?>
                <button name="<?= $name ?>" type="submit"><?= $label ?></button>
                <?php
                    }
                ?>
            </div>
            <?php
                }
            ?>
        </form>
    </body>
</html>