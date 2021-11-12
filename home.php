<?
$h1         = 'Futebol 2022 - Tik Tok';
$title      = 'Futebol 2022 - Tik Tok';
$desc       = 'Futebol 2022 - Tik Tok';
$key        = '';
$var        = 'Home';
include('inc/head.php');
?>
</head>
<body class="bgBlack fadeIn">
<main>
	<div class="content">
		<section>
			<div class="wrapper">
				<div class="boxVideo">
					<!-- IMG Jornada -->
					<img src="<?=$url?>imagens/PARA1111.png" id="imgjornada" class="imgjornada fadeIn">
					<!--GIF's Prorrogação -->
					<img src="<?=$url?>imagens/prorrogacao/prorrogacao.gif" id="gifgpror1" class="gifgpror1 fadeIn">
					<!--GIF's Grande Final -->
					<img src="<?=$url?>imagens/grandeFinal/grande-final-pt1.gif" id="gifgfinal1" class="gifgfinal1 fadeIn">
					<img src="<?=$url?>imagens/grandeFinal/grande-final-pt2.gif" id="gifgfinal2" class="gifgfinal2 fadeIn">
					<img src="<?=$url?>imagens/grandeFinal/grande-final-pt3.gif" id="gifgfinal3" class="gifgfinal3 fadeIn">					
					<!--GIF's Após o Apito -->
					<!-- <img src="<?=$url?>imagens/aposOApito/apos-o-apito1.gif" id="gifapos1" class="gifapos1 fadeIn">
					<img src="<?=$url?>imagens/aposOApito/apos-o-apito2.gif" id="gifapos2" class="gifapos2 fadeIn">
					<img src="<?=$url?>imagens/aposOApito/apos-o-apito3.gif" id="gifapos3" class="gifapos3 fadeIn">
					<img src="<?=$url?>imagens/aposOApito/apos-o-apito4.gif" id="gifapos4" class="gifapos4 fadeIn">
					<img src="<?=$url?>imagens/aposOApito/apos-o-apito5.gif" id="gifapos5" class="gifapos5 fadeIn">
					<img src="<?=$url?>imagens/aposOApito/apos-o-apito6.gif" id="gifapos6" class="gifapos6 fadeIn">
					<img src="<?=$url?>imagens/aposOApito/apos-o-apito7.gif" id="gifapos7" class="gifapos7 fadeIn">
					<img src="<?=$url?>imagens/aposOApito/apos-o-apito8.gif" id="gifapos8" class="gifapos8 fadeIn">
					<img src="<?=$url?>imagens/aposOApito/apos-o-apito9.gif" id="gifapos9" class="gifapos9 fadeIn">
					<img src="<?=$url?>imagens/aposOApito/apos-o-apito10.gif" id="gifapos10" class="gifapos10 fadeIn">
					<img src="<?=$url?>imagens/aposOApito/apos-o-apito11.gif" id="gifapos11" class="gifapos11 fadeIn">
					<img src="<?=$url?>imagens/aposOApito/apos-o-apito12.gif" id="gifapos12" class="gifapos12 fadeIn">
					<img src="<?=$url?>imagens/aposOApito/apos-o-apito13.gif" id="gifapos13" class="gifapos13 fadeIn">
					<img src="<?=$url?>imagens/aposOApito/apos-o-apito14.gif" id="gifapos14" class="gifapos14 fadeIn"> -->
					<!--GIF's Concentração -->
					<img src="<?=$url?>imagens/concentracao/concentracao1.gif" id="gifconc1" class="gifconc1 fadeIn">
					<img src="<?=$url?>imagens/concentracao/concentracao2.gif" id="gifconc2" class="gifconc2 fadeIn">
					<img src="<?=$url?>imagens/concentracao/concentracao3.gif" id="gifconc3" class="gifconc3 fadeIn">
					<img src="<?=$url?>imagens/concentracao/concentracao4.gif" id="gifconc4" class="gifconc4 fadeIn">
					<!--GIF's Preparação -->
					<img src="<?=$url?>imagens/preparacao/goleiro.gif" id="gifprep1" class="gifprep1 fadeIn">
					<img src="<?=$url?>imagens/preparacao/corneteiro.gif" id="gifprep2" class="gifprep2 fadeIn">
					<img src="<?=$url?>imagens/preparacao/reserva2.gif" id="gifprep3" class="gifprep3 fadeIn">
					<img src="<?=$url?>imagens/preparacao/narrador2.gif" id="gifprep4" class="gifprep4 fadeIn">
					<!-- video principal -->
					<video id="video0" class="video-full" playsinline autoplay controlsList="nodownload">
                        <!-- <source src="https://vsh.r7.com/618af3dbc012adcc4200093c/Home_ApTikTok_Main_TESTE_1080p.mp4" type="video/mp4"> -->
						<source src="https://vsh.r7.com/618d94cc19d224ced60000cf/Home_ApTikTok_Main_TESTE4_1080p.mp4" type="video/mp4">
                    </video>
					<!-- video menor -->
					<!-- <video id="video1" class="video-full2" playsinline controls controlsList="nodownload" style="display: none;">
                        <source src="https://vsh.r7.com/5e303094416eb99dc1000a87/ASI_PROMO_IMPRENSA_high_modificado__1080p.mp4" type="video/mp4">
                    </video> -->
	                <a href="javascript:;" class="backArrow1" id="b1" onclick="v1()"><i class="fa fa-chevron-left fa-x3"></i></a>
	                <a href="javascript:;" class="nextArrow1" id="p1" onclick="playVideoAudio1()"><i class="fa fa-chevron-right fa-x3"></i></a>
					<a href="javascript:;" class="backArrow2" id="b2" onclick="v2()" style="display: none;"><i class="fa fa-chevron-left fa-x3"></i></a>
	                <a href="javascript:;" class="nextArrow2" id="p2" onclick="pauseVideoAudio1()" style="display: none;"><i class="fa fa-chevron-right fa-x3"></i></a>
					<a href="javascript:;" class="backArrow3" id="b3" onclick="v3()" style="display: none;"><i class="fa fa-chevron-left fa-x3"></i></a>
	                <a href="javascript:;" class="nextArrow3" id="p3" onclick="play()" style="display: none;"><i class="fa fa-chevron-right fa-x3"></i></a>
					<a href="javascript:;" class="backArrow4" id="b4" onclick="v4()" style="display: none;"><i class="fa fa-chevron-left fa-x3"></i></a>
	                <a href="javascript:;" class="nextArrow4" id="p4" onclick="play()" style="display: none;"><i class="fa fa-chevron-right fa-x3"></i></a>
					<a href="javascript:;" class="backArrow5" id="b5" onclick="v5()" style="display: none;"><i class="fa fa-chevron-left fa-x3"></i></a>
	                <a href="javascript:;" class="nextArrow5" id="p5" onclick="play()" style="display: none;"><i class="fa fa-chevron-right fa-x3"></i></a>
					<a href="javascript:;" class="backArrow6" id="b6" onclick="v6()" style="display: none;"><i class="fa fa-chevron-left fa-x3"></i></a>
	                <a href="javascript:;" class="nextArrow6" id="p6" onclick="play()" style="display: none;"><i class="fa fa-chevron-right fa-x3"></i></a>
					<a href="javascript:;" class="backArrow7" id="b7" onclick="v7()" style="display: none;"><i class="fa fa-chevron-left fa-x3"></i></a>
	                <a href="javascript:;" class="nextArrow7" id="p7" onclick="play()" style="display: none;"><i class="fa fa-chevron-right fa-x3"></i></a>
					<a href="javascript:;" class="backArrow8" id="b8" onclick="v8()" style="display: none;"><i class="fa fa-chevron-left fa-x3"></i></a>
	                <a href="javascript:;" class="nextArrow8" id="p8" onclick="play()" style="display: none;"><i class="fa fa-chevron-right fa-x3"></i></a>
					<a href="javascript:;" class="backArrow9" id="b9" onclick="v9()" style="display: none;"><i class="fa fa-chevron-left fa-x3"></i></a>
	                <a href="javascript:;" class="nextArrow9" id="p9" onclick="play()" style="display: none;"><i class="fa fa-chevron-right fa-x3"></i></a>
					<a href="javascript:;" class="backArrow10" id="b10" onclick="v10()" style="display: none;"><i class="fa fa-chevron-left fa-x3"></i></a>
	                <a href="javascript:;" class="nextArrow10" id="p10" onclick="play()" style="display: none;"><i class="fa fa-chevron-right fa-x3"></i></a>
					<a href="javascript:;" class="backArrow11" id="b11" onclick="v11()" style="display: none;"><i class="fa fa-chevron-left fa-x3"></i></a>
	                <a href="javascript:;" class="nextArrow11" id="p11" onclick="play()" style="display: none;"><i class="fa fa-chevron-right fa-x3"></i></a>
					<a href="javascript:;" class="backArrow12" id="b12" onclick="v12()" style="display: none;"><i class="fa fa-chevron-left fa-x3"></i></a>
	                <a href="javascript:;" class="nextArrow12" id="p12" onclick="play()" style="display: none;"><i class="fa fa-chevron-right fa-x3"></i></a>
					<a href="javascript:;" class="backArrow13" id="b13" onclick="v13()" style="display: none;"><i class="fa fa-chevron-left fa-x3"></i></a>
	                <a href="javascript:;" class="nextArrow13" id="p13" onclick="play()" style="display: none;"><i class="fa fa-chevron-right fa-x3"></i></a>
					<a href="javascript:;" class="backArrow14" id="b14" onclick="v14()" style="display: none;"><i class="fa fa-chevron-left fa-x3"></i></a>
	                <a href="javascript:;" class="nextArrow14" id="p14" onclick="play()" style="display: none;"><i class="fa fa-chevron-right fa-x3"></i></a>
					<a href="javascript:;" class="backArrow15" id="b15" onclick="v15()" style="display: none;"><i class="fa fa-chevron-left fa-x3"></i></a>
	                <a href="javascript:;" class="nextArrow15" id="p15" onclick="pauseVideoAudio2()" style="display: none;"><i class="fa fa-chevron-right fa-x3"></i></a>
					<a href="javascript:;" class="backArrow16" id="b16" onclick="v16()" style="display: none;"><i class="fa fa-chevron-left fa-x3"></i></a>
	                <a href="javascript:;" class="nextArrow16" id="p16" onclick="play()" style="display: none;"><i class="fa fa-chevron-right fa-x3"></i></a>
					<a href="javascript:;" class="backArrow17" id="b17" onclick="v17()" style="display: none;"><i class="fa fa-chevron-left fa-x3"></i></a>
	                <a href="javascript:;" class="nextArrow17" id="p17" onclick="play()" style="display: none;"><i class="fa fa-chevron-right fa-x3"></i></a>
					<a href="javascript:;" class="backArrow18" id="b18" onclick="v18()" style="display: none;"><i class="fa fa-chevron-left fa-x3"></i></a>
	                <a href="javascript:;" class="nextArrow18" id="p18" onclick="play()" style="display: none;"><i class="fa fa-chevron-right fa-x3"></i></a>
					<a href="javascript:;" class="homeDefault" onclick="defaultvid()"><img src="imagens/bus.png"></img></a>
					<a href="javascript:;" class="esquemaDefault" onclick="esquemadefaultvid()" id="esquemaDefault"><img src="imagens/tatico.png"></img></a>
					<!-- <a href="javascript:;" class="homeDefault" onclick="defaultvid()"><i class="fa fa-home fa-x3"></i></a> -->
					<!-- btn janela -->
					<a href="javascript:;" class="link1" id="hide1" style="display: none;" onclick="preparacao()"></a>
	                <a href="javascript:;" class="link2" id="hide2" style="display: none;" onclick="esquematact()"></a>
	                <a href="javascript:;" class="link3" id="hide3" style="display: none;" onclick="oportcobran()"></a>
	                <a href="javascript:;" class="link4" id="hide4" style="display: none;" onclick="nameR()"></a> 
					<!-- btn EsquemaTatico sub-itens -->
					<a href="javascript:;" class="link5" id="hide5" style="display: none;" onclick="concentracao()"></a>
	                <a href="javascript:;" class="link6" id="hide6" style="display: none;" onclick="aposOApito()"></a>
	                <a href="javascript:;" class="link7" id="hide7" style="display: none;" onclick="prorrogacao()"></a>
	                <a href="javascript:;" class="link8" id="hide8" style="display: none;" onclick="grandeFinal()"></a> 
              </div>
			</div>
		</section>
	</div>
	<!-- <button onclick="playPause()" class="btn btn-comecar animated fadeInUp"><img src="<?=$url?>imagens/icons/no-sound.png"></button> -->
	<audio controls loop hidden="true" id="music1">
		<source src="<?=$url?>audios/treino-de-futebol-preparacao.mp3" type="audio/mp3">
		<embed src="<?=$url?>audios/treino-de-futebol-preparacao.mp3"loop="true" hidden="true">
	</audio> 
	<audio controls loop hidden="true" id="music2">
		<source src="<?=$url?>audios/partida-de-futebol-esquema-tatico.mp3" type="audio/mp3">
		<embed src="<?=$url?>audios/partida-de-futebol-esquema-tatico.mp3" loop="true" hidden="true">
	</audio> 
	<audio controls loop hidden="true" id="music3">
		<source src="<?=$url?>audios/bar-cobranded.mp3" type="audio/mp3">
		<embed src="<?=$url?>audios/bar-cobranded.mp3" loop="true" hidden="true">
	</audio> 
	<audio controls loop hidden="true" id="music4">
		<source src="<?=$url?>audios/naming-rights-narracao.mp3" type="audio/mp3">
		<embed src="<?=$url?>audios/naming-rights-narracao.mp3" loop="true" hidden="true">
	</audio> 			
