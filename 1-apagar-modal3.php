<?
$h1         = 'Modal3';
$title      = 'Modal3';
$desc       = 'Modal3';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var        = 'Modal3';
include('inc/head.php');
include('inc/fancy.php');
include('inc/fancycustom.php');
?>
<style>
@media all and (min-width: 600px) {
/* Change color for backdrop */
.fancybox-custom-layout .fancybox-bg {
background: #fcfaf9;
}
.fancybox-custom-layout.fancybox-is-open .fancybox-bg {
opacity: 1;
}
/* Move caption area to the right side */
.fancybox-custom-layout .fancybox-caption {
background: #f1ecec;
bottom: 0;
left: auto;
padding: 30px 20px;
right: 44px;
top: 0;
width: 256px;
color: #444;
}
.fancybox-custom-layout .fancybox-caption h3 {
color: #444;
font-size: 21px;
line-height: 1.3;
margin-bottom: 24px;
}
.fancybox-custom-layout .fancybox-caption a {
color: #444;
}
/* Remove gradient from caption*/
.fancybox-custom-layout .fancybox-caption::before {
display: none;
}
/* Adjust content area position */
.fancybox-custom-layout .fancybox-stage {
right: 300px;
}
/* Align buttons at the right side  */
.fancybox-custom-layout .fancybox-toolbar {
background: #3b3b45;
bottom: 0;
left: auto;
right: 0;
top: 0;
width: 44px;
}
/* Remove background from all buttons */
.fancybox-custom-layout .fancybox-button {
background: transparent;
}
/* Navigation arrows */
.fancybox-custom-layout .fancybox-navigation a {
padding: 0;
}
.fancybox-custom-layout .fancybox-navigation a:not(.disabled) {
color: #333;
}
/* Reposition right arrow */
.fancybox-custom-layout .fancybox-button--arrow_right {
right: 308px;
}
}
</style>
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
                    
                    <h2>Customized layout</h2>
                    <p>
                        <a href="<?=$url?>imagens/slider/aplicacoes.jpg" class="btn" data-fancybox="cl-group" data-thumb="<?=$url?>imagens/slider/aplicacoes.jpg" title="<?=$h1?>">
                            Open demo
                        </a>
                    </p>
                    <div>
                        <a data-fancybox="cl-group" data-thumb="<?=$url?>imagens/slider/bnds.jpg" href="<?=$url?>imagens/slider/bnds.jpg" title="<?=$h1?>"></a>

                        <a data-fancybox="cl-group" data-thumb="<?=$url?>imagens/slider/cronograma.jpg" href="<?=$url?>imagens/slider/cronograma.jpg" title="<?=$h1?>"></a>
                        
                    </div>
                    <hr>
                          <p>
                        <a href="<?=$url?>imagens/slider/nemo.jpg" class="btn" data-fancybox="cl-group2" data-thumb="<?=$url?>imagens/slider/nemo.jpg" title="<?=$h1?>">
                            Open demo
                        </a>
                    </p>
                    <div>
                        <a data-fancybox="cl-group2" data-thumb="<?=$url?>imagens/slider/toystory.jpg" href="<?=$url?>imagens/slider/toystory.jpg" title="<?=$h1?>"></a>

                        <a data-fancybox="cl-group2" data-thumb="<?=$url?>imagens/slider/up.jpg" href="<?=$url?>imagens/slider/up.jpg" title="<?=$h1?>"></a>
                        
                    </div>
                    
                    
                </article>
            </section>
        </div>
    </main>
    </div><!-- .wrapper -->
    <? include('inc/footer.php');?>
</body>
</html>