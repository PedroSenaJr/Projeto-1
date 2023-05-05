<?php
session_start();
include_once("/xampp/htdocs/ccbs/php/bd/conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$pn =  filter_input(INPUT_POST, 'partnumberunico', FILTER_SANITIZE_STRING);
$marca = filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_STRING);
$tamanho = filter_input(INPUT_POST, 'tamanho', FILTER_SANITIZE_STRING);
$vidautil = filter_input(INPUT_POST, 'vidautil', FILTER_SANITIZE_STRING);
$usado = filter_input(INPUT_POST, 'usado', FILTER_SANITIZE_STRING);
$reason = filter_input(INPUT_POST, 'reason', FILTER_SANITIZE_STRING);
$who = filter_input(INPUT_POST, 'who', FILTER_SANITIZE_STRING);

$usadooficial = $usado;

$sql2 = "SELECT usado FROM editblade_diesaw WHERE $id=id";
$result2 = $conn->query($sql2);

$totalusado = 0;

while($user_data = mysqli_fetch_assoc($result2))
{
    $totalusado = $totalusado+$user_data['usado'];
}

$restante = $vidautil-$totalusado;

if($usadooficial<$restante){
    if($_POST['usado'] >= 0 && $_POST['usado'] <= $vidautil){
        $result_editblade = "INSERT INTO editblade_diesaw (idblade,marcablade,partnumberunico,tamanhoblade,vidautilblade,usado,reason,who) VALUES ('$id','$marca','$pn','$tamanho','$vidautil','$usado','$reason', '$who')";
        $resultado_editblade = mysqli_query($conn, $result_editblade); 

            if(mysqli_insert_id($conn)){
                $_SESSION['msg1'] = "A";
                header("Location: /ccbs/telas/diesaw/consulta_diesaw.php");
            }else{
                $_SESSION['msg3'] = "<p style='color:red;'> Blade não Cadastrada!!</p>";
                header("Location: /ccbs/telas/diesaw/consulta_diesaw.php");
            }
    }else{
        $_SESSION['msg3'] = "<p style='color:red;'> Vida Útil Invalida!!</p>";
        header("Location: /ccbs/telas/diesaw/consulta_diesaw.php");
    }
}else{
    $_SESSION['msg4'] = "<p style='color:red;'> Usado maior que Restante!!</p>";
    header("Location: /ccbs/telas/diesaw/consulta_diesaw.php");
}
?>
