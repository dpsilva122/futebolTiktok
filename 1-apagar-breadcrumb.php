<?
$h1         = 'Breadcrumb';
$title      = 'Breadcrumb';
$desc       = 'Breadcrumb';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var        = 'Breadcrumb';
include('inc/head.php');
?>
</head>
<body>
<? include('inc/topo.php');?>
<!-- <div class="wrapper"> REMOVER DIV WRAPPER -->
<main>
<div class="content">
    <section>
        
        <?=$caminhoBread?>
        <!-- <h1><?=$h1?></h1> REMOVER H1 -->
        <div class="wrapper"> <!-- COLOCAR AQUI A DIV WRAPPER -->
        
        <article class="full">
            
            <img src="<?=$url?>imagens/escrever-aqui-01.jpg" width="200" alt="<?=$h1?>" title="<?=$var?>" class="picture-right" />
            
            <p>Biografias costumam mostrar as pequenas histórias por trás de decisões que tiveram um grande impacto no mundo. Com In The Plex <a href="<?=$url?>links-patrocinados.php" title="<?=$h1?>">(sem edição em português)</a>, não é diferente, mas o biografado, no caso, é o Google. O mais recente livro do escritor e jornalista de tecnologia Steven Levy, que escreve na revista Wired, remonta os acontecimentos por trás da transformação do Google na maior empresa de internet – e por consequência, a transformação da própria web e da forma que interagimos por meio dela. </p>
            <p>Biografias costumam mostrar as pequenas histórias por trás de decisões que tiveram um grande impacto no mundo. Com In The Plex (sem edição em português), não é diferente, mas o biografado, no caso, é o Google. O mais recente livro do escritor e jornalista de tecnologia Steven Levy, que escreve na revista Wired, remonta os acontecimentos por trás da transformação do Google na maior empresa de internet – e por consequência, a transformação da própria web e da forma que interagimos por meio dela. </p>
            
            <br class="clear">
            
        </article>
        </div> <!-- DIV WRAPPER FECHAR AQUI -->
        
    </section>
</div>
</main>
<!-- </div> --><!-- .REMOVER FECHA wrapper -->
<? include('inc/footer.php');?>
</body>
</html>