<?php
require_once("db.php");

$id = $_GET["nim"];

$sql = "SELECT * FROM siswa WHERE nim=$id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Doc</title>
</head>
<body>
    <form action="update.php" method="post">
         Nim :  <input type="text" name="nims" value="<?php echo $row["nim"]; ?>" disabled><br>
                <input type="hidden" name="nim" value="<?php echo $row["nim"]; ?>"><br><br>
            
        Nama : <input type="text" name="nama" value="<?php echo $row["nama"]; ?>"><br><br>
       
        Tgl Lahir : <input type="date" name="tgl_lahir" value="<?php echo $row["tgl_lahir"]; ?>"><br><br>

           <input type="submit" value="Update">
    </form>
</body>
</html>