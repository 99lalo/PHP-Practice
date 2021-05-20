
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PHP Tutorial</title>
    </head>
    <body>
    <?php
    $age = 12;
    $can_vote = ($age >= 18) ? "Can Vote" : "Can't Vote";
    echo "Vote? : $can_vote<br/>";

    if("10" === 10){
        echo "They are Equal<br/>";
    } else {
        echo "They are Not Equal<br/>";
    }
    ?>
    </body>
</html>