<?php
 $dir = new DirectoryIterator('.');
  foreach ($dir as $fileinfo) {     
     echo $fileinfo->getFilename() . '<br>';
   }
?>
