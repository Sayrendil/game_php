<?php

    function game() {
        $key = array_key_first($_POST);
        // die(var_dump($key));
        if(empty($_POST)) {
            return false;
        }

        $_SESSION['btns'][$key] = "x";

        // $bot = "bot";

        if($_SESSION['btns'][$key] == 'x') {
            $bot = array_rand($_SESSION['btns'], 1);
            if($bot != $key) {
                $_SESSION['btns'][$bot] = "o";
            }
        }

        // die(var_dump($_SESSION['btns']));

        if($_SESSION['btns']['btn1'] == "x" && $_SESSION['btns']['btn2'] == "x" && $_SESSION['btns']['btn3'] == "x") {
            echo "<h1>YOU WIN!</h1>";
            session_destroy();
        } elseif($_SESSION['btns']['btn4'] == "x" && $_SESSION['btns']['btn5'] == "x" && $_SESSION['btns']['btn6'] == "x") {
            echo "<h1>YOU WIN!</h1>";
            session_destroy();
        } elseif($_SESSION['btns']['btn7'] == "x" && $_SESSION['btns']['btn8'] == "x" && $_SESSION['btns']['btn9'] == "x") {
            echo "<h1>YOU WIN!</h1>";
            session_destroy();
        } elseif($_SESSION['btns']['btn1'] == "x" && $_SESSION['btns']['btn4'] == "x" && $_SESSION['btns']['btn7'] == "x") {
            echo "<h1>YOU WIN!</h1>";
            session_destroy();
        } elseif($_SESSION['btns']['btn2'] == "x" && $_SESSION['btns']['btn5'] == "x" && $_SESSION['btns']['btn8'] == "x") {
            echo "<h1>YOU WIN!</h1>";
            session_destroy();
        } elseif($_SESSION['btns']['btn3'] == "x" && $_SESSION['btns']['btn6'] == "x" && $_SESSION['btns']['btn9'] == "x") {
            echo "<h1>YOU WIN!</h1>";
            session_destroy();
        } elseif($_SESSION['btns']['btn1'] == "x" && $_SESSION['btns']['btn5'] == "x" && $_SESSION['btns']['btn9'] == "x") {
            echo "<h1>YOU WIN!</h1>";
            session_destroy();
        } elseif($_SESSION['btns']['btn3'] == "x" && $_SESSION['btns']['btn5'] == "x" && $_SESSION['btns']['btn7'] == "x") {
            echo "<h1>YOU WIN!</h1>";
            session_destroy();
        }

        if($_SESSION['btns']['btn1'] == "o" && $_SESSION['btns']['btn2'] == "o" && $_SESSION['btns']['btn3'] == "o") {
            echo "<h1>YOU WIN!</h1>";
            session_destroy();
        } elseif($_SESSION['btns']['btn4'] == "o" && $_SESSION['btns']['btn5'] == "o" && $_SESSION['btns']['btn6'] == "o") {
            echo "<h1>YOU WIN!</h1>";
            session_destroy();
        } elseif($_SESSION['btns']['btn7'] == "o" && $_SESSION['btns']['btn8'] == "o" && $_SESSION['btns']['btn9'] == "o") {
            echo "<h1>YOU WIN!</h1>";
            session_destroy();
        } elseif($_SESSION['btns']['btn1'] == "o" && $_SESSION['btns']['btn4'] == "o" && $_SESSION['btns']['btn7'] == "o") {
            echo "<h1>YOU WIN!</h1>";
            session_destroy();
        } elseif($_SESSION['btns']['btn2'] == "o" && $_SESSION['btns']['btn5'] == "o" && $_SESSION['btns']['btn8'] == "o") {
            echo "<h1>YOU WIN!</h1>";
            session_destroy();
        } elseif($_SESSION['btns']['btn3'] == "o" && $_SESSION['btns']['btn6'] == "o" && $_SESSION['btns']['btn9'] == "o") {
            echo "<h1>YOU WIN!</h1>";
            session_destroy();
        } elseif($_SESSION['btns']['btn1'] == "o" && $_SESSION['btns']['btn5'] == "o" && $_SESSION['btns']['btn9'] == "o") {
            echo "<h1>YOU WIN!</h1>";
            session_destroy();
        } elseif($_SESSION['btns']['btn3'] == "o" && $_SESSION['btns']['btn5'] == "o" && $_SESSION['btns']['btn7'] == "o") {
            echo "<h1>YOU WIN!</h1>";
            session_destroy();
        }

        // return $_SESSION['btns'];
    }

    game();

?>