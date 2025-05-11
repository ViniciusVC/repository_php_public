<?php

// capturar parametro ao chamar arquivo.
// c:> php for2.php

for ($contador = 1; $contador < 100; $contador++) {
    if ($contador % 2 !== 0) {
        echo $contador . "\n";
    }
}
