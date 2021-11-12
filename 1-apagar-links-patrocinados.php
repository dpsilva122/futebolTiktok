<?
$h1             = '';
$title          = '';
$desc           = '';
$key            = '';
$legendaImagem  = 'Foto ilustrativa '.$h1;
$var            = '';

include('inc/head.php');
?>
<!-- Fancy Lightbox -->
<? include('inc/fancy.php');?>
<!-- Tabs Regiões -->
<script defer src="<?=$url?>js/organictabs.jquery.js" ></script>
</head>
<body>
<? include('inc/topo.php');?>

<main>
<div class="content">
    <section>
        <div class="wrapper">
            
            <?=$caminhoInformacoes?>
            <h1><?=$h1?></h1>
            
            <article>
                
                <? include('inc/social-media.php');?>
                <? $quantia = 3; include('inc/gallery.php');?>
                <p class="alerta">Clique nas imagens para ampliar</p>
                
                <? include('inc/saiba-mais.php');?>
                
            </article>
            <? include('inc/coluna-lateral.php');?>
            
            <br class="clear">
            
            <? include('inc/paginas-relacionadas.php');?>
            
            <? include('inc/regioes.php');?>
            <br class="clear">
            
            <? include('inc/copyright.php');?>
            </div><!-- .wrapper -->
            
        </section>
    </div>
    </main>
    <? include('inc/footer.php');?>
</body>
</html>