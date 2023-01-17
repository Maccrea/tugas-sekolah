<form action="" method="post">
    PROGRAM CEK KELULUSAN<br>
    Nilai Ujian : <input type="text" name="nilai">
    <input type="Submit" value="Hasil">
</form>
<?php
if ($_POST)
{
    $nilai = $_POST['nilai'];
    if ($nilai >= 90)
    {
        $grade = "A+";
        $keterangan = "LULUS";
    }
    elseif ($nilai >= 80)
    {
        $grade = "A";
        $keterangan = "LULUS";
    }
    elseif ($nilai >= 70)
    {
    $grade = "B";
    $keterangan = "LULUS";
    }
    elseif ($nilai >= 60)
    {
    $grade = "C";
    $keterangan = "LULUS";
    }
    else
    {
    $grade = "D";
    $keterangan = "TIDAK LULUS";
    }
    echo "Hasil Kelulusan Maccrea Reynardo Geosanna Santosa";
    echo "<br>";
    echo "Nilai : " . $nilai;
    echo "<br>";
    echo "Keterangan : " . $keterangan;
    echo "<br>";
    echo "Indeks Prestasi : " . $grade;
}
?>