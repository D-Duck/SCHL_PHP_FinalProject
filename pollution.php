<?php
    $href = "./css/style_pollution.css";
    $title = "EID - Pollution";
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

    <!-- Section -->
    <section>
        <h1>Pollution</h1>
        <hr/>
        <div class="section_text section_background">
            <h2>Did you notice ?</h2>
            <p>Our planet is undergoing a distressing deterioration, marked by various environmental crises. <a href="./climate_change.php">Climate change</a> wreaks havoc, unleashing extreme weather patterns, melting polar ice caps, and <a href="./rising_sea_levels.php">rising sea levels</a>. <a href="./dwindleing_ecosystems.php">Biodiversity loss</a> threatens delicate ecosystems, endangering countless species. <a href="./pollution.php">Pollution</a> saturates air, water, and soil, poisoning habitats and jeopardizing human health. Deforestation continues at an alarming rate, disrupting vital carbon cycles and exacerbating <a href="./climate_change.php">global warming</a>. Unsustainable consumption depletes finite resources, intensifying strains on the planet's resilience. Urgent action is imperative to mitigate these detrimental effects, safeguarding the Earth's future and fostering a sustainable coexistence for generations to come.</p>
            <p>In tandem with <a href="./dwindleing_ecosystems.php">environmental deterioration</a>, societal neglect exacerbates these challenges. Inequitable distribution of resources heightens vulnerability for marginalized communities, deepening the impact of environmental degradation. Political inertia and corporate indifference perpetuate harmful practices, prioritizing short-term gains over long-term sustainability. The need for global cooperation and transformative change is glaringly evident, yet action often falls prey to conflicting interests and a lack of unified commitment. Embracing <a href="./pollution.php">renewable energy</a>, implementing <a href="./dwindleing_ecosystems.php">conservation measures</a>, fostering eco-conscious policies, and promoting environmental stewardship are pivotal steps toward salvaging our planet's health and fostering a harmonious relationship between humanity and nature. The collective responsibility to protect and heal the Earth demands immediate and concerted efforts on a global scale.</p>
        </div>
        <div class="section_galery">
            <div class="section_img_2"><img src="./img/Earth/river_polution.jpg" alt="river pollution"></div>
            <div class="section_img_2"><img src="./img/Earth/endangered_animal.jpg" alt="endangered animal"></div>
        </div>
        <div class="section_text section_background">
            <h2>What about you ?</h2>
            <p>Reflecting on one's negative impact on Earth is a crucial step towards fostering a more sustainable future. Consider the daily choices and habits that contribute to environmental degradation, from excessive consumption and reliance on single-use items to energy-intensive practices. Assessing individual <a href="./pollution.php">carbon footprints</a> and ecological imprints helps in recognizing personal accountability. Embracing mindfulness about resource consumption, waste generation, and <a href="./pollution.php">carbon emissions</a> empowers individuals to make informed decisions. Adopting a mindset of conscious consumption, supporting eco-friendly products, reducing waste, embracing renewable energy, and advocating for environmental stewardship are pivotal. Each individual's actions, no matter how small, collectively contribute to preserving the planet for future generations, underscoring the importance of responsible and mindful living.</p>
        </div>
        <div class="section_galery">
            <div class="section_img_1"><img src="./img/Earth/global_warming.jpg" alt="global warming"></div>
        </div>
        <div class="section_text section_background">
            <h2>Sad reality.</h2>
            <p>Human tendencies often gravitate towards immediacy, often overlooking the consequences that unfold over extended periods. This shortsightedness leads to a lack of concern for the long-term implications of our actions on the environment. Processes like <a href="./climate_change.php">climate change</a>, <a href="./dwindleing_ecosystems.php">biodiversity loss</a>, and <a href="./dwindleing_ecosystems.php">ecosystem degradation</a> occur gradually, their impact unfolding over years, decades, or even centuries. Consequently, many fail to grasp the severity of these issues due to their slow, incremental nature. This tendency to prioritize immediate gratification and convenience blinds us to the profound consequences of our choices. It's crucial to broaden perspectives, recognizing that even actions with delayed effects bear immense significance. Embracing a forward-thinking approach, valuing the interconnectedness of actions and consequences over time, can inspire proactive measures to safeguard the planet for future generations.</p>
        </div>
    </section>

    <!-- Smoke -->
    <div id="smoke_screen"></div>
    <div id="factory_wrapper"></div>
    <div id="smoke_switch" onclick="smoke_switch();"><p>on</p></div>    

    <!-- footer -->
    <?php include_once('./_comp/footer.php');?>

    <!-- Scripts -->
    <script src="./js/smoke.js"></script>
</html>