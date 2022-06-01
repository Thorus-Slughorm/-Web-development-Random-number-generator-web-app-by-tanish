<?php
    function rng_result(){
        $numberOfDice = $_POST["numberOfDice"];
        $min = 1;
        $max = $_POST["typeOfDice"];
        $i = 1;

        while ($i <= $numberOfDice ){
            echo '<p>Dice ' . $numberOfDice . ' = ' . rand($min,$max) . '</p>';
            $i++;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Random Number Generator</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-stone-600 p-5">
        <main>
            <header>
                <h1 class="text-white font-bold text-center text-2xl">RNG - Random Number Generator</h1>
            </header>
            <form class="w-3/12 bg-slate-300 mt-12 text-center m-auto p-10 rounded-3xl"  method="post">
                <label class="text-white text-xl mt-12" for="numberOfDice">How many dices to roll?</label><br>
                <select id="numberOfDice" name="numberOfDice">
                    <option value="none">Choose one</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select><br><br>
                <label class="text-white text-xl mt-12" for="typeOfDice">Type of dice to roll:</label><br>
                <select id="typeOfDice" name="typeOfDice">
                    <option value="none">Choose one</option>
                    <option value="4">D4</option>
                    <option value="6">D6</option>
                    <option value="8">D8</option>
                    <option value="10">D10</option>
                    <option value="12">D12</option>
                    <option value="20">D20</option>
                </select><br><br>
                <input class="cursor-pointer bg-lime-900 p-4 text-white text-xl m-auto w-24 rounded-3xl" type="submit" value="ROLL">
            </form>
            <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST["numberOfDice"] !== 'none') {
            ?>
            <div class="dice-roll-result bg-gray-300 w-3/12 mt-12 m-auto p-10 rounded-3xl">
                <h1 class="text-white font-bold text-center text-2xl">Dice Result</h1>
                <?php rng_result(); ?>
            </div>
            <?php }
            ?>

        </main>
    </body>
</html>
