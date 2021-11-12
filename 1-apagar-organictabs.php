<?
$h1         = 'OrganicTabs';
$title      = 'OrganicTabs';
$desc       = 'OrganicTabs';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var        = 'OrganicTabs';
include('inc/head.php');
?>
<!-- ******PRECISA PARA FUNCIONAR****** -->
<script src="<?=$url?>js/organictabs.jquery.js" ></script>
<link rel="stylesheet" href="<?=$url?>css/organictabs.css">
<!-- ******FIM PRECISA PARA FUNCIONAR****** -->
<style>
#descricao-produto-vertical{
    background:#eee;
}

#descricao-produto-vertical .list-wrap {
background: #eee;
padding: 10px;
margin: 0 0 15px 0;
font-size: 10px;
}
#descricao-produto-vertical ul {
list-style: none;
display:inline-block;
}
#descricao-produto-vertical .list-wrap li{
width:160px;
float:left;
color:#666;
}
#descricao-produto-vertical .nav {overflow: hidden;margin:0;padding:0;width: 100%;border-bottom: 1px solid #2172b3;}
#descricao-produto-vertical .nav li {display: block;}
#descricao-produto-vertical .nav li.last {
margin-right: 0;
}
#descricao-produto-vertical .nav li a {display: block;text-decoration: none;padding: 12px;background: #fff;color: #333;font-size: 12px;text-align: center;border-left: 1px solid #2172b3;border-right: 1px solid #2172b3;border-top: 1px solid #2172b3;}
#descricao-produto-vertical .nav li a:hover, #descricao-produto-vertical .nav li a:focus {background: #90b8d9;color:#fff;}
#descricao-produto-vertical ul li.nav-two a.current {background-color: #2172b3 !important;color: #fff;}
@media only screen and (max-width: 765px){
#descricao-produto-vertical .nav{
border: 0;
}
#descricao-produto-vertical .nav li {
list-style: none;
display:block;
}
#descricao-produto-vertical .nav li:last-child{
border-bottom: 1px solid #2172b3;
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
                    <img src="<?=$url?>imagens/escrever-aqui-01.jpg" width="200" alt="<?=$h1?>" title="<?=$var?>"/>
                    <div class="clear"></div>
                    <br>
                    <div id="descricao-produto">  <!-- #descricao-produto INICIO ORGANIC TABS -->
                    <ul class="nav">
                        <li class="nav-two"><a rel="nofollow" href="#descricao-produto1" class="current" title="Descrição">Descrição</a></li>
                        <li class="nav-two"><a rel="nofollow" href="#descricao-produto2" title="Descrição 2">Descrição 2</a></li>
                        <li class="nav-two"><a rel="nofollow" href="#descricao-produto3" title="Descrição 3">Descrição 3</a></li>
                        <li class="nav-two"><a rel="nofollow" href="#descricao-produto4" title="Descrição 4">Descrição 4</a></li>
                    </ul>
                    <div id="descricao-produto1">
                        <h2>TESTE</h2>
                        <p>Testando abc 123 456</p>
                    </div>
                    <div id="descricao-produto2" class="hide">
                        <h2>TESTE2</h2>
                        <p>Testando abc 123 456</p>
                        <p>Testando abc 123 456</p>
                    </div>
                    <div id="descricao-produto3" class="hide">
                        <h2>TESTE3</h2>
                        <ul class="list">
                            <li>TESTE</li>
                            <li>TESTE2</li>
                            <li>TESTE3</li>
                        </ul>
                    </div>
                    <div id="descricao-produto4" class="hide">
                        <h2>TESTE4</h2>
                        <ul class="list">
                            <li>TESTE</li>
                            <li>TESTE2</li>
                            <li>TESTE3</li>
                        </ul>
                    </div>
                    </div><!-- #descricao-produto FIM ORGANIC TABS -->
                    <hr>
                    <p>--------------x--------------</p>
                    <h2>Organic Tabs Vertical</h2>
                    <div id="descricao-produto-vertical">  <!-- #descricao-produto INICIO ORGANIC TABS -->
                    <div class="col-4">
                        <ul class="nav">
                            <li class="nav-two"><a rel="nofollow" href="#descricao-produto-vertical1" class="current" title="Descrição">Descrição</a></li>
                            <li class="nav-two"><a rel="nofollow" href="#descricao-produto-vertical2" title="Descrição 2">Descrição 2</a></li>
                            <li class="nav-two"><a rel="nofollow" href="#descricao-produto-vertical3" title="Descrição 3">Descrição 3</a></li>
                            <li class="nav-two"><a rel="nofollow" href="#descricao-produto-vertical4" title="Descrição 4">Descrição 4</a></li>
                        </ul>
                    </div>
                    <div class="col-8">
                        <div id="descricao-produto-vertical1">
                            <h2>TESTE</h2>
                            <p>Testando abc 123 456</p>
                        </div>
                        <div id="descricao-produto-vertical2" class="hide">
                            <h2>TESTE2</h2>
                            <p>Testando abc 123 456</p>
                            <p>Testando abc 123 456</p>
                        </div>
                        <div id="descricao-produto-vertical3" class="hide">
                            <h2>TESTE3</h2>
                            <ul class="list">
                                <li>TESTE</li>
                                <li>TESTE2</li>
                                <li>TESTE3</li>
                            </ul>
                        </div>
                        <div id="descricao-produto-vertical4" class="hide">
                            <h2>TESTE4</h2>
                            <ul class="list">
                                <li>TESTE</li>
                                <li>TESTE2</li>
                                <li>TESTE3</li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"></div>
                    </div><!-- #descricao-produto FIM ORGANIC TABS -->
                    <br class="clear">
                </article>
            </section>
        </div>
    </main>
    </div><!-- .wrapper -->
    <? include('inc/footer.php');?>
    <!-- PARA FUNCIONAR O LINK TAB -->
    <script>
    $(function() {
    var hash = window.location.hash;
    var $a = jQuery('a[href=' + hash + ']');
    if($a.length>0){
    $a.click();
    }
    $("#descricao-produto").organicTabs();
    });
    </script>
    <!-- PARA FUNCIONAR O LINK TAB -->
    
</body>
</html>