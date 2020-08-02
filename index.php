<?php
    include "koneksi.php";
    session_start();
    $kuery = "SELECT * FROM andon_process WHERE liffter='LIFFTER 1'";
    $exekuery = mysqli_query($koneksi, $kuery);
    $rows = mysqli_num_rows($exekuery);
    if ($rows > 0)
    {
        while($hasil = mysqli_fetch_array($exekuery)){
            $lifter[1] = $hasil['liffter'];
            $suffix[1] = $hasil['suffix'];
            $request_engine[1] = $hasil['request_engine'];
            $request_engine_confirmasi[1] = $hasil['request_engine_confirmasi'];
            $engine_ready[1] = $hasil['engine_ready'];
            $on_delivery[1] = $hasil['on_delivery'];
            $bongkar_pasang[1] = $hasil['bongkar_pasang'];
            $time_request[1] = $hasil['time_request'];  
            $time_finish[1] = $hasil['time_finish'];
            $status[1] = $hasil['status'];
        }
    }



    $kuery = "SELECT * FROM andon_process WHERE liffter='LIFFTER 2'";
    $exekuery = mysqli_query($koneksi, $kuery);
    $rows = mysqli_num_rows($exekuery);
    if ($rows > 0)
    {
        while($hasil = mysqli_fetch_array($exekuery)){
            $lifter[2] = $hasil['liffter'];
            $suffix[2] = $hasil['suffix'];
            $request_engine[2] = $hasil['request_engine'];
            $request_engine_confirmasi[2] = $hasil['request_engine_confirmasi'];
            $engine_ready[2] = $hasil['engine_ready'];
            $on_delivery[2] = $hasil['on_delivery'];
            $bongkar_pasang[2] = $hasil['bongkar_pasang'];
            $time_request[2] = $hasil['time_request'];  
            $time_finish[2] = $hasil['time_finish'];
            $status[2] = $hasil['status'];
        }
    }

    $kuery = "SELECT * FROM andon_process WHERE liffter='LIFFTER 3'";
    $exekuery = mysqli_query($koneksi, $kuery);
    $rows = mysqli_num_rows($exekuery);
    if ($rows > 0)
    {
        while($hasil = mysqli_fetch_array($exekuery)){
            $lifter[3] = $hasil['liffter'];
            $suffix[3] = $hasil['suffix'];
            $request_engine[3] = $hasil['request_engine'];
            $request_engine_confirmasi[3] = $hasil['request_engine_confirmasi'];
            $engine_ready[3] = $hasil['engine_ready'];
            $on_delivery[3] = $hasil['on_delivery'];
            $bongkar_pasang[3] = $hasil['bongkar_pasang'];
            $time_request[3] = $hasil['time_request'];  
            $time_finish[3] = $hasil['time_finish'];
            $status[3] = $hasil['status'];
        }
    }


    $kuery = "SELECT * FROM andon_process WHERE liffter='LIFFTER 4'";
    $exekuery = mysqli_query($koneksi, $kuery);
    $rows = mysqli_num_rows($exekuery);
    if ($rows > 0)
    {
        while($hasil = mysqli_fetch_array($exekuery)){
            $lifter[4] = $hasil['liffter'];
            $suffix[4] = $hasil['suffix'];
            $request_engine[4] = $hasil['request_engine'];
            $request_engine_confirmasi[4] = $hasil['request_engine_confirmasi'];
            $engine_ready[4] = $hasil['engine_ready'];
            $on_delivery[4] = $hasil['on_delivery'];
            $bongkar_pasang[4] = $hasil['bongkar_pasang'];
            $time_request[4] = $hasil['time_request'];  
            $time_finish[4] = $hasil['time_finish'];
            $status[4] = $hasil['status'];
        }
    }

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ANDON REPAIR ENGINE</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">REPAIR ENGINE</a>
            </div>

            <div class="header-right">

                <a href="index.php" class="btn btn-info" title="New Message"><b>Andon </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="index-history.php" class="btn btn-primary" title="New Task"><b>View History </b><i class="fa fa-bars fa-2x"></i></a>
            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" style="margin:0px;">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">ANDON REPAIR ENGINE</h1>
                    </div>
                </div>

                <!-- /. header -->
                <div class="row" style="margin-bottom:10px;">
                    <div class="col-md-2">
                        <button type="button" class="btn btn-lg btn-danger" style="width:100%;font-size:30px;box-shadow:-4px 5px 0px 0px #8a1b17">LIFFTER</button>                        
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-lg btn-danger" style="width:100%;font-size:30px;box-shadow:-4px 5px 0px 0px #8a1b17">SUFFIX</button>                                                
                    </div>
                    <div class="col-md-4">
                        <button type="button" class="btn btn-lg btn-danger" style="width:100%;font-size:30px;box-shadow:-4px 5px 0px 0px #8a1b17">PIC AREA ASAKAI</button>                                                
                    </div>
                    <div class="col-md-4">
                        <button type="button" class="btn btn-lg btn-danger" style="width:100%;font-size:30px;box-shadow:-4px 5px 0px 0px #8a1b17">PIC AREA ENGINE</button>                                                                        
                    </div>
                </div>
                <!-- /. header  -->

                <!-- /. liffter 1 -->
                <form class="form-horizontal style-form" method="POST" action="cek.php">
                <div class="row">
                    <div class="col-md-2" >
                        <div class="main-box mb-red" style="box-shadow:-6px 4px #99440c;">
                            <a href="">
                                <i class="fa fa-bolt fa-5x" ></i>
                                <h5>LIFFTER 1</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <?php
                            if($status[1] == "0"){
                                echo "<input class='form-control' type='text' name = 'suffix' style='width:100%;height:100%;font-size:100px;text-align:center;'>";
                            }
                            else{
                                echo "<input class='form-control' type='text' value='".$suffix[1]."' style='width:100%;height:100%;font-size:100px;text-align:center;' disabled>";
                            }
                        ?>
                    </div>
                    <div class="col-md-4">
                        <?php
                            if($status[1] == "0")
                            {
                                echo "<button type='submit' name ='asakai' value='request1' class='btn btn-lg btn-success' style='width:100%;height:150px;font-size:80px;'>REQUEST</button>";
                            }
                            else if($status[1] == "1")
                            {
                                echo "<button type='button' name='asakai' class='btn btn-lg btn-primary' style='width:100%;height:150px;font-size:80px;' disabled>Requesting...</button>";

                            }
                            else if($status[1] == "2")
                            {
                                echo    "<button type='button' name='asakai' class='btn btn-lg btn-primary' style='width:100%;height:150px;font-size:70px;'disabled>Terkonfirmasi...</button>";
                            }
                            else if ($status[1] == "3")
                            {
                                echo    "<button type='submit' name='asakai' value='menerima1'class='btn btn-lg btn-success' style='width:100%;height:150px;font-size:70px;'>Menerima.?</button>";
                            }
                            else
                            {
                                echo    "<button type='submit' name='asakai' value = 'selesai1' class='btn btn-lg btn-success' style='width:100%;height:150px;font-size:50px;'>Konfirmasi<br> Ganti Engine</button>";
                                
                            }
                        ?>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <?php
                        if($status[1] == "0")
                        {
                            echo "<button type='button' class='btn btn-lg btn-default' style='width:100%;height:150px;font-size:100px;' disabled>-</button>";                            
                        }
                        else if($status[1] == "1")
                        {
                            echo "<button type='submit' class='btn btn-lg btn-warning' name='engine' value='confirmasi1' style='width:100%;height:150px;font-size:65px;'>Konfirmasi</button>";                            
                        }
                        else if ($status[1] == "2")
                        {
                            echo "<button type='submit' class='btn btn-lg btn-warning' name='engine' value='selesai1' style='width:100%;height:150px;font-size:100px;'>Selesai..?</button>";
                        }
                        else if ($status[1] == "3")
                        {
                            echo "<button type='button' class='btn btn-lg btn-warning' style='width:100%;height:150px;font-size:50px;' disabled>Mengantar Engine..</button>";                            
                        }
                        else if ($status[1] == "4")
                        {
                            echo  "<button type='button' class='btn btn-lg btn-default' style='width:100%;height:150px;font-size:100px;' disabled>-</button>";
                        }
                        ?>
                    </div>
                </div>
                <!-- /. liffter 1  -->

                <!-- /. liffter 1 -->
                <form class="form-horizontal style-form" method="POST" action="cek.php">
                <div class="row">
                    <div class="col-md-2" >
                        <div class="main-box mb-red" style="box-shadow:-6px 4px #99440c;">
                            <a href="">
                                <i class="fa fa-bolt fa-5x" ></i>
                                <h5>LIFFTER 2</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <?php
                            if($status[2] == "0"){
                                echo "<input class='form-control' type='text' name = 'suffix' style='width:100%;height:100%;font-size:100px;text-align:center;'>";
                            }
                            else{
                                echo "<input class='form-control' type='text' value='".$suffix[2]."' style='width:100%;height:100%;font-size:100px;text-align:center;' disabled>";
                            }
                        ?>
                    </div>
                    <div class="col-md-4">
                        <?php
                            if($status[2] == "0")
                            {
                                echo "<button type='submit' name ='asakai' value='request2' class='btn btn-lg btn-success' style='width:100%;height:150px;font-size:80px;'>REQUEST</button>";
                            }
                            else if($status[2] == "1")
                            {
                                echo "<button type='button' name='asakai' class='btn btn-lg btn-primary' style='width:100%;height:150px;font-size:80px;' disabled>Requesting...</button>";

                            }
                            else if($status[2] == "2")
                            {
                                echo    "<button type='button' name='asakai' class='btn btn-lg btn-primary' style='width:100%;height:150px;font-size:70px;'disabled>Terkonfirmasi...</button>";
                            }
                            else if ($status[2] == "3")
                            {
                                echo    "<button type='submit' name='asakai' value='menerima2'class='btn btn-lg btn-success' style='width:100%;height:150px;font-size:70px;'>Menerima.?</button>";
                            }
                            else
                            {
                                echo    "<button type='submit' name='asakai' value = 'selesai2' class='btn btn-lg btn-success' style='width:100%;height:150px;font-size:50px;'>Konfirmasi<br> Ganti Engine</button>";
                                
                            }
                        ?>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <?php
                        if($status[2] == "0")
                        {
                            echo "<button type='button' class='btn btn-lg btn-default' style='width:100%;height:150px;font-size:100px;' disabled>-</button>";                            
                        }
                        else if($status[2] == "1")
                        {
                            echo "<button type='submit' class='btn btn-lg btn-warning' name='engine' value='confirmasi2' style='width:100%;height:150px;font-size:65px;'>Konfirmasi</button>";                            
                        }
                        else if ($status[2] == "2")
                        {
                            echo "<button type='submit' class='btn btn-lg btn-warning' name='engine' value='selesai2' style='width:100%;height:150px;font-size:100px;'>Selesai..?</button>";
                        }
                        else if ($status[2] == "3")
                        {
                            echo "<button type='button' class='btn btn-lg btn-warning' style='width:100%;height:150px;font-size:50px;' disabled>Mengantar Engine..</button>";                            
                        }
                        else if ($status[2] == "4")
                        {
                            echo  "<button type='button' class='btn btn-lg btn-default' style='width:100%;height:150px;font-size:100px;' disabled>-</button>";
                        }
                        ?>
                    </div>
                </div>
                <!-- /. liffter 1  -->

                <!-- /. liffter 1 -->
                <form class="form-horizontal style-form" method="POST" action="cek.php">
                <div class="row">
                    <div class="col-md-2" >
                        <div class="main-box mb-red" style="box-shadow:-6px 4px #99440c;">
                            <a href="">
                                <i class="fa fa-bolt fa-5x" ></i>
                                <h5>LIFFTER 3</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <?php
                            if($status[3] == "0"){
                                echo "<input class='form-control' type='text' name = 'suffix' style='width:100%;height:100%;font-size:100px;text-align:center;'>";
                            }
                            else{
                                echo "<input class='form-control' type='text' value='".$suffix[1]."' style='width:100%;height:100%;font-size:100px;text-align:center;' disabled>";
                            }
                        ?>
                    </div>
                    <div class="col-md-4">
                        <?php
                            if($status[3] == "0")
                            {
                                echo "<button type='submit' name ='asakai' value='request3' class='btn btn-lg btn-success' style='width:100%;height:150px;font-size:80px;'>REQUEST</button>";
                            }
                            else if($status[3] == "1")
                            {
                                echo "<button type='button' name='asakai' class='btn btn-lg btn-primary' style='width:100%;height:150px;font-size:80px;' disabled>Requesting...</button>";

                            }
                            else if($status[3] == "2")
                            {
                                echo    "<button type='button' name='asakai' class='btn btn-lg btn-primary' style='width:100%;height:150px;font-size:70px;'disabled>Terkonfirmasi...</button>";
                            }
                            else if ($status[3] == "3")
                            {
                                echo    "<button type='submit' name='asakai' value='menerima3'class='btn btn-lg btn-success' style='width:100%;height:150px;font-size:70px;'>Menerima.?</button>";
                            }
                            else
                            {
                                echo    "<button type='submit' name='asakai' value = 'selesai3' class='btn btn-lg btn-success' style='width:100%;height:150px;font-size:50px;'>Konfirmasi<br> Ganti Engine</button>";
                                
                            }
                        ?>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <?php
                        if($status[3] == "0")
                        {
                            echo "<button type='button' class='btn btn-lg btn-default' style='width:100%;height:150px;font-size:100px;' disabled>-</button>";                            
                        }
                        else if($status[3] == "1")
                        {
                            echo "<button type='submit' class='btn btn-lg btn-warning' name='engine' value='confirmasi3' style='width:100%;height:150px;font-size:65px;'>Konfirmasi</button>";                            
                        }
                        else if ($status[3] == "2")
                        {
                            echo "<button type='submit' class='btn btn-lg btn-warning' name='engine' value='selesai3' style='width:100%;height:150px;font-size:100px;'>Selesai..?</button>";
                        }
                        else if ($status[3] == "3")
                        {
                            echo "<button type='button' class='btn btn-lg btn-warning' style='width:100%;height:150px;font-size:50px;' disabled>Mengantar Engine..</button>";                            
                        }
                        else if ($status[3] == "4")
                        {
                            echo  "<button type='button' class='btn btn-lg btn-default' style='width:100%;height:150px;font-size:100px;' disabled>-</button>";
                        }
                        ?>
                    </div>
                </div>
                <!-- /. liffter 1  -->

                <!-- /. liffter 1 -->
                <form class="form-horizontal style-form" method="POST" action="cek.php">
                <div class="row">
                    <div class="col-md-2" >
                        <div class="main-box mb-red" style="box-shadow:-6px 4px #99440c;">
                            <a href="">
                                <i class="fa fa-bolt fa-5x" ></i>
                                <h5>LIFFTER 4</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <?php
                            if($status[4] == "0"){
                                echo "<input class='form-control' type='text' name = 'suffix' style='width:100%;height:100%;font-size:100px;text-align:center;'>";
                            }
                            else{
                                echo "<input class='form-control' type='text' value='".$suffix[4]."' style='width:100%;height:100%;font-size:100px;text-align:center;' disabled>";
                            }
                        ?>
                    </div>
                    <div class="col-md-4">
                        <?php
                            if($status[4] == "0")
                            {
                                echo "<button type='submit' name ='asakai' value='request3' class='btn btn-lg btn-success' style='width:100%;height:150px;font-size:80px;'>REQUEST</button>";
                            }
                            else if($status[4] == "1")
                            {
                                echo "<button type='button' name='asakai' class='btn btn-lg btn-primary' style='width:100%;height:150px;font-size:80px;' disabled>Requesting...</button>";

                            }
                            else if($status[4] == "2")
                            {
                                echo    "<button type='button' name='asakai' class='btn btn-lg btn-primary' style='width:100%;height:150px;font-size:70px;'disabled>Terkonfirmasi...</button>";
                            }
                            else if ($status[4] == "3")
                            {
                                echo    "<button type='submit' name='asakai' value='menerima3'class='btn btn-lg btn-success' style='width:100%;height:150px;font-size:70px;'>Menerima.?</button>";
                            }
                            else
                            {
                                echo    "<button type='submit' name='asakai' value = 'selesai3' class='btn btn-lg btn-success' style='width:100%;height:150px;font-size:50px;'>Konfirmasi<br> Ganti Engine</button>";
                                
                            }
                        ?>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <?php
                        if($status[4] == "0")
                        {
                            echo "<button type='button' class='btn btn-lg btn-default' style='width:100%;height:150px;font-size:100px;' disabled>-</button>";                            
                        }
                        else if($status[4] == "1")
                        {
                            echo "<button type='submit' class='btn btn-lg btn-warning' name='engine' value='confirmasi3' style='width:100%;height:150px;font-size:65px;'>Konfirmasi</button>";                            
                        }
                        else if ($status[4] == "2")
                        {
                            echo "<button type='submit' class='btn btn-lg btn-warning' name='engine' value='selesai3' style='width:100%;height:150px;font-size:100px;'>Selesai..?</button>";
                        }
                        else if ($status[4] == "3")
                        {
                            echo "<button type='button' class='btn btn-lg btn-warning' style='width:100%;height:150px;font-size:50px;' disabled>Mengantar Engine..</button>";                            
                        }
                        else if ($status[4] == "4")
                        {
                            echo  "<button type='button' class='btn btn-lg btn-default' style='width:100%;height:150px;font-size:100px;' disabled>-</button>";
                        }
                        ?>
                    </div>
                </div>
                <!-- /. liffter 1  -->


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">TABLE PROCESS</h1>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-12">

                        <div class="table-responsive" style="box-shadow:-3px 3px #8d8989;">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>LIFFTER</th>
                                        <th>SUFFIX</th>
                                        <th>REQUEST ENGINE</th>
                                        <th>REQUEST DI TERIMA</th>
                                        <th>ENGINE READY</th>
                                        <th>ON DELIVERY</th>
                                        <th>BONGKAR PASANG</th>
                                        <th>TIME REQUEST</th>
                                        <th>TIME FINISH</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>LIFFTER 1</td>
                                        <td>-</td>
                                        <td><span class="label label-success">-</span></td>
                                        <td><span class="label label-success">-</span></td>
                                        <td><span class="label label-success">-</span></td>
                                        <td><span class="label label-success">-</span></td>
                                        <td><span class="label label-success">-</span></td>
                                        <td>00:00:00</td>
                                        <td>00:00:00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
    </div>
    <!-- /. WRAPPER  -->
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    


</body>
</html>