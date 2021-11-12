<?
$h1         = 'Fancy';
$title      = 'Fancy';
$desc       = 'Fancy';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var        = 'Fancy';
include('inc/head.php');
include('inc/fancy.php');
include('inc/fancymorph.php');
include('inc/fancycustom.php');
include('inc/fancyquick.php');
?>

<style>
.lightbox img{
width: 150px;
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
					<a href="<?=$url?>imagens/teste/imagem-01.jpg" class="lightbox" data-fancybox="galeria" data-caption="Descrição da Imagem">
						<img src="<?=$url?>imagens/teste/imagem-01.jpg" alt="<?=$h1?>" />
					</a>
					<a href="<?=$url?>imagens/teste/imagem-02.jpg" class="lightbox" data-fancybox="galeria" data-caption="Descrição da Imagem">
						<img src="<?=$url?>imagens/teste/imagem-02.jpg" alt="<?=$h1?>" />
					</a>
					
					
					<hr>
					<h2>Youtube</h2>
					<a data-fancybox="video" class="lightbox" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
						<img src="https://img.youtube.com/vi/_sI_Ps7JSEk/mqdefault.jpg">
					</a>
					<a data-fancybox="video" class="lightbox" data-width="640" data-height="360" data-small-btn="true" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk">
						<img src="https://img.youtube.com/vi/_sI_Ps7JSEk/mqdefault.jpg">
					</a>
					
					<hr>
					<h2>Vimeo</h2>
					<a data-fancybox="vimeo" class="lightbox" data-ratio="2" href="https://vimeo.com/191947042">
						<img src="https://i.vimeocdn.com/video/604514162_640.jpg">
					</a>
					<hr>
					<h2>HTML LOCAL VIDEO</h2>
					<a data-fancybox="local" class="lightbox" data-width="640" data-height="360" href="http://download.blender.org/peach/bigbuckbunny_movies/BigBuckBunny_320x180.mp4">
						<img src="https://peach.blender.org/wp-content/uploads/bird1.jpg">
					</a>
					<hr>
					<a class="lightbox btn" data-src="#hello" href="javascript:;" class="btn btn-primary">
						Open demo
					</a>
					<div style="display: none;" id="hello">
						<h2>
						Hello!
						</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto in nisi vero omnis asperiores blanditiis commodi alias, id accusantium laborum et quibusdam, harum eveniet voluptas doloribus expedita eos sed. Ad?</p>
						
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3495.923373244281!2d-14.832908685351216!3d-28.811357281978587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjjCsDQ4JzQwLjkiUyAxNMKwNDknNTAuNiJX!5e0!3m2!1spt-BR!2sbr!4v1511449975232" height="350" style="border:0; width: 100%;"></iframe>
					</div>
					<br>
					
					<hr>
					<h2>Morphing modal overlay</h2>
					<p>
						<span class="morphing-btn-wrap" style="width: 111.422px;"><a data-morphing="" id="morphing" data-src="#morphing-content" href="javascript:;" class="btn btn-primary morphing-btn" style="width: 111.422px;">
							Open demo
							</a></span><div class="morphing-btn-clone" style="top: -576.922px; left: -89.7201px; width: 2028.85px; height: 1881px; transform: scale(0.0175439); display: none;"></div>
						</p>
						<div id="morphing-content" style="display: none;">
							<h2>Teste</h2>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor nibh eu nibh scelerisque malesuada. Morbi mollis
								eleifend turpis. Mauris consequat convallis volutpat. Integer quis erat vehicula, molestie
								nulla vel, sagittis odio. Quisque hendrerit eleifend magna, sit amet dictum odio condimentum
								a. Proin et ipsum venenatis, elementum sem convallis, pellentesque elit. Mauris congue
								velit porttitor dui condimentum porttitor. Aenean pretium suscipit ante in imperdiet.
							</p>
							<img src="<?=$url?>imagens/escrever-aqui-01.jpg" alt="">
							<p>
								Nam vitae suscipit metus, eget volutpat quam. Ut et sem nunc. Vivamus erat leo, auctor in neque non, malesuada consectetur
								neque. Ut ac purus est. Quisque molestie pharetra sem sit amet ornare. Nam eu felis in
								nisl lacinia iaculis. Pellentesque ut lobortis lacus. Etiam ut eros non dui ultrices
								imperdiet.
							</p>
							<p>
								Ut pulvinar sem gravida porta ullamcorper. Pellentesque laoreet tellus eu egestas tempor. Ut nec lobortis nulla. Aenean tincidunt
								eu eros eget tincidunt. Vivamus ac lacinia mi, ut varius justo. Praesent eu ante vel
								velit iaculis aliquam sit amet vestibulum purus. Fusce molestie enim eros. Pellentesque
								justo sem, pharetra vel ligula non, euismod elementum tortor. Morbi dui ligula, rhoncus
								nec dignissim a, malesuada feugiat massa.
							</p>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3495.923373244281!2d-14.832908685351216!3d-28.811357281978587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjjCsDQ4JzQwLjkiUyAxNMKwNDknNTAuNiJX!5e0!3m2!1spt-BR!2sbr!4v1511449975232" height="350" style="border:0; width: 100%;"></iframe>
							<p>
								Cras non lobortis mauris. Maecenas id placerat est, ac lobortis nisi. Aenean dapibus arcu commodo magna tristique, et facilisis
								diam aliquam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
								ridiculus mus. Fusce a vestibulum erat, nec ornare libero. Proin aliquam, neque vel mattis
								euismod, tortor lacus tempus turpis, ac vulputate augue nisl eget sem. Integer in porttitor
								mauris.
							</p>
						</div>
						
						<hr>
						<h2>Customized layout</h2>
						<p>
							<a href="https://source.unsplash.com/UikiQcZ-fB4/1600x900" class="btn btn-primary" data-fancybox="cl-group" data-thumb="https://source.unsplash.com/UikiQcZ-fB4/100x75">
								Open demo
							</a>
						</p>
						<div>
							<a data-fancybox="cl-group" data-thumb="https://source.unsplash.com/mbKApJz6RSU/100x75" href="https://source.unsplash.com/W-jDdHeoSyY/1600x900"></a>
							<a data-fancybox="cl-group" data-thumb="https://source.unsplash.com/mbKApJz6RSU/100x75" href="https://source.unsplash.com/mbKApJz6RSU/1600x900"></a>
							<a data-fancybox="cl-group" data-thumb="https://source.unsplash.com/JIUjvqe2ZHg/100x75" href="https://source.unsplash.com/JIUjvqe2ZHg/1600x900"></a>
							<a data-fancybox="cl-group" data-thumb="https://source.unsplash.com/G7sE2S4Lab4/100x75" href="https://source.unsplash.com/G7sE2S4Lab4/1600x900"></a>
							<a data-fancybox="cl-group" data-thumb="https://source.unsplash.com/IEkMMvdZFc0/100x75" href="https://source.unsplash.com/IEkMMvdZFc0/1600x900"></a>
						</div>
						<hr>
						<h2>Quick Product</h2>
						
						<p>
							<a href="https://source.unsplash.com/W-jDdHeoSyY/1600x900" class="btn btn-primary quick_view" data-fancybox="quick-view" data-qw-form="qw-form-1">
								Open demo
							</a>
							<span class="hidden">
								<a class="quick_view" data-fancybox="quick-view" href="https://source.unsplash.com/mbKApJz6RSU/1600x900">#2</a>
								<a class="quick_view" data-fancybox="quick-view" href="https://source.unsplash.com/G7sE2S4Lab4/1600x900">#3</a>
							</span>
						</p>
						<div id="qw-form-1" class="hidden">
							<h3>Some Fancy Dress</h3>
							<p>
								There should be a price tag and a brief description of the product.
							</p>
							<p>
								Also, a form where customers could, for example, choose product size, color and quantity.
							</p>
							<p>
								<button class="btn btn-primary" data-fancybox-close="">Add to cart</button>
							</p>
						</div>
						
						
						<br class="clear">
						
						<br class="clear">
					</article>
				</section>
			</div>
		</main>
	</div>
	<? include('inc/footer.php');?>
</body>
</html>