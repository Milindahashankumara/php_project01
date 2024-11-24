<html>

    <head>
        <title>

        </title>

    </head>

    <body>

        <form  action="index4.php" method="post">
            <input type="radio" name="creditcard" value="Visa">
            Visa<br>

            <input type="radio" name="creditcard" value="MasterCard">
            MasterCard<br>

            <input type="radio" name="creditcard" value="American Express">
            American Express<br>

            <input type="submit" name="confirm" value="Confirm">


        </form>
    </body>
</html>

<?php

    if(isset($_POST["confirm"])){
        $creditcard = $_POST["creditcard"];

        switch($creditcard){

            case "Visa":
                echo"You selected Visa";
                break;

            case "MasterCard":
                echo"You selected MasterCard";
                break;
                
            case"American Express" :
                echo"You selected American Express";
                break;
                
            default:
            echo"Please make a decision";    
        }
    }
?>