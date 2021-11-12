<?
$h1         = 'Pop up';
$title      = 'Pop up';
$desc       = 'Pop up';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var        = 'Pop up';
include('inc/head.php');
include('inc/fancy.php');
?>
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
                    
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur modi perspiciatis delectus, sequi quae eaque dolore provident adipisci quam vel, quidem vero nobis earum iste labore enim suscipit, sapiente nesciunt.</p>
                    <br class="clear">
                </article>
            </section>
        </div>
    </main>
    </div><!-- .wrapper -->
    <? include('inc/footer.php');?>
    <a href="javascript:;" class="lightbox" data-src="#banner" title="Pop-up"></a>
    <div style="display: none;" id="banner">
        <a href="<?=$url?>"><img src="<?=$url?>imagens/slider/nemo.jpg" alt="Nemo"></a>
    </div>
    <script>
    $(document).ready(function() {
    $(".lightbox").fancybox().trigger('click');
    });
    </script>
</body>
</html>