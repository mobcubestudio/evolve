<?php
################################################################################
#### GERAL
################################################################################
$arrEstados = Exec::listar('cidadeibge', 'WHERE cod_estado_ibge = 0 AND id <> 1');

################################################################################
#### LISTAR
################################################################################
if($metodo=="listar" || $metodo==""){
    //print_r($post);
    //$arrRelatorio = Relatorio::filtrar($post);
//print_r($arrRelatorio);
    //$arrPais = Relatorio::lista_pais();

    
    $view = "relatorio_listar";
    
}




