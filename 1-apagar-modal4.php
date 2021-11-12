<?
$h1         = 'Modal4';
$title      = 'Modal4';
$desc       = 'Modal4';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var        = 'Modal4';
include('inc/head.php');
include('inc/fancy.php');
include('inc/fancyquick.php');
?>
<style>
.quick-view-container {
background: rgba(10, 10, 10, .85);
}
.quick-view-content {
bottom: 0;
height: calc(100% - 40px);
left: 0;
margin: auto;
max-height: 650px;
max-width: 980px;
position: absolute;
right: 0;
top: 0;
width: calc(100% - 40px);
}
.quick-view-carousel {
background: #fff;
bottom: 0;
left: 0;
position: absolute;
right: 0;
top: 0;
width: 57%;
}
.quick-view-carousel .fancybox-stage {
bottom: 30px;
}
.quick-view-aside {
background: #fff;
bottom: 30px;
color: #777;
left: auto;
padding: 50px 0 30px 0;
position: absolute;
right: 0;
top: 30px;
width: 43%;
}
.quick-view-aside::before,
.quick-view-aside::after {
bottom: 0;
content: '';
left: 0;
position: absolute;
top: 0;
}
.quick-view-aside::before {
background: #f4f4f4;
width: 8px;
}
.quick-view-aside::after {
background: #e9e9e9;
width: 1px;
}
.quick-view-aside > div {
height: 100%;
overflow: auto;
padding: 5vh 30px 0 30px;
text-align: center;
}
.quick-view-aside > div > p {
font-size: 90%;
}
.quick-view-close {
background: #f0f0f0;
border: 0;
color: #222;
cursor: pointer;
font-family: Arial;
font-size: 14px;
height: 44px;
margin: 0;
padding: 0;
position: absolute;
right: 0;
text-indent: -99999px;
top: 30px;
transition: all .2s;
width: 44px;
}
.quick-view-close:hover {
background: #e4e4e4;
}
.quick-view-close::before,
.quick-view-close::after {
background-color: #222;
content: '';
height: 18px;
left: 22px;
position: absolute;
top: 12px;
width: 1px;
}
.quick-view-close:before {
-webkit-transform: rotate(-45deg);
-moz-transform: rotate(-45deg);
-ms-transform: rotate(-45deg);
-o-transform: rotate(-45deg);
transform: rotate(-45deg);
}
.quick-view-close:after {
-webkit-transform: rotate(45deg);
-moz-transform: rotate(45deg);
-ms-transform: rotate(45deg);
-o-transform: rotate(45deg);
transform: rotate(45deg);
}
.quick-view-bullets {
bottom: 0;
left: 0;
list-style: none;
margin: 0;
padding: 0;
position: absolute;
-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
text-align: center;
width: 100%;
z-index: 99999;
}
.quick-view-bullets li {
display: inline-block;
vertical-align: top;
}
.quick-view-bullets li a {
display: block;
height: 30px;
position: relative;
width: 20px;
}
.quick-view-bullets li a span {
background: #d4d2d2;
border-radius: 99px;
height: 10px;
left: 50%;
overflow: hidden;
position: absolute;
text-indent: -99999px;
top: 50%;
transform: translate(-50%, -50%);
width: 10px;
}
.quick-view-bullets li.active a span {
background: #2172b3;
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
                    
                    
                    <h2>Quick Product</h2>
                    
                    <p>
                        <a href="https://source.unsplash.com/W-jDdHeoSyY/1600x900" class="btn quick_view" data-fancybox="produto1" data-qw-form="qw-form-1">
                            Open demo
                        </a>
                        <span class="hidden">
                            <a class="quick_view" data-fancybox="produto1" href="https://source.unsplash.com/mbKApJz6RSU/1600x900">#2</a>
                            <a class="quick_view" data-fancybox="produto1" href="https://source.unsplash.com/G7sE2S4Lab4/1600x900">#3</a>
                        </span>
                    </p>
                    <div id="qw-form-1" class="hidden">
                        <h3>COMO FAZER FUNCIONAR?</h3>
                        <p>Trocar o data-qw-form precisa ser igual o id da div</p>
                        <p>
                            <button class="btn" data-fancybox-close="">Add to cart</button>
                        </p>
                    </div>
                    <hr>
                    <p>
                        <a href="<?=$url?>imagens/slider/aplicacoes.jpg" class="btn quick_view" data-fancybox="produto2" data-qw-form="qw-form-2">
                            Open demo
                        </a>
                        <span class="hidden">
                            <a class="quick_view" data-fancybox="produto2" href="<?=$url?>imagens/slider/bnds.jpg">#2</a>
                            <a class="quick_view" data-fancybox="produto2" href="<?=$url?>imagens/slider/cronograma.jpg">#3</a>
                        </span>
                    </p>
                    <div id="qw-form-2" class="hidden">
                        <h3>Some Fancy Dress</h3>
                        <p>
                            There should be a price tag and a brief description of the product.
                        </p>
                        <p>
                            Also, a form where customers could, for example, choose product size, color and quantity.
                        </p>
                        <p>
                            <button class="btn" data-fancybox-close="">Add to cart</button>
                        </p>
                    </div>
                    
                </article>
            </section>
        </div>
    </main>
    </div><!-- .wrapper -->
    <? include('inc/footer.php');?>
</body>
</html>