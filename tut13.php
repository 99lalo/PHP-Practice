<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PHP Tutorial</title>
    </head>
    <body>
    <?php
    date_default_timezone_set('America/New_York');
    echo "Date : " . date('I F m-d-Y g:i:s A') . "<br/>";
    $import_date = mktime(0, 0, 0, 12, 21, 1974);
    echo "Date : " . date('I F m-d-Y g:i:s A', $import_date) . "<br/>";
    ?>
    </body>
</html>