<?php

require_once("dbmhs.php");
$id = $_GET["nim"];
$sql = "DELETE FROM datamahasiswa WHERE nim=$id";
if (mysqli_query($conn, $sql)) {
    header("Location: lihatdatamhs.php");
}else {
    echo "Gagal";
}
mysqli_close($conn);
?>
