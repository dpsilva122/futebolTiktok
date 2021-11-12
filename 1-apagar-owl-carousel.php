<?
$h1         = 'Owl Carousel';
$title      = 'Owl Carousel';
$desc       = 'Owl Carousel';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var        = 'Owl Carousel';
include('inc/head.php');
include('inc/fancy.php');
?>
<script src="<?=$url?>js/owl.carousel.js" ></script>
<link rel="stylesheet" href="<?=$url?>css/owl.carousel.css">
<link rel="stylesheet" href="<?=$url?>css/owl.theme.css">
<script>
$(document).ready(function() {
$(".owl-demo").owlCarousel({
autoPlay: 3000,
items : 5, // Quantidade de itens que irá aparecer
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
                    
                    <h2>Owl com Gallery For</h2>
                    
                    <div class="owl-carousel owl-theme centralizar owl-demo">
                        
                        <?php
                        for ($i = 1; $i <= 48; $i++) {
                        $i < 10 ? $zero = 0 : $zero = "";
                        echo "
                        <div class=\"item\"><img src=\"".$url."imagens/clientes/cliente-$zero".$i.".jpg\" alt=\"".$h1."\" title=\"".$h1."\"  /></div>
                        ";
                        }
                        ?>
                    </div>
                    <h2>Owl com Gallery For e Lightbox</h2>
                    <div class="owl-carousel owl-theme centralizar owl-demo">
                        
                        <?php
                        for ($i = 1; $i <= 48; $i++) {
                        $i < 10 ? $zero = 0 : $zero = "";
                        echo "
                        <div class=\"item\"><a href=\"".$url."imagens/clientes/cliente-$zero".$i.".jpg\" data-fancybox=\"group1\" title=\"".$h1."\" class=\"lightbox\" ><img src=\"".$url."imagens/clientes/cliente-$zero".$i.".jpg\" alt=\"".$h1."\" title=\"".$h1."\"  /></a></div>
                        ";
                        }
                        ?>
                    </div>
                    <h2>Owl Manual</h2>
                    <div class="owl-carousel owl-theme centralizar owl-demo">
                        <div class="item">
                            <a href="<?=$url?>imagens/clientes/cliente-01.jpg" title="<?=$h1?>" class="lightbox" data-fancybox="Owl Manual">
                                <img src="<?=$url?>imagens/clientes/cliente-01.jpg" alt="<?=$h1?>">
                            </a>
                        </div>
                        <div class="item">
                            <a href="<?=$url?>imagens/clientes/cliente-01.jpg" title="<?=$h1?>" class="lightbox" data-fancybox="Owl Manual">
                                <img src="<?=$url?>imagens/clientes/cliente-01.jpg" alt="<?=$h1?>">
                            </a>
                        </div>
                        <div class="item">
                            <a href="<?=$url?>imagens/clientes/cliente-01.jpg" title="<?=$h1?>" class="lightbox" data-fancybox="Owl Manual">
                                <img src="<?=$url?>imagens/clientes/cliente-01.jpg" alt="<?=$h1?>">
                            </a>
                        </div>
                        <div class="item">
                            <a href="<?=$url?>imagens/clientes/cliente-01.jpg" title="<?=$h1?>" class="lightbox" data-fancybox="Owl Manual">
                                <img src="<?=$url?>imagens/clientes/cliente-01.jpg" alt="<?=$h1?>">
                            </a>
                        </div>
                        <div class="item">
                            <a href="<?=$url?>imagens/clientes/cliente-01.jpg" title="<?=$h1?>" class="lightbox" data-fancybox="Owl Manual">
                                <img src="<?=$url?>imagens/clientes/cliente-01.jpg" alt="<?=$h1?>">
                            </a>
                        </div>
                        <div class="item">
                            <a href="<?=$url?>imagens/clientes/cliente-01.jpg" title="<?=$h1?>" class="lightbox" data-fancybox="Owl Manual">
                                <img src="<?=$url?>imagens/clientes/cliente-01.jpg" alt="<?=$h1?>">
                            </a>
                        </div>
                    </div>
                    
                    <h2>Owl Thumb</h2>
                    <ul class="thumbnails owl-demo">
                        <li class="item">
                            <a rel="nofollow" href="<?=$url;?>" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                            <h2><a href="<?=$url;?>" title="Escrever Aqui">Escrever Aqui</a></h2>
                        </li>
                        <li class="item">
                            <a rel="nofollow" href="<?=$url;?>" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                            <h2><a href="<?=$url;?>" title="Escrever Aqui">Escrever Aqui</a></h2>
                        </li>
                        <li class="item">
                            <a rel="nofollow" href="<?=$url;?>" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                            <h2><a href="<?=$url;?>" title="Escrever Aqui">Escrever Aqui</a></h2>
                        </li>
                        <li class="item">
                            <a rel="nofollow" href="<?=$url;?>" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                            <h2><a href="<?=$url;?>" title="Escrever Aqui">Escrever Aqui</a></h2>
                        </li>
                        <li class="item">
                            <a rel="nofollow" href="<?=$url;?>" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                            <h2><a href="<?=$url;?>" title="Escrever Aqui">Escrever Aqui</a></h2>
                        </li>
                        <li class="item">
                            <a rel="nofollow" href="<?=$url;?>" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                            <h2><a href="<?=$url;?>" title="Escrever Aqui">Escrever Aqui</a></h2>
                        </li>
                    </ul>
                    
                    
                    <br class="clear">
                </article>
            </section>
        </div>
    </main>
    </div><!-- .wrapper -->
    <? include('inc/footer.php');?>
</body>
</html>