<?php
session_start();
include_once("/xampp/htdocs/ccbs/php/bd/conexao.php");


    $cliente = filter_input(INPUT_POST, 'cliente', FILTER_SANITIZE_STRING);
    $runcard = filter_input(INPUT_POST, 'runcard', FILTER_SANITIZE_STRING);
    $datta = filter_input(INPUT_POST, 'datta', FILTER_SANITIZE_STRING);
    $porta1 = filter_input(INPUT_POST, 'porta1', FILTER_SANITIZE_STRING);
    $porta2 = filter_input(INPUT_POST, 'porta2', FILTER_SANITIZE_STRING);
    $porta3 = filter_input(INPUT_POST, 'porta3', FILTER_SANITIZE_STRING);
    $porta4 = filter_input(INPUT_POST, 'porta4', FILTER_SANITIZE_STRING);
    $substrate = filter_input(INPUT_POST, 'substrate', FILTER_SANITIZE_STRING);
    $unidade = filter_input(INPUT_POST, 'unidade', FILTER_SANITIZE_STRING);
    $compound = filter_input(INPUT_POST, 'compound', FILTER_SANITIZE_STRING);
    $tot_lotes = filter_input(INPUT_POST, 'tot_lotes', FILTER_SANITIZE_STRING);
    $programa = filter_input(INPUT_POST, 'programa', FILTER_SANITIZE_STRING);
    $programa_plasma = filter_input(INPUT_POST, 'programa_plasma', FILTER_SANITIZE_STRING);

    $observacao = filter_input(INPUT_POST, 'observacao', FILTER_SANITIZE_STRING);   

    if(!empty($_POST['cliente']) && !empty($_POST['runcard']) && !empty($_POST['datta']) && !empty($_POST['porta1']) && !empty($_POST['porta2']) && !empty($_POST['porta3']) && !empty($_POST['porta4']) && !empty($_POST['substrate'])
    && !empty($_POST['unidade']) && !empty($_POST['compound']) && !empty($_POST['tot_lotes']) && !empty($_POST['programa']) && !empty($_POST['programa_plasma']) && !empty($_POST['observacao'])  ){
        $result_cadastro = "INSERT INTO producao_mold (cliente,runcard,datta,porta1,porta2,porta3,porta4,substrate, unidade, compound,tot_lotes,programa,programa_plasma,observacao) VALUES ('$cliente', '$runcard', '$datta', '$porta1', '$porta2', '$porta3', '$porta4', '$substrate', '$unidade', '$compound', '$tot_lotes', '$programa', '$programa_plasma', '$observacao')";
        $resultado_cadastro = mysqli_query($conn, $result_cadastro);
    
        if(mysqli_insert_id($conn)){
            $_SESSION['msg1'] = "A";
            header("Location: hist_mold.php");
        }else{
            $_SESSION['msg1'] = "<p style='color:red;'> Blade não Cadastrada!!</p>";
            header("Location: mold.php");
        }
    }else{
        $_SESSION['msg2'] = "<p style='color:red;'> Blade não Cadastrada!!</p>";
        header("Location: mold.php");
    }
   


?>