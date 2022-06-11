<?php
$connect = new mysqli('localhost', 'root', '', 'isig2022');
if ($connect) {
} else {
    echo 'Connexion echouee';
    exit();
}
?>
