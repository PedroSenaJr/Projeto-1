<?php
session_start();
include_once("/xampp/htdocs/ccbs/php/bd/conexao.php");

    $pogopin1 = filter_input(INPUT_POST, 'pogopin1', FILTER_SANITIZE_NUMBER_INT);
    $pogopin2 = filter_input(INPUT_POST, 'pogopin2', FILTER_SANITIZE_NUMBER_INT);
    $pogopin3 = filter_input(INPUT_POST, 'pogopin3', FILTER_SANITIZE_NUMBER_INT);
    $pogopin4 = filter_input(INPUT_POST, 'pogopin4', FILTER_SANITIZE_NUMBER_INT);
    $pogopin5 = filter_input(INPUT_POST, 'pogopin5', FILTER_SANITIZE_NUMBER_INT);
    $pogopin6 = filter_input(INPUT_POST, 'pogopin6', FILTER_SANITIZE_NUMBER_INT);
    $pogopin7 = filter_input(INPUT_POST, 'pogopin7', FILTER_SANITIZE_NUMBER_INT);
    $pogopin8 = filter_input(INPUT_POST, 'pogopin8', FILTER_SANITIZE_NUMBER_INT);
    $head1 = filter_input(INPUT_POST, 'head1', FILTER_SANITIZE_NUMBER_INT);
    $head2 = filter_input(INPUT_POST, 'head2', FILTER_SANITIZE_NUMBER_INT);
    $socket = $head1+$head2;
    $reason = filter_input(INPUT_POST, 'reason', FILTER_SANITIZE_STRING);
    $dummy = filter_input(INPUT_POST, 'dummy', FILTER_SANITIZE_STRING);
    $count = filter_input(INPUT_POST, 'count', FILTER_SANITIZE_STRING);
    $goldensample = filter_input(INPUT_POST, 'goldensample', FILTER_SANITIZE_STRING);
    $shift = filter_input(INPUT_POST, 'shift', FILTER_SANITIZE_STRING);
    $who = filter_input(INPUT_POST, 'who', FILTER_SANITIZE_STRING);
    
    if(!empty($_POST['pogopin1']) && !empty($_POST['pogopin2']) && !empty($_POST['pogopin3']) && !empty($_POST['pogopin4']) && !empty($_POST['pogopin5']) && !empty($_POST['pogopin6']) && !empty($_POST['pogopin7']) && !empty($_POST['pogopin8']) && !empty($_POST['head1']) && !empty($_POST['head2']) && !empty($_POST['reason']) && !empty($_POST['dummy']) && !empty($_POST['count']) && !empty($_POST['goldensample']) && !empty($_POST['shift']) && !empty($_POST['who']) ){
        $result_cadastro = "INSERT INTO pogopin272 (pogopin1,pogopin2,pogopin3,pogopin4,pogopin5,pogopin6,pogopin7,pogopin8,head1,head2,socket,reason,dummy,count,goldensample,shift,who) VALUES ('$pogopin1', '$pogopin2', '$pogopin3', '$pogopin4', '$pogopin5', '$pogopin6', '$pogopin7', '$pogopin8', '$head1', '$head2', '$socket', '$reason', '$dummy', '$count', '$goldensample', '$shift', '$who')";
        $resultado_cadastro = mysqli_query($conn, $result_cadastro);
        
        if(mysqli_insert_id($conn)){
            $_SESSION['msg1'] = "PogoPin Atualizado com Sucesso";
            header("Location: /ccbs/telas/os/pogopinbga272.php");
        }else{
            $_SESSION['msg2'] = "<p style='color:red;'> Pogopin Não Atualizado!!</p>";
            header("Location: /ccbs/telas/os/pogopinbga272.php");
        }
    }else{
        $_SESSION['msg3'] = "<p style='color:red;'> Insira todos os campos!!</p>";
        header("Location: /ccbs/telas/os/pogopinbga272.php");
    }
?>