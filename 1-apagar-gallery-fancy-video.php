<?
$h1         = 'Gallery Fancy Video';
$title      = 'Gallery Fancy Video';
$desc       = 'Gallery Fancy Video';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var        = 'Gallery Fancy Video';
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
                    <h2>Opção 1 (YOUTUBE)</h2>
                    <ul class="gallery">
                        
                        <li>
                            <a class="lightbox" data-caption="<?=$h1?>" data-fancybox="video" href="https://www.youtube.com/embed/9MTW-oCo5AM?autoplay=1">
                                <img src="https://img.youtube.com/vi/9MTW-oCo5AM/0.jpg" alt="<?=$h1?>" title="<?=$h1?>" width=150 height=150>
                            </a>
                            
                        </li>
                        <li>
                            <a class="lightbox" data-caption="<?=$h1?>" data-fancybox="video" href="https://www.youtube.com/embed/9MTW-oCo5AM?autoplay=1">
                                <img src="https://img.youtube.com/vi/9MTW-oCo5AM/0.jpg" alt="<?=$h1?>" title="<?=$h1?>" width=150 height=150>
                            </a>
                            
                        </li>
                    </ul>
                    <hr>
                    <h2>Opção 2 (YOUTUBE)</h2>
                    <ul class="gallery">
                        
                        <li>
                            <a class="lightbox" data-caption="<?=$h1?>" data-fancybox="videoopc2" href="https://www.youtube.com/embed/9MTW-oCo5AM?autoplay=1" data-width="640" data-height="360" data-small-btn="true">
                                <img src="https://img.youtube.com/vi/9MTW-oCo5AM/0.jpg" alt="<?=$h1?>" title="<?=$h1?>" width=150 height=150>
                            </a>
                            
                        </li>
                        <li>
                            <a class="lightbox" data-caption="<?=$h1?>" data-fancybox="videoopc2" href="https://www.youtube.com/embed/9MTW-oCo5AM?autoplay=1" data-width="640" data-height="360" data-small-btn="true">
                                <img src="https://img.youtube.com/vi/9MTW-oCo5AM/0.jpg" alt="<?=$h1?>" title="<?=$h1?>" width=150 height=150>
                            </a>
                            
                        </li>
                    </ul>
                    <hr>
                    <h2>Opção 3 (VIMEO)</h2>
                    <ul class="gallery">
                        <li>
                            <a data-fancybox="vimeo" class="lightbox" data-caption="<?=$h1?>" data-ratio="2" href="https://vimeo.com/191947042">
                                <img src="https://i.vimeocdn.com/video/604514162_640.jpg" alt="<?=$h1?>" >
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="vimeo" class="lightbox" data-caption="<?=$h1?>" data-ratio="2" href="https://vimeo.com/191947042">
                                <img src="https://i.vimeocdn.com/video/604514162_640.jpg" alt="<?=$h1?>" >
                            </a>
                        </li>
                    </ul>
                    <h2>HTML LOCAL VIDEO</h2>
                    <ul class="gallery">
                        <li>
                            <a data-fancybox="local" class="lightbox" data-caption="<?=$h1?>" data-width="640" data-height="360" href="http://download.blender.org/peach/bigbuckbunny_movies/BigBuckBunny_320x180.mp4">
                                <img src="https://peach.blender.org/wp-content/uploads/bird1.jpg" alt="<?=$h1?>" >
                            </a>
                        </li>
                        <li>
                            <a data-fancybox="local" class="lightbox" data-caption="<?=$h1?>" data-width="640" data-height="360" href="http://download.blender.org/peach/bigbuckbunny_movies/BigBuckBunny_320x180.mp4">
                                <img src="https://peach.blender.org/wp-content/uploads/bird1.jpg" alt="<?=$h1?>" >
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <br class="clear">
                </article>
            </section>
        </div>
    </main>
    </div><!-- .wrapper -->
    <? include('inc/footer.php');?>
</body>
</html>