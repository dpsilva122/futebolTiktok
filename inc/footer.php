<div class="clear"></div>
<footer>
	<div class="wrapper">
		<div class="contact-footer">
			<address>
				<span><?=$nomeSite." - ".$slogan?></span>
				<?=$rua." - ".$bairro?> <br>
				<?=$cidade."-".$UF." - ".$cep?>
			</address>
			<a href="tel:<?=$ddd.$fone?>" title="Clique e Ligue"><?=$ddd?> <strong><?=$fone?></strong></a>
			<?php
			if(isset($fone2) && !empty($fone2)) { echo " / <a href=\"tel:$ddd$fone2\" title=\"Clique e Ligue\">$ddd <strong>$fone2</strong></a>";}
			if(isset($fone3) && !empty($fone3)) { echo " / <a href=\"tel:$ddd$fone3\" title=\"Clique e Ligue\">$ddd <strong>$fone3</strong></a>";}
			?>
			<br>
		</div>
		<div class="menu-footer">
			<nav>
				<ul>
					<li><a rel="nofollow" href="<?=$url?>" title="Página inicial">Home</a></li>
					<li><a rel="nofollow" href="<?=$url?>empresa" title="Sobre a Empresa <?=$nomeSite?>">Empresa</a></li>
					<li><a rel="nofollow" href="<?=$url?>#" title="Serviços <?=$nomeSite?>">Serviços</a></li>
					<li><a rel="nofollow" href="<?=$url?>#" title="Produtos <?=$nomeSite?>">Produtos</a></li>
					<li><a rel="nofollow" href="<?=$url?>informacoes" title="Informações <?=$nomeSite?>">Informações</a></li>
					<li><a rel="nofollow" href="<?=$url?>contato" title="Fale com a <?=$nomeSite?>">Contato</a></li>
					<li><a href="<?=$url?>mapa-site" title="Mapa do site <?=$nomeSite?>">Mapa do site</a></li>
				</ul>
			</nav>
		</div>
		<? include('inc/canais.php');?>
		<br class="clear">
	</div>
</footer>
<div class="copyright-footer">
	<div class="wrapper">
		Assinatura
	</div>
</div>
<script defer src="https://apis.google.com/js/plusone.js" ></script>
<script defer src="<?=$url?>js/geral.js"></script>
<!-- Plugin facebook -->
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.defer=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', '<?=$idAnalytics?>', 'auto');
ga('send', 'pageview');
</script>
<!-- BOTAO SCROLL -->
<script async src="<?=$url?>js/jquery.scrollUp.min.js"></script>
<script async src="<?=$url?>js/scroll.js"></script>
<!-- /BOTAO SCROLL -->
