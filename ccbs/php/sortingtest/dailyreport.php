<?php
session_start();
include_once("/xampp/htdocs/ccbs/php/bd/conexao.php");

    
    $lotmae = $_GET['lotmae'];
    $codcliente = $_GET['codcliente'];
    $numeroflash = $_GET['numeroflash'];
    $tipoproduto = $_GET['tipoproduto'];
    $nomeprograma = $_GET['nomeprograma'];
    $numerolot = $_GET['numerolot'];
    $checkin = $_GET['checkin'];
    $checkout = $_GET['checkout'];
    $pc = $_GET['pc'];
    $qtd = $_GET['qtd'];
    $aprovado = $_GET['aprovado'];
    $bin2 = $_GET['bin2'];
    $falha = $_GET['falha'];
    $who = $_GET['who'];

    $soma = $aprovado+$bin2+$falha;
    echo $soma;
    if ($qtd==$soma){
        if(!empty($lotmae) && !empty($codcliente) && !empty($numeroflash) && !empty($tipoproduto) && !empty($nomeprograma) && !empty($numerolot) && !empty($checkin) && !empty($checkout) && !empty($pc) && !empty($qtd) && !empty($aprovado) && !empty($bin2) && !empty($falha) && !empty($who)){
            $result_cadastro = "INSERT INTO dailyreport (lotmae,codcliente,numeroflash,tipoproduto,nomeprograma,numerolot,checkin,checkout,pc,qtd,aprovado,bin2,falha,who) VALUES ('$lotmae', '$codcliente', '$numeroflash', '$tipoproduto', '$nomeprograma', '$numerolot', '$checkin', '$checkout', '$pc', '$qtd', '$aprovado', '$bin2', '$falha', '$who')";
            $resultado_cadastro = mysqli_query($conn, $result_cadastro);
            
            if(mysqli_insert_id($conn)){
                $_SESSION['msg1'] = "Cadastro Realizado com Sucesso";
                header("Location: /ccbs/telas/sortingtest/dailyreport.php");
            }else{
                $_SESSION['msg2'] = "<p style='color:red;'> Não Cadastrado, Algo de errado!!</p>";
                header("Location: /ccbs/telas/sortingtest/dailyreport.php");
            }
        }else{
            $_SESSION['msg3'] = "<p style='color:red;'> Insira todos os campos!!</p>";
            header("Location: /ccbs/telas/sortingtest/dailyreport.php");
        }
    }else{
        $_SESSION['msg4'] = "<p style='color:red;'> Valores Inconsistentes.!!</p>";
        header("Location: /ccbs/telas/sortingtest/dailyreport.php");
    }
    

?>