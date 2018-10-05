<?php
require_once("db.php");

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tgl_lahir = $_POST['tgl_lahir'];

$sql = "UPDATE siswa SET nama='$nama', tgl_lahir='$tgl_lahir' WHERE nim=$nim";
if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
}else {
    echo "Error updating record: " . $sql . "<br>" . mysqli_error($conn);
}