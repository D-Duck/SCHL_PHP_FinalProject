<?php list($a, $b, $c) = $links; ?>

<!DOCTYPE html>
<html lang="en">    
<body>
    <header>
        <div id="header_center">
            <div id="main_page">
                <a href="./index.php">
                    <img src="./img/planet.png" alt="planet">
                    <h1>Main Page</h1>
                </a>
            </div>
            <div id="main_login">
                <a href="./login.php">
                    <p>
                    <?PHP
                    if ($_SESSION["logedin"] == "true") {
                        echo("Loged In");
                    }else{
                        echo("Log In");
                    }
                    ?>
                    </p>
                </a>
            </div>
            <div id="header_hamburger">
                <img src="./img/hamburger.png" alt="hamburger" onclick="on_hamburger_click()">
            </div>
            <div id="header_container">
                <p><a href="./<?php echo $a ?>.php"><?php echo ucfirst(str_replace('_',' ',$a)) ?></a></p>
                <p><a href="./<?php echo $b ?>.php"><?php echo ucfirst(str_replace('_',' ',$b)) ?></a></p>
                <p><a href="./<?php echo $c ?>.php"><?php echo ucfirst(str_replace('_',' ',$c)) ?></a></p>
            </div>
        </div>
    </header>
</body>
</html>