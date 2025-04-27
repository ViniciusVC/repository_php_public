            
<?Php
$SERVERNAME = $_SERVER['SERVER_NAME'];
$url = "http://" . $SERVERNAME;
$metaurl = $url . "/index.php";
$metaimagem =  $url . "/App_Themes/tumb_game.jpg";
$metadescre = "Site pessoal de Vinicius Valente.";
$menu = true;
$metatitle="site do Valente";
$inccabecalho = "cabecalho.php";
$incrodape = "rodape.php";
$menugame = "true";
echo "<!-- include ";
echo $inccabecalho;
echo "-->";


include($inccabecalho);
?>
				<h1>Bem vindo ao meu site pessoal.</h1>
				<p><a href="curriculo.php" target="_blank">Veja aqui meu curriculo</a></p>
				<p>O site está em construção mas você pode visitar alguns jogos que estou desenvolvendo:</p>
				<p><a href="games/game_parapente.php">game Parapente</a> </p>
				<p><a href="games/game_terreno_1.php">Editor de game 1</a></p>
				<p><a href="games/game_terreno_2.php">Editor de game 2</a></p>
				<p><a href="games/game_unha.php" >Pintar as unhas</a></p>
                

<?Php
echo "<!-- include ";
echo $incrodape;
echo "-->";        
 include($incrodape);
 ?>