<?php
function insertAcierto($name, $conn)
{
    $sql = "UPDATE partida set aciertos =aciertos+1 where nombre = '$name'";
    $result = mysqli_query($conn, $sql);
}

function insertarFallos($name, $conn)
{
    $sql = "UPDATE partida set fallos =fallos+1 where nombre = '$name'";
    $result = mysqli_query($conn, $sql);
}

function insertarGanada($name, $conn)
{
    $sql = "UPDATE partida set partidas_ganadas =partidas_ganadas+1 where nombre = '$name'";
    $result = mysqli_query($conn, $sql);
}

function select($index, $conn)
{
    $query = "SELECT id,simbolo,fonema FROM hiragana where id = $index";
    $result = $conn->query($query);
    $row = $result->fetch_array(MYSQLI_ASSOC);
}

function ranking()
{
    include 'database.php';
    $query = "SELECT * FROM partida order by partidas_ganadas desc limit 3";
    $result = $conn->query($query);
    foreach ($result as $fila) {
        $ranking[] = $fila;
    }
    return $ranking;
}

function imprimirRanking($ranking)
{
    foreach ($ranking as $key => $value) {
        foreach ($value as $key2 => $value2) {
            echo $key2 . " : " . $value2 . " <br>";
        }
        echo "<br>";
    }
}
