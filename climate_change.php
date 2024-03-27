<?php
    $href = "./css/style_climate_change.css";
    $title = "EID - Climate Change";
    $links = array("dwindleing_ecosystems","pollution","rising_sea_levels");
?>

<!DOCTYPE html>
<html lang="en">
    <!-- head/header -->
    <?php 
        include_once('./_comp/head.php');
        include_once('./_comp/header.php');
    ?>

    <!-- Section -->
    <section>
        <h1>Climate Change</h1>
        <hr>
        <div class="section_text section_background">
            <h2>What is climate change ?</h2>
            <p>Climate change, an escalating global crisis, is primarily driven by human activities that release excessive greenhouse gases into the atmosphere. Among the most significant contributors to this alarming phenomenon are the burning of fossil fuels for energy generation and transportation, deforestation, industrial processes, and agricultural practices. The emission of carbon dioxide (CO2), methane (CH4), and nitrous oxide (N2O) traps heat in the Earth's atmosphere, intensifying the greenhouse effect and leading to rising global temperatures. Consequently, climate change triggers a myriad of adverse effects, including more frequent and severe extreme weather events such as hurricanes, floods, and droughts. Glacial melting, sea-level rise, ocean acidification, and disruptions in ecosystems and biodiversity further exacerbate the crisis. Moreover, shifts in weather patterns impact agriculture, food security, water resources, human health, and the overall stability of ecosystems, posing grave threats to the well-being of both present and future generations. Addressing these contributors and their repercussions is crucial to mitigating the escalating consequences of climate change and safeguarding the planet.</p>
            <h2>How can we help it ?</h2>
            <p>Fortunately, a range of strategies exists to combat and alleviate the impacts of climate change. Transitioning to renewable energy sources like solar, wind, and hydroelectric power can significantly reduce reliance on fossil fuels, thereby curbing greenhouse gas emissions. Implementing energy-efficient technologies and practices in industries, transportation, and households is another crucial step toward mitigating climate change. Additionally, protecting and restoring forests, which act as carbon sinks, plays a vital role in offsetting carbon emissions. International cooperation and policies aimed at reducing emissions, such as the Paris Agreement, are essential for collective action and commitment to tackling this global issue. Moreover, promoting sustainable agricultural techniques, enhancing resilience to climate-related disasters, and investing in innovative technologies for carbon capture and storage are integral parts of the multifaceted approach needed to address climate change. Embracing these solutions, coupled with widespread awareness and individual actions, is pivotal in securing a sustainable future and averting the worst impacts of climate change.</p>
        </div>
        <!-- Slideshow -->
        <div class="section_text">
            <div class="slideshow">
                <div class="slides">
                    <img src="./img/Climate/heat_chart.webp" style="width:100%">
                </div>
            
                <div class="slides">
                    <img src="./img/Climate/heat_map.jpg" style="width:100%">
                </div>
            
                <div class="slides">
                    <img src="./img/Climate/heat_world.png" style="width:100%">
                </div>
            </div>
        </div>
        <div class="section_galery">
            <div class="section_img_2"><img src="./img/Climate/forest_fire.jpg" alt="global warming"></div>
            <div class="section_img_2"><img src="./img/Climate/colection_of_disasters.jpg" alt="global warming"></div>
        </div>
        <div class="section_text section_background">
            <h2>What is green washing and is it bad ?</h2>
            <p>Greenwashing, a deceptive marketing tactic employed by companies, poses a significant threat by misleading consumers into believing that a product, service, or company is environmentally friendly when, in reality, it is not. This practice involves using misleading or false claims about sustainability, eco-friendliness, or environmental impact to attract environmentally conscious consumers. Companies may use terms like "natural," "eco-friendly," or "green" without substantiating their claims with genuine efforts to reduce their environmental footprint. Greenwashing not only leads consumers to make choices based on misinformation but also undermines legitimate efforts to address pressing environmental issues. It obscures transparency, making it challenging for consumers to discern truly sustainable products or practices from those merely capitalizing on the growing demand for environmentally friendly options. Consequently, greenwashing perpetuates complacency, hindering meaningful progress toward authentic sustainability goals and impeding the collective effort required to combat climate change and environmental degradation. This phenomenon ultimately erodes trust, compromises accountability, and impedes the crucial transition to a genuinely sustainable future.</p>
        </div>
        <!-- Q/A -->
        <div class="section_background">
            <h2>Common Q/A</h2>
            <button class="accordion">What is climate change?</button>
            <div class="panel">
              <p>Climate change involves significant changes in average conditions—such as temperature, precipitation, wind patterns, and other aspects of climate—that occur over years, decades, centuries, or longer. Climate change involves longer-term trends, such as shifts toward warmer, wetter, or drier conditions. These trends can be caused by natural variability in climate over time, as well as human activities that add greenhouse gases to the atmosphere like burning fossil fuels for energy.</p>
            </div>
            <button class="accordion">What is the difference between global warming and climate change?</button>
            <div class="panel">
              <p>The terms "global warming" and "climate change" are sometimes used interchangeably, but global warming is just one of the ways in which climate is affected by rising concentrations of greenhouse gases. "Global warming" describes the recent rise in the global average temperature near the earth's surface, which is caused mostly by increasing concentrations of greenhouse gases (such as carbon dioxide and methane) in the atmosphere from human activities such as burning fossil fuels for energy.</p>
            </div>
            <button class="accordion">What is the difference between climate change and climate variability?</button>
            <div class="panel">
              <p>Climate change occurs over a long period of time, typically over decades or longer. In contrast, climate variability includes changes that occur within shorter timeframes, such as a month, season, or year. Climate variability explains the natural variability within the system. For example, one unusually cold or wet year followed by an unusually warm or dry year would not be considered a sign of climate change.</p>
            </div>
            <button class="accordion">Why be concerned about a degree or two change in the average global temperature?</button>
            <div class="panel">
              <p>A degree or two change in average global temperature might not sound like much to worry about, but relatively small changes in the earth’s average temperature can mean big changes in local and regional climate, creating risks to public health and safety, water resources, agriculture, infrastructure, and ecosystems. Among the many examples cited by the 2018 National Climate Assessment are an increase in heat waves and days with temperatures above 90°F; more extreme weather events such as storms, droughts, and floods; and a projected sea level rise of 1 to 4 feet by the end of this century, which could put certain areas of the country underwater.</p>
            </div>
            <button class="accordion">How can people reduce the risks of climate change?</button>
            <div class="panel">
              <p>People can reduce the risks of climate change by making choices that reduce greenhouse gas emissions and by preparing for the changes expected in the future. Decisions that people make today will shape the world for decades and even centuries to come. Communities can also prepare for the changes in the decades ahead by identifying and reducing their vulnerabilities and considering climate change risks in planning and development. Such actions can ensure that the most vulnerable populations—such as young children, older adults, and people living in poverty—are protected from the health and safety threats of climate change.</p>
            </div>
            <br><br><br>
        </div>
    </section>

    <!-- footer -->
    <?php include_once('./_comp/footer.php');?>
</html>