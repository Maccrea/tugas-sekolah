<form action="" method="POST">
    MASUKKAN ANGKA 0-6<br>
    ANGKA : <input type="text" name="nilai">
    <input type="submit" value="hasil">
  </form>
<?php

  $dn = $_POST['nilai'];
  switch ($dn) {
      case 0:
          echo "Minggu";
          break;
      case 1:
          echo "Senin";
          break;
      case 2:
          echo "Selasa";
          break;
      case 3:
          echo "Rabu";
          break;
      case 4:
          echo "Kamis";
          break;
      case 5:
          echo "Jumat";
          break;
      case 6:
          echo "Sabtu";
          break;
      default:
          echo "Invalid hari";
          break;
  }

?>