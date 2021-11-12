<?
$h1         = 'Modal';
$title      = 'Modal';
$desc       = 'Modal';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var        = 'Modal';
include('inc/head.php');
include('inc/fancy.php');
?>
<style>
#modalform {
background-color: #fefefe;
margin: auto;
padding: 20px;
border: 1px solid #888;
width: 50%;
}
#modalform form{
margin-top: 25px;
}
#modalform input, #modalform select, #modalform textarea{
display: block;
border: 1px solid #ccc;
width: 100%;
box-sizing: border-box;
padding: 5px;
margin: 5px 0;
}
#modalform .ir{
margin: 10px 0;
transition: .3s;
}
#modalform .ir:hover{
background: #2172b3;
color: #fff;
}
#modalform .obrigatorio{
font-size: 12px;
}
@media only screen and (max-width: 765px) {
#modalform{
width: 100%;
}
}
/*##########CSS PARA MODAL FORM###########3*/
</style>
<!-- ##############MODAL FORM PRECISA################# -->
<!--Google ReCaptcha V2-->
<script src='https://www.google.com/recaptcha/api.js'></script>
<!--/Google ReCaptcha V2-->
<link rel="stylesheet" href="<?= $url; ?>/js/sweetalert/css/sweetalert.css"/>
<script src="<?= $url; ?>/js/sweetalert/js/sweetalert.min.js"></script>
<!--SweetAlert Modal-->
<!--/SweetAlert Modal-->
<!--Máscara dos campos-->
<script src="<?= $url; ?>/js/maskinput.js"></script>
<script>
$(function () {
$('input[name="telefone"]').mask('(99) 99999-9999');
});
</script>
<!-- ##############MODAL FORM PRECISA################# -->
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
                    
                    
                    <h2>Modal Example</h2>
                    <!-- ########################### MODAL TEXTO ########################### -->
                    <br class="clear">
                    <a class="lightbox btn" data-src="#modal" href="javascript:;">
                        Open Modal Text
                    </a>
                    <div style="display: none;" id="modal">
                        <h2>Teste</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto in nisi vero omnis asperiores blanditiis commodi alias, id accusantium laborum et quibusdam, harum eveniet voluptas doloribus expedita eos sed. Ad?</p>
                    </div>
                    <!-- ########################### MODAL TEXTO ########################### -->
                    <!-- ########################### MODAL FORM ########################### -->
                    <?php
                    $post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
                    if (isset($post) && isset($post['EnviaContato'])):
                    
                    //Inclue o verificador de Spammers do formulário
                    include('inc/searchSpammer.inc.php');
                    
                    //Armazena o reCapcha
                    $recapt = $post['g-recaptcha-response'];
                    
                    //Remove o submit e o reCpatcha para validação de campos vazios
                    unset($post['EnviaContato'], $post['g-recaptcha-response']);
                    //Arquivos válidos que podem ser enviados
                    $MimeTypes = array(
                    'application/pdf',
                    'application/msword',
                    'application/vnd.ms-excel',
                    'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                    'application/x-excel',
                    'application/x-msexcel',
                    'image/png',
                    'image/pjpeg',
                    'image/jpeg',
                    'image/jpg',
                    'image/pjpeg',
                    'image/gif'
                    );
                    //Verifica se os campos obrigatórios foram todos preenchidos
                    if (in_array('', $post)):
                    echo '<script>'
                    . '$(function () {';
                    echo 'swal("Aviso!", "Campos com * são obrigatórios.", "info");';
                    echo '});'
                    . '</script>';
                    //Verifica se existem spammers nos campos do formulário
                    elseif (SearchSpammer($post)):
                    
                    //Inclui o emailFake, que fará a notificação aos adms do site
                    include('inc/emailFake.inc.php');
                    //Verifica se existe anexo para envio e se o anexo está na lista do MimeTypes
                    elseif (isset($_FILES['anexo']) && !empty($_FILES['anexo']['tmp_name']) && !in_array($_FILES['anexo']['type'], $MimeTypes)):
                    echo '<script>'
                    . '$(function () {';
                    echo 'swal("Aviso!", "Escolha um arquivo válido para enviar como anexo da mensagem", "info");';
                    echo '});'
                    . '</script>';
                    else:
                    //Caso as condições sejam atendidas, o reCaptcha volta para o post e o anexo é adicionado ao post
                    $post['g-recaptcha-response'] = $recapt;
                    $post['anexo'] = ($_FILES['anexo']['tmp_name'] ? $_FILES['anexo'] : null);
                    
                    //Arquivo que faz a verificação do reCaptcha e o envio dos e-mails
                    include('contato-envia.php');
                    endif;
                    endif;
                    ?>
                    
                    <!-- ########################### MODAL FORM ########################### -->
                    
                    <hr>
                    <a class="lightbox btn" data-src="#modalform" href="javascript:;">
                        Open Modal Form
                    </a>
                    <div style="display: none;" id="modalform">
                        <h2>Contato</h2>
                        <form enctype="multipart/form-data" method="post">
                            <label for="nome">Nome: <span>*</span> </label>
                            <input onKeyUp="UcWords(this)" type="text" name="nome" value="<?php
                            if (isset($post['nome'])): echo $post['nome'];
                            endif;
                            ?>" id="nome" required/>
                            <label for="email">E-mail: <span>*</span> </label>
                            <input onKeyUp="minusculas(this)" type="text" name="email" value="<?php
                            if (isset($post['email'])): echo $post['email'];
                            endif;
                            ?>" id="email" required/>
                            <label for="tel">Telefone: <span>*</span> </label>
                            <input type="text" name="telefone" value="<?php
                            if (isset($post['telefone'])): echo $post['telefone'];
                            endif;
                            ?>" id="tel" required/>
                            <!--                 <label for="anexo">Anexo:</label>
                            <input type="file" name="anexo" id="anexo"/> -->
                            <label>Como nos conheceu?: <span>*</span> </label>
                            <select name="como_nos_conheceu" required>
                                <option value="">-- Selecione --</option>
                                <option  value="Busca do Google">Busca do Google</option>
                                <option  value="Outros Buscadores">Outros Buscadores</option>
                                <option  value="Links patrocinados">Links patrocinados</option>
                                <option  value="Outros Anúncios">Outros Anúncios</option>
                                <option  value="Facebook">Facebook</option>
                                <option  value="Twitter">Twitter</option>
                                <option  value="Google+">Google+</option>
                                <option  value="Indicação">Indicação</option>
                                <option  value="Outros">Outros</option>
                            </select>
                            <label>Mensagem: <span>*</span> </label>
                            <textarea name="mensagem" rows="5" required><?php
                            if (isset($post['mensagem'])): echo $post['mensagem'];
                            endif;
                            ?></textarea>
                            <div class="g-recaptcha" data-sitekey="<?= $siteKey; ?>"></div>
                            <span class="bt-submit">
                                <input type="submit" name="EnviaContato" value="Enviar" class="ir" />
                            </span>
                        </form>
                        <span class="obrigatorio">Os campos com * são obrigatórios</span>
                    </div>
                </article>
            </section>
        </div>
    </main>
    </div><!-- .wrapper -->
    <? include('inc/footer.php');?>
</body>
</html>