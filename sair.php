<?php

session_start();
// Finalizando Sessão
unset($_SESSION['id_cliente']);

header("Location: login.html");

?>