<?
$h1         = 'Buscar Tabela';
$title      = 'Buscar Tabela';
$desc       = 'Buscar Tabela';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var        = 'Buscar Tabela';
include('inc/head.php');
include('inc/fancy.php');
?>
<link rel="stylesheet" href="<?= $url; ?>/js/sweetalert/css/sweetalert.css"/>
<script src="<?= $url; ?>/js/sweetalert/js/sweetalert.min.js"></script>
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
                    
                    <input type="text" id="inputsearch" placeholder="Buscar..." class="busca" onkeypress="if(event.key === 'Enter'){SearchFunction();}">
                    <input type="button" onclick="SearchFunction();" value="Buscar" class="btn">
                    <input type="button" onclick="SearchFunction2(); document.getElementById('inputsearch').value=''" value="Limpar" class="btn">
                    
                    <br>
                    <br>
                    
                    
                    <div id="conta_resultado"></div>
                    <table class="tg" id="searchtable">
                        <tr class="tabela">
                            <th>Código</th>
                            <th>Produto</th>
                        </tr>
                        
                        <tr>
                            <td>1</td>
                            <td>Açaí</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Acerola</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Abacate</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Abacaxi</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Ameixa</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Amêndoa</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Amora</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Anona</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Araticum</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Babaço</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Banana</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Berinjela</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>Bacuripari</td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>Cajá</td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>Caju</td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td>Caqui</td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td>Cambuci</td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>Carambola</td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td>Cereja</td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td>Coco</td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>Cupuaçu</td>
                        </tr>
                        <tr>
                            <td>22</td>
                            <td>Cacau</td>
                        </tr>
                        <tr>
                            <td>23</td>
                            <td>Castanha do Pará</td>
                        </tr>
                        <tr>
                            <td>24</td>
                            <td>Damasco</td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td>Enbauba</td>
                        </tr>
                        <tr>
                            <td>26</td>
                            <td>Esfregadinha</td>
                        </tr>
                        <tr>
                            <td>27</td>
                            <td>Figo</td>
                        </tr>
                        <tr>
                            <td>28</td>
                            <td>Framboesa</td>
                        </tr>
                        <tr>
                            <td>29</td>
                            <td>Goiaba</td>
                        </tr>
                        <tr>
                            <td>30</td>
                            <td>Graviola</td>
                        </tr>
                        <tr>
                            <td>31</td>
                            <td>Groselha</td>
                        </tr>
                        <tr>
                            <td>32</td>
                            <td>Guaraná</td>
                        </tr>
                        <tr>
                            <td>33</td>
                            <td>Ingá</td>
                        </tr>
                        <tr>
                            <td>34</td>
                            <td>Jabuticaba</td>
                        </tr>
                        <tr>
                            <td>35</td>
                            <td>Jaca</td>
                        </tr>
                        <tr>
                            <td>36</td>
                            <td>Jambo</td>
                        </tr>
                        <tr>
                            <td>37</td>
                            <td>Jambolão</td>
                        </tr>
                        <tr>
                            <td>38</td>
                            <td>Laranja</td>
                        </tr>
                        <tr>
                            <td>39</td>
                            <td>Limão</td>
                        </tr>
                        <tr>
                            <td>40</td>
                            <td>Melancia</td>
                        </tr>
                        <tr>
                            <td>41</td>
                            <td>Melão</td>
                        </tr>
                        <tr>
                            <td>42</td>
                            <td>Maçã</td>
                        </tr>
                        <tr>
                            <td>43</td>
                            <td>Manga</td>
                        </tr>
                        <tr>
                            <td>44</td>
                            <td>Mamão</td>
                        </tr>
                        <tr>
                            <td>45</td>
                            <td>Maracujá</td>
                        </tr>
                        <tr>
                            <td>46</td>
                            <td>Marmelo</td>
                        </tr>
                        <tr>
                            <td>47</td>
                            <td>Mexerica</td>
                        </tr>
                        <tr>
                            <td>48</td>
                            <td>Mirtilo</td>
                        </tr>
                        <tr>
                            <td>49</td>
                            <td>Morango</td>
                        </tr>
                        <tr>
                            <td>50</td>
                            <td>Nectarina</td>
                        </tr>
                        <tr>
                            <td>51</td>
                            <td>Noni</td>
                        </tr>
                        <tr>
                            <td>52</td>
                            <td>Pinha</td>
                        </tr>
                        <tr>
                            <td>53</td>
                            <td>Pequi</td>
                        </tr>
                        <tr>
                            <td>54</td>
                            <td>Pera</td>
                        </tr>
                        <tr>
                            <td>55</td>
                            <td>Pêssego</td>
                        </tr>
                        <tr>
                            <td>56</td>
                            <td>Pitanga</td>
                        </tr>
                        <tr>
                            <td>57</td>
                            <td>Pitaia</td>
                        </tr>
                        <tr>
                            <td>58</td>
                            <td>Quiuí</td>
                        </tr>
                        <tr>
                            <td>59</td>
                            <td>Romã</td>
                        </tr>
                        <tr>
                            <td>60</td>
                            <td>Sapoti</td>
                        </tr>
                        <tr>
                            <td>61</td>
                            <td>Tamarindo</td>
                        </tr>
                        <tr>
                            <td>62</td>
                            <td>Tangerina</td>
                        </tr>
                        <tr>
                            <td>63</td>
                            <td>Tomate</td>
                        </tr>
                        <tr>
                            <td>64</td>
                            <td>Umbu</td>
                        </tr>
                        <tr>
                            <td>65</td>
                            <td>Uva</td>
                        </tr>
                        <tr>
                            <td>66</td>
                            <td>Uva verde</td>
                        </tr>
                    </table>
                    <br class="clear">
                </article>
            </section>
        </div>
    </main>
    </div><!-- .wrapper -->
    <? include('inc/footer.php');?>
    <script>
    function SearchFunction() {
    var input, filter, table, tr, td, i;
    input = document.getElementById("inputsearch");
    filter = input.value.toUpperCase().trim();
    table = document.getElementById("searchtable");
    tr = table.getElementsByTagName("tr");
    cont = 0;
    for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    td2 = tr[i].getElementsByTagName("td")[1];
    if (td) {
    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
    tr[i].style.display = "";
    cont = cont + 1 ;
    }
    else if (td2.innerHTML.toUpperCase().indexOf(filter) > -1) {
    tr[i].style.display = "";
    cont = cont + 1 ;
    }
    else {
    tr[i].style.display = "none";
    }
    }
    }
    
    if (((tr.length - 1) != (cont)) && (cont > 0)) {
    
    document.getElementById("conta_resultado").innerHTML = '<h2>Encontramo(s) '+cont+' resultado(s) por: '+input.value+'</h2>';
    }
    
    if ((tr.length - 1) == (cont)){
    swal({title: "Digite alguma coisa para buscar...",
    showCancelButton: false,
    confirmButtonClass: "btn-success",
    confirmButtonText: "Ok",
    closeOnConfirm: true});
    document.getElementById("conta_resultado").innerHTML = '';
    document.getElementById('inputsearch').value='';
    } else if (cont == 0) {
    
    swal({title: "Desculpe, não encontramos nenhum resultado por: "+input.value,
    showCancelButton: false,
    confirmButtonClass: "btn-success",
    confirmButtonText: "Ok",
    closeOnConfirm: true});
    table = document.getElementById("searchtable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
    tr[i].style.display = "";
    }
    document.getElementById('inputsearch').value='';
    document.getElementById("conta_resultado").innerHTML = '';
    }
    document.getElementById('inputsearch').focus();
    
    }
    function SearchFunction2() {
    
    table = document.getElementById("searchtable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
    tr[i].style.display = "";
    }
    document.getElementById('inputsearch').focus();
    document.getElementById("conta_resultado").innerHTML = '';
    }
    </script>
</body>
</html>