<?
$h1         = 'Iframe Gallery';
$title      = 'Iframe Gallery';
$desc       = 'Iframe Gallery';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var        = 'Iframe Gallery';
include('inc/head.php');
include('inc/fancy.php');
?>
<script src="<?=$url?>js/owl.carousel.js" ></script>
<script src="<?=$url?>js/slide-carousel.js" ></script>
<link rel="stylesheet" href="<?=$url?>css/owl.carousel.css">
<link rel="stylesheet" href="<?=$url?>css/owl.theme.css">
<style>
#iframe-show{
width: 100%;
box-sizing: border-box;
padding: 20px;
text-align: center;
}
#iframe-show img{
height: 200px;
}
.iframe-caroussel{
cursor: pointer;
transition: .3s;
}
.iframe-caroussel:hover{
transform: scale(1.05);
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
                    <div id="iframe-show">
                        <img src="<?=$url?>imagens/slider/nemo.jpg" alt="<?=$h1?>">
                    </div>
                    
                    <div class="owl-demo owl-carousel owl-theme centralizar">
                        
                        
                        
                        <div class="item">
                            
                            <img src="<?=$url?>imagens/slider/nemo.jpg" alt="<?=$h1?>" onClick="document.getElementById('iframe-show').innerHTML = '<img src=\'<?=$url?>imagens/slider/nemo.jpg\' alt=\'<?=$h1?>\'> '" class="iframe-caroussel" />
                            
                        </div>
                        
                        
                        <div class="item">
                            
                            <img src="<?=$url?>imagens/slider/toystory.jpg" alt="<?=$h1?>" onClick="document.getElementById('iframe-show').innerHTML = '<img src=\'<?=$url?>imagens/slider/toystory.jpg\' alt=\'<?=$h1?>\'> '" class="iframe-caroussel" />
                            
                        </div>
                        <div class="item">
                            
                            <img src="<?=$url?>imagens/slider/up.jpg" alt="<?=$h1?>" onClick="document.getElementById('iframe-show').innerHTML = '<img src=\'<?=$url?>imagens/slider/up.jpg\' alt=\'<?=$h1?>\'> '" class="iframe-caroussel" />
                            
                        </div>
                        <div class="item">
                            
                            <img src="<?=$url?>imagens/slider/walle.jpg" alt="<?=$h1?>" onClick="document.getElementById('iframe-show').innerHTML = '<img src=\'<?=$url?>imagens/slider/walle.jpg\' alt=\'<?=$h1?>\'> '" class="iframe-caroussel" />
                            
                        </div>
                        <div class="item">
                            
                            <img src="<?=$url?>imagens/slider/nemo.jpg" alt="<?=$h1?>" onClick="document.getElementById('iframe-show').innerHTML = '<img src=\'<?=$url?>imagens/slider/nemo.jpg\' alt=\'<?=$h1?>\'> '" class="iframe-caroussel" />
                            
                        </div>
                        
                        
                        <div class="item">
                            
                            <img src="<?=$url?>imagens/slider/toystory.jpg" alt="<?=$h1?>" onClick="document.getElementById('iframe-show').innerHTML = '<img src=\'<?=$url?>imagens/slider/toystory.jpg\' alt=\'<?=$h1?>\'> '" class="iframe-caroussel" />
                            
                        </div>
                        <div class="item">
                            
                            <img src="<?=$url?>imagens/slider/up.jpg" alt="<?=$h1?>" onClick="document.getElementById('iframe-show').innerHTML = '<img src=\'<?=$url?>imagens/slider/up.jpg\' alt=\'<?=$h1?>\'> '" class="iframe-caroussel" />
                            
                        </div>
                        <div class="item">
                            
                            <img src="<?=$url?>imagens/slider/walle.jpg" alt="<?=$h1?>" onClick="document.getElementById('iframe-show').innerHTML = '<img src=\'<?=$url?>imagens/slider/walle.jpg\' alt=\'<?=$h1?>\'> '" class="iframe-caroussel" />
                            
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