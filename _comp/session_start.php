<!DOCTYPE html>
<head>
    <?PHP 
        session_start();
        if (isset($_SESSION[""]) == false) {
            $_SESSION["logedin"] = "false";}
        else if ($_SESSION["logedin"] != "true") {
            $_SESSION["logedin"] = "false";}
            $_SESSION["logedin"] = "false";
    ?>
</head>
</html>