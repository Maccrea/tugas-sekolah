<form action="" method="post">
    Jenis Kelamin:
    <input type="radio" name="jenis_kelamin" value="pria">Pria
    <input type="radio" name="jenis_kelamin" value="wanita">Wanita
    <br>
    Tinggi (cm): <input type="text" name="tinggi"><br>
    Berat (kg): <input type="text" name="berat"><br>
    <input type="submit" value="Submit">
</form>
<?php
if ($_POST) 
{   
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tinggi = $_POST['tinggi'];
    $berat = $_POST['berat'];
    $bmi = $berat / ($tinggi * $tinggi);

    echo "BMI Anda adalah: " . $bmi . "<br>";

    if ($jenis_kelamin == "pria") {
        $beratideal = ($tinggi - 100) - (0.1 * ($tinggi  - 100));
        } 

    else{
            $beratideal = ($tinggi - 100) - (0.15 * ($tinggi - 100));
        } 

  echo "Berat badan ideal Anda adalah: " . $beratideal . " kg<br>";

  if ($bmi < 18.5) {
        echo "Berat badan Anda kurang.";
    } else if ($bmi >= 18.5 && $bmi <= 24.9) {
        echo "Berat badan Anda ideal.";
    } else {
        echo "Berat badan Anda berlebih.";
    }
}
?>
