
<?php
ob_start(); // Start the output buffer

echo "ok";

// Cache the contents to a file

$cached = fopen($cacheFile, 'w');

fwrite($cached, ob_get_contents());

fclose($cached);

ob_end_flush(); // Send the output to the browser

?>