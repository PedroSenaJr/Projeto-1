<?php
session_start();
include_once("/xampp/htdocs/ccbs/php/bd/conexao.php");

?>

<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="Mold.css">
    <link rel="shortcut icon" type="image/x-icon" href="/ccbs/img/favicon_ccbs.ico">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Produção Mold</title>
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
                    if($_SESSION['idUser'] == 7){
                        echo 'Anderson Silva';
                    };
                    if($_SESSION['idUser'] == 8){
                        echo 'Rosiele Pereira';
                    };
                ?>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
           
            <?php
                if($_SESSION['idUser'] == 1 or $_SESSION['idUser'] == 2 or $_SESSION['idUser'] == 3 or $_SESSION['idUser'] == 7){
                    
                    echo'<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Die Saw</a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="/ccbs/telas/diesaw/cadastro_diesaw.php">Blade Registration</a></li>
                            <li><a class="dropdown-item" href="/ccbs/telas/diesaw/consulta_diesaw.php">Blade Query</a></li>
                            </ul>
                        </li>';

                    echo'<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Molding</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="/ccbs/telas/mold/calculo_compound.php">Calculate Compound</a></li>
                        <li><a class="dropdown-item" href="/ccbs/producao/mold.php">Controle de Produção</a></li>
                        <li><a class="dropdown-item" href="/ccbs/producao/hist_mold.php">Historico de Produção</a></li>
                        </ul>
                    </li>';

                    echo'<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Ball Mount</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="#">Solder Paste</a></li>
                        </ul>
                    </li>';

                    echo '<li class=nav-item dropdown>
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Singulation</a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="/ccbs/telas/sgl/cadastro.php">Blade Registration</a></li>
                            <li><a class="dropdown-item" href="/ccbs/telas/sgl/consulta.php">Blade Query</a></li>
                            </ul>
                        </li>';

                    echo'<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">O/S Station</a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="/ccbs/telas/os/pogopinbga132.php">PogoPin - BGA 132</a></li>
                            <li><a class="dropdown-item" href="/ccbs/telas/os/pogopinbga272.php">PogoPin - BGA 272</a></li>
                            </ul>
                        </li>';
                    
                    echo'<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Sorting Test</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="/ccbs/telas/sortingtest/dailyreport.php">Daily Report</a></li>
                        <li><a class="dropdown-item" href="/ccbs/telas/sortingtest/dashboard.php">Dashboard</a></li>
                        <li><a class="dropdown-item" href="/ccbs/telas/sortingtest/cadinfo.php">Register Info</a></li>
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
                        <li><a class="dropdown-item" href="/ccbs/telas/sgl/cadastro.php">Blade Registration</a></li>
                        <li><a class="dropdown-item" href="/ccbs/telas/sgl/consulta.php">Blade Query</a></li>
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
                        <li><a class="dropdown-item" href="/ccbs/telas/mold/calculo_compound.php">Calculate Compound</a></li>
                        </ul>
                    </li>';

                    echo'<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Sorting Test</a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="/ccbs/telas/sortingtest/cadinfo.php">Register Info</a></li>
                        <li><a class="dropdown-item" href="/ccbs/telas/sortingtest/dailyreport.php">Daily Report</a></li>
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
    </nav><br><br>   

<form class="row g-3 needs-validation" action="processa.php" method="POST" novalidate style="width: 1200px; padding-left: 17rem; padding-top: 2rem; ">
        <nav class="navbar bg-dark" data-bs-theme="dark" style="text-align: center; color:white;">
            <h1 style="padding-left: 20%;">Cadastro de Produção - Mold</h1>
        </nav>
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Cliente & (P/N)</label>
            <input type="text" name="cliente" class="form-control" id="cliente" placeholder="Ex: BWIN / S0C0013003B" required>
        </div>
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Runcard</label>
            <input type="text" name="runcard" class="form-control" id="runcard" placeholder="Ex: A31T007A00 a A31T007A10" required>
        </div>
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Data</label>
            <input type="date" name="datta" class="form-control" id="datta" required>
        </div>

        <div class="input-box">
        <label for="porta/chase2">Porta 1 =></label>&nbsp;&nbsp;&nbsp;
        
        <label for="chase0.53">Chase 0.53</label>
        <input name="porta1" type="radio" value="0.53" id="porta1">&nbsp;&nbsp;&nbsp;
        <label for="chase0.63">Chase 0.63</label>
        <input name="porta1" type="radio" value="0.63" id="porta1">&nbsp;&nbsp;&nbsp;
        <label for="chase0.80">Chase 0.80</label>
        <input name="porta1" type="radio" value="0.80" id="porta1">&nbsp;&nbsp;&nbsp;
        <label for="desativado">Desligado</label>
        <input name="porta1" type="radio" value="Desligado" id="porta1">        
        </div>

        <div class="input-box">
        <label for="porta/chase2">Porta 2 =></label>&nbsp;&nbsp;&nbsp;
        
        <label for="chase0.53">Chase 0.53</label>
        <input name="porta2" type="radio" value="0.53" id="porta2">&nbsp;&nbsp;&nbsp;
        <label for="chase0.63">Chase 0.63</label>
        <input name="porta2" type="radio" value="0.63" id="porta2">&nbsp;&nbsp;&nbsp;
        <label for="chase0.80">Chase 0.80</label>
        <input name="porta2" type="radio" value="0.80" id="porta2">&nbsp;&nbsp;&nbsp;
        <label for="desativado">Desligado</label>
        <input name="porta2" type="radio" value="Desligado" id="porta2">        
        </div>

        <div class="input-box">
        <label for="porta/chase3">Porta 3 =></label>&nbsp;&nbsp;&nbsp;
        
        <label for="chase0.53">Chase 0.53</label>
        <input name="porta3" type="radio" value="0.53" id="porta3">&nbsp;&nbsp;&nbsp;
        <label for="chase0.63">Chase 0.63</label>
        <input name="porta3" type="radio" value="0.63" id="porta3">&nbsp;&nbsp;&nbsp;
        <label for="chase0.80">Chase 0.80</label>
        <input name="porta3" type="radio" value="0.80" id="porta3">&nbsp;&nbsp;&nbsp;
        <label for="desativado">Desligado</label>
        <input name="porta3" type="radio" value="Desligado" id="porta3">        
        </div>

        <div class="input-box">
        <label for="porta/chase4">Porta 4 =></label>&nbsp;&nbsp;&nbsp;
        
        <label for="chase0.53">Chase 0.53</label>
        <input name="porta4" type="radio" value="0.53" id="porta4">&nbsp;&nbsp;&nbsp;
        <label for="chase0.63">Chase 0.63</label>
        <input name="porta4" type="radio" value="0.63" id="porta4">&nbsp;&nbsp;&nbsp;
        <label for="chase0.80">Chase 0.80</label>
        <input name="porta4" type="radio" value="0.80" id="porta4">&nbsp;&nbsp;&nbsp;
        <label for="desativado">Desligado</label >
        <input name="porta4" type="radio" value="Desligado" id="porta4">
        </div>    
        
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Espessura do Substrate & PN:</label>
            <input type="text" name="substrate" class="form-control" id="substrate" placeholder="Ex: 0.13 / 11153b81327" required>
        </div>
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Tamanho da Unidade:</label>
            <input type="text" name="unidade" class="form-control" id="unidade" placeholder="Ex:11.5*13" required>
        </div>

        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Compound PN:</label>
            <input type="text" name="compound" class="form-control" id="compound"  placeholder="Ex: 1913000140"  style="width:100%" required>
        </div>

        


  <div class="col-md">
    <label for="exampleFormControlSelect1" class="form-label" >Total de Lotes:</label>
    <select class="form-select" name="tot_lotes" id="tot_lotes" style="width: 100%;">
      <option>1 Lote</option>
      <option>2 Lotes</option>
      <option>3 Lotes</option>
      <option>4 Lotes</option>
      <option>5 Lotes</option>
      <option>6 Lotes</option>
      <option>7 Lotes</option>
      <option>8 Lotes</option>
      <option>9 Lotes</option>
      <option>10 Lotes</option>
      <option>11 Lotes</option>
      <option>12 Lotes</option>
      <option>13 Lotes</option>
      <option>14 Lotes</option>
      <option>15 Lotes</option>
      <option>16 Lotes</option>
      <option>17 Lotes</option>
      <option>18 Lotes</option>
      <option>19 Lotes</option>
      <option>20 Lotes</option>
      <option>21 Lotes</option>
      <option>22 Lotes</option>
      <option>23 Lotes</option>
      <option>24 Lotes</option>
    </select>
  </div>

  <div class="col-md">
    <label for="validationCustom02" class="form-label" >Programa Plasma:</label>
    <input type="text" name="programa_plasma" class="form-control" id="programa_plasma"  placeholder="Ex: 1 "  style="width:100%" required>
  </div>

  <div class="col-md">
    <label for="validationCustom02" class="form-label" >Programa:</label>
    <input type="text" name="programa" class="form-control" id="programa"  placeholder="Ex: 0.63-100LFD-87-16X5.5g"  style="width:100%" required>
  </div>
 
        <div class="col-md-12">
            <label for="exampleFormControlTextarea1">Observações</label>
            <textarea class="form-control" name="observacao" id="observacao" rows="3" style="width: 100%;"></textarea>
        </div>
        
  <div class="col-12">
    <button class="btn btn-primary" type="submit" style="width: 50%; margin-left: 25%;" >Cadastrar</button>
  </div>
  

</form>
       
</body>

