<style>
    table {
        border: 2px solid black;
        border-collapse: collapse;
    }

    th, td {
        padding: 5px 10px;
        border: 2px solid black;
    }

    .table-container {
        display: inline-block;
        margin-right: 10px;
    }
</style>

<?php
echo "<table>";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 10; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
