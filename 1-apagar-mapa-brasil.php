<?php
$h1 = 'Mapa do Brasil';
$title = 'Mapa do Brasil';
$desc = 'Mapa do Brasil';
$key = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var = 'Mapa do Brasil';
include('inc/head.php');
?>
<!-- INSERIR NA HEAD -->
<link rel="stylesheet" href="<?=$url?>css/mapa.css">
<script>
$(document).ready(function () {
$(".j_uf").on('click' || 'change', function(){
var id = ( $(this).attr("data-uf") ? $(this).attr("data-uf") : $(this).val() );
$('.representante div').slideUp(100);
$('#'+id).slideDown(300);
return false;
});
$("#select-mapa").on('change', function(){
var e = document.getElementById("select-mapa").value;
$('.representante div').slideUp(100);
$('#'+e).slideDown(300);
return false;
});
});
</script>
<!-- FIM INSERIR NA HEAD -->
</head>
<body>
<?php include('inc/topo.php');?>
<div class="wrapper">
  <main>
  <div class="content">
    <section>
      <?= $caminho ?>
      <h1><?= $h1 ?></h1>
      <article class="full">
        <h2>Representantes</h2>
        <select id="select-mapa">
          <option value="">Selecione</option>
          <option value="AC">Acre</option>
          <option value="AL">Alagoas</option>
          <option value="AP">Amapá</option>
          <option value="AM">Amazonas</option>
          <option value="BA">Bahia</option>
          <option value="CE">Ceará</option>
          <option value="DF">Distrito Federal</option>
          <option value="ES">Espírito Santo</option>
          <option value="GO">Goiás</option>
          <option value="MA">Maranhão</option>
          <option value="MT">Mato Grosso</option>
          <option value="MS">Mato Grosso do Sul</option>
          <option value="MG">Minas Gerais</option>
          <option value="PA">Pará</option>
          <option value="PB">Paraíba</option>
          <option value="PR">Paraná</option>
          <option value="PE">Pernambuco</option>
          <option value="PI">Piauí</option>
          <option value="RJ">Rio de Janeiro</option>
          <option value="RN">Rio Grande do Norte</option>
          <option value="RS">Rio Grande do Sul</option>
          <option value="RO">Rondônia</option>
          <option value="RR">Roraima</option>
          <option value="SC">Santa Catarina</option>
          <option value="SP">São Paulo</option>
          <option value="SE">Sergipe</option>
          <option value="TO">Tocantins</option>
        </select>
        <br>
        <div class="representante">
          <div id="AC"><h2>Acre</h2>
            <p>DOUTORES DA WEB</p>
            <p>TEL: 12345678</p>
          </div>
          <div id="AL"><h2>Alagoas</h2>
            <p>DOUTORES DA WEB</p>
            <p>TEL: 12345678</p>
          </div>
          <div id="AP"><h2>Amapá</h2>
            <p>DOUTORES DA WEB</p>
            <p>TEL: 12345678</p>
          </div>
          <div id="AM"><h2>Amazonas</h2>
            <p>DOUTORES DA WEB</p>
            <p>TEL: 12345678</p>
          </div>
          <div id="BA"><h2>Bahia</h2>
            <p>DOUTORES DA WEB</p>
            <p>TEL: 12345678</p>
          </div>
          <div id="CE"><h2>Ceará</h2>
            <p>DOUTORES DA WEB</p>
            <p>TEL: 12345678</p>
          </div>
          <div id="DF"><h2>Distrito Federal</h2>
            <p>DOUTORES DA WEB</p>
            <p>TEL: 12345678</p>
          </div>
          <div id="ES"><h2>Espírito Santo</h2>
            <p>DOUTORES DA WEB</p>
            <p>TEL: 12345678</p>
          </div>
          <div id="GO"><h2>Goiás</h2>
            <p>DOUTORES DA WEB</p>
            <p>TEL: 12345678</p>
          </div>
          <div id="MA"><h2>Maranhão</h2>
            <p>DOUTORES DA WEB</p>
            <p>TEL: 12345678</p>
          </div>
          <div id="MT"><h2>Mato Grosso</h2>
            <p>DOUTORES DA WEB</p>
            <p>TEL: 12345678</p>
          </div>
          <div id="MS"><h2>Mato Grosso do Sul</h2>
            <p>DOUTORES DA WEB</p>
            <p>TEL: 12345678</p>
          </div>
          <div id="MG"><h2>Minas Gerais</h2>
            <p>DOUTORES DA WEB</p>
            <p>TEL: 12345678</p>
          </div>
          <div id="PA"><h2>Pará</h2>
            <p>DOUTORES DA WEB</p>
            <p>TEL: 12345678</p>
          </div>
          <div id="PB"><h2>Paraíba</h2>
            <p>DOUTORES DA WEB</p>
            <p>TEL: 12345678</p>
          </div>
          <div id="PR"><h2>Paraná</h2>
            <p>DOUTORES DA WEB</p>
            <p>TEL: 12345678</p>
          </div>
          <div id="PE"><h2>Pernambuco</h2>
            <p>DOUTORES DA WEB</p>
            <p>TEL: 12345678</p>
          </div>
          <div id="PI"><h2>Piauí</h2>
            <p>DOUTORES DA WEB</p>
            <p>TEL: 12345678</p>
          </div>
          <div id="RJ"><h2>Rio de Janeiro</h2>
            <p>DOUTORES DA WEB</p>
            <p>TEL: 12345678</p>
          </div>
          <div id="RN"><h2>Rio Grande do Norte</h2>
            <p>DOUTORES DA WEB</p>
            <p>TEL: 12345678</p>
          </div>
          <div id="RS"><h2>Rio Grande do Sul</h2>
            <p>DOUTORES DA WEB</p>
            <p>TEL: 12345678</p>
          </div>
          <div id="RO"><h2>Rondônia</h2>
            <p>DOUTORES DA WEB</p>
            <p>TEL: 12345678</p>
          </div>
          <div id="RR"><h2>Roraima</h2>
            <p>DOUTORES DA WEB</p>
            <p>TEL: 12345678</p>
          </div>
          <div id="SC"><h2>Santa Catarina</h2>
            <p>DOUTORES DA WEB</p>
            <p>TEL: 12345678</p>
          </div>
          <div id="SP"><h2>São Paulo</h2>
            <p>DOUTORES DA WEB</p>
            <p>TEL: 12345678</p>
          </div>
          <div id="SE"><h2>Sergipe</h2>
            <p>DOUTORES DA WEB</p>
            <p>TEL: 12345678</p>
          </div>
          <div id="TO"><h2>Tocantins</h2>
            <p>DOUTORES DA WEB</p>
            <p>TEL: 12345678</p>
          </div>
        </div>
        <div class="mapa">
          <img src="<?= $url ?>imagens/mapa-brasil.png" alt="<?= $h1 ?>" title="<?= $h1 ?>">
          <p><a href="javascript:;" title="Acre" id="position-ac" data-uf="AC" class="j_uf">AC</a></p>
          <p><a href="javascript:;" title="Alagoas" id="position-al" data-uf="AL" class="j_uf">AL</a></p>
          <p><a href="javascript:;" title="Amapá" id="position-ap" data-uf="AP" class="j_uf">AP</a></p>
          <p><a href="javascript:;" title="Amazonas" id="position-am" data-uf="AM" class="j_uf">AM</a></p>
          <p><a href="javascript:;" title="Bahia" id="position-ba" data-uf="BA" class="j_uf">BA</a></p>
          <p><a href="javascript:;" title="Ceará" id="position-ce" data-uf="CE" class="j_uf">CE</a></p>
          <p><a href="javascript:;" title="Distrito Federal" id="position-df" data-uf="DF" class="j_uf">DF</a></p>
          <p><a href="javascript:;" title="Espírito Santo" id="position-es" data-uf="ES" class="j_uf">ES</a></p>
          <p><a href="javascript:;" title="Goiás" id="position-go" data-uf="GO" class="j_uf">GO</a></p>
          <p><a href="javascript:;" title="Maranhão" id="position-ma" data-uf="MA" class="j_uf">MA</a></p>
          <p><a href="javascript:;" title="Mato Grosso" id="position-mt" data-uf="MT" class="j_uf">MT</a></p>
          <p><a href="javascript:;" title="Mato Grosso do Sul" id="position-ms" data-uf="MS" class="j_uf">MS</a></p>
          <p><a href="javascript:;" title="Minas Gerais" id="position-mg" data-uf="MG" class="j_uf">MG</a></p>
          <p><a href="javascript:;" title="Pará" id="position-pa" data-uf="PA" class="j_uf">PA</a></p>
          <p><a href="javascript:;" title="Paraíba" id="position-pb" data-uf="PB" class="j_uf">PB</a></p>
          <p><a href="javascript:;" title="Paraná" id="position-pr" data-uf="PR" class="j_uf">PR</a></p>
          <p><a href="javascript:;" title="Pernambuco" id="position-pe" data-uf="PE" class="j_uf">PE</a></p>
          <p><a href="javascript:;" title="Piauí" id="position-pi" data-uf="PI" class="j_uf">PI</a></p>
          <p><a href="javascript:;" title="Rio de Janeiro" id="position-rj" data-uf="RJ" class="j_uf">RJ</a></p>
          <p><a href="javascript:;" title="Rio Grande do Norte" id="position-rn" data-uf="RN" class="j_uf">RN</a></p>
          <p><a href="javascript:;" title="Rio Grande do Sul" id="position-rs" data-uf="RS" class="j_uf">RS</a></p>
          <p><a href="javascript:;" title="Rondônia" id="position-ro" data-uf="RO" class="j_uf">RO</a></p>
          <p><a href="javascript:;" title="Roraima" id="position-rr" data-uf="RR" class="j_uf">RR</a></p>
          <p><a href="javascript:;" title="Santa Catarina" id="position-sc" data-uf="SC" class="j_uf">SC</a></p>
          <p><a href="javascript:;" title="São Paulo" id="position-sp" data-uf="SP" class="j_uf">SP</a></p>
          <p><a href="javascript:;" title="Sergipe" id="position-se" data-uf="SE" class="j_uf">SE</a></p>
          <p><a href="javascript:;" title="Tocantins" id="position-to" data-uf="TO" class="j_uf">TO</a></p>
        </div>
        <br class="clear">
        
      </article>
    </section>
  </div>
  </main>
  </div><!-- .wrapper -->
  <? include('inc/footer.php');?>
</body>
</html>