<?php

session_start();

require 'funcoes.php';

echo "Bem-vindo, " . $_SESSION['usuario'];