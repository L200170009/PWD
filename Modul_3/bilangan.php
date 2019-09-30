<html>
    <head>
        <title>Tugas 2</title>
    </head>
    <body>
        <h3>Cek Bilangan</h3>
        <form method="POST" action="bilangan.php">
            <p>Masukkan angka <input type="integer" name="angka" size="20"></p>
            <p><input type="submit" value="CEK" name="submit"></p>
        </form>
        <?php
            error_reporting (E_ALL ^ E_NOTICE); 
            $angka = $_POST["angka"];
            $submit = $_POST["submit"];
            if($submit){
                if($angka % 2 == 0){
                    echo"</br>Angka yang anda masukan adalah angka Genap";
                }else{
                    echo"</br>Angka yang anda masukan adalah angka Ganjil";
                }
            }
        ?>
    </body>
</html>