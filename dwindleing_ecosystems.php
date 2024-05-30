<?php
    $href = "./css/style_dwindleing_ecosystems.css";
    $title = "EID - Dwindleing Ecosystems";
    $links = array("climate_change","pollution","rising_sea_levels");
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
        <h1>Dwindleing Ecosystems</h1>
        <hr>
        <div class="section_galery">
            <div class="section_img_1"><img src="./img/Ecosystem/deforestation.webp" alt="deforestation"></div>
        </div>
        <div class="section_text section_background">
            <h2>Ecosystems are in trouble, and it's our fault !</h2>
            <p>Ecosystems worldwide are facing a perilous decline, marked by a rapid and alarming loss of biodiversity and habitat degradation. Human activities such as deforestation, urbanization, pollution, overexploitation of natural resources, and climate change are among the primary drivers behind the dwindling state of ecosystems across the globe. This decline jeopardizes the delicate balance of diverse flora and fauna, disrupts crucial ecological processes, and diminishes the resilience of ecosystems to adapt to environmental changes. The loss of habitats leads to the extinction of species at an unprecedented rate, disrupting intricate food webs and ecological relationships essential for the stability and functioning of ecosystems. As these ecosystems falter, critical services they provide, including clean air, water filtration, pollination, and carbon sequestration, are compromised, impacting human well-being and the planet's overall health. Urgent and concerted efforts are imperative to protect and restore these ecosystems, safeguarding biodiversity, preserving essential ecological functions, and ensuring a sustainable future for both nature and humanity.</p>
        </div>
        <div class="section_galery">
            <div class="section_img_1"><img src="./img/Ecosystem/endengerd_animal.jpg" alt="endengerd animal"></div>
        </div>
        <div class="section_text section_background">
            <h2>Anamals and their feautur.</h2>
            <p>If the trend of ecosystem decline continues unchecked, the theoretical consequences would be catastrophic on a global scale. The loss of numerous ecosystems could trigger a domino effect, leading to a collapse in the interconnected web of life. As ecosystems die out, critical services they provide, such as regulation of climate, water purification, soil fertility, and natural pest control, would diminish or cease entirely. This would exacerbate the impacts of climate change, resulting in more extreme weather events, decreased agricultural productivity, and disruptions in water cycles, posing severe challenges to human survival. Moreover, the loss of biodiversity could limit potential scientific discoveries, impacting medicine, agriculture, and various industries that rely on diverse genetic resources. Societal upheaval, increased conflicts over dwindling resources, and exacerbated inequalities could ensue, as communities dependent on these ecosystems face livelihood challenges and displacement. Preserving and revitalizing ecosystems is not merely an environmental concern but an urgent necessity for the stability, resilience, and well-being of both nature and humanity.</p>
        </div>
        <div class="section_galery">
            <div class="section_img_1"><img src="./img/Ecosystem/field.jpg" alt="field"></div>
        </div>
        <div class="section_text section_background section_special">
            <h2>Hunting Season</h2>
            <p>Don't let any endangered animal escape this page, you will be given a gun after you press START and the animals will be released one by one. But be careful each animal will get faster and faster</p>
            <p id="text_warning">You need to be logged in to play or see leaderboard.</p>
            <form action="javascript: void(0);">
                <?php
                   if (isset($_SESSION['logedin']) && $_SESSION['logedin'] == true)
                        echo "<button onclick=\"on_start_button();\" type=\"submit\">START</button>"
                ?>
            </form>
            <button id="leaderboard_btn" onclick="" type="submit">LEADERBORD</button>
            <div id="score_table"></div>
        </div>
    </section>

    <!-- footer -->
    <?php include_once('./_comp/footer.php');?>

    <!-- Animals -->
    <div id="animal_counter" onclick="on_score_button();"><h2></h2></div>
    <div id="animal_spawner"></div>

    <!-- Scripts -->
    <script src="./js/hunting_season.js"></script>
</html>