<?php

session_start();

unset($_SESSION['idUser']);

header("Location: /ccbs/dashboard_setor.html"); 

?>