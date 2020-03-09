<html>
    <body>
    <?php

        $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

        $temp = (json_decode($jsonobj));


        foreach($temp as $key => $value){
            echo $key . " => " . $value . "<br>";
        }

    ?>
    </body>
</html>
