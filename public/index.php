<?php 
 
/*ini_set('memory_limit', '255');
echo ini_get('memory_limit'); //512M, luego del ini_set, se actualiza a 255 */

$app = include __DIR__ . '/../src/App/bootstrap.php';


$app -> run();

?>