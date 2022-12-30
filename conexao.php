<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'u189057706_leonardo');
define('SENHA', 'Leonardo1812@');
define('DB', 'u189057706_login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');