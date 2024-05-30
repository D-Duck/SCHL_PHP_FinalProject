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
            <h1>Log In</h1>
            <p>By logging into this system, you acknowledge and agree to comply with all company policies and procedures regarding the use of company resources. Unauthorized access or use of this system is strictly prohibited and may result in disciplinary action or legal consequences. Your activities may be monitored and recorded to ensure compliance and for security purposes. If you do not agree to these terms, please do not proceed.</p>
            <div id="score_table"></div>
            <form action="javascript: void(0);">
                <div class="section_special_input">
                    <div class="input_field">
                        <label for="input_name">Name</label>
                        <input id="input_name" type="text" name="input_name" placeholder="Name">
                    </div>
                    <div class="input_field">
                        <label for="input_email">Email</label>
                        <input id="input_email" type="email" name="input_email" placeholder="YourMail@mail.com">
                    </div>
                    <div class="input_field">
                        <label for="input_password">Email</label>
                        <input id="input_password" type="text" name="input_password" placeholder="Password123">
                    </div>
                </div>
                <button onclick="on_start_button();" type="submit">LOG IN</button>
            </form>
        </div>
        <div id="logout_sec" class="section_text section_background section_special">
            <h1>Log Out</h1>
            <p>You're about to log out from the webpage. Thanks for visiting! Remember, you can always return whenever you'd like. If you didn't intend to log out, feel free to stay a little longer.</p>
            <div id="score_table"></div>
            <form action="javascript: void(0);">
                <button onclick="on_start_button();" type="submit">LOG OUT</button>
            </form>
        </div>
    </section>
</html>