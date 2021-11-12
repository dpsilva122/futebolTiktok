<?
$h1       = 'Informações';
$title    = 'Informações';
$desc     = 'xxxxxxxxxxxxx';
$key      = 'yyyyyyyy, xxxxxxxxx, zzzzzzzzzz';
$var    = 'Informação';
include('inc/head.php');
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
          <? include('inc/social-media.php');?>
          <section itemscope itemtype="http://schema.org/Service">
            <h2>Conheça todas as Informações da <?=$nomeSite.' '.$slogan?>:</h2>
            <ul class="thumbnails">
              <li>
                <a rel="nofollow" href="<?=$url;?>" title="Links Patrocinados"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Links Patrocinados" title="Links Patrocinados"/></a>
                <h2><a href="<?=$url;?>" title="Links Patrocinados">Links Patrocinados</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>" title="SEO"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="SEO" title="SEO"/></a>
                <h2><a href="<?=$url;?>" title="SEO">SEO</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>" title="Email Marketing"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Email Marketing" title="Email Marketing"/></a>
                <h2><a href="<?=$url;?>" title="Email Marketing">Email Marketing</a></h2>
              </li>
              <li>
                <a rel="nofollow" href="<?=$url;?>" title="Redes Sociais"><img src="<?=$url;?>imagens/escrever-aqui-01.jpg" alt="Redes Sociais" title="Redes Sociais"/></a>
                <h2><a href="<?=$url;?>" title="Redes Sociais">Redes Sociais</a></h2>
              </li>
            </ul>
          </section>
        </article>
      </section>
    </div>
  </main>
</div>
<? include('inc/footer.php');?>
</body>
</html>