<!DOCTYPE html>
<html>

<body>

    <?php
//display text
echo "<h2> DISPLAY TEXT</h2>";
echo "<h3> Selamat Datang Ke ICT JOHOR </h3>";
echo "<p>Kota Iskandar</p> <br>";

//display variables
echo "<h2> Display Variables </h2>";
$txt1 = "ICT JOHOR";
$txt2 = "Iskandar";
$txt3 = "Johor Bahru";

echo "<h3> Selamat Datang Ke " . $txt1 . " Daerah: " . $txt3 . "</h3>";
echo "<p> Kota " . $txt2 . "</p>";

?>
</body>
</html>