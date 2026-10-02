<!--
Author: Kaleb Blakemore
KUID: 3228599
Date: 09/16/2026
Lab: Lab #3
Last modified: 09/18/2026
Purpose: Web Programming
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Practice 4 - Multiplication Table</title>
    <style>
        table { border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #444; padding: 8px 12px; text-align: center; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Multiplication Table Generator</h1>
    <form method="GET" action="">
        <label for="num">Enter a number ($n$): </label>
        <input type="number" id="num" name="num" min="1" required>
        <button type="submit">Generate</button>
    </form>

    <?php
    if (isset($_GET['num'])) {
        $n = intval($_GET['num']);
        if ($n > 0) {
            echo "<h2>Multiplication Table up to $n</h2>";
            echo "<table>";
            
            // Header row
            echo "<tr><th>*</th>";
            for ($i = 1; $i <= $n; $i++) {
                echo "<th>$i</th>";
            }
            echo "</tr>";

            // Table body with row index headers
            for ($i = 1; $i <= $n; $i++) {
                echo "<tr>";
                echo "<th>$i</th>";
                for ($j = 1; $j <= $n; $j++) {
                    $val = $i * $j;
                    echo "<td>$val</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p style='color:red;'>Please enter a positive integer greater than 0.</p>";
        }
    }
    ?>
</body>
</html>