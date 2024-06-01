<?php
    $href = "./css/style_dwindleing_ecosystems_leaderboard.css";
    $title = "EID - Dwindleing Ecosystems";
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
        <h1>Leaderboard</h1>
        <hr>
        <div id="leader_board" class="section_text section_background">
            <h2>Leaderboard :</h2>
            <ol>
                <form method="POST">
                    <?php
                        try {
                            $dbs = new Score();
                            //$stmt = $dbs->connection->prepare("SELECT * FROM score ORDER BY score LIMIT 100");
                            //$stmt->execute();
                            $result = $dbs->connection->query("SELECT * FROM score ORDER BY score DESC LIMIT 100");
                            $rows = $result->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($rows as $row) {
                                if ($_SESSION["name"] == $row['name'] or $_SESSION["name"] == "ADMIN"){
                                    printf("<input class=\"dell editmode\" type=\"submit\" name=\"delete\", value=\"%s\"><input class=\"edtt editmode\" type=\"submit\" name=\"edit\", value=\"%s\">", $row['id'], $row['id']);
                                }
                                printf("<li>%s : %s <strong>%s</strong></li>", $row['name'], $row['msg'], $row['score']);
                            }
                        } catch(PDOException $e) {
                            die("Query error: " . $e->getMessage());
                        }
                    ?>
                    <input id="input_edit" type="text" name="input_edit" placeholder="Your text here">
                </form>
                <?php   
                    if(isset($_POST['delete'])){
                        $id = $_POST['delete'];
                        $dbs = new Score();
                        $dbs->remove($id);
                        header('Location: dwindleing_ecosystems_leaderbord.php');
                    }
                    if(isset($_POST['edit'])){
                        $id = $_POST['edit'];
                        $edit = $_POST['input_edit'];
                        $dbs = new Score();
                        $dbs->update($id, $edit);
                        header('Location: dwindleing_ecosystems_leaderbord.php');
                    }
                ?>
            </ol>
        </div>
    </section>

    <!-- Animals -->
    <div id="animal_counter" onclick="on_score_button();"><h2></h2></div>
    <div id="animal_spawner"></div>

    <!-- Scripts -->
    <script src="./js/hunting_season.js"></script>
</html>