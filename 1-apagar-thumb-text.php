<?
$h1         = 'Thumb Text';
$title      = 'Thumb Text';
$desc       = 'Thumb Text';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var        = 'Thumb Text';
include('inc/head.php');
include('inc/fancy.php');
?>
<style>
.thumb-text{
text-align: center;
transition: .3s;
}
.thumb-text:hover{
transform: scale(1.05);
}
.thumb-text img{
width: 80px;
}
.thumb-text .fa{
color: red;
}
.thumb-text p{
text-align: center;
}
.thumb-text .col-12{
border: 1px solid #aaa;
border-radius: 5px;
background: #ddd;
padding: 30px;
}
.thumb-text2 p,.thumb-text2 h2{
text-align: left;
}
.thumb-text2 .icon-thumb-text{
min-height: 240px;
display: flex;
justify-content: center;
align-items: center;
}
</style>
</head>
<body>
<? include('inc/topo.php');?>
<main>
    <div class="content">
        <section>
            <div class="wrapper">
                <?=$caminho?>
                <h1><?=$h1?></h1>
                </div><!-- .wrapper -->
                <article class="full">
                    <div class="wrapper">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam libero, perspiciatis impedit quia dolorum iusto at culpa voluptas amet nostrum eligendi ipsa exercitationem consequuntur corporis unde distinctio deserunt. Corporis, distinctio.</p>
                        <div class="clear"></div>
                    </div>
                    <div class="conteudo-index">
                        <div class="wrapper">
                            <h2>Tipo 1</h2>
                            <a href="<?=$url?>" title="Escrever Aqui">
                                <div class="col-4 thumb-text">
                                    <img src="<?=$url?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui"><h2>Escrever Aqui</h2><p>Texto</p>
                                </div>
                            </a>
                            <a href="<?=$url?>" title="Escrever Aqui">
                                <div class="col-4 thumb-text">
                                    <img src="<?=$url?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui"><h2>Escrever Aqui</h2><p>Texto</p>
                                </div>
                            </a>
                            <a href="<?=$url?>" title="Escrever Aqui">
                                <div class="col-4 thumb-text">
                                    <img src="<?=$url?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui"><h2>Escrever Aqui</h2><p>Texto</p>
                                </div>
                            </a>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <br><br>
                    <div class="wrapper">
                        <h2>Tipo 2</h2>
                        <a href="<?=$url?>" title="Escrever Aqui">
                            <div class="col-4 thumb-text">
                                <i class="fa fa-envira fa-4x" aria-hidden="true"></i>
                                <h2>Escrever Aqui</h2><p>Texto</p>
                            </div>
                        </a>
                        
                        <a href="<?=$url?>" title="Escrever Aqui">
                            <div class="col-4 thumb-text">
                                <i class="fa fa-envira fa-4x" aria-hidden="true"></i>
                                <h2>Escrever Aqui</h2><p>Texto</p>
                            </div>
                        </a>
                        <a href="<?=$url?>" title="Escrever Aqui">
                            <div class="col-4 thumb-text">
                                <i class="fa fa-envira fa-4x" aria-hidden="true"></i>
                                <h2>Escrever Aqui</h2><p>Texto</p>
                            </div>
                        </a>
                        <div class="clear"></div>
                    </div>
                    <div class="conteudo-index">
                        <div class="wrapper">
                            <h2>Tipo 3</h2>
                            <a href="<?=$url?>" title="Escrever Aqui">
                                <div class="col-4 thumb-text">
                                    <div class="col-12">
                                        <img src="<?=$url?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui">
                                        <h2>Escrever Aqui</h2>
                                        <p>Texto ABCDEFG</p>
                                    </div>
                                </div>
                            </a>
                            <a href="<?=$url?>" title="Escrever Aqui">
                                <div class="col-4 thumb-text">
                                    <div class="col-12">
                                        <img src="<?=$url?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui">
                                        <h2>Escrever Aqui</h2>
                                        <p>Texto ABCDEFG</p>
                                    </div>
                                </div>
                            </a>
                            <a href="<?=$url?>" title="Escrever Aqui">
                                <div class="col-4 thumb-text">
                                    <div class="col-12">
                                        <img src="<?=$url?>imagens/escrever-aqui-01.jpg" alt="Escrever Aqui">
                                        <h2>Escrever Aqui</h2>
                                        <p>Texto ABCDEFG</p>
                                    </div>
                                </div>
                            </a>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="wrapper">
                        
                        
                        <h2>Tipo 4</h2>
                        <div class="col-6">
                            <a href="<?=$url?>" title="Escrever Aqui">
                                <div class="col-12 thumb-text thumb-text2">
                                    <div class="col-6 icon-thumb-text">
                                        <i class="fa fa-envira fa-4x" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-6">
                                        <h2>Escrever Aqui</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure quibusdam sequi odit facere numquam. Nihil excepturi natus dolorem libero molestias vero, repudiandae totam facilis, odio inventore incidunt rerum deleniti consequatur!</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        <div class="col-6">
                            <a href="<?=$url?>" title="Escrever Aqui">
                                <div class="col-12 thumb-text thumb-text2">
                                    
                                    <div class="col-6">
                                        <h2>Escrever Aqui</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure quibusdam sequi odit facere numquam. Nihil excepturi natus dolorem libero molestias vero, repudiandae totam facilis, odio inventore incidunt rerum deleniti consequatur!</p>
                                    </div>
                                    <div class="col-6 icon-thumb-text">
                                        <i class="fa fa-envira fa-4x" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="clear"></div>
                        <div class="col-6">
                            <a href="<?=$url?>" title="Escrever Aqui">
                                <div class="col-12 thumb-text thumb-text2">
                                    <div class="col-6 icon-thumb-text">
                                        <i class="fa fa-envira fa-4x" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-6">
                                        <h2>Escrever Aqui</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure quibusdam sequi odit facere numquam. Nihil excepturi natus dolorem libero molestias vero, repudiandae totam facilis, odio inventore incidunt rerum deleniti consequatur!</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        <div class="col-6">
                            <a href="<?=$url?>" title="Escrever Aqui">
                                <div class="col-12 thumb-text thumb-text2">
                                    
                                    <div class="col-6">
                                        <h2>Escrever Aqui</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure quibusdam sequi odit facere numquam. Nihil excepturi natus dolorem libero molestias vero, repudiandae totam facilis, odio inventore incidunt rerum deleniti consequatur!</p>
                                    </div>
                                    <div class="col-6 icon-thumb-text">
                                        <i class="fa fa-envira fa-4x" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="clear"></div>
                        
                    </div>
                    
                    
                    <br class="clear">
                </article>
            </section>
        </div>
    </main>
    <? include('inc/footer.php');?>
</body>
</html>