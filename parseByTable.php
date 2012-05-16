<?php
    function parseByTable($urlCourse){
    $ch = curl_init ($urlCourse);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$page = curl_exec($ch);


	$link = file_get_contents($urlCourse);
	preg_match_all('#<table[^>]*>(.+?)</table>#is', $link, $matches);
    return $matches;
}
?>
