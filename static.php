<!DOCTYPE html>
<html>

<body>

    <?php
    function mytest(){
        static $nilaitambah = 0;
        echo $nilaitambah;
        $nilaitambah++;
    }

    mytest();
    echo "<br>";
    mytest();
    echo "<br>";
    mytest();
    ?>
</body>
</html>