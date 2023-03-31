<?php

    include('classes/conexao.php');
    include('classes/usuariodao.php');

    $usuario = new UsuarioDAO();

    $logout = $usuario->logout();




?>