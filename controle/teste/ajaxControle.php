<?php

/* 
 * Envie a requisição ajax para http://localhost/evolve-teste2/teste/ajax que será processado neste arquivo
 * Ex: http://localhost/evolve-teste2/teste/ajax/buscaIbge/12
 */

$arrRetorno['sucesso'] = true;
$arrRetorno['msg'] = "pagina encontrada";
$arrRetorno['parametros'] = $arrParametro;

if($arrParametro[2]=="buscaIbge"){
    $arrCidadeIbge = Exec::listar('cidadeibge', 'WHERE id = '.$arrParametro[3]);
    $arrRetorno['result'] = $arrCidadeIbge;
}

if($arrParametro[2]=="buscaPais"){
    $linha = $arrParametro[3];
    $arrPai = Relatorio::dados_pai($linha);
    $arrRetorno['result'] = $arrPai;
}



die(json_encode($arrRetorno));