<?php
session_start();
include_once("/xampp/htdocs/ccbs/php/bd/conexao.php");

    
    $lotmae = $_GET['lotmae'];
    $codigocliente = $_GET['codigocliente'];
    $numeroflash = $_GET['numeroflash'];
    $tipoproduto = $_GET['tipoproduto'];
    $nomeprograma = $_GET['nomeprograma'];

    if(!empty($lotmae) && !empty($codigocliente) && !empty($numeroflash) && !empty($tipoproduto) && !empty($nomeprograma) ){
        $result_cadastro = "INSERT INTO cadinfo (lotmae,codcliente,numeroflash,tipoproduto,nomeprograma) VALUES ('$lotmae', '$codigocliente', '$numeroflash', '$tipoproduto', '$nomeprograma')";
        $resultado_cadastro = mysqli_query($conn, $result_cadastro);
        
        if(mysqli_insert_id($conn)){
            $_SESSION['msg1'] = "Cadastro Realizado com Sucesso";
            header("Location: /ccbs/telas/sortingtest/cadinfo.php");
        }else{
            $_SESSION['msg2'] = "<p style='color:red;'> Não Cadastrado, Algo de errado!!</p>";
            header("Location: /ccbs/telas/sortingtest/cadinfo.php");
        }
    }else{
        $_SESSION['msg3'] = "<p style='color:red;'> Insira todos os campos!!</p>";
        header("Location: /ccbs/telas/sortingtest/cadinfo.php");
    }

?>