<?php

    //example outide function
    $nilaitambah = 5;

    function mytest(){

        echo "<p> Variable NilaiTambah inside function is: $nilaitambah </p>";

    }

    mytest();

    echo "<p> Variable nilaitambah outside function is: $nilaitambah </p>";

    function inside(){

        $innervariable = 10;
        echo "<p> Variable NilaiTambah inside function is : $innervariable </p>";

    }

    inside();

?>