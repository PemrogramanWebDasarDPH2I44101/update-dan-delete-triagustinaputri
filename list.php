<?php
require_once("db.php");
?>
<!DOCTYPE html>
<head>
    <title>List</title>
</head>
<body>
    <table>
        <tr align="left">
            <th>Nim</th>
            <th>Nama</th>
            <th>Tgl Lahir</th>
            <th>Aksi</th>
        </tr>
       <?php
            $sql = "SELECT * FROM siswa";

            $result = mysqli_query($conn, $sql);
            $row = mysqli_num_rows($result);

            if ($row > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    $id = $row["nim"];
                    echo "<tr>";
                    echo "<td>" . $row["nim"] . "</td>";
                    echo "<td>" . $row["nama"] . "</td>";
                    echo "<td>" . $row["tgl_lahir"] . "</td>";
                    echo "<td>" . "<a href='form_update.php?nim=$id'>Edit</a> | <a href='delete.php?nim=$id'>Hapus</a>" . "</td>";
                    echo "</tr>";
                }
            }else {
                echo "<tr><td colspan='4' align='center'>0 results.</td></tr>";
            }
        ?>

    </table>
</body>
</html>
