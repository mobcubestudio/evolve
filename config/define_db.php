<?php
//URL
$url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$requestUri = $_SERVER['REQUEST_URI'];

//DOMINIO
$localPath = "evolve/"; // SUA PASTA LOCAL DO PROJETO

//SESSAO
define("SESSAO",md5(uniqid()));

#*******************************
# LOCALHOST
#*******************************
define("PATHRAIZ",$_SERVER['DOCUMENT_ROOT'].'/'.$localPath); 
define("URLRAIZ","http://resolve.tk/".$localPath);
define("BD_USUARIO","reso_evolve"); // USUARIO BANCO
define("BD_SENHA","@iso.Cube.85"); // SENHA BANCO
define("BD_SERVIDOR","localhost"); // SERVIDOR BANCO
define("BD_BASE","reso_evolve"); // NOME BASE
define("LOCAL",true);
define("DEBUG",false);

ini_set('display_errors', 'On'); 
$min = '';

//PREFIXO TABELAS
define("DB_PREFIX","teste");

