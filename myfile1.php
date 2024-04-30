<?php
$filename = "myfile.txt";
$fd = fopen ($filename, "w"); 
fwrite($fd, "bohemian rhapsody");
fclose ($fd);
?> 