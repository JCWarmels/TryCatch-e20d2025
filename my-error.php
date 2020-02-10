<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>
    <body>
        <?php
        function countDown($numb) {
            if($numb < 0 || $numb > 10){
                throw new Exception("The given number is out of bounds");
            }
        }
        try{
        countDown(10);
        }catch(Exception $e){
            echo ($e->getMessage());
        }
        ?>
    </body>
</html>