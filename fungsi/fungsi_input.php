<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Masukan Sisi</td>
                <td>:</td>
                <td><input type="number" name="sisi"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit" name="submit">Kirim</button></td>
            </tr>
        </table>
    </form>

        <?php if(isset($_POST["submit"])) :
            $sisi = $_POST["sisi"]; 

            function persegi($sisi){
                $luas = $sisi * $sisi;
                echo "Luas persegi adalah $luas";
        }
        ?>
        <p><?php persegi($sisi); ?></p>

        <?php endif ?>
        
</body>
</html>
