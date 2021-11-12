<?
$nomeSite			= 'Base';
$slogan				= 'Estrutura base';
$url				= 'http://localhost/futebol-2022-tiktok/';
// $url				= 'http://www.comercial.recordtv.com.br/futebol-2022-tiktok/';
$ddd				= '11';
$fone				= '9999-0000';
// $fone2				= '2222-4444';
// $fone3				= '2123-4444';
$emailContato		= 'comercial@recordtv.com.br';
$rua				= 'Alameda Min. Rocha Azevedo, 395';
$bairro				= 'Jardim Paulista';
$cidade				= 'São Paulo';
$UF					= 'SP';
$cep				= 'CEP: 01410-001';
$latitude			= '-23.5616963';
$longitude			= '-46.6595313';
$explode			= explode("/", $_SERVER['PHP_SELF']);
$urlPagina 			= end($explode);
$urlPagina	 		= str_replace('.php','',$urlPagina);
$urlPagina 			== "index"? $urlPagina= "" : "";
$urlAnalytics = str_replace("http://www.", '', $url);
$urlAnalytics = str_replace("/", '', $urlAnalytics);
//reCaptcha do Google
$siteKey = '6Lfc7g8UAAAAAHlnefz4zF82BexhvMJxhzifPirv';
$secretKey = '6Lfc7g8UAAAAAKi8al32HjrmsdwoFoG7eujNOwBI';
//********************COM SIG APAGAR********************
//Gerar htaccess automático
$urlhtaccess = $url;
$schemaReplace = strpos($urlhtaccess, 'http://www.') === false ? 'http://' : 'http://www.';
$urlhtaccess = str_replace($schemaReplace, '', $urlhtaccess);
$urlhtaccess = rtrim($urlhtaccess,'/');
define('RAIZ', $url);
define('HTACCESS', $urlhtaccess);
include('inc/gerador-htaccess.php');
//********************FIM SIG APAGAR********************
//Breadcrumbs
$caminho 			= '
<div id="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb" >
	<a rel="home" itemprop="url" href="'.$url.'" title="Home"><span itemprop="title"><i class="fa fa-home" aria-hidden="true"></i> Home</span></a> »
	<strong><span class="page" itemprop="title" >'.$h1.'</span></strong>
</div>
';
$caminho2	= '
<div id="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb" >
	<a rel="home" href="'.$url.'" title="Home" itemprop="url"><span itemprop="title"><i class="fa fa-home" aria-hidden="true"></i> Home</span></a> »
	<div itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
		<a href="'.$url.'informacoes" title="Informações" class="category" itemprop="url"><span itemprop="title"> Informações </span></a> »
		<div itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
			<strong><span class="page" itemprop="title" >'.$h1.'</span></strong>
		</div>
	</div>
</div>
';
//Pasta de imagens, Galeria, url Facebook, etc.
$pasta 				= 'imagens/informacoes/';
//Redes sociais
// $idFacebook			= 'Link para achar o ID da página do Facebook http://graph.facebook.com/Nome da página do Facebook';
$idGooglePlus		= 'http://plus.google.com.br'; // ID da página da empresa no Google Plus
// $paginaFacebook		= 'PAGINA DO FACEBOOK DO CLIENTE';
$author = ''; // Link do perfil da empresa no g+ ou deixar em branco
//Reescrita dos links dos telefones
$link_tel = str_replace('(', '', $ddd);
$link_tel = str_replace(')', '', $link_tel);
$link_tel = str_replace('11', '', $link_tel);
$link_tel .= '5511'.$fone;
$link_tel = str_replace('-', '', $link_tel);
$prepos = array(' a ',' á ',' à ',' ante ',' até ',' após ',' de ',' desde ',' em ',' entre ',' com ',' para ',' por ',' perante ',' sem ',' sob ',' sobre ',' na ',' no ',' e ',' do ',' da ',' ','(',')','\'','"','.','/',':',' | ', ',, ');
$creditos			= 'Marketing Publicitário - Record TV';
$siteCreditos		= 'www.comercial.recordtv.com.br';
$caminhoBread 			= '
<div class="title-breadcrumb">
	<div class="wrapper">
		<div id="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb" >
			<a rel="home" itemprop="url" href="'.$url.'" title="Home"><span itemprop="title"><i class="fa fa-home" aria-hidden="true"></i> Home</span></a> »
			<strong><span class="page" itemprop="title" >'.$h1.'</span></strong>
		</div>
		<h1>'.$h1.'</h1>
	</div>
</div>
';
$caminhoBread2	= '
<div class="title-breadcrumb">
	<div class="wrapper">
		<div id="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb" >
			<a rel="home" href="'.$url.'" title="Home" itemprop="url"><span itemprop="title"><i class="fa fa-home" aria-hidden="true"></i> Home</span></a> »
			<div itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
				<a href="'.$url.'informacoes" title="Informações" class="category" itemprop="url"><span itemprop="title"> Informações </span></a> »
				<div itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
					<strong><span class="page" itemprop="title" >'.$h1.'</span></strong>
				</div>
			</div>
		</div>
		<h1>'.$h1.'</h1>
	</div>
</div>
';
?>