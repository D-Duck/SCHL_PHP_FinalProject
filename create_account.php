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
        <div id="login_sec" class="section_text section_background section_special">
            <h1>Create Account</h1>
            <p>By creating an account, you agree to our Terms of Service and Privacy Policy. You acknowledge that you are providing accurate information and consent to receive communications from us. Your data will be securely stored and will not be shared with third parties without your consent, except as required by law. If you have any questions or concerns, please contact our support team.</p>
            <div id="score_table"></div>
            <form method="POST">
                <div class="section_special_input">
                    <div class="input_field">
                        <label for="input_name">Nickname</label>
                        <input id="input_name" type="text" name="input_name" placeholder="Nickname">
                    </div>
                    <div class="input_field">
                        <label for="input_email">Email</label>
                        <input id="input_email" type="email" name="input_email" placeholder="YourMail@mail.com">
                    </div>
                    <div class="input_field">
                        <label for="input_password">Password</label>
                        <input id="input_password" type="text" name="input_password" placeholder="Password123">
                    </div>
                </div>
                <input type="submit" value="Create Account" name="user_login" >
            </form>
            <a href="./login.php"><button id="create_acc_btn">Log In</button></a>
            <?php   
                if(isset($_POST['user_login'])){
                    $name = $_POST['input_name'];
                    $email = $_POST['input_email'];
                    $password = $_POST['input_password'];
                    if (!$name == "" and !$email == "" and !$password == ""){
                        if (!$name == "ADMIN"){
                            $user = new User();
                            $login_success = $user->register($name,$email,$password);
                            if ($login_success == true){
                                header('Location: login.php');
                                exit;
                            }else{
                                echo '<p id="wrning">Ucet už existuje.</p>';
                            }
                        }else{
                            echo '<p id="wrning">Canot be ADMIN</p>';
                        }
                    }else{
                        echo '<p id="wrning">Canot have empty fields</p>';
                    }
                }
            ?>
        </div>            
    </section>
</html>