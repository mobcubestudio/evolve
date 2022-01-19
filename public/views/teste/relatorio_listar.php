<?php

?>

<form class="pd10 mt20" action="?ok" method="post">
    <div class="row form-group">
        <div class="col-3">
            <label>Exercício</label>
            <input type="number" name="ano" min="2015" max="<?=date('Y')?>" class="form-control" value="2020" />
        </div>
        <div class="col-3">
            <label>Mês Referência</label>
            <input type="number" name="mes" min="1" max="12" class="form-control" />
        </div>
        <div class="col-3">
            <label>Entidade Federativa</label>

            <select id="select-ef" name="ef" type="text" class="form-control">
                <option value="">Selecione</option>
                <?php
                    foreach ($arrEstados as $estado){
                        echo '<option value="'.$estado['id'].'">'.$estado['nome'].'</option>';
                    }
                ?>
            </select>
        </div>
        <div class="col-3">
            <label>&nbsp;</label>
            <input class="left w100 btn btn-primary" id="filtrar" type="button" value="FILTRAR" >
        </div>
    </div>
</form>
<hr>
<div id="filter-content">

</div>


<?php
//print_r($arrPais);
?>

<table class="table table-striped table-bordered" width="100%" style="font-size: 10px">
    <thead>
        <tr class="cabecalho-relatorio">
            <td>Conta </td>
            <th width="200px">Inicial</th>
            <th width="200px">Movimento</th>
            <th width="200px">Final</th>
        </tr>
    </thead>
    <tbody>
    <?php

        foreach ($arrPais as $pai){

    ?>
    <tr class="filho0 filho filho-hide nivel0 nivelPadrao">
        <td><i class="fa fa-minus-circle js-abre-filhos" id="100000000"></i> <?=$pai['codigo']?> - <?=$pai['nome']?> </td>

        <td align="right" data-saldo="6934738458.98" data-nat="D">R$ 6.934.738.458,98 D - <?=$pai['inicial']?></td>
        <td align="right" data-saldo="6934738458.98" data-nat="C">R$ 200.917.986,24 C - <?=$pai['movimento']?></td>
        <td align="right" data-saldo="6934738458.98" data-nat="D">R$ 6.733.820.472,74 D - <?=$pai['final']?></td>

    </tr>
    <?php
        }
    ?>
    </tbody>
</table>


<!--table class="table table-striped table-bordered" width="100%" style="font-size: 10px">
    <tbody><tr class="cabecalho-relatorio">
            <td>Conta </td>
            <td width="200px">Inicial</td>
            <td width="200px">Movimento</td>
            <td width="200px">Final</td>
        </tr>
        <tr class="filho0 filho filho-hide nivel0 nivelPadrao">
            <td><i class="fa fa-minus-circle js-abre-filhos" id="100000000"></i> 1.0.0.0.0.00.00 - ATIVO </td>
            <td align="right" data-saldo="6934738458.98" data-nat="D">R$ 6.934.738.458,98 D</td>
            <td align="right" data-saldo="6934738458.98" data-nat="C">R$ 200.917.986,24 C</td>
            <td align="right" data-saldo="6934738458.98" data-nat="D">R$ 6.733.820.472,74 D</td></tr>
    <tr class="filho100000000 filho filho-hide nivel1 nivelPadrao">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="110000000"></i> 1.1.0.0.0.00.00 - ATIVO CIRCULANTE</td>
            <td align="right" data-saldo="2889104495.8" data-nat="D">R$ 2.889.104.495,80 D</td>
            <td align="right" data-saldo="2889104495.8" data-nat="C">R$ 229.041.722,54 C</td>
            <td align="right" data-saldo="2889104495.8" data-nat="D">R$ 2.660.062.773,26 D</td></tr>
    <tr class="filho110000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="111000000"></i> 1.1.1.0.0.00.00 - CAIXA E EQUIVALENTES DE CAIXA</td>
            <td align="right" data-saldo="1327641556.47" data-nat="D">R$ 1.327.641.556,47 D</td>
            <td align="right" data-saldo="1327641556.47" data-nat="C">R$ 209.127.105,34 C</td>
            <td align="right" data-saldo="1327641556.47" data-nat="D">R$ 1.118.514.451,13 D</td></tr><tr class="filho111000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="111100000"></i> 1.1.1.1.0.00.00 - CAIXA E EQUIVALENTES DE CAIXA EM MOEDA NACIONAL</td>
            <td align="right" data-saldo="1327641556.47" data-nat="D">R$ 1.327.641.556,47 D</td>
            <td align="right" data-saldo="1327641556.47" data-nat="C">R$ 209.127.105,34 C</td>
            <td align="right" data-saldo="1327641556.47" data-nat="D">R$ 1.118.514.451,13 D</td></tr><tr class="filho111100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="111110000"></i> 1.1.1.1.1.00.00 - CAIXA E EQUIVALENTES DE CAIXA EM MOEDA NACIONAL - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="1327641556.47" data-nat="D">R$ 1.327.641.556,47 D</td>
            <td align="right" data-saldo="1327641556.47" data-nat="C">R$ 209.127.105,34 C</td>
            <td align="right" data-saldo="1327641556.47" data-nat="D">R$ 1.118.514.451,13 D</td></tr><tr class="filho111110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.1.1.1.1.02.00 - CONTA ÚNICA</td>
            <td align="right" data-saldo="385281632.87" data-nat="D">R$ 385.281.632,87 D</td>
            <td align="right" data-saldo="385281632.87" data-nat="C">R$ 126.223.712,08 C</td>
            <td align="right" data-saldo="385281632.87" data-nat="D">R$ 259.057.920,79 D</td></tr><tr class="filho111110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="111110600"></i> 1.1.1.1.1.06.00 - CONTA ÚNICA RPPS</td>
            <td align="right" data-saldo="454325.88" data-nat="D">R$ 454.325,88 D</td>
            <td align="right" data-saldo="454325.88" data-nat="D">R$ 71.047,62 D</td>
            <td align="right" data-saldo="454325.88" data-nat="D">R$ 525.373,50 D</td></tr><tr class="filho111110600 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.1.1.1.1.06.01 - BANCOS CONTA MOVIMENTO – RPPS</td>
            <td align="right" data-saldo="448723.91" data-nat="D">R$ 448.723,91 D</td>
            <td align="right" data-saldo="448723.91" data-nat="D">R$ 71.047,62 D</td>
            <td align="right" data-saldo="448723.91" data-nat="D">R$ 519.771,53 D</td></tr><tr class="filho111110600 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.1.1.1.1.06.02 - BANCOS CONTA MOVIMENTO – PLANO FINANCEIRO</td>
            <td align="right" data-saldo="5601.97" data-nat="D">R$ 5.601,97 D</td>
            <td align="right" data-saldo="5601.97" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="5601.97" data-nat="D">R$ 5.601,97 D</td></tr><tr class="filho111110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.1.1.1.1.19.00 - BANCOS CONTA MOVIMENTO - DEMAIS CONTAS</td>
            <td align="right" data-saldo="748786577.85" data-nat="D">R$ 748.786.577,85 D</td>
            <td align="right" data-saldo="748786577.85" data-nat="C">R$ 75.701.218,17 C</td>
            <td align="right" data-saldo="748786577.85" data-nat="D">R$ 673.085.359,68 D</td></tr><tr class="filho111110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.1.1.1.1.30.00 - REDE BANCARIA - ARRECADAÇÃO</td>
            <td align="right" data-saldo="160607034.11" data-nat="D">R$ 160.607.034,11 D</td>
            <td align="right" data-saldo="160607034.11" data-nat="C">R$ 18.455.975,06 C</td>
            <td align="right" data-saldo="160607034.11" data-nat="D">R$ 142.151.059,05 D</td></tr><tr class="filho111110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="111115000"></i> 1.1.1.1.1.50.00 - APLICAÇÕES FINANCEIRAS DE LIQUIDEZ IMEDIATA</td>
            <td align="right" data-saldo="32511985.76" data-nat="D">R$ 32.511.985,76 D</td>
            <td align="right" data-saldo="32511985.76" data-nat="D">R$ 11.182.752,35 D</td>
            <td align="right" data-saldo="32511985.76" data-nat="D">R$ 43.694.738,11 D</td></tr><tr class="filho111115000 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.1.1.1.1.50.99 - OUTRAS APLICAÇÕES FINANCEIRAS DE LIQUIDEZ IMEDIATA</td>
            <td align="right" data-saldo="32511985.76" data-nat="D">R$ 32.511.985,76 D</td>
            <td align="right" data-saldo="32511985.76" data-nat="D">R$ 11.182.752,35 D</td>
            <td align="right" data-saldo="32511985.76" data-nat="D">R$ 43.694.738,11 D</td></tr><tr class="filho110000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="112000000"></i> 1.1.2.0.0.00.00 - CRÉDITOS A CURTO PRAZO</td>
            <td align="right" data-saldo="1211042118.93" data-nat="D">R$ 1.211.042.118,93 D</td>
            <td align="right" data-saldo="1211042118.93" data-nat="C">R$ 25.009.472,14 C</td>
            <td align="right" data-saldo="1211042118.93" data-nat="D">R$ 1.186.032.646,79 D</td></tr><tr class="filho112000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="112100000"></i> 1.1.2.1.0.00.00 - CRÉDITOS TRIBUTÁRIOS A RECEBER</td>
            <td align="right" data-saldo="711982575.91" data-nat="D">R$ 711.982.575,91 D</td>
            <td align="right" data-saldo="711982575.91" data-nat="C">R$ 24.707.836,89 C</td>
            <td align="right" data-saldo="711982575.91" data-nat="D">R$ 687.274.739,02 D</td></tr><tr class="filho112100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="112110000"></i> 1.1.2.1.1.00.00 - CRÉDITOS TRIBUTÁRIOS A RECEBER - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="711953848.89" data-nat="D">R$ 711.953.848,89 D</td>
            <td align="right" data-saldo="711953848.89" data-nat="C">R$ 24.679.109,87 C</td>
            <td align="right" data-saldo="711953848.89" data-nat="D">R$ 687.274.739,02 D</td></tr><tr class="filho112110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="112110100"></i> 1.1.2.1.1.01.00 - IMPOSTOS</td>
            <td align="right" data-saldo="711953848.89" data-nat="D">R$ 711.953.848,89 D</td>
            <td align="right" data-saldo="711953848.89" data-nat="C">R$ 24.679.109,87 C</td>
            <td align="right" data-saldo="711953848.89" data-nat="D">R$ 687.274.739,02 D</td></tr><tr class="filho112110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.1.2.1.1.01.02 - IPVA</td>
            <td align="right" data-saldo="-27310110.24" data-nat="C">R$ 27.310.110,24 C</td>
            <td align="right" data-saldo="-27310110.24" data-nat="D">R$ 30.569.564,29 D</td>
            <td align="right" data-saldo="-27310110.24" data-nat="D">R$ 3.259.454,05 D</td></tr><tr class="filho112110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.1.2.1.1.01.03 - ITCMD</td>
            <td align="right" data-saldo="-3881792.03" data-nat="C">R$ 3.881.792,03 C</td>
            <td align="right" data-saldo="-3881792.03" data-nat="D">R$ 3.881.792,03 D</td>
            <td align="right" data-saldo="-3881792.03" data-nat="C">R$ 0,00 C</td></tr><tr class="filho112110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.1.2.1.1.01.04 - ICMS</td>
            <td align="right" data-saldo="743145751.16" data-nat="D">R$ 743.145.751,16 D</td>
            <td align="right" data-saldo="743145751.16" data-nat="C">R$ 59.130.466,19 C</td>
            <td align="right" data-saldo="743145751.16" data-nat="D">R$ 684.015.284,97 D</td></tr><tr class="filho112100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="112120000"></i> 1.1.2.1.2.00.00 - CRÉDITOS TRIBUTÁRIOS A RECEBER - INTRA OFSS</td>
            <td align="right" data-saldo="28727.02" data-nat="D">R$ 28.727,02 D</td>
            <td align="right" data-saldo="28727.02" data-nat="C">R$ 28.727,02 C</td>
            <td align="right" data-saldo="28727.02" data-nat="C">R$ 0,00 C</td></tr><tr class="filho112120000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="112120500"></i> 1.1.2.1.2.05.00 - CONTRIBUIÇÕES PREVIDENCIÁRIAS A RECEBER</td>
            <td align="right" data-saldo="28727.02" data-nat="D">R$ 28.727,02 D</td>
            <td align="right" data-saldo="28727.02" data-nat="C">R$ 28.727,02 C</td>
            <td align="right" data-saldo="28727.02" data-nat="C">R$ 0,00 C</td></tr><tr class="filho112120500 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.1.2.1.2.05.99 - OUTRAS CONTRIBUIÇÕES PREVIDENCIÁRIAS A RECEBER</td>
            <td align="right" data-saldo="28727.02" data-nat="D">R$ 28.727,02 D</td>
            <td align="right" data-saldo="28727.02" data-nat="C">R$ 28.727,02 C</td>
            <td align="right" data-saldo="28727.02" data-nat="C">R$ 0,00 C</td></tr><tr class="filho112000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="112200000"></i> 1.1.2.2.0.00.00 - CLIENTES</td>
            <td align="right" data-saldo="3161962.3" data-nat="D">R$ 3.161.962,30 D</td>
            <td align="right" data-saldo="3161962.3" data-nat="D">R$ 1.558.611,16 D</td>
            <td align="right" data-saldo="3161962.3" data-nat="D">R$ 4.720.573,46 D</td></tr><tr class="filho112200000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="112220000"></i> 1.1.2.2.2.00.00 - CLIENTES - INTRA OFSS</td>
            <td align="right" data-saldo="3161962.3" data-nat="D">R$ 3.161.962,30 D</td>
            <td align="right" data-saldo="3161962.3" data-nat="D">R$ 1.558.611,16 D</td>
            <td align="right" data-saldo="3161962.3" data-nat="D">R$ 4.720.573,46 D</td></tr><tr class="filho112220000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.1.2.2.2.01.00 - FATURAS/DUPLICATAS A RECEBER</td>
            <td align="right" data-saldo="3161962.3" data-nat="D">R$ 3.161.962,30 D</td>
            <td align="right" data-saldo="3161962.3" data-nat="D">R$ 1.558.611,16 D</td>
            <td align="right" data-saldo="3161962.3" data-nat="D">R$ 4.720.573,46 D</td></tr><tr class="filho112000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="112500000"></i> 1.1.2.5.0.00.00 - DÍVIDA ATIVA TRIBUTÁRIA</td>
            <td align="right" data-saldo="495897580.72" data-nat="D">R$ 495.897.580,72 D</td>
            <td align="right" data-saldo="495897580.72" data-nat="C">R$ 1.860.246,41 C</td>
            <td align="right" data-saldo="495897580.72" data-nat="D">R$ 494.037.334,31 D</td></tr><tr class="filho112500000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="112510000"></i> 1.1.2.5.1.00.00 - DÍVIDA ATIVA TRIBUTÁRIA - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="495897580.72" data-nat="D">R$ 495.897.580,72 D</td>
            <td align="right" data-saldo="495897580.72" data-nat="C">R$ 1.860.246,41 C</td>
            <td align="right" data-saldo="495897580.72" data-nat="D">R$ 494.037.334,31 D</td></tr><tr class="filho112510000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.1.2.5.1.99.00 - DEMAIS DÍVIDAS ATIVAS TRIBUTÁRIAS</td>
            <td align="right" data-saldo="495897580.72" data-nat="D">R$ 495.897.580,72 D</td>
            <td align="right" data-saldo="495897580.72" data-nat="C">R$ 1.860.246,41 C</td>
            <td align="right" data-saldo="495897580.72" data-nat="D">R$ 494.037.334,31 D</td></tr><tr class="filho110000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="113000000"></i> 1.1.3.0.0.00.00 - DEMAIS CRÉDITOS E VALORES A CURTO PRAZO</td>
            <td align="right" data-saldo="3798242.5" data-nat="D">R$ 3.798.242,50 D</td>
            <td align="right" data-saldo="3798242.5" data-nat="C">R$ 1.799.851,82 C</td>
            <td align="right" data-saldo="3798242.5" data-nat="D">R$ 1.998.390,68 D</td></tr><tr class="filho113000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="113100000"></i> 1.1.3.1.0.00.00 - ADIANTAMENTOS CONCEDIDOS</td>
            <td align="right" data-saldo="319500" data-nat="D">R$ 319.500,00 D</td>
            <td align="right" data-saldo="319500" data-nat="C">R$ 237.200,00 C</td>
            <td align="right" data-saldo="319500" data-nat="D">R$ 82.300,00 D</td></tr><tr class="filho113100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="113110000"></i> 1.1.3.1.1.00.00 - ADIANTAMENTOS CONCEDIDOS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="319500" data-nat="D">R$ 319.500,00 D</td>
            <td align="right" data-saldo="319500" data-nat="C">R$ 237.200,00 C</td>
            <td align="right" data-saldo="319500" data-nat="D">R$ 82.300,00 D</td></tr><tr class="filho113110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.1.3.1.1.02.00 - SUPRIMENTO DE FUNDOS</td>
            <td align="right" data-saldo="319500" data-nat="D">R$ 319.500,00 D</td>
            <td align="right" data-saldo="319500" data-nat="C">R$ 237.200,00 C</td>
            <td align="right" data-saldo="319500" data-nat="D">R$ 82.300,00 D</td></tr><tr class="filho113000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="113200000"></i> 1.1.3.2.0.00.00 - TRIBUTOS A RECUPERAR/COMPENSAR</td>
            <td align="right" data-saldo="1519883.09" data-nat="D">R$ 1.519.883,09 D</td>
            <td align="right" data-saldo="1519883.09" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="1519883.09" data-nat="D">R$ 1.519.883,09 D</td></tr><tr class="filho113200000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="113210000"></i> 1.1.3.2.1.00.00 - TRIBUTOS A RECUPERAR/COMPENSAR - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="1519883.09" data-nat="D">R$ 1.519.883,09 D</td>
            <td align="right" data-saldo="1519883.09" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="1519883.09" data-nat="D">R$ 1.519.883,09 D</td></tr><tr class="filho113210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.1.3.2.1.08.00 - IPVA A COMPENSAR</td>
            <td align="right" data-saldo="1519883.09" data-nat="D">R$ 1.519.883,09 D</td>
            <td align="right" data-saldo="1519883.09" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="1519883.09" data-nat="D">R$ 1.519.883,09 D</td></tr><tr class="filho113000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="113800000"></i> 1.1.3.8.0.00.00 - OUTROS CRÉDITOS A RECEBER E VALORES A CURTO PRAZO</td>
            <td align="right" data-saldo="1958859.41" data-nat="D">R$ 1.958.859,41 D</td>
            <td align="right" data-saldo="1958859.41" data-nat="C">R$ 1.562.651,82 C</td>
            <td align="right" data-saldo="1958859.41" data-nat="D">R$ 396.207,59 D</td></tr><tr class="filho113800000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="113810000"></i> 1.1.3.8.1.00.00 - OUTROS CRÉDITOS A RECEBER E VALORES A CURTO PRAZO - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="1958859.41" data-nat="D">R$ 1.958.859,41 D</td>
            <td align="right" data-saldo="1958859.41" data-nat="C">R$ 1.562.651,82 C</td>
            <td align="right" data-saldo="1958859.41" data-nat="D">R$ 396.207,59 D</td></tr><tr class="filho113810000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.1.3.8.1.06.00 - VALORES EM TRÂNSITO REALIZÁVEIS A CURTO PRAZO</td>
            <td align="right" data-saldo="1958859.41" data-nat="D">R$ 1.958.859,41 D</td>
            <td align="right" data-saldo="1958859.41" data-nat="C">R$ 1.562.651,82 C</td>
            <td align="right" data-saldo="1958859.41" data-nat="D">R$ 396.207,59 D</td></tr><tr class="filho110000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="115000000"></i> 1.1.5.0.0.00.00 - ESTOQUES</td>
            <td align="right" data-saldo="346622577.9" data-nat="D">R$ 346.622.577,90 D</td>
            <td align="right" data-saldo="346622577.9" data-nat="D">R$ 6.894.706,76 D</td>
            <td align="right" data-saldo="346622577.9" data-nat="D">R$ 353.517.284,66 D</td></tr><tr class="filho115000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="115600000"></i> 1.1.5.6.0.00.00 - ALMOXARIFADO</td>
            <td align="right" data-saldo="346622577.9" data-nat="D">R$ 346.622.577,90 D</td>
            <td align="right" data-saldo="346622577.9" data-nat="D">R$ 6.894.706,76 D</td>
            <td align="right" data-saldo="346622577.9" data-nat="D">R$ 353.517.284,66 D</td></tr><tr class="filho115600000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="115610000"></i> 1.1.5.6.1.00.00 - ALMOXARIFADO - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="346622577.9" data-nat="D">R$ 346.622.577,90 D</td>
            <td align="right" data-saldo="346622577.9" data-nat="D">R$ 6.894.706,76 D</td>
            <td align="right" data-saldo="346622577.9" data-nat="D">R$ 353.517.284,66 D</td></tr><tr class="filho115610000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.1.5.6.1.01.00 - MATERIAL DE CONSUMO</td>
            <td align="right" data-saldo="346622577.9" data-nat="D">R$ 346.622.577,90 D</td>
            <td align="right" data-saldo="346622577.9" data-nat="D">R$ 6.894.706,76 D</td>
            <td align="right" data-saldo="346622577.9" data-nat="D">R$ 353.517.284,66 D</td></tr><tr class="filho100000000 filho filho-hide nivel1 nivelPadrao">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="120000000"></i> 1.2.0.0.0.00.00 - ATIVO NÃO CIRCULANTE</td>
            <td align="right" data-saldo="4045633963.18" data-nat="D">R$ 4.045.633.963,18 D</td>
            <td align="right" data-saldo="4045633963.18" data-nat="D">R$ 28.123.736,30 D</td>
            <td align="right" data-saldo="4045633963.18" data-nat="D">R$ 4.073.757.699,48 D</td></tr><tr class="filho120000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="122000000"></i> 1.2.2.0.0.00.00 - INVESTIMENTOS</td>
            <td align="right" data-saldo="75238208.39" data-nat="D">R$ 75.238.208,39 D</td>
            <td align="right" data-saldo="75238208.39" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="75238208.39" data-nat="D">R$ 75.238.208,39 D</td></tr><tr class="filho122000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="122100000"></i> 1.2.2.1.0.00.00 - PARTICIPAÇÕES PERMANENTES</td>
            <td align="right" data-saldo="75238208.39" data-nat="D">R$ 75.238.208,39 D</td>
            <td align="right" data-saldo="75238208.39" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="75238208.39" data-nat="D">R$ 75.238.208,39 D</td></tr><tr class="filho122100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="122110000"></i> 1.2.2.1.1.00.00 - PARTICIPAÇÕES PERMANENTES - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="75238208.39" data-nat="D">R$ 75.238.208,39 D</td>
            <td align="right" data-saldo="75238208.39" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="75238208.39" data-nat="D">R$ 75.238.208,39 D</td></tr><tr class="filho122110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="122110100"></i> 1.2.2.1.1.01.00 - PARTICIPAÇÕES AVALIADAS PELO MÉTODO DE EQUIVALÊNCIA PATRIMONIAL</td>
            <td align="right" data-saldo="75225616.66" data-nat="D">R$ 75.225.616,66 D</td>
            <td align="right" data-saldo="75225616.66" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="75225616.66" data-nat="D">R$ 75.225.616,66 D</td></tr><tr class="filho122110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.2.1.1.01.01 - PARTICIPAÇÕES EM SOCIEDADES CONTROLADAS</td>
            <td align="right" data-saldo="75225616.66" data-nat="D">R$ 75.225.616,66 D</td>
            <td align="right" data-saldo="75225616.66" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="75225616.66" data-nat="D">R$ 75.225.616,66 D</td></tr><tr class="filho122110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="122110200"></i> 1.2.2.1.1.02.00 - PARTICIPAÇÕES AVALIADAS PELO MÉTODO DE CUSTO</td>
            <td align="right" data-saldo="12591.73" data-nat="D">R$ 12.591,73 D</td>
            <td align="right" data-saldo="12591.73" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="12591.73" data-nat="D">R$ 12.591,73 D</td></tr><tr class="filho122110200 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.2.1.1.02.99 - OUTRAS PARTICIPAÇÕES</td>
            <td align="right" data-saldo="12591.73" data-nat="D">R$ 12.591,73 D</td>
            <td align="right" data-saldo="12591.73" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="12591.73" data-nat="D">R$ 12.591,73 D</td></tr><tr class="filho120000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="123000000"></i> 1.2.3.0.0.00.00 - IMOBILIZADO</td>
            <td align="right" data-saldo="3970361992.79" data-nat="D">R$ 3.970.361.992,79 D</td>
            <td align="right" data-saldo="3970361992.79" data-nat="D">R$ 28.123.736,30 D</td>
            <td align="right" data-saldo="3970361992.79" data-nat="D">R$ 3.998.485.729,09 D</td></tr><tr class="filho123000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="123100000"></i> 1.2.3.1.0.00.00 - BENS MOVEIS</td>
            <td align="right" data-saldo="1054280963.36" data-nat="D">R$ 1.054.280.963,36 D</td>
            <td align="right" data-saldo="1054280963.36" data-nat="D">R$ 11.624.857,81 D</td>
            <td align="right" data-saldo="1054280963.36" data-nat="D">R$ 1.065.905.821,17 D</td></tr><tr class="filho123100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="123110000"></i> 1.2.3.1.1.00.00 - BENS MOVEIS- CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="1054280963.36" data-nat="D">R$ 1.054.280.963,36 D</td>
            <td align="right" data-saldo="1054280963.36" data-nat="D">R$ 11.624.857,81 D</td>
            <td align="right" data-saldo="1054280963.36" data-nat="D">R$ 1.065.905.821,17 D</td></tr><tr class="filho123110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="123110100"></i> 1.2.3.1.1.01.00 - MÁQUINAS, APARELHOS, EQUIPAMENTOS E FERRAMENTAS</td>
            <td align="right" data-saldo="401997094.72" data-nat="D">R$ 401.997.094,72 D</td>
            <td align="right" data-saldo="401997094.72" data-nat="D">R$ 2.054.805,64 D</td>
            <td align="right" data-saldo="401997094.72" data-nat="D">R$ 404.051.900,36 D</td></tr><tr class="filho123110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.1.1.01.01 - APARELHOS DE MEDIÇÃO E ORIENTAÇÃO</td>
            <td align="right" data-saldo="7577947.55" data-nat="D">R$ 7.577.947,55 D</td>
            <td align="right" data-saldo="7577947.55" data-nat="D">R$ 552.397,30 D</td>
            <td align="right" data-saldo="7577947.55" data-nat="D">R$ 8.130.344,85 D</td></tr><tr class="filho123110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.1.1.01.02 - APARELHOS E EQUIPAMENTOS DE COMUNICAÇÃO</td>
            <td align="right" data-saldo="29316256.45" data-nat="D">R$ 29.316.256,45 D</td>
            <td align="right" data-saldo="29316256.45" data-nat="D">R$ 41.812,01 D</td>
            <td align="right" data-saldo="29316256.45" data-nat="D">R$ 29.358.068,46 D</td></tr><tr class="filho123110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.1.1.01.03 - APARELHOS, EQUIPAMENTOS E UTENSÍLIOS MÉDICOS, ODONTOLÓGICOS, LABORATORIAIS E HOSPITALARES </td>
            <td align="right" data-saldo="102397647.71" data-nat="D">R$ 102.397.647,71 D</td>
            <td align="right" data-saldo="102397647.71" data-nat="D">R$ 496.310,57 D</td>
            <td align="right" data-saldo="102397647.71" data-nat="D">R$ 102.893.958,28 D</td></tr><tr class="filho123110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.1.1.01.04 - APARELHOS E EQUIPAMENTOS PARA ESPORTES E DIVERSÕES</td>
            <td align="right" data-saldo="271212.09" data-nat="D">R$ 271.212,09 D</td>
            <td align="right" data-saldo="271212.09" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="271212.09" data-nat="D">R$ 271.212,09 D</td></tr><tr class="filho123110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.1.1.01.05 - EQUIPAMENTO DE PROTEÇÃO, SEGURANÇA E SOCORRO</td>
            <td align="right" data-saldo="14287396.93" data-nat="D">R$ 14.287.396,93 D</td>
            <td align="right" data-saldo="14287396.93" data-nat="D">R$ 89.050,76 D</td>
            <td align="right" data-saldo="14287396.93" data-nat="D">R$ 14.376.447,69 D</td></tr><tr class="filho123110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.1.1.01.06 - MÁQUINAS E EQUIPAMENTOS INDUSTRIAIS</td>
            <td align="right" data-saldo="40721139.92" data-nat="D">R$ 40.721.139,92 D</td>
            <td align="right" data-saldo="40721139.92" data-nat="D">R$ 1.899,00 D</td>
            <td align="right" data-saldo="40721139.92" data-nat="D">R$ 40.723.038,92 D</td></tr><tr class="filho123110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.1.1.01.07 - MÁQUINAS E EQUIPAMENTOS ENERGÉTICOS</td>
            <td align="right" data-saldo="22687915.52" data-nat="D">R$ 22.687.915,52 D</td>
            <td align="right" data-saldo="22687915.52" data-nat="D">R$ 3.470,30 D</td>
            <td align="right" data-saldo="22687915.52" data-nat="D">R$ 22.691.385,82 D</td></tr><tr class="filho123110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.1.1.01.08 - MÁQUINAS E EQUIPAMENTOS GRÁFICOS</td>
            <td align="right" data-saldo="495797.93" data-nat="D">R$ 495.797,93 D</td>
            <td align="right" data-saldo="495797.93" data-nat="D">R$ 1.058,52 D</td>
            <td align="right" data-saldo="495797.93" data-nat="D">R$ 496.856,45 D</td></tr><tr class="filho123110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.1.1.01.09 - MÁQUINAS, FERRAMENTAS E UTENSÍLIOS DE OFICINA</td>
            <td align="right" data-saldo="15059322.86" data-nat="D">R$ 15.059.322,86 D</td>
            <td align="right" data-saldo="15059322.86" data-nat="D">R$ 6.600,38 D</td>
            <td align="right" data-saldo="15059322.86" data-nat="D">R$ 15.065.923,24 D</td></tr><tr class="filho123110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.1.1.01.10 - EQUIPAMENTOS DE MONTARIA</td>
            <td align="right" data-saldo="1869191.19" data-nat="D">R$ 1.869.191,19 D</td>
            <td align="right" data-saldo="1869191.19" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="1869191.19" data-nat="D">R$ 1.869.191,19 D</td></tr><tr class="filho123110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.1.1.01.12 - EQUIPAMENTOS, PEÇAS E ACESSÓRIOS PARA AUTOMÓVEIS</td>
            <td align="right" data-saldo="350559.38" data-nat="D">R$ 350.559,38 D</td>
            <td align="right" data-saldo="350559.38" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="350559.38" data-nat="D">R$ 350.559,38 D</td></tr><tr class="filho123110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.1.1.01.13 - EQUIPAMENTOS, PEÇAS E ACESSÓRIOS MARÍTIMOS</td>
            <td align="right" data-saldo="3161" data-nat="D">R$ 3.161,00 D</td>
            <td align="right" data-saldo="3161" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="3161" data-nat="D">R$ 3.161,00 D</td></tr><tr class="filho123110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.1.1.01.14 - EQUIPAMENTOS, PEÇAS E ACESSÓRIOS AERONÁUTICOS</td>
            <td align="right" data-saldo="63129.19" data-nat="D">R$ 63.129,19 D</td>
            <td align="right" data-saldo="63129.19" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="63129.19" data-nat="D">R$ 63.129,19 D</td></tr><tr class="filho123110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.1.1.01.16 - EQUIPAMENTOS DE MERGULHO E SALVAMENTO</td>
            <td align="right" data-saldo="1046188.87" data-nat="D">R$ 1.046.188,87 D</td>
            <td align="right" data-saldo="1046188.87" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="1046188.87" data-nat="D">R$ 1.046.188,87 D</td></tr><tr class="filho123110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.1.1.01.17 - EQUIPAMENTOS DE MANOBRAS E PATRULHAMENTO</td>
            <td align="right" data-saldo="153361.84" data-nat="D">R$ 153.361,84 D</td>
            <td align="right" data-saldo="153361.84" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="153361.84" data-nat="D">R$ 153.361,84 D</td></tr><tr class="filho123110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.1.1.01.18 - EQUIPAMENTOS DE PROTEÇÃO E VIGILÂNCIA AMBIENTAL</td>
            <td align="right" data-saldo="60360" data-nat="D">R$ 60.360,00 D</td>
            <td align="right" data-saldo="60360" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="60360" data-nat="D">R$ 60.360,00 D</td></tr><tr class="filho123110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.1.1.01.20 - MÁQUINAS, EQUIPAMENTOS E UTENSÍLIOS RODOVIÁRIOS </td>
            <td align="right" data-saldo="87291452.09" data-nat="D">R$ 87.291.452,09 D</td>
            <td align="right" data-saldo="87291452.09" data-nat="D">R$ 6.496,76 D</td>
            <td align="right" data-saldo="87291452.09" data-nat="D">R$ 87.297.948,85 D</td></tr><tr class="filho123110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.1.1.01.21 - EQUIPAMENTOS HIDRÁULICOS E ELÉTRICOS</td>
            <td align="right" data-saldo="18364556.82" data-nat="D">R$ 18.364.556,82 D</td>
            <td align="right" data-saldo="18364556.82" data-nat="D">R$ 55.329,23 D</td>
            <td align="right" data-saldo="18364556.82" data-nat="D">R$ 18.419.886,05 D</td></tr><tr class="filho123110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.1.1.01.99 - OUTRAS MÁQUINAS, APARELHOS, EQUIPAMENTOS E FERRAMENTAS</td>
            <td align="right" data-saldo="59980497.38" data-nat="D">R$ 59.980.497,38 D</td>
            <td align="right" data-saldo="59980497.38" data-nat="D">R$ 800.380,81 D</td>
            <td align="right" data-saldo="59980497.38" data-nat="D">R$ 60.780.878,19 D</td></tr><tr class="filho123110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="123110200"></i> 1.2.3.1.1.02.00 - BENS DE INFORMÁTICA</td>
            <td align="right" data-saldo="115561571.28" data-nat="D">R$ 115.561.571,28 D</td>
            <td align="right" data-saldo="115561571.28" data-nat="D">R$ 983.032,11 D</td>
            <td align="right" data-saldo="115561571.28" data-nat="D">R$ 116.544.603,39 D</td></tr><tr class="filho123110200 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.1.1.02.01 - EQUIPAMENTOS DE PROCESSAMENTO DE DADOS</td>
            <td align="right" data-saldo="115561571.28" data-nat="D">R$ 115.561.571,28 D</td>
            <td align="right" data-saldo="115561571.28" data-nat="D">R$ 983.032,11 D</td>
            <td align="right" data-saldo="115561571.28" data-nat="D">R$ 116.544.603,39 D</td></tr><tr class="filho123110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="123110300"></i> 1.2.3.1.1.03.00 - MÓVEIS E UTENSÍLIOS</td>
            <td align="right" data-saldo="145844497.29" data-nat="D">R$ 145.844.497,29 D</td>
            <td align="right" data-saldo="145844497.29" data-nat="D">R$ 605.015,27 D</td>
            <td align="right" data-saldo="145844497.29" data-nat="D">R$ 146.449.512,56 D</td></tr><tr class="filho123110300 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.1.1.03.01 - APARELHOS E UTENSÍLIOS DOMÉSTICOS</td>
            <td align="right" data-saldo="13330566.82" data-nat="D">R$ 13.330.566,82 D</td>
            <td align="right" data-saldo="13330566.82" data-nat="D">R$ 13.435,00 D</td>
            <td align="right" data-saldo="13330566.82" data-nat="D">R$ 13.344.001,82 D</td></tr><tr class="filho123110300 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.1.1.03.02 - MÁQUINAS E UTENSÍLIOS DE ESCRITÓRIO</td>
            <td align="right" data-saldo="683494.22" data-nat="D">R$ 683.494,22 D</td>
            <td align="right" data-saldo="683494.22" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="683494.22" data-nat="D">R$ 683.494,22 D</td></tr><tr class="filho123110300 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.1.1.03.03 - MOBILIÁRIO EM GERAL</td>
            <td align="right" data-saldo="131830436.25" data-nat="D">R$ 131.830.436,25 D</td>
            <td align="right" data-saldo="131830436.25" data-nat="D">R$ 591.580,27 D</td>
            <td align="right" data-saldo="131830436.25" data-nat="D">R$ 132.422.016,52 D</td></tr><tr class="filho123110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="123110400"></i> 1.2.3.1.1.04.00 - MATERIAIS CULTURAIS, EDUCACIONAIS E DE COMUNICAÇÃO</td>
            <td align="right" data-saldo="35233147.37" data-nat="D">R$ 35.233.147,37 D</td>
            <td align="right" data-saldo="35233147.37" data-nat="D">R$ 162.974,82 D</td>
            <td align="right" data-saldo="35233147.37" data-nat="D">R$ 35.396.122,19 D</td></tr><tr class="filho123110400 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.1.1.04.01 - BANDEIRAS, FLÂMULAS E INSÍGNIAS</td>
            <td align="right" data-saldo="10539.76" data-nat="D">R$ 10.539,76 D</td>
            <td align="right" data-saldo="10539.76" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="10539.76" data-nat="D">R$ 10.539,76 D</td></tr><tr class="filho123110400 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.1.1.04.02 - COLEÇÕES E MATERIAIS BIBLIOGRÁFICOS</td>
            <td align="right" data-saldo="17708304.96" data-nat="D">R$ 17.708.304,96 D</td>
            <td align="right" data-saldo="17708304.96" data-nat="D">R$ 55,89 D</td>
            <td align="right" data-saldo="17708304.96" data-nat="D">R$ 17.708.360,85 D</td></tr><tr class="filho123110400 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.1.1.04.04 - INSTRUMENTOS MUSICAIS E ARTÍSTICOS</td>
            <td align="right" data-saldo="2405297.79" data-nat="D">R$ 2.405.297,79 D</td>
            <td align="right" data-saldo="2405297.79" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="2405297.79" data-nat="D">R$ 2.405.297,79 D</td></tr><tr class="filho123110400 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.1.1.04.05 - EQUIPAMENTOS PARA ÁUDIO, VÍDEO E FOTO</td>
            <td align="right" data-saldo="14116722.66" data-nat="D">R$ 14.116.722,66 D</td>
            <td align="right" data-saldo="14116722.66" data-nat="D">R$ 162.918,93 D</td>
            <td align="right" data-saldo="14116722.66" data-nat="D">R$ 14.279.641,59 D</td></tr><tr class="filho123110400 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.1.1.04.06 - OBRAS DE ARTE E PEÇAS PARA EXPOSIÇÃO</td>
            <td align="right" data-saldo="992282.2" data-nat="D">R$ 992.282,20 D</td>
            <td align="right" data-saldo="992282.2" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="992282.2" data-nat="D">R$ 992.282,20 D</td></tr><tr class="filho123110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="123110500"></i> 1.2.3.1.1.05.00 - VEÍCULOS</td>
            <td align="right" data-saldo="329354405.24" data-nat="D">R$ 329.354.405,24 D</td>
            <td align="right" data-saldo="329354405.24" data-nat="D">R$ 7.108.560,00 D</td>
            <td align="right" data-saldo="329354405.24" data-nat="D">R$ 336.462.965,24 D</td></tr><tr class="filho123110500 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.1.1.05.01 - VEÍCULOS EM GERAL</td>
            <td align="right" data-saldo="9157722.89" data-nat="D">R$ 9.157.722,89 D</td>
            <td align="right" data-saldo="9157722.89" data-nat="D">R$ 7.610,00 D</td>
            <td align="right" data-saldo="9157722.89" data-nat="D">R$ 9.165.332,89 D</td></tr><tr class="filho123110500 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.1.1.05.02 - VEÍCULOS FERROVIÁRIOS</td>
            <td align="right" data-saldo="4686" data-nat="D">R$ 4.686,00 D</td>
            <td align="right" data-saldo="4686" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="4686" data-nat="D">R$ 4.686,00 D</td></tr><tr class="filho123110500 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.1.1.05.03 - VEÍCULOS DE TRAÇÃO MECÂNICA</td>
            <td align="right" data-saldo="298399426.69" data-nat="D">R$ 298.399.426,69 D</td>
            <td align="right" data-saldo="298399426.69" data-nat="D">R$ 7.100.950,00 D</td>
            <td align="right" data-saldo="298399426.69" data-nat="D">R$ 305.500.376,69 D</td></tr><tr class="filho123110500 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.1.1.05.05 - AERONAVES</td>
            <td align="right" data-saldo="7945000" data-nat="D">R$ 7.945.000,00 D</td>
            <td align="right" data-saldo="7945000" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="7945000" data-nat="D">R$ 7.945.000,00 D</td></tr><tr class="filho123110500 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.1.1.05.06 - EMBARCAÇÕES</td>
            <td align="right" data-saldo="13847569.66" data-nat="D">R$ 13.847.569,66 D</td>
            <td align="right" data-saldo="13847569.66" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="13847569.66" data-nat="D">R$ 13.847.569,66 D</td></tr><tr class="filho123110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.1.1.09.00 - ARMAMENTOS</td>
            <td align="right" data-saldo="10438594.04" data-nat="D">R$ 10.438.594,04 D</td>
            <td align="right" data-saldo="10438594.04" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="10438594.04" data-nat="D">R$ 10.438.594,04 D</td></tr><tr class="filho123110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="123119900"></i> 1.2.3.1.1.99.00 - DEMAIS BENS MÓVEIS</td>
            <td align="right" data-saldo="15851653.42" data-nat="D">R$ 15.851.653,42 D</td>
            <td align="right" data-saldo="15851653.42" data-nat="D">R$ 710.469,97 D</td>
            <td align="right" data-saldo="15851653.42" data-nat="D">R$ 16.562.123,39 D</td></tr><tr class="filho123119900 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.1.1.99.08 - BENS MÓVEIS A CLASSIFICAR</td>
            <td align="right" data-saldo="12208833.8" data-nat="D">R$ 12.208.833,80 D</td>
            <td align="right" data-saldo="12208833.8" data-nat="D">R$ 684.303,75 D</td>
            <td align="right" data-saldo="12208833.8" data-nat="D">R$ 12.893.137,55 D</td></tr><tr class="filho123119900 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.1.1.99.99 - OUTROS BENS MÓVEIS</td>
            <td align="right" data-saldo="3642819.62" data-nat="D">R$ 3.642.819,62 D</td>
            <td align="right" data-saldo="3642819.62" data-nat="D">R$ 26.166,22 D</td>
            <td align="right" data-saldo="3642819.62" data-nat="D">R$ 3.668.985,84 D</td></tr><tr class="filho123000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="123200000"></i> 1.2.3.2.0.00.00 - BENS IMÓVEIS</td>
            <td align="right" data-saldo="3210950648.16" data-nat="D">R$ 3.210.950.648,16 D</td>
            <td align="right" data-saldo="3210950648.16" data-nat="D">R$ 21.282.010,12 D</td>
            <td align="right" data-saldo="3210950648.16" data-nat="D">R$ 3.232.232.658,28 D</td></tr><tr class="filho123200000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="123210000"></i> 1.2.3.2.1.00.00 - BENS IMOVEIS- CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="3210950648.16" data-nat="D">R$ 3.210.950.648,16 D</td>
            <td align="right" data-saldo="3210950648.16" data-nat="D">R$ 21.282.010,12 D</td>
            <td align="right" data-saldo="3210950648.16" data-nat="D">R$ 3.232.232.658,28 D</td></tr><tr class="filho123210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="123210100"></i> 1.2.3.2.1.01.00 - BENS DE USO ESPECIAL</td>
            <td align="right" data-saldo="112535734.5" data-nat="D">R$ 112.535.734,50 D</td>
            <td align="right" data-saldo="112535734.5" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="112535734.5" data-nat="D">R$ 112.535.734,50 D</td></tr><tr class="filho123210100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.2.1.01.01 - IMÓVEIS RESIDENCIAIS</td>
            <td align="right" data-saldo="504113.86" data-nat="D">R$ 504.113,86 D</td>
            <td align="right" data-saldo="504113.86" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="504113.86" data-nat="D">R$ 504.113,86 D</td></tr><tr class="filho123210100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.2.1.01.03 - EDIFÍCIOS</td>
            <td align="right" data-saldo="59948078.34" data-nat="D">R$ 59.948.078,34 D</td>
            <td align="right" data-saldo="59948078.34" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="59948078.34" data-nat="D">R$ 59.948.078,34 D</td></tr><tr class="filho123210100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.2.1.01.04 - TERRENOS/GLEBAS</td>
            <td align="right" data-saldo="17921506.15" data-nat="D">R$ 17.921.506,15 D</td>
            <td align="right" data-saldo="17921506.15" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="17921506.15" data-nat="D">R$ 17.921.506,15 D</td></tr><tr class="filho123210100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.2.1.01.05 - ARMAZÉNS/GALPÕES</td>
            <td align="right" data-saldo="115174.28" data-nat="D">R$ 115.174,28 D</td>
            <td align="right" data-saldo="115174.28" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="115174.28" data-nat="D">R$ 115.174,28 D</td></tr><tr class="filho123210100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.2.1.01.06 - AQUARTELAMENTOS</td>
            <td align="right" data-saldo="1727139.39" data-nat="D">R$ 1.727.139,39 D</td>
            <td align="right" data-saldo="1727139.39" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="1727139.39" data-nat="D">R$ 1.727.139,39 D</td></tr><tr class="filho123210100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.2.1.01.08 - IMÓVEIS DE USO EDUCACIONAL</td>
            <td align="right" data-saldo="1408296.53" data-nat="D">R$ 1.408.296,53 D</td>
            <td align="right" data-saldo="1408296.53" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="1408296.53" data-nat="D">R$ 1.408.296,53 D</td></tr><tr class="filho123210100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.2.1.01.10 - FAZENDAS, PARQUES E RESERVAS</td>
            <td align="right" data-saldo="11595351.94" data-nat="D">R$ 11.595.351,94 D</td>
            <td align="right" data-saldo="11595351.94" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="11595351.94" data-nat="D">R$ 11.595.351,94 D</td></tr><tr class="filho123210100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.2.1.01.11 - IMÓVEIS DE USO RECREATIVO</td>
            <td align="right" data-saldo="150520.4" data-nat="D">R$ 150.520,40 D</td>
            <td align="right" data-saldo="150520.4" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="150520.4" data-nat="D">R$ 150.520,40 D</td></tr><tr class="filho123210100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.2.1.01.13 - MUSEUS/PALÁCIOS</td>
            <td align="right" data-saldo="4118031.61" data-nat="D">R$ 4.118.031,61 D</td>
            <td align="right" data-saldo="4118031.61" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="4118031.61" data-nat="D">R$ 4.118.031,61 D</td></tr><tr class="filho123210100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.2.1.01.14 - LABORATÓRIOS/OBSERVATÓRIOS</td>
            <td align="right" data-saldo="25339.12" data-nat="D">R$ 25.339,12 D</td>
            <td align="right" data-saldo="25339.12" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="25339.12" data-nat="D">R$ 25.339,12 D</td></tr><tr class="filho123210100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.2.1.01.15 - HOSPITAIS E UNIDADES DE SAÚDE</td>
            <td align="right" data-saldo="1708252.27" data-nat="D">R$ 1.708.252,27 D</td>
            <td align="right" data-saldo="1708252.27" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="1708252.27" data-nat="D">R$ 1.708.252,27 D</td></tr><tr class="filho123210100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.2.1.01.17 - PRESÍDIOS/DELEGACIAS</td>
            <td align="right" data-saldo="7000" data-nat="D">R$ 7.000,00 D</td>
            <td align="right" data-saldo="7000" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="7000" data-nat="D">R$ 7.000,00 D</td></tr><tr class="filho123210100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.2.1.01.19 - COMPLEXOS/FÁBRICAS/USINAS</td>
            <td align="right" data-saldo="1266993.8" data-nat="D">R$ 1.266.993,80 D</td>
            <td align="right" data-saldo="1266993.8" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="1266993.8" data-nat="D">R$ 1.266.993,80 D</td></tr><tr class="filho123210100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.2.1.01.21 - ESTACIONAMENTOS E GARAGENS</td>
            <td align="right" data-saldo="196582.84" data-nat="D">R$ 196.582,84 D</td>
            <td align="right" data-saldo="196582.84" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="196582.84" data-nat="D">R$ 196.582,84 D</td></tr><tr class="filho123210100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.2.1.01.98 - OUTROS BENS IMÓVEIS DE USO ESPECIAL</td>
            <td align="right" data-saldo="11843353.97" data-nat="D">R$ 11.843.353,97 D</td>
            <td align="right" data-saldo="11843353.97" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="11843353.97" data-nat="D">R$ 11.843.353,97 D</td></tr><tr class="filho123210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="123210400"></i> 1.2.3.2.1.04.00 - BENS DOMINICAIS</td>
            <td align="right" data-saldo="35173858.61" data-nat="D">R$ 35.173.858,61 D</td>
            <td align="right" data-saldo="35173858.61" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="35173858.61" data-nat="D">R$ 35.173.858,61 D</td></tr><tr class="filho123210400 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.2.1.04.01 - EDIFÍCIOS</td>
            <td align="right" data-saldo="465664.55" data-nat="D">R$ 465.664,55 D</td>
            <td align="right" data-saldo="465664.55" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="465664.55" data-nat="D">R$ 465.664,55 D</td></tr><tr class="filho123210400 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.2.1.04.03 - ARMAZÉNS </td>
            <td align="right" data-saldo="1153632.49" data-nat="D">R$ 1.153.632,49 D</td>
            <td align="right" data-saldo="1153632.49" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="1153632.49" data-nat="D">R$ 1.153.632,49 D</td></tr><tr class="filho123210400 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.2.1.04.04 - CASAS</td>
            <td align="right" data-saldo="23900" data-nat="D">R$ 23.900,00 D</td>
            <td align="right" data-saldo="23900" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="23900" data-nat="D">R$ 23.900,00 D</td></tr><tr class="filho123210400 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.2.1.04.12 - SALAS</td>
            <td align="right" data-saldo="5580470.24" data-nat="D">R$ 5.580.470,24 D</td>
            <td align="right" data-saldo="5580470.24" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="5580470.24" data-nat="D">R$ 5.580.470,24 D</td></tr><tr class="filho123210400 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.2.1.04.13 - TERRENOS </td>
            <td align="right" data-saldo="25640191.33" data-nat="D">R$ 25.640.191,33 D</td>
            <td align="right" data-saldo="25640191.33" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="25640191.33" data-nat="D">R$ 25.640.191,33 D</td></tr><tr class="filho123210400 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.2.1.04.17 - GLEBAS URBANIZADAS</td>
            <td align="right" data-saldo="2310000" data-nat="D">R$ 2.310.000,00 D</td>
            <td align="right" data-saldo="2310000" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="2310000" data-nat="D">R$ 2.310.000,00 D</td></tr><tr class="filho123210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="123210500"></i> 1.2.3.2.1.05.00 - BENS DE USO COMUM DO POVO</td>
            <td align="right" data-saldo="473219480.49" data-nat="D">R$ 473.219.480,49 D</td>
            <td align="right" data-saldo="473219480.49" data-nat="D">R$ 10.700.186,52 D</td>
            <td align="right" data-saldo="473219480.49" data-nat="D">R$ 483.919.667,01 D</td></tr><tr class="filho123210500 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.2.1.05.01 - RUAS</td>
            <td align="right" data-saldo="287695335.47" data-nat="D">R$ 287.695.335,47 D</td>
            <td align="right" data-saldo="287695335.47" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="287695335.47" data-nat="D">R$ 287.695.335,47 D</td></tr><tr class="filho123210500 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.2.1.05.02 - PRAÇAS</td>
            <td align="right" data-saldo="788014.64" data-nat="D">R$ 788.014,64 D</td>
            <td align="right" data-saldo="788014.64" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="788014.64" data-nat="D">R$ 788.014,64 D</td></tr><tr class="filho123210500 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.2.1.05.03 - ESTRADAS</td>
            <td align="right" data-saldo="1862948.72" data-nat="D">R$ 1.862.948,72 D</td>
            <td align="right" data-saldo="1862948.72" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="1862948.72" data-nat="D">R$ 1.862.948,72 D</td></tr><tr class="filho123210500 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.2.1.05.06 - SISTEMAS DE ESGOTO E/OU DE ABASTECIMENTO DE ÁGUA</td>
            <td align="right" data-saldo="166061614.23" data-nat="D">R$ 166.061.614,23 D</td>
            <td align="right" data-saldo="166061614.23" data-nat="D">R$ 10.700.186,52 D</td>
            <td align="right" data-saldo="166061614.23" data-nat="D">R$ 176.761.800,75 D</td></tr><tr class="filho123210500 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.2.1.05.07 - SISTEMAS DE ABASTECIMETNO DE ENERGIA</td>
            <td align="right" data-saldo="360127.34" data-nat="D">R$ 360.127,34 D</td>
            <td align="right" data-saldo="360127.34" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="360127.34" data-nat="D">R$ 360.127,34 D</td></tr><tr class="filho123210500 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.2.1.05.99 - OUTROS BENS DE USO COMUM DO POVO</td>
            <td align="right" data-saldo="16451440.09" data-nat="D">R$ 16.451.440,09 D</td>
            <td align="right" data-saldo="16451440.09" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="16451440.09" data-nat="D">R$ 16.451.440,09 D</td></tr><tr class="filho123210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="123210600"></i> 1.2.3.2.1.06.00 - BENS IMÓVEIS EM ANDAMENTO</td>
            <td align="right" data-saldo="2471777439.53" data-nat="D">R$ 2.471.777.439,53 D</td>
            <td align="right" data-saldo="2471777439.53" data-nat="D">R$ 8.113.996,88 D</td>
            <td align="right" data-saldo="2471777439.53" data-nat="D">R$ 2.479.891.436,41 D</td></tr><tr class="filho123210600 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.2.1.06.01 - OBRAS EM ANDAMENTO</td>
            <td align="right" data-saldo="2430460535.8" data-nat="D">R$ 2.430.460.535,80 D</td>
            <td align="right" data-saldo="2430460535.8" data-nat="D">R$ 8.113.996,88 D</td>
            <td align="right" data-saldo="2430460535.8" data-nat="D">R$ 2.438.574.532,68 D</td></tr><tr class="filho123210600 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.2.1.06.05 - ESTUDOS E PROJETOS</td>
            <td align="right" data-saldo="41316903.73" data-nat="D">R$ 41.316.903,73 D</td>
            <td align="right" data-saldo="41316903.73" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="41316903.73" data-nat="D">R$ 41.316.903,73 D</td></tr><tr class="filho123210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.2.1.07.00 - INSTALAÇÕES</td>
            <td align="right" data-saldo="64034446.03" data-nat="D">R$ 64.034.446,03 D</td>
            <td align="right" data-saldo="64034446.03" data-nat="D">R$ 1.192.888,54 D</td>
            <td align="right" data-saldo="64034446.03" data-nat="D">R$ 65.227.334,57 D</td></tr><tr class="filho123210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.2.1.08.00 - BENFEITORIAS EM PROPRIEDADE DE TERCEIROS</td>
            <td align="right" data-saldo="633065.01" data-nat="D">R$ 633.065,01 D</td>
            <td align="right" data-saldo="633065.01" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="633065.01" data-nat="D">R$ 633.065,01 D</td></tr><tr class="filho123210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="123219900"></i> 1.2.3.2.1.99.00 - DEMAIS BENS IMÓVEIS</td>
            <td align="right" data-saldo="53576623.99" data-nat="D">R$ 53.576.623,99 D</td>
            <td align="right" data-saldo="53576623.99" data-nat="D">R$ 1.274.938,18 D</td>
            <td align="right" data-saldo="53576623.99" data-nat="D">R$ 54.851.562,17 D</td></tr><tr class="filho123219900 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.2.1.99.05 - BENS IMÓVEIS A CLASSIFICAR</td>
            <td align="right" data-saldo="11405742.36" data-nat="D">R$ 11.405.742,36 D</td>
            <td align="right" data-saldo="11405742.36" data-nat="D">R$ 1.274.938,18 D</td>
            <td align="right" data-saldo="11405742.36" data-nat="D">R$ 12.680.680,54 D</td></tr><tr class="filho123219900 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.2.1.99.99 - OUTROS BENS IMÓVEIS</td>
            <td align="right" data-saldo="42170881.63" data-nat="D">R$ 42.170.881,63 D</td>
            <td align="right" data-saldo="42170881.63" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="42170881.63" data-nat="D">R$ 42.170.881,63 D</td></tr><tr class="filho123000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="123800000"></i> 1.2.3.8.0.00.00 - (-) DEPRECIAÇÃO, EXAUSTÃO E AMORTIZAÇÃO ACUMULADAS</td>
            <td align="right" data-saldo="-294869618.73" data-nat="C">R$ 294.869.618,73 C</td>
            <td align="right" data-saldo="-294869618.73" data-nat="C">R$ 4.783.131,63 C</td>
            <td align="right" data-saldo="-294869618.73" data-nat="C">R$ 299.652.750,36 C</td></tr><tr class="filho123800000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="123810000"></i> 1.2.3.8.1.00.00 - (-) DEPRECIAÇÃO, EXAUSTÃO E AMORTIZAÇÃO ACUMULADAS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="-294869618.73" data-nat="C">R$ 294.869.618,73 C</td>
            <td align="right" data-saldo="-294869618.73" data-nat="C">R$ 4.783.131,63 C</td>
            <td align="right" data-saldo="-294869618.73" data-nat="C">R$ 299.652.750,36 C</td></tr><tr class="filho123810000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="123810100"></i> 1.2.3.8.1.01.00 - (-) DEPRECIAÇÃO ACUMULADA – BENS MÓVEIS</td>
            <td align="right" data-saldo="-285198031.08" data-nat="C">R$ 285.198.031,08 C</td>
            <td align="right" data-saldo="-285198031.08" data-nat="C">R$ 4.783.131,63 C</td>
            <td align="right" data-saldo="-285198031.08" data-nat="C">R$ 289.981.162,71 C</td></tr><tr class="filho123810100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.8.1.01.01 - (-) DEPRECIAÇÃO ACUMULADA DE MÁQUINAS, APARELHOS, EQUIPAMENTOS E FERRAMENTAS</td>
            <td align="right" data-saldo="-87148692.47" data-nat="C">R$ 87.148.692,47 C</td>
            <td align="right" data-saldo="-87148692.47" data-nat="C">R$ 1.342.152,45 C</td>
            <td align="right" data-saldo="-87148692.47" data-nat="C">R$ 88.490.844,92 C</td></tr><tr class="filho123810100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.8.1.01.02 - (-) DEPRECIAÇÃO ACUMULADA DE BENS DE INFORMÁTICA</td>
            <td align="right" data-saldo="-53593401.12" data-nat="C">R$ 53.593.401,12 C</td>
            <td align="right" data-saldo="-53593401.12" data-nat="C">R$ 780.089,51 C</td>
            <td align="right" data-saldo="-53593401.12" data-nat="C">R$ 54.373.490,63 C</td></tr><tr class="filho123810100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.8.1.01.03 - (-) DEPRECIAÇÃO ACUMULADA DE MÓVEIS E UTENSÍLIOS</td>
            <td align="right" data-saldo="-39525247.99" data-nat="C">R$ 39.525.247,99 C</td>
            <td align="right" data-saldo="-39525247.99" data-nat="C">R$ 743.458,82 C</td>
            <td align="right" data-saldo="-39525247.99" data-nat="C">R$ 40.268.706,81 C</td></tr><tr class="filho123810100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.8.1.01.04 - (-) DEPRECIAÇÃO ACUMULADA DE MATERIAIS CULTURAIS, EDUCACIONAIS E DE COMUNICAÇÃO</td>
            <td align="right" data-saldo="-7089125.18" data-nat="C">R$ 7.089.125,18 C</td>
            <td align="right" data-saldo="-7089125.18" data-nat="C">R$ 177.530,34 C</td>
            <td align="right" data-saldo="-7089125.18" data-nat="C">R$ 7.266.655,52 C</td></tr><tr class="filho123810100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.8.1.01.05 - (-) DEPRECIAÇÃO ACUMULADA DE VEÍCULOS</td>
            <td align="right" data-saldo="-78059789.05" data-nat="C">R$ 78.059.789,05 C</td>
            <td align="right" data-saldo="-78059789.05" data-nat="C">R$ 1.369.777,03 C</td>
            <td align="right" data-saldo="-78059789.05" data-nat="C">R$ 79.429.566,08 C</td></tr><tr class="filho123810100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.8.1.01.09 - (-) DEPRECIAÇÃO ACUMULADA DE ARMAMENTOS</td>
            <td align="right" data-saldo="-1154745.9" data-nat="C">R$ 1.154.745,90 C</td>
            <td align="right" data-saldo="-1154745.9" data-nat="C">R$ 20.283,83 C</td>
            <td align="right" data-saldo="-1154745.9" data-nat="C">R$ 1.175.029,73 C</td></tr><tr class="filho123810100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.8.1.01.10 - (-) DEPRECIAÇÃO ACUMULADA DE SEMOVENTES</td>
            <td align="right" data-saldo="-277748.7" data-nat="C">R$ 277.748,70 C</td>
            <td align="right" data-saldo="-277748.7" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="-277748.7" data-nat="C">R$ 277.748,70 C</td></tr><tr class="filho123810100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.8.1.01.99 - (-) DEPRECIAÇÃO ACUMULADA DE DEMAIS BENS MÓVEIS</td>
            <td align="right" data-saldo="-18349280.67" data-nat="C">R$ 18.349.280,67 C</td>
            <td align="right" data-saldo="-18349280.67" data-nat="C">R$ 349.839,65 C</td>
            <td align="right" data-saldo="-18349280.67" data-nat="C">R$ 18.699.120,32 C</td></tr><tr class="filho123810000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="123810200"></i> 1.2.3.8.1.02.00 - (-) DEPRECIAÇÃO ACUMULADA – BENS IMÓVEIS</td>
            <td align="right" data-saldo="-9671587.65" data-nat="C">R$ 9.671.587,65 C</td>
            <td align="right" data-saldo="-9671587.65" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="-9671587.65" data-nat="C">R$ 9.671.587,65 C</td></tr><tr class="filho123810200 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.8.1.02.01 - (-) DEPRECIAÇÃO ACUMULADA DE BENS DE USO ESPECIAL</td>
            <td align="right" data-saldo="-4725675.15" data-nat="C">R$ 4.725.675,15 C</td>
            <td align="right" data-saldo="-4725675.15" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="-4725675.15" data-nat="C">R$ 4.725.675,15 C</td></tr><tr class="filho123810200 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.3.8.1.02.99 - (-) DEPRECIAÇÃO ACUMULADA DE DEMAIS BENS IMÓVEIS</td>
            <td align="right" data-saldo="-4945912.5" data-nat="C">R$ 4.945.912,50 C</td>
            <td align="right" data-saldo="-4945912.5" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="-4945912.5" data-nat="C">R$ 4.945.912,50 C</td></tr><tr class="filho120000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="124000000"></i> 1.2.4.0.0.00.00 - INTANGÍVEL</td>
            <td align="right" data-saldo="33762" data-nat="D">R$ 33.762,00 D</td>
            <td align="right" data-saldo="33762" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="33762" data-nat="D">R$ 33.762,00 D</td></tr><tr class="filho124000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="124100000"></i> 1.2.4.1.0.00.00 - SOFTWARES</td>
            <td align="right" data-saldo="33762" data-nat="D">R$ 33.762,00 D</td>
            <td align="right" data-saldo="33762" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="33762" data-nat="D">R$ 33.762,00 D</td></tr><tr class="filho124100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="124110000"></i> 1.2.4.1.1.00.00 - SOFTWARES- CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="33762" data-nat="D">R$ 33.762,00 D</td>
            <td align="right" data-saldo="33762" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="33762" data-nat="D">R$ 33.762,00 D</td></tr><tr class="filho124110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.4.1.1.01.00 - SOFTWARES</td>
            <td align="right" data-saldo="7362" data-nat="D">R$ 7.362,00 D</td>
            <td align="right" data-saldo="7362" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="7362" data-nat="D">R$ 7.362,00 D</td></tr><tr class="filho124110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 1.2.4.1.1.02.00 - SOFTWARES EM DESENVOLVIMENTO</td>
            <td align="right" data-saldo="26400" data-nat="D">R$ 26.400,00 D</td>
            <td align="right" data-saldo="26400" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="26400" data-nat="D">R$ 26.400,00 D</td></tr>
            <tr class="filho0 filho filho-hide nivel0 nivelPadrao">
            <td><i class="fa fa-minus-circle js-abre-filhos" id="200000000"></i> 2.0.0.0.0.00.00 - PASSIVO E PATRIMÔNIO LIQUIDO</td>
            <td align="right" data-saldo="-7252914396.54" data-nat="C">R$ 7.252.914.396,54 C</td>
            <td align="right" data-saldo="-7252914396.54" data-nat="D">R$ 5.487.046.266,75 D</td>
            <td align="right" data-saldo="-7252914396.54" data-nat="C">R$ 1.765.868.129,79 C</td></tr><tr class="filho200000000 filho filho-hide nivel1 nivelPadrao">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="210000000"></i> 2.1.0.0.0.00.00 - PASSIVO CIRCULANTE</td>
            <td align="right" data-saldo="-104652946.89" data-nat="C">R$ 104.652.946,89 C</td>
            <td align="right" data-saldo="-104652946.89" data-nat="C">R$ 501.300.673,42 C</td>
            <td align="right" data-saldo="-104652946.89" data-nat="C">R$ 605.953.620,31 C</td></tr><tr class="filho210000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="211000000"></i> 2.1.1.0.0.00.00 - OBRIGAÇÕES TRABALHISTAS, PREVIDENCIÁRIAS E ASSISTENCIAIS A PAGAR A CURTO PRAZO</td>
            <td align="right" data-saldo="-24645186.96" data-nat="C">R$ 24.645.186,96 C</td>
            <td align="right" data-saldo="-24645186.96" data-nat="C">R$ 109.197.653,40 C</td>
            <td align="right" data-saldo="-24645186.96" data-nat="C">R$ 133.842.840,36 C</td></tr><tr class="filho211000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="211100000"></i> 2.1.1.1.0.00.00 - PESSOAL A PAGAR</td>
            <td align="right" data-saldo="-19447886" data-nat="C">R$ 19.447.886,00 C</td>
            <td align="right" data-saldo="-19447886" data-nat="C">R$ 85.895.499,52 C</td>
            <td align="right" data-saldo="-19447886" data-nat="C">R$ 105.343.385,52 C</td></tr><tr class="filho211100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="211110000"></i> 2.1.1.1.1.00.00 - PESSOAL A PAGAR - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="-19447886" data-nat="C">R$ 19.447.886,00 C</td>
            <td align="right" data-saldo="-19447886" data-nat="C">R$ 85.895.499,52 C</td>
            <td align="right" data-saldo="-19447886" data-nat="C">R$ 105.343.385,52 C</td></tr><tr class="filho211110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="211110100"></i> 2.1.1.1.1.01.00 - PESSOAL A PAGAR</td>
            <td align="right" data-saldo="-19447886" data-nat="C">R$ 19.447.886,00 C</td>
            <td align="right" data-saldo="-19447886" data-nat="C">R$ 4.879.920,25 C</td>
            <td align="right" data-saldo="-19447886" data-nat="C">R$ 24.327.806,25 C</td></tr><tr class="filho211110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.1.1.1.1.01.01 - SALÁRIOS, REMUNERAÇÕES E BENEFÍCIOS</td>
            <td align="right" data-saldo="-19447886" data-nat="C">R$ 19.447.886,00 C</td>
            <td align="right" data-saldo="-19447886" data-nat="C">R$ 4.879.920,25 C</td>
            <td align="right" data-saldo="-19447886" data-nat="C">R$ 24.327.806,25 C</td></tr><tr class="filho211110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="211110400"></i> 2.1.1.1.1.04.00 - PRECATÓRIOS DE PESSOAL - REGIME ESPECIAL</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 81.015.579,27 C</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 81.015.579,27 C</td></tr><tr class="filho211110400 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.1.1.1.1.04.03 - PRECATÓRIOS DE PESSOAL - REGIME ESPECIAL - A PARTIR DE 05/05/2000 - NÃO VENCIDOS</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 81.015.579,27 C</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 81.015.579,27 C</td></tr><tr class="filho211000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="211200000"></i> 2.1.1.2.0.00.00 - BENEFÍCIOS PREVIDENCIÁRIOS A PAGAR</td>
            <td align="right" data-saldo="-4010728.2" data-nat="C">R$ 4.010.728,20 C</td>
            <td align="right" data-saldo="-4010728.2" data-nat="D">R$ 4.010.728,20 D</td>
            <td align="right" data-saldo="-4010728.2" data-nat="C">R$ 0,00 C</td></tr><tr class="filho211200000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="211210000"></i> 2.1.1.2.1.00.00 - BENEFÍCIOS PREVIDENCIÁRIOS A PAGAR- CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="-4010728.2" data-nat="C">R$ 4.010.728,20 C</td>
            <td align="right" data-saldo="-4010728.2" data-nat="D">R$ 4.010.728,20 D</td>
            <td align="right" data-saldo="-4010728.2" data-nat="C">R$ 0,00 C</td></tr><tr class="filho211210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.1.1.2.1.01.00 - BENEFICIOS PREVIDENCIARIOS A PAGAR</td>
            <td align="right" data-saldo="-4010728.2" data-nat="C">R$ 4.010.728,20 C</td>
            <td align="right" data-saldo="-4010728.2" data-nat="D">R$ 4.010.728,20 D</td>
            <td align="right" data-saldo="-4010728.2" data-nat="C">R$ 0,00 C</td></tr><tr class="filho211000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="211300000"></i> 2.1.1.3.0.00.00 - BENEFÍCIOS ASSISTENCIAIS A PAGAR</td>
            <td align="right" data-saldo="-2016" data-nat="C">R$ 2.016,00 C</td>
            <td align="right" data-saldo="-2016" data-nat="D">R$ 2.016,00 D</td>
            <td align="right" data-saldo="-2016" data-nat="C">R$ 0,00 C</td></tr><tr class="filho211300000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="211310000"></i> 2.1.1.3.1.00.00 - BENEFÍCIOS ASSISTENCIAIS A PAGAR - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="-2016" data-nat="C">R$ 2.016,00 C</td>
            <td align="right" data-saldo="-2016" data-nat="D">R$ 2.016,00 D</td>
            <td align="right" data-saldo="-2016" data-nat="C">R$ 0,00 C</td></tr><tr class="filho211310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.1.1.3.1.01.00 - BENEFICIOS ASSISTENCIAIS A PAGAR</td>
            <td align="right" data-saldo="-2016" data-nat="C">R$ 2.016,00 C</td>
            <td align="right" data-saldo="-2016" data-nat="D">R$ 2.016,00 D</td>
            <td align="right" data-saldo="-2016" data-nat="C">R$ 0,00 C</td></tr><tr class="filho211000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="211400000"></i> 2.1.1.4.0.00.00 - ENCARGOS SOCIAIS A PAGAR</td>
            <td align="right" data-saldo="-1184556.76" data-nat="C">R$ 1.184.556,76 C</td>
            <td align="right" data-saldo="-1184556.76" data-nat="C">R$ 27.314.898,08 C</td>
            <td align="right" data-saldo="-1184556.76" data-nat="C">R$ 28.499.454,84 C</td></tr><tr class="filho211400000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="211410000"></i> 2.1.1.4.1.00.00 - ENCARGOS SOCIAIS A PAGAR-CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="-1081229.38" data-nat="C">R$ 1.081.229,38 C</td>
            <td align="right" data-saldo="-1081229.38" data-nat="C">R$ 645.886,14 C</td>
            <td align="right" data-saldo="-1081229.38" data-nat="C">R$ 1.727.115,52 C</td></tr><tr class="filho211410000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="211410100"></i> 2.1.1.4.1.01.00 - CONTRIBUIÇÕES AO RGPS A PAGAR</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 1.709.296,97 C</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 1.709.296,97 C</td></tr><tr class="filho211410100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.1.1.4.1.01.01 - CONTRIBUIÇÕES AO RGPS SOBRE SALÁRIOS E REMUNERAÇÕES</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 1.709.296,97 C</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 1.709.296,97 C</td></tr><tr class="filho211410000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.1.1.4.1.98.00 - OUTROS ENCARGOS SOCIAIS</td>
            <td align="right" data-saldo="-1081229.38" data-nat="C">R$ 1.081.229,38 C</td>
            <td align="right" data-saldo="-1081229.38" data-nat="D">R$ 1.063.410,83 D</td>
            <td align="right" data-saldo="-1081229.38" data-nat="C">R$ 17.818,55 C</td></tr><tr class="filho211400000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="211420000"></i> 2.1.1.4.2.00.00 - ENCARGOS SOCIAIS A PAGAR-INTRA OFSS</td>
            <td align="right" data-saldo="-28727.02" data-nat="C">R$ 28.727,02 C</td>
            <td align="right" data-saldo="-28727.02" data-nat="D">R$ 28.727,02 D</td>
            <td align="right" data-saldo="-28727.02" data-nat="C">R$ 0,00 C</td></tr><tr class="filho211420000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.1.1.4.2.99.00 - OUTROS ENCARGOS SOCIAIS</td>
            <td align="right" data-saldo="-28727.02" data-nat="C">R$ 28.727,02 C</td>
            <td align="right" data-saldo="-28727.02" data-nat="D">R$ 28.727,02 D</td>
            <td align="right" data-saldo="-28727.02" data-nat="C">R$ 0,00 C</td></tr><tr class="filho211400000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="211430000"></i> 2.1.1.4.3.00.00 - ENCARGOS SOCIAIS A PAGAR-INTER OFSS - UNIÃO</td>
            <td align="right" data-saldo="-74600.36" data-nat="C">R$ 74.600,36 C</td>
            <td align="right" data-saldo="-74600.36" data-nat="C">R$ 26.697.738,96 C</td>
            <td align="right" data-saldo="-74600.36" data-nat="C">R$ 26.772.339,32 C</td></tr><tr class="filho211430000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.1.1.4.3.05.00 - FGTS</td>
            <td align="right" data-saldo="-15283.56" data-nat="C">R$ 15.283,56 C</td>
            <td align="right" data-saldo="-15283.56" data-nat="C">R$ 245.431,84 C</td>
            <td align="right" data-saldo="-15283.56" data-nat="C">R$ 260.715,40 C</td></tr><tr class="filho211430000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.1.1.4.3.06.00 - CONTRIBUIÇÕES PREVIDENCIÁRIAS  - DÉBITO PARCELADO</td>
            <td align="right" data-saldo="-24417.91" data-nat="C">R$ 24.417,91 C</td>
            <td align="right" data-saldo="-24417.91" data-nat="C">R$ 10.274.924,16 C</td>
            <td align="right" data-saldo="-24417.91" data-nat="C">R$ 10.299.342,07 C</td></tr><tr class="filho211430000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.1.1.4.3.07.00 - CONTRIBUICÕES SOCIAIS - DÉBITOS PARCELADOS</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 15.242.823,11 C</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 15.242.823,11 C</td></tr><tr class="filho211430000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.1.1.4.3.98.00 - OUTROS ENCARGOS SOCIAIS</td>
            <td align="right" data-saldo="-34898.89" data-nat="C">R$ 34.898,89 C</td>
            <td align="right" data-saldo="-34898.89" data-nat="C">R$ 934.559,85 C</td>
            <td align="right" data-saldo="-34898.89" data-nat="C">R$ 969.458,74 C</td></tr><tr class="filho210000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="212000000"></i> 2.1.2.0.0.00.00 - EMPRÉSTIMOS E FINANCIAMENTOS A CURTO PRAZO</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 390.387.598,85 C</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 390.387.598,85 C</td></tr><tr class="filho212000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="212100000"></i> 2.1.2.1.0.00.00 - EMPRÉSTIMOS A CURTO PRAZO - INTERNO</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 241.180.350,25 C</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 241.180.350,25 C</td></tr><tr class="filho212100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="212110000"></i> 2.1.2.1.1.00.00 - EMPRÉSTIMOS A CURTO PRAZO – INTERNO - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 241.180.350,25 C</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 241.180.350,25 C</td></tr><tr class="filho212110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="212110200"></i> 2.1.2.1.1.02.00 - EMPRÉSTIMOS INTERNOS - EM CONTRATOS</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 157.595.999,25 C</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 157.595.999,25 C</td></tr><tr class="filho212110200 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.1.2.1.1.02.01 - CONTRATOS DE EMPRÉSTIMOS INTERNOS </td>
            <td align="right" data-saldo="0" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 157.595.999,25 C</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 157.595.999,25 C</td></tr><tr class="filho212110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.1.2.1.1.04.00 - FATURAS / DUPLICATAS DESCONTADAS</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 83.584.351,00 C</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 83.584.351,00 C</td></tr><tr class="filho212000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="212200000"></i> 2.1.2.2.0.00.00 - EMPRÉSTIMOS A CURTO PRAZO - EXTERNO</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 149.207.248,60 C</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 149.207.248,60 C</td></tr><tr class="filho212200000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="212210000"></i> 2.1.2.2.1.00.00 - EMPRÉSTIMOS A CURTO PRAZO- EXTERNO CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 149.207.248,60 C</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 149.207.248,60 C</td></tr><tr class="filho212210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.1.2.2.1.02.00 - EMPRÉSTIMOS EXTERNOS - EM CONTRATOS</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 149.207.248,60 C</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 149.207.248,60 C</td></tr><tr class="filho210000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="213000000"></i> 2.1.3.0.0.00.00 - FORNECEDORES E CONTAS A PAGAR A CURTO PRAZO</td>
            <td align="right" data-saldo="-68603626.89" data-nat="C">R$ 68.603.626,89 C</td>
            <td align="right" data-saldo="-68603626.89" data-nat="C">R$ 4.386.772,88 C</td>
            <td align="right" data-saldo="-68603626.89" data-nat="C">R$ 72.990.399,77 C</td></tr><tr class="filho213000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="213100000"></i> 2.1.3.1.0.00.00 - FORNECEDORES E CONTAS A PAGAR NACIONAIS A CURTO PRAZO</td>
            <td align="right" data-saldo="-68603626.89" data-nat="C">R$ 68.603.626,89 C</td>
            <td align="right" data-saldo="-68603626.89" data-nat="C">R$ 4.386.772,88 C</td>
            <td align="right" data-saldo="-68603626.89" data-nat="C">R$ 72.990.399,77 C</td></tr><tr class="filho213100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="213110000"></i> 2.1.3.1.1.00.00 - FORNECEDORES E CONTAS A PAGAR NACIONAIS A CURTO PRAZO - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="-65441664.59" data-nat="C">R$ 65.441.664,59 C</td>
            <td align="right" data-saldo="-65441664.59" data-nat="C">R$ 2.828.161,72 C</td>
            <td align="right" data-saldo="-65441664.59" data-nat="C">R$ 68.269.826,31 C</td></tr><tr class="filho213110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="213110100"></i> 2.1.3.1.1.01.00 - FORNECEDORES NACIONAIS</td>
            <td align="right" data-saldo="-65441664.59" data-nat="C">R$ 65.441.664,59 C</td>
            <td align="right" data-saldo="-65441664.59" data-nat="C">R$ 2.828.161,72 C</td>
            <td align="right" data-saldo="-65441664.59" data-nat="C">R$ 68.269.826,31 C</td></tr><tr class="filho213110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.1.3.1.1.01.01 - FORNECEDORES NÃO PARCELADOS A PAGAR</td>
            <td align="right" data-saldo="-63519385.49" data-nat="C">R$ 63.519.385,49 C</td>
            <td align="right" data-saldo="-63519385.49" data-nat="C">R$ 3.847.442,33 C</td>
            <td align="right" data-saldo="-63519385.49" data-nat="C">R$ 67.366.827,82 C</td></tr><tr class="filho213110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.1.3.1.1.01.99 - DEMAIS FORNECEDORES A PAGAR</td>
            <td align="right" data-saldo="-1922279.1" data-nat="C">R$ 1.922.279,10 C</td>
            <td align="right" data-saldo="-1922279.1" data-nat="D">R$ 1.019.280,61 D</td>
            <td align="right" data-saldo="-1922279.1" data-nat="C">R$ 902.998,49 C</td></tr><tr class="filho213100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.1.3.1.2.00.00 - FORNECEDORES E CONTAS A PAGAR NACIONAIS A CURTO PRAZO - INTRA OFSS</td>
            <td align="right" data-saldo="-3161962.3" data-nat="C">R$ 3.161.962,30 C</td>
            <td align="right" data-saldo="-3161962.3" data-nat="C">R$ 1.558.611,16 C</td>
            <td align="right" data-saldo="-3161962.3" data-nat="C">R$ 4.720.573,46 C</td></tr><tr class="filho210000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="214000000"></i> 2.1.4.0.0.00.00 - OBRIGAÇÕES FISCAIS A CURTO PRAZO</td>
            <td align="right" data-saldo="-366714.25" data-nat="C">R$ 366.714,25 C</td>
            <td align="right" data-saldo="-366714.25" data-nat="D">R$ 3.697,72 D</td>
            <td align="right" data-saldo="-366714.25" data-nat="C">R$ 363.016,53 C</td></tr><tr class="filho214000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="214100000"></i> 2.1.4.1.0.00.00 - OBRIGAÇÕES FISCAIS A CURTO PRAZO COM A UNIÃO</td>
            <td align="right" data-saldo="-366714.25" data-nat="C">R$ 366.714,25 C</td>
            <td align="right" data-saldo="-366714.25" data-nat="D">R$ 3.697,72 D</td>
            <td align="right" data-saldo="-366714.25" data-nat="C">R$ 363.016,53 C</td></tr><tr class="filho214100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="214110000"></i> 2.1.4.1.1.00.00 - OBRIGAÇÕES FISCAIS A CURTO PRAZO COM A UNIÃO - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="-366714.25" data-nat="C">R$ 366.714,25 C</td>
            <td align="right" data-saldo="-366714.25" data-nat="D">R$ 3.697,72 D</td>
            <td align="right" data-saldo="-366714.25" data-nat="C">R$ 363.016,53 C</td></tr><tr class="filho214110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.1.4.1.1.99.00 - OUTROS TRIBUTOS E CONTRIBUIÇÕES FEDERAIS A RECOLHER</td>
            <td align="right" data-saldo="-366714.25" data-nat="C">R$ 366.714,25 C</td>
            <td align="right" data-saldo="-366714.25" data-nat="D">R$ 3.697,72 D</td>
            <td align="right" data-saldo="-366714.25" data-nat="C">R$ 363.016,53 C</td></tr><tr class="filho210000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="215000000"></i> 2.1.5.0.0.00.00 - OBRIGAÇÕES DE REPARTIÇÃO A OUTROS ENTES</td>
            <td align="right" data-saldo="-1214589.74" data-nat="C">R$ 1.214.589,74 C</td>
            <td align="right" data-saldo="-1214589.74" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="-1214589.74" data-nat="C">R$ 1.214.589,74 C</td></tr><tr class="filho215000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="215100000"></i> 2.1.5.1.0.00.00 - OBRIGAÇÕES DE REPARTIÇÃO A OUTROS ENTES</td>
            <td align="right" data-saldo="-1214589.74" data-nat="C">R$ 1.214.589,74 C</td>
            <td align="right" data-saldo="-1214589.74" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="-1214589.74" data-nat="C">R$ 1.214.589,74 C</td></tr><tr class="filho215100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.1.5.1.3.00.00 - OBRIGAÇÕES DE REPARTIÇÃO A OUTROS ENTES - INTER OFSS - UNIÃO</td>
            <td align="right" data-saldo="-1214589.74" data-nat="C">R$ 1.214.589,74 C</td>
            <td align="right" data-saldo="-1214589.74" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="-1214589.74" data-nat="C">R$ 1.214.589,74 C</td></tr><tr class="filho210000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="218000000"></i> 2.1.8.0.0.00.00 - DEMAIS OBRIGAÇÕES A CURTO PRAZO</td>
            <td align="right" data-saldo="-9822829.05" data-nat="C">R$ 9.822.829,05 C</td>
            <td align="right" data-saldo="-9822829.05" data-nat="D">R$ 2.667.653,99 D</td>
            <td align="right" data-saldo="-9822829.05" data-nat="C">R$ 7.155.175,06 C</td></tr><tr class="filho218000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="218800000"></i> 2.1.8.8.0.00.00 - VALORES RESTITUÍVEIS</td>
            <td align="right" data-saldo="-7806065.23" data-nat="C">R$ 7.806.065,23 C</td>
            <td align="right" data-saldo="-7806065.23" data-nat="D">R$ 1.540.607,01 D</td>
            <td align="right" data-saldo="-7806065.23" data-nat="C">R$ 6.265.458,22 C</td></tr><tr class="filho218800000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="218810000"></i> 2.1.8.8.1.00.00 - VALORES RESTITUÍVEIS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="-7806065.23" data-nat="C">R$ 7.806.065,23 C</td>
            <td align="right" data-saldo="-7806065.23" data-nat="D">R$ 1.540.607,01 D</td>
            <td align="right" data-saldo="-7806065.23" data-nat="C">R$ 6.265.458,22 C</td></tr><tr class="filho218810000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="218810100"></i> 2.1.8.8.1.01.00 - CONSIGNAÇÕES </td>
            <td align="right" data-saldo="-3066479.46" data-nat="C">R$ 3.066.479,46 C</td>
            <td align="right" data-saldo="-3066479.46" data-nat="D">R$ 2.055.145,88 D</td>
            <td align="right" data-saldo="-3066479.46" data-nat="C">R$ 1.011.333,58 C</td></tr><tr class="filho218810100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.1.8.8.1.01.02 - CONTRIBUIÇÃO AO RGPS</td>
            <td align="right" data-saldo="-2137570.7" data-nat="C">R$ 2.137.570,70 C</td>
            <td align="right" data-saldo="-2137570.7" data-nat="D">R$ 1.653.570,75 D</td>
            <td align="right" data-saldo="-2137570.7" data-nat="C">R$ 483.999,95 C</td></tr><tr class="filho218810100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.1.8.8.1.01.03 -  ENCARGOS SOCIAIS - OUTRAS ENTIDADES</td>
            <td align="right" data-saldo="-85.12" data-nat="C">R$ 85,12 C</td>
            <td align="right" data-saldo="-85.12" data-nat="C">R$ 146,74 C</td>
            <td align="right" data-saldo="-85.12" data-nat="C">R$ 231,86 C</td></tr><tr class="filho218810100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.1.8.8.1.01.04 - IMPOSTO SOBRE A RENDA RETIDO NA FONTE - IRRF</td>
            <td align="right" data-saldo="-74347.71" data-nat="C">R$ 74.347,71 C</td>
            <td align="right" data-saldo="-74347.71" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="-74347.71" data-nat="C">R$ 74.347,71 C</td></tr><tr class="filho218810100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.1.8.8.1.01.08 -  ISS </td>
            <td align="right" data-saldo="-289933.98" data-nat="C">R$ 289.933,98 C</td>
            <td align="right" data-saldo="-289933.98" data-nat="D">R$ 40.836,33 D</td>
            <td align="right" data-saldo="-289933.98" data-nat="C">R$ 249.097,65 C</td></tr><tr class="filho218810100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.1.8.8.1.01.09 - OUTROS TRIBUTOS ESTADUAIS E MUNICIPAIS</td>
            <td align="right" data-saldo="-45.3" data-nat="C">R$ 45,30 C</td>
            <td align="right" data-saldo="-45.3" data-nat="D">R$ 45,30 D</td>
            <td align="right" data-saldo="-45.3" data-nat="C">R$ 0,00 C</td></tr><tr class="filho218810100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.1.8.8.1.01.10 - PENSAO ALIMENTICIA</td>
            <td align="right" data-saldo="-6099.93" data-nat="C">R$ 6.099,93 C</td>
            <td align="right" data-saldo="-6099.93" data-nat="C">R$ 688,07 C</td>
            <td align="right" data-saldo="-6099.93" data-nat="C">R$ 6.788,00 C</td></tr><tr class="filho218810100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.1.8.8.1.01.11 - PLANOS DE PREVIDENCIA E ASSISTENCIA MEDICA</td>
            <td align="right" data-saldo="-38801.82" data-nat="C">R$ 38.801,82 C</td>
            <td align="right" data-saldo="-38801.82" data-nat="D">R$ 38.420,60 D</td>
            <td align="right" data-saldo="-38801.82" data-nat="C">R$ 381,22 C</td></tr><tr class="filho218810100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.1.8.8.1.01.13 - RETENÇÕES - ENTIDADES REPRESENTATIVAS DE CLASSES</td>
            <td align="right" data-saldo="-11102" data-nat="C">R$ 11.102,00 C</td>
            <td align="right" data-saldo="-11102" data-nat="D">R$ 316,93 D</td>
            <td align="right" data-saldo="-11102" data-nat="C">R$ 10.785,07 C</td></tr><tr class="filho218810100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.1.8.8.1.01.14 - RETENÇÕES - PLANOS DE SEGUROS</td>
            <td align="right" data-saldo="-1942.34" data-nat="C">R$ 1.942,34 C</td>
            <td align="right" data-saldo="-1942.34" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="-1942.34" data-nat="C">R$ 1.942,34 C</td></tr><tr class="filho218810100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.1.8.8.1.01.15 - RETENÇÕES - EMPRÉSTIMOS E FINANCIAMENTOS</td>
            <td align="right" data-saldo="-8899.72" data-nat="C">R$ 8.899,72 C</td>
            <td align="right" data-saldo="-8899.72" data-nat="C">R$ 222,21 C</td>
            <td align="right" data-saldo="-8899.72" data-nat="C">R$ 9.121,93 C</td></tr><tr class="filho218810100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.1.8.8.1.01.99 - OUTROS CONSIGNATARIOS</td>
            <td align="right" data-saldo="-497650.84" data-nat="C">R$ 497.650,84 C</td>
            <td align="right" data-saldo="-497650.84" data-nat="D">R$ 323.012,99 D</td>
            <td align="right" data-saldo="-497650.84" data-nat="C">R$ 174.637,85 C</td></tr><tr class="filho218810000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="218810400"></i> 2.1.8.8.1.04.00 - DEPOSITOS NAO JUDICIAIS</td>
            <td align="right" data-saldo="-4739585.77" data-nat="C">R$ 4.739.585,77 C</td>
            <td align="right" data-saldo="-4739585.77" data-nat="C">R$ 514.538,87 C</td>
            <td align="right" data-saldo="-4739585.77" data-nat="C">R$ 5.254.124,64 C</td></tr><tr class="filho218810400 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.1.8.8.1.04.01 - DEPOSITOS E CAUÇÕES</td>
            <td align="right" data-saldo="-2022993.25" data-nat="C">R$ 2.022.993,25 C</td>
            <td align="right" data-saldo="-2022993.25" data-nat="C">R$ 76.585,06 C</td>
            <td align="right" data-saldo="-2022993.25" data-nat="C">R$ 2.099.578,31 C</td></tr><tr class="filho218810400 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.1.8.8.1.04.99 - OUTROS DEPOSITOS</td>
            <td align="right" data-saldo="-2716592.52" data-nat="C">R$ 2.716.592,52 C</td>
            <td align="right" data-saldo="-2716592.52" data-nat="C">R$ 437.953,81 C</td>
            <td align="right" data-saldo="-2716592.52" data-nat="C">R$ 3.154.546,33 C</td></tr><tr class="filho218000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="218900000"></i> 2.1.8.9.0.00.00 - OUTRAS OBRIGAÇÕES A CURTO PRAZO</td>
            <td align="right" data-saldo="-2016763.82" data-nat="C">R$ 2.016.763,82 C</td>
            <td align="right" data-saldo="-2016763.82" data-nat="D">R$ 1.127.046,98 D</td>
            <td align="right" data-saldo="-2016763.82" data-nat="C">R$ 889.716,84 C</td></tr><tr class="filho218900000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="218910000"></i> 2.1.8.9.1.00.00 - OUTRAS OBRIGAÇÕES A CURTO PRAZO - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="-1626088.47" data-nat="C">R$ 1.626.088,47 C</td>
            <td align="right" data-saldo="-1626088.47" data-nat="D">R$ 756.040,82 D</td>
            <td align="right" data-saldo="-1626088.47" data-nat="C">R$ 870.047,65 C</td></tr><tr class="filho218910000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="218910100"></i> 2.1.8.9.1.01.00 - INDENIZAÇÕES E RESTITUIÇÕES</td>
            <td align="right" data-saldo="-747677.45" data-nat="C">R$ 747.677,45 C</td>
            <td align="right" data-saldo="-747677.45" data-nat="C">R$ 9.249,71 C</td>
            <td align="right" data-saldo="-747677.45" data-nat="C">R$ 756.927,16 C</td></tr><tr class="filho218910100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.1.8.9.1.01.02 - INDENIZAÇÕES E RESTITUIÇÕES DIVERSAS</td>
            <td align="right" data-saldo="-747677.45" data-nat="C">R$ 747.677,45 C</td>
            <td align="right" data-saldo="-747677.45" data-nat="C">R$ 9.249,71 C</td>
            <td align="right" data-saldo="-747677.45" data-nat="C">R$ 756.927,16 C</td></tr><tr class="filho218910000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.1.8.9.1.02.00 - DIARIAS A PAGAR</td>
            <td align="right" data-saldo="-873111.02" data-nat="C">R$ 873.111,02 C</td>
            <td align="right" data-saldo="-873111.02" data-nat="D">R$ 761.290,53 D</td>
            <td align="right" data-saldo="-873111.02" data-nat="C">R$ 111.820,49 C</td></tr><tr class="filho218910000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.1.8.9.1.03.00 - SUPRIMENTOS DE FUNDOS A PAGAR</td>
            <td align="right" data-saldo="-5300" data-nat="C">R$ 5.300,00 C</td>
            <td align="right" data-saldo="-5300" data-nat="D">R$ 4.000,00 D</td>
            <td align="right" data-saldo="-5300" data-nat="C">R$ 1.300,00 C</td></tr><tr class="filho218900000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.1.8.9.5.00.00 - OUTRAS OBRIGAÇÕES A CURTO PRAZO - INTER OFSS - MUNICÍPIO</td>
            <td align="right" data-saldo="-390675.35" data-nat="C">R$ 390.675,35 C</td>
            <td align="right" data-saldo="-390675.35" data-nat="D">R$ 371.006,16 D</td>
            <td align="right" data-saldo="-390675.35" data-nat="C">R$ 19.669,19 C</td></tr><tr class="filho200000000 filho filho-hide nivel1 nivelPadrao">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="220000000"></i> 2.2.0.0.0.00.00 - PASSIVO NAO-CIRCULANTE</td>
            <td align="right" data-saldo="-21135168983.61" data-nat="C">R$ 21.135.168.983,61 C</td>
            <td align="right" data-saldo="-21135168983.61" data-nat="D">R$ 5.988.408.796,97 D</td>
            <td align="right" data-saldo="-21135168983.61" data-nat="C">R$ 15.146.760.186,64 C</td></tr><tr class="filho220000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="221000000"></i> 2.2.1.0.0.00.00 - OBRIGAÇÕES TRABALHISTAS, PREVIDENCIÁRIAS E ASSISTENCIAIS A PAGAR A LONGO PRAZO</td>
            <td align="right" data-saldo="-262591242.84" data-nat="C">R$ 262.591.242,84 C</td>
            <td align="right" data-saldo="-262591242.84" data-nat="D">R$ 112.091.086,37 D</td>
            <td align="right" data-saldo="-262591242.84" data-nat="C">R$ 150.500.156,47 C</td></tr><tr class="filho221000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="221100000"></i> 2.2.1.1.0.00.00 - PESSOAL A PAGAR</td>
            <td align="right" data-saldo="-120931144.97" data-nat="C">R$ 120.931.144,97 C</td>
            <td align="right" data-saldo="-120931144.97" data-nat="D">R$ 81.015.579,27 D</td>
            <td align="right" data-saldo="-120931144.97" data-nat="C">R$ 39.915.565,70 C</td></tr><tr class="filho221100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="221110000"></i> 2.2.1.1.1.00.00 - PESSOAL A PAGAR- CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="-120931144.97" data-nat="C">R$ 120.931.144,97 C</td>
            <td align="right" data-saldo="-120931144.97" data-nat="D">R$ 81.015.579,27 D</td>
            <td align="right" data-saldo="-120931144.97" data-nat="C">R$ 39.915.565,70 C</td></tr><tr class="filho221110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="221110400"></i> 2.2.1.1.1.04.00 - PRECATÓRIOS DE PESSOAL - REGIME ORDINÁRIO</td>
            <td align="right" data-saldo="-120931144.97" data-nat="C">R$ 120.931.144,97 C</td>
            <td align="right" data-saldo="-120931144.97" data-nat="D">R$ 81.015.579,27 D</td>
            <td align="right" data-saldo="-120931144.97" data-nat="C">R$ 39.915.565,70 C</td></tr><tr class="filho221110400 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.2.1.1.1.04.01 - PRECATÓRIOS DE PESSOAL - REGIME ORDINÁRIO - ANTES DE 05/05/2000 </td>
            <td align="right" data-saldo="-16285517.76" data-nat="C">R$ 16.285.517,76 C</td>
            <td align="right" data-saldo="-16285517.76" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="-16285517.76" data-nat="C">R$ 16.285.517,76 C</td></tr><tr class="filho221110400 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.2.1.1.1.04.03 - PRECATÓRIOS DE PESSOAL - REGIME ORDINÁRIO - A PARTIR DE 05/05/2000 - NÃO VENCIDOS</td>
            <td align="right" data-saldo="-104645627.21" data-nat="C">R$ 104.645.627,21 C</td>
            <td align="right" data-saldo="-104645627.21" data-nat="D">R$ 81.015.579,27 D</td>
            <td align="right" data-saldo="-104645627.21" data-nat="C">R$ 23.630.047,94 C</td></tr><tr class="filho221000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="221400000"></i> 2.2.1.4.0.00.00 - ENCARGOS SOCIAIS A PAGAR</td>
            <td align="right" data-saldo="-141660097.87" data-nat="C">R$ 141.660.097,87 C</td>
            <td align="right" data-saldo="-141660097.87" data-nat="D">R$ 31.075.507,10 D</td>
            <td align="right" data-saldo="-141660097.87" data-nat="C">R$ 110.584.590,77 C</td></tr><tr class="filho221400000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="221410000"></i> 2.2.1.4.1.00.00 - ENCARGOS SOCIAIS A PAGAR- CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="-141660097.87" data-nat="C">R$ 141.660.097,87 C</td>
            <td align="right" data-saldo="-141660097.87" data-nat="D">R$ 31.075.507,10 D</td>
            <td align="right" data-saldo="-141660097.87" data-nat="C">R$ 110.584.590,77 C</td></tr><tr class="filho221410000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.2.1.4.1.01.00 - CONTRIBUIÇÕES PREVIDÊNCIÁRIAS - DÉBITO PARCELADO</td>
            <td align="right" data-saldo="-63803077.57" data-nat="C">R$ 63.803.077,57 C</td>
            <td align="right" data-saldo="-63803077.57" data-nat="D">R$ 13.354.995,03 D</td>
            <td align="right" data-saldo="-63803077.57" data-nat="C">R$ 50.448.082,54 C</td></tr><tr class="filho221410000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.2.1.4.1.02.00 - CONTRIBUICÕES SOCIAIS - DÉBITOS PARCELADOS</td>
            <td align="right" data-saldo="-72309156.17" data-nat="C">R$ 72.309.156,17 C</td>
            <td align="right" data-saldo="-72309156.17" data-nat="D">R$ 16.418.804,75 D</td>
            <td align="right" data-saldo="-72309156.17" data-nat="C">R$ 55.890.351,42 C</td></tr><tr class="filho221410000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.2.1.4.1.03.00 - FGTS - DÉBITO PARCELADO</td>
            <td align="right" data-saldo="-1778266.15" data-nat="C">R$ 1.778.266,15 C</td>
            <td align="right" data-saldo="-1778266.15" data-nat="D">R$ 268.057,42 D</td>
            <td align="right" data-saldo="-1778266.15" data-nat="C">R$ 1.510.208,73 C</td></tr><tr class="filho221410000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.2.1.4.1.99.00 - OUTROS ENCARGOS SOCIAIS</td>
            <td align="right" data-saldo="-3769597.98" data-nat="C">R$ 3.769.597,98 C</td>
            <td align="right" data-saldo="-3769597.98" data-nat="D">R$ 1.033.649,90 D</td>
            <td align="right" data-saldo="-3769597.98" data-nat="C">R$ 2.735.948,08 C</td></tr><tr class="filho220000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="222000000"></i> 2.2.2.0.0.00.00 - EMPRÉSTIMOS E FINANCIAMENTOS A LONGO PRAZO</td>
            <td align="right" data-saldo="-4291495975" data-nat="C">R$ 4.291.495.975,00 C</td>
            <td align="right" data-saldo="-4291495975" data-nat="D">R$ 564.365.165,24 D</td>
            <td align="right" data-saldo="-4291495975" data-nat="C">R$ 3.727.130.809,76 C</td></tr><tr class="filho222000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="222100000"></i> 2.2.2.1.0.00.00 - EMPRÉSTIMOS A LONGO PRAZO - INTERNO</td>
            <td align="right" data-saldo="-1799021042.36" data-nat="C">R$ 1.799.021.042,36 C</td>
            <td align="right" data-saldo="-1799021042.36" data-nat="D">R$ 232.583.881,10 D</td>
            <td align="right" data-saldo="-1799021042.36" data-nat="C">R$ 1.566.437.161,26 C</td></tr><tr class="filho222100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="222110000"></i> 2.2.2.1.1.00.00 - EMPRÉSTIMOS A LONGO PRAZO – INTERNO - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="-1799021042.36" data-nat="C">R$ 1.799.021.042,36 C</td>
            <td align="right" data-saldo="-1799021042.36" data-nat="D">R$ 232.583.881,10 D</td>
            <td align="right" data-saldo="-1799021042.36" data-nat="C">R$ 1.566.437.161,26 C</td></tr><tr class="filho222110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="222110200"></i> 2.2.2.1.1.02.00 - EMPRÉSTIMOS INTERNOS - EM CONTRATOS</td>
            <td align="right" data-saldo="-1432147030.65" data-nat="C">R$ 1.432.147.030,65 C</td>
            <td align="right" data-saldo="-1432147030.65" data-nat="D">R$ 149.102.936,21 D</td>
            <td align="right" data-saldo="-1432147030.65" data-nat="C">R$ 1.283.044.094,44 C</td></tr><tr class="filho222110200 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.2.2.1.1.02.98 - OUTROS CONTRATOS - EMPRÉSTIMOS INTERNOS</td>
            <td align="right" data-saldo="-1432147030.65" data-nat="C">R$ 1.432.147.030,65 C</td>
            <td align="right" data-saldo="-1432147030.65" data-nat="D">R$ 149.102.936,21 D</td>
            <td align="right" data-saldo="-1432147030.65" data-nat="C">R$ 1.283.044.094,44 C</td></tr><tr class="filho222110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.2.2.1.1.03.00 - OUTROS EMPRÉSTIMOS A LONGO PRAZO - INTERNO</td>
            <td align="right" data-saldo="-366874011.71" data-nat="C">R$ 366.874.011,71 C</td>
            <td align="right" data-saldo="-366874011.71" data-nat="D">R$ 83.480.944,89 D</td>
            <td align="right" data-saldo="-366874011.71" data-nat="C">R$ 283.393.066,82 C</td></tr><tr class="filho222000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="222200000"></i> 2.2.2.2.0.00.00 - EMPRÉSTIMOS A LONGO PRAZO - EXTERNO</td>
            <td align="right" data-saldo="-2492474932.64" data-nat="C">R$ 2.492.474.932,64 C</td>
            <td align="right" data-saldo="-2492474932.64" data-nat="D">R$ 331.781.284,14 D</td>
            <td align="right" data-saldo="-2492474932.64" data-nat="C">R$ 2.160.693.648,50 C</td></tr><tr class="filho222200000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="222210000"></i> 2.2.2.2.1.00.00 - EMPRÉSTIMOS A LONGO PRAZO- EXTERNO CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="-2492474932.64" data-nat="C">R$ 2.492.474.932,64 C</td>
            <td align="right" data-saldo="-2492474932.64" data-nat="D">R$ 331.781.284,14 D</td>
            <td align="right" data-saldo="-2492474932.64" data-nat="C">R$ 2.160.693.648,50 C</td></tr><tr class="filho222210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.2.2.2.1.02.00 - EMPRÉSTIMOS EXTERNOS - EM CONTRATOS</td>
            <td align="right" data-saldo="-2492474932.64" data-nat="C">R$ 2.492.474.932,64 C</td>
            <td align="right" data-saldo="-2492474932.64" data-nat="D">R$ 331.781.284,14 D</td>
            <td align="right" data-saldo="-2492474932.64" data-nat="C">R$ 2.160.693.648,50 C</td></tr><tr class="filho220000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="227000000"></i> 2.2.7.0.0.00.00 - PROVISÕES A LONGO PRAZO</td>
            <td align="right" data-saldo="-16581081765.77" data-nat="C">R$ 16.581.081.765,77 C</td>
            <td align="right" data-saldo="-16581081765.77" data-nat="D">R$ 5.311.952.545,36 D</td>
            <td align="right" data-saldo="-16581081765.77" data-nat="C">R$ 11.269.129.220,41 C</td></tr><tr class="filho227000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="227200000"></i> 2.2.7.2.0.00.00 - PROVISÕES MATEMÁTICAS PREVIDÊNCIÁRIAS A LONGO PRAZO</td>
            <td align="right" data-saldo="-16581081765.77" data-nat="C">R$ 16.581.081.765,77 C</td>
            <td align="right" data-saldo="-16581081765.77" data-nat="D">R$ 5.311.952.545,36 D</td>
            <td align="right" data-saldo="-16581081765.77" data-nat="C">R$ 11.269.129.220,41 C</td></tr><tr class="filho227200000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="227210000"></i> 2.2.7.2.1.00.00 - PROVISÕES MATEMÁTICAS PREVIDÊNCIÁRIAS A LONGO PRAZO - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="-16581081765.77" data-nat="C">R$ 16.581.081.765,77 C</td>
            <td align="right" data-saldo="-16581081765.77" data-nat="D">R$ 5.311.952.545,36 D</td>
            <td align="right" data-saldo="-16581081765.77" data-nat="C">R$ 11.269.129.220,41 C</td></tr><tr class="filho227210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="227210300"></i> 2.2.7.2.1.03.00 - PLANO PREVIDENCIARIO - PROVISOES DE BENEFICIOS CONCEDIDOS </td>
            <td align="right" data-saldo="-11075377273.5" data-nat="C">R$ 11.075.377.273,50 C</td>
            <td align="right" data-saldo="-11075377273.5" data-nat="D">R$ 2.985.289.611,28 D</td>
            <td align="right" data-saldo="-11075377273.5" data-nat="C">R$ 8.090.087.662,22 C</td></tr><tr class="filho227210300 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.2.7.2.1.03.01 - APOSENTADORIAS/PENSÕES/OUTROS BENEFÍCIOS CONCEDIDOS DO PLANO PREVIDENCIÁRIO DO RPPS </td>
            <td align="right" data-saldo="-11482514675.75" data-nat="C">R$ 11.482.514.675,75 C</td>
            <td align="right" data-saldo="-11482514675.75" data-nat="D">R$ 2.680.266.115,24 D</td>
            <td align="right" data-saldo="-11482514675.75" data-nat="C">R$ 8.802.248.560,51 C</td></tr><tr class="filho227210300 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.2.7.2.1.03.03 - (-) CONTRIBUIÇÕES DO APOSENTADO PARA O PLANO PREVIDENCIÁRIO DO RPPS </td>
            <td align="right" data-saldo="370595193.47" data-nat="D">R$ 370.595.193,47 D</td>
            <td align="right" data-saldo="370595193.47" data-nat="C">R$ 149.107.688,34 C</td>
            <td align="right" data-saldo="370595193.47" data-nat="D">R$ 221.487.505,13 D</td></tr><tr class="filho227210300 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.2.7.2.1.03.04 - (-) CONTRIBUIÇÕES DO PENSIONISTA PARA O PLANO PREVIDENCIÁRIO DO RPPS </td>
            <td align="right" data-saldo="36542208.78" data-nat="D">R$ 36.542.208,78 D</td>
            <td align="right" data-saldo="36542208.78" data-nat="D">R$ 5.058.720,48 D</td>
            <td align="right" data-saldo="36542208.78" data-nat="D">R$ 41.600.929,26 D</td></tr><tr class="filho227210300 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.2.7.2.1.03.05 - (-) COMPENSAÇÃO PREVIDENCIÁRIA DO PLANO PREVIDENCIÁRIO DO RPPS </td>
            <td align="right" data-saldo="0" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="0" data-nat="D">R$ 449.072.463,90 D</td>
            <td align="right" data-saldo="0" data-nat="D">R$ 449.072.463,90 D</td></tr><tr class="filho227210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="227210400"></i> 2.2.7.2.1.04.00 - PLANO PREVIDENCIARIO - PROVISOES DE BENEFICIOS A CONCEDER </td>
            <td align="right" data-saldo="-5505704492.27" data-nat="C">R$ 5.505.704.492,27 C</td>
            <td align="right" data-saldo="-5505704492.27" data-nat="D">R$ 2.326.662.934,08 D</td>
            <td align="right" data-saldo="-5505704492.27" data-nat="C">R$ 3.179.041.558,19 C</td></tr><tr class="filho227210400 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.2.7.2.1.04.01 - APOSENTADORIAS/PENSÕES/OUTROS BENEFÍCIOS A CONCEDER DO PLANO PREVIDENCIÁRIO DO RPPS </td>
            <td align="right" data-saldo="-9212437564.1" data-nat="C">R$ 9.212.437.564,10 C</td>
            <td align="right" data-saldo="-9212437564.1" data-nat="D">R$ 2.941.314.481,62 D</td>
            <td align="right" data-saldo="-9212437564.1" data-nat="C">R$ 6.271.123.082,48 C</td></tr><tr class="filho227210400 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.2.7.2.1.04.02 - (-) CONTRIBUIÇÕES DO ENTE PARA O PLANO PREVIDENCIÁRIO DO RPPS </td>
            <td align="right" data-saldo="1349616109.59" data-nat="D">R$ 1.349.616.109,59 D</td>
            <td align="right" data-saldo="1349616109.59" data-nat="C">R$ 131.010.994,78 C</td>
            <td align="right" data-saldo="1349616109.59" data-nat="D">R$ 1.218.605.114,81 D</td></tr><tr class="filho227210400 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.2.7.2.1.04.03 - (-) CONTRIBUIÇÕES DO ATIVO PARA O PLANO PREVIDENCIÁRIO DO RPPS </td>
            <td align="right" data-saldo="1349616109.59" data-nat="D">R$ 1.349.616.109,59 D</td>
            <td align="right" data-saldo="1349616109.59" data-nat="D">R$ 84.279.142,91 D</td>
            <td align="right" data-saldo="1349616109.59" data-nat="D">R$ 1.433.895.252,50 D</td></tr><tr class="filho227210400 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.2.7.2.1.04.04 - (-) COMPENSAÇÃO PREVIDENCIÁRIA DO PLANO PREVIDENCIÁRIO DO RPPS </td>
            <td align="right" data-saldo="1007500852.65" data-nat="D">R$ 1.007.500.852,65 D</td>
            <td align="right" data-saldo="1007500852.65" data-nat="C">R$ 567.919.695,67 C</td>
            <td align="right" data-saldo="1007500852.65" data-nat="D">R$ 439.581.156,98 D</td></tr><tr class="filho200000000 filho filho-hide nivel1 nivelPadrao">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="230000000"></i> 2.3.0.0.0.00.00 - PATRIMÔNIO LIQUIDO</td>
            <td align="right" data-saldo="13986907533.96" data-nat="D">R$ 13.986.907.533,96 D</td>
            <td align="right" data-saldo="13986907533.96" data-nat="C">R$ 61.856,80 C</td>
            <td align="right" data-saldo="13986907533.96" data-nat="D">R$ 13.986.845.677,16 D</td></tr><tr class="filho230000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="237000000"></i> 2.3.7.0.0.00.00 - RESULTADOS ACUMULADOS</td>
            <td align="right" data-saldo="13986907533.96" data-nat="D">R$ 13.986.907.533,96 D</td>
            <td align="right" data-saldo="13986907533.96" data-nat="C">R$ 61.856,80 C</td>
            <td align="right" data-saldo="13986907533.96" data-nat="D">R$ 13.986.845.677,16 D</td></tr><tr class="filho237000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="237100000"></i> 2.3.7.1.0.00.00 - SUPERÁVITS OU DÉFICITS ACUMULADOS</td>
            <td align="right" data-saldo="13962182479.06" data-nat="D">R$ 13.962.182.479,06 D</td>
            <td align="right" data-saldo="13962182479.06" data-nat="C">R$ 63.256,80 C</td>
            <td align="right" data-saldo="13962182479.06" data-nat="D">R$ 13.962.119.222,26 D</td></tr><tr class="filho237100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="237110000"></i> 2.3.7.1.1.00.00 - SUPERÁVITS OU DÉFICITS ACUMULADOS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="13962182479.06" data-nat="D">R$ 13.962.182.479,06 D</td>
            <td align="right" data-saldo="13962182479.06" data-nat="C">R$ 63.256,80 C</td>
            <td align="right" data-saldo="13962182479.06" data-nat="D">R$ 13.962.119.222,26 D</td></tr><tr class="filho237110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.3.7.1.1.01.00 - SUPERÁVITS OU DÉFICITS DO EXERCÍCIO</td>
            <td align="right" data-saldo="-2694984368.78" data-nat="C">R$ 2.694.984.368,78 C</td>
            <td align="right" data-saldo="-2694984368.78" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="-2694984368.78" data-nat="C">R$ 2.694.984.368,78 C</td></tr><tr class="filho237110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.3.7.1.1.02.00 - SUPERAVITS OU DEFICITS DE EXERCÍCIOS ANTERIORES</td>
            <td align="right" data-saldo="16655283643.3" data-nat="D">R$ 16.655.283.643,30 D</td>
            <td align="right" data-saldo="16655283643.3" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="16655283643.3" data-nat="D">R$ 16.655.283.643,30 D</td></tr><tr class="filho237110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.3.7.1.1.03.00 - AJUSTES DE EXERCÍCIOS ANTERIORES</td>
            <td align="right" data-saldo="1883204.54" data-nat="D">R$ 1.883.204,54 D</td>
            <td align="right" data-saldo="1883204.54" data-nat="C">R$ 63.256,80 C</td>
            <td align="right" data-saldo="1883204.54" data-nat="D">R$ 1.819.947,74 D</td></tr><tr class="filho237000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="237200000"></i> 2.3.7.2.0.00.00 - LUCROS E PREJUÍZOS ACUMULADOS</td>
            <td align="right" data-saldo="24725054.9" data-nat="D">R$ 24.725.054,90 D</td>
            <td align="right" data-saldo="24725054.9" data-nat="D">R$ 1.400,00 D</td>
            <td align="right" data-saldo="24725054.9" data-nat="D">R$ 24.726.454,90 D</td></tr><tr class="filho237200000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="237210000"></i> 2.3.7.2.1.00.00 - LUCROS E PREJUÍZOS ACUMULADOS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="24725054.9" data-nat="D">R$ 24.725.054,90 D</td>
            <td align="right" data-saldo="24725054.9" data-nat="D">R$ 1.400,00 D</td>
            <td align="right" data-saldo="24725054.9" data-nat="D">R$ 24.726.454,90 D</td></tr><tr class="filho237210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.3.7.2.1.01.00 - LUCROS E PREJUÍZOS DO EXERCÍCIO</td>
            <td align="right" data-saldo="15437162.4" data-nat="D">R$ 15.437.162,40 D</td>
            <td align="right" data-saldo="15437162.4" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="15437162.4" data-nat="D">R$ 15.437.162,40 D</td></tr><tr class="filho237210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.3.7.2.1.02.00 - LUCROS E PREJUÍZOS ACUMULADOS DE EXERCÍCIOS ANTERIORES</td>
            <td align="right" data-saldo="9300210.13" data-nat="D">R$ 9.300.210,13 D</td>
            <td align="right" data-saldo="9300210.13" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="9300210.13" data-nat="D">R$ 9.300.210,13 D</td></tr><tr class="filho237210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 2.3.7.2.1.03.00 - AJUSTES DE EXERCÍCIOS ANTERIORES</td>
            <td align="right" data-saldo="-12317.63" data-nat="C">R$ 12.317,63 C</td>
            <td align="right" data-saldo="-12317.63" data-nat="D">R$ 1.400,00 D</td>
            <td align="right" data-saldo="-12317.63" data-nat="C">R$ 10.917,63 C</td></tr>
            <tr class="filho0 filho filho-hide nivel0 nivelPadrao">
            <td><i class="fa fa-minus-circle js-abre-filhos" id="300000000"></i> 3.0.0.0.0.00.00 - VARIAÇÃO PATRIMONIAL DIMINUTIVA</td>
            <td align="right" data-saldo="11042993827.98" data-nat="D">R$ 11.042.993.827,98 D</td>
            <td align="right" data-saldo="11042993827.98" data-nat="D">R$ 2.544.125.210,75 D</td>
            <td align="right" data-saldo="11042993827.98" data-nat="D">R$ 13.587.119.038,73 D</td></tr><tr class="filho300000000 filho filho-hide nivel1 nivelPadrao">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="310000000"></i> 3.1.0.0.0.00.00 - PESSOAL E ENCARGOS</td>
            <td align="right" data-saldo="3536156642.91" data-nat="D">R$ 3.536.156.642,91 D</td>
            <td align="right" data-saldo="3536156642.91" data-nat="D">R$ 573.846.522,06 D</td>
            <td align="right" data-saldo="3536156642.91" data-nat="D">R$ 4.110.003.164,97 D</td></tr><tr class="filho310000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="311000000"></i> 3.1.1.0.0.00.00 - REMUNERAÇÃO A PESSOAL</td>
            <td align="right" data-saldo="2259573223.1" data-nat="D">R$ 2.259.573.223,10 D</td>
            <td align="right" data-saldo="2259573223.1" data-nat="D">R$ 359.464.678,42 D</td>
            <td align="right" data-saldo="2259573223.1" data-nat="D">R$ 2.619.037.901,52 D</td></tr><tr class="filho311000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="311100000"></i> 3.1.1.1.0.00.00 - REMUNERAÇÃO A PESSOAL ATIVO CIVIL – ABRANGIDOS PELO RPPS</td>
            <td align="right" data-saldo="1495667057.68" data-nat="D">R$ 1.495.667.057,68 D</td>
            <td align="right" data-saldo="1495667057.68" data-nat="D">R$ 235.372.789,81 D</td>
            <td align="right" data-saldo="1495667057.68" data-nat="D">R$ 1.731.039.847,49 D</td></tr><tr class="filho311100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="311110000"></i> 3.1.1.1.1.00.00 - REMUNERAÇÃO A PESSOAL ATIVO CIVIL – ABRANGIDOS PELO RPPS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="1495667057.68" data-nat="D">R$ 1.495.667.057,68 D</td>
            <td align="right" data-saldo="1495667057.68" data-nat="D">R$ 235.372.789,81 D</td>
            <td align="right" data-saldo="1495667057.68" data-nat="D">R$ 1.731.039.847,49 D</td></tr><tr class="filho311110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="311110100"></i> 3.1.1.1.1.01.00 - VENCIMENTOS E VANTAGENS FIXAS - PESSOAL CIVIL - RPPS</td>
            <td align="right" data-saldo="1444562263.62" data-nat="D">R$ 1.444.562.263,62 D</td>
            <td align="right" data-saldo="1444562263.62" data-nat="D">R$ 230.199.495,00 D</td>
            <td align="right" data-saldo="1444562263.62" data-nat="D">R$ 1.674.761.758,62 D</td></tr><tr class="filho311110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.1.1.01.01 - VENCIMENTOS E SALÁRIOS</td>
            <td align="right" data-saldo="1023599509.97" data-nat="D">R$ 1.023.599.509,97 D</td>
            <td align="right" data-saldo="1023599509.97" data-nat="D">R$ 139.389.579,40 D</td>
            <td align="right" data-saldo="1023599509.97" data-nat="D">R$ 1.162.989.089,37 D</td></tr><tr class="filho311110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.1.1.01.02 - ADICIONAL NOTURNO</td>
            <td align="right" data-saldo="1786935.53" data-nat="D">R$ 1.786.935,53 D</td>
            <td align="right" data-saldo="1786935.53" data-nat="D">R$ 149.232,47 D</td>
            <td align="right" data-saldo="1786935.53" data-nat="D">R$ 1.936.168,00 D</td></tr><tr class="filho311110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.1.1.01.03 - INCORPORAÇÕES</td>
            <td align="right" data-saldo="22993.34" data-nat="D">R$ 22.993,34 D</td>
            <td align="right" data-saldo="22993.34" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="22993.34" data-nat="D">R$ 22.993,34 D</td></tr><tr class="filho311110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.1.1.01.04 - ABONO DE PERMANÊNCIA</td>
            <td align="right" data-saldo="3968414.16" data-nat="D">R$ 3.968.414,16 D</td>
            <td align="right" data-saldo="3968414.16" data-nat="D">R$ 401.406,23 D</td>
            <td align="right" data-saldo="3968414.16" data-nat="D">R$ 4.369.820,39 D</td></tr><tr class="filho311110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.1.1.01.05 - ADICIONAL DE PERICULOSIDADE</td>
            <td align="right" data-saldo="12110263.75" data-nat="D">R$ 12.110.263,75 D</td>
            <td align="right" data-saldo="12110263.75" data-nat="D">R$ 1.204.380,85 D</td>
            <td align="right" data-saldo="12110263.75" data-nat="D">R$ 13.314.644,60 D</td></tr><tr class="filho311110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.1.1.01.06 - ADICIONAL DE INSALUBRIDADE</td>
            <td align="right" data-saldo="26547001.53" data-nat="D">R$ 26.547.001,53 D</td>
            <td align="right" data-saldo="26547001.53" data-nat="D">R$ 4.169.249,67 D</td>
            <td align="right" data-saldo="26547001.53" data-nat="D">R$ 30.716.251,20 D</td></tr><tr class="filho311110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.1.1.01.09 - REMUNERAÇÃO DE PESSOAL EM DISPONIBILIDADE</td>
            <td align="right" data-saldo="169102.03" data-nat="D">R$ 169.102,03 D</td>
            <td align="right" data-saldo="169102.03" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="169102.03" data-nat="D">R$ 169.102,03 D</td></tr><tr class="filho311110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.1.1.01.12 - VANTAGEM PECUNIÁRIA INDIVIDUAL</td>
            <td align="right" data-saldo="92578.12" data-nat="D">R$ 92.578,12 D</td>
            <td align="right" data-saldo="92578.12" data-nat="D">R$ 31.030,74 D</td>
            <td align="right" data-saldo="92578.12" data-nat="D">R$ 123.608,86 D</td></tr><tr class="filho311110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.1.1.01.14 - GRATIFICAÇÃO POR EXERCÍCIO DE CARGOS</td>
            <td align="right" data-saldo="555114.53" data-nat="D">R$ 555.114,53 D</td>
            <td align="right" data-saldo="555114.53" data-nat="D">R$ 139.325,16 D</td>
            <td align="right" data-saldo="555114.53" data-nat="D">R$ 694.439,69 D</td></tr><tr class="filho311110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.1.1.01.16 - GRATIFICAÇÃO POR EXERCÍCIO DE FUNÇÕES</td>
            <td align="right" data-saldo="22332825.79" data-nat="D">R$ 22.332.825,79 D</td>
            <td align="right" data-saldo="22332825.79" data-nat="D">R$ 2.227.059,27 D</td>
            <td align="right" data-saldo="22332825.79" data-nat="D">R$ 24.559.885,06 D</td></tr><tr class="filho311110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.1.1.01.18 - GRATIFICAÇÃO DE TEMPO DE SERVIÇO</td>
            <td align="right" data-saldo="15745010.44" data-nat="D">R$ 15.745.010,44 D</td>
            <td align="right" data-saldo="15745010.44" data-nat="D">R$ 1.413.033,48 D</td>
            <td align="right" data-saldo="15745010.44" data-nat="D">R$ 17.158.043,92 D</td></tr><tr class="filho311110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.1.1.01.19 - GRATIFICAÇÕES ESPECIAIS</td>
            <td align="right" data-saldo="96476420.18" data-nat="D">R$ 96.476.420,18 D</td>
            <td align="right" data-saldo="96476420.18" data-nat="D">R$ 9.145.031,59 D</td>
            <td align="right" data-saldo="96476420.18" data-nat="D">R$ 105.621.451,77 D</td></tr><tr class="filho311110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.1.1.01.20 - GRATIFICAÇÃO POR ATIVIDADES EXPOSTAS</td>
            <td align="right" data-saldo="559267.42" data-nat="D">R$ 559.267,42 D</td>
            <td align="right" data-saldo="559267.42" data-nat="D">R$ 49.976,23 D</td>
            <td align="right" data-saldo="559267.42" data-nat="D">R$ 609.243,65 D</td></tr><tr class="filho311110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.1.1.01.21 - FÉRIAS VENCIDAS E PROPORCIONAIS</td>
            <td align="right" data-saldo="88105.16" data-nat="D">R$ 88.105,16 D</td>
            <td align="right" data-saldo="88105.16" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="88105.16" data-nat="D">R$ 88.105,16 D</td></tr><tr class="filho311110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.1.1.01.22 - 13. SALÁRIO</td>
            <td align="right" data-saldo="25216154.94" data-nat="D">R$ 25.216.154,94 D</td>
            <td align="right" data-saldo="25216154.94" data-nat="D">R$ 40.739.441,95 D</td>
            <td align="right" data-saldo="25216154.94" data-nat="D">R$ 65.955.596,89 D</td></tr><tr class="filho311110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.1.1.01.23 - FÉRIAS – ABONO PECUNIÁRIO</td>
            <td align="right" data-saldo="10787.1" data-nat="D">R$ 10.787,10 D</td>
            <td align="right" data-saldo="10787.1" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="10787.1" data-nat="D">R$ 10.787,10 D</td></tr><tr class="filho311110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.1.1.01.24 - FÉRIAS – ABONO CONSTITUCIONAL</td>
            <td align="right" data-saldo="17611447.11" data-nat="D">R$ 17.611.447,11 D</td>
            <td align="right" data-saldo="17611447.11" data-nat="D">R$ 733.364,36 D</td>
            <td align="right" data-saldo="17611447.11" data-nat="D">R$ 18.344.811,47 D</td></tr><tr class="filho311110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.1.1.01.28 - REPRESENTAÇÃO MENSAL</td>
            <td align="right" data-saldo="14746.54" data-nat="D">R$ 14.746,54 D</td>
            <td align="right" data-saldo="14746.54" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="14746.54" data-nat="D">R$ 14.746,54 D</td></tr><tr class="filho311110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.1.1.01.29 - COMPLEMENTAÇÃO SALARIAL</td>
            <td align="right" data-saldo="48021505.57" data-nat="D">R$ 48.021.505,57 D</td>
            <td align="right" data-saldo="48021505.57" data-nat="D">R$ 5.120.715,18 D</td>
            <td align="right" data-saldo="48021505.57" data-nat="D">R$ 53.142.220,75 D</td></tr><tr class="filho311110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.1.1.01.31 - SUBSÍDIOS</td>
            <td align="right" data-saldo="21113446.06" data-nat="D">R$ 21.113.446,06 D</td>
            <td align="right" data-saldo="21113446.06" data-nat="D">R$ 2.119.611,92 D</td>
            <td align="right" data-saldo="21113446.06" data-nat="D">R$ 23.233.057,98 D</td></tr><tr class="filho311110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.1.1.01.32 - GRATIFICAÇÃO POR EXERCÍCIO DE CARGO EM COMISSÃO</td>
            <td align="right" data-saldo="12002956.37" data-nat="D">R$ 12.002.956,37 D</td>
            <td align="right" data-saldo="12002956.37" data-nat="D">R$ 931.673,53 D</td>
            <td align="right" data-saldo="12002956.37" data-nat="D">R$ 12.934.629,90 D</td></tr><tr class="filho311110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.1.1.01.33 - VENCIMENTOS E SALÁRIOS PRORROGAÇÃO SALÁRIO MATERNIDADE</td>
            <td align="right" data-saldo="36469.58" data-nat="D">R$ 36.469,58 D</td>
            <td align="right" data-saldo="36469.58" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="36469.58" data-nat="D">R$ 36.469,58 D</td></tr><tr class="filho311110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.1.1.01.99 - OUTROS VENCIMENTOS E VANTAGENS FIXAS – PESSOAL CIVIL RPPS</td>
            <td align="right" data-saldo="116481208.4" data-nat="D">R$ 116.481.208,40 D</td>
            <td align="right" data-saldo="116481208.4" data-nat="D">R$ 22.235.382,97 D</td>
            <td align="right" data-saldo="116481208.4" data-nat="D">R$ 138.716.591,37 D</td></tr><tr class="filho311110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="311110200"></i> 3.1.1.1.1.02.00 - OUTRAS DESPESAS VARIAVEIS - PESSOAL CIVIL - RPPS</td>
            <td align="right" data-saldo="33266049.85" data-nat="D">R$ 33.266.049,85 D</td>
            <td align="right" data-saldo="33266049.85" data-nat="D">R$ 2.958.203,16 D</td>
            <td align="right" data-saldo="33266049.85" data-nat="D">R$ 36.224.253,01 D</td></tr><tr class="filho311110200 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.1.1.02.01 - SUBSTITUIÇÕES</td>
            <td align="right" data-saldo="33542.14" data-nat="D">R$ 33.542,14 D</td>
            <td align="right" data-saldo="33542.14" data-nat="D">R$ 10.396,10 D</td>
            <td align="right" data-saldo="33542.14" data-nat="D">R$ 43.938,24 D</td></tr><tr class="filho311110200 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.1.1.02.02 - ADICIONAL VARIÁVEL</td>
            <td align="right" data-saldo="25746931.38" data-nat="D">R$ 25.746.931,38 D</td>
            <td align="right" data-saldo="25746931.38" data-nat="D">R$ 1.637.391,00 D</td>
            <td align="right" data-saldo="25746931.38" data-nat="D">R$ 27.384.322,38 D</td></tr><tr class="filho311110200 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.1.1.02.99 - OUTROS VENCIMENTOS E VANTAGENS VARIÁVEIS – PESSOAL CIVIL RPPS</td>
            <td align="right" data-saldo="7485576.33" data-nat="D">R$ 7.485.576,33 D</td>
            <td align="right" data-saldo="7485576.33" data-nat="D">R$ 1.310.416,06 D</td>
            <td align="right" data-saldo="7485576.33" data-nat="D">R$ 8.795.992,39 D</td></tr><tr class="filho311110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.1.1.03.00 - SENTENCAS JUDICIAIS</td>
            <td align="right" data-saldo="17838744.21" data-nat="D">R$ 17.838.744,21 D</td>
            <td align="right" data-saldo="17838744.21" data-nat="D">R$ 2.215.091,65 D</td>
            <td align="right" data-saldo="17838744.21" data-nat="D">R$ 20.053.835,86 D</td></tr><tr class="filho311000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="311200000"></i> 3.1.1.2.0.00.00 - REMUNERAÇÃO A PESSOAL ATIVO CIVIL – ABRANGIDOS PELO RGPS</td>
            <td align="right" data-saldo="505528189.48" data-nat="D">R$ 505.528.189,48 D</td>
            <td align="right" data-saldo="505528189.48" data-nat="D">R$ 89.149.826,99 D</td>
            <td align="right" data-saldo="505528189.48" data-nat="D">R$ 594.678.016,47 D</td></tr><tr class="filho311200000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="311210000"></i> 3.1.1.2.1.00.00 - REMUNERAÇÃO A PESSOAL ATIVO CIVIL – ABRANGIDOS PELO RGPS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="505528189.48" data-nat="D">R$ 505.528.189,48 D</td>
            <td align="right" data-saldo="505528189.48" data-nat="D">R$ 89.149.826,99 D</td>
            <td align="right" data-saldo="505528189.48" data-nat="D">R$ 594.678.016,47 D</td></tr><tr class="filho311210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="311210100"></i> 3.1.1.2.1.01.00 - VENCIMENTOS E VANTAGENS FIXAS - PESSOAL CIVIL - RGPS</td>
            <td align="right" data-saldo="234051713.82" data-nat="D">R$ 234.051.713,82 D</td>
            <td align="right" data-saldo="234051713.82" data-nat="D">R$ 41.685.885,78 D</td>
            <td align="right" data-saldo="234051713.82" data-nat="D">R$ 275.737.599,60 D</td></tr><tr class="filho311210100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.2.1.01.01 - VENCIMENTOS E SALARIOS </td>
            <td align="right" data-saldo="117720070.29" data-nat="D">R$ 117.720.070,29 D</td>
            <td align="right" data-saldo="117720070.29" data-nat="D">R$ 26.016.923,36 D</td>
            <td align="right" data-saldo="117720070.29" data-nat="D">R$ 143.736.993,65 D</td></tr><tr class="filho311210100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.2.1.01.02 - ADICIONAL NOTURNO</td>
            <td align="right" data-saldo="99017.7" data-nat="D">R$ 99.017,70 D</td>
            <td align="right" data-saldo="99017.7" data-nat="D">R$ 8.894,25 D</td>
            <td align="right" data-saldo="99017.7" data-nat="D">R$ 107.911,95 D</td></tr><tr class="filho311210100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.2.1.01.04 - ABONO DE PERMANENCIA </td>
            <td align="right" data-saldo="1601.33" data-nat="D">R$ 1.601,33 D</td>
            <td align="right" data-saldo="1601.33" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="1601.33" data-nat="D">R$ 1.601,33 D</td></tr><tr class="filho311210100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.2.1.01.05 - ADICIONAL DE PERICULOSIDADE </td>
            <td align="right" data-saldo="1742434.09" data-nat="D">R$ 1.742.434,09 D</td>
            <td align="right" data-saldo="1742434.09" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="1742434.09" data-nat="D">R$ 1.742.434,09 D</td></tr><tr class="filho311210100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.2.1.01.06 - ADICIONAL DE INSALUBRIDADE </td>
            <td align="right" data-saldo="6764645.32" data-nat="D">R$ 6.764.645,32 D</td>
            <td align="right" data-saldo="6764645.32" data-nat="D">R$ 1.632.816,97 D</td>
            <td align="right" data-saldo="6764645.32" data-nat="D">R$ 8.397.462,29 D</td></tr><tr class="filho311210100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.2.1.01.09 - ADICIONAL DE TRANSFERÊNCIA - ART. 469/CLT </td>
            <td align="right" data-saldo="125458.83" data-nat="D">R$ 125.458,83 D</td>
            <td align="right" data-saldo="125458.83" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="125458.83" data-nat="D">R$ 125.458,83 D</td></tr><tr class="filho311210100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.2.1.01.12 - VANTAGEM PECUNIARIA INDIVIDUAL </td>
            <td align="right" data-saldo="15111.38" data-nat="D">R$ 15.111,38 D</td>
            <td align="right" data-saldo="15111.38" data-nat="D">R$ 630,70 D</td>
            <td align="right" data-saldo="15111.38" data-nat="D">R$ 15.742,08 D</td></tr><tr class="filho311210100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.2.1.01.13 - ABONO PROVISORIO - PESSOAL CIVIL </td>
            <td align="right" data-saldo="31260" data-nat="D">R$ 31.260,00 D</td>
            <td align="right" data-saldo="31260" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="31260" data-nat="D">R$ 31.260,00 D</td></tr><tr class="filho311210100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.2.1.01.14 - GRATIFICAÇÃO POR EXERCÍCIO DE CARGOS </td>
            <td align="right" data-saldo="451878.33" data-nat="D">R$ 451.878,33 D</td>
            <td align="right" data-saldo="451878.33" data-nat="D">R$ 16.800,00 D</td>
            <td align="right" data-saldo="451878.33" data-nat="D">R$ 468.678,33 D</td></tr><tr class="filho311210100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.2.1.01.16 - GRATIFICAÇÃO POR EXERCÍCIO DE FUNÇÕES </td>
            <td align="right" data-saldo="2913926.97" data-nat="D">R$ 2.913.926,97 D</td>
            <td align="right" data-saldo="2913926.97" data-nat="D">R$ 325.280,00 D</td>
            <td align="right" data-saldo="2913926.97" data-nat="D">R$ 3.239.206,97 D</td></tr><tr class="filho311210100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.2.1.01.18 - GRATIFICAÇÃO DE TEMPO DE SERVICO </td>
            <td align="right" data-saldo="1076993.56" data-nat="D">R$ 1.076.993,56 D</td>
            <td align="right" data-saldo="1076993.56" data-nat="D">R$ 89.837,27 D</td>
            <td align="right" data-saldo="1076993.56" data-nat="D">R$ 1.166.830,83 D</td></tr><tr class="filho311210100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.2.1.01.19 - GRATIFICAÇÕES ESPECIAIS </td>
            <td align="right" data-saldo="6324626.35" data-nat="D">R$ 6.324.626,35 D</td>
            <td align="right" data-saldo="6324626.35" data-nat="D">R$ 67.454,64 D</td>
            <td align="right" data-saldo="6324626.35" data-nat="D">R$ 6.392.080,99 D</td></tr><tr class="filho311210100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.2.1.01.21 - FERIAS VENCIDAS E PROPORCIONAIS</td>
            <td align="right" data-saldo="84100" data-nat="D">R$ 84.100,00 D</td>
            <td align="right" data-saldo="84100" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="84100" data-nat="D">R$ 84.100,00 D</td></tr><tr class="filho311210100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.2.1.01.22 - 13. SALARIO </td>
            <td align="right" data-saldo="4146673.16" data-nat="D">R$ 4.146.673,16 D</td>
            <td align="right" data-saldo="4146673.16" data-nat="D">R$ 4.587.108,00 D</td>
            <td align="right" data-saldo="4146673.16" data-nat="D">R$ 8.733.781,16 D</td></tr><tr class="filho311210100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.2.1.01.23 - FERIAS - ABONO PECUNIARIO </td>
            <td align="right" data-saldo="33645.03" data-nat="D">R$ 33.645,03 D</td>
            <td align="right" data-saldo="33645.03" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="33645.03" data-nat="D">R$ 33.645,03 D</td></tr><tr class="filho311210100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.2.1.01.24 - FERIAS - ABONO CONSTITUCIONAL </td>
            <td align="right" data-saldo="4694811.27" data-nat="D">R$ 4.694.811,27 D</td>
            <td align="right" data-saldo="4694811.27" data-nat="D">R$ 63.855,63 D</td>
            <td align="right" data-saldo="4694811.27" data-nat="D">R$ 4.758.666,90 D</td></tr><tr class="filho311210100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.2.1.01.28 - REPRESENTAÇÃO MENSAL </td>
            <td align="right" data-saldo="683335.32" data-nat="D">R$ 683.335,32 D</td>
            <td align="right" data-saldo="683335.32" data-nat="D">R$ 76.649,11 D</td>
            <td align="right" data-saldo="683335.32" data-nat="D">R$ 759.984,43 D</td></tr><tr class="filho311210100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.2.1.01.29 - COMPLEMENTAÇÃO SALARIAL </td>
            <td align="right" data-saldo="211406.29" data-nat="D">R$ 211.406,29 D</td>
            <td align="right" data-saldo="211406.29" data-nat="D">R$ 7.453,00 D</td>
            <td align="right" data-saldo="211406.29" data-nat="D">R$ 218.859,29 D</td></tr><tr class="filho311210100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.2.1.01.31 - SUBSÍDIOS </td>
            <td align="right" data-saldo="27581629.14" data-nat="D">R$ 27.581.629,14 D</td>
            <td align="right" data-saldo="27581629.14" data-nat="D">R$ 2.696.052,37 D</td>
            <td align="right" data-saldo="27581629.14" data-nat="D">R$ 30.277.681,51 D</td></tr><tr class="filho311210100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.2.1.01.32 - GRATIFICAÇÃO POR EXERCÍCIO DE CARGO EM COMISSÃO </td>
            <td align="right" data-saldo="57675102.87" data-nat="D">R$ 57.675.102,87 D</td>
            <td align="right" data-saldo="57675102.87" data-nat="D">R$ 5.913.757,94 D</td>
            <td align="right" data-saldo="57675102.87" data-nat="D">R$ 63.588.860,81 D</td></tr><tr class="filho311210100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.2.1.01.99 - OUTROS VENCIMENTOS E VANTAGENS FIXAS - PESSOAL CIVIL - RGPS</td>
            <td align="right" data-saldo="1673986.59" data-nat="D">R$ 1.673.986,59 D</td>
            <td align="right" data-saldo="1673986.59" data-nat="D">R$ 182.372,54 D</td>
            <td align="right" data-saldo="1673986.59" data-nat="D">R$ 1.856.359,13 D</td></tr><tr class="filho311210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="311210200"></i> 3.1.1.2.1.02.00 - OUTRAS VPD VARIAVEIS - PESSOAL CIVIL - RGPS </td>
            <td align="right" data-saldo="1166764.65" data-nat="D">R$ 1.166.764,65 D</td>
            <td align="right" data-saldo="1166764.65" data-nat="D">R$ 43.492,14 D</td>
            <td align="right" data-saldo="1166764.65" data-nat="D">R$ 1.210.256,79 D</td></tr><tr class="filho311210200 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.2.1.02.01 - SUBSTITUIÇÕES </td>
            <td align="right" data-saldo="4256.52" data-nat="D">R$ 4.256,52 D</td>
            <td align="right" data-saldo="4256.52" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="4256.52" data-nat="D">R$ 4.256,52 D</td></tr><tr class="filho311210200 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.2.1.02.02 - ADICIONAL VARIAVEL </td>
            <td align="right" data-saldo="454639.97" data-nat="D">R$ 454.639,97 D</td>
            <td align="right" data-saldo="454639.97" data-nat="D">R$ 43.492,14 D</td>
            <td align="right" data-saldo="454639.97" data-nat="D">R$ 498.132,11 D</td></tr><tr class="filho311210200 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.2.1.02.99 - OUTRAS DESPESAS VARIAVEIS - PESSOAL CIVIL </td>
            <td align="right" data-saldo="707868.16" data-nat="D">R$ 707.868,16 D</td>
            <td align="right" data-saldo="707868.16" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="707868.16" data-nat="D">R$ 707.868,16 D</td></tr><tr class="filho311210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.2.1.03.00 - SENTENCAS JUDICIAIS </td>
            <td align="right" data-saldo="104426.39" data-nat="D">R$ 104.426,39 D</td>
            <td align="right" data-saldo="104426.39" data-nat="D">R$ 10.000,00 D</td>
            <td align="right" data-saldo="104426.39" data-nat="D">R$ 114.426,39 D</td></tr><tr class="filho311210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="311210400"></i> 3.1.1.2.1.04.00 - CONTRATAÇÃO POR TEMPO DETERMINADO </td>
            <td align="right" data-saldo="270205284.62" data-nat="D">R$ 270.205.284,62 D</td>
            <td align="right" data-saldo="270205284.62" data-nat="D">R$ 47.410.449,07 D</td>
            <td align="right" data-saldo="270205284.62" data-nat="D">R$ 317.615.733,69 D</td></tr><tr class="filho311210400 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.2.1.04.01 - SALARIO CONTRATO TEMPORARIO - LEI 8.745/93 </td>
            <td align="right" data-saldo="210037642.92" data-nat="D">R$ 210.037.642,92 D</td>
            <td align="right" data-saldo="210037642.92" data-nat="D">R$ 31.707.338,18 D</td>
            <td align="right" data-saldo="210037642.92" data-nat="D">R$ 241.744.981,10 D</td></tr><tr class="filho311210400 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.2.1.04.02 - ADICIONAL NOTURNO DE CONTRATO TEMPORARIO </td>
            <td align="right" data-saldo="277717.09" data-nat="D">R$ 277.717,09 D</td>
            <td align="right" data-saldo="277717.09" data-nat="D">R$ 48.083,76 D</td>
            <td align="right" data-saldo="277717.09" data-nat="D">R$ 325.800,85 D</td></tr><tr class="filho311210400 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.2.1.04.03 - ADICIONAL DE PERICULOSIDADE CONTR. TEMPORARIO</td>
            <td align="right" data-saldo="610271.65" data-nat="D">R$ 610.271,65 D</td>
            <td align="right" data-saldo="610271.65" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="610271.65" data-nat="D">R$ 610.271,65 D</td></tr><tr class="filho311210400 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.2.1.04.06 - SERVICOS EVENTUAIS DE MEDICOS RESIDENTES </td>
            <td align="right" data-saldo="15024090.14" data-nat="D">R$ 15.024.090,14 D</td>
            <td align="right" data-saldo="15024090.14" data-nat="D">R$ 2.686.446,59 D</td>
            <td align="right" data-saldo="15024090.14" data-nat="D">R$ 17.710.536,73 D</td></tr><tr class="filho311210400 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.2.1.04.13 - 13º SALARIO CONTRATO TEMPORARIO</td>
            <td align="right" data-saldo="2249277.57" data-nat="D">R$ 2.249.277,57 D</td>
            <td align="right" data-saldo="2249277.57" data-nat="D">R$ 4.185.530,57 D</td>
            <td align="right" data-saldo="2249277.57" data-nat="D">R$ 6.434.808,14 D</td></tr><tr class="filho311210400 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.2.1.04.14 - FERIAS - ABONO CONSTITUCIONAL </td>
            <td align="right" data-saldo="1324271.06" data-nat="D">R$ 1.324.271,06 D</td>
            <td align="right" data-saldo="1324271.06" data-nat="D">R$ 273.191,49 D</td>
            <td align="right" data-saldo="1324271.06" data-nat="D">R$ 1.597.462,55 D</td></tr><tr class="filho311210400 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.2.1.04.99 - OUTRAS CONTRATAÇÕES POR TEMPO DETERMINADO </td>
            <td align="right" data-saldo="40682014.19" data-nat="D">R$ 40.682.014,19 D</td>
            <td align="right" data-saldo="40682014.19" data-nat="D">R$ 8.509.858,48 D</td>
            <td align="right" data-saldo="40682014.19" data-nat="D">R$ 49.191.872,67 D</td></tr><tr class="filho311000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="311300000"></i> 3.1.1.3.0.00.00 - REMUNERAÇÃO A PESSOAL ATIVO MILITAR – ABRANGIDOS PELO RPPS</td>
            <td align="right" data-saldo="258377975.94" data-nat="D">R$ 258.377.975,94 D</td>
            <td align="right" data-saldo="258377975.94" data-nat="D">R$ 34.942.061,62 D</td>
            <td align="right" data-saldo="258377975.94" data-nat="D">R$ 293.320.037,56 D</td></tr><tr class="filho311300000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="311310000"></i> 3.1.1.3.1.00.00 - REMUNERAÇÃO A PESSOAL ATIVO MILITAR – ABRANGIDOS PELO RPPS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="258377975.94" data-nat="D">R$ 258.377.975,94 D</td>
            <td align="right" data-saldo="258377975.94" data-nat="D">R$ 34.942.061,62 D</td>
            <td align="right" data-saldo="258377975.94" data-nat="D">R$ 293.320.037,56 D</td></tr><tr class="filho311310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="311310100"></i> 3.1.1.3.1.01.00 - VENCIMENTOS E VANTAGENS FIXAS - PES. MILITAR</td>
            <td align="right" data-saldo="257971229.45" data-nat="D">R$ 257.971.229,45 D</td>
            <td align="right" data-saldo="257971229.45" data-nat="D">R$ 34.910.708,46 D</td>
            <td align="right" data-saldo="257971229.45" data-nat="D">R$ 292.881.937,91 D</td></tr><tr class="filho311310100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.3.1.01.01 - SOLDO</td>
            <td align="right" data-saldo="213934039.01" data-nat="D">R$ 213.934.039,01 D</td>
            <td align="right" data-saldo="213934039.01" data-nat="D">R$ 18.908.884,44 D</td>
            <td align="right" data-saldo="213934039.01" data-nat="D">R$ 232.842.923,45 D</td></tr><tr class="filho311310100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.3.1.01.02 - ADICIONAL DE PERMANENCIA</td>
            <td align="right" data-saldo="11240.73" data-nat="D">R$ 11.240,73 D</td>
            <td align="right" data-saldo="11240.73" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="11240.73" data-nat="D">R$ 11.240,73 D</td></tr><tr class="filho311310100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.3.1.01.03 - ADICIONAL DE TEMPO DE SERVICO</td>
            <td align="right" data-saldo="83208.08" data-nat="D">R$ 83.208,08 D</td>
            <td align="right" data-saldo="83208.08" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="83208.08" data-nat="D">R$ 83.208,08 D</td></tr><tr class="filho311310100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.3.1.01.04 - ADICIONAL MILITAR</td>
            <td align="right" data-saldo="31588.51" data-nat="D">R$ 31.588,51 D</td>
            <td align="right" data-saldo="31588.51" data-nat="D">R$ 2.888,46 D</td>
            <td align="right" data-saldo="31588.51" data-nat="D">R$ 34.476,97 D</td></tr><tr class="filho311310100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.3.1.01.15 - ADICIONAL NATALINO</td>
            <td align="right" data-saldo="8190596.49" data-nat="D">R$ 8.190.596,49 D</td>
            <td align="right" data-saldo="8190596.49" data-nat="D">R$ 12.679.131,99 D</td>
            <td align="right" data-saldo="8190596.49" data-nat="D">R$ 20.869.728,48 D</td></tr><tr class="filho311310100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.3.1.01.16 - FERIAS - ABONO CONSTITUCIONAL</td>
            <td align="right" data-saldo="5692958.85" data-nat="D">R$ 5.692.958,85 D</td>
            <td align="right" data-saldo="5692958.85" data-nat="D">R$ 737.581,31 D</td>
            <td align="right" data-saldo="5692958.85" data-nat="D">R$ 6.430.540,16 D</td></tr><tr class="filho311310100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.3.1.01.17 - COMPLEMENTAÇÃO SALARIAL - PESSOAL MILITAR</td>
            <td align="right" data-saldo="271042.24" data-nat="D">R$ 271.042,24 D</td>
            <td align="right" data-saldo="271042.24" data-nat="D">R$ 14.049,15 D</td>
            <td align="right" data-saldo="271042.24" data-nat="D">R$ 285.091,39 D</td></tr><tr class="filho311310100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.3.1.01.99 - OUTRAS VPD FIXAS - PESSOAL MILITAR</td>
            <td align="right" data-saldo="29756555.54" data-nat="D">R$ 29.756.555,54 D</td>
            <td align="right" data-saldo="29756555.54" data-nat="D">R$ 2.568.173,11 D</td>
            <td align="right" data-saldo="29756555.54" data-nat="D">R$ 32.324.728,65 D</td></tr><tr class="filho311310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="311310200"></i> 3.1.1.3.1.02.00 - OUTRAS DESPESAS VARIAVEIS - PESSOAL MILITAR</td>
            <td align="right" data-saldo="342899.46" data-nat="D">R$ 342.899,46 D</td>
            <td align="right" data-saldo="342899.46" data-nat="D">R$ 31.353,16 D</td>
            <td align="right" data-saldo="342899.46" data-nat="D">R$ 374.252,62 D</td></tr><tr class="filho311310200 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.3.1.02.01 - INDENIZAÇÕES/MILITAR</td>
            <td align="right" data-saldo="342899.46" data-nat="D">R$ 342.899,46 D</td>
            <td align="right" data-saldo="342899.46" data-nat="D">R$ 31.353,16 D</td>
            <td align="right" data-saldo="342899.46" data-nat="D">R$ 374.252,62 D</td></tr><tr class="filho311310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.1.3.1.03.00 - SENTENCAS JUDICIAIS</td>
            <td align="right" data-saldo="63847.03" data-nat="D">R$ 63.847,03 D</td>
            <td align="right" data-saldo="63847.03" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="63847.03" data-nat="D">R$ 63.847,03 D</td></tr><tr class="filho310000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="312000000"></i> 3.1.2.0.0.00.00 - ENCARGOS PATRONAIS</td>
            <td align="right" data-saldo="249494420.67" data-nat="D">R$ 249.494.420,67 D</td>
            <td align="right" data-saldo="249494420.67" data-nat="D">R$ 59.656.869,61 D</td>
            <td align="right" data-saldo="249494420.67" data-nat="D">R$ 309.151.290,28 D</td></tr><tr class="filho312000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="312100000"></i> 3.1.2.1.0.00.00 - ENCARGOS PATRONAIS - RPPS</td>
            <td align="right" data-saldo="166816053.24" data-nat="D">R$ 166.816.053,24 D</td>
            <td align="right" data-saldo="166816053.24" data-nat="D">R$ 39.375.241,89 D</td>
            <td align="right" data-saldo="166816053.24" data-nat="D">R$ 206.191.295,13 D</td></tr><tr class="filho312100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="312120000"></i> 3.1.2.1.2.00.00 - ENCARGOS PATRONAIS - RPPS - INTRA OFSS</td>
            <td align="right" data-saldo="166816053.24" data-nat="D">R$ 166.816.053,24 D</td>
            <td align="right" data-saldo="166816053.24" data-nat="D">R$ 39.375.241,89 D</td>
            <td align="right" data-saldo="166816053.24" data-nat="D">R$ 206.191.295,13 D</td></tr><tr class="filho312120000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.2.1.2.99.00 - OUTROS ENCARGOS PATRONAIS - RPPS</td>
            <td align="right" data-saldo="166816053.24" data-nat="D">R$ 166.816.053,24 D</td>
            <td align="right" data-saldo="166816053.24" data-nat="D">R$ 39.375.241,89 D</td>
            <td align="right" data-saldo="166816053.24" data-nat="D">R$ 206.191.295,13 D</td></tr><tr class="filho312000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="312200000"></i> 3.1.2.2.0.00.00 - ENCARGOS PATRONAIS - RGPS</td>
            <td align="right" data-saldo="80013643.38" data-nat="D">R$ 80.013.643,38 D</td>
            <td align="right" data-saldo="80013643.38" data-nat="D">R$ 19.785.396,25 D</td>
            <td align="right" data-saldo="80013643.38" data-nat="D">R$ 99.799.039,63 D</td></tr><tr class="filho312200000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="312210000"></i> 3.1.2.2.1.00.00 - ENCARGOS PATRONAIS - RGPS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="80013643.38" data-nat="D">R$ 80.013.643,38 D</td>
            <td align="right" data-saldo="80013643.38" data-nat="D">R$ 19.785.396,25 D</td>
            <td align="right" data-saldo="80013643.38" data-nat="D">R$ 99.799.039,63 D</td></tr><tr class="filho312210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.2.2.1.01.00 - CONTRIBUIÇÕES PREVIDENCIÁRIAS - RGPS</td>
            <td align="right" data-saldo="71387795.06" data-nat="D">R$ 71.387.795,06 D</td>
            <td align="right" data-saldo="71387795.06" data-nat="D">R$ 18.578.797,76 D</td>
            <td align="right" data-saldo="71387795.06" data-nat="D">R$ 89.966.592,82 D</td></tr><tr class="filho312210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.2.2.1.04.00 - ENCARGOS DE PESSOAL REQUISITADO DE OUTROS ENTES</td>
            <td align="right" data-saldo="4221.69" data-nat="D">R$ 4.221,69 D</td>
            <td align="right" data-saldo="4221.69" data-nat="D">R$ 767,58 D</td>
            <td align="right" data-saldo="4221.69" data-nat="D">R$ 4.989,27 D</td></tr><tr class="filho312210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.2.2.1.99.00 - OUTROS ENCARGOS PATRONAIS - RGPS</td>
            <td align="right" data-saldo="8621626.63" data-nat="D">R$ 8.621.626,63 D</td>
            <td align="right" data-saldo="8621626.63" data-nat="D">R$ 1.205.830,91 D</td>
            <td align="right" data-saldo="8621626.63" data-nat="D">R$ 9.827.457,54 D</td></tr><tr class="filho312000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="312300000"></i> 3.1.2.3.0.00.00 - ENCARGOS PATRONAIS - FGTS</td>
            <td align="right" data-saldo="2647932.41" data-nat="D">R$ 2.647.932,41 D</td>
            <td align="right" data-saldo="2647932.41" data-nat="D">R$ 492.228,26 D</td>
            <td align="right" data-saldo="2647932.41" data-nat="D">R$ 3.140.160,67 D</td></tr><tr class="filho312300000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="312310000"></i> 3.1.2.3.1.00.00 - ENCARGOS PATRONAIS - FGTS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="2647932.41" data-nat="D">R$ 2.647.932,41 D</td>
            <td align="right" data-saldo="2647932.41" data-nat="D">R$ 492.228,26 D</td>
            <td align="right" data-saldo="2647932.41" data-nat="D">R$ 3.140.160,67 D</td></tr><tr class="filho312310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.2.3.1.01.00 - FGTS</td>
            <td align="right" data-saldo="2642533.21" data-nat="D">R$ 2.642.533,21 D</td>
            <td align="right" data-saldo="2642533.21" data-nat="D">R$ 492.228,26 D</td>
            <td align="right" data-saldo="2642533.21" data-nat="D">R$ 3.134.761,47 D</td></tr><tr class="filho312310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.2.3.1.02.00 - FGTS - PDV</td>
            <td align="right" data-saldo="5399.2" data-nat="D">R$ 5.399,20 D</td>
            <td align="right" data-saldo="5399.2" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="5399.2" data-nat="D">R$ 5.399,20 D</td></tr><tr class="filho312000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="312400000"></i> 3.1.2.4.0.00.00 - CONTRIBUIÇÕES SOCIAIS GERAIS</td>
            <td align="right" data-saldo="16791.64" data-nat="D">R$ 16.791,64 D</td>
            <td align="right" data-saldo="16791.64" data-nat="D">R$ 4.003,21 D</td>
            <td align="right" data-saldo="16791.64" data-nat="D">R$ 20.794,85 D</td></tr><tr class="filho312400000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="312410000"></i> 3.1.2.4.1.00.00 - CONTRIBUIÇÕES SOCIAIS GERAIS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="16791.64" data-nat="D">R$ 16.791,64 D</td>
            <td align="right" data-saldo="16791.64" data-nat="D">R$ 1.386,33 D</td>
            <td align="right" data-saldo="16791.64" data-nat="D">R$ 18.177,97 D</td></tr><tr class="filho312410000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.2.4.1.99.00 - OUTRAS CONSTRIBUIÇÕES SOCIAIS GERAIS</td>
            <td align="right" data-saldo="16791.64" data-nat="D">R$ 16.791,64 D</td>
            <td align="right" data-saldo="16791.64" data-nat="D">R$ 1.386,33 D</td>
            <td align="right" data-saldo="16791.64" data-nat="D">R$ 18.177,97 D</td></tr><tr class="filho312400000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.2.4.2.00.00 - CONTRIBUIÇÕES SOCIAIS GERAIS - INTRA OFSS</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="0" data-nat="D">R$ 2.616,88 D</td>
            <td align="right" data-saldo="0" data-nat="D">R$ 2.616,88 D</td></tr><tr class="filho310000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="313000000"></i> 3.1.3.0.0.00.00 - BENEFÍCIOS A PESSOAL</td>
            <td align="right" data-saldo="29186394.91" data-nat="D">R$ 29.186.394,91 D</td>
            <td align="right" data-saldo="29186394.91" data-nat="D">R$ 3.740.680,63 D</td>
            <td align="right" data-saldo="29186394.91" data-nat="D">R$ 32.927.075,54 D</td></tr><tr class="filho313000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="313100000"></i> 3.1.3.1.0.00.00 - BENEFÍCIOS A PESSOAL - RPPS</td>
            <td align="right" data-saldo="28472908.46" data-nat="D">R$ 28.472.908,46 D</td>
            <td align="right" data-saldo="28472908.46" data-nat="D">R$ 3.738.752,66 D</td>
            <td align="right" data-saldo="28472908.46" data-nat="D">R$ 32.211.661,12 D</td></tr><tr class="filho313100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.3.1.1.00.00 - BENEFÍCIOS A PESSOAL - RPPS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="28472908.46" data-nat="D">R$ 28.472.908,46 D</td>
            <td align="right" data-saldo="28472908.46" data-nat="D">R$ 3.738.752,66 D</td>
            <td align="right" data-saldo="28472908.46" data-nat="D">R$ 32.211.661,12 D</td></tr><tr class="filho313000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="313300000"></i> 3.1.3.3.0.00.00 - BENEFÍCIOS A PESSOAL - MILITAR</td>
            <td align="right" data-saldo="713486.45" data-nat="D">R$ 713.486,45 D</td>
            <td align="right" data-saldo="713486.45" data-nat="D">R$ 1.927,97 D</td>
            <td align="right" data-saldo="713486.45" data-nat="D">R$ 715.414,42 D</td></tr><tr class="filho313300000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.3.3.1.00.00 - BENEFÍCIOS A PESSOAL - MILITAR - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="713486.45" data-nat="D">R$ 713.486,45 D</td>
            <td align="right" data-saldo="713486.45" data-nat="D">R$ 1.927,97 D</td>
            <td align="right" data-saldo="713486.45" data-nat="D">R$ 715.414,42 D</td></tr><tr class="filho310000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="319000000"></i> 3.1.9.0.0.00.00 - OUTRAS VARIAÇÕES PATRIMONIAIS DIMINUTIVAS - PESSOAL E ENCARGOS</td>
            <td align="right" data-saldo="997902604.23" data-nat="D">R$ 997.902.604,23 D</td>
            <td align="right" data-saldo="997902604.23" data-nat="D">R$ 150.984.293,40 D</td>
            <td align="right" data-saldo="997902604.23" data-nat="D">R$ 1.148.886.897,63 D</td></tr><tr class="filho319000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="319100000"></i> 3.1.9.1.0.00.00 - INDENIZAÇÕES E RESTITUIÇÕES TRABALHISTAS</td>
            <td align="right" data-saldo="20340757.43" data-nat="D">R$ 20.340.757,43 D</td>
            <td align="right" data-saldo="20340757.43" data-nat="D">R$ 8.067.018,62 D</td>
            <td align="right" data-saldo="20340757.43" data-nat="D">R$ 28.407.776,05 D</td></tr><tr class="filho319100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.9.1.1.00.00 - INDENIZAÇÕES E RESTITUIÇÕES TRABALHISTAS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="20340757.43" data-nat="D">R$ 20.340.757,43 D</td>
            <td align="right" data-saldo="20340757.43" data-nat="D">R$ 8.067.018,62 D</td>
            <td align="right" data-saldo="20340757.43" data-nat="D">R$ 28.407.776,05 D</td></tr><tr class="filho319000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="319200000"></i> 3.1.9.2.0.00.00 - PESSOAL REQUISITADO DE OUTROS ORGAOS E ENTES</td>
            <td align="right" data-saldo="575480.95" data-nat="D">R$ 575.480,95 D</td>
            <td align="right" data-saldo="575480.95" data-nat="D">R$ 72.728,73 D</td>
            <td align="right" data-saldo="575480.95" data-nat="D">R$ 648.209,68 D</td></tr><tr class="filho319200000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.9.2.1.00.00 - PESSOAL REQUISITADO DE OUTROS ORGAOS E ENTES - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="575480.95" data-nat="D">R$ 575.480,95 D</td>
            <td align="right" data-saldo="575480.95" data-nat="D">R$ 72.728,73 D</td>
            <td align="right" data-saldo="575480.95" data-nat="D">R$ 648.209,68 D</td></tr><tr class="filho319000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="319900000"></i> 3.1.9.9.0.00.00 - OUTRAS VPD DE PESSOAL E ENCARGOS</td>
            <td align="right" data-saldo="976986365.85" data-nat="D">R$ 976.986.365,85 D</td>
            <td align="right" data-saldo="976986365.85" data-nat="D">R$ 142.844.546,05 D</td>
            <td align="right" data-saldo="976986365.85" data-nat="D">R$ 1.119.830.911,90 D</td></tr><tr class="filho319900000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="319910000"></i> 3.1.9.9.1.00.00 - OUTRAS VPD DE PESSOAL E ENCARGOS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="976986365.85" data-nat="D">R$ 976.986.365,85 D</td>
            <td align="right" data-saldo="976986365.85" data-nat="D">R$ 142.844.546,05 D</td>
            <td align="right" data-saldo="976986365.85" data-nat="D">R$ 1.119.830.911,90 D</td></tr><tr class="filho319910000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.1.9.9.1.01.00 - OUTRAS VARIAÇÕES PATRIMONIAIS DIMINUTIVAS - PESSOAL </td>
            <td align="right" data-saldo="976986365.85" data-nat="D">R$ 976.986.365,85 D</td>
            <td align="right" data-saldo="976986365.85" data-nat="D">R$ 142.844.546,05 D</td>
            <td align="right" data-saldo="976986365.85" data-nat="D">R$ 1.119.830.911,90 D</td></tr><tr class="filho300000000 filho filho-hide nivel1 nivelPadrao">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="320000000"></i> 3.2.0.0.0.00.00 - BENEFÍCIOS PREVIDENCIÁRIOS E ASSISTENCIAIS</td>
            <td align="right" data-saldo="37379178.4" data-nat="D">R$ 37.379.178,40 D</td>
            <td align="right" data-saldo="37379178.4" data-nat="D">R$ 26.820.566,79 D</td>
            <td align="right" data-saldo="37379178.4" data-nat="D">R$ 64.199.745,19 D</td></tr><tr class="filho320000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="321000000"></i> 3.2.1.0.0.00.00 - APOSENTADORIAS E REFORMAS</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="0" data-nat="D">R$ 4.029.025,39 D</td>
            <td align="right" data-saldo="0" data-nat="D">R$ 4.029.025,39 D</td></tr><tr class="filho321000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="321300000"></i> 3.2.1.3.0.00.00 - RESERVA REMUNERADA - PESSOAL MILITAR</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="0" data-nat="D">R$ 4.029.025,39 D</td>
            <td align="right" data-saldo="0" data-nat="D">R$ 4.029.025,39 D</td></tr><tr class="filho321300000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="321310000"></i> 3.2.1.3.1.00.00 - RESERVA REMUNERADA - PESSOAL MILITAR - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="0" data-nat="D">R$ 4.029.025,39 D</td>
            <td align="right" data-saldo="0" data-nat="D">R$ 4.029.025,39 D</td></tr><tr class="filho321310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.2.1.3.1.99.00 - OUTRAS RESERVAS REMUNERADAS - PESSOAL MILITAR</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="0" data-nat="D">R$ 4.029.025,39 D</td>
            <td align="right" data-saldo="0" data-nat="D">R$ 4.029.025,39 D</td></tr><tr class="filho320000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="322000000"></i> 3.2.2.0.0.00.00 - PENSÕES</td>
            <td align="right" data-saldo="13511281.49" data-nat="D">R$ 13.511.281,49 D</td>
            <td align="right" data-saldo="13511281.49" data-nat="D">R$ 1.575.974,71 D</td>
            <td align="right" data-saldo="13511281.49" data-nat="D">R$ 15.087.256,20 D</td></tr><tr class="filho322000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="322900000"></i> 3.2.2.9.0.00.00 - OUTRAS PENSÕES</td>
            <td align="right" data-saldo="13511281.49" data-nat="D">R$ 13.511.281,49 D</td>
            <td align="right" data-saldo="13511281.49" data-nat="D">R$ 1.575.974,71 D</td>
            <td align="right" data-saldo="13511281.49" data-nat="D">R$ 15.087.256,20 D</td></tr><tr class="filho322900000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.2.2.9.1.00.00 - OUTRAS PENSÕES - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="13511281.49" data-nat="D">R$ 13.511.281,49 D</td>
            <td align="right" data-saldo="13511281.49" data-nat="D">R$ 1.575.974,71 D</td>
            <td align="right" data-saldo="13511281.49" data-nat="D">R$ 15.087.256,20 D</td></tr><tr class="filho320000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="324000000"></i> 3.2.4.0.0.00.00 - BENEFÍCIOS EVENTUAIS</td>
            <td align="right" data-saldo="23843092.77" data-nat="D">R$ 23.843.092,77 D</td>
            <td align="right" data-saldo="23843092.77" data-nat="D">R$ 21.212.843,97 D</td>
            <td align="right" data-saldo="23843092.77" data-nat="D">R$ 45.055.936,74 D</td></tr><tr class="filho324000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="324900000"></i> 3.2.4.9.0.00.00 - OUTROS BENEFÍCIOS EVENTUAIS</td>
            <td align="right" data-saldo="23843092.77" data-nat="D">R$ 23.843.092,77 D</td>
            <td align="right" data-saldo="23843092.77" data-nat="D">R$ 21.212.843,97 D</td>
            <td align="right" data-saldo="23843092.77" data-nat="D">R$ 45.055.936,74 D</td></tr><tr class="filho324900000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.2.4.9.1.00.00 - OUTROS BENEFÍCIOS EVENTUAIS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="23843092.77" data-nat="D">R$ 23.843.092,77 D</td>
            <td align="right" data-saldo="23843092.77" data-nat="D">R$ 21.212.843,97 D</td>
            <td align="right" data-saldo="23843092.77" data-nat="D">R$ 45.055.936,74 D</td></tr><tr class="filho320000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="329000000"></i> 3.2.9.0.0.00.00 - OUTROS BENEFÍCIOS PREVIDENCIÁRIOS E ASSISTENCIAIS</td>
            <td align="right" data-saldo="24804.14" data-nat="D">R$ 24.804,14 D</td>
            <td align="right" data-saldo="24804.14" data-nat="D">R$ 2.722,72 D</td>
            <td align="right" data-saldo="24804.14" data-nat="D">R$ 27.526,86 D</td></tr><tr class="filho329000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="329100000"></i> 3.2.9.1.0.00.00 - OUTROS BENEFÍCIOS PREVIDENCIÁRIOS E ASSISTENCIAIS - RPPS</td>
            <td align="right" data-saldo="24442.9" data-nat="D">R$ 24.442,90 D</td>
            <td align="right" data-saldo="24442.9" data-nat="D">R$ 2.722,72 D</td>
            <td align="right" data-saldo="24442.9" data-nat="D">R$ 27.165,62 D</td></tr><tr class="filho329100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="329110000"></i> 3.2.9.1.1.00.00 - OUTROS BENEFÍCIOS PREVIDENCIÁRIOS E ASSISTENCIAIS - RPPS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="24442.9" data-nat="D">R$ 24.442,90 D</td>
            <td align="right" data-saldo="24442.9" data-nat="D">R$ 2.722,72 D</td>
            <td align="right" data-saldo="24442.9" data-nat="D">R$ 27.165,62 D</td></tr><tr class="filho329110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="329111200"></i> 3.2.9.1.1.12.00 - SALARIO-FAMILIA</td>
            <td align="right" data-saldo="24442.9" data-nat="D">R$ 24.442,90 D</td>
            <td align="right" data-saldo="24442.9" data-nat="D">R$ 2.722,72 D</td>
            <td align="right" data-saldo="24442.9" data-nat="D">R$ 27.165,62 D</td></tr><tr class="filho329111200 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.2.9.1.1.12.01 - SALARIO FAMILIA - ATIVO PESSOAL CIVIL</td>
            <td align="right" data-saldo="24442.9" data-nat="D">R$ 24.442,90 D</td>
            <td align="right" data-saldo="24442.9" data-nat="D">R$ 2.722,72 D</td>
            <td align="right" data-saldo="24442.9" data-nat="D">R$ 27.165,62 D</td></tr><tr class="filho329000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="329200000"></i> 3.2.9.2.0.00.00 - OUTROS BENEFÍCIOS PREVIDENCIÁRIOS E ASSISTENCIAIS - RGPS</td>
            <td align="right" data-saldo="215.38" data-nat="D">R$ 215,38 D</td>
            <td align="right" data-saldo="215.38" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="215.38" data-nat="D">R$ 215,38 D</td></tr><tr class="filho329200000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.2.9.2.1.00.00 - OUTROS BENEFÍCIOS PREVIDENCIÁRIOS E ASSISTENCIAIS - RGPS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="215.38" data-nat="D">R$ 215,38 D</td>
            <td align="right" data-saldo="215.38" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="215.38" data-nat="D">R$ 215,38 D</td></tr><tr class="filho329000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="329300000"></i> 3.2.9.3.0.00.00 - OUTROS BENEFÍCIOS PREVIDENCIÁRIOS E ASSISTENCIAIS - MILITAR</td>
            <td align="right" data-saldo="145.86" data-nat="D">R$ 145,86 D</td>
            <td align="right" data-saldo="145.86" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="145.86" data-nat="D">R$ 145,86 D</td></tr><tr class="filho329300000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="329310000"></i> 3.2.9.3.1.00.00 - OUTROS BENEFÍCIOS PREVIDENCIÁRIOS E ASSISTENCIAIS - MILITAR - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="145.86" data-nat="D">R$ 145,86 D</td>
            <td align="right" data-saldo="145.86" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="145.86" data-nat="D">R$ 145,86 D</td></tr><tr class="filho329310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="329311000"></i> 3.2.9.3.1.10.00 - SALARIO-FAMILIA</td>
            <td align="right" data-saldo="145.86" data-nat="D">R$ 145,86 D</td>
            <td align="right" data-saldo="145.86" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="145.86" data-nat="D">R$ 145,86 D</td></tr><tr class="filho329311000 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.2.9.3.1.10.01 - SALARIO FAMILIA-ATIVO PESSOAL MILITAR</td>
            <td align="right" data-saldo="145.86" data-nat="D">R$ 145,86 D</td>
            <td align="right" data-saldo="145.86" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="145.86" data-nat="D">R$ 145,86 D</td></tr><tr class="filho300000000 filho filho-hide nivel1 nivelPadrao">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="330000000"></i> 3.3.0.0.0.00.00 - USO DE BENS, SERVIÇOS E CONSUMO DE CAPITAL FIXO</td>
            <td align="right" data-saldo="773573309.02" data-nat="D">R$ 773.573.309,02 D</td>
            <td align="right" data-saldo="773573309.02" data-nat="D">R$ 174.611.016,54 D</td>
            <td align="right" data-saldo="773573309.02" data-nat="D">R$ 948.184.325,56 D</td></tr><tr class="filho330000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="331000000"></i> 3.3.1.0.0.00.00 - USO DE MATERIAL DE CONSUMO</td>
            <td align="right" data-saldo="133276843.95" data-nat="D">R$ 133.276.843,95 D</td>
            <td align="right" data-saldo="133276843.95" data-nat="D">R$ 34.535.947,55 D</td>
            <td align="right" data-saldo="133276843.95" data-nat="D">R$ 167.812.791,50 D</td></tr><tr class="filho331000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="331100000"></i> 3.3.1.1.0.00.00 - CONSUMO DE MATERIAL</td>
            <td align="right" data-saldo="133600971.27" data-nat="D">R$ 133.600.971,27 D</td>
            <td align="right" data-saldo="133600971.27" data-nat="D">R$ 34.532.290,55 D</td>
            <td align="right" data-saldo="133600971.27" data-nat="D">R$ 168.133.261,82 D</td></tr><tr class="filho331100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="331110000"></i> 3.3.1.1.1.00.00 - CONSUMO DE MATERIAL - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="133600971.27" data-nat="D">R$ 133.600.971,27 D</td>
            <td align="right" data-saldo="133600971.27" data-nat="D">R$ 34.532.290,55 D</td>
            <td align="right" data-saldo="133600971.27" data-nat="D">R$ 168.133.261,82 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.01.00 - COMBUSTIVEIS E LUBRIFICANTES AUTOMOTIVOS</td>
            <td align="right" data-saldo="3363931.1" data-nat="D">R$ 3.363.931,10 D</td>
            <td align="right" data-saldo="3363931.1" data-nat="D">R$ 6.029.067,77 D</td>
            <td align="right" data-saldo="3363931.1" data-nat="D">R$ 9.392.998,87 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.03.00 - GAS E OUTROS MATERIAIS ENGARRAFADOS</td>
            <td align="right" data-saldo="1559980.24" data-nat="D">R$ 1.559.980,24 D</td>
            <td align="right" data-saldo="1559980.24" data-nat="D">R$ 471.173,67 D</td>
            <td align="right" data-saldo="1559980.24" data-nat="D">R$ 2.031.153,91 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.04.00 - EXPLOSIVOS E MUNIÇÕES</td>
            <td align="right" data-saldo="203962" data-nat="D">R$ 203.962,00 D</td>
            <td align="right" data-saldo="203962" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="203962" data-nat="D">R$ 203.962,00 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.05.00 - ALIMENTOS PARA ANIMAIS</td>
            <td align="right" data-saldo="28657.48" data-nat="D">R$ 28.657,48 D</td>
            <td align="right" data-saldo="28657.48" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="28657.48" data-nat="D">R$ 28.657,48 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.06.00 - GENEROS ALIMENTAÇÃO</td>
            <td align="right" data-saldo="15094936.06" data-nat="D">R$ 15.094.936,06 D</td>
            <td align="right" data-saldo="15094936.06" data-nat="D">R$ 3.717.958,28 D</td>
            <td align="right" data-saldo="15094936.06" data-nat="D">R$ 18.812.894,34 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.08.00 - MATERIAL FARMACOLÓGICO</td>
            <td align="right" data-saldo="26358337.51" data-nat="D">R$ 26.358.337,51 D</td>
            <td align="right" data-saldo="26358337.51" data-nat="D">R$ 1.959.245,74 D</td>
            <td align="right" data-saldo="26358337.51" data-nat="D">R$ 28.317.583,25 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.09.00 - MATERIAL ODONTOLÓGICO</td>
            <td align="right" data-saldo="101192.63" data-nat="D">R$ 101.192,63 D</td>
            <td align="right" data-saldo="101192.63" data-nat="D">R$ 1.846,38 D</td>
            <td align="right" data-saldo="101192.63" data-nat="D">R$ 103.039,01 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.10.00 - MATERIAL QUIMÍCO</td>
            <td align="right" data-saldo="19886464.11" data-nat="D">R$ 19.886.464,11 D</td>
            <td align="right" data-saldo="19886464.11" data-nat="D">R$ 853.721,39 D</td>
            <td align="right" data-saldo="19886464.11" data-nat="D">R$ 20.740.185,50 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.11.00 - MATERIAL DE COUDELARIA OU DE USO ZOOTÉCNICO</td>
            <td align="right" data-saldo="13306.22" data-nat="D">R$ 13.306,22 D</td>
            <td align="right" data-saldo="13306.22" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="13306.22" data-nat="D">R$ 13.306,22 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.13.00 - MATERIAL DE CAÇA E PESCA</td>
            <td align="right" data-saldo="8.48" data-nat="D">R$ 8,48 D</td>
            <td align="right" data-saldo="8.48" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="8.48" data-nat="D">R$ 8,48 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.14.00 - MATERIAL EDUCATIVO E ESPORTIVO</td>
            <td align="right" data-saldo="14605.61" data-nat="D">R$ 14.605,61 D</td>
            <td align="right" data-saldo="14605.61" data-nat="D">R$ 33.157,54 D</td>
            <td align="right" data-saldo="14605.61" data-nat="D">R$ 47.763,15 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.15.00 - MATERIAL PARA FESTIVIDADESE HOMENAGENS</td>
            <td align="right" data-saldo="4203181" data-nat="D">R$ 4.203.181,00 D</td>
            <td align="right" data-saldo="4203181" data-nat="D">R$ 12.089,00 D</td>
            <td align="right" data-saldo="4203181" data-nat="D">R$ 4.215.270,00 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.16.00 - MATERIAL DE EXPEDIENTE</td>
            <td align="right" data-saldo="1949095.8" data-nat="D">R$ 1.949.095,80 D</td>
            <td align="right" data-saldo="1949095.8" data-nat="D">R$ 456.375,10 D</td>
            <td align="right" data-saldo="1949095.8" data-nat="D">R$ 2.405.470,90 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.17.00 - MATERIAL DE PROCESSAMENTO DE DADOS</td>
            <td align="right" data-saldo="396745.59" data-nat="D">R$ 396.745,59 D</td>
            <td align="right" data-saldo="396745.59" data-nat="D">R$ 161.538,63 D</td>
            <td align="right" data-saldo="396745.59" data-nat="D">R$ 558.284,22 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.18.00 - MATERIAIS E MEDICAMENTOS P/USO VETERINÁRIO</td>
            <td align="right" data-saldo="45710.93" data-nat="D">R$ 45.710,93 D</td>
            <td align="right" data-saldo="45710.93" data-nat="D">R$ 556,18 D</td>
            <td align="right" data-saldo="45710.93" data-nat="D">R$ 46.267,11 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.19.00 - MATERIAL DE ACONDICIONAMENTO E EMBALAGEM</td>
            <td align="right" data-saldo="325382.71" data-nat="D">R$ 325.382,71 D</td>
            <td align="right" data-saldo="325382.71" data-nat="D">R$ 114.929,31 D</td>
            <td align="right" data-saldo="325382.71" data-nat="D">R$ 440.312,02 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.20.00 - MATERIAL DE CAMA, MESA E BANHO</td>
            <td align="right" data-saldo="63306.7" data-nat="D">R$ 63.306,70 D</td>
            <td align="right" data-saldo="63306.7" data-nat="D">R$ 65.847,33 D</td>
            <td align="right" data-saldo="63306.7" data-nat="D">R$ 129.154,03 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.21.00 - MATERIAL DE COPA E COZINHA</td>
            <td align="right" data-saldo="428712.33" data-nat="D">R$ 428.712,33 D</td>
            <td align="right" data-saldo="428712.33" data-nat="D">R$ 316.903,87 D</td>
            <td align="right" data-saldo="428712.33" data-nat="D">R$ 745.616,20 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.22.00 - MATERIAL DE LIMPEZA E PRODUTOS DE HIGIENIZAÇÃO</td>
            <td align="right" data-saldo="2345098.29" data-nat="D">R$ 2.345.098,29 D</td>
            <td align="right" data-saldo="2345098.29" data-nat="D">R$ 920.091,82 D</td>
            <td align="right" data-saldo="2345098.29" data-nat="D">R$ 3.265.190,11 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.23.00 - UNIFORMES, TECIDOS E AVIAMENTOS</td>
            <td align="right" data-saldo="3413616.82" data-nat="D">R$ 3.413.616,82 D</td>
            <td align="right" data-saldo="3413616.82" data-nat="D">R$ 948.181,25 D</td>
            <td align="right" data-saldo="3413616.82" data-nat="D">R$ 4.361.798,07 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.24.00 - MATERIAL PARA MANUTENÇÃO DE BENS IMÓVEIS E INSTALAÇÕES</td>
            <td align="right" data-saldo="13378097.87" data-nat="D">R$ 13.378.097,87 D</td>
            <td align="right" data-saldo="13378097.87" data-nat="D">R$ 6.774.804,72 D</td>
            <td align="right" data-saldo="13378097.87" data-nat="D">R$ 20.152.902,59 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.25.00 - MATERIAL PARA MANUTENÇÃO DE BENS</td>
            <td align="right" data-saldo="1527265.88" data-nat="D">R$ 1.527.265,88 D</td>
            <td align="right" data-saldo="1527265.88" data-nat="D">R$ 474.106,12 D</td>
            <td align="right" data-saldo="1527265.88" data-nat="D">R$ 2.001.372,00 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.26.00 - MATERIAL ELETRICO E ELETRONICO</td>
            <td align="right" data-saldo="376890.34" data-nat="D">R$ 376.890,34 D</td>
            <td align="right" data-saldo="376890.34" data-nat="D">R$ 182.395,09 D</td>
            <td align="right" data-saldo="376890.34" data-nat="D">R$ 559.285,43 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.27.00 -  MATERIAL DE MANOBRA E PATRULHAMENTO</td>
            <td align="right" data-saldo="483469.98" data-nat="D">R$ 483.469,98 D</td>
            <td align="right" data-saldo="483469.98" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="483469.98" data-nat="D">R$ 483.469,98 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.28.00 - MATERIAL DE PROTEÇÃO E SEGURANCA</td>
            <td align="right" data-saldo="5018323.98" data-nat="D">R$ 5.018.323,98 D</td>
            <td align="right" data-saldo="5018323.98" data-nat="D">R$ 376.162,82 D</td>
            <td align="right" data-saldo="5018323.98" data-nat="D">R$ 5.394.486,80 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.29.00 - MATERIAL PARA AUDIO, VIDEO E FOTO</td>
            <td align="right" data-saldo="13925.69" data-nat="D">R$ 13.925,69 D</td>
            <td align="right" data-saldo="13925.69" data-nat="D">R$ 1.147,94 D</td>
            <td align="right" data-saldo="13925.69" data-nat="D">R$ 15.073,63 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.30.00 - MATERIAL PARA COMUNICAÇÕES</td>
            <td align="right" data-saldo="21757.89" data-nat="D">R$ 21.757,89 D</td>
            <td align="right" data-saldo="21757.89" data-nat="D">R$ 2.159,79 D</td>
            <td align="right" data-saldo="21757.89" data-nat="D">R$ 23.917,68 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.31.00 - SEMENTES, MUDAS DE PLANTAS E INSUMOS</td>
            <td align="right" data-saldo="651.65" data-nat="D">R$ 651,65 D</td>
            <td align="right" data-saldo="651.65" data-nat="D">R$ 1.018.950,00 D</td>
            <td align="right" data-saldo="651.65" data-nat="D">R$ 1.019.601,65 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.32.00 - SUPRIMENTO DE AVIAÇÃO</td>
            <td align="right" data-saldo="75815.2" data-nat="D">R$ 75.815,20 D</td>
            <td align="right" data-saldo="75815.2" data-nat="D">R$ 261.788,48 D</td>
            <td align="right" data-saldo="75815.2" data-nat="D">R$ 337.603,68 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.33.00 - MATERIAL PARA PRODUÇÃO INDUSTRIAL</td>
            <td align="right" data-saldo="521357.2" data-nat="D">R$ 521.357,20 D</td>
            <td align="right" data-saldo="521357.2" data-nat="D">R$ 4.400,00 D</td>
            <td align="right" data-saldo="521357.2" data-nat="D">R$ 525.757,20 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.34.00 - SUPRIMENTOS PARA MAQ. E MOTORES NAVIOS E EMBARCAÇÕES</td>
            <td align="right" data-saldo="25395.96" data-nat="D">R$ 25.395,96 D</td>
            <td align="right" data-saldo="25395.96" data-nat="D">R$ 266,80 D</td>
            <td align="right" data-saldo="25395.96" data-nat="D">R$ 25.662,76 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.35.00 - MATERIAL LABORATORIAL</td>
            <td align="right" data-saldo="3132995.31" data-nat="D">R$ 3.132.995,31 D</td>
            <td align="right" data-saldo="3132995.31" data-nat="D">R$ 1.311.562,78 D</td>
            <td align="right" data-saldo="3132995.31" data-nat="D">R$ 4.444.558,09 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.36.00 - MATERIAL HOSPITALAR</td>
            <td align="right" data-saldo="19808001.15" data-nat="D">R$ 19.808.001,15 D</td>
            <td align="right" data-saldo="19808001.15" data-nat="D">R$ 3.575.105,11 D</td>
            <td align="right" data-saldo="19808001.15" data-nat="D">R$ 23.383.106,26 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.39.00 - MATERIAL PARA MANUTENÇÃO DE VEICULOS</td>
            <td align="right" data-saldo="5668420.12" data-nat="D">R$ 5.668.420,12 D</td>
            <td align="right" data-saldo="5668420.12" data-nat="D">R$ 1.772.322,92 D</td>
            <td align="right" data-saldo="5668420.12" data-nat="D">R$ 7.440.743,04 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.40.00 - MATERIAL BIOLÓGICO</td>
            <td align="right" data-saldo="466.64" data-nat="D">R$ 466,64 D</td>
            <td align="right" data-saldo="466.64" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="466.64" data-nat="D">R$ 466,64 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.41.00 - MATERIAL PARA UTILIZAÇÃO EM GRÁFICA</td>
            <td align="right" data-saldo="800" data-nat="D">R$ 800,00 D</td>
            <td align="right" data-saldo="800" data-nat="D">R$ 400,00 D</td>
            <td align="right" data-saldo="800" data-nat="D">R$ 1.200,00 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.42.00 - FERRAMENTAS</td>
            <td align="right" data-saldo="96212.89" data-nat="D">R$ 96.212,89 D</td>
            <td align="right" data-saldo="96212.89" data-nat="D">R$ 21.620,85 D</td>
            <td align="right" data-saldo="96212.89" data-nat="D">R$ 117.833,74 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.43.00 - MATERIAL PARA REABILITAÇÃO PROFISSIONAL</td>
            <td align="right" data-saldo="47122.46" data-nat="D">R$ 47.122,46 D</td>
            <td align="right" data-saldo="47122.46" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="47122.46" data-nat="D">R$ 47.122,46 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.44.00 - MATERIAL DE SINALIZAÇÃO VISUAL E OUTROS</td>
            <td align="right" data-saldo="300671.35" data-nat="D">R$ 300.671,35 D</td>
            <td align="right" data-saldo="300671.35" data-nat="D">R$ 110.897,44 D</td>
            <td align="right" data-saldo="300671.35" data-nat="D">R$ 411.568,79 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.45.00 - MATERIAL TÉCNICO PARA SELEÇÃO E TREINAMENTO</td>
            <td align="right" data-saldo="1710.85" data-nat="D">R$ 1.710,85 D</td>
            <td align="right" data-saldo="1710.85" data-nat="D">R$ 2.786,00 D</td>
            <td align="right" data-saldo="1710.85" data-nat="D">R$ 4.496,85 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.50.00 - BANDEIRAS, FLÂMULAS E INSIGNIAS</td>
            <td align="right" data-saldo="17128" data-nat="D">R$ 17.128,00 D</td>
            <td align="right" data-saldo="17128" data-nat="D">R$ 40.443,00 D</td>
            <td align="right" data-saldo="17128" data-nat="D">R$ 57.571,00 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.54.00 - MATERIAL P/MANUT.CON SERV.DE ESTRADAS E VIAS</td>
            <td align="right" data-saldo="3249591.19" data-nat="D">R$ 3.249.591,19 D</td>
            <td align="right" data-saldo="3249591.19" data-nat="D">R$ 2.538.114,39 D</td>
            <td align="right" data-saldo="3249591.19" data-nat="D">R$ 5.787.705,58 D</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.70.00 - AQUISIÇÃO DE SOFTWARES DE BASE</td>
            <td align="right" data-saldo="-16252.06" data-nat="C">R$ 16.252,06 C</td>
            <td align="right" data-saldo="-16252.06" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="-16252.06" data-nat="C">R$ 16.252,06 C</td></tr><tr class="filho331110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.1.1.99.00 - OUTROS MATERIAIS DE CONSUMO</td>
            <td align="right" data-saldo="54920.12" data-nat="D">R$ 54.920,12 D</td>
            <td align="right" data-saldo="54920.12" data-nat="D">R$ 173,04 D</td>
            <td align="right" data-saldo="54920.12" data-nat="D">R$ 55.093,16 D</td></tr><tr class="filho331000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="331200000"></i> 3.3.1.2.0.00.00 - DISTRIBUIÇÃO DE MATERIAL GRATUITO</td>
            <td align="right" data-saldo="-324127.32" data-nat="C">R$ 324.127,32 C</td>
            <td align="right" data-saldo="-324127.32" data-nat="D">R$ 3.657,00 D</td>
            <td align="right" data-saldo="-324127.32" data-nat="C">R$ 320.470,32 C</td></tr><tr class="filho331200000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="331210000"></i> 3.3.1.2.1.00.00 - DISTRIBUIÇÃO DE MATERIAL GRATUITO - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="-324127.32" data-nat="C">R$ 324.127,32 C</td>
            <td align="right" data-saldo="-324127.32" data-nat="D">R$ 3.657,00 D</td>
            <td align="right" data-saldo="-324127.32" data-nat="C">R$ 320.470,32 C</td></tr><tr class="filho331210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.2.1.06.00 - MATERIAL PARA DIVULGAÇÃO</td>
            <td align="right" data-saldo="3690" data-nat="D">R$ 3.690,00 D</td>
            <td align="right" data-saldo="3690" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="3690" data-nat="D">R$ 3.690,00 D</td></tr><tr class="filho331210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.1.2.1.99.00 - OUTROS MATERIAIS DE DISTRIBUIÇÃO GRATUITA</td>
            <td align="right" data-saldo="-327817.32" data-nat="C">R$ 327.817,32 C</td>
            <td align="right" data-saldo="-327817.32" data-nat="D">R$ 3.657,00 D</td>
            <td align="right" data-saldo="-327817.32" data-nat="C">R$ 324.160,32 C</td></tr><tr class="filho330000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="332000000"></i> 3.3.2.0.0.00.00 - SERVIÇOS</td>
            <td align="right" data-saldo="590661998.11" data-nat="D">R$ 590.661.998,11 D</td>
            <td align="right" data-saldo="590661998.11" data-nat="D">R$ 135.279.594,04 D</td>
            <td align="right" data-saldo="590661998.11" data-nat="D">R$ 725.941.592,15 D</td></tr><tr class="filho332000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="332100000"></i> 3.3.2.1.0.00.00 - DIÁRIAS</td>
            <td align="right" data-saldo="7311648.2" data-nat="D">R$ 7.311.648,20 D</td>
            <td align="right" data-saldo="7311648.2" data-nat="D">R$ 488.827,67 D</td>
            <td align="right" data-saldo="7311648.2" data-nat="D">R$ 7.800.475,87 D</td></tr><tr class="filho332100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="332110000"></i> 3.3.2.1.1.00.00 - DIÁRIAS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="7311648.2" data-nat="D">R$ 7.311.648,20 D</td>
            <td align="right" data-saldo="7311648.2" data-nat="D">R$ 488.827,67 D</td>
            <td align="right" data-saldo="7311648.2" data-nat="D">R$ 7.800.475,87 D</td></tr><tr class="filho332110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.1.1.01.00 -  DIARIAS PESSOAL CIVIL</td>
            <td align="right" data-saldo="6088279.87" data-nat="D">R$ 6.088.279,87 D</td>
            <td align="right" data-saldo="6088279.87" data-nat="D">R$ 416.413,05 D</td>
            <td align="right" data-saldo="6088279.87" data-nat="D">R$ 6.504.692,92 D</td></tr><tr class="filho332110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.1.1.02.00 -  DIARIAS - PESSOAL MILITAR</td>
            <td align="right" data-saldo="1169466.98" data-nat="D">R$ 1.169.466,98 D</td>
            <td align="right" data-saldo="1169466.98" data-nat="D">R$ 72.414,62 D</td>
            <td align="right" data-saldo="1169466.98" data-nat="D">R$ 1.241.881,60 D</td></tr><tr class="filho332110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.1.1.03.00 -  DIARIAS - COLABORADORES EVENTUAIS</td>
            <td align="right" data-saldo="53901.35" data-nat="D">R$ 53.901,35 D</td>
            <td align="right" data-saldo="53901.35" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="53901.35" data-nat="D">R$ 53.901,35 D</td></tr><tr class="filho332000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="332200000"></i> 3.3.2.2.0.00.00 - SERVIÇOS TERCEIROS - PF</td>
            <td align="right" data-saldo="16446948.68" data-nat="D">R$ 16.446.948,68 D</td>
            <td align="right" data-saldo="16446948.68" data-nat="D">R$ 4.283.350,14 D</td>
            <td align="right" data-saldo="16446948.68" data-nat="D">R$ 20.730.298,82 D</td></tr><tr class="filho332200000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="332210000"></i> 3.3.2.2.1.00.00 - SERVIÇOS TERCEIROS - PF - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="16446948.68" data-nat="D">R$ 16.446.948,68 D</td>
            <td align="right" data-saldo="16446948.68" data-nat="D">R$ 4.283.350,14 D</td>
            <td align="right" data-saldo="16446948.68" data-nat="D">R$ 20.730.298,82 D</td></tr><tr class="filho332210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.2.1.02.00 - PERICIAS</td>
            <td align="right" data-saldo="1080696.95" data-nat="D">R$ 1.080.696,95 D</td>
            <td align="right" data-saldo="1080696.95" data-nat="D">R$ 648.450,49 D</td>
            <td align="right" data-saldo="1080696.95" data-nat="D">R$ 1.729.147,44 D</td></tr><tr class="filho332210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.2.1.06.00 - SELEÇÃO E TREINAMENTO</td>
            <td align="right" data-saldo="72800" data-nat="D">R$ 72.800,00 D</td>
            <td align="right" data-saldo="72800" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="72800" data-nat="D">R$ 72.800,00 D</td></tr><tr class="filho332210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.2.1.11.00 - MANUTENÇÃO E CONSERVAÇÃO</td>
            <td align="right" data-saldo="217276.1" data-nat="D">R$ 217.276,10 D</td>
            <td align="right" data-saldo="217276.1" data-nat="D">R$ 19.642,48 D</td>
            <td align="right" data-saldo="217276.1" data-nat="D">R$ 236.918,58 D</td></tr><tr class="filho332210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.2.1.16.00 - ESTAGIARIOS</td>
            <td align="right" data-saldo="1550737.13" data-nat="D">R$ 1.550.737,13 D</td>
            <td align="right" data-saldo="1550737.13" data-nat="D">R$ 281.669,36 D</td>
            <td align="right" data-saldo="1550737.13" data-nat="D">R$ 1.832.406,49 D</td></tr><tr class="filho332210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.2.1.19.00 - CONFERENCIAS, EXPOSIÇÕES E ESPETACULOS</td>
            <td align="right" data-saldo="4000" data-nat="D">R$ 4.000,00 D</td>
            <td align="right" data-saldo="4000" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="4000" data-nat="D">R$ 4.000,00 D</td></tr><tr class="filho332210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.2.1.21.00 - LOCAÇÕES</td>
            <td align="right" data-saldo="5739454.63" data-nat="D">R$ 5.739.454,63 D</td>
            <td align="right" data-saldo="5739454.63" data-nat="D">R$ 991.988,42 D</td>
            <td align="right" data-saldo="5739454.63" data-nat="D">R$ 6.731.443,05 D</td></tr><tr class="filho332210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.2.1.22.00 - FORNECIMENTO DE ALIMENTAÇÃO</td>
            <td align="right" data-saldo="5561073.6" data-nat="D">R$ 5.561.073,60 D</td>
            <td align="right" data-saldo="5561073.6" data-nat="D">R$ 1.800.418,00 D</td>
            <td align="right" data-saldo="5561073.6" data-nat="D">R$ 7.361.491,60 D</td></tr><tr class="filho332210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.2.1.26.00 - SERV. DE APOIO ADMIN., TECNICO E OPERACIONAL</td>
            <td align="right" data-saldo="398122.8" data-nat="D">R$ 398.122,80 D</td>
            <td align="right" data-saldo="398122.8" data-nat="D">R$ 29.800,00 D</td>
            <td align="right" data-saldo="398122.8" data-nat="D">R$ 427.922,80 D</td></tr><tr class="filho332210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.2.1.30.00 - FRETES E TRANSPORTES DE ENCOMENDAS</td>
            <td align="right" data-saldo="64939.95" data-nat="D">R$ 64.939,95 D</td>
            <td align="right" data-saldo="64939.95" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="64939.95" data-nat="D">R$ 64.939,95 D</td></tr><tr class="filho332210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.2.1.31.00 - JETONS E GRATIFICAÇÕES A CONSELHEIROS</td>
            <td align="right" data-saldo="6660" data-nat="D">R$ 6.660,00 D</td>
            <td align="right" data-saldo="6660" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="6660" data-nat="D">R$ 6.660,00 D</td></tr><tr class="filho332210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.2.1.34.00 - SERVICOS DE AUDIO, VIDEO E FOTO</td>
            <td align="right" data-saldo="2350" data-nat="D">R$ 2.350,00 D</td>
            <td align="right" data-saldo="2350" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="2350" data-nat="D">R$ 2.350,00 D</td></tr><tr class="filho332210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.2.1.99.00 - OUTROS SERVICOS PRESTADOS POR PESSOA FISICA</td>
            <td align="right" data-saldo="1748837.52" data-nat="D">R$ 1.748.837,52 D</td>
            <td align="right" data-saldo="1748837.52" data-nat="D">R$ 511.381,39 D</td>
            <td align="right" data-saldo="1748837.52" data-nat="D">R$ 2.260.218,91 D</td></tr><tr class="filho332000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="332300000"></i> 3.3.2.3.0.00.00 - SERVIÇOS TERCEIROS - PJ</td>
            <td align="right" data-saldo="563755317.15" data-nat="D">R$ 563.755.317,15 D</td>
            <td align="right" data-saldo="563755317.15" data-nat="D">R$ 130.055.567,73 D</td>
            <td align="right" data-saldo="563755317.15" data-nat="D">R$ 693.810.884,88 D</td></tr><tr class="filho332300000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="332310000"></i> 3.3.2.3.1.00.00 - SERVIÇOS TERCEIROS - PJ - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="563755317.15" data-nat="D">R$ 563.755.317,15 D</td>
            <td align="right" data-saldo="563755317.15" data-nat="D">R$ 130.055.567,73 D</td>
            <td align="right" data-saldo="563755317.15" data-nat="D">R$ 693.810.884,88 D</td></tr><tr class="filho332310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.3.1.04.00 - COMUNICAÇÃO</td>
            <td align="right" data-saldo="11526034.71" data-nat="D">R$ 11.526.034,71 D</td>
            <td align="right" data-saldo="11526034.71" data-nat="D">R$ 2.149.343,79 D</td>
            <td align="right" data-saldo="11526034.71" data-nat="D">R$ 13.675.378,50 D</td></tr><tr class="filho332310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.3.1.05.00 - PUBLICIDADE</td>
            <td align="right" data-saldo="6906994.82" data-nat="D">R$ 6.906.994,82 D</td>
            <td align="right" data-saldo="6906994.82" data-nat="D">R$ 1.293.686,67 D</td>
            <td align="right" data-saldo="6906994.82" data-nat="D">R$ 8.200.681,49 D</td></tr><tr class="filho332310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.3.1.06.00 - MANUTENÇÃO E CONSERVAÇÃO</td>
            <td align="right" data-saldo="67427317.38" data-nat="D">R$ 67.427.317,38 D</td>
            <td align="right" data-saldo="67427317.38" data-nat="D">R$ 14.940.707,05 D</td>
            <td align="right" data-saldo="67427317.38" data-nat="D">R$ 82.368.024,43 D</td></tr><tr class="filho332310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.3.1.07.00 - SERVIÇOS DE APOIO</td>
            <td align="right" data-saldo="178102204.72" data-nat="D">R$ 178.102.204,72 D</td>
            <td align="right" data-saldo="178102204.72" data-nat="D">R$ 51.067.020,56 D</td>
            <td align="right" data-saldo="178102204.72" data-nat="D">R$ 229.169.225,28 D</td></tr><tr class="filho332310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.3.1.08.00 - SERVIÇOS DE AGUA E ESGOTO, ENERGIA ELETRICA, GAS E OUTROS.</td>
            <td align="right" data-saldo="54004924.95" data-nat="D">R$ 54.004.924,95 D</td>
            <td align="right" data-saldo="54004924.95" data-nat="D">R$ 5.528.567,26 D</td>
            <td align="right" data-saldo="54004924.95" data-nat="D">R$ 59.533.492,21 D</td></tr><tr class="filho332310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.3.1.09.00 - SERVIÇOS DE ALIMENTAÇÃO</td>
            <td align="right" data-saldo="27807637.53" data-nat="D">R$ 27.807.637,53 D</td>
            <td align="right" data-saldo="27807637.53" data-nat="D">R$ 4.173.256,95 D</td>
            <td align="right" data-saldo="27807637.53" data-nat="D">R$ 31.980.894,48 D</td></tr><tr class="filho332310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.3.1.10.00 - LOCAÇÕES</td>
            <td align="right" data-saldo="33153029.86" data-nat="D">R$ 33.153.029,86 D</td>
            <td align="right" data-saldo="33153029.86" data-nat="D">R$ 8.339.992,06 D</td>
            <td align="right" data-saldo="33153029.86" data-nat="D">R$ 41.493.021,92 D</td></tr><tr class="filho332310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.3.1.11.00 - SERVIÇOS RELACIONADOS A TECNOLOGIA DA INFORMAÇÃO</td>
            <td align="right" data-saldo="4187611.11" data-nat="D">R$ 4.187.611,11 D</td>
            <td align="right" data-saldo="4187611.11" data-nat="D">R$ 929.008,94 D</td>
            <td align="right" data-saldo="4187611.11" data-nat="D">R$ 5.116.620,05 D</td></tr><tr class="filho332310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.3.1.12.00 - SERVIÇOS DE TRANSPORTE</td>
            <td align="right" data-saldo="3425848.21" data-nat="D">R$ 3.425.848,21 D</td>
            <td align="right" data-saldo="3425848.21" data-nat="D">R$ 668.477,42 D</td>
            <td align="right" data-saldo="3425848.21" data-nat="D">R$ 4.094.325,63 D</td></tr><tr class="filho332310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.3.1.14.00 - ASSINATURAS DE PERIODICOS E ANUIDADES</td>
            <td align="right" data-saldo="420080.31" data-nat="D">R$ 420.080,31 D</td>
            <td align="right" data-saldo="420080.31" data-nat="D">R$ 150.526,14 D</td>
            <td align="right" data-saldo="420080.31" data-nat="D">R$ 570.606,45 D</td></tr><tr class="filho332310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.3.1.15.00 - CAPATAZIA, ESTIVA E PESAGEM</td>
            <td align="right" data-saldo="356090.4" data-nat="D">R$ 356.090,40 D</td>
            <td align="right" data-saldo="356090.4" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="356090.4" data-nat="D">R$ 356.090,40 D</td></tr><tr class="filho332310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.3.1.17.00 - COMISSOES E CORRETAGENS</td>
            <td align="right" data-saldo="15398553.61" data-nat="D">R$ 15.398.553,61 D</td>
            <td align="right" data-saldo="15398553.61" data-nat="D">R$ 2.754.700,05 D</td>
            <td align="right" data-saldo="15398553.61" data-nat="D">R$ 18.153.253,66 D</td></tr><tr class="filho332310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.3.1.18.00 - CONDOMINIOS</td>
            <td align="right" data-saldo="22501.02" data-nat="D">R$ 22.501,02 D</td>
            <td align="right" data-saldo="22501.02" data-nat="D">R$ 2.016,40 D</td>
            <td align="right" data-saldo="22501.02" data-nat="D">R$ 24.517,42 D</td></tr><tr class="filho332310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.3.1.21.00 - DIREITOS AUTORAIS</td>
            <td align="right" data-saldo="62680.77" data-nat="D">R$ 62.680,77 D</td>
            <td align="right" data-saldo="62680.77" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="62680.77" data-nat="D">R$ 62.680,77 D</td></tr><tr class="filho332310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.3.1.22.00 - EXPOSIÇÕES, CONGRESSOS, CONFERENCIAS E OUTROS</td>
            <td align="right" data-saldo="206444" data-nat="D">R$ 206.444,00 D</td>
            <td align="right" data-saldo="206444" data-nat="D">R$ 132.916,00 D</td>
            <td align="right" data-saldo="206444" data-nat="D">R$ 339.360,00 D</td></tr><tr class="filho332310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.3.1.23.00 - FESTIVIDADES E HOMENAGENS</td>
            <td align="right" data-saldo="469423.87" data-nat="D">R$ 469.423,87 D</td>
            <td align="right" data-saldo="469423.87" data-nat="D">R$ 46.069,20 D</td>
            <td align="right" data-saldo="469423.87" data-nat="D">R$ 515.493,07 D</td></tr><tr class="filho332310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.3.1.25.00 - HOSPEDAGENS</td>
            <td align="right" data-saldo="157480.24" data-nat="D">R$ 157.480,24 D</td>
            <td align="right" data-saldo="157480.24" data-nat="D">R$ 50.699,81 D</td>
            <td align="right" data-saldo="157480.24" data-nat="D">R$ 208.180,05 D</td></tr><tr class="filho332310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.3.1.29.00 - SEGUROS EM GERAL</td>
            <td align="right" data-saldo="303207.16" data-nat="D">R$ 303.207,16 D</td>
            <td align="right" data-saldo="303207.16" data-nat="D">R$ 15.050,67 D</td>
            <td align="right" data-saldo="303207.16" data-nat="D">R$ 318.257,83 D</td></tr><tr class="filho332310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.3.1.30.00 - SELEÇÃO E TREINAMENTO</td>
            <td align="right" data-saldo="2279487.1" data-nat="D">R$ 2.279.487,10 D</td>
            <td align="right" data-saldo="2279487.1" data-nat="D">R$ 156.977,60 D</td>
            <td align="right" data-saldo="2279487.1" data-nat="D">R$ 2.436.464,70 D</td></tr><tr class="filho332310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.3.1.31.00 - SERV.MEDICO-HOSPITALAR,ODONTOL.E LABORATORIAIS</td>
            <td align="right" data-saldo="41599134.57" data-nat="D">R$ 41.599.134,57 D</td>
            <td align="right" data-saldo="41599134.57" data-nat="D">R$ 6.700.880,93 D</td>
            <td align="right" data-saldo="41599134.57" data-nat="D">R$ 48.300.015,50 D</td></tr><tr class="filho332310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.3.1.32.00 - SERVIÇOS BANCARIOS</td>
            <td align="right" data-saldo="5386320.64" data-nat="D">R$ 5.386.320,64 D</td>
            <td align="right" data-saldo="5386320.64" data-nat="D">R$ 941.120,18 D</td>
            <td align="right" data-saldo="5386320.64" data-nat="D">R$ 6.327.440,82 D</td></tr><tr class="filho332310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.3.1.33.00 - SERVIÇOS DE ANALISES E PESQUISA CIENTIFICAS</td>
            <td align="right" data-saldo="101899.92" data-nat="D">R$ 101.899,92 D</td>
            <td align="right" data-saldo="101899.92" data-nat="D">R$ 8.491,66 D</td>
            <td align="right" data-saldo="101899.92" data-nat="D">R$ 110.391,58 D</td></tr><tr class="filho332310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.3.1.34.00 - SERVIÇOS DE APOIO DO ENSINO</td>
            <td align="right" data-saldo="70999.44" data-nat="D">R$ 70.999,44 D</td>
            <td align="right" data-saldo="70999.44" data-nat="D">R$ 53.029,90 D</td>
            <td align="right" data-saldo="70999.44" data-nat="D">R$ 124.029,34 D</td></tr><tr class="filho332310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.3.1.36.00 - SERVIÇOS DE AUDIO VIDEO E FOTO</td>
            <td align="right" data-saldo="21700" data-nat="D">R$ 21.700,00 D</td>
            <td align="right" data-saldo="21700" data-nat="D">R$ 33.800,00 D</td>
            <td align="right" data-saldo="21700" data-nat="D">R$ 55.500,00 D</td></tr><tr class="filho332310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.3.1.40.00 - SERVIÇOS DE COPIAS E REPRODUÇÃO DE DOCUMENTOS</td>
            <td align="right" data-saldo="4293111.77" data-nat="D">R$ 4.293.111,77 D</td>
            <td align="right" data-saldo="4293111.77" data-nat="D">R$ 1.141.535,30 D</td>
            <td align="right" data-saldo="4293111.77" data-nat="D">R$ 5.434.647,07 D</td></tr><tr class="filho332310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.3.1.43.00 - SERVIÇOS DE PRODUÇÃO INDUSTRIAL</td>
            <td align="right" data-saldo="1356910" data-nat="D">R$ 1.356.910,00 D</td>
            <td align="right" data-saldo="1356910" data-nat="D">R$ 1.356.910,00 D</td>
            <td align="right" data-saldo="1356910" data-nat="D">R$ 2.713.820,00 D</td></tr><tr class="filho332310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.3.1.45.00 - SERVIÇOS FUNERARIOS</td>
            <td align="right" data-saldo="643912.92" data-nat="D">R$ 643.912,92 D</td>
            <td align="right" data-saldo="643912.92" data-nat="D">R$ 93.984,88 D</td>
            <td align="right" data-saldo="643912.92" data-nat="D">R$ 737.897,80 D</td></tr><tr class="filho332310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.3.1.46.00 - SERVIÇOS GRÁFICOS E EDITORIAIS</td>
            <td align="right" data-saldo="1657179.66" data-nat="D">R$ 1.657.179,66 D</td>
            <td align="right" data-saldo="1657179.66" data-nat="D">R$ 648.081,83 D</td>
            <td align="right" data-saldo="1657179.66" data-nat="D">R$ 2.305.261,49 D</td></tr><tr class="filho332310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.3.1.51.00 - SERVIÇOS TECNICOS PROFISSIONAIS</td>
            <td align="right" data-saldo="2894326.69" data-nat="D">R$ 2.894.326,69 D</td>
            <td align="right" data-saldo="2894326.69" data-nat="D">R$ 624.926,53 D</td>
            <td align="right" data-saldo="2894326.69" data-nat="D">R$ 3.519.253,22 D</td></tr><tr class="filho332310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.3.1.54.00 - LOCAÇÃO DE MAO-DE-OBRA</td>
            <td align="right" data-saldo="56062582.04" data-nat="D">R$ 56.062.582,04 D</td>
            <td align="right" data-saldo="56062582.04" data-nat="D">R$ 11.288.516,01 D</td>
            <td align="right" data-saldo="56062582.04" data-nat="D">R$ 67.351.098,05 D</td></tr><tr class="filho332310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.3.1.56.00 - PASSAGENS E DESPESAS COM LOCOMOÇÃO</td>
            <td align="right" data-saldo="21844865.4" data-nat="D">R$ 21.844.865,40 D</td>
            <td align="right" data-saldo="21844865.4" data-nat="D">R$ 2.052.672,56 D</td>
            <td align="right" data-saldo="21844865.4" data-nat="D">R$ 23.897.537,96 D</td></tr><tr class="filho332310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.3.1.99.00 - OUTROS SERVIÇOS TERCEIROS - PJ</td>
            <td align="right" data-saldo="21604822.33" data-nat="D">R$ 21.604.822,33 D</td>
            <td align="right" data-saldo="21604822.33" data-nat="D">R$ 12.712.601,38 D</td>
            <td align="right" data-saldo="21604822.33" data-nat="D">R$ 34.317.423,71 D</td></tr><tr class="filho332000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="332400000"></i> 3.3.2.4.0.00.00 - CONTRATO DE TERCEIRIZAÇÃO POR SUBSTITUIÇÃO DE MÃO DE OBRA – ART. 18 § 1, LC 101/00</td>
            <td align="right" data-saldo="3148084.08" data-nat="D">R$ 3.148.084,08 D</td>
            <td align="right" data-saldo="3148084.08" data-nat="D">R$ 451.848,50 D</td>
            <td align="right" data-saldo="3148084.08" data-nat="D">R$ 3.599.932,58 D</td></tr><tr class="filho332400000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.2.4.1.00.00 - CONTRATO DE TERCEIRIZAÇÃO POR SUBSTITUIÇÃO DE MÃO DE OBRA - ART. 18 § 1, LC 101/00 - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="3148084.08" data-nat="D">R$ 3.148.084,08 D</td>
            <td align="right" data-saldo="3148084.08" data-nat="D">R$ 451.848,50 D</td>
            <td align="right" data-saldo="3148084.08" data-nat="D">R$ 3.599.932,58 D</td></tr><tr class="filho330000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="333000000"></i> 3.3.3.0.0.00.00 - DEPRECIAÇÃO, AMORTIZAÇÃO E EXAUSTÃO</td>
            <td align="right" data-saldo="49634466.96" data-nat="D">R$ 49.634.466,96 D</td>
            <td align="right" data-saldo="49634466.96" data-nat="D">R$ 4.795.474,95 D</td>
            <td align="right" data-saldo="49634466.96" data-nat="D">R$ 54.429.941,91 D</td></tr><tr class="filho333000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="333100000"></i> 3.3.3.1.0.00.00 - DEPRECIAÇÃO</td>
            <td align="right" data-saldo="49634466.96" data-nat="D">R$ 49.634.466,96 D</td>
            <td align="right" data-saldo="49634466.96" data-nat="D">R$ 4.795.474,95 D</td>
            <td align="right" data-saldo="49634466.96" data-nat="D">R$ 54.429.941,91 D</td></tr><tr class="filho333100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="333110000"></i> 3.3.3.1.1.00.00 - DEPRECIAÇÃO - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="49634466.96" data-nat="D">R$ 49.634.466,96 D</td>
            <td align="right" data-saldo="49634466.96" data-nat="D">R$ 4.795.474,95 D</td>
            <td align="right" data-saldo="49634466.96" data-nat="D">R$ 54.429.941,91 D</td></tr><tr class="filho333110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="333110100"></i> 3.3.3.1.1.01.00 - DEPRECIAÇÃO DE IMOBILIZADO</td>
            <td align="right" data-saldo="49634466.96" data-nat="D">R$ 49.634.466,96 D</td>
            <td align="right" data-saldo="49634466.96" data-nat="D">R$ 4.795.474,95 D</td>
            <td align="right" data-saldo="49634466.96" data-nat="D">R$ 54.429.941,91 D</td></tr><tr class="filho333110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.3.1.1.01.01 - DEPRECIAÇÃO DE BENS MÓVEIS</td>
            <td align="right" data-saldo="49633551.68" data-nat="D">R$ 49.633.551,68 D</td>
            <td align="right" data-saldo="49633551.68" data-nat="D">R$ 4.795.474,95 D</td>
            <td align="right" data-saldo="49633551.68" data-nat="D">R$ 54.429.026,63 D</td></tr><tr class="filho333110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.3.3.1.1.01.02 - DEPRECIAÇÃO DE BENS IMÓVEIS</td>
            <td align="right" data-saldo="915.28" data-nat="D">R$ 915,28 D</td>
            <td align="right" data-saldo="915.28" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="915.28" data-nat="D">R$ 915,28 D</td></tr><tr class="filho300000000 filho filho-hide nivel1 nivelPadrao">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="340000000"></i> 3.4.0.0.0.00.00 - VARIAÇÕES PATRIMONIAIS DIMINUTIVAS FINANCEIRAS</td>
            <td align="right" data-saldo="1160644389.49" data-nat="D">R$ 1.160.644.389,49 D</td>
            <td align="right" data-saldo="1160644389.49" data-nat="D">R$ 12.351.008,52 D</td>
            <td align="right" data-saldo="1160644389.49" data-nat="D">R$ 1.172.995.398,01 D</td></tr><tr class="filho340000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="341000000"></i> 3.4.1.0.0.00.00 - JUROS E ENCARGOS DE EMPRÉSTIMOS E FINANCIAMENTOS OBTIDOS</td>
            <td align="right" data-saldo="106460337.76" data-nat="D">R$ 106.460.337,76 D</td>
            <td align="right" data-saldo="106460337.76" data-nat="D">R$ 3.176.214,83 D</td>
            <td align="right" data-saldo="106460337.76" data-nat="D">R$ 109.636.552,59 D</td></tr><tr class="filho341000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="341100000"></i> 3.4.1.1.0.00.00 - JUROS E ENCARGOS DA DÍVIDA CONTRATUAL INTERNA</td>
            <td align="right" data-saldo="57104609.34" data-nat="D">R$ 57.104.609,34 D</td>
            <td align="right" data-saldo="57104609.34" data-nat="D">R$ 142.356,63 D</td>
            <td align="right" data-saldo="57104609.34" data-nat="D">R$ 57.246.965,97 D</td></tr><tr class="filho341100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="341110000"></i> 3.4.1.1.1.00.00 - JUROS E ENCARGOS DA DÍVIDA CONTRATUAL INTERNA - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="57104609.34" data-nat="D">R$ 57.104.609,34 D</td>
            <td align="right" data-saldo="57104609.34" data-nat="D">R$ 142.356,63 D</td>
            <td align="right" data-saldo="57104609.34" data-nat="D">R$ 57.246.965,97 D</td></tr><tr class="filho341110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.4.1.1.1.01.00 - JUROS DA DÍVIDA CONTR.C/INSTIT.FINANCEIRAS</td>
            <td align="right" data-saldo="57104609.34" data-nat="D">R$ 57.104.609,34 D</td>
            <td align="right" data-saldo="57104609.34" data-nat="D">R$ 142.356,63 D</td>
            <td align="right" data-saldo="57104609.34" data-nat="D">R$ 57.246.965,97 D</td></tr><tr class="filho341000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="341200000"></i> 3.4.1.2.0.00.00 - JUROS E ENCARGOS DA DÍVIDA CONTRATUAL EXTERNA</td>
            <td align="right" data-saldo="49355728.42" data-nat="D">R$ 49.355.728,42 D</td>
            <td align="right" data-saldo="49355728.42" data-nat="D">R$ 3.033.858,20 D</td>
            <td align="right" data-saldo="49355728.42" data-nat="D">R$ 52.389.586,62 D</td></tr><tr class="filho341200000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="341210000"></i> 3.4.1.2.1.00.00 - JUROS E ENCARGOS DA DÍVIDA CONTRATUAL EXTERNA - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="49355728.42" data-nat="D">R$ 49.355.728,42 D</td>
            <td align="right" data-saldo="49355728.42" data-nat="D">R$ 3.033.858,20 D</td>
            <td align="right" data-saldo="49355728.42" data-nat="D">R$ 52.389.586,62 D</td></tr><tr class="filho341210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.4.1.2.1.01.00 - JUROS DA DÍVIDA CONTRATADA NO EXTERIOR</td>
            <td align="right" data-saldo="49355728.42" data-nat="D">R$ 49.355.728,42 D</td>
            <td align="right" data-saldo="49355728.42" data-nat="D">R$ 3.033.858,20 D</td>
            <td align="right" data-saldo="49355728.42" data-nat="D">R$ 52.389.586,62 D</td></tr><tr class="filho340000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="342000000"></i> 3.4.2.0.0.00.00 - JUROS E ENCARGOS DE MORA</td>
            <td align="right" data-saldo="93010.95" data-nat="D">R$ 93.010,95 D</td>
            <td align="right" data-saldo="93010.95" data-nat="C">R$ 2.810,07 C</td>
            <td align="right" data-saldo="93010.95" data-nat="D">R$ 90.200,88 D</td></tr><tr class="filho342000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="342300000"></i> 3.4.2.3.0.00.00 - JUROS E ENCARGOS DE MORA DE AQUISIÇÃO DE BENS E SERVIÇOS</td>
            <td align="right" data-saldo="7178.91" data-nat="D">R$ 7.178,91 D</td>
            <td align="right" data-saldo="7178.91" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="7178.91" data-nat="D">R$ 7.178,91 D</td></tr><tr class="filho342300000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="342310000"></i> 3.4.2.3.1.00.00 - JUROS E ENCARGOS DE MORA DE AQUISIÇÃO DE BENS E SERVIÇOS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="7178.91" data-nat="D">R$ 7.178,91 D</td>
            <td align="right" data-saldo="7178.91" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="7178.91" data-nat="D">R$ 7.178,91 D</td></tr><tr class="filho342310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="342319900"></i> 3.4.2.3.1.99.00 - OUTROS ENCARGOS DE MORA</td>
            <td align="right" data-saldo="7178.91" data-nat="D">R$ 7.178,91 D</td>
            <td align="right" data-saldo="7178.91" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="7178.91" data-nat="D">R$ 7.178,91 D</td></tr><tr class="filho342000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="342400000"></i> 3.4.2.4.0.00.00 - JUROS E ENCARGOS DE MORA DE OBRIGAÇÕES TRIBUTÁRIAS</td>
            <td align="right" data-saldo="54491.3" data-nat="D">R$ 54.491,30 D</td>
            <td align="right" data-saldo="54491.3" data-nat="D">R$ 354,57 D</td>
            <td align="right" data-saldo="54491.3" data-nat="D">R$ 54.845,87 D</td></tr><tr class="filho342400000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="342410000"></i> 3.4.2.4.1.00.00 - JUROS E ENCARGOS DE MORA DE OBRIGAÇÕES TRIBUTÁRIAS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="54491.3" data-nat="D">R$ 54.491,30 D</td>
            <td align="right" data-saldo="54491.3" data-nat="D">R$ 354,57 D</td>
            <td align="right" data-saldo="54491.3" data-nat="D">R$ 54.845,87 D</td></tr><tr class="filho342410000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.4.2.4.1.01.00 - JUROS</td>
            <td align="right" data-saldo="13505.63" data-nat="D">R$ 13.505,63 D</td>
            <td align="right" data-saldo="13505.63" data-nat="C">R$ 145,43 C</td>
            <td align="right" data-saldo="13505.63" data-nat="D">R$ 13.360,20 D</td></tr><tr class="filho342410000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.4.2.4.1.02.00 - MULTAS DEDUTÍVEIS</td>
            <td align="right" data-saldo="14272.93" data-nat="D">R$ 14.272,93 D</td>
            <td align="right" data-saldo="14272.93" data-nat="D">R$ 500,00 D</td>
            <td align="right" data-saldo="14272.93" data-nat="D">R$ 14.772,93 D</td></tr><tr class="filho342410000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.4.2.4.1.03.00 - MULTAS INDEDUTÍVEIS</td>
            <td align="right" data-saldo="26712.74" data-nat="D">R$ 26.712,74 D</td>
            <td align="right" data-saldo="26712.74" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="26712.74" data-nat="D">R$ 26.712,74 D</td></tr><tr class="filho342000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="342900000"></i> 3.4.2.9.0.00.00 - OUTROS JUROS E ENCARGOS DE MORA</td>
            <td align="right" data-saldo="31340.74" data-nat="D">R$ 31.340,74 D</td>
            <td align="right" data-saldo="31340.74" data-nat="C">R$ 3.164,64 C</td>
            <td align="right" data-saldo="31340.74" data-nat="D">R$ 28.176,10 D</td></tr><tr class="filho342900000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.4.2.9.1.00.00 - OUTROS JUROS E ENCARGOS DE MORA - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="31340.74" data-nat="D">R$ 31.340,74 D</td>
            <td align="right" data-saldo="31340.74" data-nat="C">R$ 3.164,64 C</td>
            <td align="right" data-saldo="31340.74" data-nat="D">R$ 28.176,10 D</td></tr><tr class="filho340000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="343000000"></i> 3.4.3.0.0.00.00 - VARIAÇÕES MONETÁRIAS E CAMBIAIS</td>
            <td align="right" data-saldo="976299699.74" data-nat="D">R$ 976.299.699,74 D</td>
            <td align="right" data-saldo="976299699.74" data-nat="D">R$ 9.177.603,76 D</td>
            <td align="right" data-saldo="976299699.74" data-nat="D">R$ 985.477.303,50 D</td></tr><tr class="filho343000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="343900000"></i> 3.4.3.9.0.00.00 - OUTRAS VARIAÇÕES MONETÁRIAS E CAMBIAIS</td>
            <td align="right" data-saldo="976299699.74" data-nat="D">R$ 976.299.699,74 D</td>
            <td align="right" data-saldo="976299699.74" data-nat="D">R$ 9.177.603,76 D</td>
            <td align="right" data-saldo="976299699.74" data-nat="D">R$ 985.477.303,50 D</td></tr><tr class="filho343900000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="343910000"></i> 3.4.3.9.1.00.00 - OUTRAS VARIAÇÕES MONETÁRIAS E CAMBIAIS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="976299699.74" data-nat="D">R$ 976.299.699,74 D</td>
            <td align="right" data-saldo="976299699.74" data-nat="D">R$ 9.177.603,76 D</td>
            <td align="right" data-saldo="976299699.74" data-nat="D">R$ 985.477.303,50 D</td></tr><tr class="filho343910000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.4.3.9.1.99.00 - OUTRAS VARIAÇÕES CAMBIAIS</td>
            <td align="right" data-saldo="976299699.74" data-nat="D">R$ 976.299.699,74 D</td>
            <td align="right" data-saldo="976299699.74" data-nat="D">R$ 9.177.603,76 D</td>
            <td align="right" data-saldo="976299699.74" data-nat="D">R$ 985.477.303,50 D</td></tr><tr class="filho340000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="349000000"></i> 3.4.9.0.0.00.00 - OUTRAS VARIAÇÕES PATRIMONIAIS DIMINUTIVAS - FINANCEIRAS</td>
            <td align="right" data-saldo="77791341.04" data-nat="D">R$ 77.791.341,04 D</td>
            <td align="right" data-saldo="77791341.04" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="77791341.04" data-nat="D">R$ 77.791.341,04 D</td></tr><tr class="filho349000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="349900000"></i> 3.4.9.9.0.00.00 - OUTRAS VARIAÇÕES PATRIMONIAIS DIMINUTIVAS FINANCEIRAS</td>
            <td align="right" data-saldo="77791341.04" data-nat="D">R$ 77.791.341,04 D</td>
            <td align="right" data-saldo="77791341.04" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="77791341.04" data-nat="D">R$ 77.791.341,04 D</td></tr><tr class="filho349900000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.4.9.9.1.00.00 - OUTRAS VARIAÇÕES PATRIMONIAIS DIMINUTIVAS FINANCEIRAS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="77791341.04" data-nat="D">R$ 77.791.341,04 D</td>
            <td align="right" data-saldo="77791341.04" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="77791341.04" data-nat="D">R$ 77.791.341,04 D</td></tr><tr class="filho300000000 filho filho-hide nivel1 nivelPadrao">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="350000000"></i> 3.5.0.0.0.00.00 - TRANSFERÊNCIAS E DELEGAÇÕES CONCEDIDAS</td>
            <td align="right" data-saldo="5436794865.49" data-nat="D">R$ 5.436.794.865,49 D</td>
            <td align="right" data-saldo="5436794865.49" data-nat="D">R$ 913.753.950,37 D</td>
            <td align="right" data-saldo="5436794865.49" data-nat="D">R$ 6.350.548.815,86 D</td></tr><tr class="filho350000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="351000000"></i> 3.5.1.0.0.00.00 - TRANSFERÊNCIAS INTRAGOVERNAMENTAIS</td>
            <td align="right" data-saldo="4888741156.9" data-nat="D">R$ 4.888.741.156,90 D</td>
            <td align="right" data-saldo="4888741156.9" data-nat="D">R$ 837.405.142,19 D</td>
            <td align="right" data-saldo="4888741156.9" data-nat="D">R$ 5.726.146.299,09 D</td></tr><tr class="filho351000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="351100000"></i> 3.5.1.1.0.00.00 - TRANSFERÊNCIAS CONCEDIDAS PARA A EXECUÇÃO ORCAMENTARIA</td>
            <td align="right" data-saldo="4416662962.45" data-nat="D">R$ 4.416.662.962,45 D</td>
            <td align="right" data-saldo="4416662962.45" data-nat="D">R$ 745.847.412,30 D</td>
            <td align="right" data-saldo="4416662962.45" data-nat="D">R$ 5.162.510.374,75 D</td></tr><tr class="filho351100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="351120000"></i> 3.5.1.1.2.00.00 - TRANSFERÊNCIAS CONCEDIDAS PARA A EXECUÇÃO ORÇAMENTÁRIA - INTRA OFSS</td>
            <td align="right" data-saldo="4416662962.45" data-nat="D">R$ 4.416.662.962,45 D</td>
            <td align="right" data-saldo="4416662962.45" data-nat="D">R$ 745.847.412,30 D</td>
            <td align="right" data-saldo="4416662962.45" data-nat="D">R$ 5.162.510.374,75 D</td></tr><tr class="filho351120000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.5.1.1.2.01.00 - COTA CONCEDIDA </td>
            <td align="right" data-saldo="4193955210.45" data-nat="D">R$ 4.193.955.210,45 D</td>
            <td align="right" data-saldo="4193955210.45" data-nat="D">R$ 715.864.362,22 D</td>
            <td align="right" data-saldo="4193955210.45" data-nat="D">R$ 4.909.819.572,67 D</td></tr><tr class="filho351120000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.5.1.1.2.04.00 - RECURSOS ARRECADADOS - CONCEDIDOS </td>
            <td align="right" data-saldo="222707752" data-nat="D">R$ 222.707.752,00 D</td>
            <td align="right" data-saldo="222707752" data-nat="D">R$ 29.983.050,08 D</td>
            <td align="right" data-saldo="222707752" data-nat="D">R$ 252.690.802,08 D</td></tr><tr class="filho351000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="351200000"></i> 3.5.1.2.0.00.00 - TRANSFERÊNCIAS CONCEDIDAS - INDEPENDENTES DE EXECUÇÃO ORÇAMENTÁRIA</td>
            <td align="right" data-saldo="6556614.91" data-nat="D">R$ 6.556.614,91 D</td>
            <td align="right" data-saldo="6556614.91" data-nat="D">R$ 23.485.453,94 D</td>
            <td align="right" data-saldo="6556614.91" data-nat="D">R$ 30.042.068,85 D</td></tr><tr class="filho351200000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="351220000"></i> 3.5.1.2.2.00.00 - TRANSFERÊNCIAS CONCEDIDAS - INDEPENDENTES DE EXECUÇÃO ORÇAMENTÁRIA - INTRA OFSS</td>
            <td align="right" data-saldo="6556614.91" data-nat="D">R$ 6.556.614,91 D</td>
            <td align="right" data-saldo="6556614.91" data-nat="D">R$ 23.485.453,94 D</td>
            <td align="right" data-saldo="6556614.91" data-nat="D">R$ 30.042.068,85 D</td></tr><tr class="filho351220000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="351220200"></i> 3.5.1.2.2.02.00 - TRANSFERÊNCIAS NÃO FINANCEIRAS CONCEDIDAS - INDEPENDENTES DE EXECUÇÃO ORÇAMENTÁRIA</td>
            <td align="right" data-saldo="6556614.91" data-nat="D">R$ 6.556.614,91 D</td>
            <td align="right" data-saldo="6556614.91" data-nat="D">R$ 23.485.453,94 D</td>
            <td align="right" data-saldo="6556614.91" data-nat="D">R$ 30.042.068,85 D</td></tr><tr class="filho351220200 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.5.1.2.2.02.03 - TRANFERÊNCIAS CONCEDIDAS DE BENS MÓVEIS </td>
            <td align="right" data-saldo="6556614.91" data-nat="D">R$ 6.556.614,91 D</td>
            <td align="right" data-saldo="6556614.91" data-nat="D">R$ 23.485.453,94 D</td>
            <td align="right" data-saldo="6556614.91" data-nat="D">R$ 30.042.068,85 D</td></tr><tr class="filho351000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="351300000"></i> 3.5.1.3.0.00.00 - TRANSFERENCIAS CONCEDIDAS PARA APORTES DE RECURSOS PARA O RPPS</td>
            <td align="right" data-saldo="465521579.54" data-nat="D">R$ 465.521.579,54 D</td>
            <td align="right" data-saldo="465521579.54" data-nat="D">R$ 68.072.275,95 D</td>
            <td align="right" data-saldo="465521579.54" data-nat="D">R$ 533.593.855,49 D</td></tr><tr class="filho351300000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="351320000"></i> 3.5.1.3.2.00.00 - TRANSFERENCIAS CONCEDIDAS PARA APORTES DE RECURSOS PARA O RPPS – INTRA OFSS</td>
            <td align="right" data-saldo="465521579.54" data-nat="D">R$ 465.521.579,54 D</td>
            <td align="right" data-saldo="465521579.54" data-nat="D">R$ 68.072.275,95 D</td>
            <td align="right" data-saldo="465521579.54" data-nat="D">R$ 533.593.855,49 D</td></tr><tr class="filho351320000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="351320100"></i> 3.5.1.3.2.01.00 - PLANO FINANCEIRO</td>
            <td align="right" data-saldo="465521579.54" data-nat="D">R$ 465.521.579,54 D</td>
            <td align="right" data-saldo="465521579.54" data-nat="D">R$ 68.072.275,95 D</td>
            <td align="right" data-saldo="465521579.54" data-nat="D">R$ 533.593.855,49 D</td></tr><tr class="filho351320100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.5.1.3.2.01.01 -  RECURSOS PARA COBERTURA DE INSUFICIÊNCIAS FINANCEIRAS</td>
            <td align="right" data-saldo="465521579.54" data-nat="D">R$ 465.521.579,54 D</td>
            <td align="right" data-saldo="465521579.54" data-nat="D">R$ 68.072.275,95 D</td>
            <td align="right" data-saldo="465521579.54" data-nat="D">R$ 533.593.855,49 D</td></tr><tr class="filho350000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="352000000"></i> 3.5.2.0.0.00.00 - TRANSFERÊNCIAS INTER GOVERNAMENTAIS</td>
            <td align="right" data-saldo="441365063.3" data-nat="D">R$ 441.365.063,30 D</td>
            <td align="right" data-saldo="441365063.3" data-nat="D">R$ 61.492.746,25 D</td>
            <td align="right" data-saldo="441365063.3" data-nat="D">R$ 502.857.809,55 D</td></tr><tr class="filho352000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="352100000"></i> 3.5.2.1.0.00.00 - DISTRIBUIÇÃO CONSTITUCIONAL OU LEGAL DE RECEITAS</td>
            <td align="right" data-saldo="345894109.06" data-nat="D">R$ 345.894.109,06 D</td>
            <td align="right" data-saldo="345894109.06" data-nat="D">R$ 37.270.660,88 D</td>
            <td align="right" data-saldo="345894109.06" data-nat="D">R$ 383.164.769,94 D</td></tr><tr class="filho352100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="352150000"></i> 3.5.2.1.5.00.00 - DISTRIBUIÇÃO CONSTITUCIONAL OU LEGAL DE RECEITAS – INTER OFSS - MUNICÍPIO</td>
            <td align="right" data-saldo="345894109.06" data-nat="D">R$ 345.894.109,06 D</td>
            <td align="right" data-saldo="345894109.06" data-nat="D">R$ 37.270.660,88 D</td>
            <td align="right" data-saldo="345894109.06" data-nat="D">R$ 383.164.769,94 D</td></tr><tr class="filho352150000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.5.2.1.5.01.00 - ICMS</td>
            <td align="right" data-saldo="307935638.14" data-nat="D">R$ 307.935.638,14 D</td>
            <td align="right" data-saldo="307935638.14" data-nat="D">R$ 35.666.718,61 D</td>
            <td align="right" data-saldo="307935638.14" data-nat="D">R$ 343.602.356,75 D</td></tr><tr class="filho352150000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.5.2.1.5.02.00 - IPVA</td>
            <td align="right" data-saldo="36363393.92" data-nat="D">R$ 36.363.393,92 D</td>
            <td align="right" data-saldo="36363393.92" data-nat="D">R$ 1.583.839,75 D</td>
            <td align="right" data-saldo="36363393.92" data-nat="D">R$ 37.947.233,67 D</td></tr><tr class="filho352150000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.5.2.1.5.03.00 - IPI-EXPORTAÇÃO</td>
            <td align="right" data-saldo="200464.4" data-nat="D">R$ 200.464,40 D</td>
            <td align="right" data-saldo="200464.4" data-nat="D">R$ 20.102,52 D</td>
            <td align="right" data-saldo="200464.4" data-nat="D">R$ 220.566,92 D</td></tr><tr class="filho352150000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.5.2.1.5.04.00 - COTA-PARTE DA CONTRIBUIÇÃO DE INTERVENÇÃO NO DOMÍNIO ECONÔMICO</td>
            <td align="right" data-saldo="1394612.6" data-nat="D">R$ 1.394.612,60 D</td>
            <td align="right" data-saldo="1394612.6" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="1394612.6" data-nat="D">R$ 1.394.612,60 D</td></tr><tr class="filho352000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="352300000"></i> 3.5.2.3.0.00.00 - TRANSFERÊNCIAS VOLUNTÁRIAS</td>
            <td align="right" data-saldo="16217533.48" data-nat="D">R$ 16.217.533,48 D</td>
            <td align="right" data-saldo="16217533.48" data-nat="D">R$ 4.106.117,91 D</td>
            <td align="right" data-saldo="16217533.48" data-nat="D">R$ 20.323.651,39 D</td></tr><tr class="filho352300000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="352350000"></i> 3.5.2.3.5.00.00 - TRANSFERÊNCIAS VOLUNTÁRIAS - INTER-OFSS – MUNICÍPIO </td>
            <td align="right" data-saldo="16217533.48" data-nat="D">R$ 16.217.533,48 D</td>
            <td align="right" data-saldo="16217533.48" data-nat="D">R$ 4.106.117,91 D</td>
            <td align="right" data-saldo="16217533.48" data-nat="D">R$ 20.323.651,39 D</td></tr><tr class="filho352350000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.5.2.3.5.01.00 - CONTRIBUIÇÕES</td>
            <td align="right" data-saldo="1042724.21" data-nat="D">R$ 1.042.724,21 D</td>
            <td align="right" data-saldo="1042724.21" data-nat="D">R$ 50.981,27 D</td>
            <td align="right" data-saldo="1042724.21" data-nat="D">R$ 1.093.705,48 D</td></tr><tr class="filho352350000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.5.2.3.5.02.00 - AUXÍLIOS</td>
            <td align="right" data-saldo="14329183.79" data-nat="D">R$ 14.329.183,79 D</td>
            <td align="right" data-saldo="14329183.79" data-nat="D">R$ 1.960.653,14 D</td>
            <td align="right" data-saldo="14329183.79" data-nat="D">R$ 16.289.836,93 D</td></tr><tr class="filho352350000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.5.2.3.5.99.00 - DEMAIS TRANSFERÊNCIAS VOLUNTÁRIAS</td>
            <td align="right" data-saldo="845625.48" data-nat="D">R$ 845.625,48 D</td>
            <td align="right" data-saldo="845625.48" data-nat="D">R$ 2.094.483,50 D</td>
            <td align="right" data-saldo="845625.48" data-nat="D">R$ 2.940.108,98 D</td></tr><tr class="filho352000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="352400000"></i> 3.5.2.4.0.00.00 - OUTRAS TRANSFERÊNCIAS</td>
            <td align="right" data-saldo="79253420.76" data-nat="D">R$ 79.253.420,76 D</td>
            <td align="right" data-saldo="79253420.76" data-nat="D">R$ 20.115.967,46 D</td>
            <td align="right" data-saldo="79253420.76" data-nat="D">R$ 99.369.388,22 D</td></tr><tr class="filho352400000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.5.2.4.1.00.00 - OUTRAS TRANSFERÊNCIAS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="79253420.76" data-nat="D">R$ 79.253.420,76 D</td>
            <td align="right" data-saldo="79253420.76" data-nat="D">R$ 20.115.967,46 D</td>
            <td align="right" data-saldo="79253420.76" data-nat="D">R$ 99.369.388,22 D</td></tr><tr class="filho350000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="353000000"></i> 3.5.3.0.0.00.00 - TRANSFERÊNCIAS A INSTITUIÇÕES PRIVADAS</td>
            <td align="right" data-saldo="106184645.29" data-nat="D">R$ 106.184.645,29 D</td>
            <td align="right" data-saldo="106184645.29" data-nat="D">R$ 14.856.061,93 D</td>
            <td align="right" data-saldo="106184645.29" data-nat="D">R$ 121.040.707,22 D</td></tr><tr class="filho353000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="353100000"></i> 3.5.3.1.0.00.00 - TRANSFERÊNCIAS A INSTITUIÇÕES PRIVADAS SEM FINS LUCRATIVOS</td>
            <td align="right" data-saldo="105716302.83" data-nat="D">R$ 105.716.302,83 D</td>
            <td align="right" data-saldo="105716302.83" data-nat="D">R$ 14.652.447,03 D</td>
            <td align="right" data-saldo="105716302.83" data-nat="D">R$ 120.368.749,86 D</td></tr><tr class="filho353100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="353110000"></i> 3.5.3.1.1.00.00 - TRANSFERÊNCIAS A INSTITUIÇÕES PRIVADAS SEM FINS LUCRATIVOS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="105716302.83" data-nat="D">R$ 105.716.302,83 D</td>
            <td align="right" data-saldo="105716302.83" data-nat="D">R$ 14.652.447,03 D</td>
            <td align="right" data-saldo="105716302.83" data-nat="D">R$ 120.368.749,86 D</td></tr><tr class="filho353110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.5.3.1.1.01.00 - CONTRIBUIÇÕES</td>
            <td align="right" data-saldo="2015088.53" data-nat="D">R$ 2.015.088,53 D</td>
            <td align="right" data-saldo="2015088.53" data-nat="D">R$ 344.452,79 D</td>
            <td align="right" data-saldo="2015088.53" data-nat="D">R$ 2.359.541,32 D</td></tr><tr class="filho353110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.5.3.1.1.02.00 - AUXÍLIOS</td>
            <td align="right" data-saldo="12172069.28" data-nat="D">R$ 12.172.069,28 D</td>
            <td align="right" data-saldo="12172069.28" data-nat="D">R$ 481.586,00 D</td>
            <td align="right" data-saldo="12172069.28" data-nat="D">R$ 12.653.655,28 D</td></tr><tr class="filho353110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.5.3.1.1.03.00 - SUBVENÇÕES SOCIAIS</td>
            <td align="right" data-saldo="91529145.02" data-nat="D">R$ 91.529.145,02 D</td>
            <td align="right" data-saldo="91529145.02" data-nat="D">R$ 13.826.408,24 D</td>
            <td align="right" data-saldo="91529145.02" data-nat="D">R$ 105.355.553,26 D</td></tr><tr class="filho353000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="353200000"></i> 3.5.3.2.0.00.00 - TRANSFERÊNCIAS A INSTITUIÇÕES PRIVADAS COM FINS LUCRATIVOS</td>
            <td align="right" data-saldo="468342.46" data-nat="D">R$ 468.342,46 D</td>
            <td align="right" data-saldo="468342.46" data-nat="D">R$ 203.614,90 D</td>
            <td align="right" data-saldo="468342.46" data-nat="D">R$ 671.957,36 D</td></tr><tr class="filho353200000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="353210000"></i> 3.5.3.2.1.00.00 - TRANSFERÊNCIAS A INSTITUIÇÕES PRIVADAS COM FINS LUCRATIVOS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="468342.46" data-nat="D">R$ 468.342,46 D</td>
            <td align="right" data-saldo="468342.46" data-nat="D">R$ 203.614,90 D</td>
            <td align="right" data-saldo="468342.46" data-nat="D">R$ 671.957,36 D</td></tr><tr class="filho353210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.5.3.2.1.01.00 - SUBVENÇÕES ECONÔMICAS</td>
            <td align="right" data-saldo="468342.46" data-nat="D">R$ 468.342,46 D</td>
            <td align="right" data-saldo="468342.46" data-nat="D">R$ 203.614,90 D</td>
            <td align="right" data-saldo="468342.46" data-nat="D">R$ 671.957,36 D</td></tr><tr class="filho350000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="354000000"></i> 3.5.4.0.0.00.00 - TRANSFERÊNCIAS A INSTITUIÇÕES MULTIGOVERNAMENTAIS</td>
            <td align="right" data-saldo="4000" data-nat="D">R$ 4.000,00 D</td>
            <td align="right" data-saldo="4000" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="4000" data-nat="D">R$ 4.000,00 D</td></tr><tr class="filho354000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="354100000"></i> 3.5.4.1.0.00.00 - TRANSFERÊNCIAS A INSTITUIÇÕES MULTIGOVERNAMENTAIS</td>
            <td align="right" data-saldo="4000" data-nat="D">R$ 4.000,00 D</td>
            <td align="right" data-saldo="4000" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="4000" data-nat="D">R$ 4.000,00 D</td></tr><tr class="filho354100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.5.4.1.1.00.00 - TRANSFERÊNCIAS A INSTITUIÇÕES MULTIGOVERNAMENTAIS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="4000" data-nat="D">R$ 4.000,00 D</td>
            <td align="right" data-saldo="4000" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="4000" data-nat="D">R$ 4.000,00 D</td></tr><tr class="filho350000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="355000000"></i> 3.5.5.0.0.00.00 - TRANSFERÊNCIAS A CONSÓRCIOS PÚBLICOS</td>
            <td align="right" data-saldo="500000" data-nat="D">R$ 500.000,00 D</td>
            <td align="right" data-saldo="500000" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="500000" data-nat="D">R$ 500.000,00 D</td></tr><tr class="filho355000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="355100000"></i> 3.5.5.1.0.00.00 - TRANSFERÊNCIAS A CONSÓRCIOS PÚBLICOS</td>
            <td align="right" data-saldo="500000" data-nat="D">R$ 500.000,00 D</td>
            <td align="right" data-saldo="500000" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="500000" data-nat="D">R$ 500.000,00 D</td></tr><tr class="filho355100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.5.5.1.1.00.00 - TRANSFERÊNCIAS A CONSÓRCIOS PÚBLICOS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="500000" data-nat="D">R$ 500.000,00 D</td>
            <td align="right" data-saldo="500000" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="500000" data-nat="D">R$ 500.000,00 D</td></tr><tr class="filho300000000 filho filho-hide nivel1 nivelPadrao">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="360000000"></i> 3.6.0.0.0.00.00 - DESVALORIZAÇÃO E PERDA DE ATIVOS E INCORPORAÇÃO DE PASSIVOS</td>
            <td align="right" data-saldo="32100888.3" data-nat="D">R$ 32.100.888,30 D</td>
            <td align="right" data-saldo="32100888.3" data-nat="C">R$ 11.080.717,77 C</td>
            <td align="right" data-saldo="32100888.3" data-nat="D">R$ 21.020.170,53 D</td></tr><tr class="filho360000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="361000000"></i> 3.6.1.0.0.00.00 - REAVALIAÇÃO, REDUÇÃO A VALOR RECUPERÁVEL E AJUSTE PARA PERDAS</td>
            <td align="right" data-saldo="2644804.69" data-nat="D">R$ 2.644.804,69 D</td>
            <td align="right" data-saldo="2644804.69" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="2644804.69" data-nat="D">R$ 2.644.804,69 D</td></tr><tr class="filho361000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="361700000"></i> 3.6.1.7.0.00.00 - VARIAÇÃO PATRIMONIAL DIMINUTIVA COM AJUSTE DE PERDAS DE CRÉDITOS E DE INVESTIMENTOS E APLICAÇÕES TEMPORÁRIOS</td>
            <td align="right" data-saldo="2644804.69" data-nat="D">R$ 2.644.804,69 D</td>
            <td align="right" data-saldo="2644804.69" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="2644804.69" data-nat="D">R$ 2.644.804,69 D</td></tr><tr class="filho361700000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="361710000"></i> 3.6.1.7.1.00.00 - VARIAÇÃO PATRIMONIAL DIMINUTIVA COM AJUSTE DE PERDAS DE CRÉDITOS E DE INVESTIMENTOS E APLICAÇÕES TEMPORÁRIOS- CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="2644804.69" data-nat="D">R$ 2.644.804,69 D</td>
            <td align="right" data-saldo="2644804.69" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="2644804.69" data-nat="D">R$ 2.644.804,69 D</td></tr><tr class="filho361710000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.6.1.7.1.01.00 - AJUSTE PARA PERDAS EM CRÉDITOS TRIBUTÁRIOS</td>
            <td align="right" data-saldo="2644804.69" data-nat="D">R$ 2.644.804,69 D</td>
            <td align="right" data-saldo="2644804.69" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="2644804.69" data-nat="D">R$ 2.644.804,69 D</td></tr><tr class="filho360000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="363000000"></i> 3.6.3.0.0.00.00 - PERDAS INVOLUNTÁRIAS</td>
            <td align="right" data-saldo="29456083.61" data-nat="D">R$ 29.456.083,61 D</td>
            <td align="right" data-saldo="29456083.61" data-nat="C">R$ 11.080.717,77 C</td>
            <td align="right" data-saldo="29456083.61" data-nat="D">R$ 18.375.365,84 D</td></tr><tr class="filho363000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="363300000"></i> 3.6.3.3.0.00.00 - PERDAS INVOLUNTÁRIAS COM ESTOQUES</td>
            <td align="right" data-saldo="3501963.18" data-nat="D">R$ 3.501.963,18 D</td>
            <td align="right" data-saldo="3501963.18" data-nat="D">R$ 5.968,77 D</td>
            <td align="right" data-saldo="3501963.18" data-nat="D">R$ 3.507.931,95 D</td></tr><tr class="filho363300000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="363310000"></i> 3.6.3.3.1.00.00 - PERDAS INVOLUNTÁRIAS COM ESTOQUES - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="3501963.18" data-nat="D">R$ 3.501.963,18 D</td>
            <td align="right" data-saldo="3501963.18" data-nat="D">R$ 5.968,77 D</td>
            <td align="right" data-saldo="3501963.18" data-nat="D">R$ 3.507.931,95 D</td></tr><tr class="filho363310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.6.3.3.1.06.00 - PERDAS INVOLUNTÁRIAS COM ALMOXARIFADO</td>
            <td align="right" data-saldo="3501963.18" data-nat="D">R$ 3.501.963,18 D</td>
            <td align="right" data-saldo="3501963.18" data-nat="D">R$ 5.968,77 D</td>
            <td align="right" data-saldo="3501963.18" data-nat="D">R$ 3.507.931,95 D</td></tr><tr class="filho363000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="363900000"></i> 3.6.3.9.0.00.00 - OUTRAS PERDAS INVOLUNTÁRIAS</td>
            <td align="right" data-saldo="25954120.43" data-nat="D">R$ 25.954.120,43 D</td>
            <td align="right" data-saldo="25954120.43" data-nat="C">R$ 11.086.686,54 C</td>
            <td align="right" data-saldo="25954120.43" data-nat="D">R$ 14.867.433,89 D</td></tr><tr class="filho363900000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.6.3.9.1.00.00 - OUTRAS PERDAS INVOLUNTÁRIAS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="25954120.43" data-nat="D">R$ 25.954.120,43 D</td>
            <td align="right" data-saldo="25954120.43" data-nat="C">R$ 11.086.686,54 C</td>
            <td align="right" data-saldo="25954120.43" data-nat="D">R$ 14.867.433,89 D</td></tr><tr class="filho300000000 filho filho-hide nivel1 nivelPadrao">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="370000000"></i> 3.7.0.0.0.00.00 - TRIBUTÁRIAS</td>
            <td align="right" data-saldo="65917530.17" data-nat="D">R$ 65.917.530,17 D</td>
            <td align="right" data-saldo="65917530.17" data-nat="D">R$ 5.683.540,61 D</td>
            <td align="right" data-saldo="65917530.17" data-nat="D">R$ 71.601.070,78 D</td></tr><tr class="filho370000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="371000000"></i> 3.7.1.0.0.00.00 - IMPOSTOS, TAXAS E CONTRIBUIÇÕES DE MELHORIA</td>
            <td align="right" data-saldo="1626221.49" data-nat="D">R$ 1.626.221,49 D</td>
            <td align="right" data-saldo="1626221.49" data-nat="D">R$ 294.107,60 D</td>
            <td align="right" data-saldo="1626221.49" data-nat="D">R$ 1.920.329,09 D</td></tr><tr class="filho371000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="371100000"></i> 3.7.1.1.0.00.00 - IMPOSTOS</td>
            <td align="right" data-saldo="408786.01" data-nat="D">R$ 408.786,01 D</td>
            <td align="right" data-saldo="408786.01" data-nat="D">R$ 14.651,39 D</td>
            <td align="right" data-saldo="408786.01" data-nat="D">R$ 423.437,40 D</td></tr><tr class="filho371100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="371110000"></i> 3.7.1.1.1.00.00 - IMPOSTOS- CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="408786.01" data-nat="D">R$ 408.786,01 D</td>
            <td align="right" data-saldo="408786.01" data-nat="D">R$ 14.651,39 D</td>
            <td align="right" data-saldo="408786.01" data-nat="D">R$ 423.437,40 D</td></tr><tr class="filho371110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.7.1.1.1.05.00 - IPTU</td>
            <td align="right" data-saldo="408786.01" data-nat="D">R$ 408.786,01 D</td>
            <td align="right" data-saldo="408786.01" data-nat="D">R$ 14.651,39 D</td>
            <td align="right" data-saldo="408786.01" data-nat="D">R$ 423.437,40 D</td></tr><tr class="filho371000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="371200000"></i> 3.7.1.2.0.00.00 - TAXAS</td>
            <td align="right" data-saldo="1217435.48" data-nat="D">R$ 1.217.435,48 D</td>
            <td align="right" data-saldo="1217435.48" data-nat="D">R$ 279.456,21 D</td>
            <td align="right" data-saldo="1217435.48" data-nat="D">R$ 1.496.891,69 D</td></tr><tr class="filho371200000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="371210000"></i> 3.7.1.2.1.00.00 - TAXAS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="1217435.48" data-nat="D">R$ 1.217.435,48 D</td>
            <td align="right" data-saldo="1217435.48" data-nat="D">R$ 279.456,21 D</td>
            <td align="right" data-saldo="1217435.48" data-nat="D">R$ 1.496.891,69 D</td></tr><tr class="filho371210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.7.1.2.1.02.00 - TAXAS PELA PRESTAÇÃO DE SERVIÇOS</td>
            <td align="right" data-saldo="1217435.48" data-nat="D">R$ 1.217.435,48 D</td>
            <td align="right" data-saldo="1217435.48" data-nat="D">R$ 279.456,21 D</td>
            <td align="right" data-saldo="1217435.48" data-nat="D">R$ 1.496.891,69 D</td></tr><tr class="filho370000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="372000000"></i> 3.7.2.0.0.00.00 - CONTRIBUIÇÕES</td>
            <td align="right" data-saldo="64291308.68" data-nat="D">R$ 64.291.308,68 D</td>
            <td align="right" data-saldo="64291308.68" data-nat="D">R$ 5.389.433,01 D</td>
            <td align="right" data-saldo="64291308.68" data-nat="D">R$ 69.680.741,69 D</td></tr><tr class="filho372000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="372100000"></i> 3.7.2.1.0.00.00 - CONTRIBUIÇÕES SOCIAIS</td>
            <td align="right" data-saldo="64291308.68" data-nat="D">R$ 64.291.308,68 D</td>
            <td align="right" data-saldo="64291308.68" data-nat="D">R$ 5.389.433,01 D</td>
            <td align="right" data-saldo="64291308.68" data-nat="D">R$ 69.680.741,69 D</td></tr><tr class="filho372100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="372110000"></i> 3.7.2.1.1.00.00 - CONTRIBUIÇÕES SOCIAIS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="64291308.68" data-nat="D">R$ 64.291.308,68 D</td>
            <td align="right" data-saldo="64291308.68" data-nat="D">R$ 5.389.433,01 D</td>
            <td align="right" data-saldo="64291308.68" data-nat="D">R$ 69.680.741,69 D</td></tr><tr class="filho372110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.7.2.1.1.01.00 - CONTRIBUIÇÃO PARA FINANCIAMENTO DA SEGURIDADE SOCIAL - COFINS - </td>
            <td align="right" data-saldo="70680.09" data-nat="D">R$ 70.680,09 D</td>
            <td align="right" data-saldo="70680.09" data-nat="D">R$ 4.560,16 D</td>
            <td align="right" data-saldo="70680.09" data-nat="D">R$ 75.240,25 D</td></tr><tr class="filho372110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.7.2.1.1.02.00 - PIS/PASEP </td>
            <td align="right" data-saldo="63388822.51" data-nat="D">R$ 63.388.822,51 D</td>
            <td align="right" data-saldo="63388822.51" data-nat="D">R$ 5.231.435,11 D</td>
            <td align="right" data-saldo="63388822.51" data-nat="D">R$ 68.620.257,62 D</td></tr><tr class="filho372110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.7.2.1.1.04.00 - OBRIGAÇÕES PATRONAIS S/ SERVIÇOS DE PESSOA FISICA</td>
            <td align="right" data-saldo="627319.2" data-nat="D">R$ 627.319,20 D</td>
            <td align="right" data-saldo="627319.2" data-nat="D">R$ 134.449,23 D</td>
            <td align="right" data-saldo="627319.2" data-nat="D">R$ 761.768,43 D</td></tr><tr class="filho372110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.7.2.1.1.05.00 - OBRIGAÇÕES PATRONAIS SOBRE SERVIÇOS DE PESSOA JURIDICA</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="0" data-nat="D">R$ 2.780,00 D</td>
            <td align="right" data-saldo="0" data-nat="D">R$ 2.780,00 D</td></tr><tr class="filho372110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.7.2.1.1.99.00 - OUTRAS CONTRIBUIÇÕES SOCIAIS</td>
            <td align="right" data-saldo="204486.88" data-nat="D">R$ 204.486,88 D</td>
            <td align="right" data-saldo="204486.88" data-nat="D">R$ 16.208,51 D</td>
            <td align="right" data-saldo="204486.88" data-nat="D">R$ 220.695,39 D</td></tr><tr class="filho300000000 filho filho-hide nivel1 nivelPadrao">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="390000000"></i> 3.9.0.0.0.00.00 - OUTRAS VARIAÇÕES PATRIMONIAIS DIMINUTIVAS</td>
            <td align="right" data-saldo="427024.2" data-nat="D">R$ 427.024,20 D</td>
            <td align="right" data-saldo="427024.2" data-nat="D">R$ 848.139.323,63 D</td>
            <td align="right" data-saldo="427024.2" data-nat="D">R$ 848.566.347,83 D</td></tr><tr class="filho390000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="391000000"></i> 3.9.1.0.0.00.00 - PREMIAÇÕES</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="0" data-nat="D">R$ 1.440,00 D</td>
            <td align="right" data-saldo="0" data-nat="D">R$ 1.440,00 D</td></tr><tr class="filho391000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="391100000"></i> 3.9.1.1.0.00.00 - PREMIAÇÕES CULTURAIS</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="0" data-nat="D">R$ 1.440,00 D</td>
            <td align="right" data-saldo="0" data-nat="D">R$ 1.440,00 D</td></tr><tr class="filho391100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.9.1.1.1.00.00 - PREMIAÇÕES CULTURAIS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="0" data-nat="D">R$ 1.440,00 D</td>
            <td align="right" data-saldo="0" data-nat="D">R$ 1.440,00 D</td></tr><tr class="filho390000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="394000000"></i> 3.9.4.0.0.00.00 - INCENTIVOS</td>
            <td align="right" data-saldo="427024.2" data-nat="D">R$ 427.024,20 D</td>
            <td align="right" data-saldo="427024.2" data-nat="D">R$ 99.504,84 D</td>
            <td align="right" data-saldo="427024.2" data-nat="D">R$ 526.529,04 D</td></tr><tr class="filho394000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="394100000"></i> 3.9.4.1.0.00.00 - INCENTIVOS A EDUCAÇÃO</td>
            <td align="right" data-saldo="427024.2" data-nat="D">R$ 427.024,20 D</td>
            <td align="right" data-saldo="427024.2" data-nat="D">R$ 99.504,84 D</td>
            <td align="right" data-saldo="427024.2" data-nat="D">R$ 526.529,04 D</td></tr><tr class="filho394100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="394110000"></i> 3.9.4.1.1.00.00 - INCENTIVOS A EDUCAÇÃO - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="427024.2" data-nat="D">R$ 427.024,20 D</td>
            <td align="right" data-saldo="427024.2" data-nat="D">R$ 99.504,84 D</td>
            <td align="right" data-saldo="427024.2" data-nat="D">R$ 526.529,04 D</td></tr><tr class="filho394110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.9.4.1.1.01.00 - BOLSA DE ESTUDOS NO PAÍS</td>
            <td align="right" data-saldo="180336.2" data-nat="D">R$ 180.336,20 D</td>
            <td align="right" data-saldo="180336.2" data-nat="D">R$ 14.456,52 D</td>
            <td align="right" data-saldo="180336.2" data-nat="D">R$ 194.792,72 D</td></tr><tr class="filho394110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.9.4.1.1.02.00 - BOLSA DE ESTUDOS NO EXTERIOR</td>
            <td align="right" data-saldo="5900" data-nat="D">R$ 5.900,00 D</td>
            <td align="right" data-saldo="5900" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="5900" data-nat="D">R$ 5.900,00 D</td></tr><tr class="filho394110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 3.9.4.1.1.99.00 - OUTROS INCENTIVOS A EDUCAÇÃO</td>
            <td align="right" data-saldo="240788" data-nat="D">R$ 240.788,00 D</td>
            <td align="right" data-saldo="240788" data-nat="D">R$ 85.048,32 D</td>
            <td align="right" data-saldo="240788" data-nat="D">R$ 325.836,32 D</td></tr><tr class="filho390000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="399000000"></i> 3.9.9.0.0.00.00 - DIVERSAS VARIAÇÕES PATRIMONIAIS DIMINUTIVAS</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="0" data-nat="D">R$ 848.038.378,79 D</td>
            <td align="right" data-saldo="0" data-nat="D">R$ 848.038.378,79 D</td></tr><tr class="filho399000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="399900000"></i> 3.9.9.9.0.00.00 - VARIAÇÕES PATRIMONIAIS DIMINUTIVAS DECORRENTES DE FATOS GERADORES DIVERSOS</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="0" data-nat="D">R$ 848.038.378,79 D</td>
            <td align="right" data-saldo="0" data-nat="D">R$ 848.038.378,79 D</td></tr><tr class="filho399900000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="399910000"></i> 3.9.9.9.1.00.00 - VARIAÇÕES PATRIMONIAIS DIMINUTIVAS DECORRENTES DE FATOS GERADORES DIVERSOS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="0" data-nat="D">R$ 848.038.378,79 D</td>
            <td align="right" data-saldo="0" data-nat="D">R$ 848.038.378,79 D</td></tr><tr class="filho0 filho filho-hide nivel0 nivelPadrao">
            <td><i class="fa fa-minus-circle js-abre-filhos" id="400000000"></i> 4.0.0.0.0.00.00 - VARIAÇÃO PATRIMONIAL AUMENTATIVA</td>
            <td align="right" data-saldo="-10724817890.42" data-nat="C">R$ 10.724.817.890,42 C</td>
            <td align="right" data-saldo="-10724817890.42" data-nat="C">R$ 7.830.253.491,26 C</td>
            <td align="right" data-saldo="-10724817890.42" data-nat="C">R$ 18.555.071.381,68 C</td></tr><tr class="filho400000000 filho filho-hide nivel1 nivelPadrao">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="410000000"></i> 4.1.0.0.0.00.00 - IMPOSTOS, TAXAS E CONTRIBUIÇÕES DE MELHORIA</td>
            <td align="right" data-saldo="-1088064505.1" data-nat="C">R$ 1.088.064.505,10 C</td>
            <td align="right" data-saldo="-1088064505.1" data-nat="C">R$ 120.351.994,33 C</td>
            <td align="right" data-saldo="-1088064505.1" data-nat="C">R$ 1.208.416.499,43 C</td></tr><tr class="filho410000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="411000000"></i> 4.1.1.0.0.00.00 - IMPOSTOS</td>
            <td align="right" data-saldo="-1069363943.94" data-nat="C">R$ 1.069.363.943,94 C</td>
            <td align="right" data-saldo="-1069363943.94" data-nat="C">R$ 117.956.994,74 C</td>
            <td align="right" data-saldo="-1069363943.94" data-nat="C">R$ 1.187.320.938,68 C</td></tr><tr class="filho411000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="411200000"></i> 4.1.1.2.0.00.00 - IMPOSTOS SOBRE PATRIMÔNIO E A RENDA</td>
            <td align="right" data-saldo="-333738096.66" data-nat="C">R$ 333.738.096,66 C</td>
            <td align="right" data-saldo="-333738096.66" data-nat="C">R$ 107.991.854,37 C</td>
            <td align="right" data-saldo="-333738096.66" data-nat="C">R$ 441.729.951,03 C</td></tr><tr class="filho411200000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="411210000"></i> 4.1.1.2.1.00.00 - IMPOSTOS SOBRE PATRIMÔNIO E A RENDA - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="-333738096.66" data-nat="C">R$ 333.738.096,66 C</td>
            <td align="right" data-saldo="-333738096.66" data-nat="C">R$ 107.991.854,37 C</td>
            <td align="right" data-saldo="-333738096.66" data-nat="C">R$ 441.729.951,03 C</td></tr><tr class="filho411210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="411210300"></i> 4.1.1.2.1.03.00 - IMPOSTO SOBRE A RENDA E PROVENTOS DE QUALQUER NATUREZA</td>
            <td align="right" data-saldo="-337847887.45" data-nat="C">R$ 337.847.887,45 C</td>
            <td align="right" data-saldo="-337847887.45" data-nat="C">R$ 70.321.463,24 C</td>
            <td align="right" data-saldo="-337847887.45" data-nat="C">R$ 408.169.350,69 C</td></tr><tr class="filho411210300 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.1.1.2.1.03.01 - IR - PESSOAS FISICAS</td>
            <td align="right" data-saldo="-337847887.45" data-nat="C">R$ 337.847.887,45 C</td>
            <td align="right" data-saldo="-337847887.45" data-nat="C">R$ 70.321.463,24 C</td>
            <td align="right" data-saldo="-337847887.45" data-nat="C">R$ 408.169.350,69 C</td></tr><tr class="filho411210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.1.1.2.1.05.00 - ITCMD</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 4.342.292,75 C</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 4.342.292,75 C</td></tr><tr class="filho411210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.1.1.2.1.06.00 - IPVA</td>
            <td align="right" data-saldo="-3953168.43" data-nat="C">R$ 3.953.168,43 C</td>
            <td align="right" data-saldo="-3953168.43" data-nat="C">R$ 33.737.289,70 C</td>
            <td align="right" data-saldo="-3953168.43" data-nat="C">R$ 37.690.458,13 C</td></tr><tr class="filho411210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.1.1.2.1.97.00 - (-) DEDUÇÃO</td>
            <td align="right" data-saldo="8062959.22" data-nat="D">R$ 8.062.959,22 D</td>
            <td align="right" data-saldo="8062959.22" data-nat="D">R$ 409.191,32 D</td>
            <td align="right" data-saldo="8062959.22" data-nat="D">R$ 8.472.150,54 D</td></tr><tr class="filho411000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="411300000"></i> 4.1.1.3.0.00.00 - IMPOSTOS SOBRE A PRODUÇÃO E A CIRCULAÇÃO</td>
            <td align="right" data-saldo="-735625847.28" data-nat="C">R$ 735.625.847,28 C</td>
            <td align="right" data-saldo="-735625847.28" data-nat="C">R$ 9.965.140,37 C</td>
            <td align="right" data-saldo="-735625847.28" data-nat="C">R$ 745.590.987,65 C</td></tr><tr class="filho411300000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="411310000"></i> 4.1.1.3.1.00.00 - IMPOSTOS SOBRE A PRODUÇÃO E A CIRCULAÇÃO - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="-735625847.28" data-nat="C">R$ 735.625.847,28 C</td>
            <td align="right" data-saldo="-735625847.28" data-nat="C">R$ 9.965.140,37 C</td>
            <td align="right" data-saldo="-735625847.28" data-nat="C">R$ 745.590.987,65 C</td></tr><tr class="filho411310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.1.1.3.1.01.00 - ICMS</td>
            <td align="right" data-saldo="-920387535.53" data-nat="C">R$ 920.387.535,53 C</td>
            <td align="right" data-saldo="-920387535.53" data-nat="C">R$ 31.365.208,19 C</td>
            <td align="right" data-saldo="-920387535.53" data-nat="C">R$ 951.752.743,72 C</td></tr><tr class="filho411310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.1.1.3.1.97.00 - (-) DEDUÇÃO</td>
            <td align="right" data-saldo="184761688.25" data-nat="D">R$ 184.761.688,25 D</td>
            <td align="right" data-saldo="184761688.25" data-nat="D">R$ 21.400.067,82 D</td>
            <td align="right" data-saldo="184761688.25" data-nat="D">R$ 206.161.756,07 D</td></tr><tr class="filho410000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="412000000"></i> 4.1.2.0.0.00.00 - TAXAS</td>
            <td align="right" data-saldo="-18700561.16" data-nat="C">R$ 18.700.561,16 C</td>
            <td align="right" data-saldo="-18700561.16" data-nat="C">R$ 2.394.999,59 C</td>
            <td align="right" data-saldo="-18700561.16" data-nat="C">R$ 21.095.560,75 C</td></tr><tr class="filho412000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="412100000"></i> 4.1.2.1.0.00.00 - TAXAS PELO EXERCÍCIO DO PODER DE POLICIA</td>
            <td align="right" data-saldo="-2851132.22" data-nat="C">R$ 2.851.132,22 C</td>
            <td align="right" data-saldo="-2851132.22" data-nat="C">R$ 316.093,87 C</td>
            <td align="right" data-saldo="-2851132.22" data-nat="C">R$ 3.167.226,09 C</td></tr><tr class="filho412100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="412110000"></i> 4.1.2.1.1.00.00 - TAXAS PELO EXERCÍCIO DO PODER DE POLICIA - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="-2851132.22" data-nat="C">R$ 2.851.132,22 C</td>
            <td align="right" data-saldo="-2851132.22" data-nat="C">R$ 316.093,87 C</td>
            <td align="right" data-saldo="-2851132.22" data-nat="C">R$ 3.167.226,09 C</td></tr><tr class="filho412110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.1.2.1.1.14.00 - TAXA DE CONTROLE E FISCALIZAÇÃO AMBIENTAL</td>
            <td align="right" data-saldo="-1152186.04" data-nat="C">R$ 1.152.186,04 C</td>
            <td align="right" data-saldo="-1152186.04" data-nat="C">R$ 132.095,02 C</td>
            <td align="right" data-saldo="-1152186.04" data-nat="C">R$ 1.284.281,06 C</td></tr><tr class="filho412110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="412111500"></i> 4.1.2.1.1.15.00 - TAXA DE SERVIÇOS ADMINISTRATIVO</td>
            <td align="right" data-saldo="-1698946.18" data-nat="C">R$ 1.698.946,18 C</td>
            <td align="right" data-saldo="-1698946.18" data-nat="C">R$ 183.998,85 C</td>
            <td align="right" data-saldo="-1698946.18" data-nat="C">R$ 1.882.945,03 C</td></tr><tr class="filho412111500 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.1.2.1.1.15.01 - ATOS DA ADMINISTRAÇÃO EM GERAL</td>
            <td align="right" data-saldo="-1698946.18" data-nat="C">R$ 1.698.946,18 C</td>
            <td align="right" data-saldo="-1698946.18" data-nat="C">R$ 183.998,85 C</td>
            <td align="right" data-saldo="-1698946.18" data-nat="C">R$ 1.882.945,03 C</td></tr><tr class="filho412000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="412200000"></i> 4.1.2.2.0.00.00 - TAXAS PELA PRESTAÇÃO DE SERVIÇOS</td>
            <td align="right" data-saldo="-15849428.94" data-nat="C">R$ 15.849.428,94 C</td>
            <td align="right" data-saldo="-15849428.94" data-nat="C">R$ 2.078.905,72 C</td>
            <td align="right" data-saldo="-15849428.94" data-nat="C">R$ 17.928.334,66 C</td></tr><tr class="filho412200000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="412210000"></i> 4.1.2.2.1.00.00 - TAXAS PELA PRESTAÇÃO DE SERVIÇOS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="-15849428.94" data-nat="C">R$ 15.849.428,94 C</td>
            <td align="right" data-saldo="-15849428.94" data-nat="C">R$ 2.078.905,72 C</td>
            <td align="right" data-saldo="-15849428.94" data-nat="C">R$ 17.928.334,66 C</td></tr><tr class="filho412210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.1.2.2.1.07.00 - EMOLUMENTOS E CUSTAS JUDICIAIS</td>
            <td align="right" data-saldo="-5616990.53" data-nat="C">R$ 5.616.990,53 C</td>
            <td align="right" data-saldo="-5616990.53" data-nat="C">R$ 824.936,02 C</td>
            <td align="right" data-saldo="-5616990.53" data-nat="C">R$ 6.441.926,55 C</td></tr><tr class="filho412210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.1.2.2.1.70.00 - TAXA JUDICIÁRIA</td>
            <td align="right" data-saldo="-10180474.75" data-nat="C">R$ 10.180.474,75 C</td>
            <td align="right" data-saldo="-10180474.75" data-nat="C">R$ 1.233.356,52 C</td>
            <td align="right" data-saldo="-10180474.75" data-nat="C">R$ 11.413.831,27 C</td></tr><tr class="filho412210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.1.2.2.1.99.00 - OUTRAS TAXAS PELA PRESTAÇÃO DE SERVIÇOS</td>
            <td align="right" data-saldo="-51963.66" data-nat="C">R$ 51.963,66 C</td>
            <td align="right" data-saldo="-51963.66" data-nat="C">R$ 20.613,18 C</td>
            <td align="right" data-saldo="-51963.66" data-nat="C">R$ 72.576,84 C</td></tr><tr class="filho400000000 filho filho-hide nivel1 nivelPadrao">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="420000000"></i> 4.2.0.0.0.00.00 - CONTRIBUIÇÕES</td>
            <td align="right" data-saldo="-378430943.69" data-nat="C">R$ 378.430.943,69 C</td>
            <td align="right" data-saldo="-378430943.69" data-nat="C">R$ 77.955.868,55 C</td>
            <td align="right" data-saldo="-378430943.69" data-nat="C">R$ 456.386.812,24 C</td></tr><tr class="filho420000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="421000000"></i> 4.2.1.0.0.00.00 - CONTRIBUIÇÕES SOCIAIS</td>
            <td align="right" data-saldo="-378430943.69" data-nat="C">R$ 378.430.943,69 C</td>
            <td align="right" data-saldo="-378430943.69" data-nat="C">R$ 77.955.868,55 C</td>
            <td align="right" data-saldo="-378430943.69" data-nat="C">R$ 456.386.812,24 C</td></tr><tr class="filho421000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="421100000"></i> 4.2.1.1.0.00.00 - CONTRIBUIÇÕES SOCIAIS - RPPS</td>
            <td align="right" data-saldo="-378430943.69" data-nat="C">R$ 378.430.943,69 C</td>
            <td align="right" data-saldo="-378430943.69" data-nat="C">R$ 77.955.868,55 C</td>
            <td align="right" data-saldo="-378430943.69" data-nat="C">R$ 456.386.812,24 C</td></tr><tr class="filho421100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="421110000"></i> 4.2.1.1.1.00.00 - CONTRIBUIÇÕES SOCIAIS - RPPS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="-209505609.63" data-nat="C">R$ 209.505.609,63 C</td>
            <td align="right" data-saldo="-209505609.63" data-nat="C">R$ 30.047.853,07 C</td>
            <td align="right" data-saldo="-209505609.63" data-nat="C">R$ 239.553.462,70 C</td></tr><tr class="filho421110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="421110200"></i> 4.2.1.1.1.02.00 - CONTRIBUIÇÃO DO SEGURADO AO RPPS</td>
            <td align="right" data-saldo="-209505609.63" data-nat="C">R$ 209.505.609,63 C</td>
            <td align="right" data-saldo="-209505609.63" data-nat="C">R$ 30.047.853,07 C</td>
            <td align="right" data-saldo="-209505609.63" data-nat="C">R$ 239.553.462,70 C</td></tr><tr class="filho421110200 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.2.1.1.1.02.01 - CONTRIBUIÇÃO DO SERVIDOR - RPPS</td>
            <td align="right" data-saldo="-155838585.22" data-nat="C">R$ 155.838.585,22 C</td>
            <td align="right" data-saldo="-155838585.22" data-nat="C">R$ 18.211.204,62 C</td>
            <td align="right" data-saldo="-155838585.22" data-nat="C">R$ 174.049.789,84 C</td></tr><tr class="filho421110200 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.2.1.1.1.02.02 - CONTRIBUIÇÃO DO APOSENTADO - RPPS</td>
            <td align="right" data-saldo="-15639931.6" data-nat="C">R$ 15.639.931,60 C</td>
            <td align="right" data-saldo="-15639931.6" data-nat="C">R$ 4.223.720,97 C</td>
            <td align="right" data-saldo="-15639931.6" data-nat="C">R$ 19.863.652,57 C</td></tr><tr class="filho421110200 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.2.1.1.1.02.03 - CONTRIBUIÇÃO DE PENSIONISTA - RPPS</td>
            <td align="right" data-saldo="-3112184.53" data-nat="C">R$ 3.112.184,53 C</td>
            <td align="right" data-saldo="-3112184.53" data-nat="C">R$ 768.004,73 C</td>
            <td align="right" data-saldo="-3112184.53" data-nat="C">R$ 3.880.189,26 C</td></tr><tr class="filho421110200 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.2.1.1.1.02.06 - CONTRIBUIÇÃO DO PENSIONISTA - PAGTO SENT. JUDICIAIS</td>
            <td align="right" data-saldo="-34632779.08" data-nat="C">R$ 34.632.779,08 C</td>
            <td align="right" data-saldo="-34632779.08" data-nat="C">R$ 6.821.679,17 C</td>
            <td align="right" data-saldo="-34632779.08" data-nat="C">R$ 41.454.458,25 C</td></tr><tr class="filho421110200 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.2.1.1.1.02.99 - OUTRAS CONTRIBUIÇÕES DO SEGURADO AO RPPS</td>
            <td align="right" data-saldo="-282129.2" data-nat="C">R$ 282.129,20 C</td>
            <td align="right" data-saldo="-282129.2" data-nat="C">R$ 23.243,58 C</td>
            <td align="right" data-saldo="-282129.2" data-nat="C">R$ 305.372,78 C</td></tr><tr class="filho421100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="421120000"></i> 4.2.1.1.2.00.00 - CONTRIBUIÇÕES SOCIAIS - RPPS - INTRA OFSS</td>
            <td align="right" data-saldo="-168925334.06" data-nat="C">R$ 168.925.334,06 C</td>
            <td align="right" data-saldo="-168925334.06" data-nat="C">R$ 47.908.015,48 C</td>
            <td align="right" data-saldo="-168925334.06" data-nat="C">R$ 216.833.349,54 C</td></tr><tr class="filho421120000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="421120100"></i> 4.2.1.1.2.01.00 - CONTRIBUIÇÕES PATRONAIS AO RPPS</td>
            <td align="right" data-saldo="-136374889.89" data-nat="C">R$ 136.374.889,89 C</td>
            <td align="right" data-saldo="-136374889.89" data-nat="C">R$ 42.144.970,44 C</td>
            <td align="right" data-saldo="-136374889.89" data-nat="C">R$ 178.519.860,33 C</td></tr><tr class="filho421120100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.2.1.1.2.01.01 - CONTRIBUIÇÃO PATRONAL DE SERVIDOR ATIVO - RPPS</td>
            <td align="right" data-saldo="-136374889.89" data-nat="C">R$ 136.374.889,89 C</td>
            <td align="right" data-saldo="-136374889.89" data-nat="C">R$ 42.144.970,44 C</td>
            <td align="right" data-saldo="-136374889.89" data-nat="C">R$ 178.519.860,33 C</td></tr><tr class="filho421120000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.2.1.1.2.99.00 - OUTRAS CONTRIBUIÇÕES SOCIAIS - RPPS</td>
            <td align="right" data-saldo="-32550444.17" data-nat="C">R$ 32.550.444,17 C</td>
            <td align="right" data-saldo="-32550444.17" data-nat="C">R$ 5.763.045,04 C</td>
            <td align="right" data-saldo="-32550444.17" data-nat="C">R$ 38.313.489,21 C</td></tr><tr class="filho400000000 filho filho-hide nivel1 nivelPadrao">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="430000000"></i> 4.3.0.0.0.00.00 - EXPLORAÇÃO E VENDA DE BENS, SERVIÇOS E DIREITOS</td>
            <td align="right" data-saldo="-61741533.61" data-nat="C">R$ 61.741.533,61 C</td>
            <td align="right" data-saldo="-61741533.61" data-nat="C">R$ 9.079.514,43 C</td>
            <td align="right" data-saldo="-61741533.61" data-nat="C">R$ 70.821.048,04 C</td></tr><tr class="filho430000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="431000000"></i> 4.3.1.0.0.00.00 - VENDA DE MERCADORIAS</td>
            <td align="right" data-saldo="-216316.07" data-nat="C">R$ 216.316,07 C</td>
            <td align="right" data-saldo="-216316.07" data-nat="C">R$ 28.178,98 C</td>
            <td align="right" data-saldo="-216316.07" data-nat="C">R$ 244.495,05 C</td></tr><tr class="filho431000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="431100000"></i> 4.3.1.1.0.00.00 - VENDA BRUTA DE MERCADORIAS</td>
            <td align="right" data-saldo="-216316.07" data-nat="C">R$ 216.316,07 C</td>
            <td align="right" data-saldo="-216316.07" data-nat="C">R$ 28.178,98 C</td>
            <td align="right" data-saldo="-216316.07" data-nat="C">R$ 244.495,05 C</td></tr><tr class="filho431100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="431110000"></i> 4.3.1.1.1.00.00 - VENDA BRUTA DE MERCADORIAS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="-216316.07" data-nat="C">R$ 216.316,07 C</td>
            <td align="right" data-saldo="-216316.07" data-nat="C">R$ 28.178,98 C</td>
            <td align="right" data-saldo="-216316.07" data-nat="C">R$ 244.495,05 C</td></tr><tr class="filho431110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="431111500"></i> 4.3.1.1.1.15.00 - VENDA DE PRODUTOS AGROPECUÁRIOS</td>
            <td align="right" data-saldo="-216316.07" data-nat="C">R$ 216.316,07 C</td>
            <td align="right" data-saldo="-216316.07" data-nat="C">R$ 28.178,98 C</td>
            <td align="right" data-saldo="-216316.07" data-nat="C">R$ 244.495,05 C</td></tr><tr class="filho431111500 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.3.1.1.1.15.99 - OUTRAS VPAS AGROPECUÁRIAS</td>
            <td align="right" data-saldo="-216316.07" data-nat="C">R$ 216.316,07 C</td>
            <td align="right" data-saldo="-216316.07" data-nat="C">R$ 28.178,98 C</td>
            <td align="right" data-saldo="-216316.07" data-nat="C">R$ 244.495,05 C</td></tr><tr class="filho430000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="433000000"></i> 4.3.3.0.0.00.00 - EXPLORAÇÃO DE BENS E DIREITOS E PRESTAÇÃO DE SERVIÇOS</td>
            <td align="right" data-saldo="-61525217.54" data-nat="C">R$ 61.525.217,54 C</td>
            <td align="right" data-saldo="-61525217.54" data-nat="C">R$ 9.051.335,45 C</td>
            <td align="right" data-saldo="-61525217.54" data-nat="C">R$ 70.576.552,99 C</td></tr><tr class="filho433000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="433100000"></i> 4.3.3.1.0.00.00 - VALOR BRUTO DE EXPLORAÇÃO DE BENS E DIREITOS E PRESTAÇÃO DE SERVIÇOS</td>
            <td align="right" data-saldo="-68625217.54" data-nat="C">R$ 68.625.217,54 C</td>
            <td align="right" data-saldo="-68625217.54" data-nat="C">R$ 9.051.335,45 C</td>
            <td align="right" data-saldo="-68625217.54" data-nat="C">R$ 77.676.552,99 C</td></tr><tr class="filho433100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="433110000"></i> 4.3.3.1.1.00.00 - VALOR BRUTO DE EXPLORAÇÃO DE BENS, DIREITOS E PRESTAÇÃO DE SERVIÇOS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="-68625217.54" data-nat="C">R$ 68.625.217,54 C</td>
            <td align="right" data-saldo="-68625217.54" data-nat="C">R$ 9.051.335,45 C</td>
            <td align="right" data-saldo="-68625217.54" data-nat="C">R$ 77.676.552,99 C</td></tr><tr class="filho433110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.3.3.1.1.02.00 - EXPLORAÇÃO DO PATRIMONIO IMOBILIARIO</td>
            <td align="right" data-saldo="-47182.53" data-nat="C">R$ 47.182,53 C</td>
            <td align="right" data-saldo="-47182.53" data-nat="C">R$ 1.380,00 C</td>
            <td align="right" data-saldo="-47182.53" data-nat="C">R$ 48.562,53 C</td></tr><tr class="filho433110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.3.3.1.1.11.00 - SERVICO DE INFORMAÇÕES CIENTIFICAS E TECNOLOGICAS</td>
            <td align="right" data-saldo="-1282101.32" data-nat="C">R$ 1.282.101,32 C</td>
            <td align="right" data-saldo="-1282101.32" data-nat="C">R$ 1.615.879,41 C</td>
            <td align="right" data-saldo="-1282101.32" data-nat="C">R$ 2.897.980,73 C</td></tr><tr class="filho433110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.3.3.1.1.23.00 - CONCESSAO E PERMISSAO - SERV. DE TRANSPORT</td>
            <td align="right" data-saldo="-183549.18" data-nat="C">R$ 183.549,18 C</td>
            <td align="right" data-saldo="-183549.18" data-nat="C">R$ 16.693,92 C</td>
            <td align="right" data-saldo="-183549.18" data-nat="C">R$ 200.243,10 C</td></tr><tr class="filho433110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.3.3.1.1.28.00 - CONCESSAO E PERMISSAO. - DIR. USO DE BENS PUB</td>
            <td align="right" data-saldo="-9783.15" data-nat="C">R$ 9.783,15 C</td>
            <td align="right" data-saldo="-9783.15" data-nat="C">R$ 2.998,92 C</td>
            <td align="right" data-saldo="-9783.15" data-nat="C">R$ 12.782,07 C</td></tr><tr class="filho433110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.3.3.1.1.33.00 - SERVICOS DE SAUDE</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="0" data-nat="D">R$ 1.640.625,00 D</td>
            <td align="right" data-saldo="0" data-nat="D">R$ 1.640.625,00 D</td></tr><tr class="filho433110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.3.3.1.1.37.00 - SERVICOS ADMINISTRATIVOS</td>
            <td align="right" data-saldo="-63829327.63" data-nat="C">R$ 63.829.327,63 C</td>
            <td align="right" data-saldo="-63829327.63" data-nat="C">R$ 8.872.094,45 C</td>
            <td align="right" data-saldo="-63829327.63" data-nat="C">R$ 72.701.422,08 C</td></tr><tr class="filho433110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.3.3.1.1.52.00 - TAR.INSCR.CONCURSOS E PROCESSOS SELETIVOS</td>
            <td align="right" data-saldo="-15989.98" data-nat="C">R$ 15.989,98 C</td>
            <td align="right" data-saldo="-15989.98" data-nat="C">R$ 6.475,00 C</td>
            <td align="right" data-saldo="-15989.98" data-nat="C">R$ 22.464,98 C</td></tr><tr class="filho433110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.3.3.1.1.99.00 - OUTRAS VARIAÇÕES PATRIMONIAIS AUMENTATIVAS PROVENIENTES DE PRESTAÇÃO DE SERVICOS</td>
            <td align="right" data-saldo="-3257283.75" data-nat="C">R$ 3.257.283,75 C</td>
            <td align="right" data-saldo="-3257283.75" data-nat="C">R$ 176.438,75 C</td>
            <td align="right" data-saldo="-3257283.75" data-nat="C">R$ 3.433.722,50 C</td></tr><tr class="filho433000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="433900000"></i> 4.3.3.9.0.00.00 - (-) DEDUÇÕES DO VALOR BRUTO DE EXPLORAÇÃO DE BENS, DIREITOS E PRESTAÇÃO DE SERVIÇOS</td>
            <td align="right" data-saldo="7100000" data-nat="D">R$ 7.100.000,00 D</td>
            <td align="right" data-saldo="7100000" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="7100000" data-nat="D">R$ 7.100.000,00 D</td></tr><tr class="filho433900000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="433910000"></i> 4.3.3.9.1.00.00 - (-) DEDUÇÕES DO VALOR BRUTO DE EXPLORAÇÃO DE BENS, DIREITOS E PRESTAÇÃO DE SERVIÇOS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="7100000" data-nat="D">R$ 7.100.000,00 D</td>
            <td align="right" data-saldo="7100000" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="7100000" data-nat="D">R$ 7.100.000,00 D</td></tr><tr class="filho433910000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.3.3.9.1.99.00 - (-) OUTRAS DEDUÇÕES DE VENDAS</td>
            <td align="right" data-saldo="7100000" data-nat="D">R$ 7.100.000,00 D</td>
            <td align="right" data-saldo="7100000" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="7100000" data-nat="D">R$ 7.100.000,00 D</td></tr><tr class="filho400000000 filho filho-hide nivel1 nivelPadrao">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="440000000"></i> 4.4.0.0.0.00.00 - VARIAÇÕES PATRIMONIAIS AUMENTATIVAS FINANCEIRAS</td>
            <td align="right" data-saldo="-270261607.94" data-nat="C">R$ 270.261.607,94 C</td>
            <td align="right" data-saldo="-270261607.94" data-nat="C">R$ 211.627.163,16 C</td>
            <td align="right" data-saldo="-270261607.94" data-nat="C">R$ 481.888.771,10 C</td></tr><tr class="filho440000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="442000000"></i> 4.4.2.0.0.00.00 - JUROS E ENCARGOS DE MORA</td>
            <td align="right" data-saldo="-6496863.63" data-nat="C">R$ 6.496.863,63 C</td>
            <td align="right" data-saldo="-6496863.63" data-nat="C">R$ 50.329.099,07 C</td>
            <td align="right" data-saldo="-6496863.63" data-nat="C">R$ 56.825.962,70 C</td></tr><tr class="filho442000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="442300000"></i> 4.4.2.3.0.00.00 - JUROS E ENCARGOS DE MORA SOBRE FORNECIMENTOS DE BENS E SERVIÇOS</td>
            <td align="right" data-saldo="-4478.4" data-nat="C">R$ 4.478,40 C</td>
            <td align="right" data-saldo="-4478.4" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="-4478.4" data-nat="C">R$ 4.478,40 C</td></tr><tr class="filho442300000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.4.2.3.1.00.00 - JUROS E ENCARGOS DE MORA SOBRE FORNECIMENTOS DE BENS E SERVIÇOS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="-4478.4" data-nat="C">R$ 4.478,40 C</td>
            <td align="right" data-saldo="-4478.4" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="-4478.4" data-nat="C">R$ 4.478,40 C</td></tr><tr class="filho442000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="442400000"></i> 4.4.2.4.0.00.00 - JUROS E ENCARGOS DE MORA SOBRE CRÉDITOS TRIBUTÁRIOS</td>
            <td align="right" data-saldo="-6492385.23" data-nat="C">R$ 6.492.385,23 C</td>
            <td align="right" data-saldo="-6492385.23" data-nat="C">R$ 50.329.099,07 C</td>
            <td align="right" data-saldo="-6492385.23" data-nat="C">R$ 56.821.484,30 C</td></tr><tr class="filho442400000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="442410000"></i> 4.4.2.4.1.00.00 - JUROS E ENCARGOS DE MORA SOBRE CRÉDITOS TRIBUTÁRIOS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="-6492385.23" data-nat="C">R$ 6.492.385,23 C</td>
            <td align="right" data-saldo="-6492385.23" data-nat="C">R$ 50.329.099,07 C</td>
            <td align="right" data-saldo="-6492385.23" data-nat="C">R$ 56.821.484,30 C</td></tr><tr class="filho442410000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.4.2.4.1.02.00 - MULTAS E JUROS SOBRE IPVA</td>
            <td align="right" data-saldo="-2017609.31" data-nat="C">R$ 2.017.609,31 C</td>
            <td align="right" data-saldo="-2017609.31" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="-2017609.31" data-nat="C">R$ 2.017.609,31 C</td></tr><tr class="filho442410000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.4.2.4.1.04.00 -  MULTAS E JUROS SOBRE ICMS</td>
            <td align="right" data-saldo="-4155993.9" data-nat="C">R$ 4.155.993,90 C</td>
            <td align="right" data-saldo="-4155993.9" data-nat="C">R$ 50.318.219,00 C</td>
            <td align="right" data-saldo="-4155993.9" data-nat="C">R$ 54.474.212,90 C</td></tr><tr class="filho442410000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.4.2.4.1.13.00 - MULTAS E JUROS DEMAIS CONTRIBUIÇÕES</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 11,75 C</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 11,75 C</td></tr><tr class="filho442410000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.4.2.4.1.99.00 - JUROS E ENCARGOS DE MORA SOBRE OUTROS CRÉDITOS TRIBUTÁRIOS</td>
            <td align="right" data-saldo="-318782.02" data-nat="C">R$ 318.782,02 C</td>
            <td align="right" data-saldo="-318782.02" data-nat="C">R$ 10.868,32 C</td>
            <td align="right" data-saldo="-318782.02" data-nat="C">R$ 329.650,34 C</td></tr><tr class="filho440000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="443000000"></i> 4.4.3.0.0.00.00 - VARIAÇÕES MONETÁRIAS E CAMBIAIS</td>
            <td align="right" data-saldo="-256609481.27" data-nat="C">R$ 256.609.481,27 C</td>
            <td align="right" data-saldo="-256609481.27" data-nat="C">R$ 160.384.276,34 C</td>
            <td align="right" data-saldo="-256609481.27" data-nat="C">R$ 416.993.757,61 C</td></tr><tr class="filho443000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="443900000"></i> 4.4.3.9.0.00.00 - OUTRAS VARIAÇÕES MONETÁRIAS E CAMBIAIS</td>
            <td align="right" data-saldo="-256609481.27" data-nat="C">R$ 256.609.481,27 C</td>
            <td align="right" data-saldo="-256609481.27" data-nat="C">R$ 160.384.276,34 C</td>
            <td align="right" data-saldo="-256609481.27" data-nat="C">R$ 416.993.757,61 C</td></tr><tr class="filho443900000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="443910000"></i> 4.4.3.9.1.00.00 - OUTRAS VARIAÇÕES MONETÁRIAS E CAMBIAIS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="-256609481.27" data-nat="C">R$ 256.609.481,27 C</td>
            <td align="right" data-saldo="-256609481.27" data-nat="C">R$ 160.384.276,34 C</td>
            <td align="right" data-saldo="-256609481.27" data-nat="C">R$ 416.993.757,61 C</td></tr><tr class="filho443910000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.4.3.9.1.99.00 - OUTRAS VARIAÇÕES CAMBIAIS</td>
            <td align="right" data-saldo="-256609481.27" data-nat="C">R$ 256.609.481,27 C</td>
            <td align="right" data-saldo="-256609481.27" data-nat="C">R$ 160.384.276,34 C</td>
            <td align="right" data-saldo="-256609481.27" data-nat="C">R$ 416.993.757,61 C</td></tr><tr class="filho440000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="445000000"></i> 4.4.5.0.0.00.00 - REMUNERAÇÃO DE DEPÓSITOS BANCÁRIOS E APLICAÇÕES FINANCEIRAS</td>
            <td align="right" data-saldo="-7028822.7" data-nat="C">R$ 7.028.822,70 C</td>
            <td align="right" data-saldo="-7028822.7" data-nat="C">R$ 877.454,00 C</td>
            <td align="right" data-saldo="-7028822.7" data-nat="C">R$ 7.906.276,70 C</td></tr><tr class="filho445000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="445100000"></i> 4.4.5.1.0.00.00 - REMUNERAÇÃO DE DEPÓSITOS BANCÁRIOS</td>
            <td align="right" data-saldo="-7036184.88" data-nat="C">R$ 7.036.184,88 C</td>
            <td align="right" data-saldo="-7036184.88" data-nat="C">R$ 877.454,00 C</td>
            <td align="right" data-saldo="-7036184.88" data-nat="C">R$ 7.913.638,88 C</td></tr><tr class="filho445100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.4.5.1.1.00.00 - REMUNERAÇÃO DE DEPÓSITOS BANCÁRIOS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="-7036184.88" data-nat="C">R$ 7.036.184,88 C</td>
            <td align="right" data-saldo="-7036184.88" data-nat="C">R$ 877.454,00 C</td>
            <td align="right" data-saldo="-7036184.88" data-nat="C">R$ 7.913.638,88 C</td></tr><tr class="filho445000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="445200000"></i> 4.4.5.2.0.00.00 - REMUNERAÇÃO DE APLICAÇÕES FINANCEIRAS</td>
            <td align="right" data-saldo="7362.18" data-nat="D">R$ 7.362,18 D</td>
            <td align="right" data-saldo="7362.18" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="7362.18" data-nat="D">R$ 7.362,18 D</td></tr><tr class="filho445200000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.4.5.2.1.00.00 - REMUNERAÇÃO DE APLICAÇÕES FINANCEIRAS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="7362.18" data-nat="D">R$ 7.362,18 D</td>
            <td align="right" data-saldo="7362.18" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="7362.18" data-nat="D">R$ 7.362,18 D</td></tr><tr class="filho440000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="449000000"></i> 4.4.9.0.0.00.00 - OUTRAS VARIAÇÕES PATRIMONIAIS AUMENTATIVAS – FINANCEIRAS</td>
            <td align="right" data-saldo="-126440.34" data-nat="C">R$ 126.440,34 C</td>
            <td align="right" data-saldo="-126440.34" data-nat="C">R$ 36.333,75 C</td>
            <td align="right" data-saldo="-126440.34" data-nat="C">R$ 162.774,09 C</td></tr><tr class="filho449000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="449100000"></i> 4.4.9.1.0.00.00 - OUTRAS VARIAÇÕES PATRIMONIAIS AUMENTATIVAS – FINANCEIRAS</td>
            <td align="right" data-saldo="-126440.34" data-nat="C">R$ 126.440,34 C</td>
            <td align="right" data-saldo="-126440.34" data-nat="C">R$ 36.333,75 C</td>
            <td align="right" data-saldo="-126440.34" data-nat="C">R$ 162.774,09 C</td></tr><tr class="filho449100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.4.9.1.1.00.00 - OUTRAS VARIAÇÕES PATRIMONIAIS AUMENTATIVAS – FINANCEIRAS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="-126440.34" data-nat="C">R$ 126.440,34 C</td>
            <td align="right" data-saldo="-126440.34" data-nat="C">R$ 36.333,75 C</td>
            <td align="right" data-saldo="-126440.34" data-nat="C">R$ 162.774,09 C</td></tr><tr class="filho400000000 filho filho-hide nivel1 nivelPadrao">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="450000000"></i> 4.5.0.0.0.00.00 - TRANSFERÊNCIAS E DELEGAÇÕES RECEBIDAS</td>
            <td align="right" data-saldo="-8819634975.03" data-nat="C">R$ 8.819.634.975,03 C</td>
            <td align="right" data-saldo="-8819634975.03" data-nat="C">R$ 1.238.110.013,49 C</td>
            <td align="right" data-saldo="-8819634975.03" data-nat="C">R$ 10.057.744.988,52 C</td></tr><tr class="filho450000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="451000000"></i> 4.5.1.0.0.00.00 - TRANSFERÊNCIAS INTRAGOVERNAMENTAIS</td>
            <td align="right" data-saldo="-4887198673.43" data-nat="C">R$ 4.887.198.673,43 C</td>
            <td align="right" data-saldo="-4887198673.43" data-nat="C">R$ 826.587.441,56 C</td>
            <td align="right" data-saldo="-4887198673.43" data-nat="C">R$ 5.713.786.114,99 C</td></tr><tr class="filho451000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="451100000"></i> 4.5.1.1.0.00.00 - TRANSFERÊNCIAS RECEBIDAS PARA A EXECUÇÃO ORÇAMENTÁRIA</td>
            <td align="right" data-saldo="-4412714541.43" data-nat="C">R$ 4.412.714.541,43 C</td>
            <td align="right" data-saldo="-4412714541.43" data-nat="C">R$ 737.344.169,28 C</td>
            <td align="right" data-saldo="-4412714541.43" data-nat="C">R$ 5.150.058.710,71 C</td></tr><tr class="filho451100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="451120000"></i> 4.5.1.1.2.00.00 - TRANSFERÊNCIAS RECEBIDAS PARA A EXECUÇÃO ORÇAMENTÁRIA - INTRA OFSS</td>
            <td align="right" data-saldo="-4412714541.43" data-nat="C">R$ 4.412.714.541,43 C</td>
            <td align="right" data-saldo="-4412714541.43" data-nat="C">R$ 737.344.169,28 C</td>
            <td align="right" data-saldo="-4412714541.43" data-nat="C">R$ 5.150.058.710,71 C</td></tr><tr class="filho451120000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.5.1.1.2.01.00 - COTA RECEBIDA </td>
            <td align="right" data-saldo="-4193955210.45" data-nat="C">R$ 4.193.955.210,45 C</td>
            <td align="right" data-saldo="-4193955210.45" data-nat="C">R$ 715.864.362,22 C</td>
            <td align="right" data-saldo="-4193955210.45" data-nat="C">R$ 4.909.819.572,67 C</td></tr><tr class="filho451120000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.5.1.1.2.04.00 - RECURSOS ARRECADADOS - RECEBIDOS </td>
            <td align="right" data-saldo="-218759330.98" data-nat="C">R$ 218.759.330,98 C</td>
            <td align="right" data-saldo="-218759330.98" data-nat="C">R$ 21.479.807,06 C</td>
            <td align="right" data-saldo="-218759330.98" data-nat="C">R$ 240.239.138,04 C</td></tr><tr class="filho451000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="451200000"></i> 4.5.1.2.0.00.00 - TRANSFERÊNCIAS RECEBIDAS INDEPENDENTES DE EXECUÇÃO ORÇAMENTÁRIA</td>
            <td align="right" data-saldo="-8962552.46" data-nat="C">R$ 8.962.552,46 C</td>
            <td align="right" data-saldo="-8962552.46" data-nat="C">R$ 21.170.996,33 C</td>
            <td align="right" data-saldo="-8962552.46" data-nat="C">R$ 30.133.548,79 C</td></tr><tr class="filho451200000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="451220000"></i> 4.5.1.2.2.00.00 - TRANSFERÊNCIAS RECEBIDAS INDEPENDENTES DE EXECUÇÃO ORÇAMENTÁRIA - INTRA OFSS</td>
            <td align="right" data-saldo="-8962552.46" data-nat="C">R$ 8.962.552,46 C</td>
            <td align="right" data-saldo="-8962552.46" data-nat="C">R$ 21.170.996,33 C</td>
            <td align="right" data-saldo="-8962552.46" data-nat="C">R$ 30.133.548,79 C</td></tr><tr class="filho451220000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="451220200"></i> 4.5.1.2.2.02.00 - TRANSFERÊNCIAS NÃO FINANCEIRAS RECEBIDAS - INDEPENDENTES DE EXECUÇÃO ORÇAMENTÁRIA</td>
            <td align="right" data-saldo="-8962552.46" data-nat="C">R$ 8.962.552,46 C</td>
            <td align="right" data-saldo="-8962552.46" data-nat="C">R$ 21.170.996,33 C</td>
            <td align="right" data-saldo="-8962552.46" data-nat="C">R$ 30.133.548,79 C</td></tr><tr class="filho451220200 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.5.1.2.2.02.03 - TRANFERÊNCIAS RECEBIDAS DE BENS MÓVEIS </td>
            <td align="right" data-saldo="-8962552.46" data-nat="C">R$ 8.962.552,46 C</td>
            <td align="right" data-saldo="-8962552.46" data-nat="C">R$ 21.170.996,33 C</td>
            <td align="right" data-saldo="-8962552.46" data-nat="C">R$ 30.133.548,79 C</td></tr><tr class="filho451000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="451300000"></i> 4.5.1.3.0.00.00 - TRANSFERENCIAS RECEBIDAS PARA APORTES DE RECURSOS PARA O RPPS</td>
            <td align="right" data-saldo="-465521579.54" data-nat="C">R$ 465.521.579,54 C</td>
            <td align="right" data-saldo="-465521579.54" data-nat="C">R$ 68.072.275,95 C</td>
            <td align="right" data-saldo="-465521579.54" data-nat="C">R$ 533.593.855,49 C</td></tr><tr class="filho451300000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="451320000"></i> 4.5.1.3.2.00.00 - TRANSFERENCIAS RECEBIDAS PARA APORTES DE RECURSOS PARA O RPPS – INTRA OFSS</td>
            <td align="right" data-saldo="-465521579.54" data-nat="C">R$ 465.521.579,54 C</td>
            <td align="right" data-saldo="-465521579.54" data-nat="C">R$ 68.072.275,95 C</td>
            <td align="right" data-saldo="-465521579.54" data-nat="C">R$ 533.593.855,49 C</td></tr><tr class="filho451320000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="451320100"></i> 4.5.1.3.2.01.00 - PLANO FINANCEIRO</td>
            <td align="right" data-saldo="-465521579.54" data-nat="C">R$ 465.521.579,54 C</td>
            <td align="right" data-saldo="-465521579.54" data-nat="C">R$ 68.072.275,95 C</td>
            <td align="right" data-saldo="-465521579.54" data-nat="C">R$ 533.593.855,49 C</td></tr><tr class="filho451320100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.5.1.3.2.01.01 -  RECURSOS PARA COBERTURA DE INSUFICIÊNCIAS FINANCEIRAS</td>
            <td align="right" data-saldo="-465521579.54" data-nat="C">R$ 465.521.579,54 C</td>
            <td align="right" data-saldo="-465521579.54" data-nat="C">R$ 68.072.275,95 C</td>
            <td align="right" data-saldo="-465521579.54" data-nat="C">R$ 533.593.855,49 C</td></tr><tr class="filho450000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="452000000"></i> 4.5.2.0.0.00.00 - TRANSFERÊNCIAS INTER GOVERNAMENTAIS</td>
            <td align="right" data-saldo="-3375724962.06" data-nat="C">R$ 3.375.724.962,06 C</td>
            <td align="right" data-saldo="-3375724962.06" data-nat="C">R$ 341.829.075,74 C</td>
            <td align="right" data-saldo="-3375724962.06" data-nat="C">R$ 3.717.554.037,80 C</td></tr><tr class="filho452000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="452100000"></i> 4.5.2.1.0.00.00 - TRANSFERÊNCIAS CONSTITUCIONAIS E LEGAIS DE RECEITAS</td>
            <td align="right" data-saldo="-3204819319.09" data-nat="C">R$ 3.204.819.319,09 C</td>
            <td align="right" data-saldo="-3204819319.09" data-nat="C">R$ 304.385.351,41 C</td>
            <td align="right" data-saldo="-3204819319.09" data-nat="C">R$ 3.509.204.670,50 C</td></tr><tr class="filho452100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="452130000"></i> 4.5.2.1.3.00.00 - TRANSFERÊNCIAS CONSTITUCIONAIS E LEGAIS DE RECEITAS - INTER OFSS – UNIÃO</td>
            <td align="right" data-saldo="-3204819319.09" data-nat="C">R$ 3.204.819.319,09 C</td>
            <td align="right" data-saldo="-3204819319.09" data-nat="C">R$ 304.385.351,41 C</td>
            <td align="right" data-saldo="-3204819319.09" data-nat="C">R$ 3.509.204.670,50 C</td></tr><tr class="filho452130000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.5.2.1.3.01.00 - COTA-PARTE FPE</td>
            <td align="right" data-saldo="-2862790564.91" data-nat="C">R$ 2.862.790.564,91 C</td>
            <td align="right" data-saldo="-2862790564.91" data-nat="C">R$ 347.394.013,09 C</td>
            <td align="right" data-saldo="-2862790564.91" data-nat="C">R$ 3.210.184.578,00 C</td></tr><tr class="filho452130000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.5.2.1.3.04.00 - COTA-PARTE IPI</td>
            <td align="right" data-saldo="-716664.97" data-nat="C">R$ 716.664,97 C</td>
            <td align="right" data-saldo="-716664.97" data-nat="C">R$ 101.528,01 C</td>
            <td align="right" data-saldo="-716664.97" data-nat="C">R$ 818.192,98 C</td></tr><tr class="filho452130000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.5.2.1.3.06.00 - TRANSFERENCIA DA COMPENSAÇÃO FINANCEIRA PELA EXPLORAÇÃO DE RECURSOS NATURAIS</td>
            <td align="right" data-saldo="-21417.53" data-nat="C">R$ 21.417,53 C</td>
            <td align="right" data-saldo="-21417.53" data-nat="C">R$ 1.059,10 C</td>
            <td align="right" data-saldo="-21417.53" data-nat="C">R$ 22.476,63 C</td></tr><tr class="filho452130000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.5.2.1.3.07.00 - TRANSFERÊNCIAS DE RECURSOS DO SUS </td>
            <td align="right" data-saldo="-229988822.14" data-nat="C">R$ 229.988.822,14 C</td>
            <td align="right" data-saldo="-229988822.14" data-nat="C">R$ 23.009.889,88 C</td>
            <td align="right" data-saldo="-229988822.14" data-nat="C">R$ 252.998.712,02 C</td></tr><tr class="filho452130000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.5.2.1.3.09.00 - TRANSFERÊNCIAS DE RECURSOS DO FUNDO NACIONAL DO DESENVOLVIMENTO DA EDUCAÇÃO - FNDE</td>
            <td align="right" data-saldo="-13646594.92" data-nat="C">R$ 13.646.594,92 C</td>
            <td align="right" data-saldo="-13646594.92" data-nat="C">R$ 2.058.111,60 C</td>
            <td align="right" data-saldo="-13646594.92" data-nat="C">R$ 15.704.706,52 C</td></tr><tr class="filho452130000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.5.2.1.3.99.00 - OUTRAS PARTICIPAÇÕES NA RECEITA DA UNIÃO </td>
            <td align="right" data-saldo="-97655254.62" data-nat="C">R$ 97.655.254,62 C</td>
            <td align="right" data-saldo="-97655254.62" data-nat="D">R$ 68.179.250,27 D</td>
            <td align="right" data-saldo="-97655254.62" data-nat="C">R$ 29.476.004,35 C</td></tr><tr class="filho452000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="452300000"></i> 4.5.2.3.0.00.00 - TRANSFERÊNCIAS VOLUNTÁRIAS</td>
            <td align="right" data-saldo="-129330723.55" data-nat="C">R$ 129.330.723,55 C</td>
            <td align="right" data-saldo="-129330723.55" data-nat="C">R$ 37.443.724,33 C</td>
            <td align="right" data-saldo="-129330723.55" data-nat="C">R$ 166.774.447,88 C</td></tr><tr class="filho452300000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="452330000"></i> 4.5.2.3.3.00.00 - TRANSFERÊNCIAS VOLUNTÁRIAS – INTER OFSS - UNIÃO</td>
            <td align="right" data-saldo="-127151930.23" data-nat="C">R$ 127.151.930,23 C</td>
            <td align="right" data-saldo="-127151930.23" data-nat="C">R$ 37.291.164,14 C</td>
            <td align="right" data-saldo="-127151930.23" data-nat="C">R$ 164.443.094,37 C</td></tr><tr class="filho452330000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.5.2.3.3.99.00 - DEMAIS TRANSFERÊNCIAS VOLUNTÁRIAS</td>
            <td align="right" data-saldo="-127151930.23" data-nat="C">R$ 127.151.930,23 C</td>
            <td align="right" data-saldo="-127151930.23" data-nat="C">R$ 37.291.164,14 C</td>
            <td align="right" data-saldo="-127151930.23" data-nat="C">R$ 164.443.094,37 C</td></tr><tr class="filho452300000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="452340000"></i> 4.5.2.3.4.00.00 - TRANSFERÊNCIAS VOLUNTÁRIAS – INTER OFSS - ESTADO</td>
            <td align="right" data-saldo="-1011361.24" data-nat="C">R$ 1.011.361,24 C</td>
            <td align="right" data-saldo="-1011361.24" data-nat="C">R$ 24.060,19 C</td>
            <td align="right" data-saldo="-1011361.24" data-nat="C">R$ 1.035.421,43 C</td></tr><tr class="filho452340000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.5.2.3.4.99.00 - DEMAIS TRANSFERÊNCIAS VOLUNTÁRIAS</td>
            <td align="right" data-saldo="-1011361.24" data-nat="C">R$ 1.011.361,24 C</td>
            <td align="right" data-saldo="-1011361.24" data-nat="C">R$ 24.060,19 C</td>
            <td align="right" data-saldo="-1011361.24" data-nat="C">R$ 1.035.421,43 C</td></tr><tr class="filho452300000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="452350000"></i> 4.5.2.3.5.00.00 - TRANSFERÊNCIAS VOLUNTÁRIAS - INTER OFSS - MUNICÍPIO</td>
            <td align="right" data-saldo="-1167432.08" data-nat="C">R$ 1.167.432,08 C</td>
            <td align="right" data-saldo="-1167432.08" data-nat="C">R$ 128.500,00 C</td>
            <td align="right" data-saldo="-1167432.08" data-nat="C">R$ 1.295.932,08 C</td></tr><tr class="filho452350000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.5.2.3.5.99.00 - DEMAIS TRANSFERÊNCIAS VOLUNTÁRIAS</td>
            <td align="right" data-saldo="-1167432.08" data-nat="C">R$ 1.167.432,08 C</td>
            <td align="right" data-saldo="-1167432.08" data-nat="C">R$ 128.500,00 C</td>
            <td align="right" data-saldo="-1167432.08" data-nat="C">R$ 1.295.932,08 C</td></tr><tr class="filho452000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="452400000"></i> 4.5.2.4.0.00.00 - OUTRAS TRANSFERÊNCIAS</td>
            <td align="right" data-saldo="-41574919.42" data-nat="C">R$ 41.574.919,42 C</td>
            <td align="right" data-saldo="-41574919.42" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="-41574919.42" data-nat="C">R$ 41.574.919,42 C</td></tr><tr class="filho452400000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.5.2.4.3.00.00 - OUTRAS TRANSFERÊNCIAS – INTER OFSS - UNIÃO</td>
            <td align="right" data-saldo="-41574919.42" data-nat="C">R$ 41.574.919,42 C</td>
            <td align="right" data-saldo="-41574919.42" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="-41574919.42" data-nat="C">R$ 41.574.919,42 C</td></tr><tr class="filho450000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="453000000"></i> 4.5.3.0.0.00.00 - TRANSFERÊNCIAS DAS INSTITUIÇÕES PRIVADAS</td>
            <td align="right" data-saldo="-4782253.67" data-nat="C">R$ 4.782.253,67 C</td>
            <td align="right" data-saldo="-4782253.67" data-nat="C">R$ 3.438.826,94 C</td>
            <td align="right" data-saldo="-4782253.67" data-nat="C">R$ 8.221.080,61 C</td></tr><tr class="filho453000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="453200000"></i> 4.5.3.2.0.00.00 - TRANSFERÊNCIAS DAS INSTITUIÇÕES PRIVADAS COM FINS LUCRATIVOS</td>
            <td align="right" data-saldo="-4782253.67" data-nat="C">R$ 4.782.253,67 C</td>
            <td align="right" data-saldo="-4782253.67" data-nat="C">R$ 3.438.826,94 C</td>
            <td align="right" data-saldo="-4782253.67" data-nat="C">R$ 8.221.080,61 C</td></tr><tr class="filho453200000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="453210000"></i> 4.5.3.2.1.00.00 - TRANSFERÊNCIAS DAS INSTITUIÇÕES PRIVADAS COM FINS LUCRATIVOS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="-4782253.67" data-nat="C">R$ 4.782.253,67 C</td>
            <td align="right" data-saldo="-4782253.67" data-nat="C">R$ 3.438.826,94 C</td>
            <td align="right" data-saldo="-4782253.67" data-nat="C">R$ 8.221.080,61 C</td></tr><tr class="filho453210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.5.3.2.1.01.00 - TRANSFERÊNCIAS DAS INSTITUIÇÕES PRIVADAS COM FINS LUCRATIVOS PARA CONVÊNIOS</td>
            <td align="right" data-saldo="-1803855.16" data-nat="C">R$ 1.803.855,16 C</td>
            <td align="right" data-saldo="-1803855.16" data-nat="C">R$ 3.272.144,84 C</td>
            <td align="right" data-saldo="-1803855.16" data-nat="C">R$ 5.076.000,00 C</td></tr><tr class="filho453210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.5.3.2.1.99.00 - OUTRAS TRANSFERÊNCIAS DAS INSTITUIÇÕES PRIVADAS COM FINS LUCRATIVOS </td>
            <td align="right" data-saldo="-2978398.51" data-nat="C">R$ 2.978.398,51 C</td>
            <td align="right" data-saldo="-2978398.51" data-nat="C">R$ 166.682,10 C</td>
            <td align="right" data-saldo="-2978398.51" data-nat="C">R$ 3.145.080,61 C</td></tr><tr class="filho450000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="454000000"></i> 4.5.4.0.0.00.00 - TRANSFERÊNCIAS DAS INSTITUIÇÕES MULTIGOVERNAMENTAIS</td>
            <td align="right" data-saldo="-551750046.74" data-nat="C">R$ 551.750.046,74 C</td>
            <td align="right" data-saldo="-551750046.74" data-nat="C">R$ 66.248.535,91 C</td>
            <td align="right" data-saldo="-551750046.74" data-nat="C">R$ 617.998.582,65 C</td></tr><tr class="filho454000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="454100000"></i> 4.5.4.1.0.00.00 - TRANSFERÊNCIAS DAS INSTITUIÇÕES MULTIGOVERNAMENTAIS</td>
            <td align="right" data-saldo="-551750046.74" data-nat="C">R$ 551.750.046,74 C</td>
            <td align="right" data-saldo="-551750046.74" data-nat="C">R$ 66.248.535,91 C</td>
            <td align="right" data-saldo="-551750046.74" data-nat="C">R$ 617.998.582,65 C</td></tr><tr class="filho454100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="454110000"></i> 4.5.4.1.1.00.00 - TRANSFERÊNCIAS DAS INSTITUIÇÕES MULTIGOVERNAMENTAIS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="-551750046.74" data-nat="C">R$ 551.750.046,74 C</td>
            <td align="right" data-saldo="-551750046.74" data-nat="C">R$ 66.248.535,91 C</td>
            <td align="right" data-saldo="-551750046.74" data-nat="C">R$ 617.998.582,65 C</td></tr><tr class="filho454110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.5.4.1.1.99.00 - OUTRAS TRANSFERÊNCIAS MULTIGOVERNAMENTAIS</td>
            <td align="right" data-saldo="-551750046.74" data-nat="C">R$ 551.750.046,74 C</td>
            <td align="right" data-saldo="-551750046.74" data-nat="C">R$ 66.248.535,91 C</td>
            <td align="right" data-saldo="-551750046.74" data-nat="C">R$ 617.998.582,65 C</td></tr><tr class="filho450000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="458000000"></i> 4.5.8.0.0.00.00 - TRANSFERÊNCIAS DE PESSOAS FÍSICAS</td>
            <td align="right" data-saldo="-145424.85" data-nat="C">R$ 145.424,85 C</td>
            <td align="right" data-saldo="-145424.85" data-nat="C">R$ 6.133,34 C</td>
            <td align="right" data-saldo="-145424.85" data-nat="C">R$ 151.558,19 C</td></tr><tr class="filho458000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="458100000"></i> 4.5.8.1.0.00.00 - TRANSFERÊNCIAS DE PESSOAS FÍSICAS</td>
            <td align="right" data-saldo="-145424.85" data-nat="C">R$ 145.424,85 C</td>
            <td align="right" data-saldo="-145424.85" data-nat="C">R$ 6.133,34 C</td>
            <td align="right" data-saldo="-145424.85" data-nat="C">R$ 151.558,19 C</td></tr><tr class="filho458100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.5.8.1.1.00.00 - TRANSFERÊNCIAS DE PESSOAS FÍSICAS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="-145424.85" data-nat="C">R$ 145.424,85 C</td>
            <td align="right" data-saldo="-145424.85" data-nat="C">R$ 6.133,34 C</td>
            <td align="right" data-saldo="-145424.85" data-nat="C">R$ 151.558,19 C</td></tr><tr class="filho450000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="459000000"></i> 4.5.9.0.0.00.00 - OUTRAS TRANSFERÊNCIAS E DELEGAÇÕES RECEBIDAS</td>
            <td align="right" data-saldo="-33614.28" data-nat="C">R$ 33.614,28 C</td>
            <td align="right" data-saldo="-33614.28" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="-33614.28" data-nat="C">R$ 33.614,28 C</td></tr><tr class="filho459000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="459100000"></i> 4.5.9.1.0.00.00 - OUTRAS TRANSFERÊNCIAS E DELEGAÇÕES RECEBIDAS</td>
            <td align="right" data-saldo="-33614.28" data-nat="C">R$ 33.614,28 C</td>
            <td align="right" data-saldo="-33614.28" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="-33614.28" data-nat="C">R$ 33.614,28 C</td></tr><tr class="filho459100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="459110000"></i> 4.5.9.1.1.00.00 - OUTRAS TRANSFERÊNCIAS E DELEGAÇÕES RECEBIDAS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="-33614.28" data-nat="C">R$ 33.614,28 C</td>
            <td align="right" data-saldo="-33614.28" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="-33614.28" data-nat="C">R$ 33.614,28 C</td></tr><tr class="filho459110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.5.9.1.1.01.00 - DOAÇÕES RECEBIDAS</td>
            <td align="right" data-saldo="-33614.28" data-nat="C">R$ 33.614,28 C</td>
            <td align="right" data-saldo="-33614.28" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="-33614.28" data-nat="C">R$ 33.614,28 C</td></tr><tr class="filho400000000 filho filho-hide nivel1 nivelPadrao">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="460000000"></i> 4.6.0.0.0.00.00 - VALORIZAÇÃO E GANHOS COM ATIVOS E DESINCORPORAÇÃO DE PASSIVOS</td>
            <td align="right" data-saldo="-23064620.57" data-nat="C">R$ 23.064.620,57 C</td>
            <td align="right" data-saldo="-23064620.57" data-nat="D">R$ 7.335.070,16 D</td>
            <td align="right" data-saldo="-23064620.57" data-nat="C">R$ 15.729.550,41 C</td></tr><tr class="filho460000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="462000000"></i> 4.6.2.0.0.00.00 - GANHOS COM ALIENAÇÃO</td>
            <td align="right" data-saldo="-1797939.49" data-nat="C">R$ 1.797.939,49 C</td>
            <td align="right" data-saldo="-1797939.49" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="-1797939.49" data-nat="C">R$ 1.797.939,49 C</td></tr><tr class="filho462000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="462200000"></i> 4.6.2.2.0.00.00 - GANHOS COM ALIENAÇÃO DE IMOBILIZADO</td>
            <td align="right" data-saldo="-1797939.49" data-nat="C">R$ 1.797.939,49 C</td>
            <td align="right" data-saldo="-1797939.49" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="-1797939.49" data-nat="C">R$ 1.797.939,49 C</td></tr><tr class="filho462200000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="462210000"></i> 4.6.2.2.1.00.00 - GANHOS COM ALIENAÇÃO DE IMOBILIZADO - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="-1797939.49" data-nat="C">R$ 1.797.939,49 C</td>
            <td align="right" data-saldo="-1797939.49" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="-1797939.49" data-nat="C">R$ 1.797.939,49 C</td></tr><tr class="filho462210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="462210100"></i> 4.6.2.2.1.01.00 - GANHO LÍQUIDO COM A ALIENAÇÃO DE BENS MÓVEIS</td>
            <td align="right" data-saldo="-1795519.1" data-nat="C">R$ 1.795.519,10 C</td>
            <td align="right" data-saldo="-1795519.1" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="-1795519.1" data-nat="C">R$ 1.795.519,10 C</td></tr><tr class="filho462210100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.6.2.2.1.01.03 - GANHO LÍQUIDO COM A ALIENAÇÃO DE MÓVEIS E UTENSÍLIOS</td>
            <td align="right" data-saldo="-19415" data-nat="C">R$ 19.415,00 C</td>
            <td align="right" data-saldo="-19415" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="-19415" data-nat="C">R$ 19.415,00 C</td></tr><tr class="filho462210100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.6.2.2.1.01.05 - GANHO LÍQUIDO COM A ALIENAÇÃO DE VEÍCULOS</td>
            <td align="right" data-saldo="-1776104.1" data-nat="C">R$ 1.776.104,10 C</td>
            <td align="right" data-saldo="-1776104.1" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="-1776104.1" data-nat="C">R$ 1.776.104,10 C</td></tr><tr class="filho462210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="462210200"></i> 4.6.2.2.1.02.00 - GANHO LÍQUIDO COM A ALIENAÇÃO DE BENS IMÓVEIS</td>
            <td align="right" data-saldo="-2420.39" data-nat="C">R$ 2.420,39 C</td>
            <td align="right" data-saldo="-2420.39" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="-2420.39" data-nat="C">R$ 2.420,39 C</td></tr><tr class="filho462210200 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.6.2.2.1.02.99 - ALIENAÇÃO DE OUTROS BENS IMÓVEIS</td>
            <td align="right" data-saldo="-2420.39" data-nat="C">R$ 2.420,39 C</td>
            <td align="right" data-saldo="-2420.39" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="-2420.39" data-nat="C">R$ 2.420,39 C</td></tr><tr class="filho460000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="463000000"></i> 4.6.3.0.0.00.00 - GANHOS COM INCORPORAÇÃO DE ATIVOS</td>
            <td align="right" data-saldo="-21266681.08" data-nat="C">R$ 21.266.681,08 C</td>
            <td align="right" data-saldo="-21266681.08" data-nat="D">R$ 7.335.070,16 D</td>
            <td align="right" data-saldo="-21266681.08" data-nat="C">R$ 13.931.610,92 C</td></tr><tr class="filho463000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="463900000"></i> 4.6.3.9.0.00.00 - OUTROS GANHOS COM INCORPORAÇÃO DE ATIVOS</td>
            <td align="right" data-saldo="-21266681.08" data-nat="C">R$ 21.266.681,08 C</td>
            <td align="right" data-saldo="-21266681.08" data-nat="D">R$ 7.335.070,16 D</td>
            <td align="right" data-saldo="-21266681.08" data-nat="C">R$ 13.931.610,92 C</td></tr><tr class="filho463900000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.6.3.9.1.00.00 - OUTROS GANHOS COM INCORPORAÇÃO DE ATIVOS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="-21266681.08" data-nat="C">R$ 21.266.681,08 C</td>
            <td align="right" data-saldo="-21266681.08" data-nat="D">R$ 7.335.070,16 D</td>
            <td align="right" data-saldo="-21266681.08" data-nat="C">R$ 13.931.610,92 C</td></tr><tr class="filho400000000 filho filho-hide nivel1 nivelPadrao">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="490000000"></i> 4.9.0.0.0.00.00 - OUTRAS VARIAÇÕES PATRIMONIAIS AUMENTATIVAS</td>
            <td align="right" data-saldo="-83619704.48" data-nat="C">R$ 83.619.704,48 C</td>
            <td align="right" data-saldo="-83619704.48" data-nat="C">R$ 6.180.464.007,46 C</td>
            <td align="right" data-saldo="-83619704.48" data-nat="C">R$ 6.264.083.711,94 C</td></tr><tr class="filho490000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="492000000"></i> 4.9.2.0.0.00.00 - RESULTADO POSITIVO DE PARTICIPAÇÕES</td>
            <td align="right" data-saldo="-4389.89" data-nat="C">R$ 4.389,89 C</td>
            <td align="right" data-saldo="-4389.89" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="-4389.89" data-nat="C">R$ 4.389,89 C</td></tr><tr class="filho492000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="492200000"></i> 4.9.2.2.0.00.00 - DIVIDENDOS E RENDIMENTOS DE OUTROS INVESTIMENTOS</td>
            <td align="right" data-saldo="-4389.89" data-nat="C">R$ 4.389,89 C</td>
            <td align="right" data-saldo="-4389.89" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="-4389.89" data-nat="C">R$ 4.389,89 C</td></tr><tr class="filho492200000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.9.2.2.1.00.00 - DIVIDENDOS E RENDIMENTOS DE OUTROS INVESTIMENTOS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="-4389.89" data-nat="C">R$ 4.389,89 C</td>
            <td align="right" data-saldo="-4389.89" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="-4389.89" data-nat="C">R$ 4.389,89 C</td></tr><tr class="filho490000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="497000000"></i> 4.9.7.0.0.00.00 - REVERSÃO DE PROVISÕES E AJUSTES DE PERDAS</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 6.159.990.924,15 C</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 6.159.990.924,15 C</td></tr><tr class="filho497000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="497100000"></i> 4.9.7.1.0.00.00 - REVERSÃO DE PROVISÕES</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 6.159.990.924,15 C</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 6.159.990.924,15 C</td></tr><tr class="filho497100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="497110000"></i> 4.9.7.1.1.00.00 - REVERSÃO DE PROVISÕES – CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 6.159.990.924,15 C</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 6.159.990.924,15 C</td></tr><tr class="filho497110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.9.7.1.1.02.00 - REVERSÃO DE PROVISÕES MATEMÁTICAS PREVIDENCIÁRIAS A LONGO PRAZO</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 6.159.990.924,15 C</td>
            <td align="right" data-saldo="0" data-nat="C">R$ 6.159.990.924,15 C</td></tr><tr class="filho490000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="499000000"></i> 4.9.9.0.0.00.00 - DIVERSAS VARIAÇÕES PATRIMONIAIS AUMENTATIVAS</td>
            <td align="right" data-saldo="-83615314.59" data-nat="C">R$ 83.615.314,59 C</td>
            <td align="right" data-saldo="-83615314.59" data-nat="C">R$ 20.473.083,31 C</td>
            <td align="right" data-saldo="-83615314.59" data-nat="C">R$ 104.088.397,90 C</td></tr><tr class="filho499000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="499100000"></i> 4.9.9.1.0.00.00 - COMPENSAÇÃO FINANCEIRA ENTRE RGPS/RPPS</td>
            <td align="right" data-saldo="-23236271.39" data-nat="C">R$ 23.236.271,39 C</td>
            <td align="right" data-saldo="-23236271.39" data-nat="C">R$ 3.461.136,46 C</td>
            <td align="right" data-saldo="-23236271.39" data-nat="C">R$ 26.697.407,85 C</td></tr><tr class="filho499100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.9.9.1.3.00.00 - COMPENSAÇÃO FINANCEIRA ENTRE RGPS/RPPS - INTER OFSS - UNIÃO</td>
            <td align="right" data-saldo="-23236271.39" data-nat="C">R$ 23.236.271,39 C</td>
            <td align="right" data-saldo="-23236271.39" data-nat="C">R$ 3.461.136,46 C</td>
            <td align="right" data-saldo="-23236271.39" data-nat="C">R$ 26.697.407,85 C</td></tr><tr class="filho499000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="499500000"></i> 4.9.9.5.0.00.00 - MULTAS ADMINISTRATIVAS</td>
            <td align="right" data-saldo="-14071465.15" data-nat="C">R$ 14.071.465,15 C</td>
            <td align="right" data-saldo="-14071465.15" data-nat="C">R$ 1.152.538,97 C</td>
            <td align="right" data-saldo="-14071465.15" data-nat="C">R$ 15.224.004,12 C</td></tr><tr class="filho499500000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.9.9.5.1.00.00 - MULTAS ADMINISTRATIVAS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="-14071465.15" data-nat="C">R$ 14.071.465,15 C</td>
            <td align="right" data-saldo="-14071465.15" data-nat="C">R$ 1.152.538,97 C</td>
            <td align="right" data-saldo="-14071465.15" data-nat="C">R$ 15.224.004,12 C</td></tr><tr class="filho499000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="499600000"></i> 4.9.9.6.0.00.00 - INDENIZAÇÕES, RESTITUIÇÕES E RESSARCIMENTOS</td>
            <td align="right" data-saldo="-5330004.25" data-nat="C">R$ 5.330.004,25 C</td>
            <td align="right" data-saldo="-5330004.25" data-nat="C">R$ 9.055.249,41 C</td>
            <td align="right" data-saldo="-5330004.25" data-nat="C">R$ 14.385.253,66 C</td></tr><tr class="filho499600000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="499610000"></i> 4.9.9.6.1.00.00 - INDENIZAÇÕES, RESTITUIÇÕES E RESSARCIMENTOS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="-5330004.25" data-nat="C">R$ 5.330.004,25 C</td>
            <td align="right" data-saldo="-5330004.25" data-nat="C">R$ 9.055.249,41 C</td>
            <td align="right" data-saldo="-5330004.25" data-nat="C">R$ 14.385.253,66 C</td></tr><tr class="filho499610000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.9.9.6.1.01.00 - INDENIZAÇÕES</td>
            <td align="right" data-saldo="-87307.64" data-nat="C">R$ 87.307,64 C</td>
            <td align="right" data-saldo="-87307.64" data-nat="C">R$ 19.265,92 C</td>
            <td align="right" data-saldo="-87307.64" data-nat="C">R$ 106.573,56 C</td></tr><tr class="filho499610000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.9.9.6.1.02.00 - RESTITUIÇÕES</td>
            <td align="right" data-saldo="-5242696.61" data-nat="C">R$ 5.242.696,61 C</td>
            <td align="right" data-saldo="-5242696.61" data-nat="C">R$ 9.035.983,49 C</td>
            <td align="right" data-saldo="-5242696.61" data-nat="C">R$ 14.278.680,10 C</td></tr><tr class="filho499000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="499900000"></i> 4.9.9.9.0.00.00 - VARIAÇÕES PATRIMONIAIS AUMENTATIVAS DECORRENTES DE FATOS GERADORES DIVERSOS</td>
            <td align="right" data-saldo="-40977573.8" data-nat="C">R$ 40.977.573,80 C</td>
            <td align="right" data-saldo="-40977573.8" data-nat="C">R$ 6.804.158,47 C</td>
            <td align="right" data-saldo="-40977573.8" data-nat="C">R$ 47.781.732,27 C</td></tr><tr class="filho499900000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.9.9.9.1.00.00 - VARIAÇÕES PATRIMONIAIS AUMENTATIVAS DECORRENTES DE FATOS GERADORES DIVERSOS - CONSOLIDAÇÃO</td>
            <td align="right" data-saldo="-39132579.61" data-nat="C">R$ 39.132.579,61 C</td>
            <td align="right" data-saldo="-39132579.61" data-nat="C">R$ 6.836.926,15 C</td>
            <td align="right" data-saldo="-39132579.61" data-nat="C">R$ 45.969.505,76 C</td></tr><tr class="filho499900000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 4.9.9.9.2.00.00 - VARIAÇÕES PATRIMONIAIS AUMENTATIVAS DECORRENTES DE FATOS GERADORES DIVERSOS - INTRA OFSS</td>
            <td align="right" data-saldo="-1844994.19" data-nat="C">R$ 1.844.994,19 C</td>
            <td align="right" data-saldo="-1844994.19" data-nat="D">R$ 32.767,68 D</td>
            <td align="right" data-saldo="-1844994.19" data-nat="C">R$ 1.812.226,51 C</td></tr><tr class="filho0 filho filho-hide nivel0 nivelPadrao">
            <td><i class="fa fa-minus-circle js-abre-filhos" id="500000000"></i> 5.0.0.0.0.00.00 - CONTROLES DA APROVAÇÃO DO PLANEJAMENTO E ORÇAMENTO</td>
            <td align="right" data-saldo="15183394355.26" data-nat="D">R$ 15.183.394.355,26 D</td>
            <td align="right" data-saldo="15183394355.26" data-nat="D">R$ 467.719.023,28 D</td>
            <td align="right" data-saldo="15183394355.26" data-nat="D">R$ 15.651.113.378,54 D</td></tr><tr class="filho500000000 filho filho-hide nivel1 nivelPadrao">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="520000000"></i> 5.2.0.0.0.00.00 - ORÇAMENTO APROVADO</td>
            <td align="right" data-saldo="14870665882.8" data-nat="D">R$ 14.870.665.882,80 D</td>
            <td align="right" data-saldo="14870665882.8" data-nat="D">R$ 467.719.023,28 D</td>
            <td align="right" data-saldo="14870665882.8" data-nat="D">R$ 15.338.384.906,08 D</td></tr><tr class="filho520000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="521000000"></i> 5.2.1.0.0.00.00 - PREVISÃO DA RECEITA</td>
            <td align="right" data-saldo="7338560410.79" data-nat="D">R$ 7.338.560.410,79 D</td>
            <td align="right" data-saldo="7338560410.79" data-nat="D">R$ 233.859.511,64 D</td>
            <td align="right" data-saldo="7338560410.79" data-nat="D">R$ 7.572.419.922,43 D</td></tr><tr class="filho521000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="521100000"></i> 5.2.1.1.0.00.00 - PREVISÃO INICIAL DA RECEITA</td>
            <td align="right" data-saldo="6644453379.68" data-nat="D">R$ 6.644.453.379,68 D</td>
            <td align="right" data-saldo="6644453379.68" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="6644453379.68" data-nat="D">R$ 6.644.453.379,68 D</td></tr><tr class="filho521100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 5.2.1.1.1.00.00 - PREVISAO INICIAL DA RECEITA BRUTA</td>
            <td align="right" data-saldo="7516319145.45" data-nat="D">R$ 7.516.319.145,45 D</td>
            <td align="right" data-saldo="7516319145.45" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="7516319145.45" data-nat="D">R$ 7.516.319.145,45 D</td></tr><tr class="filho521100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="521120000"></i> 5.2.1.1.2.00.00 - (-) PREVISÃO DE DEDUÇÕES DA RECEITA</td>
            <td align="right" data-saldo="-871865765.77" data-nat="C">R$ 871.865.765,77 C</td>
            <td align="right" data-saldo="-871865765.77" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="-871865765.77" data-nat="C">R$ 871.865.765,77 C</td></tr><tr class="filho521120000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="521120100"></i> 5.2.1.1.2.01.00 - (-) DEDUÇÕES POR TRANSFERÊNCIAS CONSTITUCIONAIS E LEGAIS</td>
            <td align="right" data-saldo="-656784265.77" data-nat="C">R$ 656.784.265,77 C</td>
            <td align="right" data-saldo="-656784265.77" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="-656784265.77" data-nat="C">R$ 656.784.265,77 C</td></tr><tr class="filho521120100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 5.2.1.1.2.01.01 - (-) FUNDEB</td>
            <td align="right" data-saldo="-656784265.77" data-nat="C">R$ 656.784.265,77 C</td>
            <td align="right" data-saldo="-656784265.77" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="-656784265.77" data-nat="C">R$ 656.784.265,77 C</td></tr><tr class="filho521120000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 5.2.1.1.2.99.00 - (-) OUTRAS DEDUÇÕES</td>
            <td align="right" data-saldo="-215081500" data-nat="C">R$ 215.081.500,00 C</td>
            <td align="right" data-saldo="-215081500" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="-215081500" data-nat="C">R$ 215.081.500,00 C</td></tr><tr class="filho521000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="521200000"></i> 5.2.1.2.0.00.00 - ALTERAÇÃO DA PREVISÃO DA RECEITA</td>
            <td align="right" data-saldo="694107031.11" data-nat="D">R$ 694.107.031,11 D</td>
            <td align="right" data-saldo="694107031.11" data-nat="D">R$ 233.859.511,64 D</td>
            <td align="right" data-saldo="694107031.11" data-nat="D">R$ 927.966.542,75 D</td></tr><tr class="filho521200000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="521210000"></i> 5.2.1.2.1.00.00 - PREVISÃO ADICIONAL DA RECEITA</td>
            <td align="right" data-saldo="694107031.11" data-nat="D">R$ 694.107.031,11 D</td>
            <td align="right" data-saldo="694107031.11" data-nat="D">R$ 233.859.511,64 D</td>
            <td align="right" data-saldo="694107031.11" data-nat="D">R$ 927.966.542,75 D</td></tr><tr class="filho521210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 5.2.1.2.1.01.00 - REESTIMATIVA</td>
            <td align="right" data-saldo="694107031.11" data-nat="D">R$ 694.107.031,11 D</td>
            <td align="right" data-saldo="694107031.11" data-nat="D">R$ 233.859.511,64 D</td>
            <td align="right" data-saldo="694107031.11" data-nat="D">R$ 927.966.542,75 D</td></tr><tr class="filho520000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="522000000"></i> 5.2.2.0.0.00.00 - FIXAÇÃO DA DESPESA</td>
            <td align="right" data-saldo="7532105472.01" data-nat="D">R$ 7.532.105.472,01 D</td>
            <td align="right" data-saldo="7532105472.01" data-nat="D">R$ 233.859.511,64 D</td>
            <td align="right" data-saldo="7532105472.01" data-nat="D">R$ 7.765.964.983,65 D</td></tr><tr class="filho522000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="522100000"></i> 5.2.2.1.0.00.00 - DOTAÇÃO ORÇAMENTÁRIA</td>
            <td align="right" data-saldo="7532105472.01" data-nat="D">R$ 7.532.105.472,01 D</td>
            <td align="right" data-saldo="7532105472.01" data-nat="D">R$ 233.859.511,64 D</td>
            <td align="right" data-saldo="7532105472.01" data-nat="D">R$ 7.765.964.983,65 D</td></tr><tr class="filho522100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="522110000"></i> 5.2.2.1.1.00.00 - DOTAÇÃO INICIAL</td>
            <td align="right" data-saldo="6644453379.68" data-nat="D">R$ 6.644.453.379,68 D</td>
            <td align="right" data-saldo="6644453379.68" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="6644453379.68" data-nat="D">R$ 6.644.453.379,68 D</td></tr><tr class="filho522110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 5.2.2.1.1.01.00 - CREDITO INICIAL</td>
            <td align="right" data-saldo="6644453379.68" data-nat="D">R$ 6.644.453.379,68 D</td>
            <td align="right" data-saldo="6644453379.68" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="6644453379.68" data-nat="D">R$ 6.644.453.379,68 D</td></tr><tr class="filho522100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="522120000"></i> 5.2.2.1.2.00.00 - DOTAÇÃO ADICIONAL POR TIPO DE CREDITO</td>
            <td align="right" data-saldo="2850425777.28" data-nat="D">R$ 2.850.425.777,28 D</td>
            <td align="right" data-saldo="2850425777.28" data-nat="D">R$ 635.047.341,69 D</td>
            <td align="right" data-saldo="2850425777.28" data-nat="D">R$ 3.485.473.118,97 D</td></tr><tr class="filho522120000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 5.2.2.1.2.01.00 - CREDITO ADICIONAL – SUPLEMENTAR</td>
            <td align="right" data-saldo="2656684914.15" data-nat="D">R$ 2.656.684.914,15 D</td>
            <td align="right" data-saldo="2656684914.15" data-nat="D">R$ 635.047.341,69 D</td>
            <td align="right" data-saldo="2656684914.15" data-nat="D">R$ 3.291.732.255,84 D</td></tr><tr class="filho522120000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="522120300"></i> 5.2.2.1.2.03.00 - CREDITO ADICIONAL – EXTRAORDINÁRIO</td>
            <td align="right" data-saldo="193740863.13" data-nat="D">R$ 193.740.863,13 D</td>
            <td align="right" data-saldo="193740863.13" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="193740863.13" data-nat="D">R$ 193.740.863,13 D</td></tr><tr class="filho522120300 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 5.2.2.1.2.03.01 - CRÉDITOS EXTRAORDINÁRIOS ABERTOS</td>
            <td align="right" data-saldo="193740863.13" data-nat="D">R$ 193.740.863,13 D</td>
            <td align="right" data-saldo="193740863.13" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="193740863.13" data-nat="D">R$ 193.740.863,13 D</td></tr><tr class="filho522100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="522130000"></i> 5.2.2.1.3.00.00 - DOTAÇÃO ADICIONAL POR FONTE</td>
            <td align="right" data-saldo="1.4305114746094E-6" data-nat="D">R$ 0,00 D</td>
            <td align="right" data-saldo="1.4305114746094E-6" data-nat="D">R$ 0,00 D</td>
            <td align="right" data-saldo="1.4305114746094E-6" data-nat="D">R$ 0,00 D</td></tr><tr class="filho522130000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 5.2.2.1.3.01.00 - SUPERAVIT FINANCEIRO DE EXERCÍCIO ANTERIOR </td>
            <td align="right" data-saldo="193545061.22" data-nat="D">R$ 193.545.061,22 D</td>
            <td align="right" data-saldo="193545061.22" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="193545061.22" data-nat="D">R$ 193.545.061,22 D</td></tr><tr class="filho522130000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 5.2.2.1.3.02.00 -  EXCESSO DE ARRECADAÇÃO </td>
            <td align="right" data-saldo="694107031.11" data-nat="D">R$ 694.107.031,11 D</td>
            <td align="right" data-saldo="694107031.11" data-nat="D">R$ 233.859.511,64 D</td>
            <td align="right" data-saldo="694107031.11" data-nat="D">R$ 927.966.542,75 D</td></tr><tr class="filho522130000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 5.2.2.1.3.03.00 - ANULAÇÃO DE DOTAÇÃO</td>
            <td align="right" data-saldo="1962773684.95" data-nat="D">R$ 1.962.773.684,95 D</td>
            <td align="right" data-saldo="1962773684.95" data-nat="D">R$ 401.187.830,05 D</td>
            <td align="right" data-saldo="1962773684.95" data-nat="D">R$ 2.363.961.515,00 D</td></tr><tr class="filho522130000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 5.2.2.1.3.09.00 - (-) CANCELAMENTO DE DOTAÇÕES</td>
            <td align="right" data-saldo="-1962773684.95" data-nat="C">R$ 1.962.773.684,95 C</td>
            <td align="right" data-saldo="-1962773684.95" data-nat="C">R$ 401.187.830,05 C</td>
            <td align="right" data-saldo="-1962773684.95" data-nat="C">R$ 2.363.961.515,00 C</td></tr><tr class="filho522130000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 5.2.2.1.3.99.00 - VALOR GLOBAL DA DOTAÇÃO ADICIONAL POR FONTE</td>
            <td align="right" data-saldo="-887652092.33" data-nat="C">R$ 887.652.092,33 C</td>
            <td align="right" data-saldo="-887652092.33" data-nat="C">R$ 233.859.511,64 C</td>
            <td align="right" data-saldo="-887652092.33" data-nat="C">R$ 1.121.511.603,97 C</td></tr><tr class="filho522100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="522190000"></i> 5.2.2.1.9.00.00 - CANCELAMENTO/REMANEJAMENTO DE DOTAÇÃO</td>
            <td align="right" data-saldo="-1962773684.95" data-nat="C">R$ 1.962.773.684,95 C</td>
            <td align="right" data-saldo="-1962773684.95" data-nat="C">R$ 401.187.830,05 C</td>
            <td align="right" data-saldo="-1962773684.95" data-nat="C">R$ 2.363.961.515,00 C</td></tr><tr class="filho522190000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 5.2.2.1.9.04.00 - (-) CANCELAMENTO DE DOTAÇÕES</td>
            <td align="right" data-saldo="-1962773684.95" data-nat="C">R$ 1.962.773.684,95 C</td>
            <td align="right" data-saldo="-1962773684.95" data-nat="C">R$ 401.187.830,05 C</td>
            <td align="right" data-saldo="-1962773684.95" data-nat="C">R$ 2.363.961.515,00 C</td></tr><tr class="filho500000000 filho filho-hide nivel1 nivelPadrao">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="530000000"></i> 5.3.0.0.0.00.00 - INSCRIÇÃO DE RESTOS A PAGAR</td>
            <td align="right" data-saldo="312728472.46001" data-nat="D">R$ 312.728.472,46 D</td>
            <td align="right" data-saldo="312728472.46001" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="312728472.46001" data-nat="D">R$ 312.728.472,46 D</td></tr><tr class="filho530000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="531000000"></i> 5.3.1.0.0.00.00 - INSCRIÇÃO DE RP NÃO PROCESSADOS</td>
            <td align="right" data-saldo="230999334.09" data-nat="D">R$ 230.999.334,09 D</td>
            <td align="right" data-saldo="230999334.09" data-nat="C">R$ 17.374.737,18 C</td>
            <td align="right" data-saldo="230999334.09" data-nat="D">R$ 213.624.596,91 D</td></tr><tr class="filho531000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 5.3.1.1.0.00.00 - RP NÃO PROCESSADOS INSCRITOS</td>
            <td align="right" data-saldo="577723853" data-nat="D">R$ 577.723.853,00 D</td>
            <td align="right" data-saldo="577723853" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="577723853" data-nat="D">R$ 577.723.853,00 D</td></tr><tr class="filho531000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 5.3.1.2.0.00.00 - RP NÃO PROCESSADOS - EXERCÍCIOS ANTERIORES</td>
            <td align="right" data-saldo="61454729.05" data-nat="D">R$ 61.454.729,05 D</td>
            <td align="right" data-saldo="61454729.05" data-nat="C">R$ 17.374.737,18 C</td>
            <td align="right" data-saldo="61454729.05" data-nat="D">R$ 44.079.991,87 D</td></tr><tr class="filho531000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 5.3.1.7.0.00.00 - RP NÃO PROCESSADOS - INSCRIÇÃO NO EXERCÍCIO</td>
            <td align="right" data-saldo="-408179247.96" data-nat="C">R$ 408.179.247,96 C</td>
            <td align="right" data-saldo="-408179247.96" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="-408179247.96" data-nat="C">R$ 408.179.247,96 C</td></tr><tr class="filho530000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="532000000"></i> 5.3.2.0.0.00.00 - INSCRIÇÃO DE RP PROCESSADOS</td>
            <td align="right" data-saldo="81729138.370002" data-nat="D">R$ 81.729.138,37 D</td>
            <td align="right" data-saldo="81729138.370002" data-nat="D">R$ 17.374.737,18 D</td>
            <td align="right" data-saldo="81729138.370002" data-nat="D">R$ 99.103.875,55 D</td></tr><tr class="filho532000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 5.3.2.1.0.00.00 - RP PROCESSADOS - INSCRITOS</td>
            <td align="right" data-saldo="268737871.01" data-nat="D">R$ 268.737.871,01 D</td>
            <td align="right" data-saldo="268737871.01" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="268737871.01" data-nat="D">R$ 268.737.871,01 D</td></tr><tr class="filho532000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 5.3.2.2.0.00.00 - RP PROCESSADOS - EXERCÍCIOS ANTERIORES</td>
            <td align="right" data-saldo="-19545472.65" data-nat="C">R$ 19.545.472,65 C</td>
            <td align="right" data-saldo="-19545472.65" data-nat="D">R$ 17.374.737,18 D</td>
            <td align="right" data-saldo="-19545472.65" data-nat="C">R$ 2.170.735,47 C</td></tr><tr class="filho532000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 5.3.2.7.0.00.00 - RP PROCESSADOS - INSCRIÇÃO NO EXERCÍCIO</td>
            <td align="right" data-saldo="-167463259.99" data-nat="C">R$ 167.463.259,99 C</td>
            <td align="right" data-saldo="-167463259.99" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="-167463259.99" data-nat="C">R$ 167.463.259,99 C</td></tr><tr class="filho0 filho filho-hide nivel0 nivelPadrao">
            <td><i class="fa fa-minus-circle js-abre-filhos" id="600000000"></i> 6.0.0.0.0.00.00 - CONTROLES DA EXECUÇÃO DO PLANEJAMENTO E ORÇAMENTO</td>
            <td align="right" data-saldo="-15183394355.26" data-nat="C">R$ 15.183.394.355,26 C</td>
            <td align="right" data-saldo="-15183394355.26" data-nat="C">R$ 467.719.023,28 C</td>
            <td align="right" data-saldo="-15183394355.26" data-nat="C">R$ 15.651.113.378,54 C</td></tr><tr class="filho600000000 filho filho-hide nivel1 nivelPadrao">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="620000000"></i> 6.2.0.0.0.00.00 - EXECUÇÃO DO ORÇAMENTO</td>
            <td align="right" data-saldo="-14870665882.8" data-nat="C">R$ 14.870.665.882,80 C</td>
            <td align="right" data-saldo="-14870665882.8" data-nat="C">R$ 467.719.023,28 C</td>
            <td align="right" data-saldo="-14870665882.8" data-nat="C">R$ 15.338.384.906,08 C</td></tr><tr class="filho620000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="621000000"></i> 6.2.1.0.0.00.00 - EXECUÇÃO DA RECEITA</td>
            <td align="right" data-saldo="-7338560410.79" data-nat="C">R$ 7.338.560.410,79 C</td>
            <td align="right" data-saldo="-7338560410.79" data-nat="C">R$ 233.859.511,64 C</td>
            <td align="right" data-saldo="-7338560410.79" data-nat="C">R$ 7.572.419.922,43 C</td></tr><tr class="filho621000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 6.2.1.1.0.00.00 - RECEITA A REALIZAR</td>
            <td align="right" data-saldo="-1050386250.65" data-nat="C">R$ 1.050.386.250,65 C</td>
            <td align="right" data-saldo="-1050386250.65" data-nat="D">R$ 504.938.707,75 D</td>
            <td align="right" data-saldo="-1050386250.65" data-nat="C">R$ 545.447.542,90 C</td></tr><tr class="filho621000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 6.2.1.2.0.00.00 - RECEITA REALIZADA</td>
            <td align="right" data-saldo="-7060807615.26" data-nat="C">R$ 7.060.807.615,26 C</td>
            <td align="right" data-saldo="-7060807615.26" data-nat="C">R$ 830.106.586,71 C</td>
            <td align="right" data-saldo="-7060807615.26" data-nat="C">R$ 7.890.914.201,97 C</td></tr><tr class="filho621000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="621300000"></i> 6.2.1.3.0.00.00 - (-) DEDUÇÕES DA RECEITA ORÇAMENTÁRIA</td>
            <td align="right" data-saldo="772633455.12" data-nat="D">R$ 772.633.455,12 D</td>
            <td align="right" data-saldo="772633455.12" data-nat="D">R$ 91.308.367,32 D</td>
            <td align="right" data-saldo="772633455.12" data-nat="D">R$ 863.941.822,44 D</td></tr><tr class="filho621300000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="621310000"></i> 6.2.1.3.1.00.00 - (-) DEDUÇÕES POR TRANSFERÊNCIAS CONSTITUCIONAIS E LEGAIS</td>
            <td align="right" data-saldo="765526092.94" data-nat="D">R$ 765.526.092,94 D</td>
            <td align="right" data-saldo="765526092.94" data-nat="D">R$ 91.308.367,32 D</td>
            <td align="right" data-saldo="765526092.94" data-nat="D">R$ 856.834.460,26 D</td></tr><tr class="filho621310000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 6.2.1.3.1.01.00 - (-) FUNDEB</td>
            <td align="right" data-saldo="765526092.94" data-nat="D">R$ 765.526.092,94 D</td>
            <td align="right" data-saldo="765526092.94" data-nat="D">R$ 91.308.367,32 D</td>
            <td align="right" data-saldo="765526092.94" data-nat="D">R$ 856.834.460,26 D</td></tr><tr class="filho621300000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 6.2.1.3.9.00.00 - (-) OUTRAS DEDUÇÕES DA RECEITA REALIZADA</td>
            <td align="right" data-saldo="7107362.18" data-nat="D">R$ 7.107.362,18 D</td>
            <td align="right" data-saldo="7107362.18" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="7107362.18" data-nat="D">R$ 7.107.362,18 D</td></tr><tr class="filho620000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="622000000"></i> 6.2.2.0.0.00.00 - EXECUÇÃO DA DESPESA</td>
            <td align="right" data-saldo="-7532105472.01" data-nat="C">R$ 7.532.105.472,01 C</td>
            <td align="right" data-saldo="-7532105472.01" data-nat="C">R$ 233.859.511,64 C</td>
            <td align="right" data-saldo="-7532105472.01" data-nat="C">R$ 7.765.964.983,65 C</td></tr><tr class="filho622000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="622100000"></i> 6.2.2.1.0.00.00 - DISPONIBILIDADES DE CREDITO</td>
            <td align="right" data-saldo="-7532105472.01" data-nat="C">R$ 7.532.105.472,01 C</td>
            <td align="right" data-saldo="-7532105472.01" data-nat="C">R$ 233.859.511,64 C</td>
            <td align="right" data-saldo="-7532105472.01" data-nat="C">R$ 7.765.964.983,65 C</td></tr><tr class="filho622100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 6.2.2.1.1.00.00 - CREDITO DISPONÍVEL</td>
            <td align="right" data-saldo="-1571705491.94" data-nat="C">R$ 1.571.705.491,94 C</td>
            <td align="right" data-saldo="-1571705491.94" data-nat="D">R$ 687.736.513,13 D</td>
            <td align="right" data-saldo="-1571705491.94" data-nat="C">R$ 883.968.978,81 C</td></tr><tr class="filho622100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="622130000"></i> 6.2.2.1.3.00.00 - CREDITO UTILIZADO</td>
            <td align="right" data-saldo="-5960399980.07" data-nat="C">R$ 5.960.399.980,07 C</td>
            <td align="right" data-saldo="-5960399980.07" data-nat="C">R$ 921.596.024,77 C</td>
            <td align="right" data-saldo="-5960399980.07" data-nat="C">R$ 6.881.996.004,84 C</td></tr><tr class="filho622130000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 6.2.2.1.3.01.00 - CREDITO EMPENHADO A LIQUIDAR</td>
            <td align="right" data-saldo="-371315251.26" data-nat="C">R$ 371.315.251,26 C</td>
            <td align="right" data-saldo="-371315251.26" data-nat="D">R$ 24.392.454,79 D</td>
            <td align="right" data-saldo="-371315251.26" data-nat="C">R$ 346.922.796,47 C</td></tr><tr class="filho622130000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 6.2.2.1.3.02.00 - CREDITO EMPENHADO EM LIQUIDAÇÃO</td>
            <td align="right" data-saldo="-34566.91" data-nat="C">R$ 34.566,91 C</td>
            <td align="right" data-saldo="-34566.91" data-nat="D">R$ 30.992,62 D</td>
            <td align="right" data-saldo="-34566.91" data-nat="C">R$ 3.574,29 C</td></tr><tr class="filho622130000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 6.2.2.1.3.03.00 - CREDITO EMPENHADO LIQUIDADO A PAGAR</td>
            <td align="right" data-saldo="-32917068.7" data-nat="C">R$ 32.917.068,70 C</td>
            <td align="right" data-saldo="-32917068.7" data-nat="C">R$ 27.969.444,07 C</td>
            <td align="right" data-saldo="-32917068.7" data-nat="C">R$ 60.886.512,77 C</td></tr><tr class="filho622130000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 6.2.2.1.3.04.00 - CREDITO EMPENHADO LIQUIDADO PAGO</td>
            <td align="right" data-saldo="-5556133093.2" data-nat="C">R$ 5.556.133.093,20 C</td>
            <td align="right" data-saldo="-5556133093.2" data-nat="C">R$ 918.050.028,11 C</td>
            <td align="right" data-saldo="-5556133093.2" data-nat="C">R$ 6.474.183.121,31 C</td></tr><tr class="filho600000000 filho filho-hide nivel1 nivelPadrao">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="630000000"></i> 6.3.0.0.0.00.00 - EXECUÇÃO DE RESTOS A PAGAR</td>
            <td align="right" data-saldo="-312728472.46" data-nat="C">R$ 312.728.472,46 C</td>
            <td align="right" data-saldo="-312728472.46" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="-312728472.46" data-nat="C">R$ 312.728.472,46 C</td></tr><tr class="filho630000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="631000000"></i> 6.3.1.0.0.00.00 - EXECUÇÃO DE RP NÃO PROCESSADOS</td>
            <td align="right" data-saldo="-217500965.16" data-nat="C">R$ 217.500.965,16 C</td>
            <td align="right" data-saldo="-217500965.16" data-nat="D">R$ 563.720,69 D</td>
            <td align="right" data-saldo="-217500965.16" data-nat="C">R$ 216.937.244,47 C</td></tr><tr class="filho631000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 6.3.1.1.0.00.00 - RP NÃO PROCESSADOS A LIQUIDAR</td>
            <td align="right" data-saldo="-492074863.73" data-nat="C">R$ 492.074.863,73 C</td>
            <td align="right" data-saldo="-492074863.73" data-nat="D">R$ 4.400.721,57 D</td>
            <td align="right" data-saldo="-492074863.73" data-nat="C">R$ 487.674.142,16 C</td></tr><tr class="filho631000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 6.3.1.2.0.00.00 - RP NÃO PROCESSADOS EM LIQUIDAÇÃO</td>
            <td align="right" data-saldo="226881.28" data-nat="D">R$ 226.881,28 D</td>
            <td align="right" data-saldo="226881.28" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="226881.28" data-nat="D">R$ 226.881,28 D</td></tr><tr class="filho631000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 6.3.1.3.0.00.00 - RP NÃO PROCESSADOS LIQUIDADOS A PAGAR</td>
            <td align="right" data-saldo="-3770596.83" data-nat="C">R$ 3.770.596,83 C</td>
            <td align="right" data-saldo="-3770596.83" data-nat="D">R$ 487.949,27 D</td>
            <td align="right" data-saldo="-3770596.83" data-nat="C">R$ 3.282.647,56 C</td></tr><tr class="filho631000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 6.3.1.4.0.00.00 - RP NÃO PROCESSADOS PAGOS</td>
            <td align="right" data-saldo="-127084237.29" data-nat="C">R$ 127.084.237,29 C</td>
            <td align="right" data-saldo="-127084237.29" data-nat="C">R$ 3.990.987,88 C</td>
            <td align="right" data-saldo="-127084237.29" data-nat="C">R$ 131.075.225,17 C</td></tr><tr class="filho631000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="631700000"></i> 6.3.1.7.0.00.00 - RP NÃO PROCESSADOS - INSCRIÇÃO NO EXERCÍCIO</td>
            <td align="right" data-saldo="408179247.96" data-nat="D">R$ 408.179.247,96 D</td>
            <td align="right" data-saldo="408179247.96" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="408179247.96" data-nat="D">R$ 408.179.247,96 D</td></tr><tr class="filho631700000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 6.3.1.7.1.00.00 - RP NAO PROCESSADOS A LIQUIDAR- INSCRIÇÃO NO EXERCÍCIO </td>
            <td align="right" data-saldo="408429247.96" data-nat="D">R$ 408.429.247,96 D</td>
            <td align="right" data-saldo="408429247.96" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="408429247.96" data-nat="D">R$ 408.429.247,96 D</td></tr><tr class="filho631700000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 6.3.1.7.2.00.00 - RP NAO PROCESSADOS EM LIQUIDAÇÃO - INSCRIÇÃO NO EXERCÍCIO </td>
            <td align="right" data-saldo="-250000" data-nat="C">R$ 250.000,00 C</td>
            <td align="right" data-saldo="-250000" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="-250000" data-nat="C">R$ 250.000,00 C</td></tr><tr class="filho631000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="631900000"></i> 6.3.1.9.0.00.00 - RP NÃO PROCESSADOS CANCELADOS</td>
            <td align="right" data-saldo="-2977396.55" data-nat="C">R$ 2.977.396,55 C</td>
            <td align="right" data-saldo="-2977396.55" data-nat="C">R$ 333.962,27 C</td>
            <td align="right" data-saldo="-2977396.55" data-nat="C">R$ 3.311.358,82 C</td></tr><tr class="filho631900000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 6.3.1.9.9.00.00 - OUTROS CANCELAMENTOS DE RP </td>
            <td align="right" data-saldo="-2977396.55" data-nat="C">R$ 2.977.396,55 C</td>
            <td align="right" data-saldo="-2977396.55" data-nat="C">R$ 333.962,27 C</td>
            <td align="right" data-saldo="-2977396.55" data-nat="C">R$ 3.311.358,82 C</td></tr><tr class="filho630000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="632000000"></i> 6.3.2.0.0.00.00 - EXECUÇÃO DE RP PROCESSADOS</td>
            <td align="right" data-saldo="-95227507.3" data-nat="C">R$ 95.227.507,30 C</td>
            <td align="right" data-saldo="-95227507.3" data-nat="C">R$ 563.720,69 C</td>
            <td align="right" data-saldo="-95227507.3" data-nat="C">R$ 95.791.227,99 C</td></tr><tr class="filho632000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 6.3.2.1.0.00.00 - RP PROCESSADOS A PAGAR</td>
            <td align="right" data-saldo="-200182131.8" data-nat="C">R$ 200.182.131,80 C</td>
            <td align="right" data-saldo="-200182131.8" data-nat="D">R$ 156.424,18 D</td>
            <td align="right" data-saldo="-200182131.8" data-nat="C">R$ 200.025.707,62 C</td></tr><tr class="filho632000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 6.3.2.2.0.00.00 - RP PROCESSADOS PAGOS</td>
            <td align="right" data-saldo="-61766171.93" data-nat="C">R$ 61.766.171,93 C</td>
            <td align="right" data-saldo="-61766171.93" data-nat="C">R$ 719.480,22 C</td>
            <td align="right" data-saldo="-61766171.93" data-nat="C">R$ 62.485.652,15 C</td></tr><tr class="filho632000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 6.3.2.7.0.00.00 - RP PROCESSADOS - INSCRIÇÃO NO EXERCÍCIO</td>
            <td align="right" data-saldo="167463259.99" data-nat="D">R$ 167.463.259,99 D</td>
            <td align="right" data-saldo="167463259.99" data-nat="C">R$ 0,00 C</td>
            <td align="right" data-saldo="167463259.99" data-nat="D">R$ 167.463.259,99 D</td></tr><tr class="filho632000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="632900000"></i> 6.3.2.9.0.00.00 - RP PROCESSADOS CANCELADOS</td>
            <td align="right" data-saldo="-742463.56" data-nat="C">R$ 742.463,56 C</td>
            <td align="right" data-saldo="-742463.56" data-nat="C">R$ 664,65 C</td>
            <td align="right" data-saldo="-742463.56" data-nat="C">R$ 743.128,21 C</td></tr><tr class="filho632900000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 6.3.2.9.9.00.00 - OUTROS CANCELAMENTOS DE RP</td>
            <td align="right" data-saldo="-742463.56" data-nat="C">R$ 742.463,56 C</td>
            <td align="right" data-saldo="-742463.56" data-nat="C">R$ 664,65 C</td>
            <td align="right" data-saldo="-742463.56" data-nat="C">R$ 743.128,21 C</td></tr><tr class="filho0 filho filho-hide nivel0 nivelPadrao">
            <td><i class="fa fa-minus-circle js-abre-filhos" id="700000000"></i> 7.0.0.0.0.00.00 - CONTROLES DEVEDORES</td>
            <td align="right" data-saldo="12843919529.41" data-nat="D">R$ 12.843.919.529,41 D</td>
            <td align="right" data-saldo="12843919529.41" data-nat="D">R$ 1.661.653.749,31 D</td>
            <td align="right" data-saldo="12843919529.41" data-nat="D">R$ 14.505.573.278,72 D</td></tr><tr class="filho700000000 filho filho-hide nivel1 nivelPadrao">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="720000000"></i> 7.2.0.0.0.00.00 - ADMINISTRAÇÃO FINANCEIRA</td>
            <td align="right" data-saldo="12839612135.57" data-nat="D">R$ 12.839.612.135,57 D</td>
            <td align="right" data-saldo="12839612135.57" data-nat="D">R$ 1.662.536.811,71 D</td>
            <td align="right" data-saldo="12839612135.57" data-nat="D">R$ 14.502.148.947,28 D</td></tr><tr class="filho720000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="721000000"></i> 7.2.1.0.0.00.00 - DISPONIBILIDADES POR DESTINAÇÃO</td>
            <td align="right" data-saldo="7072563695.38" data-nat="D">R$ 7.072.563.695,38 D</td>
            <td align="right" data-saldo="7072563695.38" data-nat="D">R$ 739.810.446,08 D</td>
            <td align="right" data-saldo="7072563695.38" data-nat="D">R$ 7.812.374.141,46 D</td></tr><tr class="filho721000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="721100000"></i> 7.2.1.1.0.00.00 - CONTROLE DA DISPONIBILIDADE DE RECURSOS</td>
            <td align="right" data-saldo="7072563695.38" data-nat="D">R$ 7.072.563.695,38 D</td>
            <td align="right" data-saldo="7072563695.38" data-nat="D">R$ 739.810.446,08 D</td>
            <td align="right" data-saldo="7072563695.38" data-nat="D">R$ 7.812.374.141,46 D</td></tr><tr class="filho721100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 7.2.1.1.1.00.00 - RECURSOS ORDINÁRIOS</td>
            <td align="right" data-saldo="4831618812.35" data-nat="D">R$ 4.831.618.812,35 D</td>
            <td align="right" data-saldo="4831618812.35" data-nat="D">R$ 514.834.135,00 D</td>
            <td align="right" data-saldo="4831618812.35" data-nat="D">R$ 5.346.452.947,35 D</td></tr><tr class="filho721100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 7.2.1.1.2.00.00 - RECURSOS VINCULADOS </td>
            <td align="right" data-saldo="2230992718.13" data-nat="D">R$ 2.230.992.718,13 D</td>
            <td align="right" data-saldo="2230992718.13" data-nat="D">R$ 224.073.651,44 D</td>
            <td align="right" data-saldo="2230992718.13" data-nat="D">R$ 2.455.066.369,57 D</td></tr><tr class="filho721100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 7.2.1.1.3.00.00 - RECURSOS EXTRAORÇAMENTÁRIOS</td>
            <td align="right" data-saldo="9952164.9" data-nat="D">R$ 9.952.164,90 D</td>
            <td align="right" data-saldo="9952164.9" data-nat="D">R$ 902.659,64 D</td>
            <td align="right" data-saldo="9952164.9" data-nat="D">R$ 10.854.824,54 D</td></tr><tr class="filho720000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="722000000"></i> 7.2.2.0.0.00.00 - PROGRAMAÇÃO FINANCEIRA</td>
            <td align="right" data-saldo="5767048440.19" data-nat="D">R$ 5.767.048.440,19 D</td>
            <td align="right" data-saldo="5767048440.19" data-nat="D">R$ 922.726.365,63 D</td>
            <td align="right" data-saldo="5767048440.19" data-nat="D">R$ 6.689.774.805,82 D</td></tr><tr class="filho722000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="722100000"></i> 7.2.2.1.0.00.00 - CRONOGRAMA DE EXECUÇÃO MENSAL DE DESEMBOLSO</td>
            <td align="right" data-saldo="5767048440.19" data-nat="D">R$ 5.767.048.440,19 D</td>
            <td align="right" data-saldo="5767048440.19" data-nat="D">R$ 922.726.365,63 D</td>
            <td align="right" data-saldo="5767048440.19" data-nat="D">R$ 6.689.774.805,82 D</td></tr><tr class="filho722100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="722110000"></i> 7.2.2.1.1.00.00 - CONTROLE DE DESEMBOLSO MENSAL ORÇAMENTÁRIO</td>
            <td align="right" data-saldo="5767048440.19" data-nat="D">R$ 5.767.048.440,19 D</td>
            <td align="right" data-saldo="5767048440.19" data-nat="D">R$ 922.726.365,63 D</td>
            <td align="right" data-saldo="5767048440.19" data-nat="D">R$ 6.689.774.805,82 D</td></tr><tr class="filho722110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 7.2.2.1.1.01.00 - CONTROLE DE DESEMBOLSO MENSAL - DESPESAS ORÇAMENTÁRIAS</td>
            <td align="right" data-saldo="5767048440.19" data-nat="D">R$ 5.767.048.440,19 D</td>
            <td align="right" data-saldo="5767048440.19" data-nat="D">R$ 922.726.365,63 D</td>
            <td align="right" data-saldo="5767048440.19" data-nat="D">R$ 6.689.774.805,82 D</td></tr><tr class="filho700000000 filho filho-hide nivel1 nivelPadrao">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="790000000"></i> 7.9.0.0.0.00.00 - OUTROS CONTROLES</td>
            <td align="right" data-saldo="4307393.84" data-nat="D">R$ 4.307.393,84 D</td>
            <td align="right" data-saldo="4307393.84" data-nat="C">R$ 883.062,40 C</td>
            <td align="right" data-saldo="4307393.84" data-nat="D">R$ 3.424.331,44 D</td></tr><tr class="filho790000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="791000000"></i> 7.9.1.0.0.00.00 - RESPONSABILIDADE POR VALORES, TÍTULOS E BENS</td>
            <td align="right" data-saldo="4307393.84" data-nat="D">R$ 4.307.393,84 D</td>
            <td align="right" data-saldo="4307393.84" data-nat="C">R$ 883.062,40 C</td>
            <td align="right" data-saldo="4307393.84" data-nat="D">R$ 3.424.331,44 D</td></tr><tr class="filho791000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="791200000"></i> 7.9.1.2.0.00.00 - RESPONSABILIDADE DE TERCEIROS POR VALORES, TÍTULOS E BENS</td>
            <td align="right" data-saldo="4307393.84" data-nat="D">R$ 4.307.393,84 D</td>
            <td align="right" data-saldo="4307393.84" data-nat="C">R$ 883.062,40 C</td>
            <td align="right" data-saldo="4307393.84" data-nat="D">R$ 3.424.331,44 D</td></tr><tr class="filho791200000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 7.9.1.2.1.00.00 - CONTROLE DE ADIANTAMENTOS/SUPRIMENTOS DE FUNDOS CONCEDIDOS</td>
            <td align="right" data-saldo="314200" data-nat="D">R$ 314.200,00 D</td>
            <td align="right" data-saldo="314200" data-nat="C">R$ 233.200,00 C</td>
            <td align="right" data-saldo="314200" data-nat="D">R$ 81.000,00 D</td></tr><tr class="filho791200000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 7.9.1.2.9.00.00 - OUTRAS RESPONSABILIDADES DE TERCEIROS</td>
            <td align="right" data-saldo="3993193.84" data-nat="D">R$ 3.993.193,84 D</td>
            <td align="right" data-saldo="3993193.84" data-nat="C">R$ 649.862,40 C</td>
            <td align="right" data-saldo="3993193.84" data-nat="D">R$ 3.343.331,44 D</td></tr><tr class="filho0 filho filho-hide nivel0 nivelPadrao">
            <td><i class="fa fa-minus-circle js-abre-filhos" id="800000000"></i> 8.0.0.0.0.00.00 - CONTROLES CREDORES</td>
            <td align="right" data-saldo="-12843919529.41" data-nat="C">R$ 12.843.919.529,41 C</td>
            <td align="right" data-saldo="-12843919529.41" data-nat="C">R$ 1.661.653.749,31 C</td>
            <td align="right" data-saldo="-12843919529.41" data-nat="C">R$ 14.505.573.278,72 C</td></tr><tr class="filho800000000 filho filho-hide nivel1 nivelPadrao">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="820000000"></i> 8.2.0.0.0.00.00 - EXECUÇÃO DA ADMINISTRAÇÃO FINANCEIRA</td>
            <td align="right" data-saldo="-12839612135.57" data-nat="C">R$ 12.839.612.135,57 C</td>
            <td align="right" data-saldo="-12839612135.57" data-nat="C">R$ 1.662.536.811,71 C</td>
            <td align="right" data-saldo="-12839612135.57" data-nat="C">R$ 14.502.148.947,28 C</td></tr><tr class="filho820000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="821000000"></i> 8.2.1.0.0.00.00 - EXECUÇÃO DAS DISPONIBILIDADES POR DESTINAÇÃO</td>
            <td align="right" data-saldo="-7072563695.38" data-nat="C">R$ 7.072.563.695,38 C</td>
            <td align="right" data-saldo="-7072563695.38" data-nat="C">R$ 739.810.446,08 C</td>
            <td align="right" data-saldo="-7072563695.38" data-nat="C">R$ 7.812.374.141,46 C</td></tr><tr class="filho821000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="821100000"></i> 8.2.1.1.0.00.00 - EXECUÇÃO DA DISPONIBILIDADE DE RECURSOS</td>
            <td align="right" data-saldo="-7072563695.38" data-nat="C">R$ 7.072.563.695,38 C</td>
            <td align="right" data-saldo="-7072563695.38" data-nat="C">R$ 739.810.446,08 C</td>
            <td align="right" data-saldo="-7072563695.38" data-nat="C">R$ 7.812.374.141,46 C</td></tr><tr class="filho821100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="821110000"></i> 8.2.1.1.1.00.00 - DISPONIBILIDADE POR DESTINAÇÃO DE RECURSOS</td>
            <td align="right" data-saldo="-770902168.88" data-nat="C">R$ 770.902.168,88 C</td>
            <td align="right" data-saldo="-770902168.88" data-nat="D">R$ 182.353.611,41 D</td>
            <td align="right" data-saldo="-770902168.88" data-nat="C">R$ 588.548.557,47 C</td></tr><tr class="filho821110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 8.2.1.1.1.01.00 - RECURSOS DISPONÍVEIS PARA O EXERCÍCIO</td>
            <td align="right" data-saldo="-770902168.88" data-nat="C">R$ 770.902.168,88 C</td>
            <td align="right" data-saldo="-770902168.88" data-nat="D">R$ 182.353.611,41 D</td>
            <td align="right" data-saldo="-770902168.88" data-nat="C">R$ 588.548.557,47 C</td></tr><tr class="filho821100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="821120000"></i> 8.2.1.1.2.00.00 - DISPONIBILIDADE POR DESTINAÇÃO DE RECURSOS COMPROMETIDA POR EMPENHO</td>
            <td align="right" data-saldo="-455018552.66" data-nat="C">R$ 455.018.552,66 C</td>
            <td align="right" data-saldo="-455018552.66" data-nat="D">R$ 28.260.448,29 D</td>
            <td align="right" data-saldo="-455018552.66" data-nat="C">R$ 426.758.104,37 C</td></tr><tr class="filho821120000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 8.2.1.1.2.01.00 - DISPONIBILIDADE POR DESTINAÇÃO DE RECURSOS COMPROMETIDA POR EMPENHO - A LIQUIDAR</td>
            <td align="right" data-saldo="-455018552.66" data-nat="C">R$ 455.018.552,66 C</td>
            <td align="right" data-saldo="-455018552.66" data-nat="D">R$ 28.260.448,29 D</td>
            <td align="right" data-saldo="-455018552.66" data-nat="C">R$ 426.758.104,37 C</td></tr><tr class="filho821100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="821130000"></i> 8.2.1.1.3.00.00 - DISPONIBILIDADE POR DESTINAÇÃO DE RECURSOS COMPROMETIDA POR LIQUIDAÇÃO E ENTRADAS COMPENSATÓRIAS</td>
            <td align="right" data-saldo="-101720834.93" data-nat="C">R$ 101.720.834,93 C</td>
            <td align="right" data-saldo="-101720834.93" data-nat="C">R$ 1.486.954,36 C</td>
            <td align="right" data-saldo="-101720834.93" data-nat="C">R$ 103.207.789,29 C</td></tr><tr class="filho821130000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 8.2.1.1.3.01.00 - COMPROMETIDA POR LIQUIDAÇÃO</td>
            <td align="right" data-saldo="-69406537.34" data-nat="C">R$ 69.406.537,34 C</td>
            <td align="right" data-saldo="-69406537.34" data-nat="C">R$ 26.761.349,93 C</td>
            <td align="right" data-saldo="-69406537.34" data-nat="C">R$ 96.167.887,27 C</td></tr><tr class="filho821130000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 8.2.1.1.3.02.00 - COMPROMETIDA POR CONSIGNAÇÕES/RETENÇÕES</td>
            <td align="right" data-saldo="-694062.55" data-nat="C">R$ 694.062,55 C</td>
            <td align="right" data-saldo="-694062.55" data-nat="C">R$ 34.130,58 C</td>
            <td align="right" data-saldo="-694062.55" data-nat="C">R$ 728.193,13 C</td></tr><tr class="filho821130000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 8.2.1.1.3.03.00 - COMPROMETIDA POR ENTRADAS COMPENSATÓRIAS</td>
            <td align="right" data-saldo="-31620235.04" data-nat="C">R$ 31.620.235,04 C</td>
            <td align="right" data-saldo="-31620235.04" data-nat="D">R$ 25.308.526,15 D</td>
            <td align="right" data-saldo="-31620235.04" data-nat="C">R$ 6.311.708,89 C</td></tr><tr class="filho821100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 8.2.1.1.4.00.00 - DISPONIBILIDADE POR DESTINAÇÃO DE RECURSOS UTILIZADA</td>
            <td align="right" data-saldo="-5744922138.91" data-nat="C">R$ 5.744.922.138,91 C</td>
            <td align="right" data-saldo="-5744922138.91" data-nat="C">R$ 948.937.551,42 C</td>
            <td align="right" data-saldo="-5744922138.91" data-nat="C">R$ 6.693.859.690,33 C</td></tr><tr class="filho820000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="822000000"></i> 8.2.2.0.0.00.00 - EXECUÇÃO DA PROGRAMAÇÃO FINANCEIRA</td>
            <td align="right" data-saldo="-5767048440.19" data-nat="C">R$ 5.767.048.440,19 C</td>
            <td align="right" data-saldo="-5767048440.19" data-nat="C">R$ 922.726.365,63 C</td>
            <td align="right" data-saldo="-5767048440.19" data-nat="C">R$ 6.689.774.805,82 C</td></tr><tr class="filho822000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="822100000"></i> 8.2.2.1.0.00.00 - CRONOGRAMA DE EXECUÇÃO MENSAL DE DESEMBOLSO</td>
            <td align="right" data-saldo="-5767048440.19" data-nat="C">R$ 5.767.048.440,19 C</td>
            <td align="right" data-saldo="-5767048440.19" data-nat="C">R$ 922.726.365,63 C</td>
            <td align="right" data-saldo="-5767048440.19" data-nat="C">R$ 6.689.774.805,82 C</td></tr><tr class="filho822100000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="822110000"></i> 8.2.2.1.1.00.00 - EXECUÇÃO DO CRONOGRAMA DE DESEMBOLSO MENSAL ORÇAMENTÁRIO</td>
            <td align="right" data-saldo="-5767048440.19" data-nat="C">R$ 5.767.048.440,19 C</td>
            <td align="right" data-saldo="-5767048440.19" data-nat="C">R$ 922.726.365,63 C</td>
            <td align="right" data-saldo="-5767048440.19" data-nat="C">R$ 6.689.774.805,82 C</td></tr><tr class="filho822110000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="822110100"></i> 8.2.2.1.1.01.00 - PROGRAMAÇÃO DE DESEMBOLSO MENSAL - DESPESAS ORÇAMENTÁRIAS</td>
            <td align="right" data-saldo="-5767048440.19" data-nat="C">R$ 5.767.048.440,19 C</td>
            <td align="right" data-saldo="-5767048440.19" data-nat="C">R$ 922.726.365,63 C</td>
            <td align="right" data-saldo="-5767048440.19" data-nat="C">R$ 6.689.774.805,82 C</td></tr><tr class="filho822110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 8.2.2.1.1.01.01 - PROGRAMAÇÃO DE DESEMBOLSO MENSAL - DESPESAS ORÇAMENTÁRIAS - A RECEBER</td>
            <td align="right" data-saldo="-26881209.18" data-nat="C">R$ 26.881.209,18 C</td>
            <td align="right" data-saldo="-26881209.18" data-nat="D">R$ 25.823.065,02 D</td>
            <td align="right" data-saldo="-26881209.18" data-nat="C">R$ 1.058.144,16 C</td></tr><tr class="filho822110100 filho filho-hide nivel6 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 8.2.2.1.1.01.02 - PROGRAMAÇÃO DE DESEMBOLSO MENSAL - DESPESAS ORÇAMENTÁRIAS - RECEBIDA</td>
            <td align="right" data-saldo="-5740167231.01" data-nat="C">R$ 5.740.167.231,01 C</td>
            <td align="right" data-saldo="-5740167231.01" data-nat="C">R$ 948.549.430,65 C</td>
            <td align="right" data-saldo="-5740167231.01" data-nat="C">R$ 6.688.716.661,66 C</td></tr><tr class="filho800000000 filho filho-hide nivel1 nivelPadrao">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="890000000"></i> 8.9.0.0.0.00.00 - OUTROS CONTROLES</td>
            <td align="right" data-saldo="-4307393.84" data-nat="C">R$ 4.307.393,84 C</td>
            <td align="right" data-saldo="-4307393.84" data-nat="D">R$ 883.062,40 D</td>
            <td align="right" data-saldo="-4307393.84" data-nat="C">R$ 3.424.331,44 C</td></tr><tr class="filho890000000 filho filho-hide nivel2 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="891000000"></i> 8.9.1.0.0.00.00 - EXECUÇÃO DE RESPONSABILIDADE POR VALORES, TÍTULOS E BENS</td>
            <td align="right" data-saldo="-4307393.84" data-nat="C">R$ 4.307.393,84 C</td>
            <td align="right" data-saldo="-4307393.84" data-nat="D">R$ 883.062,40 D</td>
            <td align="right" data-saldo="-4307393.84" data-nat="C">R$ 3.424.331,44 C</td></tr><tr class="filho891000000 filho filho-hide nivel3 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="891200000"></i> 8.9.1.2.0.00.00 - EXECUÇÃO DE RESPONSABILIDADE DE TERCEIROS POR VALORES, TÍTULOS E BENS</td>
            <td align="right" data-saldo="-4307393.84" data-nat="C">R$ 4.307.393,84 C</td>
            <td align="right" data-saldo="-4307393.84" data-nat="D">R$ 883.062,40 D</td>
            <td align="right" data-saldo="-4307393.84" data-nat="C">R$ 3.424.331,44 C</td></tr><tr class="filho891200000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle js-abre-filhos" id="891210000"></i> 8.9.1.2.1.00.00 - EXECUÇÃO DE ADIANTAMENTOS/SUPRIMENTOS DE FUNDOS CONCEDIDOS</td>
            <td align="right" data-saldo="-314200" data-nat="C">R$ 314.200,00 C</td>
            <td align="right" data-saldo="-314200" data-nat="D">R$ 233.200,00 D</td>
            <td align="right" data-saldo="-314200" data-nat="C">R$ 81.000,00 C</td></tr><tr class="filho891210000 filho filho-hide nivel5 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 8.9.1.2.1.01.00 - ADIANTAMENTOS CONCEDIDOS A COMPROVAR</td>
            <td align="right" data-saldo="-314200" data-nat="C">R$ 314.200,00 C</td>
            <td align="right" data-saldo="-314200" data-nat="D">R$ 233.200,00 D</td>
            <td align="right" data-saldo="-314200" data-nat="C">R$ 81.000,00 C</td></tr><tr class="filho891200000 filho filho-hide nivel4 ">
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-times-circle tesouro"></i> 8.9.1.2.9.00.00 - EXECUÇÃO DE OUTRAS RESPONSABILIDADES DE TERCEIROS</td>
            <td align="right" data-saldo="-3993193.84" data-nat="C">R$ 3.993.193,84 C</td>
            <td align="right" data-saldo="-3993193.84" data-nat="D">R$ 649.862,40 D</td>
            <td align="right" data-saldo="-3993193.84" data-nat="C">R$ 3.343.331,44 C</td></tr>
            </tbody>
            </table>
            </thead>
            </table-->




