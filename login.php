<?php
    $href = "./css/style_login.css";
    $title = "EID - Log In";
    $links = array("climate_change","dwindleing_ecosystems","rising_sea_levels");
?>

<!DOCTYPE html>
<html lang="en">
    <!-- head/header -->
    <?php
        include_once('./_comp/session_start.php');

        include_once('./_comp/head.php');
        include_once('./_comp/header.php');
    ?>

    <!-- Secion -->
    <section>
        <?php if(!$logged_in): ?>
            <div id="login_sec" class="section_text section_background section_special">
                <h1>Log In</h1>
                <p>By logging into this system, you acknowledge and agree to comply with all company policies and procedures regarding the use of company resources. Unauthorized access or use of this system is strictly prohibited and may result in disciplinary action or legal consequences. Your activities may be monitored and recorded to ensure compliance and for security purposes. If you do not agree to these terms, please do not proceed.</p>
                <div id="score_table"></div>
                <form method="POST">
                    <div class="section_special_input">
                        <div class="input_field">
                            <label for="input_email">Email</label>
                            <input id="input_email" type="email" name="input_email" placeholder="YourMail@mail.com">
                        </div>
                        <div class="input_field">
                            <label for="input_password">Password</label>
                            <input id="input_password" type="pass" name="input_password" placeholder="Password123">
                        </div>
                    </div>
                    <input type="submit" value="Log In" name="user_login" >
                </form>
                <a href="./create_account.php"><button id="create_acc_btn">Register</button></a>
                <?php   
                    if(isset($_POST['user_login'])){
                        $email = $_POST['input_email'];
                        $password = $_POST['input_password'];
                        $user = new User();
                        if (!$email == "" and !$password == ""){
                            $login_success = $user->login($email,$password);
                            if($login_success == true){
                                header('Location: login.php');
                                exit;
                            }else{
                                echo '<p id="wrning">Nesprávne meno alebo heslo</p>';
                            }
                        }else{
                            echo '<p id="wrning">Canot have empty fields</p>';
                        }
                    }
                ?>
            </div>            
        <?php else: ?>
            <div id="logout_sec" class="section_text section_background section_special">
                <h1>Log Out</h1>
                <p>You're about to log out from the webpage. Thanks for visiting! Remember, you can always return whenever you'd like. If you didn't intend to log out, feel free to stay a little longer.</p>
                <div id="score_table"></div>
                <form action="" method="POST">
                    <input type="submit" value="Logout In" name="logout">
                </form>
                <?php   
                    if(isset($_POST['logout'])){
                        $_SESSION['logedin'] = false;
                        $_SESSION['name'] = "";
                        header('Location: login.php');
                    }
                ?>
            </div>            
        <?php endif; ?>
    </section>
</html>