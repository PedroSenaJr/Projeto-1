<?php
session_start();
include_once("/xampp/htdocs/ccbs/php/bd/conexao.php");


    $marca = filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_STRING);
    $tamanho = filter_input(INPUT_POST, 'tamanho', FILTER_SANITIZE_STRING);
    $vidautil = filter_input(INPUT_POST, 'vidautil', FILTER_SANITIZE_STRING);
    $partnumber = filter_input(INPUT_POST, 'partnumber', FILTER_SANITIZE_STRING);
    $who = filter_input(INPUT_POST, 'who', FILTER_SANITIZE_STRING);
    $location = filter_input(INPUT_POST, 'location', FILTER_SANITIZE_STRING);

if($_POST['vidautil'] >= 0){
    if(!empty($_POST['marca']) && !empty($_POST['tamanho']) && !empty($_POST['vidautil']) && !empty($_POST['partnumber']) && !empty($_POST['who']) && !empty($_POST['location']) ){

        $result_cadastro = "INSERT INTO cadastro (marca,tamanho,vidautil,partnumber,who,location) VALUES ('$marca', '$tamanho', '$vidautil', '$partnumber', '$who', '$location')";
        $resultado_cadastro = mysqli_query($conn, $result_cadastro);
            
        if(mysqli_insert_id($conn)){
            $_SESSION['msg1'] = "A";
            header("Location: /ccbs/telas/sgl/cadastro.php");
        }else{
            $_SESSION['msg1'] = "<p style='color:red;'> Blade não Cadastrada!!</p>";
            header("Location: /ccbs/telas/sgl/cadastro.php");
        }
    }else{
        $_SESSION['msg2'] = "<p style='color:red;'> Blade não Cadastrada!!</p>";
        header("Location: /ccbs/telas/sgl/cadastro.php");
    }
}else{
    $_SESSION['msg3'] = "<p style='color:red;'> Vida Útil Invalida!!</p>";
    header("Location: /ccbs/telas/sgl/cadastro.php");
}
?>