<?
$h1         = 'Organictabs Thumbnails';
$title      = $h1;
$desc       = 'Empresa';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
include('inc/head.php');
include('inc/fancy.php');
?>
<!-- ******PRECISA PARA FUNCIONAR****** -->
<script src="<?=$url?>js/organictabs.jquery.js" ></script>
<link rel="stylesheet" href="<?=$url?>css/organictabs.css">
<!-- ******FIM PRECISA PARA FUNCIONAR****** -->
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
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae sapiente, et. Animi itaque, totam voluptate earum eligendi eaque eius repudiandae delectus in aliquam eos, et obcaecati atque adipisci quaerat dolores?</p>

          <?php
          //DEFINA AQUI AS VARIAVEIS
          $img = 'imagem';
          $pasta = 'imagens/teste/';
          $qntd = 8;
          $qntd_itens = 4;// qntd de itens por tab


          $names = array(
            1 => "Thumbnails 1",
            "Thumbnails 2",
            "Thumbnails 3",
            "Thumbnails 4",
            "Thumbnails 5",
            "Thumbnails 6",
            "Thumbnails 7",
            "Thumbnails 8"
          );          


          // DEFINE MESMO NOME PARA TODAS AS THUMBS
          // $names = array(
          //   "definir-pra-todos" => "Organictabs Thumbnails"
          // );

          include 'inc/classes/organicThumbnails.php';
          echo organicThumbnails($pasta, $img, $qntd, $qntd_itens, $names, $url, $h1);
          ?>
          
          <br class="clear" />
        </article>
        
      </section>
    </div>
  </main>
  </div><!-- .wrapper -->
  <? include('inc/footer.php');?>
</body>
</html>