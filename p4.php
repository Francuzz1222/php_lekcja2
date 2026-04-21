<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Rozdziel wyrazy </h1>
    <form action = "p4.php" method="POST">
        <p>wpis tekst: 
            <input type = "text" name="roz"/>
        </p>
        <p>wpis separator: 
            <input type = "text" name="sep"/>
        </p>
        <input type="submit" value="Rozdziel" name="btSzukaj"/>
    </form>
    
    <?php
        if(isset($_POST["btSzukaj"]))
        {
            $roz = $_POST["roz"];
            $sep = $_POST["sep"];

            $tab = explode($sep, $roz);

            for($i = 0; $i < count($tab); $i++)
            {
                echo "wyraz $i: ".$tab[$i]."<br>";
            }
        }
    ?>
</body>
</html>