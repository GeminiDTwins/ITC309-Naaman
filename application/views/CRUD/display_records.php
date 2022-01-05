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
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Postcode</th>
                <th>Phone Number</th>
                <th>Gender</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
            <?php
            $i = 1;
            foreach ($data as $row) {
                echo "<tr>";
                echo "<td>" . $i . "</td>";
                echo "<td>" . $row->username . "</td>";
                echo "<td>" . $row->password . "</td>";
                echo "<td>" . $row->f_name . "</td>";
                echo "<td>" . $row->l_name . "</td>";
                echo "<td>" . $row->email . "</td>";
                echo "<td>" . $row->address . "</td>";
                echo "<td>" . $row->postcode . "</td>";
                echo "<td>" . $row->phone_number . "</td>";
                echo "<td>" . $row->gender . "</td>";
                echo "<td>" . $row->created_at . "</td>";
                echo "<td>" . $row->updated_at . "</td>";
                echo "</tr>";
                $i++;
            }
            ?>
        </table>
    </body>
</html>