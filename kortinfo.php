<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <title>Overview</title>
    <style>
        .topnav form {
            display: inline; /* Display the forms inline */
        }
    </style>
</head>

<body bgcolor="#000000">


<div class="topnav">
    <form action="startkort.php" method="get">
        <button type="submit">Home</button>
    </form>
    <form action="destination_page.php" method="get">
        <button type="submit">Go to Destination Page</button>
    </form>
    <form action="destination_page.php" method="get">
        <button type="submit">Go to Destination Page</button>
    </form>
    <form action="destination_page.php" method="get">
        <button type="submit">Go to Destination Page</button>
    </form>
    <form action="startkort2.php" method="get">
        Søg: <input type="text" name="kort" />
        <select name="søg_efter">
            <option value="Navn">Navn</option>
            <option value="Skade">Skade</option>
            <option value="Mana_cost">Mana Cost</option>
            <option value="Rarity">Rarity</option>
        </select>
        <input type="submit" />
    </form>
</div>

<?php
include 'config2.php';
include 'opendb2.php';

    $ID=$_GET['kort_id'];
    $sql = "SELECT Kort_ID, Navn, Billede, Skade, Liv, Mana_cost, Beskrivelse FROM kort WHERE Kort_ID=$ID";
$result = mysqli_query($link, $sql);

echo '<table>';
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
        echo '<tr>';
            echo '<h1 style="color:lightskyblue;">'.$row['Navn'].'</h1>';
        echo '</tr>';
        echo '<tr>';
        echo '<img src="' . $row['Billede'] . '" width="200" height="auto">';
        echo '<tr>';
            echo '<h2 style="color: lightskyblue;"> Skade:'.$row['Skade'].'</h2>';
        echo '</tr>';
        echo '<tr>';
            echo '<h2 style="color: lightskyblue;"> Liv:' .$row['Liv'].'</h2>';
        echo '</tr>';
    echo '</tr>';
}
echo '</table>';
include 'closedb2.php';
?>
</body>

