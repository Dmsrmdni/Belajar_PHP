<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan</title>
</head>
<body>

<center>
    <h1>Perulangan</h1>
    <!--form-->
    <form method="POST" action="">
            <table>
                <tr>
                    <td>No</td>
                    <td>:</td>
                    <td bgcolor="blue"><input type="number" name="no"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="simpan" value="Proses"></td>
                </tr>
            </table>
    </form>
    </center>

</body>
</html>

<?php 

if(isset($_POST["simpan"])){
    $no = $_POST["no"];

for($i=1; $i <= $no; $i++){
    echo"pengulangan ke -$i <br>";
}
}

?>