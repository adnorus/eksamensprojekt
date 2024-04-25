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

    
    <h1>overview</h1>
    
    <?php
    include 'config2.php';
    include 'opendb2.php';
    
    $sql = "SELECT Kort_ID, Navn, Billede FROM Kort";
    $result = mysqli_query($link, $sql);
    $count=0;
    echo '<table>';
    while ($row = mysqli_fetch_assoc($result)) {

        if ($count%5==0){
            echo '<tr>';
        }

        echo '<td><a href="kortinfo.php?kort_id=' . $row['Kort_ID'] . '">';
        echo '<img src="' . $row['Billede'] . '" width="200" height="auto">';
        echo '</a></td>';
        $count++;

        if ($count%5==0) {
            echo '</tr>';
        }

    }

    echo '</table>';

    include 'closedb2.php';
    ?>
</body>
