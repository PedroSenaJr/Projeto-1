<?php

if(isset($_POST['matricula']) && !empty($_POST['matricula']) && isset($_POST['senha']) && !empty($_POST['senha']) ){

    require '../bd/conexao1.php';
    require 'usuario.class.php';

    $u = new Usuario();
    
    $matricula = addslashes($_POST['matricula']);
    $senha = addslashes($_POST['senha']);

    if($u->login($matricula, $senha) == true){
        if(isset($_SESSION['idUser'])){
            header("location: /ccbs/telas/menu.php");
        }else{
            header("location: /ccbs/telas/login.php");
        }
    }else{
        header("location: /ccbs/telas/login.php");
    }
}else{
    header("location: /ccbs/telas/login.php");
}

?>