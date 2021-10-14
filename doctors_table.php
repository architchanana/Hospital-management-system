<!DOCTYPE html>
<html>

<head>
    <title>Doctors</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            color: #588c7e;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
        }

        th {
            background-color: #588c7e;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }
    </style>
</head>

<body style="background: linear-gradient(135deg, #5db0e7, rgb(138, 202, 199));">
    <table>
        <tr>
            <th>S.no</th>
            <th>Name</th>
            <th>Email Address</th>
            <th>Degree</th>
            <th>Phonenumber</th>
            <th>Gender</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "database123");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT id,Name,email,degree,Phonenumber,gender FROM doctors ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>"
                    . $row["email"] . "</td><td>" . $row["degree"] . "</td><td>" . $row["Phonenumber"] . "</td><td>" . $row["gender"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </table>
</body>

</html>