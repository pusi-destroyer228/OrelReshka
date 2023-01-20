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
        <label><input type="radio" name="level" value="easy">Easy</label>
        <label><input type="radio" name="level" value="medium">Medium</label>
        <label><input type="radio" name="level" value="hard">Hard</label>
        <button type="submit">Enter</button>
    </form>
    <?php
    $game = 0;
    ?>
</body>
</html> 