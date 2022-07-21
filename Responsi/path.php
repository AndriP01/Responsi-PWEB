<?php
    $nama = $_POST['nama'];
    $kamar = $_POST['kamar'];
    $nomor = $_POST['nomor'];

    $fp = fopen("pendaftaran.txt","a+");
    fputs($fp,"$nama|$kamar|$nomor\n");
    fclose($fp);

    header('location: index.php', true, 301);
    exit();
?>