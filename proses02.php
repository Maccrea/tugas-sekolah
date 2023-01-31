<html>
    <head><title>kembali ke input03</title></head>
    <body>
        <form action="input03.php" method="post" name="input">
            <input type="submit" name="input" value="kembali ke input02">
        </form>
    </body>
</html>

<?php
if (isset($_POST['Input'])){
    $nama = $_POST['nama'];
    echo "Nama Anda : <b>$nama</b>";
}
?>