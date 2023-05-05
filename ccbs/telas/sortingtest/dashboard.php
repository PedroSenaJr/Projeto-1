<?php

include_once("/xampp/htdocs/ccbs/php/bd/conexao.php");

session_start();

?>

<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/ccbs/CSSS/sortingtest/dashboard.css">
    <link rel="shortcut icon" type="image/x-icon" href="/ccbs/img/favicon_ccbs.ico">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type ="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <title>Dashboard</title>

</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>
                <?php
                    if($_SESSION['idUser'] == 1){
                        echo 'Pedro Sena';
                    };
                    if($_SESSION['idUser'] == 2){
                        echo 'Rafael Camurça';
                    };
                    if($_SESSION['idUser'] == 7){
                        echo 'Anderson Silva';
                    };
                ?>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
           
            <?php
                if($_SESSION['idUser'] == 1 or $_SESSION['idUser'] == 2 or $_SESSION['idUser'] == 3 or $_SESSION['idUser'] == 7){
                    
                    echo'<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Estação 1</a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="/ccbs/telas/diesaw/consulta_diesaw.php">Busca de Blade</a></li>
                            <li><a class="dropdown-item" href="/ccbs/telas/diesaw/cadastro_diesaw.php">Registro de Blade</a></li>
                            </ul>
                        </li>';

                    echo'<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Estação 2</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="/ccbs/telas/mold/calculo_compound.php">Cálculo de Compound</a></li>
                        <li><a class="dropdown-item" href="/ccbs/producao/mold.php">Controle de Produção</a></li>
                        <li><a class="dropdown-item" href="/ccbs/producao/hist_mold.php">Histórico de Produção</a></li>
                        </ul>
                    </li>';

                    echo'<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Estação 3</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="#">Cálculo de Pasta de Solda</a></li>
                        </ul>
                    </li>';

                    echo '<li class=nav-item dropdown>
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Estação 4</a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="/ccbs/telas/sgl/consulta.php">Consulta de Blades</a></li>
                            <li><a class="dropdown-item" href="/ccbs/telas/sgl/cadastro.php">Registro de Blade</a></li>
                            </ul>
                        </li>';

                    echo'<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Estação 5</a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="/ccbs/telas/os/pogopinbga132.php">PogoPin - BGA 132</a></li>
                            <li><a class="dropdown-item" href="/ccbs/telas/os/pogopinbga272.php">PogoPin - BGA 272</a></li>
                            </ul>
                        </li>';
                    
                    echo'<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Estação 6</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="/ccbs/telas/sortingtest/dashboard.php">Dashboard</a></li>
                        <li><a class="dropdown-item" href="/ccbs/telas/sortingtest/cadinfo.php">Registrar Informação</a></li>
                        <li><a class="dropdown-item" href="/ccbs/telas/sortingtest/dailyreport.php">Report Diário</a></li>
                        </ul>
                    </li>';

                    echo'<li class="nav-item dropdown">
                            <li><a class="dropdown-item" href="../menu.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                            </svg> Home </a></li>
                        </li>';

                    //echo'<form class="d-flex mt-3" role="search">
                    //    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    //    <button class="btn btn-success" type="submit">Search</button>
                    //    </form>';

                }
                if($_SESSION['idUser'] == 4 or $_SESSION['idUser'] == 5){
                    echo '<li class=nav-item dropdown>
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Singulation</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="/ccbs/telas/sgl/consulta.php">Consulta de Blades</a></li>
                        <li><a class="dropdown-item" href="/ccbs/telas/sgl/cadastro.php">Registro de Blade</a></li>
                        </ul>
                    </li>';

                    echo'<li class="nav-item dropdown">
                            <li><a class="dropdown-item" href="../menu.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                            </svg> Home </a></li>
                        </li>';
                }
                if($_SESSION['idUser'] == 6 or $_SESSION['idUser'] == 8){
                    echo'<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Molding</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="/ccbs/telas/mold/calculo_compound.php">Cálculo de Compound</a></li>
                        </ul>
                    </li>';

                    echo'<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Sorting Test</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="/ccbs/telas/sortingtest/cadinfo.php">Registrar Informação</a></li>
                        <li><a class="dropdown-item" href="/ccbs/telas/sortingtest/dailyreport.php">Report Diário</a></li>
                        </ul>
                    </li>';

                    echo'<li class="nav-item dropdown">
                            <li><a class="dropdown-item" href="../menu.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                            </svg> Home </a></li>
                        </li>';

                    //echo'<form class="d-flex mt-3" role="search">
                    //    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    //    <button class="btn btn-success" type="submit">Search</button>
                    //   </form>';
                }
                if($_SESSION['idUser'] == 9 or $_SESSION['idUser'] == 10 or $_SESSION['idUser'] == 11 or $_SESSION['idUser'] == 12 or $_SESSION['idUser'] == 13 or $_SESSION['idUser'] == 14 or $_SESSION['idUser'] == 15 or $_SESSION['idUser'] == 16 or $_SESSION['idUser'] == 17 or $_SESSION['idUser'] == 18 or $_SESSION['idUser'] == 19 or $_SESSION['idUser'] == 20 or $_SESSION['idUser'] == 21 or $_SESSION['idUser'] == 22 or $_SESSION['idUser'] == 23 or $_SESSION['idUser'] == 24){
                    echo'<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Sorting Test</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="/ccbs/telas/sortingtest/dailyreport.php">Report Diário</a></li>
                        </ul>
                    </li>';

                    echo'<li class="nav-item dropdown">
                            <li><a class="dropdown-item" href="../menu.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                            </svg> Home </a></li>
                        </li>';

                    //echo'<form class="d-flex mt-3" role="search">
                    //    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    //    <button class="btn btn-success" type="submit">Search</button>
                    //   </form>';
                }
            ?>                   
        </div>
        </div>
    </div>
    </nav>

    <form action="#" method="GET"> 
    
        <div class="yieldgeneral">
            <h5>1 - Rendimento Geral -- Yield General</h5>  
            <?php
                $sql31 = "SELECT aprovado,bin2,falha,datasaida FROM dailyreport";
                $result31 = $conn->query($sql31);

                $aprovado30 = 0;
                $aprovado31 = 0;
                $aprovado32 = 0;
                $aprovado33 = 0;
                $aprovado34 = 0;
                $bin30 = 0;
                $bin31 = 0;
                $bin32 = 0;
                $bin33 = 0;
                $bin34 = 0;
                $falha30 = 0;
                $falha31 = 0;
                $falha32 = 0;
                $falha33 = 0;
                $falha34 = 0;
                $soma30 = 0;
                $soma31 = 0;
                $soma32 = 0;
                $soma33 = 0;
                $soma34 = 0;
                $somabin30 = 0;
                $somabin31 = 0;
                $somabin32 = 0;
                $somabin33 = 0;
                $somabin34 = 0;
                $somafalha30 = 0;
                $somafalha31 = 0;
                $somafalha32 = 0;
                $somafalha33 = 0;
                $somafalha34 = 0;
                $i=0;

                while($user_data = mysqli_fetch_assoc($result31)){
                    $hoje = date('Y-m-d');
                    $ontem = date('Y-m-d', strtotime('-1 days', strtotime($hoje)));
                    $doisdiasatras = date('Y-m-d', strtotime('-2 days', strtotime($hoje)));
                    $tresdiasatras = date('Y-m-d', strtotime('-3 days', strtotime($hoje)));
                    $quatrodiasatras = date('Y-m-d', strtotime('-4 days', strtotime($hoje)));
                    $cincodiasatras = date('Y-m-d', strtotime('-5 days', strtotime($hoje)));

                    $data[] = $user_data['datasaida'];
                    
                    if($hoje==$data[$i]){
                        $aprovado30 = $user_data['aprovado'];
                        $bin30 = $user_data['bin2'];
                        $falha30 = $user_data['falha'];
                        $soma30 = $soma30+$aprovado30;
                        $somabin30 = $somabin30+$bin30;
                        $somafalha30 = $somafalha30+$falha30;
                    }
                    if($ontem==$data[$i]){
                        $aprovado31 = $user_data['aprovado'];
                        $bin31 = $user_data['bin2'];
                        $falha31 = $user_data['falha'];
                        $soma31 = $soma31+$aprovado31;
                        $somabin31 = $somabin31+$bin31;
                        $somafalha31 = $somafalha31+$falha31;
                    }
                    if($doisdiasatras==$data[$i]){
                        $aprovado32 = $user_data['aprovado'];
                        $bin32 = $user_data['bin2'];
                        $falha32 = $user_data['falha'];
                        $soma32 = $soma32+$aprovado32;
                        $somabin32 = $somabin32+$bin32;
                        $somafalha32 = $somafalha32+$falha32;
                    }
                    if($tresdiasatras==$data[$i]){
                        $aprovado33 = $user_data['aprovado'];
                        $bin33 = $user_data['bin2'];
                        $falha33 = $user_data['falha'];
                        $soma33 = $soma33+$aprovado33;
                        $somabin33 = $somabin33+$bin33;
                        $somafalha33 = $somafalha33+$falha33;
                    }
                    if($quatrodiasatras==$data[$i]){
                        $aprovado34 = $user_data['aprovado'];
                        $bin34 = $user_data['bin2'];
                        $falha34 = $user_data['falha'];
                        $soma34 = $soma34+$aprovado34;
                        $somabin34 = $somabin34+$bin34;
                        $somafalha34 = $somafalha34+$falha34;
                    }
                    $i++;
                }
                $yieldbin1hoje30 = 0;
                $yieldbin1hoje31 = 0;
                $yieldbin1hoje32 = 0;
                $yieldbin1hoje33 = 0;
                $yieldbin1hoje34 = 0;
                $yieldbin1bin2hoje30 = 0;
                $yieldbin1bin2hoje31 = 0;
                $yieldbin1bin2hoje32 = 0;
                $yieldbin1bin2hoje33 = 0;
                $yieldbin1bin2hoje34 = 0;
                
                $yieldbin1hoje30 = ($soma30+$somabin30+$somafalha30)*100;
                $yieldbin1bin2hoje30 = ($soma30+$somabin30+$somafalha30)*100;
                if($yieldbin1hoje30==0){
                    $yieldbin1hoje30 = 0;
                    $yieldbin1bin2hoje30 = 0;
                }else{
                    $yieldbin1hoje30 = $soma30/($soma30+$somabin30+$somafalha30)*100;
                    $yieldbin1bin2hoje30 = ($soma30+$somabin30)/($soma30+$somabin30+$somafalha30)*100;
                }

                $yieldbin1hoje31 = ($soma31+$somabin31+$somafalha31)*100;
                $yieldbin1bin2hoje31 = ($soma31+$somabin31+$somafalha31)*100;
                if($yieldbin1hoje31==0){
                    $yieldbin1hoje31 = 0;
                    $yieldbin1bin2hoje31 = 0;
                }else{
                    $yieldbin1hoje31 = $soma31/($soma31+$somabin31+$somafalha31)*100;
                    $yieldbin1bin2hoje31 = ($soma31+$somabin31)/($soma31+$somabin31+$somafalha31)*100;
                }

                $yieldbin1hoje32 = ($soma32+$somabin32+$somafalha32)*100;
                $yieldbin1bin2hoje32 = ($soma32+$somabin32+$somafalha32)*100;
                if($yieldbin1hoje32==0){
                    $yieldbin1hoje32 = 0;
                    $yieldbin1bin2hoje32 = 0;
                }else{
                    $yieldbin1hoje32 = $soma32/($soma32+$somabin32+$somafalha32)*100;
                    $yieldbin1bin2hoje32 = ($soma32+$somabin32)/($soma32+$somabin32+$somafalha32)*100;
                }

                $yieldbin1hoje33 = ($soma33+$somabin33+$somafalha33)*100;
                $yieldbin1bin2hoje33 = ($soma33+$somabin33+$somafalha33)*100;
                if($yieldbin1hoje33==0){
                    $yieldbin1hoje33 = 0;
                    $yieldbin1bin2hoje33 = 0;
                }else{
                    $yieldbin1hoje33 = $soma33/($soma33+$somabin33+$somafalha33)*100;
                    $yieldbin1bin2hoje33 = ($soma33+$somabin33)/($soma33+$somabin33+$somafalha33)*100;
                }

                $yieldbin1hoje34 = ($soma34+$somabin34+$somafalha34)*100;
                $yieldbin1bin2hoje34 = ($soma34+$somabin34+$somafalha34)*100;
                if($yieldbin1hoje34==0){
                    $yieldbin1hoje34 = 0;
                    $yieldbin1bin2hoje34 = 0;
                }else{
                    $yieldbin1hoje34 = $soma34/($soma34+$somabin34+$somafalha34)*100;
                    $yieldbin1bin2hoje34 = ($soma34+$somabin34)/($soma34+$somabin34+$somafalha34)*100;
                }                
            ?>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                    ['Date', 'Bin1', 'Bin1+Bin2','Max','Min'],
                    ['4 days ago',  <?=$yieldbin1hoje34?>,      <?=$yieldbin1bin2hoje34?>,100,90],
                    ['3 days ago',  <?=$yieldbin1hoje33?>,      <?=$yieldbin1bin2hoje33?>,100,90],
                    ['2 days ago',  <?=$yieldbin1hoje32?>,      <?=$yieldbin1bin2hoje32?>,100,90],
                    ['Yesterday',  <?=$yieldbin1hoje31?>,      <?=$yieldbin1bin2hoje31?>,100,90],
                    ['Today',  <?=$yieldbin1hoje30?>,      <?=$yieldbin1bin2hoje30?>,100,90]
                    ]);
                
                    var options = {    
                    vAxis: {minValue: 70},
                    colors: ['blue', 'red','green','purple'],
                    lineWidth: 2.5,
                    pointSize: 7.5,
                    series: {
                        0: { pointShape: 'circle' },
                        1: { pointShape: 'square' },  
                        2: { pointShape: 'polygon' },
                        3: { pointShape: 'triangle' },
                    }
                    
                    };

                    var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
                    chart.draw(data, options);
                }
            </script>
            <div class="grupos">
                <div id="chart_div" style="width: 1200px; height: 550px;"></div>
            </div>
        </div>

        <div class="yieldgeneral">
            <h5>2 - Funcionários -- Employees</h5>
            <div class="funcionario">
                <?php
                    $sql = "SELECT pc,aprovado,bin2,falha,who FROM dailyreport";
                    $result = $conn->query($sql);

                    $aprovado20 = 0;
                    $aprovado21 = 0;
                    $aprovado22 = 0;
                    $aprovado23 = 0;
                    $aprovado24 = 0;
                    $aprovado25 = 0;
                    $aprovado26 = 0;
                    $aprovado27 = 0;
                    $aprovado28 = 0;
                    $aprovado29 = 0;
                    $bin20 = 0;
                    $bin21 = 0;
                    $bin22 = 0;
                    $bin23 = 0;
                    $bin24 = 0;
                    $bin25 = 0;
                    $bin26 = 0;
                    $bin27 = 0;
                    $bin28 = 0;
                    $bin29 = 0;
                    $falha20 = 0;
                    $falha21 = 0;
                    $falha22 = 0;
                    $falha23 = 0;
                    $falha24 = 0;
                    $falha25 = 0;
                    $falha26 = 0;
                    $falha27 = 0;
                    $falha28 = 0;
                    $falha29 = 0;
                    $soma20 = 0;
                    $soma21 = 0;
                    $soma22 = 0;
                    $soma23 = 0;
                    $soma24 = 0;
                    $soma25 = 0;
                    $soma26 = 0;
                    $soma27 = 0;
                    $soma28 = 0;
                    $soma29 = 0;
                    $somabin20 = 0;
                    $somabin21 = 0;
                    $somabin22 = 0;
                    $somabin23 = 0;
                    $somabin24 = 0;
                    $somabin25 = 0;
                    $somabin26 = 0;
                    $somabin27 = 0;
                    $somabin28 = 0;
                    $somabin29 = 0;
                    $somafalha20 = 0;
                    $somafalha21 = 0;
                    $somafalha22 = 0;
                    $somafalha23 = 0;
                    $somafalha24 = 0;
                    $somafalha25 = 0;
                    $somafalha26 = 0;
                    $somafalha27 = 0;
                    $somafalha28 = 0;
                    $somafalha29 = 0;                  
                    $i = 0;
                    while($user_data = mysqli_fetch_assoc($result)){
                        $op1 = 'Rafael Camurça';
                        $op2 = 'Pedro Sena';
                        $op3 = 'Anderson Silva';
                        $operador[] = $user_data['who'];
                        
                        if ($op1==$operador[$i]){
                            $aprovado20 = $user_data['aprovado'];
                            $bin20 = $user_data['bin2'];
                            $falha20 = $user_data['falha'];
                            $soma20 = $soma20+$aprovado20;
                            $somabin20 = $somabin20+$bin20;
                            $somafalha20 = $somafalha20+$falha20;
                        }
                        if ($op2==$operador[$i]){
                            $aprovado21 = $user_data['aprovado'];
                            $bin21 = $user_data['bin2'];
                            $falha21 = $user_data['falha'];
                            $soma21 = $soma21+$aprovado21;
                            $somabin21 = $somabin21+$bin21;
                            $somafalha21 = $somafalha21+$falha21;
                        }
                        if ($op3==$operador[$i]){
                            $aprovado22 = $user_data['aprovado'];
                            $bin22 = $user_data['bin2'];
                            $falha22 = $user_data['falha'];
                            $soma22 = $soma22+$aprovado22;
                            $somabin22 = $somabin22+$bin22;
                            $somafalha22 = $somafalha22+$falha22;
                        }
                        if ($op1==$operador[$i]){
                            $aprovado23 = $user_data['aprovado'];
                            $bin23 = $user_data['bin2'];
                            $falha23 = $user_data['falha'];
                            $soma23 = $soma23+$aprovado23;
                            $somabin23 = $somabin23+$bin23;
                            $somafalha23 = $somafalha23+$falha23;
                        }
                        if ($op1==$operador[$i]){
                            $aprovado24 = $user_data['aprovado'];
                            $bin24 = $user_data['bin2'];
                            $falha24 = $user_data['falha'];
                            $soma24 = $soma24+$aprovado24;
                            $somabin24 = $somabin24+$bin24;
                            $somafalha24 = $somafalha24+$falha24;
                        }
                        if ($op1==$operador[$i]){
                            $aprovado25 = $user_data['aprovado'];
                            $bin25 = $user_data['bin2'];
                            $falha25 = $user_data['falha'];
                            $soma25 = $soma25+$aprovado25;
                            $somabin25 = $somabin25+$bin25;
                            $somafalha25 = $somafalha25+$falha25;
                        }
                        if ($op1==$operador[$i]){
                            $aprovado26 = $user_data['aprovado'];
                            $bin26 = $user_data['bin2'];
                            $falha26 = $user_data['falha'];
                            $soma26 = $soma26+$aprovado26;
                            $somabin26 = $somabin26+$bin26;
                            $somafalha26 = $somafalha26+$falha26;
                        }
                        if ($op1==$operador[$i]){
                            $aprovado27 = $user_data['aprovado'];
                            $bin27 = $user_data['bin2'];
                            $falha27 = $user_data['falha'];
                            $soma27 = $soma27+$aprovado27;
                            $somabin27 = $somabin27+$bin27;
                            $somafalha27 = $somafalha27+$falha27;
                        }
                        if ($op1==$operador[$i]){
                            $aprovado28 = $user_data['aprovado'];
                            $bin28 = $user_data['bin2'];
                            $falha28 = $user_data['falha'];
                            $soma28 = $soma28+$aprovado28;
                            $somabin28 = $somabin28+$bin28;
                            $somafalha28 = $somafalha28+$falha28;
                        }
                        if ($op1==$operador[$i]){
                            $aprovado29 = $user_data['aprovado'];
                            $bin29 = $user_data['bin2'];
                            $falha29 = $user_data['falha'];
                            $soma29 = $soma29+$aprovado29;
                            $somabin29 = $somabin29+$bin29;
                            $somafalha29 = $somafalha29+$falha29;
                        }
                        $i++;            
                    }
                ?>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                    google.charts.load("current", {packages:['corechart']});
                    google.charts.setOnLoadCallback(drawChart);
                    function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                        ['Pessoa', 'Bin1', 'Bin2', 'Falha', { role: 'annotation' } ],
                        ['Rafael', <?=$soma20?>, <?=$somabin20?>, <?=$somafalha20?>, ''],
                        ['Pedro', <?=$soma21?>, <?=$somabin21?>, <?=$somafalha21?>, ''],
                        ['Anderson', <?=$soma22?>, <?=$somabin22?>, <?=$somafalha22?>, ''],

                    ]);

                    var view = new google.visualization.DataView(data);
                    view.setColumns([0, 1,
                                    { calc: "stringify",
                                      sourceColumn: 1,
                                      type: "string",
                                      role: "annotation" },
                                    2,3]);

                    var options = {
                        width: 1200,
                        height: 550,
                        legend: { position: 'bottom', maxLines: 5 },
                        bar: { groupWidth: '75%' },
                        isStacked: true,
                        colors:['blue','green','red']
                    };

                    var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
                    chart.draw(view, options);
                }
                </script>
            </div>
            <div class="grupos">
                <div id="columnchart_values"></div>
            </div>
        </div>

        <div class="yieldperPC">
            <h5>3 - Rendimento por PC -- Yield per PC</h5>
            <div class="pc">
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <?php
                    $pc01=01;
                    $sql = "SELECT pc,aprovado,bin2,falha FROM dailyreport WHERE $pc01=pc";
                    $result = $conn->query($sql);

                    $aprovado = 0;
                    $bin2 = 0;
                    $falha = 0;
                        while($user_data = mysqli_fetch_assoc($result))
                        {
                            $aprovado = $aprovado+$user_data['aprovado'];
                            $bin2 = $bin2+$user_data['bin2'] ;
                            $falha = $falha+$user_data['falha'];
                        }
                ?>
                <script type="text/javascript">
                    google.charts.load('current', {'packages':['corechart']});
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                        ['Tipo/Type', 'Qtd/Qty'],
                        ['Bin1',     <?=$aprovado?>],
                        ['Bin2',     <?=$bin2?>],
                        ['Fail',     <?=$falha?>],
                        ]);

                        var options = {
                        title: 'PC1 YIELD',
                        is3D: true,
                        slices: {
                            0: { color: 'green' },
                            1: { color: 'blue' },
                            2: { color: 'red' },
                        }
                        
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('piechart1'));

                        chart.draw(data, options);
                    }
                </script>

                <?php   
                    $pc02=02;
                    $sql2 = "SELECT pc,aprovado,bin2,falha FROM dailyreport WHERE $pc02=pc";
                    $result = $conn->query($sql2);
                    
                    $aprovado2 = 0;
                    $bin22 = 0;
                    $falha2 = 0;
                        while($user_data = mysqli_fetch_assoc($result))
                        {
                            $aprovado2 = $aprovado2+$user_data['aprovado'];
                            $bin22 = $bin22+$user_data['bin2'];
                            $falha2 = $falha2+$user_data['falha'];
                        }
                ?>
                <script type="text/javascript">
                    google.charts.load('current', {'packages':['corechart']});
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                        ['Tipo/Type', 'Qtd/Qty'],
                        ['Bin1',     <?=$aprovado2?>],
                        ['Bin2',     <?=$bin22?>],
                        ['Fail',     <?=$falha2?>],
                        ]);

                        var options = {
                        title: 'PC2 YIELD',
                        is3D: true,
                        slices: {
                            0: { color: 'green' },
                            1: { color: 'blue' },
                            2: { color: 'red' },
                        }
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

                        chart.draw(data, options);
                    }
                </script>

                <?php   
                    $pc03=03;
                    $sql3 = "SELECT pc,aprovado,bin2,falha FROM dailyreport WHERE $pc03=pc";
                    $result3 = $conn->query($sql3);

                    $aprovado3 = 0;
                    $bin23 = 0;
                    $falha3 = 0;
                    while($user_data = mysqli_fetch_assoc($result3))
                    {
                        $aprovado3 = $aprovado3+$user_data['aprovado'];
                        $bin23 = $bin23+$user_data['bin2'];
                        $falha3 = $falha3+$user_data['falha'];
                    }     
                ?>
                <script type="text/javascript">
                    google.charts.load('current', {'packages':['corechart']});
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                        ['Tipo/Type', 'Qtd/Qty'],
                        ['Bin1',     <?=$aprovado3?>],
                        ['Bin2',     <?=$bin23?>],
                        ['Fail',     <?=$falha3?>],
                        ]);

                        var options = {
                        title: 'PC3 YIELD',
                        is3D: true,
                        slices: {
                            0: { color: 'green' },
                            1: { color: 'blue' },
                            2: { color: 'red' },
                        }
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('piechart3'));

                        chart.draw(data, options);
                    }
                </script>

                <?php   
                    $pc04=04;
                    $sql4 = "SELECT pc,aprovado,bin2,falha FROM dailyreport WHERE $pc04=pc";
                    $result4 = $conn->query($sql4);

                    $aprovado4 = 0;
                    $bin24 = 0;
                    $falha4 = 0;
                    while($user_data = mysqli_fetch_assoc($result4))
                    {
                        $aprovado4 = $aprovado4+$user_data['aprovado'];
                        $bin24 = $bin24+$user_data['bin2'];
                        $falha4 = $falha4+$user_data['falha'];
                    }     
                ?>
                <script type="text/javascript">
                    google.charts.load('current', {'packages':['corechart']});
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                        ['Tipo/Type', 'Qtd/Qty'],
                        ['Bin1',     <?=$aprovado4?>],
                        ['Bin2',     <?=$bin24?>],
                        ['Fail',     <?=$falha4?>],
                        ]);

                        var options = {
                        title: 'PC4 YIELD',
                        is3D: true,
                        slices: {
                            0: { color: 'green' },
                            1: { color: 'blue' },
                            2: { color: 'red' },
                        }
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('piechart4'));

                        chart.draw(data, options);
                    }
                </script>

                <?php
                    $pc05=05;
                    $sql5 = "SELECT pc,aprovado,bin2,falha FROM dailyreport WHERE $pc05=pc";
                    $result5 = $conn->query($sql5);

                    $aprovado5 = 0;
                    $bin25 = 0;
                    $falha5 = 0;
                    while($user_data = mysqli_fetch_assoc($result5))
                    {
                        $aprovado5 = $aprovado5+$user_data['aprovado'];
                        $bin25 = $bin25+$user_data['bin2'];
                        $falha5 = $falha5+$user_data['falha'];
                    }     
                ?>
                <script type="text/javascript">
                    google.charts.load('current', {'packages':['corechart']});
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                        ['Tipo/Type', 'Qtd/Qty'],
                        ['Bin1',     <?=$aprovado5?>],
                        ['Bin2',     <?=$bin25?>],
                        ['Fail',     <?=$falha5?>],
                        ]);

                        var options = {
                        title: 'PC5 YIELD',
                        is3D: true,
                        slices: {
                            0: { color: 'green' },
                            1: { color: 'blue' },
                            2: { color: 'red' },
                        }
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('piechart5'));

                        chart.draw(data, options);
                    }
                </script>

                <?php
                    $pc06=06;
                    $sql6 = "SELECT pc,aprovado,bin2,falha FROM dailyreport WHERE $pc06=pc";
                    $result6 = $conn->query($sql6);

                    $aprovado6 = 0;
                    $bin26 = 0;
                    $falha6 = 0;
                    while($user_data = mysqli_fetch_assoc($result6))
                    {
                        $aprovado6 = $aprovado6+$user_data['aprovado'];
                        $bin26 = $bin26+$user_data['bin2'];
                        $falha6 = $falha6+$user_data['falha'];
                    }     
                ?>
                <script type="text/javascript">
                    google.charts.load('current', {'packages':['corechart']});
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                        ['Tipo/Type', 'Qtd/Qty'],
                        ['Bin1',     <?=$aprovado6?>],
                        ['Bin2',     <?=$bin26?>],
                        ['Fail',     <?=$falha6?>],
                        ]);

                        var options = {
                        title: 'PC6 YIELD',
                        is3D: true,
                        slices: {
                            0: { color: 'green' },
                            1: { color: 'blue' },
                            2: { color: 'red' },
                        }
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('piechart6'));

                        chart.draw(data, options);
                    }
                </script>

                <?php
                    $pc07=07;
                    $sql7 = "SELECT pc,aprovado,bin2,falha FROM dailyreport WHERE $pc07=pc";
                    $result7 = $conn->query($sql7);

                    $aprovado7 = 0;
                    $bin27 = 0;
                    $falha7 = 0;
                    while($user_data = mysqli_fetch_assoc($result7))
                    {
                        $aprovado7 = $aprovado7+$user_data['aprovado'];
                        $bin27 = $bin27+$user_data['bin2'];
                        $falha7 = $falha7+$user_data['falha'];
                    }     
                ?>
                <script type="text/javascript">
                    google.charts.load('current', {'packages':['corechart']});
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                        ['Tipo/Type', 'Qtd/Qty'],
                        ['Bin1',     <?=$aprovado7?>],
                        ['Bin2',     <?=$bin27?>],
                        ['Fail',     <?=$falha7?>],
                        ]);

                        var options = {
                        title: 'PC7 YIELD',
                        is3D: true,
                        slices: {
                            0: { color: 'green' },
                            1: { color: 'blue' },
                            2: { color: 'red' },
                        }
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('piechart7'));

                        chart.draw(data, options);
                    }
                </script>

                <?php
                    $pc88=88;
                    $sql8 = "SELECT pc,aprovado,bin2,falha FROM dailyreport WHERE $pc88=pc";
                    $result8 = $conn->query($sql8);

                    $aprovado8 = 0;
                    $bin28 = 0;
                    $falha8 = 0;
                    while($user_data = mysqli_fetch_assoc($result8))
                    {
                        $aprovado8 = $aprovado8+$user_data['aprovado'];
                        $bin28 = $bin28+$user_data['bin2'];
                        $falha8 = $falha8+$user_data['falha'];
                    }     
                ?>
                <script type="text/javascript">
                    google.charts.load('current', {'packages':['corechart']});
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                        ['Tipo/Type', 'Qtd/Qty'],
                        ['Bin1',     <?=$aprovado8?>],
                        ['Bin2',     <?=$bin28?>],
                        ['Fail',     <?=$falha8?>],
                        ]);

                        var options = {
                        title: 'PC8 YIELD',
                        is3D: true,
                        slices: {
                            0: { color: 'green' },
                            1: { color: 'blue' },
                            2: { color: 'red' },
                        }
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('piechart8'));

                        chart.draw(data, options);
                    }
                </script>
                
                <?php
                    $pc99=99;
                    $sql9 = "SELECT pc,aprovado,bin2,falha FROM dailyreport WHERE $pc99=pc";
                    $result9 = $conn->query($sql9);

                    $aprovado9 = 0;
                    $bin29 = 0;
                    $falha9 = 0;
                    while($user_data = mysqli_fetch_assoc($result9))
                    {
                        $aprovado9 = $aprovado9+$user_data['aprovado'];
                        $bin29 = $bin29+$user_data['bin2'];
                        $falha9 = $falha9+$user_data['falha'];
                    }     
                ?>
                <script type="text/javascript">
                    google.charts.load('current', {'packages':['corechart']});
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                        ['Tipo/Type', 'Qtd/Qty'],
                        ['Bin1',     <?=$aprovado9?>],
                        ['Bin2',     <?=$bin29?>],
                        ['Fail',     <?=$falha9?>],
                        ]);

                        var options = {
                        title: 'PC9 YIELD',
                        is3D: true,
                        slices: {
                            0: { color: 'green' },
                            1: { color: 'blue' },
                            2: { color: 'red' },
                        }
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('piechart9'));

                        chart.draw(data, options);
                    }
                </script>

                <?php
                    $pc10=10;
                    $sql10 = "SELECT pc,aprovado,bin2,falha FROM dailyreport WHERE $pc10=pc";
                    $result10 = $conn->query($sql10);

                    $aprovado10 = 0;
                    $bin210 = 0;
                    $falha10 = 0;
                    while($user_data = mysqli_fetch_assoc($result10))
                    {
                        $aprovado10 = $aprovado10+$user_data['aprovado'];
                        $bin210 = $bin210+$user_data['bin2'];
                        $falha10 = $falha10+$user_data['falha'];
                    }     
                ?>
                <script type="text/javascript">
                    google.charts.load('current', {'packages':['corechart']});
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                        ['Tipo/Type', 'Qtd/Qty'],
                        ['Bin1',     <?=$aprovado10?>],
                        ['Bin2',     <?=$bin210?>],
                        ['Fail',     <?=$falha10?>],
                        ]);

                        var options = {
                        title: 'PC10 YIELD',
                        is3D: true,
                        slices: {
                            0: { color: 'green' },
                            1: { color: 'blue' },
                            2: { color: 'red' },
                        }
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('piechart10'));

                        chart.draw(data, options);
                    }
                </script>

                <?php
                    $pc11=11;
                    $sql11 = "SELECT pc,aprovado,bin2,falha FROM dailyreport WHERE $pc11=pc";
                    $result11 = $conn->query($sql11);

                    $aprovado11 = 0;
                    $bin211 = 0;
                    $falha11 = 0;
                    while($user_data = mysqli_fetch_assoc($result11))
                    {
                        $aprovado11 = $aprovado11+$user_data['aprovado'];
                        $bin211 = $bin211+$user_data['bin2'];
                        $falha11 = $falha11+$user_data['falha'];
                    }     
                ?>
                <script type="text/javascript">
                    google.charts.load('current', {'packages':['corechart']});
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                        ['Tipo/Type', 'Qtd/Qty'],
                        ['Bin1',     <?=$aprovado11?>],
                        ['Bin2',     <?=$bin211?>],
                        ['Fail',     <?=$falha11?>],
                        ]);

                        var options = {
                        title: 'PC11 YIELD',
                        is3D: true,
                        slices: {
                            0: { color: 'green' },
                            1: { color: 'blue' },
                            2: { color: 'red' },
                        }
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('piechart11'));

                        chart.draw(data, options);
                    }
                </script>
                
                <?php
                    $pc12=12;
                    $sql12 = "SELECT pc,aprovado,bin2,falha FROM dailyreport WHERE $pc12=pc";
                    $result12 = $conn->query($sql12);

                    $aprovado12 = 0;
                    $bin212 = 0;
                    $falha12 = 0;
                    while($user_data = mysqli_fetch_assoc($result12))
                    {
                        $aprovado12 = $aprovado12+$user_data['aprovado'];
                        $bin212 = $bin212+$user_data['bin2'];
                        $falha12 = $falha12+$user_data['falha'];
                    }     
                ?>
                <script type="text/javascript">
                    google.charts.load('current', {'packages':['corechart']});
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                        ['Tipo/Type', 'Qtd/Qty'],
                        ['Bin1',     <?=$aprovado12?>],
                        ['Bin2',     <?=$bin212?>],
                        ['Fail',     <?=$falha12?>],
                        ]);

                        var options = {
                        title: 'PC12 YIELD',
                        is3D: true,
                        slices: {
                            0: { color: 'green' },
                            1: { color: 'blue' },
                            2: { color: 'red' },
                        }
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('piechart12'));

                        chart.draw(data, options);
                    }
                </script>
            </div>
            <div class="grupos">
                <div class="grupo1">
                    <div id="piechart1" style="width: 300px; height: 200px;"></div>
                    <div id="piechart2" style="width: 300px; height: 200px;"></div>
                    <div id="piechart3" style="width: 300px; height: 200px;"></div>
                </div>
                <div class="grupo2">
                    <div id="piechart4" style="width: 300px; height: 200px;"></div>
                    <div id="piechart5" style="width: 300px; height: 200px;"></div>
                    <div id="piechart6" style="width: 300px; height: 200px;"></div>
                </div>
                <div class="grupo3">
                    <div id="piechart7" style="width: 300px; height: 200px;"></div>
                    <div id="piechart8" style="width: 300px; height: 200px;"></div>
                    <div id="piechart9" style="width: 300px; height: 200px;"></div>
                </div>
                <div class="grupo4">
                    <div id="piechart10" style="width: 300px; height: 200px;"></div>
                    <div id="piechart11" style="width: 300px; height: 200px;"></div>
                    <div id="piechart12" style="width: 300px; height: 200px;"></div>
                </div>
            </div>
        </div>
            
    </form>

</body>
</html>