<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papan Catur 5x5</title>
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
            width: 260px; /* 5 kotak x 50px + border */
        }
        .box {
            width: 50px;
            height: 50px;
            border: 1px solid black;
        }
        .black {
            background-color: black;
        }
        .white {
            background-color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < 5; $j++) {
                $color = ($i + $j) % 2 == 0 ? "black" : "white"; // Hitam lebih dulu
                echo "<div class='box $color'></div>";
            }
        }
        ?>
    </div>
</body>
</html>