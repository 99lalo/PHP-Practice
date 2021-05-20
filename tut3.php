
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PHP Tutorial</title>
    </head>
    <body>
    <?php
        $request = "Coke";
        switch($request){
            case "Coke":
                echo "Here is your Coke<br/>";
                break;
            case "Pepsi":
                echo "Here is your Pepsi<br/>";
                break;
            default:
                echo "Here is your Water<br/>";
                break;
        }
    ?>
    </body>
</html>