<?php

session_start();

session_destroy();// destrói a sessão


header("Location: login.php");// é redirecionada para a página login.php
exit;
?>
