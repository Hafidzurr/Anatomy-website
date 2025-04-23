<?php
    include 'connect/connect.php';

    $queryart = "SELECT * FROM `tb_artikel_card`";
    $resart = mysqli_query($con,$queryart);
    //$dataart = mysqli_fetch_array($resart);

    while($datasub = mysqli_fetch_array($resart)){
        echo $datasub['judul'];
        echo $datasub['isi'];
        echo $datasub['aset'];

        print_r($datasub);
    }

    
?>