<?php

$prod_dir = $_GET['prod_dir'];
$ds = DIRECTORY_SEPARATOR;

if( file_exists(getcwd() .$ds. $prod_dir) ) {
  
  foreach( glob(getcwd() .$ds. $prod_dir .$ds. '*.jpg') as $i => $jpg_file) { // trailing spaces and productsMENU are hardcoded..
?>
          <div><img alt="<?=basename($jpg_file, '.jpg')?>" class="prod_thumb i<?=$i?>" src="productMENU/<?=$prod_dir.'/'.basename($jpg_file)?>" align="middle" /></div>
<?php
  }
  
} else { echo 'under construction'; exit(); }

?>