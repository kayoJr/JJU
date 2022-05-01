<?php

 $source = "app/uploads/test1.pptx";
 $destination = "D:/tmpphp/test1.pptx";

 $data = file_get_contents($source);
 $file = fopen($destination, "w+");
 fputs($file, $data);
 fclose($file);

?>
