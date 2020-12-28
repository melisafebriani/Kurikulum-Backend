   
        <title>Program Hitung Lingkaran</title>
        <h3>Program Hitung Lingkaran</h3>
        <br>

        <form action="keliling.php" method="POST"> Masukkan
            Diameter Lingkaran : <input type="number" name="diameter" required>
            <br><br>
            <input type="submit" name="submit" value="Hitung"></td>
        </form>

        <?php
            if(isset($_POST['submit'])){
                $diameter   =$_POST['diameter'];
                $jari = 1/2 * $diameter;
                $phi    =22/7;
                
                // menghitung luas lingkaran
                $luas_lingkaran = $phi*($jari*$jari);
                
                echo "Diketahui : <br />";
                echo "Diameter lingkaran = $diameter<br />";
                echo "Jari - jari = $jari <br>";
                echo "Phi = $phi<br />";
                echo "Maka luas lingkaran = ( $phi x $jari x $jari )  = $luas_lingkaran cm2";
            }
        ?>

