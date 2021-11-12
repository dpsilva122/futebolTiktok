<p class="txtcenter"><a href="<?=$url?>contato" class="btn" title="Solicite um orçamento" rel="nofollow">Solicite um orçamento</a></p>
<aside>
    <?php
    if(isset($paginaFacebook) && !empty($paginaFacebook) ){
    echo "
    <div class=\"fb-page\" data-href=\"http://www.facebook.com/$paginaFacebook\" data-small-header=\"false\" data-adapt-container-width=\"true\" data-hide-cover=\"false\" data-show-facepile=\"false\" data-show-posts=\"false\"><div class=\"fb-xfbml-parse-ignore\"><blockquote cite=\"http://www.facebook.com/$paginaFacebook\"><a href=\"http://www.facebook.com/$paginaFacebook\">$nomeSite</a></blockquote></div></div>
    ";
    }
    ?>
    <h2><a href="<?=$url?>informacoes" title="Informações <?=$nomeSite?>">Informações</a></h2>
    <nav>
        <ul>
            <? include('inc/sub-menu.php');?>
        </ul>
    </nav>
    <?php
    if(isset($fone2) || isset($fone3)){
    echo "<h3>Entre em contato pelos telefones</h3>";
    } else {
    echo "<h3>Entre em contato pelo telefone</h3>";
    }
    ?>
    <p><a href="tel:<?=$ddd.$fone?>" title="Clique e Ligue"><strong><?=$ddd." ".$fone?></strong></a>
    <?php
    if(isset($fone2) && !empty($fone2)) { echo "<br> <a href=\"tel:$ddd$fone2\" title=\"Clique e Ligue\"><strong>$ddd $fone2</strong></a>";}
    if(isset($fone3) && !empty($fone3)) { echo "<br> <a href=\"tel:$ddd$fone3\" title=\"Clique e Ligue\"><strong>$ddd $fone3</strong></a>";}
    ?>
</aside>