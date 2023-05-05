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
    <link rel="stylesheet" href="/ccbs/CSSS/sortingtest/dailyreport.css">
    <link rel="shortcut icon" type="image/x-icon" href="/ccbs/img/favicon_ccbs.ico">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type ="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <title>Daily Report</title>

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
    <div class="container">
        <div class="m-5"> 
            <script type='text/javascript'>
                $(document).ready(function(){
                    $("input[name='lotmae']").blur(function(){
                        var $codcliente = $("input[name='codcliente']");
                        var $numeroflash = $("input[name='numeroflash']");
                        var $tipoproduto = $("input[name='tipoproduto']");
                        var $nomeprograma = $("input[name='nomeprograma']");
                        $.getJSON('function.php',{
                            lotmae: $ ( this).val()
                        },function(json){
                            $codcliente.val(json.codcliente);
                            $numeroflash.val(json.numeroflash);
                            $tipoproduto.val(json.tipoproduto);
                            $nomeprograma.val(json.nomeprograma);
                        })
                    })
                })
            </script>
            <form action="/ccbs/php/sortingtest/dailyreport.php" method="GET">
                <table class="table table-hover table-bordered table-sm table-dark" style="border-color: white; text-align: center;">
                    <thead>
                        <tr style="font-size: 20px;">
                            <th scope="col" colspan="5">Registro de Produção da Estação Sorting Test</br>Sorting Test Station Production</th>
                        </tr>
                        <tr style="font-size: 14px;">
                            <th scope="col">Lot Mãe</br>Mother Lot</th>
                            <th scope="col">Código do Cliente</br>Customer Code</th>
                            <th scope="col">Número de Flash</br>Stacked Die</th>
                            <th scope="col">Tipo do Produto</br>Packge Type</th>
                            <th scope="col">Nome Programa</br>Program Name</th>
                        </tr>
                    </thead>
                    <tbody style="border-radius: 5rem;">
                        <tr>
                            <td scope="col" style='text-align: center;'><div class="input-box"><input style="background-color: white; text-align: center;" type="text" name="lotmae" placeholder=""></div></td>
                            <td scope="col" style='text-align: center;'><div class="input-box"><input style="background-color: white; text-align: center;" type="text" name="codcliente" placeholder=""></div></td>
                            <td scope="col" style='text-align: center;'><div class="input-box"><input style="background-color: white; text-align: center;" type="text" name="numeroflash" placeholder=""></div></td>
                            <td scope="col" style='text-align: center;'><div class="input-box"><input style="background-color: white; text-align: center; width: 25rem;" type="text" name="tipoproduto" placeholder=""></div></td>
                            <td scope="col" style='text-align: center;'><div class="input-box"><input style="background-color: white; text-align: center; width: 14rem;" type="text" name="nomeprograma" placeholder=""></div></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-hover table-bordered table-sm table-dark" style="border-color: white;">
                    <thead>
                        <tr style="font-size: 14px;">
                            <th scope="col" style='text-align: center'>Nº do Lot</br>(Lot No.)</th>
                            <th scope="col" style='text-align: center'>Hora de Entrada</br>(Check-in)</th>               
                            <th scope="col" style='text-align: center'>Hora de Saída</br>(Check-out)</th> 
                            <th scope="col" style='text-align: center'>Computador</br>Computer</th>
                            <th scope="col" style='text-align: center'>Quantidade</br>(Qty)</th>
                            <th scope="col" style='text-align: center'>Aprovado</br>(PASS)</th>
                            <th scope="col" style='text-align: center'>Bin2</br>(Bin2)</th>
                            <th scope="col" style='text-align: center'>Falha</br>Fail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col" style='text-align: center;'><div class="input-box"><input maxlength="10" type="text" name="numerolot" placeholder="Nº do Lot" style="text-align: center; margin-top: 2rem;" required></td></div>
                            <td scope="col" style='text-align: center'><input type="datetime-local" name="checkin" style="border-radius: 10px; align-items: center; margin-top: 2rem;"></td>
                            <td scope="col" style='text-align: center'><input type="datetime-local" name="checkout" style="border-radius: 10px;align-items: center; margin-top: 2rem;"></td>
                            <td scope="col" style='text-align: center;'>
                                <label class="form-check-label" for="flexCheckDefault"></label></br>
                                <input class="form-check-input" type="radio" name="pc" value="01" required>
                                <label class="form-check-label" for="flexCheckDefault">PC01</label>
                                <input class="form-check-input" type="radio" name="pc" value="02" required>
                                <label class="form-check-label" for="flexCheckDefault" >PC02</label>
                                <input class="form-check-input" type="radio" name="pc" value="03" required>
                                <label class="form-check-label" for="flexCheckDefault">PC03</label></br>
                                <input class="form-check-input" type="radio" name="pc" value="04" required>
                                <label class="form-check-label" for="flexCheckDefault">PC04</label>
                                <input class="form-check-input" type="radio" name="pc" value="05" required>
                                <label class="form-check-label" for="flexCheckDefault">PC05</label>
                                <input class="form-check-input" type="radio" name="pc" value="06" required>
                                <label class="form-check-label" for="flexCheckDefault">PC06</label></br>
                                <input class="form-check-input" type="radio" name="pc" value="07" required>
                                <label class="form-check-label" for="flexCheckDefault">PC07</label>
                                <input class="form-check-input" type="radio" name="pc" value="88" required>
                                <label class="form-check-label" for="flexCheckDefault">PC08</label>
                                <input class="form-check-input" type="radio" name="pc" value="99" required>
                                <label class="form-check-label" for="flexCheckDefault">PC09</label></br>
                                <input class="form-check-input" type="radio" name="pc" value="10" required>
                                <label class="form-check-label" for="flexCheckDefault">PC10</label>
                                <input class="form-check-input" type="radio" name="pc" value="11" required>
                                <label class="form-check-label" for="flexCheckDefault">PC11</label>
                                <input class="form-check-input" type="radio" name="pc" value="12" required>
                                <label class="form-check-label" for="flexCheckDefault">PC12</label></br>
                            </td>
                            <td scope="col" style='text-align: center'>
                                <label class="form-check-label" for="flexCheckDefault"></label></br>
                                <input class="form-check-input" type="radio" name="qtd" value="1" required>
                                <label class="form-check-label" for="flexCheckDefault">1</label>
                                <input class="form-check-input" type="radio" name="qtd" value="2" style="margin-left: 0.7rem;" required>
                                <label class="form-check-label" for="flexCheckDefault" >2</label></br>
                                <input class="form-check-input" type="radio" name="qtd" value="3" required>
                                <label class="form-check-label" for="flexCheckDefault">3</label>
                                <input class="form-check-input" type="radio" name="qtd" value="4" style="margin-left: 0.7rem;" required>
                                <label class="form-check-label" for="flexCheckDefault">4</label></br>
                                <input class="form-check-input" type="radio" name="qtd" value="5" required>
                                <label class="form-check-label" for="flexCheckDefault">5</label>
                                <input class="form-check-input" type="radio" name="qtd" value="6" style="margin-left: 0.7rem;" required>
                                <label class="form-check-label" for="flexCheckDefault">6</label></br>
                                <input class="form-check-input" type="radio" name="qtd" value="7" required>
                                <label class="form-check-label" for="flexCheckDefault">7</label>
                                <input class="form-check-input" type="radio" name="qtd" value="8" style="margin-left: 0.7rem;" required>
                                <label class="form-check-label" for="flexCheckDefault">8</label></br>
                            </td>
                            <td scope="col" style='text-align: center'>
                                <input class="form-check-input" type="radio" name="aprovado" value="00" required>
                                <label class="form-check-label" for="flexCheckDefault">0</label></br>
                                <input class="form-check-input" type="radio" name="aprovado" value="1" required>
                                <label class="form-check-label" for="flexCheckDefault">1</label>
                                <input class="form-check-input" type="radio" name="aprovado" value="2" style="margin-left: 0.7rem;" required>
                                <label class="form-check-label" for="flexCheckDefault" >2</label></br>
                                <input class="form-check-input" type="radio" name="aprovado" value="3" required>
                                <label class="form-check-label" for="flexCheckDefault">3</label>
                                <input class="form-check-input" type="radio" name="aprovado" value="4" style="margin-left: 0.7rem;" required>
                                <label class="form-check-label" for="flexCheckDefault">4</label></br>
                                <input class="form-check-input" type="radio" name="aprovado" value="5" required>
                                <label class="form-check-label" for="flexCheckDefault">5</label>
                                <input class="form-check-input" type="radio" name="aprovado" value="6" style="margin-left: 0.7rem;" required>
                                <label class="form-check-label" for="flexCheckDefault">6</label></br>
                                <input class="form-check-input" type="radio" name="aprovado" value="7" required>
                                <label class="form-check-label" for="flexCheckDefault">7</label>
                                <input class="form-check-input" type="radio" name="aprovado" value="8" style="margin-left: 0.7rem;" required>
                                <label class="form-check-label" for="flexCheckDefault">8</label></br>
                            </td>
                            <td scope="col" style='text-align: center'>
                                <input class="form-check-input" type="radio" name="bin2" value="00" required>
                                <label class="form-check-label" for="flexCheckDefault">0</label></br>
                                <input class="form-check-input" type="radio" name="bin2" value="1" required>
                                <label class="form-check-label" for="flexCheckDefault">1</label>
                                <input class="form-check-input" type="radio" name="bin2" value="2" style="margin-left: 0.7rem;" required>
                                <label class="form-check-label" for="flexCheckDefault" >2</label></br>
                                <input class="form-check-input" type="radio" name="bin2" value="3" required>
                                <label class="form-check-label" for="flexCheckDefault">3</label>
                                <input class="form-check-input" type="radio" name="bin2" value="4" style="margin-left: 0.7rem;" required>
                                <label class="form-check-label" for="flexCheckDefault">4</label></br>
                                <input class="form-check-input" type="radio" name="bin2" value="5" required>
                                <label class="form-check-label" for="flexCheckDefault">5</label>
                                <input class="form-check-input" type="radio" name="bin2" value="6" style="margin-left: 0.7rem;" required>
                                <label class="form-check-label" for="flexCheckDefault">6</label></br>
                                <input class="form-check-input" type="radio" name="bin2" value="7" required>
                                <label class="form-check-label" for="flexCheckDefault">7</label>
                                <input class="form-check-input" type="radio" name="bin2" value="8" style="margin-left: 0.7rem;" required>
                                <label class="form-check-label" for="flexCheckDefault">8</label></br>
                            </td>
                            <td scope="col" style='text-align: center'>
                                <input class="form-check-input" type="radio" name="falha" value="00" required>
                                <label class="form-check-label" for="flexCheckDefault">0</label></br>
                                <input class="form-check-input" type="radio" name="falha" value="1" required>
                                <label class="form-check-label" for="flexCheckDefault">1</label>
                                <input class="form-check-input" type="radio" name="falha" value="2" style="margin-left: 0.7rem;" required>
                                <label class="form-check-label" for="flexCheckDefault" >2</label></br>
                                <input class="form-check-input" type="radio" name="falha" value="3" required>
                                <label class="form-check-label" for="flexCheckDefault">3</label>
                                <input class="form-check-input" type="radio" name="falha" value="4" style="margin-left: 0.7rem;" required>
                                <label class="form-check-label" for="flexCheckDefault">4</label></br>
                                <input class="form-check-input" type="radio" name="falha" value="5" required>
                                <label class="form-check-label" for="flexCheckDefault">5</label>
                                <input class="form-check-input" type="radio" name="falha" value="6" style="margin-left: 0.7rem;" required>
                                <label class="form-check-label" for="flexCheckDefault">6</label></br>
                                <input class="form-check-input" type="radio" name="falha" value="7" required>
                                <label class="form-check-label" for="flexCheckDefault">7</label>
                                <input class="form-check-input" type="radio" name="falha" value="8" style="margin-left: 0.7rem;" required>
                                <label class="form-check-label" for="flexCheckDefault">8</label></br>
                            </td>     
                        </tr>
                    </tbody>
                </table>
                <div class="input-box">
                            <input type="hidden" name="who" value="<?php
                                                                        if($_SESSION['idUser'] == 1){
                                                                            echo 'Pedro Sena';
                                                                        };
                                                                        if($_SESSION['idUser'] == 2){
                                                                            echo 'Rafael Camurça';
                                                                        };
                                                                        if($_SESSION['idUser'] == 3){
                                                                            echo 'Romulo Oliveira';
                                                                        };
                                                                        if($_SESSION['idUser'] == 4){
                                                                            echo 'Kariton Gomes';
                                                                        };
                                                                        if($_SESSION['idUser'] == 5){
                                                                            echo 'Mauricio Freitas';
                                                                        };
                                                                        if($_SESSION['idUser'] == 6){
                                                                            echo 'Samantha Ellen';
                                                                        };
                                                                        if($_SESSION['idUser'] == 8){
                                                                            echo 'Rosiele Pereira';
                                                                        };
                                                                    ?>">
                </div>
                <div class="continue-button" style="margin-left: 1000px;">
                <input type="submit" name="calcular" value="Enviar Dados" class="btn btn-block btn-primary" style="font-size: small;">
                    <a class="btn btn-primary" href="../menu.php" role="button" style="font-size: small;">Voltar</a>
                </div>
            </form>
    </div>
        <table class="table table-hover table-bordered table-sm table-light" style="border-color: black;">
            <thead>
                <tr style="font-size: 20px; text-align: center;">
                    <th scope="col" colspan="3">Observações </br> Remarks</th>
                </tr>
                <tr style="font-size: 16px;">
                    <th scope="col" style='text-align: center'>Modelo1 x2</th>
                    <th scope="col" style='text-align: center'>Modelo1 x4</th>               
                    <th scope="col" style='text-align: center'>Modelo2 x4/x8</th> 
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="col" style='text-align: left'>BIN1 - GS1 <br> BIN2 - GS / G1 / GU / GN / GC / XX-DG</th>
                    <th scope="col" style='text-align: left'>BIN1 - GS <br> BIN2 - G1 / GU / GN / GC / XX-DG </th>
                    <th scope="col" style='text-align: left'>BIN1 - B1_A <br> BIN2 - B_1 / B_2 / B_3 / B_4 </th>
                </tr>
            </tbody>
        </table>

    

</body>
</html>