<?php 
$fp = fopen("data.txt", "r");
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1 align="center">Table Data Mahasiswa</h1>
    <div align="center"><strong><a href="simpan.php">Isi Data Mahasiswa</a></strong></div>
    <hr>
    <table border="1" width="80%" style="margin: 0 auto;">
        <thead>
            <tr>
                <td>NIM</td>
                <td>Nama</td>
                <td>Kelas</td>
                <td>Email</td>
                <td>Kota</td>
            </tr>
        </thead>
            <?php while ($isi = fgets($fp)): ?>
                <?php $data = explode(':', $isi) ?>
                <tr>
                    <td><?php echo $data[0] ?></td>
                    <td><?php echo $data[1] ?></td>
                    <td><?php echo $data[2] ?></td>
                    <td><?php echo $data[3] ?></td>
                    <td><?php echo $data[4] ?></td>
                </tr>
            <?php 
            endwhile 
            ?>
    </table>
</body>
</html>