<html>
    <head>
        <title>


        </title>
    </head>

    <body>

    <form action="index_2.php" method="post">

        <label> Enter a Country:</label>
        <input type="text" name="country">
        <input type="submit" value="submit">

    </form>

    </body>
</html>

<?php

    $capitals = array("USA" => "Washington",
                    "Japan" => "Kyoto",
                    "South korea" => "Seuol",
                    "India" => "New Delhi");

    $capital = $capitals[$_POST["country"]];

    echo"The capital is {$capital}";

?>