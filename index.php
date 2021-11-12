<style>
.video-full {
width: 100%;
position: fixed;
right: 0;
bottom: 0;
min-width: 100%;
min-height: 100%;
}
.frame {
	position: absolute;
	z-index: 10;
	right: 3%;
	top: 40%
}

</style>
<a href="javascript:;" onclick="playVid()"  class="frame" id="frame">
<img src="imagens/play.png" >
</a>
<video id="video1" class="video-full" playsinline controlsList="nodownload">
<source src="https://vsh.r7.com/618af686c012adcc42000c5e/Futebol_TikTok_Apresentacao_previa_1080p.mp4" type="video/mp4">
</video>
<script type='text/javascript'>
document.getElementById('video1').addEventListener('ended',myHandler,false);
function myHandler(e) {
location.replace("<?=$url;?>home")
}

var vid = document.getElementById("video1");
function playVid() {
vid.play();
document.getElementById("frame").style.display = "none";
}
</script>