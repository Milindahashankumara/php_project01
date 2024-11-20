<html>

    <head>
        <title>

        </title>
    </head>

    <body>

        <form action="index3.php"  method="post">

            <label>Username:</label>
            <input type="text" name="username"><br><br>
            <label>Password</label>
            <input type="password" name="password"><br><br>
            <input type="submit" name="login"   value="Submit">
        </form>
    </body>
</html>

<?php

/*
foreach($_POST as $key  => $value){
    echo"{$key} = {$value} <br>";
}
*/

    if(isset($_POST["login"])){

        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)){
            echo"Username is missing";
        }
        else if(empty($password)){
            echo"Passowrd is missing";
        }
        else {
            echo"Hello {$username}";
        }


    }

?>