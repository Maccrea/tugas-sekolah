<html>
    <head><title>kembali ke input02</title></head>
    <body>
        <form action="input02.php" method="get" name="input">
            <input type="submit" name="input" value="kembali ke input02">
        </form>
    </body>
</html>

<?php
if (isset($_GET['Input'])){
    $nama = $_GET['nama'];
    echo "Nama Anda : <b>$nama</b>";
}
?>