<?php

class Usuario{
    public function login($matricula, $senha){
        global $pdo;

        $sql = "SELECT * FROM usuarios WHERE matricula = :matricula and senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql ->bindValue("matricula", $matricula);
        $sql ->bindValue("senha", $senha);
        $sql ->execute();   

        if($sql->rowCount() >0){
            $dado = $sql->fetch();

            $_SESSION['idUser'] = $dado['idusuarios'];
            return true;
        }else{
            return false;
        }

    }
}

?>  