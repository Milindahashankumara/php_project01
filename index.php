<html>

<head>
    <title>Document</title>
</head>

<body>

<form action="index.php"  method="get">
    <label>Username:</label><br>
    <input type="text" name="username"><br>
    <label>Password</label><br>
    <input type="password" name="password"><br>
    <input type="submit" value="Log In">
</form>

</body>


</html>

<?php

    echo $_GET["username"]."br";
    echo $$_GET["password"]."<br>";

?>