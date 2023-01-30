<?php
    $preview = false;

if($_POST){
    if($_POST["tinggi"] && $_POST["gender"]){
        $tinggi = intval($_POST["tinggi"]);
        $gender = $_POST["gender"];
        if($gender == "lanang"){
           $hasil = ($tinggi - 100) - (($tinggi - 100) / 100 * 10);
           $preview = true;
           
        }else if($gender == "cuewe"){
            $hasil = ($tinggi - 100) - (($tinggi - 100) / 100 * 15);
            $preview = true;
        }
        
    
    }else{
        header("location: beratbadan.php");
    }
}


?>


<form action="" method="post">
    <h2>BERAFAKAH BERAT BADAN ANDA IDEAL?</h2>
    <br>
    <label for="tinggi">Tinggi badan anda : </label>
    <input type="number" name="tinggi" id="tinggi">
    <br>
 
  
    <br>
    <div class="gender">
        <br>
        <p>Jenis kelamin :</p>
    <input type="radio" name="gender" id="lanang" value="lanang">
    <label for="lanang">lanang</label>
    <br>
    <input type="radio" name="gender" id="cuewe" value="cuewe">
    <label for="cuewe">cuewe</label>
    <br>
    <input type="submit" value="hasil">

    </div>

</form>

<?php
if($preview == true ) {
    echo"<br>";
echo"<h2>BERAT BADAN IDEAL ANDA " , $hasil,  " KG </h2>";
}


?>