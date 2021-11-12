<?php
$h1     = 'Contato';
$title  = 'Contato';
$desc   = 'Entre em contato e envie sua mensagem pelo formulário e logo entraremos em contato. Qualquer dúvida estamos a disposição pelo email ou telefone';
$key    = '';
$var    = 'Contato';
include('inc/head.php');
?>
<!--Google ReCaptcha V2-->
<script src='https://www.google.com/recaptcha/api.js'></script>
<!--/Google ReCaptcha V2-->
<!--SweetAlert Modal-->
<link rel="stylesheet" href="<?= $url; ?>/js/sweetalert/css/sweetalert.css"/>
<script src="<?= $url; ?>/js/sweetalert/js/sweetalert.min.js"></script>
<!--/SweetAlert Modal-->
<!--Máscara dos campos-->
<script src="<?= $url; ?>/js/maskinput.js"></script>
<script>
$(function () {
$('input[name="telefone"]').mask('(99) 99999-9999');
$('input[name="cpf"]').mask('000.000.000-00');
$('input[name="cnpj"]').mask('00.000.000/0000-00');
});
</script>
<!--/Máscara dos campos-->
<script src="<?=$url?>js/organictabs.jquery.js" ></script>
<link rel="stylesheet" href="<?=$url?>css/organictabs.css">
</head>
<body>
<?php include('inc/topo.php'); ?>
<main class="wrapper">
  <div class="content">
    <section>
      <?= $caminho ?>
      <h1><?= $h1 ?></h1>
      <div class="container contact">
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


        <?php
        $post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if (isset($post) && isset($post['EnviaContato2'])):
        
        //Inclue o verificador de Spammers do formulário
        include('inc/searchSpammer.inc.php');
        
        //Armazena o reCapcha
        $recapt = $post['g-recaptcha-response'];
        
        //Remove o submit e o reCpatcha para validação de campos vazios
        unset($post['EnviaContato2'], $post['g-recaptcha-response']);
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
        <div class="form col-6 col-m-12">
          <div id="descricao-produto">  <!-- #descricao-produto INICIO ORGANIC TABS -->
          <ul class="nav">
            <li class="nav-two"><a rel="nofollow" href="#contato1" class="current" title="Pessoa Física">Pessoa Física</a></li>
            <li class="nav-two"><a rel="nofollow" href="#contato2" title="Pessoa Jurídica">Pessoa Jurídica</a></li>
          </ul>
          <div id="contato1">
            <h2>PESSOA FÍSICA</h2>
            <form enctype="multipart/form-data" method="post">
              <label>Nome: <span>*</span> </label>
              <input onKeyUp="UcWords(this)" type="text" name="nome" value="<?php
              if (isset($post['nome'])): echo $post['nome'];
              endif;
              ?>" required/>
               <label>CPF: <span>*</span> </label>
              <input onKeyUp="UcWords(this)" type="text" name="cpf" value="<?php
              if (isset($post['cpf'])): echo $post['cpf'];
              endif;
              ?>" required/>
              <label>E-mail: <span>*</span> </label>
              <input onKeyUp="minusculas(this)" type="text" name="email" value="<?php
              if (isset($post['email'])): echo $post['email'];
              endif;
              ?>" required/>
              <label>Telefone: <span>*</span> </label>
              <input type="text" name="telefone" value="<?php
              if (isset($post['telefone'])): echo $post['telefone'];
              endif;
              ?>" required/>
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
          <div id="contato2" class="hide">
            <h2>PESSOA JURÍDICA</h2>
            <form enctype="multipart/form-data" method="post">
              <label>Empresa: <span>*</span> </label>
              <input onKeyUp="UcWords(this)" type="text" name="empresa" value="<?php
              if (isset($post['empresa'])): echo $post['empresa'];
              endif;
              ?>" required/>
              <label>Nome: <span>*</span> </label>
              <input onKeyUp="UcWords(this)" type="text" name="nome" value="<?php
              if (isset($post['nome'])): echo $post['nome'];
              endif;
              ?>" required/>
               <label>CNPJ: <span>*</span> </label>
              <input onKeyUp="UcWords(this)" type="text" name="cnpj" value="<?php
              if (isset($post['cnpj'])): echo $post['cnpj'];
              endif;
              ?>" required/>
              <label>E-mail: <span>*</span> </label>
              <input onKeyUp="minusculas(this)" type="text" name="email" value="<?php
              if (isset($post['email'])): echo $post['email'];
              endif;
              ?>" required/>
              <label>Telefone: <span>*</span> </label>
              <input type="text" name="telefone" value="<?php
              if (isset($post['telefone'])): echo $post['telefone'];
              endif;
              ?>" required/>
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
                <input type="submit" name="EnviaContato2" value="Enviar" class="ir" />
              </span>
            </form>
            <span class="obrigatorio">Os campos com * são obrigatórios</span>
          </div>
          
          </div><!-- #descricao-produto FIM ORGANIC TABS -->
          
        </div>
        <div class="contact-form col-6 col-m-12">
          <h3><?= $nomeSite . " - " . $slogan ?></h3>
          <strong><?= $rua . " - " . $bairro . " - " . $cidade . "-" . $UF . " - " . $cep ?></strong><br><br>
          <strong><?= $ddd . " " . $fone ?></strong>
          <?php
          if (isset($fone2) && !empty($fone2)):
          echo "/ <strong> $ddd $fone2 </strong>";
          endif;
          if (isset($fone3) && !empty($fone3)):
          echo "/ <strong>$ddd $fone3</strong>";
          endif;
          ?>
          <br>
          <strong>Email: <?= $emailContato ?></strong><br><br>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3495.923373244281!2d-14.832908685351216!3d-28.811357281978587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjjCsDQ4JzQwLjkiUyAxNMKwNDknNTAuNiJX!5e0!3m2!1spt-BR!2sbr!4v1511449975232" height="350" style="border:0; width: 100%;"></iframe>
        </div>
      </div>
    </section>
  </div>
</main>
<?php include('inc/footer.php');?>
</body>
</html>