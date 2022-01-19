<?php

class Relatorio {

    public function __construct($params = "") {
        parent::__construct(strtolower(get_class()), $params);
    }

    public static function lista_pais(){
        $sql = "SELECT id, codigo, nome, 
                    consulta_saldos(12,12,2020,'beginning_balance', id) as inicial, 
                    consulta_saldos(12,12,2020,'period_change', id) as movimento
                    
                FROM teste_tesouro_conta WHERE id_pai = 0";
        $rs = executaSql($sql);
        $arrLista = array();
        while($rg = $rs->fetchRow()){
            $arrLista[$rg['id']] = $rg;
            $arrLista[$rg['id']]['final'] = $arrLista[$rg['id']]['inicial'] + $arrLista[$rg['id']]['movimento'];

            /*$arrLista[$rg['id']]['inicial'] = executaSql("CALL consulta_saldo(12,12,2020,'ending_balance', 10000000)")->fetchRow();
            $arrLista[$rg['id']]['movimento'] = 250;
            $arrLista[$rg['id']]['final'] = 500;*/
            //array_push($arrLista[$rg['id']],$saldo);
        }
        return (count($arrLista) > 0) ? $arrLista : false;
    }

    /*public static function saldo($cod_ibge, $mes, $ano, $tipo_valor, $id_conta){
        $sql = "CALL consulta_saldo($cod_ibge,$mes,$ano,'$tipo_valor', $id_conta);";
        $rs = executaSql($sql);
        $arrLista = array();
        while($rg = $rs->fetchRow()){
            $arrLista[$rg[$id_conta]] = $rg;
        }
        return (count($arrLista) > 0) ? $arrLista : false;
    }*/

    public static function filtrar($post="", $filtroExtra="") {

        print_r($post);
        $filtro = " WHERE cod_ibge = {$post['ef']} AND exercicio = {$post['ano']} AND mes_referencia = {$post['mes']}";
        
        $sql = "SELECT c.codigo, c.nome, l.id, l.valor, l.natureza_conta 
                FROM teste_tesouro_lancamento_msc_{$post['ano']}_cod_12 AS l
                INNER JOIN teste_tesouro_conta AS c
                    ON l.conta_contabil = c.id
                ".$filtro." 
                GROUP BY conta_contabil
                ORDER BY conta_contabil ASC
                ";
echo $sql;
        $rs = executaSql($sql);
        $arrLista = array();
        while($rg = $rs->fetchRow()){
            $arrLista[$rg['id']] = $rg;
        }
        return (count($arrLista) > 0) ? $arrLista : false;
        
    }
    
}
