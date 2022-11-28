<header>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Document</title>
    </head>

    <body>
        <div class="header">
            <nav>
                <ul>
                    <li><a href="index.php">Inicio</li>
                    <li><a href="hiragana.php">Hiragana</li>
                    <li><a href="logout.php">Logout</li>
                    </a>
                    <?php

                    if (!isset($_SESSION['name'])) {
                        echo " Usuario : ";
                        echo " Partidas : ";
                    } else {
                        include 'database.php';
                        $name =  $_SESSION['name'];
                        $query = "SELECT * FROM partida where nombre = '$name'";
                        $result = $conn->query($query);
                        $row = $result->fetch_array(MYSQLI_ASSOC);
                        echo "<li> Usuario : " . $_SESSION['name'] . "</li>";
                        echo "<li> Partidas Ganadas : " . $row['partidas_ganadas'] . "</li>";
                    }
                    ?>
                </ul>
            </nav>
        </div>
</header>