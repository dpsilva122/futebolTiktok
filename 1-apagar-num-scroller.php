<?
$h1         = 'Num Scroller';
$title      = 'Num Scroller';
$desc       = 'Num Scroller';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var        = 'Num Scroller';
include('inc/head.php');
include('inc/fancy.php');
?>
<script src="<?=$url?>js/numscroller-1.0.js"></script>

</head>
<body>
<? include('inc/topo.php');?>
<main>
    <div class="content">
        <section>
            <div class="wrapper">
                <?=$caminho?>
                <h1><?=$h1?></h1>
            </div>
            <article class="full">
                <div class="wrapper">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor incidunt non pariatur accusantium, reiciendis dolorum nisi. Deleniti ea dolore culpa vero perspiciatis quasi id, voluptate harum, iste magni perferendis obcaecati.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor incidunt non pariatur accusantium, reiciendis dolorum nisi. Deleniti ea dolore culpa vero perspiciatis quasi id, voluptate harum, iste magni perferendis obcaecati.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor incidunt non pariatur accusantium, reiciendis dolorum nisi. Deleniti ea dolore culpa vero perspiciatis quasi id, voluptate harum, iste magni perferendis obcaecati.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor incidunt non pariatur accusantium, reiciendis dolorum nisi. Deleniti ea dolore culpa vero perspiciatis quasi id, voluptate harum, iste magni perferendis obcaecati.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor incidunt non pariatur accusantium, reiciendis dolorum nisi. Deleniti ea dolore culpa vero perspiciatis quasi id, voluptate harum, iste magni perferendis obcaecati.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor incidunt non pariatur accusantium, reiciendis dolorum nisi. Deleniti ea dolore culpa vero perspiciatis quasi id, voluptate harum, iste magni perferendis obcaecati.</p>
                    <h2>Options</h2>
                    <p>The tag with 'numscroller' class can have below attributes to customize the behaviour,</p>
                    <table class="tg">
                        <tr>
                            <td>data-min</td>
                            <td>Start number for increment rolling</td>
                        </tr>
                        <tr>
                            <td>data-max</td>
                            <td>End number for increment rolling</td>
                        </tr>
                        <tr>
                            <td>data-increment</td>
                            <td>Increment by value for each rolling</td>
                        </tr>
                        <tr>
                            <td>data-delay</td>
                            <td>Total seconds to complete the number increment rolling</td>
                        </tr>
                    </table>
                    <br><br>
                </div>
                <div class="conteudo-index">
                    <div class="wrapper">
                        <div class="col-4 txtcenter">
                            <h2>Contador 1</h2>
                            <h3 class='numscroller' data-min='1' data-max='1000' data-delay='10' data-increment='10'>1000</h3>
                        </div>
                        <div class="col-4 txtcenter">
                            <h2>Contador 2</h2>
                            <h3 class='numscroller' data-min='1' data-max='5000' data-delay='10' data-increment='10'>5000</h3>
                        </div>
                        <div class="col-4 txtcenter">
                            <h2>Contador 3</h2>
                            <h3 class='numscroller' data-min='1' data-max='10000' data-delay='10' data-increment='10'>10000</h3>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <br class="clear">
            </article>
        </section>
    </div>
</main>
<? include('inc/footer.php');?>

</body>
</html>