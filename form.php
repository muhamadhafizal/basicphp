<html>
    <body>

        <form action="welcome.php" method="post">
            
            Name: <input type="text" name="name"><br>

            E-mail: <input type="email" name="email"><br>

            Website: <input type="text" name="website"><br>

            Comment: <textarea name="comment" rows="5" cols="40"></textarea><br>

            Gender:
            <input type="radio" name="gender"
            <?php if (isset($gender) && $gender=="female") echo "checked";?>
            value="female">Female
            <input type="radio" name="gender"
            <?php if (isset($gender) && $gender=="male") echo "checked";?>
            value="male">Male
            <input type="radio" name="gender"
            <?php if (isset($gender) && $gender=="other") echo "checked";?>
            value="other">Other <br>

            <input type="submit"></input>
        </form>

    </body>
</html>