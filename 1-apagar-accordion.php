<?
$h1         = 'Accordion';
$title      = 'Accordion';
$desc       = 'Accordion';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var        = 'Accordion';
include('inc/head.php');
include('inc/fancy.php');
?>
<script src="<?=$url?>js/scriptbreaker-multiple-accordion-1.js"></script>
<script src="<?=$url?>js/drop-list.js"></script>
<link rel="stylesheet" href="<?=$url?>css/accordion.css">
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
                    <ul class="drop-list">
                        <li>
                            <a href="#" title="Accordion ">Accordion1 <i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                            <ul>
                                <li>
                                    <div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam quibusdam necessitatibus ex, dolores, totam odio laboriosam vero temporibus amet cum fugit in ab, asperiores suscipit iure consequatur deleniti accusamus laborum.</p>
                                        <ul class="gallery">
                                            <li>
                                                <a class="lightbox" data-fancybox="group1" data-caption="<?=$h1?>" rel="nofollow" href="<?=$url;?>imagens/escrever-aqui-01.jpg" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                                                
                                            </li>
                                            <li>
                                                <a class="lightbox" data-fancybox="group1" data-caption="<?=$h1?>" rel="nofollow" href="<?=$url;?>imagens/escrever-aqui-01.jpg" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                                                
                                            </li>
                                            <li>
                                                <a class="lightbox" data-fancybox="group1" data-caption="<?=$h1?>" rel="nofollow" href="<?=$url;?>imagens/escrever-aqui-01.jpg" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                                                
                                            </li>
                                            <li>
                                                <a class="lightbox" data-fancybox="group1" data-caption="<?=$h1?>" rel="nofollow" href="<?=$url;?>imagens/escrever-aqui-01.jpg" title="Escrever Aqui"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui" title="Escrever Aqui"/></a>
                                                
                                            </li>
                                        </ul>
                                        <ul class="list">
                                            <li>LISTA</li>
                                            <li>LISTA</li>
                                            <li>LISTA</li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title="Accordion ">Accordion2 <i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                            <ul>
                                <li>
                                    <div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam quibusdam necessitatibus ex, dolores, totam odio laboriosam vero temporibus amet cum fugit in ab, asperiores suscipit iure consequatur deleniti accusamus laborum.</p>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title="Accordion ">Accordion3 <i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                            <ul>
                                <li>
                                    <div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam quibusdam necessitatibus ex, dolores, totam odio laboriosam vero temporibus amet cum fugit in ab, asperiores suscipit iure consequatur deleniti accusamus laborum.</p>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title="Accordion ">Accordion4 <i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                            <ul>
                                <li>
                                    <div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam quibusdam necessitatibus ex, dolores, totam odio laboriosam vero temporibus amet cum fugit in ab, asperiores suscipit iure consequatur deleniti accusamus laborum.</p>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <br class="clear">
                </article>
            </section>
        </div>
    </main>
</div>
<? include('inc/footer.php');?>
</body>
</html>