<title>Program Hitung Persegi Panjang</title>
<h3> Program Hitung Persegi Panjang</h3>    
<br>

   
<form action="persegipanjang.php" method="post">
    Masukkan Panjang : <input type="number" name="panjang">
    <br/><br>
    Masukkan Lebar : <input type="number" name="lebar">
    <br><br>
    <input type="submit" name="submit" value="Hitung">
</form>

 
<?php
    if(isset($_POST['submit'])){
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $luas = $panjang * $lebar; // Menghitung luas
        
        echo "Diketahui : <br />";
        echo "Panjang persegi panjang : $panjang<br>";
        echo "Lebar persegi panjang : $lebar <br>";
        echo "Maka Luas persegi panjang = $panjang * $lebar = $luas cm<br>";
    }
?>