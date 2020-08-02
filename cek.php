<?php
    include "koneksi.php";
    echo $_POST['asakai'];
    echo $_POST['suffix'];
    $tanggal = date("Y-M-d h:i:sa",time(now));

    if ($_POST['asakai'] == "request1" and $_POST['suffix'] != ""){
        $edit = mysqli_query($koneksi, "UPDATE `andon_process` SET suffix='".$_POST['suffix']."', status = '1' , request_engine='OK', time_request='".$tanggal."' WHERE liffter = 'LIFFTER 1'");
        // if ($edit = TRUE) {
        //     echo "berjasil";
        //   }
        //   else
        //   {
        //       echo "gagal";
        //   }
    }
    if ($_POST['asakai'] == "menerima1"){
        $edit = mysqli_query($koneksi, "UPDATE `andon_process` SET on_delivery ='OK' , status = '4',time_finish = '".$tanggal."' WHERE liffter = 'LIFFTER 1'");
        // if ($edit = TRUE) {
        //     echo "berjasil";
        //   }
        //   else
        //   {
        //       echo "gagal";
        //   }
    }
    if ($_POST['asakai'] == "selesai1"){
        $kuery = "SELECT * FROM andon_process WHERE liffter='LIFFTER 1'";
        $exekuery = mysqli_query($koneksi, $kuery);
        $rows = mysqli_num_rows($exekuery);
        if ($rows > 0)
        {
            while($hasil = mysqli_fetch_array($exekuery)){
                $lif = $hasil['liffter'];
                $suf = $hasil['suffix'];
                $engine = $hasil['request_engine'];
                $engine_confirmasi = $hasil['request_engine_confirmasi'];
                $engine_ready = $hasil['engine_ready'];
                $on_delivery = $hasil['on_delivery'];
                $bongkar_pasang = $hasil['bongkar_pasang'];
                $time_request = $hasil['time_request'];  
                $time_finish = $hasil['time_finish'];
                $status = $hasil['status'];
            }
        }

        $inserthistory = mysqli_query($koneksi,"INSERT INTO `history` values('".$lif."','".$suf."','".$engine."','".$engine_confirmasi."','".$engine_ready."','".$on_delivery."','OK','".$time_request."','".$time_finish."','".$status."')");
        $edit = mysqli_query($koneksi, "UPDATE `andon_process` SET suffix = '' , request_engine = '', request_engine_confirmasi ='' ,engine_ready ='', on_delivery='', bongkar_pasang='' ,time_request = '',time_finish='', status = '0' WHERE liffter = 'LIFFTER 1'");
    }
    if ($_POST['engine'] == "confirmasi1"){
        $edit = mysqli_query($koneksi, "UPDATE `andon_process` SET request_engine_confirmasi ='OK' , status = '2' WHERE liffter = 'LIFFTER 1'");
    }
    if ($_POST['engine'] == "selesai1"){
        $edit = mysqli_query($koneksi, "UPDATE `andon_process` SET engine_ready='OK' , status = '3' WHERE liffter = 'LIFFTER 1'");
    }





    if ($_POST['asakai'] == "request2" and $_POST['suffix'] != ""){
        $edit = mysqli_query($koneksi, "UPDATE `andon_process` SET suffix='".$_POST['suffix']."', status = '1' , request_engine='OK', time_request='".$tanggal."' WHERE liffter = 'LIFFTER 2'");
        // if ($edit = TRUE) {
        //     echo "berjasil";
        //   }
        //   else
        //   {
        //       echo "gagal";
        //   }
    }
    if ($_POST['asakai'] == "menerima2"){
        $edit = mysqli_query($koneksi, "UPDATE `andon_process` SET on_delivery ='OK' , status = '4',time_finish = '".$tanggal."' WHERE liffter = 'LIFFTER 2'");
        // if ($edit = TRUE) {
        //     echo "berjasil";
        //   }
        //   else
        //   {
        //       echo "gagal";
        //   }
    }
    if ($_POST['asakai'] == "selesai2"){
        $kuery = "SELECT * FROM andon_process WHERE liffter='LIFFTER 2'";
        $exekuery = mysqli_query($koneksi, $kuery);
        $rows = mysqli_num_rows($exekuery);
        if ($rows > 0)
        {
            while($hasil = mysqli_fetch_array($exekuery)){
                $lif = $hasil['liffter'];
                $suf = $hasil['suffix'];
                $engine = $hasil['request_engine'];
                $engine_confirmasi = $hasil['request_engine_confirmasi'];
                $engine_ready = $hasil['engine_ready'];
                $on_delivery = $hasil['on_delivery'];
                $bongkar_pasang = $hasil['bongkar_pasang'];
                $time_request = $hasil['time_request'];  
                $time_finish = $hasil['time_finish'];
                $status = $hasil['status'];
            }
        }

        $inserthistory = mysqli_query($koneksi,"INSERT INTO `history` values('".$lif."','".$suf."','".$engine."','".$engine_confirmasi."','".$engine_ready."','".$on_delivery."','OK','".$time_request."','".$time_finish."','".$status."')");
        $edit = mysqli_query($koneksi, "UPDATE `andon_process` SET suffix = '' , request_engine = '', request_engine_confirmasi ='' ,engine_ready ='', on_delivery='', bongkar_pasang='' ,time_request = '',time_finish='', status = '0' WHERE liffter = 'LIFFTER 2'");
    }
    if ($_POST['engine'] == "confirmasi2"){
        $edit = mysqli_query($koneksi, "UPDATE `andon_process` SET request_engine_confirmasi ='OK' , status = '2' WHERE liffter = 'LIFFTER 1'");
    }
    if ($_POST['engine'] == "selesai2"){
        $edit = mysqli_query($koneksi, "UPDATE `andon_process` SET engine_ready='OK' , status = '3' WHERE liffter = 'LIFFTER 2'");
    }




    if ($_POST['asakai'] == "request3" and $_POST['suffix'] != ""){
        $edit = mysqli_query($koneksi, "UPDATE `andon_process` SET suffix='".$_POST['suffix']."', status = '1' , request_engine='OK', time_request='".$tanggal."' WHERE liffter = 'LIFFTER 3'");
        // if ($edit = TRUE) {
        //     echo "berjasil";
        //   }
        //   else
        //   {
        //       echo "gagal";
        //   }
    }
    if ($_POST['asakai'] == "menerima3"){
        $edit = mysqli_query($koneksi, "UPDATE `andon_process` SET on_delivery ='OK' , status = '4',time_finish = '".$tanggal."' WHERE liffter = 'LIFFTER 3'");
        // if ($edit = TRUE) {
        //     echo "berjasil";
        //   }
        //   else
        //   {
        //       echo "gagal";
        //   }
    }
    if ($_POST['asakai'] == "selesai3"){
        $kuery = "SELECT * FROM andon_process WHERE liffter='LIFFTER 3'";
        $exekuery = mysqli_query($koneksi, $kuery);
        $rows = mysqli_num_rows($exekuery);
        if ($rows > 0)
        {
            while($hasil = mysqli_fetch_array($exekuery)){
                $lif = $hasil['liffter'];
                $suf = $hasil['suffix'];
                $engine = $hasil['request_engine'];
                $engine_confirmasi = $hasil['request_engine_confirmasi'];
                $engine_ready = $hasil['engine_ready'];
                $on_delivery = $hasil['on_delivery'];
                $bongkar_pasang = $hasil['bongkar_pasang'];
                $time_request = $hasil['time_request'];  
                $time_finish = $hasil['time_finish'];
                $status = $hasil['status'];
            }
        }

        $inserthistory = mysqli_query($koneksi,"INSERT INTO `history` values('".$lif."','".$suf."','".$engine."','".$engine_confirmasi."','".$engine_ready."','".$on_delivery."','OK','".$time_request."','".$time_finish."','".$status."')");
        $edit = mysqli_query($koneksi, "UPDATE `andon_process` SET suffix = '' , request_engine = '', request_engine_confirmasi ='' ,engine_ready ='', on_delivery='', bongkar_pasang='' ,time_request = '',time_finish='', status = '0' WHERE liffter = 'LIFFTER 3'");
    }
    if ($_POST['engine'] == "confirmasi3"){
        $edit = mysqli_query($koneksi, "UPDATE `andon_process` SET request_engine_confirmasi ='OK' , status = '2' WHERE liffter = 'LIFFTER 3'");
    }
    if ($_POST['engine'] == "selesai3"){
        $edit = mysqli_query($koneksi, "UPDATE `andon_process` SET engine_ready='OK' , status = '3' WHERE liffter = 'LIFFTER 3'");
    }


    if ($_POST['asakai'] == "request4" and $_POST['suffix'] != ""){
        $edit = mysqli_query($koneksi, "UPDATE `andon_process` SET suffix='".$_POST['suffix']."', status = '1' , request_engine='OK', time_request='".$tanggal."' WHERE liffter = 'LIFFTER 4'");
        // if ($edit = TRUE) {
        //     echo "berjasil";
        //   }
        //   else
        //   {
        //       echo "gagal";
        //   }
    }
    if ($_POST['asakai'] == "menerima4"){
        $edit = mysqli_query($koneksi, "UPDATE `andon_process` SET on_delivery ='OK' , status = '4',time_finish = '".$tanggal."' WHERE liffter = 'LIFFTER 4'");
        // if ($edit = TRUE) {
        //     echo "berjasil";
        //   }
        //   else
        //   {
        //       echo "gagal";
        //   }
    }
    if ($_POST['asakai'] == "selesai1"){
        $kuery = "SELECT * FROM andon_process WHERE liffter='LIFFTER 4'";
        $exekuery = mysqli_query($koneksi, $kuery);
        $rows = mysqli_num_rows($exekuery);
        if ($rows > 0)
        {
            while($hasil = mysqli_fetch_array($exekuery)){
                $lif = $hasil['liffter'];
                $suf = $hasil['suffix'];
                $engine = $hasil['request_engine'];
                $engine_confirmasi = $hasil['request_engine_confirmasi'];
                $engine_ready = $hasil['engine_ready'];
                $on_delivery = $hasil['on_delivery'];
                $bongkar_pasang = $hasil['bongkar_pasang'];
                $time_request = $hasil['time_request'];  
                $time_finish = $hasil['time_finish'];
                $status = $hasil['status'];
            }
        }

        $inserthistory = mysqli_query($koneksi,"INSERT INTO `history` values('".$lif."','".$suf."','".$engine."','".$engine_confirmasi."','".$engine_ready."','".$on_delivery."','OK','".$time_request."','".$time_finish."','".$status."')");
        $edit = mysqli_query($koneksi, "UPDATE `andon_process` SET suffix = '' , request_engine = '', request_engine_confirmasi ='' ,engine_ready ='', on_delivery='', bongkar_pasang='' ,time_request = '',time_finish='', status = '0' WHERE liffter = 'LIFFTER 4'");
    }
    if ($_POST['engine'] == "confirmasi4"){
        $edit = mysqli_query($koneksi, "UPDATE `andon_process` SET request_engine_confirmasi ='OK' , status = '2' WHERE liffter = 'LIFFTER 4'");
    }
    if ($_POST['engine'] == "selesai4"){
        $edit = mysqli_query($koneksi, "UPDATE `andon_process` SET engine_ready='OK' , status = '3' WHERE liffter = 'LIFFTER 4'");
    }

    header('location:index.php');    
?>