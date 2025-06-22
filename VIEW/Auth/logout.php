<?php
// Iniciar a sessão
session_start();
// Destruir a sessão
unset($_SESSION['usuario']);
// Redirecionar para a página de login  
header("Location: ../index.php");
exit();
?>