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
        <input type="text" name="num1"/><br/>
        <label>Number 2 : </label>
        <input type="text" name="num2"/><br/>
        <label>Website : </label>
        <input type="text" name="website"/><br/>
        <input type="submit" value="Submit"/>
    </form>
    <?php
    $con_html = '<a href="#">Sample</a>';
    echo $con_html . '<br/>';
    echo htmlspecialchars($con_html) . '<br/>';
    echo strip_tags($con_html, "<a>") . '<br/>';
    $con_html = strip_tags($con_html) . '<br/>';
    echo $con_html . '<br/>';
    ?>
    </body>
</html>