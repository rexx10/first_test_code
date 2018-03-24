<?php
include "simple_html_dom.php" ;

$html = new simple_html_dom("https://ifun01.com/8H3ULFQ.html");
//<div class='title'>=
$main = $html->find('[span]');
print_r($main);
?>