<?php

include_once("/xampp/htdocs/ccbs/php/bd/conexao.php");

$sql = "SELECT * FROM producao_mold ORDER BY cliente DESC";
$result = $conn->query($sql);

session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Celke</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
</head>

<body>
    <h1>Listar Usuários</h1>
    <table id="listar-usuario" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Cliente</th>
                <th>Runcard</th>
                <th>Data</th>
                <th>Press 1</th>
                <th>Press 2</th>
                <th>Press 3 </th>
                <th>Press 4</th>
                <th>Substrate</th>
                <th>Unidade</th>
                <th>Compound</th>
                <th>Lotes Produzidos</th>
                <th>Prog Plasma</th>
                <th>Programa</th>
                <th>Observação</th>
            </tr>
        </thead>

    <tbody>
    <?php
      while($user_data = mysqli_fetch_assoc($result))
      {
      echo "<tr>";
      echo "<td style='text-align: center'>".$user_data['id']."</td>";
      echo "<td style='text-align: center'>".$user_data['cliente']."</td>";
      echo "<td style='text-align: center'>".$user_data['runcard']."</td>";
      echo "<td style='text-align: center'>".$user_data['datta']."</td>";
      echo "<td style='text-align: center'>".$user_data['porta1']."</td>";
      echo "<td style='text-align: center'>".$user_data['porta2']."</td>";
      echo "<td style='text-align: center'>".$user_data['porta3']."</td>";
      echo "<td style='text-align: center'>".$user_data['porta4']."</td>";
      echo "<td style='text-align: center'>".$user_data['substrate']."</td>";
      echo "<td style='text-align: center'>".$user_data['unidade']."</td>";
      echo "<td style='text-align: center'>".$user_data['compound']."</td>";
      echo "<td style='text-align: center'>".$user_data['tot_lotes']."</td>";
      echo "<td style='text-align: center'>".$user_data['programa']."</td>";
      echo "<td style='text-align: center'>".$user_data['programa_plasma']."</td>";
      echo "<td style='text-align: center'>".$user_data['observacao']."</td>";
   
      "</tr>";
    }
    ?>
    </tbody>

    </table>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#listar-usuario').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "listar_usuarios.php"
            });
        });
    </script>
</body>

</html>