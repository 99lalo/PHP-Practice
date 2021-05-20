<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PHP Tutorial</title>
    </head>
    <body>
    <?php
    function double($x){
        return $x * $x;
    }
    $list = [1,2,3,4];
    $dbl_list = array_map('double',  $list);
    print_r($dbl_list);
    printf("<br/>");
    function mult($x, $y){
        $x *= $y;
        return $x;
    }
    $list = [1,2,3,4];
    $prod = array_reduce($list, 'mult', 1);
    print_r($prod);
    printf("<br/>");
    function isEven($x){
        return ($x % 2) == 0;
    }
    $list = [1,2,3,4];
    $even_list = array_filter($list, 'isEven');
    print_r($even_list);
    ?>
    </body>
</html>