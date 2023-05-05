<?php

// Incluir a conexao com o banco de dados
include_once '../bd/conexao1.php';

//Receber os dados da requisão
$dados_requisicao = $_REQUEST;

// Lista de colunas na tabela
$colunas = [
    0 => 'id',
    1 => 'cliente',
    2 => 'runcard',
    3 => 'datta',
    4 => 'porta1',
    5 => 'porta2',
    6 => 'porta3',
    7 => 'porta4',
    8 => 'substrate',
    9 => 'unidade',
    10 => 'compound',
    11 => 'tot_lotes',
    12 => 'programa_plasma',
    13 => 'programa',
    14 => 'observacao',
];

// Obter a quantidade de registros no banco de dados
$query_qnt_usuarios = "SELECT COUNT(id) AS qnt_usuarios FROM producao_mold";
$result_qnt_usuarios = $conn->prepare($query_qnt_usuarios);
$result_qnt_usuarios->execute();
$row_qnt_usuarios = $result_qnt_usuarios->fetch(PDO::FETCH_ASSOC);
//var_dump($row_qnt_usuarios);

$query_usuarios = "SELECT id, cliente, runcard, datta, porta1, porta2, porta3, porta4, substrate, unidade, compound, tot_lotes, programa_plasma, programa,  
                    FROM producao_mold ";
$query_usuarios .= " ORDER BY " . $colunas[$dados_requisicao['order'][0]['column']] . " " . $dados_requisicao['order'][0]['dir'] . " LIMIT :inicio , :quantidade";

$result_usuarios = $conn->prepare($query_usuarios);
$result_usuarios->bindParam(':inicio', $dados_requisicao['start'], PDO::PARAM_INT);
$result_usuarios->bindParam(':quantidade', $dados_requisicao['length'], PDO::PARAM_INT);
$result_usuarios->execute();

while ($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)) {
    //var_dump($row_usuario);
    extract($row_usuario);
    $registro = [];
    $registro[] = $id;
    $registro[] = $cliente;
    $registro[] = $runcard;
    $registro[] = $datta;
    $registro[] = $porta1;
    $registro[] = $porta2;
    $registro[] = $porta3;
    $registro[] = $porta4;
    $registro[] = $substrate;
    $registro[] = $unidade;
    $registro[] = $compound;
    $registro[] = $tot_lotes;
    $registro[] = $programa_plasma;
    $registro[] = $programa;
    $registro[] = $observacao;
    $dados[] = $registro;
}

//var_dump($dados);

//Cria o array de informações a serem retornadas para o Javascript
$resultado = [
    "draw" => intval($dados_requisicao['draw']), // Para cada requisição é enviado um número como parâmetro
    "recordsTotal" => intval($row_qnt_usuarios['qnt_usuarios']), // Quantidade de registros que há no banco de dados
    "recordsFiltered" => intval($row_qnt_usuarios['qnt_usuarios']), // Total de registros quando houver pesquisa
    "data" => $dados // Array de dados com os registros retornados da tabela usuarios
];

//var_dump($resultado);

// Retornar os dados em formato de objeto para o JavaScript
echo json_encode ($resultado);
