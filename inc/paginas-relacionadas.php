<h2 class="related-posting-title">Publicações Relacionadas</h2>
<ul class="related-posting">
	<?
	$random = array();
	$limit = 3;
	$random[0] = "
	<li class=\"row\" >
		<a rel=\"nofollow\" href=\"".$url."links-patrocinados\" title=\"Links Patrocinados\"><img src=\"".$url."imagens/servicos/thumb/links-patrocinados-01.jpg\" alt=\"Links Patrocinados\" title=\"Links Patrocinados\" /></a>
		<h3><a href=\"".$url."links-patrocinados\" title=\"Links Patrocinados\">Links Patrocinados</a></h3>
	</li>";
	
	$random[1] = "
	<li class=\"row\" >
		<a rel=\"nofollow\" href=\"".$url."seo\" title=\"SEO\"><img src=\"".$url."imagens/servicos/thumb/links-patrocinados-02.jpg\" alt=\"SEO\" title=\"SEO\" /></a>
		<h3><a href=\"".$url."seo\" title=\"SEO\">SEO</a></h3>
	</li>";
	
	$random[2] = "
	<li class=\"row\" >
		<a rel=\"nofollow\" href=\"".$url."email-marketing\" title=\"Email Marketing\"><img src=\"".$url."imagens/servicos/thumb/links-patrocinados-03.jpg\" alt=\"Email Marketing\" title=\"Email Marketing\" /></a>
		<h3><a href=\"".$url."email-marketing\" title=\"Email Marketing\">Email Marketing</a></h3>
	</li>";
	
	$random[3] = "
	<li class=\"row\" >
		<a rel=\"nofollow\" href=\"".$url."redes-sociais\" title=\"Redes Sociais\"><img src=\"".$url."imagens/servicos/thumb/links-patrocinados-01.jpg\" alt=\"Redes Sociais\" title=\"Redes Sociais\" /></a>
		<h3><a href=\"".$url."redes-sociais\" title=\"Redes Sociais\">Redes Sociais</a></h3>
	</li>";
	
	$random[4] = "
	<li class=\"row\" >
		<a rel=\"nofollow\" href=\"".$url."classificados\" title=\"Classificados\"><img src=\"".$url."imagens/servicos/thumb/links-patrocinados-02.jpg\" alt=\"Classificados\" title=\"Classificados\" /></a>
		<h3><a href=\"".$url."classificados\" title=\"Classificados\">Classificados</a></h3>
	</li>";
	
	$random[5] = "
	<li class=\"row\" >
		<a rel=\"nofollow\" href=\"".$url."criacao-sites\" title=\"Criação de Sites\"><img src=\"".$url."imagens/servicos/thumb/links-patrocinados-03.jpg\" alt=\"Criação de Sites\" title=\"Criação de Sites\" /></a>
		<h3><a href=\"".$url."criacao-sites\" title=\"Criação de Sites\">Criação de Sites</a></h3>
	</li>";
	
	shuffle($random);
	for($i = 0; $i < $limit; $i++)
	{
	print $random[$i];
	}
	?>
</ul>
<br class="clear">