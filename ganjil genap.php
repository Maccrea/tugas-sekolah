<form action="" method="post">
    MASUKKAN ANGKA DISINI<br>
    Angka Ganjil Genap : <input type="text" name="angka">
    <input type="Submit" value="Hasil">
</form>
<?php
if ($_POST)
{
    $angka = $_POST['angka'];
    if ($angka % 2 == 0){
        echo "angka yang kamu isi adalah genap";
    }
    else {
        echo "angka yang kamu isi adalah ganjil";
    }
}
?>