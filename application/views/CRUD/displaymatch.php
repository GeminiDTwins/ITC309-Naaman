<html>
    <head>
        <title>Display records</title>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
    </head>

    <body>
        <table width="600" border="0" cellspacing="5" cellpadding="5">
            <tr style="background:#CCC">
                <th>Account ID</th>
                <th>Username</th>
                <th>password</th>

            </tr>
            <?php
                echo "<tr>";
                echo "<td>" . $data . "</td>";
                echo "<td>" . $data . "</td>";
                echo "<td>" . $data . "</td>";
                echo "</tr>";
            ?>
        </table>
    </body>
</html>