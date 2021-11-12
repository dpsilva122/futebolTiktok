<?
$h1         = 'Gallery com For';
$title      = 'Gallery com For';
$desc       = 'Gallery com For';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var        = 'Gallery com For';
include('inc/head.php');
include('inc/fancy.php');
?>
<script src="<?=$url?>js/scriptbreaker-multiple-accordion-1.js"></script>
<script src="<?=$url?>js/drop-list.js"></script>
<style>
.example{
width: 100%;
resize: none;
height: 250px;
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
                    <h2>ZC=2</h2>
                    <ul class="gallery">
                        <?php
                        $pasta='teste';
                        $img='imagem';
                        $nimg='8';
                        for ($i = 1; $i <= $nimg; $i++) {
                        $i < 10 ? $zero = 0 : $zero = "";
                        echo "
                        <li>
                            <a href=\"".$url."imagens/".$pasta."/".$img."-$zero".$i.".jpg\" data-fancybox=\"group1\" class=\"lightbox\" title=\"".$h1."\" data-caption=\"".$h1."\">
                                
                                <img src=\"inc/scripts/thumbs.php?w=120&amp;h=120&amp;zc=2&amp;imagem=".$url."imagens/".$pasta."/".$img."-$zero".$i.".jpg\" alt=\"".$h1."\" title=\"".$h1."\"/>
                            </a>
                        </li>
                        ";
                        }
                        ?>
                    </ul>
                    <hr>
                    <h2>ZC=1</h2>
                    <ul class="gallery">
                        <?php
                        $pasta='teste';
                        $img='imagem';
                        $nimg='8';
                        for ($i = 1; $i <= $nimg; $i++) {
                        $i < 10 ? $zero = 0 : $zero = "";
                        echo "
                        <li>
                            <a href=\"".$url."imagens/".$pasta."/".$img."-$zero".$i.".jpg\" data-fancybox=\"group2\" class=\"lightbox\" title=\"".$h1."\" data-caption=\"".$h1."\">
                                
                                <img src=\"inc/scripts/thumbs.php?w=120&amp;h=120&amp;zc=1&amp;imagem=".$url."imagens/".$pasta."/".$img."-$zero".$i.".jpg\" alt=\"".$h1."\" title=\"".$h1."\"/>
                            </a>
                        </li>
                        ";
                        }
                        ?>
                    </ul>
                    <h2>Gallery VetKey</h2>
                    <?php
                    $vetKeyGallery = array();
                    $vetKeyGallery[0] = array("url" => "escrever-aqui", "key" => "Produto 1", "desc" =>"");
                    $vetKeyGallery[1] = array("url" => "escrever-aqui", "key" => "Produto 2", "desc" =>"");
                    ?>
                    <ul class="thumbnails">
                        <?php
                        foreach ($vetKeyGallery as $key => $vetor) {
                        $strInfo = "
                        <li>";
                            $strInfo .= "
                            <a rel=\"nofollow\" href=\"".$url."imagens/".$vetor['url']."-01.jpg\" class=\"lightbox\" title=\"".$vetor['key']."\" data-fancybox=\"gallerythumb\"><img src=\"".$url."imagens/".$vetor['url']."-01.jpg\" alt=\"".$vetor['key']."\" title=\"".$vetor['key']."\"/></a>
                            <h2><a href=\"".$url."imagens/".$vetor['url']."-01.jpg\" title=\"".$vetor['key']."\" class=\"lightbox\" data-fancybox=\"gallerythumb2\">".$vetor['key']."</a></h2>";
                            $strInfo .= "
                        </li>";
                        echo $strInfo;
                        }
                        ?>
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