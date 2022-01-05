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
            $i = 1;
            foreach ($data as $row) {
                echo "<tr>";
                echo "<td>" . $i . "</td>";
                echo "<td>" . $row->username . "</td>";
                echo "<td>" . $row->password . "</td>";
                echo "</tr>";
                $i++;
            }
            ?>
        </table>
    </body>
</html>