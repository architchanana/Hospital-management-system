<!DOCTYPE html>
<html>

<head>
    <title>Find a doctor</title>
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
<!DOCTYPE html>
<html>

<head>
    <title>Table with database</title>
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

<body>
    <table>
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Age</th>
            <th>Phonenumber</th>
            <th>Email</th>
            <th>Address</th>
            <th>Gender</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "database123");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT first_name,last_name,age,Phonenumber,email,Addresss,gender FROM find_a_doctor ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["first_name"] . "</td><td>" . $row["last_name"] . "</td><td>"
                    . $row["age"] . "</td><td>" . $row["Phonenumber"] . "</td><td>" . $row["email"] . "</td><td>" . $row["Addresss"] . "</td><td>" . $row["gender"] . "</td></tr>";
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