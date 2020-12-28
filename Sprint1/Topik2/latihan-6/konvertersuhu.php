
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<head>
    <title>Converter Suhu</title>
</head>
<style>
    html{
        font-family: helvetica;
    }
</style>
<body>

    <div class="container">

        <h1>Konverter Suhu - PHP</h1>

        <br>

        <form action="" method="POST">
            Suhu : <input type="number" name="celcius" required> Celcius
            <br><br>
            Konversi ke :

            <select name="pilihsuhu">
                <option>Reamur</option>
                <option>Farenheit</option>
                <option>Kelvin</option>
            </select>
            <br><br>

            <input type="submit" name="konversi" value="konversi">
        </form>

        <br><br>

    <?php
    $celsius    =   $_POST['celcius'];
    $suhu       =   $_POST['pilihsuhu'];
    $konversi   =   $_POST['konversi'];


     if(isset($konversi)){

        switch($suhu){

            case "Reamur":
            echo floatval($celsius * (4/5));
            break;

            case "Farenheit":
            echo floatval($celsius * (9/5) + 32);
            break;

            case "Kelvin":
            echo floatval($celsius + 273);
            break;
        }
     } else {
        echo "ANDA HARUS MEMILIH ";
     }

    ?>

    </div>




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>