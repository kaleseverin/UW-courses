<?php

    // $_GET variables from search.php
    //$quarter
    //$name
	//$number


    function description($descriptionurl, $name, $number){
		$desc = file_get_html($descriptionurl);
		foreach($desc->find('p') as $para){
			if(strpos($para, $name . $number) !== false){
				echo $para;
				return true;
			}
		}
		return false;
    }


?>