</main>
<? include('inc/timers.php');?>

<!-- MUSICA -->
<script>
var myVideo0 = document.getElementById("video0");
var backvid = document.getElementById("video0");
// MUSICA 1 - Treino de futebol - Preparação
var myMusic1 = document.getElementById("music1");

function playVideoAudio1(){
	myVideo0.play();
	myMusic1.play(); 
}
function pauseVideoAudio1(){
	myVideo0.play();
	myMusic1.pause(); 
	myMusic2.play(); 
}
function playVideoAudio2(){
	myVideo0.play();
	myMusic2.play(); 
}
function pauseVideoAudio2(){
	myVideo0.play();
	myMusic2.pause(); 
	myMusic3.play();
}
function playAudio() { 
    myMusic1.play(); 
} 
function pauseAudio() { 
    myMusic1.pause();  
} 
// MUSICA 2 - Partida de futebol - Esquama tatico
var myMusic2 = document.getElementById("music2");
function playAudio() { 
    myMusic2.play(); 
} 
function pauseAudio() { 
    myMusic2.pause();  
} 
// MUSICA 3 - Bar cobrand
var myMusic3 = document.getElementById("music3");
function playAudio() { 
    myMusic3.play(); 
} 
function pauseAudio() { 
    myMusic3.pause();  
} 
// MUSICA 4 - Naming rights - Narração
var myMusic4 = document.getElementById("music4");
function playAudio() { 
    myMusic4.play(); 
} 
function pauseAudio() { 
    myMusic4.pause();  
} 

