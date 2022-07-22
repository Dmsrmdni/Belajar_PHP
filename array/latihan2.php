<?php

$buah = [
    [
        "nama" => "Dimas Ramdani",
        "buah" => [
            ["nama_buah" => "Mangga"],
            ["nama_buah" => "Stroberi"],
            [
                "nama_buah" => "Anggur",
                "jenis"  => [
                    ["jenis_anggur" => "anggur merah"],
                    ["jenis_anggur" => "anggur hijau"] 
                ]
            ]
        ]
    ],
    [
        "nama" => "Maya",
        "buah" => [
            ["nama_buah" => "pepaya"],
            ["nama_buah" => "manggis"],
            ]
    ],
    [
        "nama" => "Dani",
        "buah" => [
            ["nama_buah" => "rambutan"],
            ["nama_buah" => "durian"],
            ["nama_buah" => "leci"]
            ]
    ] 
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h3>Buah kesukaan ce'es</h3>
    </center>
    <?php foreach($buah as $data): ?>
    <table>
        <tr>
            <td>Nama Teman</td>
            <td>:</td>
            <td><?= $data["nama"]; ?></td>
        </tr>
        <tr>
            <td>Buah Kesukaan</td>
            <td>:</td>
            <td></td> 
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <ul type="none" style="margin-left :-35px ; margin-top :-20px">
                <?php foreach($data["buah"] as $data2) :?>
                    <li>-<?=  $data2["nama_buah"] ?></li>
                    <?php foreach($data2["jenis"] as $data3) : ?>
                <li>-<?=  $data3["jenis_anggur"] ?></li>
                 <?php endforeach?>
                <?php endforeach ?>
                </ul>
            </td>
        </tr>
    </table>
    <hr>
</body>
</html>
<?php endforeach ?>