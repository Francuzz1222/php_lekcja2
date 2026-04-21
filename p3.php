<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Czy palindrom ? </h1>
    <form action = "p3.php" method="POST">
        <p>wpis słowo: 
            <input type = "text" name="szukany"/>
        </p>
        <input type="submit" value="Zamien" name="btSzukaj"/>
    </form>
    
    <?php
        if(isset($_POST["btSzukaj"]))
        {
            $txt = strtolower(trim($_POST["szukany"]));
            if($txt ==strrev($txt))
            {
                echo "to jest palindrom";
            }
            else
            {
                echo"nie jest";
            }

        }
    ?>
</body>
</html>