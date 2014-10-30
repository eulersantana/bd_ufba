<?php

$mysql = MySQL::getInscancia();

$mysql->setServidor("localhost");
$mysql->setUsuario("root");
$mysql->setSenha("");
$mysql->setBase("ufba_convida");

$mysql->conectar();