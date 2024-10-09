<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coba kalkultor</title>
</head>
<body>
    <div align="center">
    <h1>KALKULATOR</h1>
    <form method="post" action="">
        Nilai 1 : <input type="number" name="nilai1" /><br />
        Nilai 2 : <input type="number" name="nilai2" /><br />
        <br>
        <input type="submit" name="btambah" value="+" />
        <input type="submit" name="bkurang" value="-" />
        <input type="submit" name="bbagi" value="/" />
        <input type="submit" name="bkali" value="*" />
    </form>
    <hr>
    <?php
        $nilai1 = $_POST['nilai1'];
        $nilai2 = $_POST['nilai2'];
        //uji jika tombol tambah diklik
        if(isset($_POST['btambah']))
        {
        $hasil = $nilai1 + $nilai2;
        }
         //uji jika tombol kurang diklik
        if(isset($_POST['bkurang']))
        {
        $hasil = $nilai1 - $nilai2;
        }
         //uji jika tombol bagi diklik
        if(isset($_POST['bbagi']))
        {
        $hasil = $nilai1 / $nilai2;
        }
         //uji jika tombol kali diklik
        if(isset($_POST['bkali']))
        {
        $hasil = $nilai1 * $nilai2;
        }
        echo "Hasil : $hasil";
        ?>
        </div>
</body>
</html>