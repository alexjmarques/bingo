<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bingo 2.0 JS</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <div class="container">
    <div class="painel_numero"> <h1 id="painel_numero"></h1></div>
        <div class="numeros bingo b">
            <p>B</p>
            <?php
            for ($i = 1; $i <= 15; $i++) {
                echo '<label for="numero'. $i .'" class="label_ID_numero'. $i .'">'. $i .'<input type="checkbox" class="hide" id="numero'. $i .'" name="numero'. $i .'" value="B '. $i .'"><div class="mask"></div></label>';
            }
            ?>
        </div>
        <div class="numeros bingo i">
        <p>I</p>
            <?php
            for ($i = 16; $i <= 30; $i++) {
                echo '<label for="numero'. $i .'">'. $i .'<input type="checkbox" class="hide" id="numero'. $i .'" name="numero'. $i .'" value="I '. $i .'"><div class="mask"></div></label>';
            }
            ?>
        </div>
        <div class="numeros bingo n">
        <p>N</p>
            <?php
            for ($i = 31; $i <= 45; $i++) {
                echo '<label for="numero'. $i .'">'. $i .'<input type="checkbox" class="hide" id="numero'. $i .'" name="numero'. $i .'" value="N '. $i .'"><div class="mask"></div></label>';
            }
            ?>
        </div>
        <div class="numeros bingo g">
        <p>G</p>
            <?php
            for ($i = 46; $i <= 60; $i++) {
                echo '<label for="numero'. $i .'">'. $i .'<input type="checkbox" class="hide" id="numero'. $i .'" name="numero'. $i .'" value="G '. $i .'"><div class="mask"></div></label>';
            }
            ?>
        </div>
        <div class="numeros bingo o">
        <p>O</p>
            <?php
            for ($i = 61; $i <= 75; $i++) {
                echo '<label for="numero'. $i .'">'. $i .'<input type="checkbox" class="hide" id="numero'. $i .'" name="numero'. $i .'" value="O '. $i .'"><div class="mask"></div></label>';
            }
            ?>
        </div>
    </div>
    <a href="https://bingo.alexjmarques.com.br" class="novo">NOVO JOGO</a>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bingo.js"></script>
</body>
</html>