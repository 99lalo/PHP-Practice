<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PHP Tutorial</title>
    </head>
    <body>
    <form action="tut16.php" method="post">
        <label>Email : </label>
        <input type="text" name="email"/><br/>
        <label>Number 1 : </label>
        <input type="text" name="num-1"/><br/>
        <label>Number 2 : </label>
        <input type="text" name="num-2"/><br/>
        <label>Website : </label>
        <input type="text" name="website"/><br/>
        <input type="submit" value="Submit"/>
    </form>
    <?php
        if(isset($_POST["email"])){
            if(!filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)){
                echo "Email isn't valid<br/>";
            } else {
                echo "Email is valid<br/>";
            }
        }
        if(isset($_POST["num-1"]) && !empty($_POST["num-2"])){
            $num1 = filter_input(INPUT_POST, "num-1", FILTER_SANITIZE_NUMBER_FLOAT,
            FILTER_FLAG_ALLOW_FRACTION);
            $num2 = filter_input(INPUT_POST, "num-2", FILTER_SANITIZE_NUMBER_FLOAT,
            FILTER_FLAG_ALLOW_FRACTION);
            $output = sprintf("%.1f + %.1f = %.1f", $num1, $num2, ($num1 + $num2));
            echo htmlspecialchars($output) . '<br/>';
            if(isset($_POST["website"])){
                $website = filter_input(INPUT_POST, "website", FILTER_VALIDATE_URL);
                echo 'Website : ' . htmlspecialchars($website) . '<br/>';
            }
        }
        # Other Validations : php.net/manual/en/filter.filters.validate.php
        # Sanitization Filters : php.net/manual/en/filter.filters.sanitize.php
    ?>
    </body>
</html>