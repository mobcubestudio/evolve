<?php
################################################################################
#### GERAL
################################################################################
$arrEstados = Exec::listar('cidadeibge', 'WHERE cod_estado_ibge = 0 AND id <> 1');

################################################################################
#### LISTAR
################################################################################
if($metodo=="listar" || $metodo==""){
    
    $arrUsuario = Usuario::filtrar($post);
    
    $view = "usuario_listar";
    
}

################################################################################
#### GERENCIAR
################################################################################
if($metodo=="gerenciar"){
    
    
    $view = "usuario_gerenciar"; //nome arquivo em public/views/teste/
    
}

