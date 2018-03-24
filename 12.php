<?php


function get_tags($url) {
 
    $html = file_get_contents($url);
 
    @libxml_use_internal_errors(true);
    $dom = new DomDocument();
    $dom->loadHTML($html);
    $xpath = new DOMXPath($dom);
    $query = '//*/meta[starts-with(@property, \'og:\')]';
    $result = $xpath->query($query);
 
    foreach ($result as $meta) {
        $property = $meta->getAttribute('property');
        $content = $meta->getAttribute('content');
 
        // replace og
        $property = str_replace('og:', '', $property);
        $list[$property] = $content;
    }
    return $list;
}


$url = 'http://9bugs.in/google-url-shortener-api-usage-php-script-188';
$meta = get_tags($url);
 
echo $meta['locale'];
echo $meta['type'];
echo $meta['title'];
echo $meta['description'];
echo $meta['url'];
echo $meta['site_name'];
echo $meta

?>