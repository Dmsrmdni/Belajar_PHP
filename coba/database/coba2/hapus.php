<?php

require "functions.php";

$id = $_GET["id"];

if(hapus($id) > 0){
    echo "<script>
            alert('Data Berhasil Di Hapus');
            document.location.href = 'coba2.php';
        </script>
        ";
}else{
    echo"
    <script>
        alert('Data Gagall Di Hapus');
        document.location.href = 'coba2.php';
    </script>
    ";
}

?>