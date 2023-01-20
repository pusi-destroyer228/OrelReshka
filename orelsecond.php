<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="orelsecond.php" method="post">
        <?php
            if(!isset($_POST["game"])) {
                $game = 0;
            } else {
                $game = $_POST["game"];
            } $game++ ;
            $win = 0;
            if(!isset($_POST["win"])) {
                $win = 0;
            } else {
                $win = $_POST["win"];
            }

            $level = $_POST ["level"];

            if(isset($_POST ["choise"])) {
                $choise = $_POST ["choise"];
            
                if(isset($choise)) {

                    $coin = rand(0,1);

                    if ($coin == $choise) {
                        if ($level == "hard") {
                            $coin = rand(0,1);
                            if ($coin == $choise) {
                                echo "Win";
                                $win++ ;
                            } else {
                                echo "Lose";
                            }
                        } else {
                            echo "Win";
                            $win++ ;
                        }
                    } else {
                        if ($level == "easy") {
                            $coin = rand(0,1);
                            if ($coin == $choise) {
                                echo "Win";
                                $win++ ;
                            } else {
                                echo "Lose";
                            }
                        } else {
                            echo "Lose";
                        }
                    }
                }
            }
        ?>
        <input type="text" name="game" value="<?php echo($game); ?>">
        <input type="text" name="win" value="<?php echo($win); ?>">
        <input type="hidden" value="<?php $game ?>">
        <input type="hidden" name="level" value="<?php echo($level); ?>">
        <div>
            <button type="submit" name="choise" value="0">Orel</button>
            <button type="submit" name="choise" value="1">Reshka</button>
        </div>
    </form>
</body>
</html>




