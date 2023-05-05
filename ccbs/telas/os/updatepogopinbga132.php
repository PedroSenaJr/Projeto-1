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
    <link rel="stylesheet" href="/ccbs/CSSS/os/pogopin.css">
    <link rel="shortcut icon" type="image/x-icon" href="/ccbs/img/favicon_ccbs.ico">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>POGOPIN BGA 132</title>

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
        <div class="form">
            <form action="/ccbs/php/os/updatedpogopin132.php" method="POST">
                <div class="input-group">
                    <div class="input-box">
                        <input maxlength="6" type="text" name="pogopin1" placeholder="PogoPin1" required>
                        <input maxlength="6" type="text" name="pogopin2" placeholder="PogoPin2" required>
                        <input maxlength="6" type="text" name="pogopin3" placeholder="PogoPin3" required>
                        <input maxlength="6" type="text" name="pogopin4" placeholder="PogoPin4" required>
                        <input maxlength="6" type="text" name="pogopin5" placeholder="PogoPin5" required>
                        <input maxlength="6" type="text" name="pogopin6" placeholder="PogoPin6" required>
                        <input maxlength="6" type="text" name="pogopin7" placeholder="PogoPin7" required>
                        <input maxlength="6" type="text" name="pogopin8" placeholder="PogoPin8" required>
                        <input maxlength="6" type="text" name="head1" placeholder="Head1" required>
                        <input maxlength="6" type="text" name="head2" placeholder="Head2" required>
                    </div>
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 350px;">Motivo</th>
                            <th scope="col" style="width: 350px;">Foi Passado o Dummy</th>
                            <th scope="col" style="width: 350px;">Contador Resetado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input class="form-check-input" type="radio" name="reason" value="A" id="changetype" required>
                            <label class="form-check-label" for="flexCheckDefault">A - Change Type</label></br>
                            <input class="form-check-input" type="radio" name="reason" value="B" id="damagedmaintenance" required>
                            <label class="form-check-label" for="flexCheckDefault">B - Damaged Maintenance</label></br>
                            <input class="form-check-input" type="radio" name="reason" value="C" id="reachnumberofuses" required>
                            <label class="form-check-label" for="flexCheckDefault">C - Reach Number of uses</label></br>
                            <input class="form-check-input" type="radio" name="reason" value="D" id="others" required>
                            <label class="form-check-label" for="flexCheckDefault">D - Other</label></br></td>
                            <td><input class="form-check-input" type="radio" name="dummy" value="OK" id="dummyok" required>
                            <label class="form-check-label" for="flexCheckDefault">OK</label></br>
                            <input class="form-check-input" type="radio" name="dummy" value="NOT" id="dummynot" required>
                            <label class="form-check-label" for="flexCheckDefault">NOT</label></br></td>
                            <td><input class="form-check-input" type="radio" name="count" value="OK" id="re-setok" required>
                            <label class="form-check-label" for="flexCheckDefault">OK</label></br>
                            <input class="form-check-input" type="radio" name="count" value="NOT" id="re-setnot" required>
                            <label class="form-check-label" for="flexCheckDefault">NOT</label></br></td>
                            
                        </tr>
                        <tr>
                            <th scope="col" colspan="2">Amostra(Dummy) foi utilizada para Chenck os Pinos e a Bola de Solda</th>
                            <th scope="col">Turno</th>
                        </tr>
                        <tr>
                            <td colspan="2"><input class="form-check-input" type="radio" name="goldensample" value="OK" id="goldensampleok" required>
                            <label class="form-check-label" for="flexCheckDefault">OK</label></br>
                            <input class="form-check-input" type="radio" name="goldensample" value="NOT" id="goldensamplenot" required>
                            <label class="form-check-label" for="flexCheckDefault">NOT</label></br></td>
                            <td><input class="form-check-input" type="radio" name="shift" value="Comercial" id="shiftcomercial" required>
                            <label class="form-check-label" for="flexCheckDefault">Comercial</label></br>
                            <input class="form-check-input" type="radio" name="shift" value="1º Turno" id="shiftprimeiro" required>
                            <label class="form-check-label" for="flexCheckDefault">1º Turno</label></br>
                            <input class="form-check-input" type="radio" name="shift" value="2º Turno" id="shiftsegundo" required>
                            <label class="form-check-label" for="flexCheckDefault">2º Turno</label></br>
                            <input class="form-check-input" type="radio" name="shift" value="3º Turno" id="shiftterceiro" required>
                            <label class="form-check-label" for="flexCheckDefault">3º Turno</label></br></td>
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
                                                                ?>">
                    </div> 
                </div>
                <div class="continue-button">
                    <button><a href="/ccbs/php/os/updatedpogopin132.php">Atualizar</a></button>
                </div>      
                <table class="table">
                <thead>
                    <tr>
                        <th scope="col" colspan="4" style="text-align: left; font-size: 25px; padding-top: 2.5rem;">Observações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="width: 350px;"><b>Change reason:</b><br>
                                                                    <b>A</b> -> Troca de Tipo.<br>
                                                                    <b>B</b> -> Manutenção.<br>
                                                                    <b>C</b> -> Vida Útil Atiginda.<br>
                                                                    <b>D</b> -> Outros.<br></td>
                        <td style="width: 350px;"><b>Após o a contagem ser Resetada, precisa inserir o registro anterior do modelo que está sendo setado na máquina.</b><br></td>
                        <td style="width: 350px;"><b>Contagem do Tempo de Vida:</b><br>
                                                                    <b>PogoPin</b> -> 200000 ± 1000.<br>
                                                                    <b>Block</b> -> 1000000 ± 1000. <br>
                                                                    <b>Socket</b> -> 2000000 ± 1000. <br></td>
                    </tr>
                </tbody>
                </table>      
            </form>
        </div>
    </div>
</body>
</html>