<?
$h1         = 'Modal2';
$title      = 'Modal2';
$desc       = 'Modal2';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var        = 'Modal2';
include('inc/head.php');
include('inc/fancy.php');
include('inc/fancymorph.php');
?>
<style>
.morphing-btn-wrap {
display: inline-block;
position: relative;
text-align: center;
}
.morphing-btn {
box-sizing: border-box;
-webkit-transition: background .3s, color .2s .2s, width .2s 0s;
-moz-transition: background .3s, color .2s .2s, width .2s 0s;
-o-transition: background .3s, color .2s .2s, width .2s 0s;
transition: color .3s .2s, width .2s 0s;
white-space: nowrap;
}
.morphing-btn_circle {
color: transparent !important;
padding-left: 0;
padding-right: 0;
/* Override inline style rule */
-webkit-transition: color .2s 0s, width .3s .2s;
-moz-transition: color .2s 0s, width .3s .2s;
-o-transition: color .2s 0s, width .3s .2s;
transition: color .2s 0s, width .3s .2s;
width: 35.6px !important;
}
.morphing-btn-clone {
-webkit-backface-visibility: hidden;
backface-visibility: hidden;
background: #2172b3; /*PARA TROCAR O FUNDO PRECISA ALTERAR ESSAS DUAS PARTES*/
border-radius: 50%;
position: fixed;
-webkit-transition: all .5s cubic-bezier(.65, .05, .36, 1);
-moz-transition: all .5s cubic-bezier(.65, .05, .36, 1);
-o-transition: all .5s cubic-bezier(.65, .05, .36, 1);
transition: all .5s cubic-bezier(.65, .05, .36, 1);
z-index: 3;
}
.morphing-btn-clone_visible {
display: block;
-webkit-transform: scale(1) !important;
-moz-transform: scale(1) !important;
-ms-transform: scale(1) !important;
-o-transform: scale(1) !important;
transform: scale(1) !important;
}
.fancybox-morphing .fancybox-bg {
background: #2172b3; /*PARA TROCAR O FUNDO PRECISA ALTERAR ESSAS DUAS PARTES*/
opacity: 1;
}
.fancybox-morphing .fancybox-toolbar {
right: 40px;
top: 20px;
}
.fancybox-morphing .fancybox-button--close {
background: rgba(0, 0, 0, .2);
border-radius: 50%;
color: #fff;
}
.fancybox-morphing .fancybox-button--close:hover {
background: rgba(0, 0, 0, .25);
}
/* Styling for element used in example */
.morphing-content {
-webkit-backface-visibility: hidden;
backface-visibility: hidden;
background: transparent;
line-height: 2;
margin: 0;
padding: 6em 10vw;
position: relative;
z-index: 3;
}
.morphing-content * {
color: #fff;
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
                    
                    <h2>Morphing modal overlay</h2>
                  
                        <span class="morphing-btn-wrap" style="width: 111.422px;"><a title="<?=$h1?>" data-morphing="" data-src="#morphing-content" href="javascript:;" class="btn btn-primary morphing-btn" style="width: 111.422px;">
                            Open demo
                            </a></span><div class="morphing-btn-clone" style="top: -576.922px; left: -89.7201px; width: 2028.85px; height: 1881px; transform: scale(0.0175439); display: none;"></div>
                    
                        <div id="morphing-content" style="display: none;" class="morphing-content">
                            <h2>Como fazer funcionar</h2>
                            <p>Colocar o data-src do botão igual o id dessa div</p>
                        </div>
                        <hr>
                  
                            <span class="morphing-btn-wrap" style="width: 111.422px;"><a title="<?=$h1?>" data-morphing="" data-src="#morphing-content2" href="javascript:;" class="btn btn-primary morphing-btn" style="width: 111.422px;">
                                Open demo
                                </a></span><div class="morphing-btn-clone" style="top: -576.922px; left: -89.7201px; width: 2028.85px; height: 1881px; transform: scale(0.0175439); display: none;"></div>
                       
                            <div id="morphing-content2" style="display: none;" class="morphing-content">
                                <h2>Teste2</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia facere accusantium doloremque beatae nam sunt natus? Cupiditate reiciendis qui quam odio rerum corporis tempore, aperiam, aliquid asperiores eaque! Rem, voluptatum.</p>
                                
                            </div>
                            
                            
                        </article>
                    </section>
                </div>
            </main>
            </div><!-- .wrapper -->
            <? include('inc/footer.php');?>
        </body>
    </html>