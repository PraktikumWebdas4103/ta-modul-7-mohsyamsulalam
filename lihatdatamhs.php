<?php
require_once("dbmhs.php");
$value = $_GET["cari"];
$sql = "SELECT * FROM datamahasiswa where nim like '%$value%'";
$result = mysqli_query($conn,$sql)
?>

<!DOCTYPE html>

<head>

    <title>Lihat Data</title>

</head>

<body>
    <table>
        <tr>
            <th>Nama</th>
            <th>Nim</th>
            <th>Aksi</th>
        </tr>

        <?php
        $result = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($result);
        if(mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row['nama']?></td>
                    <td><?php echo $row['nim']?></td>
                    <td> <a href="hapus.php?nim=<?php echo $row['nim']?>">delete</a>

                </tr>
                        <?php
            }
        }else {
            echo "0 Result";
        }
        mysqli_close($conn);
        ?>

</table>

</body>

</html>