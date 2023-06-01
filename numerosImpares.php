// Executar programa que exiba todos os números impares de 0 a 100

<?php

for ($contador = 1; $contador < 100; $contador++) {
  if ($contador % 2 != 0) {
    echo $contador . PHP_EOL;
  }
}