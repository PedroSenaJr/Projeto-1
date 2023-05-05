<?php
session_start();
include_once("/xampp/htdocs/ccbs/php/bd/conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$partnumber = filter_input(INPUT_POST, 'partnumber', FILTER_SANITIZE_NUMBER_INT);
$pnccbs = $id+$partnumber;
$marca = filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_STRING);
$tamanho = filter_input(INPUT_POST, 'tamanho', FILTER_SANITIZE_STRING);
$vidautil = filter_input(INPUT_POST, 'vidautil', FILTER_SANITIZE_STRING);
$usado = filter_input(INPUT_POST, 'usado', FILTER_SANITIZE_STRING);
$reason = filter_input(INPUT_POST, 'reason', FILTER_SANITIZE_STRING);
$who = filter_input(INPUT_POST, 'who', FILTER_SANITIZE_STRING);

$usadooficial = $usado;

$pn = $partnumber+$id;
$sql2 = "SELECT usado FROM editblade WHERE $pn=pnccbs";
$result2 = $conn->query($sql2);

$totalusado = 0;
$life = 12000;
while($user_data = mysqli_fetch_assoc($result2))
{
    $totalusado = $totalusado+$user_data['usado'];
}

$restante = $life-$totalusado;

if($usadooficial<$restante){
        if($_POST['usado'] >= 0 && $_POST['usado'] <= 12000){
            $result_editblade = "INSERT INTO editblade (idblade,marcablade,pnccbs,tamanhoblade,vidautilblade,usado,reason,who) VALUES ('$id', '$marca', '$pnccbs', '$tamanho','$vidautil','$usado','$reason', '$who')";
            $resultado_editblade = mysqli_query($conn, $result_editblade);

            if(mysqli_insert_id($conn)){
                $_SESSION['msg1'] = "A";
                header("Location: /ccbs/telas/sgl/consulta.php");
            }else{
                $_SESSION['msg3'] = "<p style='color:red;'> Blade não Cadastrada!!</p>";
                header("Location: /ccbs/telas/sgl/consulta.php");
            }
        }else{
            $_SESSION['msg3'] = "<p style='color:red;'> Vida Útil Invalida!!</p>";
            header("Location: /ccbs/telas/sgl/consulta.php");
        }
}else{
    $_SESSION['msg4'] = "<p style='color:red;'> Usado maior que Restante!!</p>";
    header("Location: /ccbs/telas/sgl/consulta.php");
}
?>
