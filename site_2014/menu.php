 	<div id="barraesquerda">
   	       <nav>
                <ul>
                 <li><a href="<?php echo $url; ?>/index.php">INICIO</a></li>
                 <li><a href="<?php echo $url; ?>/curriculo.php">CURRICULO</a></li>
                 <li><a href="<?php echo $url; ?>/games/index.php">JOGOS</a></li>
                 <?php 
				 if($menugame == "true"){
                 	 echo '<ul>';
                     echo '<li><a href="' . $url . '/games/game_parapente.php">Parapente</a></li>';
                     echo '<li><a href="' . $url . '/games/game_unha.php">Unhas</a></li>';
                     echo '<li><a href="' . $url . '/games/game_terreno_1.php">Editor1</a></li>';
                     echo '<li><a href="' . $url . '/games/game_terreno_2.php">Editor2</a></li>';
                     echo '<li><a href="' . $url . '/games/mundo_virtual1.php">Mundo Virtual1</a></li>';
                     echo '<li><a href="' . $url . '/games/mundo_virtual2.php">Mundo Virtual2</a></li>';
                 	 echo '</ul>';
                 }
				 ?>
                 <li><a href="<?php echo $url; ?>/alugo_ap/index.php">ALUGO AP</a></li>
                 <li><a href="<?php echo $url; ?>/vendo/index.php">VENDO</a></li>
                 <li><a href="https://www.youtube.com/channel/UC1nFOA6zm_XGbiO1xjFk9BQ" target="_blank">Voos do valente</a></li>
                </ul>
           </nav>
	</div>