<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body>
    <?php
    $NIS = $_POST['NIS'];
    $Nama = $_POST['Nama'];
    $IPK = $_POST['IPK'];
    $Tahun = $_POST['Tahun'];
    $Bulan = $_POST['Bulan'];
    $jurusan = $_POST['jurusan'];
    $Tempat = $_POST['Tempat'];
    $Tgl = $_POST['Tgl'];
    $Bln = $_POST['Bln'];
    $Thn = $_POST['Thn'];
    $Jk = $_POST['JK'];
    $alamat = $_POST['alamat'];
    $tentang = $_POST['tentang'];
    ?>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td>NIS</td>
            <td><?php echo $NIS ?></td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td><?php echo $Nama ?></td>
        </tr>
        <tr>
            <td>Lama Studi di SMKN 2 Magelang</td>
            <td><?php echo $Tahun?>Th,<?php echo $Bulan?>Bln</td>
        </tr>
        <tr>
            <td>IPK Terakhir</td>
            <td><?php echo $IPK ?></td>
        </tr>
        <tr>
            <td>jurusan</td>
            <td><?php echo $jurusan ?></td>
        </tr>
        <tr>
            <td>TTL</td>
            <td><?php echo $Tempat ?>.<?php echo $Tgl ?>/<?php echo $Bln ?>/<?php echo $Thn ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?php echo $Jk ?></td>
        </tr>
        <tr>
            <td>alamat</td>
            <td><?php echo $alamat ?></td>
        </tr>
        <tr>
            <td>tentang anda</td>
            <td><?php echo $tentang ?></td>
        </tr>
    </table>
</body>
</html>