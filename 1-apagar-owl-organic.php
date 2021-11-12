<?
$h1         = 'Owl Organic';
$title      = 'Owl Organic';
$desc       = 'Owl Organic';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var        = 'Owl Organic';
include('inc/head.php');
?>
<script src="<?=$url?>js/owl.carousel.js" ></script>
<link rel="stylesheet" href="<?=$url?>css/owl.carousel.css">
<link rel="stylesheet" href="<?=$url?>css/owl.theme.css">
<script src="<?=$url?>js/organictabs.jquery.js" ></script>
<link rel="stylesheet" href="<?=$url?>css/organictabs.css">
<script>
$(document).ready(function() {
$(".organic-owl").owlCarousel({
autoPlay: 3000,
items : 5,
itemsDesktopSmall : [979,4],
itemsTablet : [768, 3],
itemsMobile : [600, 1]
});
});
</script>
</head>
<body>
<? include('inc/topo.php');?>
<div class="wrapper">
    <main>
        <div class="content">
            <section>
                <?=$caminho?>
                <h1><?=$h1?></h1>
                <article class="full">
                    
                    <div id="descricao-produto">  <!-- #descricao-produto INICIO ORGANIC TABS -->
                    <ul class="nav">
                        <li class="nav-two"><a rel="nofollow" href="#descricao-produto1" class="current" title="Descrição">Descrição</a></li>
                        <li class="nav-two"><a rel="nofollow" href="#descricao-produto2" title="Descrição 2">Descrição 2</a></li>
                    </ul>
                    <div id="descricao-produto1">
                        
                        <div class="owl-carousel owl-theme centralizar organic-owl">
                            
                            <?php
                            for ($i = 1; $i <= 48; $i++) {
                            $i < 10 ? $zero = 0 : $zero = "";
                            echo "
                            <div class=\"item\"><img src=\"".$url."imagens/clientes/cliente-$zero".$i.".jpg\" alt=\"".$h1."\" title=\"".$h1."\"  /></div>
                            ";
                            }
                            ?>
                        </div>
                        
                    </div>
                    <div id="descricao-produto2" style="display: none;">
                        
                        <div class="owl-carousel owl-theme centralizar organic-owl">
                            
                            <?php
                            for ($i = 1; $i <= 48; $i++) {
                            $i < 10 ? $zero = 0 : $zero = "";
                            echo "
                            <div class=\"item\"><img src=\"".$url."imagens/clientes/cliente-$zero".$i.".jpg\" alt=\"".$h1."\" title=\"".$h1."\"  /></div>
                            ";
                            }
                            ?>
                        </div>
                    </div>
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