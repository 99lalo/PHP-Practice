<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PHP Tutorial</title>
    </head>
    <body>
    <?php
    $rand_str = "    Random String    ";
    printf("Length: %d<br/>", strlen($rand_str));
    printf("Length: %d<br/>", strlen(ltrim($rand_str)));
    $rand_str = trim($rand_str);
    printf("Upper : %s<br/>", strtoupper($rand_str));
    printf("Lower : %s<br/>", strtolower($rand_str));
    printf("Upper : %s<br/>", ucfirst($rand_str));
    printf("1st 6 : %s<br/>", substr($rand_str, 0, 6));
    printf("Index : %s<br/>", strpos($rand_str, "String"));
    $rand_str = str_replace("String", "Characters", $rand_str);
    printf("Replace : %s<br/>", $rand_str);
    printf("A == B : %d<br/>", strcmp("A", "B"));
    ?>
    </body>
</html>