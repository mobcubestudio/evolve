$(function(){
   $("#select-ef").select2();

   $("#filtrar").on("click",function (){
      //alert("Filtrar");

      $("#filter-content").append("<h3>Contas Contábeis - Acre [12/2020]</h3>");
      $("#filter-content").append("<table id='filter-table' class=\"table table-striped table-bordered\" width=\"100%\" style=\"font-size: 10px\">");
      $("#filter-table").append("<thead id='filter-head'>");
      $("#filter-head").append("<tr id='filter-cabecalho' class=\"cabecalho-relatorio\">");
      $("#filter-cabecalho").append("<th>Conta</th>");
      $("#filter-cabecalho").append("<th>Inicial</th>");
      $("#filter-cabecalho").append("<th>Movimento</th>");
      $("#filter-cabecalho").append("<th>Final</th>");

      $("#filter-table").append("<thead id='filter-body'>");


      for(var i= 1; i<=8; i++){
         carregaPais(i)
      }

   });

   function carregaPais(linha){
      $(document).queue(function (next)
      {
         $.ajax({
            type:'POST',
            url: 'ajax/buscaPais/'+linha,
            data: linha,
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function (result) {
               $("#filter-body").append(" <tr class=\"filho0 filho filho-hide nivel0 nivelPadrao\">\n" +
                   "        <td><i class=\"fa fa-minus-circle js-abre-filhos\" id=\""+ result['result']['id'] +"\"></i> "+ result['result']['codigo'] +" - "+ result['result']['nome'] +" </td>\n" +
                   "\n" +
                   "        <td align=\"right\" data-saldo=\""+ result['result']['inicial'] +"\" data-nat=\"D\">R$ "+ result['result']['inicial'] +" D</td>\n" +
                   "        <td align=\"right\" data-saldo=\""+ result['result']['movimento'] +"\" data-nat=\"C\">R$ "+ result['result']['movimento'] +" C</td>\n" +
                   "        <td align=\"right\" data-saldo=\""+ result['result']['final'] +"\" data-nat=\"D\">R$ "+ result['result']['final'] +" D</td>\n" +
                   "\n" +
                   "    </tr>");
               next();
            }
         });
      });
   }
});