<?php
//test go
//$target = "http://www.webbotsspidersscreenscrapers.com/hello_world.html";

# Include http library
# Include libraries
include("LIB_parse.php");
include("LIB_http.php");

$web_page = http_get($target="http://www.fbi.gov",$referer="");
$meta_tag_array = parse_array($web_page["FILE"], "<meta", ">");

for($xx=0; $xx<count($meta_tag_array); $xx++){
	echo $meta_tag_array[$xx]."\n";
}


?>