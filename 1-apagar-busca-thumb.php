<?
$h1         = 'Buscar Thumb';
$title      = 'Buscar Thumb';
$desc       = 'Buscar Thumb';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var        = 'Buscar Thumb';
include('inc/head.php');
include('inc/fancy.php');
?>
<link rel="stylesheet" href="<?= $url; ?>/js/sweetalert/css/sweetalert.css">
<script src="<?= $url; ?>/js/sweetalert/js/sweetalert.min.js"></script>
</head>
<body <?php if (!empty($_POST['busca'])) {echo 'onload="SearchFunction()"';} ?>>
<? include('inc/topo.php');?>
<div class="wrapper">
    <main>
        <div class="content">
            <section>
                <?=$caminho?>
                <h1><?=$h1?></h1>
                <article class="full">
                    <input type="text" id="inputsearch" placeholder="Buscar..." class="busca" onkeypress="if(event.key === 'Enter'){SearchFunction();}" value="<?php echo $_POST['busca']; ?>">
                    <input type="button" onclick="SearchFunction();" value="Buscar" class="btn">
                    <input type="button" onclick="SearchFunction2(); document.getElementById('inputsearch').value=''" value="Limpar" class="btn">
                    <br>
                    <br>
                    <div id="conta_resultado"></div>
                    <ul class="thumbnails" id="searchthumb">
                        <li>
                            <a rel="nofollow" href="<?=$url;?>acai" title="Açaí">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Açaí" title="Açaí">
                            </a>
                            <h2><a href="<?=$url;?>acai" title="Açaí">Açaí</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>acerola" title="Acerola">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Acerola" title="Acerola">
                            </a>
                            <h2><a href="<?=$url;?>acerola" title="Acerola">Acerola</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>abacate" title="Abacate">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Abacate" title="Abacate">
                            </a>
                            <h2><a href="<?=$url;?>abacate" title="Abacate">Abacate</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>abacaxi" title="Abacaxi">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Abacaxi" title="Abacaxi">
                            </a>
                            <h2><a href="<?=$url;?>abacaxi" title="Abacaxi">Abacaxi</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>ameixa" title="Ameixa">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Ameixa" title="Ameixa">
                            </a>
                            <h2><a href="<?=$url;?>ameixa" title="Ameixa">Ameixa</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>amendoa" title="Amêndoa">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Amêndoa" title="Amêndoa">
                            </a>
                            <h2><a href="<?=$url;?>amendoa" title="Amêndoa">Amêndoa</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>amora" title="Amora">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Amora" title="Amora">
                            </a>
                            <h2><a href="<?=$url;?>amora" title="Amora">Amora</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>anona" title="Anona">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Anona" title="Anona">
                            </a>
                            <h2><a href="<?=$url;?>anona" title="Anona">Anona</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>araticum" title="Araticum">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Araticum" title="Araticum">
                            </a>
                            <h2><a href="<?=$url;?>araticum" title="Araticum">Araticum</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>babaco" title="Babaço">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Babaço" title="Babaço">
                            </a>
                            <h2><a href="<?=$url;?>babaco" title="Babaço">Babaço</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>banana" title="Banana">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Banana" title="Banana">
                            </a>
                            <h2><a href="<?=$url;?>banana" title="Banana">Banana</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>berinjela" title="Berinjela">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Berinjela" title="Berinjela">
                            </a>
                            <h2><a href="<?=$url;?>berinjela" title="Berinjela">Berinjela</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>bacuripari" title="Bacuripari">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Bacuripari" title="Bacuripari">
                            </a>
                            <h2><a href="<?=$url;?>bacuripari" title="Bacuripari">Bacuripari</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>caja" title="Cajá">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Cajá" title="Cajá">
                            </a>
                            <h2><a href="<?=$url;?>caja" title="Cajá">Cajá</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>caju" title="Caju">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Caju" title="Caju">
                            </a>
                            <h2><a href="<?=$url;?>caju" title="Caju">Caju</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>caqui" title="Caqui">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Caqui" title="Caqui">
                            </a>
                            <h2><a href="<?=$url;?>caqui" title="Caqui">Caqui</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>cambuci" title="Cambuci">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Cambuci" title="Cambuci">
                            </a>
                            <h2><a href="<?=$url;?>cambuci" title="Cambuci">Cambuci</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>carambola" title="Carambola">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Carambola" title="Carambola">
                            </a>
                            <h2><a href="<?=$url;?>carambola" title="Carambola">Carambola</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>cereja" title="Cereja">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Cereja" title="Cereja">
                            </a>
                            <h2><a href="<?=$url;?>cereja" title="Cereja">Cereja</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>coco" title="Coco">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Coco" title="Coco">
                            </a>
                            <h2><a href="<?=$url;?>coco" title="Coco">Coco</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>cupuacu" title="Cupuaçu">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Cupuaçu" title="Cupuaçu">
                            </a>
                            <h2><a href="<?=$url;?>cupuacu" title="Cupuaçu">Cupuaçu</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>cacau" title="Cacau">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Cacau" title="Cacau">
                            </a>
                            <h2><a href="<?=$url;?>cacau" title="Cacau">Cacau</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>castanha-para" title="Castanha do Pará">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Castanha do Pará" title="Castanha do Pará">
                            </a>
                            <h2><a href="<?=$url;?>castanha-para" title="Castanha do Pará">Castanha do Pará</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>damasco" title="Damasco">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Damasco" title="Damasco">
                            </a>
                            <h2><a href="<?=$url;?>damasco" title="Damasco">Damasco</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>figo" title="Figo">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Figo" title="Figo">
                            </a>
                            <h2><a href="<?=$url;?>figo" title="Figo">Figo</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>framboesa" title="Framboesa">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Framboesa" title="Framboesa">
                            </a>
                            <h2><a href="<?=$url;?>framboesa" title="Framboesa">Framboesa</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>goiaba" title="Goiaba">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Goiaba" title="Goiaba">
                            </a>
                            <h2><a href="<?=$url;?>goiaba" title="Goiaba">Goiaba</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>graviola" title="Graviola">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Graviola" title="Graviola">
                            </a>
                            <h2><a href="<?=$url;?>graviola" title="Graviola">Graviola</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>groselha" title="Groselha">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Groselha" title="Groselha">
                            </a>
                            <h2><a href="<?=$url;?>groselha" title="Groselha">Groselha</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>guarana" title="Guaraná">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Guaraná" title="Guaraná">
                            </a>
                            <h2><a href="<?=$url;?>guarana" title="Guaraná">Guaraná</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>inga" title="Ingá">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Ingá" title="Ingá">
                            </a>
                            <h2><a href="<?=$url;?>inga" title="Ingá">Ingá</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>jabuticaba" title="Jabuticaba">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Jabuticaba" title="Jabuticaba">
                            </a>
                            <h2><a href="<?=$url;?>jabuticaba" title="Jabuticaba">Jabuticaba</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>jaca" title="Jaca">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Jaca" title="Jaca">
                            </a>
                            <h2><a href="<?=$url;?>jaca" title="Jaca">Jaca</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>jambo" title="Jambo">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Jambo" title="Jambo">
                            </a>
                            <h2><a href="<?=$url;?>jambo" title="Jambo">Jambo</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>jambolao" title="Jambolão">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Jambolão" title="Jambolão">
                            </a>
                            <h2><a href="<?=$url;?>jambolao" title="Jambolão">Jambolão</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>laranja" title="Laranja">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Laranja" title="Laranja">
                            </a>
                            <h2><a href="<?=$url;?>laranja" title="Laranja">Laranja</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>limao" title="Limão">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Limão" title="Limão">
                            </a>
                            <h2><a href="<?=$url;?>limao" title="Limão">Limão</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>melancia" title="Melancia">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Melancia" title="Melancia">
                            </a>
                            <h2><a href="<?=$url;?>melancia" title="Melancia">Melancia</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>melao" title="Melão">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Melão" title="Melão">
                            </a>
                            <h2><a href="<?=$url;?>melao" title="Melão">Melão</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>maca" title="Maçã">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Maçã" title="Maçã">
                            </a>
                            <h2><a href="<?=$url;?>maca" title="Maçã">Maçã</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>manga" title="Manga">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Manga" title="Manga">
                            </a>
                            <h2><a href="<?=$url;?>manga" title="Manga">Manga</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>mamao" title="Mamão">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Mamão" title="Mamão">
                            </a>
                            <h2><a href="<?=$url;?>mamao" title="Mamão">Mamão</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>maracuja" title="Maracujá">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Maracujá" title="Maracujá">
                            </a>
                            <h2><a href="<?=$url;?>maracuja" title="Maracujá">Maracujá</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>marmelo" title="Marmelo">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Marmelo" title="Marmelo">
                            </a>
                            <h2><a href="<?=$url;?>marmelo" title="Marmelo">Marmelo</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>mexerica" title="Mexerica">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Mexerica" title="Mexerica">
                            </a>
                            <h2><a href="<?=$url;?>mexerica" title="Mexerica">Mexerica</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>mirtilo" title="Mirtilo">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Mirtilo" title="Mirtilo">
                            </a>
                            <h2><a href="<?=$url;?>mirtilo" title="Mirtilo">Mirtilo</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>morango" title="Morango">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Morango" title="Morango">
                            </a>
                            <h2><a href="<?=$url;?>morango" title="Morango">Morango</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>nectarina" title="Nectarina">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Nectarina" title="Nectarina">
                            </a>
                            <h2><a href="<?=$url;?>nectarina" title="Nectarina">Nectarina</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>noni" title="Noni">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Noni" title="Noni">
                            </a>
                            <h2><a href="<?=$url;?>noni" title="Noni">Noni</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>pinha" title="Pinha">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Pinha" title="Pinha">
                            </a>
                            <h2><a href="<?=$url;?>pinha" title="Pinha">Pinha</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>pequi" title="Pequi">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Pequi" title="Pequi">
                            </a>
                            <h2><a href="<?=$url;?>pequi" title="Pequi">Pequi</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>pera" title="Pera">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Pera" title="Pera">
                            </a>
                            <h2><a href="<?=$url;?>pera" title="Pera">Pera</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>pessego" title="Pêssego">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Pêssego" title="Pêssego">
                            </a>
                            <h2><a href="<?=$url;?>pessego" title="Pêssego">Pêssego</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>pitanga" title="Pitanga">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Pitanga" title="Pitanga">
                            </a>
                            <h2><a href="<?=$url;?>pitanga" title="Pitanga">Pitanga</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>pitaia" title="Pitaia">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Pitaia" title="Pitaia">
                            </a>
                            <h2><a href="<?=$url;?>pitaia" title="Pitaia">Pitaia</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>quiui" title="Quiuí">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Quiuí" title="Quiuí">
                            </a>
                            <h2><a href="<?=$url;?>quiui" title="Quiuí">Quiuí</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>roma" title="Romã">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Romã" title="Romã">
                            </a>
                            <h2><a href="<?=$url;?>roma" title="Romã">Romã</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>sapoti" title="Sapoti">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Sapoti" title="Sapoti">
                            </a>
                            <h2><a href="<?=$url;?>sapoti" title="Sapoti">Sapoti</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>tamarindo" title="Tamarindo">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Tamarindo" title="Tamarindo">
                            </a>
                            <h2><a href="<?=$url;?>tamarindo" title="Tamarindo">Tamarindo</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>tangerina" title="Tangerina">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Tangerina" title="Tangerina">
                            </a>
                            <h2><a href="<?=$url;?>tangerina" title="Tangerina">Tangerina</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>tomate" title="Tomate">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Tomate" title="Tomate">
                            </a>
                            <h2><a href="<?=$url;?>tomate" title="Tomate">Tomate</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>umbu" title="Umbu">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Umbu" title="Umbu">
                            </a>
                            <h2><a href="<?=$url;?>umbu" title="Umbu">Umbu</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>uva" title="Uva">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Uva" title="Uva">
                            </a>
                            <h2><a href="<?=$url;?>uva" title="Uva">Uva</a></h2>
                        </li>
                        <li>
                            <a rel="nofollow" href="<?=$url;?>uva-verde" title="Uva verde">
                                <img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Uva verde" title="Uva verde">
                            </a>
                            <h2><a href="<?=$url;?>uva-verde" title="Uva verde">Uva verde</a></h2>
                        </li>
                    </ul>
                    <br class="clear">
                </article>
            </section>
        </div>
    </main>
