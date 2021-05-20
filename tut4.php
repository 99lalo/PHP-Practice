
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PHP Tutorial</title>
    </head>
    <body>
    <?php
        $age = 18;
        switch(true){
            case ($age < 5):
                echo "Stay home<br/>";
                break;
            case ($age == 5):
                echo "Go to Kindergarden<br/>";
                break;
            case in_array($age, range(6, 17)):
                $grade = $age - 5;
                echo "Go to Grade $grade<br/>";
                break;                
            default:
                echo "Go to College<br/>";
                break;
        }
    ?>
    </body>
</html>