// VIDEO
function play() {
myVideo0.play();
}
function pause() {
myVideo0.pause();
}
// BTN JANELA ----------------------------------------------------------------------
function preparacao(){
    myVideo0.play();//play porque é sequencia 
	myMusic1.play(); 
	myMusic2.pause(); 
}
function esquematact(){
    myVideo0.currentTime=29;
	myVideo0.play();
	myMusic2.play(); 
}
function oportcobran(){
    myVideo0.currentTime=112;
	myVideo0.play();
	myMusic2.pause(); 
	myMusic3.play(); 
}
function nameR(){
    // myVideo0.currentTime=116;
	// myVideo0.play();
	myMusic2.pause(); 
}
// BTN ESQUEMA
function concentracao(){
	myVideo0.play();//play porque é sequencia 
}
function aposOApito(){
    myVideo0.currentTime=45;
	myVideo0.play();
}
function grandeFinal(){
    myVideo0.currentTime=86;
	myVideo0.play();
}
function prorrogacao(){
    myVideo0.currentTime=95;
	myVideo0.play();
}
// BTN VOLTAR + HIDE GIF's
function defaultvid(){	
	backvid.currentTime=8;
	myVideo0.play();
	myMusic1.pause();
	myMusic2.pause();
	myMusic3.pause();
	myMusic4.pause();
	$("#hide5").hide();
	$("#hide6").hide();
	$("#hide7").hide();
	$("#hide8").hide();
	$("#esquemaDefault").hide();
	$("#gifprep1").hide();
	$("#gifprep2").hide();
	$("#gifprep3").hide();
	$("#gifprep4").hide();
	$("#gifconc1").hide();
    $("#gifconc2").hide();
    $("#gifconc3").hide();
 	$("#gifconc4").hide();	
    $("#gifapos1").hide();
    $("#gifapos2").hide();
    $("#gifapos3").hide();
    $("#gifapos4").hide();
    $("#gifapos5").hide();
    $("#gifapos6").hide();
    $("#gifapos7").hide();
    $("#gifapos8").hide();
    $("#gifapos9").hide();
    $("#gifapos10").hide();
    $("#gifapos11").hide();
    $("#gifapos12").hide();
    $("#gifapos13").hide();
    $("#gifapos14").hide();
	$("#gifgfinal1").hide();
    $("#gifgfinal2").hide();
    $("#gifgfinal3").hide();	
	$("#gifgpror1").hide();	
	$("#imgjornada").hide();	
}
// BTN VOLTAR PRO ESQUEMA + HIDE GIF's
function esquemadefaultvid(){	
	backvid.currentTime=30;
	myVideo0.play();
	$("#gifconc1").hide();
    $("#gifconc2").hide();
    $("#gifconc3").hide();
 	$("#gifconc4").hide();
	$("#gifapos1").hide();
    $("#gifapos2").hide();
    $("#gifapos3").hide();
    $("#gifapos4").hide();
    $("#gifapos5").hide();
    $("#gifapos6").hide();
    $("#gifapos7").hide();
    $("#gifapos8").hide();
    $("#gifapos9").hide();
    $("#gifapos10").hide();
    $("#gifapos11").hide();
    $("#gifapos12").hide();
    $("#gifapos13").hide();
    $("#gifapos14").hide();
	$("#gifgfinal1").hide();
    $("#gifgfinal2").hide();
    $("#gifgfinal3").hide();
	$("#gifgpror1").hide();	
	$("#imgjornada").hide();		
}
function v1(){
    backvid.currentTime=0;
	myVideo0.play();
	myMusic1.pause();
	myMusic2.pause();
	myMusic3.pause();
	myMusic4.pause();
	$("#hide1").hide();
	$("#hide2").hide();
	$("#hide3").hide();
	$("#hide4").hide();	
	$("#hide5").hide();
	$("#hide6").hide();
	$("#hide7").hide();
	$("#hide8").hide();	
	$("#esquemaDefault").hide();
	$("#gifprep1").hide();
	$("#gifprep2").hide();
	$("#gifprep3").hide();
	$("#gifprep4").hide();
	$("#gifconc1").hide();
    $("#gifconc2").hide();
    $("#gifconc3").hide();
 	$("#gifconc4").hide();
    $("#gifapos1").hide();
    $("#gifapos2").hide();
    $("#gifapos3").hide();
    $("#gifapos4").hide();
    $("#gifapos5").hide();
    $("#gifapos6").hide();
    $("#gifapos7").hide();
    $("#gifapos8").hide();
    $("#gifapos9").hide();
    $("#gifapos10").hide();
    $("#gifapos11").hide();
    $("#gifapos12").hide();
    $("#gifapos13").hide();
    $("#gifapos14").hide();
	$("#gifgfinal1").hide();
    $("#gifgfinal2").hide();
    $("#gifgfinal3").hide();
	$("#gifgpror1").hide();	
	$("#imgjornada").hide();	
}
function v2(){
	backvid.currentTime=14;
	myMusic1.pause(); 
	$("#hide5").hide();
	$("#hide6").hide();
	$("#hide7").hide();
	$("#hide8").hide();
	$("#esquemaDefault").hide();
	$("#gifprep1").hide();
	$("#gifprep2").hide();
	$("#gifprep3").hide();
	$("#gifprep4").hide();
	$("#gifconc1").hide();
    $("#gifconc2").hide();
    $("#gifconc3").hide();
 	$("#gifconc4").hide();
    $("#gifapos1").hide();
    $("#gifapos2").hide();
    $("#gifapos3").hide();
    $("#gifapos4").hide();
    $("#gifapos5").hide();
    $("#gifapos6").hide();
    $("#gifapos7").hide();
    $("#gifapos8").hide();
    $("#gifapos9").hide();
    $("#gifapos10").hide();
    $("#gifapos11").hide();
    $("#gifapos12").hide();
    $("#gifapos13").hide();
    $("#gifapos14").hide();
	$("#gifgfinal1").hide();
    $("#gifgfinal2").hide();
    $("#gifgfinal3").hide();
	$("#gifgpror1").hide();	
	$("#imgjornada").hide();	
}
function v3(){
	backvid.currentTime=23;
	myMusic2.pause(); 
	myMusic1.play();
	$("#hide5").hide();
	$("#hide6").hide();
	$("#hide7").hide();
	$("#hide8").hide();
	$("#esquemaDefault").hide();
	$("#gifconc1").hide();
    $("#gifconc2").hide();
    $("#gifconc3").hide();
 	$("#gifconc4").hide(); 
    $("#gifapos1").hide();
    $("#gifapos2").hide();
    $("#gifapos3").hide();
    $("#gifapos4").hide();
    $("#gifapos5").hide();
    $("#gifapos6").hide();
    $("#gifapos7").hide();
    $("#gifapos8").hide();
    $("#gifapos9").hide();
    $("#gifapos10").hide();
    $("#gifapos11").hide();
    $("#gifapos12").hide();
    $("#gifapos13").hide();
    $("#gifapos14").hide();
	$("#gifgfinal1").hide();
    $("#gifgfinal2").hide();
    $("#gifgfinal3").hide();
	$("#gifgpror1").hide();	
	$("#imgjornada").hide();	
}
function v4(){
    backvid.currentTime=33;
	$("#gifconc1").hide();
    $("#gifconc2").hide();
    $("#gifconc3").hide();
 	$("#gifconc4").hide();
    $("#gifapos1").hide();
    $("#gifapos2").hide();
    $("#gifapos3").hide();
    $("#gifapos4").hide();
    $("#gifapos5").hide();
    $("#gifapos6").hide();
    $("#gifapos7").hide();
    $("#gifapos8").hide();
    $("#gifapos9").hide();
    $("#gifapos10").hide();
    $("#gifapos11").hide();
    $("#gifapos12").hide();
    $("#gifapos13").hide();
    $("#gifapos14").hide();
	$("#gifgfinal1").hide();
    $("#gifgfinal2").hide();
    $("#gifgfinal3").hide();
	$("#gifgpror1").hide();	
	$("#imgjornada").hide();	
}
function v5(){
    backvid.currentTime=37;
    $("#gifapos1").hide();
    $("#gifapos2").hide();
    $("#gifapos3").hide();
    $("#gifapos4").hide();
    $("#gifapos5").hide();
    $("#gifapos6").hide();
    $("#gifapos7").hide();
    $("#gifapos8").hide();
    $("#gifapos9").hide();
    $("#gifapos10").hide();
    $("#gifapos11").hide();
    $("#gifapos12").hide();
    $("#gifapos13").hide();
    $("#gifapos14").hide();
	$("#gifgfinal1").hide();
    $("#gifgfinal2").hide();
    $("#gifgfinal3").hide();
	$("#gifgpror1").hide();	
	$("#imgjornada").hide();	
}
function v6(){
    backvid.currentTime=41;
	$("#gifapos1").hide();
    $("#gifapos2").hide();
    $("#gifapos3").hide();
    $("#gifapos4").hide();
    $("#gifapos5").hide();
    $("#gifapos6").hide();
    $("#gifapos7").hide();
    $("#gifapos8").hide();
    $("#gifapos9").hide();
    $("#gifapos10").hide();
    $("#gifapos11").hide();
    $("#gifapos12").hide();
    $("#gifapos13").hide();
    $("#gifapos14").hide();
	$("#gifgfinal1").hide();
    $("#gifgfinal2").hide();
    $("#gifgfinal3").hide();
	$("#gifgpror1").hide();	
	$("#imgjornada").hide();	
}
function v7(){
    backvid.currentTime=49;
	$("#gifgfinal1").hide();
    $("#gifgfinal2").hide();
    $("#gifgfinal3").hide();
	$("#gifgpror1").hide();	
	$("#imgjornada").hide();	
}
function v8(){
    backvid.currentTime=56;
	$("#gifgfinal1").hide();
    $("#gifgfinal2").hide();
    $("#gifgfinal3").hide();
	$("#gifgpror1").hide();	
	$("#imgjornada").hide();	
}
function v9(){
    backvid.currentTime=63;
	$("#gifgfinal1").hide();
    $("#gifgfinal2").hide();
    $("#gifgfinal3").hide();
	$("#gifgpror1").hide();	
	$("#imgjornada").hide();	
}
function v10(){
    backvid.currentTime=68;
	$("#gifgfinal1").hide();
    $("#gifgfinal2").hide();
    $("#gifgfinal3").hide();
	$("#gifgpror1").hide();	
	$("#imgjornada").hide();	
}
function v11(){
    backvid.currentTime=75;
	$("#gifgfinal1").hide();
    $("#gifgfinal2").hide();
    $("#gifgfinal3").hide();
	$("#gifgpror1").hide();	
	$("#imgjornada").hide();	
}
function v12(){
    backvid.currentTime=81;
	$("#gifgfinal1").hide();
    $("#gifgfinal2").hide();
    $("#gifgfinal3").hide();
	$("#gifgpror1").hide();	
	$("#imgjornada").hide();	
}
function v13(){
    backvid.currentTime=89;
	$("#gifgpror1").hide();	
	$("#imgjornada").hide();		
}
function v14(){
    backvid.currentTime=98;
	$("#imgjornada").hide();
}
function v15(){
    backvid.currentTime=104;
	myMusic2.pause(); 
	$("#imgjornada").hide();
}
function v16(){
    backvid.currentTime=108;
	myMusic3.pause();  
	$("#imgjornada").hide();
}
function v17(){
    backvid.currentTime=115;
	$("#imgjornada").hide();
}
function v18(){
    backvid.currentTime=118;
}
</script>
</body>
</html>