</div>
<? include('inc/footer.php');?>
<script>
function SearchFunction() {
var input, filter, ul, li, a, i;
input = document.getElementById("inputsearch");
filter = input.value.toUpperCase().trim();
ul = document.getElementById("searchthumb");
li = ul.getElementsByTagName("li");
cont = 0;
for (i = 0; i < li.length; i++) {
a = li[i].getElementsByTagName("a")[1];
if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
li[i].style.display = "";
cont = cont + 1 ;
} else {
li[i].style.display = "none";
}
}
if (((li.length) != (cont)) && (cont > 0)) {
document.getElementById("conta_resultado").innerHTML = '<h2>Encontramo(s) '+cont+' resultado(s) por: '+input.value+'</h2>';
}
if ((li.length) == (cont)){
swal({title: "Digite alguma coisa para buscar...",
showCancelButton: false,
confirmButtonClass: "btn-success",
confirmButtonText: "Ok",
closeOnConfirm: true});
document.getElementById("conta_resultado").innerHTML = '';
document.getElementById('inputsearch').value='';
}
else if (cont == 0) {
swal({title: "Desculpe, não encontramos nenhum resultado por: "+input.value,
showCancelButton: false,
confirmButtonClass: "btn-success",
confirmButtonText: "Ok",
closeOnConfirm: true});
ul = document.getElementById("searchthumb");
li = ul.getElementsByTagName("li");
for (i = 0; i < li.length; i++) {
li[i].style.display = "";
}
document.getElementById('inputsearch').value='';
document.getElementById("conta_resultado").innerHTML = '';
}
document.getElementById('inputsearch').focus();
}
function SearchFunction2() {
ul = document.getElementById("searchthumb");
li = ul.getElementsByTagName("li");
for (i = 0; i < li.length; i++) {
li[i].style.display = "";
}
document.getElementById('inputsearch').focus();
document.getElementById("conta_resultado").innerHTML = '';
}
</script>
</body>
</html>