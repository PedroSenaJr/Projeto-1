<?php
include_once("/xampp/htdocs/ccbs/php/bd/conexao.php");

function retorna($lotmae, $conn){
    $result_lot = "SELECT * FROM cadinfo WHERE lotmae = '$lotmae' LIMIT 1";
    $resultado_lot = mysqli_query($conn, $result_lot);
    if($resultado_lot->num_rows){
        $row_lot = mysqli_fetch_assoc($resultado_lot);
        $valores['codcliente'] = $row_lot['codcliente'];
        $valores['numeroflash'] = $row_lot['numeroflash'];
        $valores['tipoproduto'] = $row_lot['tipoproduto'];
        $valores['nomeprograma'] = $row_lot['nomeprograma'];
    }else{
        $valores['lotmae'] = 'Lot não Cadastrado';
    }
    return json_encode($valores);
}

if(isset($_GET['lotmae'])){
    echo retorna($_GET['lotmae'], $conn);
}

?>