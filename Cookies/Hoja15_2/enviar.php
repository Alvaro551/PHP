<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (!isset($_COOKIE['periodico'])) {
        $periodico = $_POST['periodico'];
        setcookie("periodico", $periodico,time()+8400, 'homePage.php', '', 0);
    } header('location: homePage.php');
} else {
    echo "error";
}
