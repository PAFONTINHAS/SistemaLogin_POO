<?php

private $id;
private $login;
private $email;
private $senha;
private $logado;

function getId() {
    return $this->id;
}

function setId($id) {
    $this->id = $id;
}

function getLogin() {
    return $this->login;
}

function setLogin($login) {
    $this->login = $login;
}

function getEmail() {
    return $this->email;
}

function setEmail($email) {
    $this->email = $email;
}

function getSenha() {
    return $this->senha;
}

function setSenha($senha) {
    $this->senha = $senha;
}

function getLogado() {
    return $this->logado;
}

function setLogado($logado) {
    $this->logado = $logado;
}



?>